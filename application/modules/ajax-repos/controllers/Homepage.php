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
		$this->CI->config->load('config_custom_test');
	}

	function index()
	{
		$data['repo'] = 'https://github.com/'.$this->CI->config->item('github_username').'/GitHubAPI-CodeIgniter-SemanticUI/tree/master/application/modules/ajax-repos';
		$data['title'] = 'Ajax List Repository on GitHub #CodeIgniter #SemanticUI - '.$this->CI->config->item('github_username').'';
		$this->load->view('homepage', $data);
	}

}