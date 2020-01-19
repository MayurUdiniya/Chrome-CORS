<?php
   header("Access-Control-Allow-Origin: *");
   header("Access-Control-Allow-Credentials: false");
?>

<html>
<textarea name="secret">My Secret is    <?php echo $_COOKIE['auth'];?></textarea>
</html>