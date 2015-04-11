<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Demo Menu Active | SunDi3yansyah</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.css'); ?>">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.js'); ?>"></script>
</head>
<body id="home">
<div class="ui inverted masthead segment force">
  <div class="ui page grid">
    <div class="column">
      <div class="ui inverted menu">
        <div class="header item">Showcase | SunDi3yansyah</div>
        <?php $this->load->view('menu'); ?>
      </div>
      <i class="red icon code"></i>
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          Homepage Menu 3
        </h1>
        <p>My name Cahyadi Triyansyah (SunDi3yansyah) from Yogyakarta, Indonesia. I am a developer section CodeIgniter Server Side to prioritize current and most are native PHP. To the Client Side I thrive in almost all layers are CSS, HTML, JavaScript, jQuery, Ajax and various frontend like twitter bootstrap framework. In addition I often indulge in github to learn from it as code for my home.</p>
      </div>
    </div>
  </div>
</div>

<div class="ui inverted black footer vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="one column row">
      <div class="column" style="text-align: center;">
        <p style="font-size: 1.2em;">Designed and built with <a href="https://developer.github.com/" target="_blank">GitHub API</a> - <a href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a> - <a href="http://semantic-ui.com/" target="_blank">Semantic UI</a> by @SunDi3yansyah, Code licensed under MIT.</p>
      </div>
    </div>
  </div>
</div>

</body>
</html>