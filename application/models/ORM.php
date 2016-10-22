<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class ORM extends CI_Model {
	
	protected $tabel;

	protected $kontrak;

	public function __construct(){
		parent::__construct();

		$this->load->database(); 
		$this->load->library('UUID');
	}
	
	public function find($filter = array(), $special_filter = array()){
		$this->db->where($filter);
		if (count($special_filter) > 0) {
			foreach ($special_filter as $special_filter_item) {
				$this->db->where($special_filter_item, NULL, false);
			}
		}

		$query = $this->db->get($this->tabel);

		return $query->result();
	}

	public function save($data) {
		$db_debug = $this->db->db_debug;
		$this->db->db_debug = FALSE;

		if (isset($data->__new__)){
			unset($data->__new__);

			if ($data->id == "") $data->id = $this->uuid();
			$status = $this->db->insert($this->tabel, $data);
		} else {
			$status = $this->db->update($this->tabel, $data, ["id"=>$data->id]);
		}

		$this->db->db_debug = $db_debug;

		return $status || $this->db->display_error();
	}

	public function delete($data) {
		$this->db->delete($this->tabel, ["id"=>$data->id]);
		return $this->db->affected_rows();
	}

	public function findOne($filter = array()){
		$result = $this->find($filter);

		if (empty($result))
			return false;
		else
			return new ORM_Object($this, $result[0]);
	}

	public function findById($id) {
		return $this->findOne(["id" => $id]);
	}

	public function all() {
		return $this->find();
	}

	public function new() {
		$data = array();
		foreach ($this->kontrak as $field) {
			$data[$field] = '';
		}

		$object = new ORM_Object($this, $data);
		$object->__new__ = true;

		return $object;
	}

	public function uuid(){
		return str_replace("-","",$this->uuid->v4());
	}

}

class ORM_Object {
	
	private $Model;

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