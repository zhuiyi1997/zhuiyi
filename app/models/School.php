<?php
namespace app\models;
use framework\core\Model;
class School extends Model{
	public $table = 'school';

	public function lists()
	{
		$ret = $this->select($this->table,'*');
		return $ret;
	}

	public function getOne($condition)
	{
		$ret =$this->get($this->table,'*',$condition);
		return $ret;
	}

	public function setOne($condition,$data)
	{
		return $this->update($this->table,$data,$condition);
	}

	public function delOne($condition)
	{
		return $this->delete($this->table,$condition);
	}
}