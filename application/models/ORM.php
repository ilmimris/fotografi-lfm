<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class ORM extends CI_Model {
	
	protected $table;

	protected $contract;

	public function __construct(){
		parent::__construct();

		$this->load->database(); 
		$this->load->library('UUID');
	}

	protected function _find_query($filter) {
		$this->db->where($filter);
		return $this->db->get($this->table);
	} 

	protected function _filter_property($obj) {
		$data = new stdClass;

		foreach ($obj as $key => $value) if (($key=='id') || in_array($key, $this->contract)) {
			$data->{$key} = $value;
		}

		return $data;
	}

	protected function _create_object($_ORM, $_data) {
		return new ORM_Object($_ORM, $_data);
	}
	
	public function find($filter = array()){
		return $this->_find_query($filter)->result();
	}


	public function save(&$obj) {

		$db_debug = $this->db->db_debug;
		$this->db->db_debug = FALSE;

		if (isset($obj->__new__)){
			unset($obj->__new__);

			$data = $this->_filter_property($obj);
			if ($data->id == "") $data->id = $this->uuid();
			$this->db->insert($this->table, $data);

			return $data->id;

		} else {

			$data = $this->_filter_property($obj);
			$this->db->update($this->table, $data, ["id"=>$data->id]);
		
			return $data->id;
		}

		$this->db->db_debug = $db_debug;
	}

	public function delete($data) {
		$this->db->delete($this->table, ["id"=>$data->id]);
		return $this->db->affected_rows();
	}

	public function findOne($filter = array()){
		$result = $this->find($filter);

		if (empty($result))
			return false;
		else
			return $this->_create_object($this, $result[0]);
	}

	public function findById($id) {
		return $this->findOne([$this->table . ".id" => $id]);
	}

	public function all() {
		return $this->find();
	}

	public function create() {
		$data = array();
		foreach ($this->contract as $field) {
			$data[$field] = '';
		}

		$object = $this->_create_object($this, $data);
		$object->__new__ = true;

		return $object;
	}

	public function uuid(){
		return str_replace("-","",$this->uuid->v4());
	}

}

class ORM_Object {
	
	protected $Model;

	public function __construct($_ORM, $_data) {
		$this->Model = $_ORM;

		foreach ($_data as $key => $value)
			$this->{$key} = $value;
	}

	public function save(){
		return $this->Model->save($this);
	}

	public function delete(){
		return $this->Model->delete($this);
	}

}