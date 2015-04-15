<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @package		GitHubAPI-CodeIgniter-SemanticUI
 * @author		Cahyadi Triyansyah (http://sundi3yansyah.com)
 * @version		0.1
 * @license		MIT
 */

class Homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->CI =& get_instance();
		$this->CI->config->load('config_custom');
	}

	function index()
	{
		$data['repo'] = 'https://github.com/'.$this->CI->config->item('github_username').'/GitHubAPI-CodeIgniter-SemanticUI/tree/master/application/modules/menu-version-1';
		$data['homepage'] = 'active';
		$this->load->view('homepage', $data);
	}

	function menu1()
	{
		$data['repo'] = 'https://github.com/'.$this->CI->config->item('github_username').'/GitHubAPI-CodeIgniter-SemanticUI/tree/master/application/modules/menu-version-1';
		$data['menu1'] = 'active';
		$this->load->view('menu1', $data);
	}

	function menu2()
	{
		$data['repo'] = 'https://github.com/'.$this->CI->config->item('github_username').'/GitHubAPI-CodeIgniter-SemanticUI/tree/master/application/modules/menu-version-1';
		$data['menu2'] = 'active';
		$this->load->view('menu2', $data);
	}

	function menu3()
	{
		$data['repo'] = 'https://github.com/'.$this->CI->config->item('github_username').'/GitHubAPI-CodeIgniter-SemanticUI/tree/master/application/modules/menu-version-1';
		$data['menu3'] = 'active';
		$this->load->view('menu3', $data);
	}

}