<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fotografi extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->helper(array('url','language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

		$this->lang->load('auth');
	}

	public function index()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$data['title'] = 'Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('pom', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('pom', $data);
			$this->load->view('footer');
		}
		else
		{
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->load->view('auth/index', $this->data);
		}
	}
	public function photos()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$data['title'] = 'Photos | Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('photo', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Photos | Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('photo', $data);
			$this->load->view('footer');
		}
		else
		{
			// set the flash data error message if there is one
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

			//list the users
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->load->view('auth/index', $this->data);
		}
	}
	public function dk()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$data['title'] = 'Dinding Karya | Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('dk', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Dinding Karya | Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('dk', $data);
			$this->load->view('footer');
		}
		else
		{
			// Super Admin
		}
	}

}
