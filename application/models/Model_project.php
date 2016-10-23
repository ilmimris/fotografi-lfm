<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_project extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'projects';
  protected $contract = ["id", "title", "year", "description", "group_id", "link"];

  protected function _find_query($filter){
    $this->db->select(["projects.*","projects_groups.title as group_title"]);
    $this->db->join("projects_groups", "projects.id=projects_groups.id", "left");

    $this->db->where($filter);
    return $this->db->get($this->table);
  }

  public function findByUserId($id) {
    $query = "SELECT * FROM `projects` WHERE `projects`.`id` IN (SELECT `project_id` FROM `projects_contributors` WHERE user_id = ?)";
    $ci_query = $this->db->query($query, [$id]);

    return $ci_query->result();
  }
}