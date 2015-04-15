<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<title><?php echo $this->CI->config->item('title'); ?></title>
<meta name="author" content="<?php echo $this->CI->config->item('author'); ?>">
<meta name="robots" content="no-cache">
<meta name="description" content="<?php echo $this->CI->config->item('description'); ?>">
<meta name="keywords" content="<?php echo $this->CI->config->item('keywords'); ?>">
<link rel="icon" href="<?php echo base_url('favicon.png'); ?>">
<link rel="stylesheet" href="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.css'); ?>">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/dist/semantic.js'); ?>"></script>
<script src="<?php echo base_url('bower_components/Semantic-UI/examples/homepage.js'); ?>"></script>
</head>
<body id="home">
<div class="ui inverted masthead segment force">
  <div class="ui page grid">
    <div class="column">
      <?php $this->load->view('menu'); ?>
      <i class="red icon code"></i>
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          <?php echo $this->CI->config->item('website_name'); ?>
        </h1>
        <p><?php echo $this->CI->config->item('about'); ?></p>
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
    <?php if (!empty($repos)): ?>
      <?php $no = 1; foreach ($repos as $repo): ?>
      <div class="five wide column left aligned <?php echo $no; ?>">
        <div class="ui card" style="width: initial;">
          <div class="content">
          <?php if (strlen($repo->name) >= 30): ?>
          <a class="header popup" href="<?php echo $repo->html_url; ?>" target="_blank" data-title="<?php echo $repo->name; ?>" data-variation="inverted">
            <?php echo substr($repo->name,0,30).' ...'; ?>
          </a>
          <?php else: ?>
          <a class="header" href="<?php echo $repo->html_url; ?>" target="_blank">
            <?php echo $repo->name; ?>
          </a>
          <?php endif ?>
            <div class="description">
              <div class="meta"><?php echo $this->libraries_datetime->formatDate($repo->created_at); ?></div>
              <div class="ui horizontal divider"><i class="github square icon" style="font-size: 2em;"></i></div>
              <?php echo character_limiter($repo->description,120); ?>
            </div>
          </div>
          <div class="extra content">
            <a class="left floated" href="<?php echo $repo->html_url; ?>#fork-destination-box" target="_blank">
              <?php echo $repo->forks_count; ?>
              <i class="fork icon"></i>
              Fork
            </a>
            <a class="right floated" href="<?php echo $repo->html_url; ?>" target="_blank">
              <?php echo $repo->stargazers_count; ?>
              <i class="star icon"></i>
              Star
            </a>
          </div>
          <div class="ui bottom attached button">
            <i class="connectdevelop icon"></i>
            <?php if ($repo->language === NULL): ?>
              No Language
            <?php else: ?>
              <?php echo $repo->language; ?>
            <?php endif ?>
          </div>
        </div>
      </div>
      <?php
      if ($no <= 29) {
        $check1 = $no / 3;
        $check2 = strlen($check1);
        if ($check2 == '1') { ?>
          <div class="ui large centered inline text loader">
          Loading...
          </div>
        <?php }
      } elseif ($no >= 30) {
        $check1 = $no / 3;
        $check2 = strlen($check1);
        if ($check2 == '2') { ?>
          <div class="ui large centered inline text loader">
          Loading...
          </div>
        <?php }
      }
      ?>
      <?php $no++; endforeach; ?>
    <?php endif ?>
  </div>
</div>

<div class="ui vertical feature segment" style="box-shadow: none;">
  <div class="ui center aligned stackable page grid">
    <div class="two center floated column row">
      <div class="ui wide column">
        <div class="ui horizontal divider"><i class="github square icon" style="font-size: 7em;"></i></div>
        <a class="huge ui blue button" href="https://github.com/SunDi3yansyah/GitHubAPI-CodeIgniter-SemanticUI" target="_blank"><i class="github alternate icon"></i>Fork this Repository</a>
      </div>
    </div>
  </div>
</div>

<div class="ui inverted black footer vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="one column row">
      <div class="column">
        <p style="font-size: 1.2em;">Designed and built with <a href="https://developer.github.com/" target="_blank">GitHub API</a> - <a href="http://www.codeigniter.com/" target="_blank">CodeIgniter</a> - <a href="http://semantic-ui.com/" target="_blank">Semantic UI</a> by @SunDi3yansyah, Code licensed under MIT.</p>
      </div>
    </div>
  </div>
</div>

<script>
$('.header.popup')
  .popup({
    position : 'top center'
  });
</script>

</body>
</html>