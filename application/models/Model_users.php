<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_users extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $table = 'users';

  protected $contract = ["id", "first_name", "last_name", "email"];

}