<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_project extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'projects';
  protected $contract = ["id", "title", "description", "link"];

  protected function _find_query($filter){
    $this->db->select(["photos.*","users.first_name","users.last_name"]);
    $this->db->join("users", "photos.user_id=users.id", "left");
    $this->db->order_by("photos.created", "desc"); 

    $this->db->where($filter);
    return $this->db->get($this->table);
  }

  protected function findByUserId($id) {
    $query = "SELECT * FROM `projects` WHERE `projects`.`id` IN (SELECT `project_id` FROM `projects_contributors` WHERE user_id = ?)";
    $ci_query = $this->db->query($query, [$id]);

    return $ci_query->result();
  }
}