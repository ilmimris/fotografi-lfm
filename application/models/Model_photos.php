<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_photos extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $tabel = 'photos';

  protected $kontrak = ["id", "title", "caption", "gear", "location", "other", "photo"];

  protected function _find_query($filter){
    $this->db->select(["photos.*","users.first_name","users.last_name"]);
    $this->db->join("users", "photos.user_id=users.id", "left");
    $this->db->order_by("photos.created", "desc"); 

    $this->db->where($filter);
    return $this->db->get($this->tabel);
  }
}