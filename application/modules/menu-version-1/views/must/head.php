<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>
<?php if (!empty($title)): ?>
	<?php echo $title; ?>
<?php else: ?>
	<?php echo $this->CI->config->item('title_default'); ?>
<?php endif ?>
</title>
<meta name="author" content="<?php echo $this->CI->config->item('author'); ?>">
<meta name="robots" content="no-cache">
<meta name="description" content="<?php echo $this->CI->config->item('description'); ?>">
<meta name="keywords" content="<?php echo $this->CI->config->item('keywords'); ?>">
<link rel="icon" href="<?php echo base_url('favicon.png'); ?>">
<link rel="stylesheet" href="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.css'); ?>">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.min.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.js'); ?>"></script>
</head>