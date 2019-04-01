<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$pages['page'] = $this->load->view('pages/home','',true);
		$this->load->view('master',$pages);
	}
}
