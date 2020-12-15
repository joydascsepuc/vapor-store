<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function welcome(){
		/*For the Login Page First*/
		$name['name'] = 'Home';
		$this->load->view('templates/header',$name);
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */