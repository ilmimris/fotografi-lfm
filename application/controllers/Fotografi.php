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
		$this->load->model('model_photos');
		$photos = $this->model_photos->find(['type'=>0]);

		$data['photos'] = $photos;

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

	public function photo_detail($id = ""){

		if ($id == "") return show_404();

		$this->load->model('model_photos');
		$photo = $this->model_photos->findById($id);

		echo json_encode($photo);

	}

	public function photo_add() {
		
		if (!$this->ion_auth->logged_in()) return show_404();

		$this->load->library('UUID');

		$config['upload_path'] = FCPATH . 'assets/img/users_content/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->uuid->v4();
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('file')) {

			$response = array('status'=>'error', 'error' => $this->upload->display_errors());

		} else {

			$metadata = $this->input->post();
			$this->load->model('model_photos');
			
			$uploaded = $this->upload->data();

			if(exif_imagetype($config['upload_path'].$uploaded['file_name']) == IMAGETYPE_JPEG) {

			    $fullpath = $config['upload_path'].$uploaded['file_name'];
			    $this->_jpeg_progressive($fullpath);

			}

			$this->_create_thumbnail($config['upload_path'], $uploaded['file_name']);

			$photo = $this->model_photos->create();
			$photo->title = $metadata['title'];
			$photo->user_id = $this->ion_auth->get_user_id();
			$photo->caption = $metadata['caption'];
			$photo->gear = $metadata['gear'];
			$photo->location = $metadata['location'];
			$photo->other = $metadata['other'];
			$photo->photo = $uploaded['file_name'];

			if (isset($metadata['type'])) $photo->type = $metadata['type'];

			$photo->id = $photo->save();

			$response = array('status'=>'ok', 'photo' => $photo);
		}
		
		echo json_encode($response);

	}

	public function _jpeg_progressive($fullpath){
		$this->load->library('jpegtranlib');

		$options = array (
			'optimize'    => TRUE,
			'progressive' => TRUE,
		);

		$this->jpegtranlib->modify($fullpath, $options);
	}

	public function _create_thumbnail($path, $filename) {
	    $source_path = $path . $filename;
	    $target_path = $path . '_thumb/' . $filename;
	    $config = array(
	        'image_library' => 'gd2',
	        'source_image' => $source_path,
	        'new_image' => $target_path,
	        'maintain_ratio' => TRUE,
	        'height' => 300
	    );
	    $this->load->library('image_lib', $config);
	    if (!$this->image_lib->resize()) {
        	echo $this->image_lib->display_errors();
    	}
    	$this->image_lib->clear();
	}

	public function dk()
	{
		$this->load->model('model_dk');
		$dks = $this->model_dk->all();

		$data['dks'] = $dks;

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
			$data['title'] = 'Dinding Karya | Fotografi LFM';
			$data['islogin'] = 2; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('upload_dk', $data);
			$this->load->view('footer');
		}
	}
	public function dk_detail($id = ""){

		if ($id == "") return show_404();

		$this->load->model('model_dk');
		$this->load->model('model_photos');
		
		$dk = $this->model_dk->findById($id);

		$photos_key = ["elite1","elite2","elite3","elite4","all1","all2","all3","all4","all5","all6","all7","all8","all9","all10","all11","all12","all13","all14","all15","all16"];

		$photos = new stdClass();
		foreach ($photos_key as $photo_key) {
			$photos->{$photo_key} = $this->model_photos->findById($dk->{$photo_key});
		}
		$dk->photos = $photos;

		echo json_encode($dk);

	}
	public function contact()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$data['title'] = 'Contact Us | Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('contact', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Contact Us | Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('contact', $data);
			$this->load->view('footer');
		}
		else
		{
			// Super Admin
		}
	}

	public function dk_add() {
		
		if (!$this->ion_auth->logged_in()) return show_404();

		$this->load->library('UUID');

		$config['upload_path'] = FCPATH . 'assets/img/users_content/';
		$config['allowed_types'] = 'jpg|png';
		$config['file_name'] = $this->uuid->v4();
		
		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('cover')) {

			$response = array('status'=>'error', 'error' => $this->upload->display_errors());

		} else {

			$metadata = $this->input->post();
			$this->load->model('model_dk');
			
			$uploaded = $this->upload->data();

			$dk = $this->model_dk->create();
			foreach ($metadata as $key => $metadata_element) {
				echo($key . ":" . $metadata_element);
				$dk->{$key} = $metadata_element;
			}
			$dk->cover = $uploaded['file_name'];

			$dk->id = $dk->save();

			$response = array('status'=>'ok', 'dk' => $dk);
		}
		
		echo json_encode($response);

	}


	public function project()
	{
		$this->load->model('model_project');
		$projects = $this->model_project->all();

		$data['projects'] = $projects;

		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			$data['title'] = 'Project | Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('project', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Project | Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('project', $data);
			$this->load->view('footer');
		}
		else
		{
			// Super Admin
		}
	}
	public function project_detail($id = ""){

		if ($id == "") return show_404();

		$this->load->model('model_project');
		$this->load->model('model_profile');
		$project = $this->model_project->findById($id);
		$project->contributors = [];

		$contributors_id = $project->findContributors();

		foreach ($contributors_id as $contributor_id) {
			$project->contributors[] = $this->model_profile->findById($contributor_id->user_id);
		}

		echo json_encode($project);

	}

	public function contributor()
	{
		$this->load->model("model_profile");
		$contributors = $this->model_profile->find(['active'=>1]);

		$data['contributors'] = $contributors;

		$data['title'] = 'Contributor | Fotografi LFM';
		$data['islogin'] = $this->ion_auth->logged_in();
		$this->load->view('header', $data);
		$this->load->view('contributor', $data);
		$this->load->view('footer');
	}
	public function profile($id = "")
	{
		if ($id == "") return show_404();

		$this->load->model("model_profile");
		$profile = $this->model_profile->findById($id);
		if ($profile === false) return show_404();
		$data['profile'] = $profile;

		$this->load->model("model_photos");
		$photos = $this->model_photos->find(['user_id' => $id]);
		$data['photos'] = $photos;

		$this->load->model("model_project");
		$projects = $this->model_project->findByUserId($id);
		$data['projects'] = $projects;

		$data['title'] = 'Profile | Fotografi LFM';
		$data['islogin'] = $this->ion_auth->logged_in();
		$this->load->view('header', $data);
		$this->load->view('profile', $data);
		$this->load->view('footer');
	}
	public function edit_profile()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			// For development
			$data['title'] = 'Edit Profile | Fotografi LFM';
			$data['islogin'] = 0; // Belum Login
			$this->load->view('header', $data);
			$this->load->view('editprofile', $data);
			$this->load->view('footer');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			$data['title'] = 'Edit Profile | Fotografi LFM';
			$data['islogin'] = 1; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('editprofile', $data);
			$this->load->view('footer');
		}
		else
		{
			// Super Admin
		}
	}
	public function upload_pom()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			return show_error('You must be an administrator to view this page.');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			// Super Admin
			$data['title'] = 'Edit POM | Fotografi LFM';
			$data['islogin'] = 2; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('upload_pom', $data);
			$this->load->view('footer');
		}
	}
	public function upload_project()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			return show_error('You must be an administrator to view this page.');
		}
		elseif (!$this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
			return show_error('You must be an administrator to view this page.');
		}
		else
		{
			// Super Admin
			$data['title'] = 'Edit POM | Fotografi LFM';
			$data['islogin'] = 2; // Login Sebagai user biasa
			$this->load->view('header', $data);
			$this->load->view('upload_project', $data);
			$this->load->view('footer');
		}
	}
}
