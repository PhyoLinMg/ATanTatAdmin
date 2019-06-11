<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\RepoInterface;
use App\Major;
class MajorModel implements RepoInterface{
	public function find($id){

	}
	public function save($request){
		$major=Major::create([
			'name'=>$request->name,
			'year'=>$request->year
		]);
		$major->save();

	}
	public function update($id,$request){
	
		$major=Major::findOrFail($id);
		$major->name=$request->name;
		$major->year=$request->year;
		$major->save();

	}
	public function delete($id){

	}
}
?>