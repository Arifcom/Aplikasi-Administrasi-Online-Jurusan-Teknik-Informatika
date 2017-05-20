<?php

class Errors extends CI_Controller {

	public function index()
	{
		$this->load->view('not-found');
	}
}