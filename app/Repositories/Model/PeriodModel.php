<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\RepoInterface;
use App\Period;
class PeriodModel implements RepoInterface{
	public function find($id){

	}
	public function save($request){

		$period=Period::create([
			'subject_id'=>$request->subject_id,
			'major_id'=>$request->major_id,
			'start_time'=>$request->start,
			'end_time'=>$request->end
		]);
		$period->save();
	}
	public function update($id,$request){
		$period=Period::findOrFail($id);
		$period->subject_id=$request->subject_id;
		$period->major_id=$request->major_id;
		$period->start_time=$request->start;
		$period->end_time=$request->end;
		$period->save();
	}
	public function delete($id){

	}
}
?>