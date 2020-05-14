<?php 
$title = "Home";
require('partials/_head.php');
?>
<div id="main-content">
<div class="jumbotron">
  <h1 class="display-4">Welcome to the <?= WEBSITE_NAME?>!</h1>
  <p class="lead">This is a simple exercise Social Network in php, in this project i develop some functionality for publishing, adding friend creating account etc.</p>
  <hr class="my-4">
  <p>If you want to see the repo of the project,<a href="https://github.com/Lhourquin/social-network">Click on this !</a></p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>
</div>

<?php
include('partials/_footer.php');
?>