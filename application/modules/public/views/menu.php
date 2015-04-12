<div class="ui inverted menu">
  <div class="header item"><?php echo $this->CI->config->item('title'); ?></div>
  <div class="right menu">
    <div class="ui mobile dropdown link item">
      Menu
      <i class="dropdown icon"></i>
      <div class="menu">
        <?php if ($this->CI->config->item('email') === TRUE): ?>
          <a class="item" href="mailto:<?php echo $this->CI->config->item('email_address'); ?>" target="_blank">Email</a>
        <?php endif ?>
        <?php if ($this->CI->config->item('github') === TRUE): ?>
          <a class="item" href="https://github.com/<?php echo $this->CI->config->item('github_username'); ?>" target="_blank">GitHub</a>
        <?php endif ?>
        <?php if ($this->CI->config->item('twitter') === TRUE): ?>
          <a class="item" href="https://twitter.com/<?php echo $this->CI->config->item('twitter_username'); ?>" target="_blank">Twitter</a>
        <?php endif ?>
        <?php if ($this->CI->config->item('google_plus') === TRUE): ?>
          <a class="item" href="https://plus.google.com/+<?php echo $this->CI->config->item('google_plus_username'); ?>" target="_blank">Google+</a>
        <?php endif ?>
        <?php if ($this->CI->config->item('linkedin') === TRUE): ?>
          <a class="item" href="http://linkedin.com/in/<?php echo $this->CI->config->item('linkedin_username'); ?>" target="_blank">LinkedIn</a>
        <?php endif ?>
        <?php if ($this->CI->config->item('facebook') === TRUE): ?>
          <a class="item" href="https://www.facebook.com/<?php echo $this->CI->config->item('facebook_username'); ?>" target="_blank">Facebook</a>
        <?php endif ?>
      </div>
    </div>
    <?php if ($this->CI->config->item('email') === TRUE): ?>
      <a class="item" href="mailto:<?php echo $this->CI->config->item('email_address'); ?>" target="_blank"><i class="mail icon"></i>Email</a>
    <?php endif ?>
    <?php if ($this->CI->config->item('github') === TRUE): ?>
      <a class="item" href="https://github.com/<?php echo $this->CI->config->item('github_username'); ?>" target="_blank"><i class="github icon"></i>GitHub</a>
    <?php endif ?>
    <?php if ($this->CI->config->item('twitter') === TRUE): ?>
      <a class="item" href="https://twitter.com/<?php echo $this->CI->config->item('twitter_username'); ?>" target="_blank"><i class="twitter icon"></i>Twitter</a>
    <?php endif ?>
    <?php if ($this->CI->config->item('google_plus') === TRUE): ?>
      <a class="item" href="https://plus.google.com/+<?php echo $this->CI->config->item('google_plus_username'); ?>" target="_blank"><i class="google plus icon"></i>Google+</a>
    <?php endif ?>
    <?php if ($this->CI->config->item('linkedin') === TRUE): ?>
      <a class="item" href="http://linkedin.com/in/<?php echo $this->CI->config->item('linkedin_username'); ?>" target="_blank"><i class="linkedin icon"></i>LinkedIn</a>
    <?php endif ?>
    <?php if ($this->CI->config->item('facebook') === TRUE): ?>
      <a class="item" href="https://www.facebook.com/<?php echo $this->CI->config->item('facebook_username'); ?>" target="_blank"><i class="facebook icon"></i>Facebook</a>
    <?php endif ?>
  </div>
</div>