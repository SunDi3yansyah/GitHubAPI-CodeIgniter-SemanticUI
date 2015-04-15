<?php $this->load->view('must/head'); ?>

<body id="home">
<div class="ui inverted masthead segment force">
  <div class="ui page grid">
    <div class="column">
      <div class="ui inverted menu">
        <div class="header item"><?php echo $this->CI->config->item('title'); ?></div>
        <?php $this->load->view('must/menu'); ?>
      </div>
      <i class="red icon code"></i>
      <div class="ui hidden transition information">
        <h1 class="ui inverted header">
          Homepage Menu 3
        </h1>
        <p><?php echo $this->CI->config->item('about'); ?></p>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('must/footer'); ?>