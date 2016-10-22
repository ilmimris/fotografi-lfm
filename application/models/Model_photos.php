<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!class_exists('ORM')) require APPPATH . '/models/ORM.php';


class Model_sessions extends ORM {

  public function __construct(){
    parent::__construct();
  }

  protected $tabel = 'photos';

  protected $kontrak = ["id", "title", "caption", "gear", "location", "other", "photo"];

}