<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class ApiAuthController extends Controller
{
    //
    public function login(Request $request){
    	$request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'uni_id'=>'required|integer',
            'major_id'=>'required|integer',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if(!Auth::attempt($credentials))
            return response()->json([
                'access_token' => '',
                'token_type' => '',
                'expires_at' =>'',
                'message' => 'Unauthorized'
            ], 401);

        $user = $request->user();

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);

        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString(),
            'message'=>'success'
        ]);
    }
    public function signup(Request $request){
      $request->validate([
        'name' => 'required|string',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|string|confirmed',
        'uni_id'=>'required|integer',
        'major_id'=>'required|integer'
    ]);

      $user = new User([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'role'=>'user',
        'uni_id'=>$request->uni_id,
        'major_id'=>$request->major_id
    ]);


      $user->save();

      return response()->json([
        'message' => 'Successfully created user!',
    ], 201);
  }
  public function logout(){

    $request->user()->token()->revoke();

    return response()->json([
        'message' => 'Successfully logged out'
    ]);
}
}
