<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['homepage'] = 'active';
		$this->load->view('homepage', $data);
	}

	function menu1()
	{
		$data['menu1'] = 'active';
		$this->load->view('menu1', $data);
	}

	function menu2()
	{
		$data['menu2'] = 'active';
		$this->load->view('menu2', $data);
	}

	function menu3()
	{
		$data['menu3'] = 'active';
		$this->load->view('menu3', $data);
	}

}