<?php

 session_start();
 if(!$_SESSION['email']){
   header("location:index.php");
 }
 ?>
<html>
<head>
</head>
<body>
<h1>
  <?php echo $_SESSION['email']; ?>
  <a href="logout.php">LogOut</a>
</h1>
</body>
</html>
