<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\MajorInterface;
use App\Major;
class MajorModel implements MajorInterface{
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

	}
	public function delete($id){

	}
}
?>