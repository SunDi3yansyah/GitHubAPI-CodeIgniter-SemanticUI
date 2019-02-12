<?php $this->load->view('must/head'); ?>
<body id="home">
<div class="ui inverted masthead segment force">
  <div class="ui page grid">
    <div class="column">
      <?php $this->load->view('must/menu'); ?>
      <i class="red icon code force"></i>
      <div class="ui hidden transition information force">
        <h1 class="none ui inverted header">
          <?php echo $this->CI->config->item('website_name'); ?>
        </h1>
        <div class="text-editor-wrap">
          <div class="title-bar"><span class="title"><?php echo $this->CI->config->item('github_username'); ?> &mdash; bash</span></div>
          <div class="text-body">
            $ # <p class="about" style="display: inline;white-space: pre;"></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="ui purple inverted vertical segment">
  <div class="ui stackable center aligned page grid">
    <div class="row">
      <div class="column">
        <h1 class="ui inverted header">
          GitHub Repository
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

<?php $this->load->view('must/footer'); ?>