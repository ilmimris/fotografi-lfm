<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_profile extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'users_profile';

  protected $contract = ["id", "jurusan", "angkatan", "angkatan_lfm", "email_alternatif", "foto", "instagram", "issuu"];

  protected function _find_query($filter){
    $this->db->select(["users_profile.*","users.first_name","users.last_name","users.email","users.username"]);
    $this->db->join("users", "users_profile.id=users.id", "left");

    $this->db->where($filter);
    return $this->db->get($this->table);
  }
  
}