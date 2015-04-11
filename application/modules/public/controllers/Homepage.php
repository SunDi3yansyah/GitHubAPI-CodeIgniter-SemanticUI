<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$user = 'SunDi3yansyah';
		$token = '013bd32b2c4b186b072c98a98b84b3cb6e149f84';
		$curl_url = 'https://api.github.com/users/' . $user . '/repos';
		$curl_token_auth = 'Authorization: token ' . $token;
		$ch = curl_init($curl_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('User-Agent: Awesome-Octocat-App', $curl_token_auth));
		$get_json = curl_exec($ch); 
		curl_close($ch);
		$data = array(
			'output' => json_decode($get_json)
			);
		$this->load->view('homepage', $data);
	}

}
