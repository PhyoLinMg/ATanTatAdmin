<?php 
namespace App\Repositories\Interfaces;

interface RepoInterface{
	public function find($id);
	public function save($request);
	public function update($id,$request);
	public function delete($id);
}

?>