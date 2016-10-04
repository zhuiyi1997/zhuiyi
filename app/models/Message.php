<?php
namespace app\models;
use framework\core\Model;
class Message extends Model{
	public $table = 'message';

	public function lists($condition=array())
	{
		$ret = $this->select($this->table,'*',$condition);
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