<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_dk extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'dk';

  protected $contract = ["id", "title", "month", "description", "cover", "elite1", "elite2", "elite3", "elite4","all1","all2","all3","all4","all5","all6","all7","all8","all9","all10","all11","all12","all13","all14","all15","all16"];
  
}