<?php
  require 'classes/user.php';

$user=$_POST['username'];
$password=$_POST['password'];

  if ((isset($_POST['username']) and isset($_POST['password']))){
    if ($user==gamer && $password==gamer){
      setcookie("auth", user::createcookie($_POST['username'], $_POST['password']));
      header( 'Location: /secret.php' ) ;
      die();
    } else {
      $error = "Invalid credentials";
    }
  }
  require "header.php";
?>

<div class="row">
  <div class="col-lg-12">
 <h2>A Demo Application made by @MrGeek_007 @roughwire</h2>
	<h2>Log in</h2>
  </div>
  <div class="col-lg-8 col-offset-1">
      <?php if (isset($error)) { ?>
          <span class="text text-danger"><b><?php echo $error; ?></b></span>
      <?php } ?>

    <form action="/index.php" method="POST" class="form-horizontal">
      <div class="form-group">
        <label for="name">Username:</label>
        <input type="text" name="username"  class="form-control"  autofocus="true">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password"  class="form-control"  >
      </div>
      <div class="checkbox">
        <label>
          <input type="checkbox" name="rememberme"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-default">Log in</button>
    </form>
  </div>
</div>

