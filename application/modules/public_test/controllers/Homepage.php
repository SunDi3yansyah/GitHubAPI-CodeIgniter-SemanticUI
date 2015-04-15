<?php defined('BASEPATH') OR exit('No direct script access allowed');
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
		$data = array(
			'repos' => $this->_repos()
			);
		$this->load->view('homepage', $data);
	}

	function _repos()
	{
		$user = $this->CI->config->item('github_username');
		$token = $this->CI->config->item('token');
		$curl_url = 'https://api.github.com/users/' . $user . '/repos';
		$curl_token_auth = 'Authorization: token ' . $token;
		$ch = curl_init($curl_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $curl_token_auth));
		$get_json = curl_exec($ch); 
		curl_close($ch);
		return json_decode($get_json);
	}

}
