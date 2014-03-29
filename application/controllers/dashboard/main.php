<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		$this->template->set_directory('dash');
		$this->template->display('login');
	}
}