<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('v_home');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */