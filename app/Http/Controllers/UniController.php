<?php

namespace App\Http\Controllers;

use App\Uni;
use Illuminate\Http\Request;
use App\Repositories\Model\UniModel;

class UniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        protected $uni;
    public function __construct(UniModel $uni){
        $this->uni=$uni;
       $this->middleware(['auth','role:admin']);
   }

    public function index()
    {
        $unis=Uni::paginate(5);
        return view('admin.uni.index',compact('unis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.uni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->uni->save($request);
        return redirect('/unis');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Uni  $uni
     * @return \Illuminate\Http\Response
     */
    public function show(Uni $uni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Uni  $uni
     * @return \Illuminate\Http\Response
     */
    public function edit(Uni $uni)
    {
        return view('admin.uni.edit',compact('uni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Uni  $uni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Uni $uni)
    {
        $this->uni->update($uni->id,$request);
        return redirect('/unis');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Uni  $uni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Uni $uni)
    {
         $this->uni->delete($uni->id);
        return redirect('/unis');
    }
}
