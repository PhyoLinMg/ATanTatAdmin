<?php 

namespace App\Repositories\Interfaces;

interface MajorInterface{
	public function find($id);
	public function save($request);
	public function update($id,$request);
	public function delete($id);
}
?>