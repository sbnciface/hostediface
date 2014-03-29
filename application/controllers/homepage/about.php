<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MY_Controller {
	public function index()
	{
		$this->template->set_directory('home');
		$this->template->display('main');
	}
}
