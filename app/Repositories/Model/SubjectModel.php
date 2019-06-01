<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\SubjectInterface;
use App\Subject;

class SubjectModel implements SubjectInterface{

	public function find($id){
		return Subject::find($id);
	}
	public function save($request){
		$subject=Subject::create([
			'name'=>$request->name
		]);
		$subject->save();

	}
	public function update($id,$request){

	}
	public function delete($id){

	}
}
?>