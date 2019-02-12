<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package		GitHubAPI-CodeIgniter-SemanticUI
 * @author		Cahyadi Triyansyah (http://sundi3yansyah.com)
 * @version		0.1
 * @license		MIT
 */

/*
|--------------------------------------------------------------------------
| Your Token APP from GitHub
| See more: https://github.com/SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI/blob/master/README.md
|--------------------------------------------------------------------------
*/

$config['token'] = getenv('PERSONAL_ACCESS_TOKEN');

/*
|--------------------------------------------------------------------------
| Main Configuration
|--------------------------------------------------------------------------
*/

$config['website_name'] = 'Cahyadi Triyansyah';
$config['about'] = 'My name is Cahyadi Triyansyah (SunDi3yansyah) from Yogyakarta, Indonesia. I am part of the developer in the server such as DNS Server, Web Server, Mail Server, and so forth. While the website using CodeIgniter to prioritize current and most are native PHP. To the Client Side I thrive in almost all layers are CSS, HTML, JavaScript including jQuery and various frontend like twitter bootstrap framework. In addition I often indulge in github to learn from it as code for my home.';
$config['about_typed'] = '"Hello World...!^1500", "My name is Cahyadi Triyansyah (SunDi3yansyah) from Yogyakarta, \nIndonesia.^1000 I am part of the developer in the server such as DNS \nServer,^800 Web Server,^600 Mail Server, and so forth.^1000 While the website using CodeIgniter to prioritize current and most are native PHP.^1000 To the \nClient Side I thrive in almost all layers are CSS,^500 HTML,^500 JavaScript \nincluding jQuery^800 and various frontend like twitter bootstrap framework.^1000 In addition I often indulge in github to learn from it as code for \nmy home."';
$config['title_default'] = 'Showcase | SunDi3yansyah';
$config['description'] = 'Showcase | SunDi3yansyah';
$config['keywords'] = 'Showcase | SunDi3yansyah';
$config['author'] = 'Cahyadi Triyansyah';

/*
|--------------------------------------------------------------------------
| Your Account Social
|--------------------------------------------------------------------------
*/

$config['email'] = TRUE;
$config['email_address'] = 'sundi3yansyah@gmail.com';

$config['github'] = TRUE;
$config['github_username'] = 'SunDi3yansyah';

$config['twitter'] = TRUE;
$config['twitter_username'] = 'SunDi3yansyah';

$config['google_plus'] = TRUE;
$config['google_plus_username'] = 'SunDi3yansyahLibrary';

$config['linkedin'] = TRUE;
$config['linkedin_username'] = 'sundi3yansyah';

$config['facebook'] = TRUE;
$config['facebook_username'] = 'adiebiazajah';