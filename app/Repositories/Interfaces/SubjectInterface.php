<?php 

namespace App\Repositories\Interfaces;

interface SubjectInterface{
	public function find($id);
	public function save($request);
	public function update($id,$request);
	public function delete($id);
}
?>