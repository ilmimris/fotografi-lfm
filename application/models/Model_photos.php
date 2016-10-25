<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_photos extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'photos';

  protected $contract = ["id", "user_id", "title", "caption", "gear", "location", "other", "photo", "type"];

  protected function _find_query($filter){
    $this->db->select(["photos.*","users.first_name as author"]);
    $this->db->join("users", "photos.user_id=users.id", "left");
    $this->db->order_by("photos.created", "desc"); 

    $this->db->where($filter);
    return $this->db->get($this->table);
  }
}