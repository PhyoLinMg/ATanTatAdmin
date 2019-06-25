<?php 
namespace App\Repositories\Model;
use App\Repositories\Interfaces\RepoInterface;
use App\Uni;
class UniModel implements RepoInterface{
	public function find($id){

	}
	public function save($request){
		$uni=Uni::create([
			'name'=>$request->name,
			
		]);
		$uni->save();

	}
	public function update($id,$request){
	
		$uni=Uni::findOrFail($id);
		$uni->name=$request->name;
		$uni->save();

	}
	public function delete($id){
		Uni::destroy($id);
	}
}
?>