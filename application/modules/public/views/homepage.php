<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title>Showcase | SunDi3yansyah (Cahyadi Triyansyah)</title>
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
        <div class="right menu">
          <div class="ui mobile dropdown link item">
            Menu
            <i class="dropdown icon"></i>
            <div class="menu">
              <a class="item" href="mailto:sundi3yansyah@gmail.com">Email</a>
              <a class="item" href="https://github.com/SunDi3yansyah" target="_blank">GitHub</a>
              <a class="item" href="https://twitter.com/SunDi3yansyah" target="_blank">Twitter</a>
              <a class="item" href="https://plus.google.com/u/0/113613533694994339551" target="_blank">Google+</a>
              <a class="item" href="http://id.linkedin.com/in/sundi3yansyah/" target="_blank">LinkedIn</a>
              <a class="item" href="https://www.facebook.com/adiebiazajah" target="_blank">Facebook</a>
            </div>
          </div>
          <a class="item" href="mailto:sundi3yansyah@gmail.com" target="_blank">Email</a>
          <a class="item" href="https://github.com/SunDi3yansyah" target="_blank">GitHub</a>
          <a class="item" href="https://twitter.com/SunDi3yansyah" target="_blank">Twitter</a>
          <a class="item" href="https://plus.google.com/u/0/113613533694994339551" target="_blank">Google+</a>
          <a class="item" href="http://id.linkedin.com/in/sundi3yansyah/" target="_blank">LinkedIn</a>
          <a class="item" href="https://www.facebook.com/adiebiazajah" target="_blank">Facebook</a>
        </div>
      </div>
      <i class="red icon code"></i>
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          Cahyadi Triyansyah
        </h1>
        <p>My name Cahyadi Triyansyah (SunDi3yansyah) from Yogyakarta, Indonesia. I am a developer section CodeIgniter Server Side to prioritize current and most are native PHP. To the Client Side I thrive in almost all layers are CSS, HTML, JavaScript, jQuery, Ajax and various frontend like twitter bootstrap framework. In addition I often indulge in github to learn from it as code for my home.</p>
      </div>
    </div>
  </div>
</div>

<div class="ui purple inverted vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="row">
      <div class="column">
        <h1 class="ui inverted header">
          GitHub Respository
        </h1>
        <div class="ui inverted horizontal divider"><i class="github icon" style="font-size:5em;"></i></div>
      </div>
    </div>
    <?php if (!empty($output)): ?>
      <?php foreach ($output as $repo): ?>
      <div class="five wide column left aligned">
        <div class="ui card" style="width: initial;">
          <div class="content">
          <a class="header" href="<?php echo $repo->html_url; ?>" target="_blank"><?php echo $repo->name; ?></a>
            <div class="description">
              <div class="meta"><?php echo $this->libraries_datetime->formatDate($repo->created_at); ?></div>
              <div class="ui horizontal divider"><i class="github icon" style="font-size: 2em;"></i></div>
              <?php echo $repo->description; ?>
            </div>
          </div>
          <div class="extra content">
            <span class="left floated">
              <i class="fork icon"></i>
              <?php echo $repo->forks_count; ?>
            </span>
            <span class="right floated">
              <i class="star icon"></i>
              <?php echo $repo->stargazers_count; ?>
            </span>
          </div>
          <div class="ui bottom attached button">
            <i class="connectdevelop icon"></i>
            <?php if ($repo->language == NULL): ?>
              No Language
            <?php else: ?>
              <?php echo $repo->language; ?>
            <?php endif ?>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    <?php endif ?>
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