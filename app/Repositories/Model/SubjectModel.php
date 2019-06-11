<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\RepoInterface;
use App\Subject;

class SubjectModel implements RepoInterface{

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