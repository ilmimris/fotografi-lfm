<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_pom extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'pom';

  protected $contract = ["id", "bulan", "gambar1", "gambar2", "gambar3"];

  protected function getLatest(){
  	$query = "SELECT * FROM `pom` ORDER BY `pom`.`waktu` DESC";
    $ci_query = $this->db->query($query);

    return $ci_query->result();
  }
  
}