<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(

        'update_profile' => array(
                array(
                        'field' => 'fullname',
                        'label' => 'Full Name',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'email',
                        'label' => 'Email',
                        'rules' => 'required|valid_email'
                ),
                array(
                        'field' => 'jurusan',
                        'label' => 'Field Of Study',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'angkatan_lfm',
                        'label' => 'LFM Batch',
                        'rules' => 'required|Number'
                ),
                array(
                        'field' => 'email_alternatif',
                        'label' => 'LFM Batch',
                        'rules' => 'valid_email'
                ),
                array(
                        'field' => 'angkatan_lfm',
                        'label' => 'LFM Batch',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'username',
                        'label' => 'Username',
                        'rules' => 'required'
                ),
                array(
                        'field' => 'ulangi_password',
                        'label' => 'LFM Batch',
                        'rules' => 'matches[password]'
                )
        )

);