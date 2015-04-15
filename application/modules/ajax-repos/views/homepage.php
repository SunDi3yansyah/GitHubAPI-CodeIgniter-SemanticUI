<?php $this->load->view('must/head'); ?>
<body id="home">
<div class="ui inverted masthead segment force">
  <div class="ui page grid">
    <div class="column">
      <?php $this->load->view('must/menu'); ?>
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
          Ajax List Respository on GitHub
        </h1>
        <div class="ui inverted horizontal divider"><i class="github icon" style="font-size:5em;"></i></div>
      </div>
    </div>
    <div class="row">
      <div class="nine wide column left aligned">
        <div class="ui center aligned stackable page grid">
          <button class="ui teal massive left labeled icon button" id="get_repos_ajax"><i class="github square icon"></i>Get Repository with Ajax</button><br>
          <div class="ui pointing below green" id="repos_count" style="margin-top: 0.5em;"></div>
        </div>
        <div class="ui styled fluid accordion" id="repo_list" style="box-shadow: none;margin-top: 1em;">
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$("#get_repos_ajax").click(function() {
  $.ajax({
    type: "GET",
    url: "https://api.github.com/users/<?php echo $this->CI->config->item('github_username'); ?>/repos",
    dataType: "json",
    success: function(result) {
      for( i in result ) {
        $("#repo_list").append(
          "<div class='title'><i class='dropdown icon'></i>" + result[i].name + "<p class='ui blue tag label' style='float: right;'>" + result[i].language + "</p></div><div class='content'><p>" + result[i].description + "</p><p class='ui label purple'><i class='fork icon'></i> " + result[i].forks_count + "</p><p class='ui label purple'><i class='star icon'></i> " + result[i].stargazers_count + "</p><a class='ui red label' target='_blank' href='" + result[i].html_url + "'>Go to Repository</a></div>"
          );
        console.log("i: " + i);
      }
      console.log(result);
      $('.ui.pointing.green').addClass('label');
      $("#repos_count").append("Total " + result.length + " Repository");
    }
  });
});
</script>
<?php $this->load->view('must/footer'); ?>