<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_pom extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'pom';

  protected $contract = ["id", "bulan", "gambar1", "gambar2", "gambar3"];
  
}