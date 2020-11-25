<?php

   include('db.php');
   session_start();
   if($_SESSION['email']){
     header("location:home.php");
   }
?>


<!DOCTYPE html>
<html>
<head>
<title>login</title>

<style>

.login-box{
  position:relative;
  margin: 10px auto;
  width: 500px;
  height: 380px;
  background-color: #fff;
  padding: 10px;
  border-radius: 3px;
  -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.33);
}
.lb-header{
  position:relative;
  color: #00415d;
  margin: 5px 5px 10px 5px;
  padding-bottom:10px;
  border-bottom: 1px solid #eee;
  text-align:center;
  height:28px;
}
.lb-header a{
  margin: 0 25px;
  padding: 0 20px;
  text-decoration: none;
  color: #666;
  font-weight: bold;
  font-size: 15px;
  -webkit-transition: all 0.1s linear;
  -moz-transition: all 0.1s linear;
  transition: all 0.1s linear;
}
.lb-header .active{
  color: #029f5b;
  font-size: 18px;
}
.social-login{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  padding: 10px 0 15px 0;
  border-bottom: 1px solid #eee;
}
.social-login a{
  position:relative;
  float: left;
  width:calc(40% - 8px);
  text-decoration: none;
  color: #fff;
  border: 1px solid rgba(0,0,0,0.05);
  padding: 12px;
  border-radius: 2px;
  font-size: 12px;
  text-transform: uppercase;
  margin: 0 3%;
  text-align:center;
}
.social-login a i{
  position: relative;
  float: left;
  width: 20px;
  top: 2px;
}
.social-login a:first-child{
  background-color: #49639F;
}
.social-login a:last-child{
  background-color: #DF4A32;
}
.email-login,.email-signup{
  position:relative;
  float: left;
  width: 100%;
  height:auto;
  margin-top: 20px;
  text-align:center;
}
.u-form-group{
  width:100%;
  margin-bottom: 10px;
}
.u-form-group input[type="email"],
.u-form-group input[type="password"]{
  width: calc(50% - 22px);
  height:45px;
  outline: none;
  border: 1px solid #ddd;
  padding: 0 10px;
  border-radius: 2px;
  color: #333;
  font-size:0.8rem;
  -webkit-transition:all 0.1s linear;
  -moz-transition:all 0.1s linear;
  transition:all 0.1s linear;
}
.u-form-group input:focus{
  border-color: #358efb;
}
.u-form-group button{
  width:50%;
  background-color: #1CB94E;
  border: none;
  outline: none;
  color: #fff;
  font-size: 14px;
  font-weight: normal;
  padding: 14px 0;
  border-radius: 2px;
  text-transform: uppercase;
}
.forgot-password{
  width:50%;
  text-align: left;
  text-decoration: underline;
  color: #888;
  font-size: 0.75rem;
}
</head>
</style>
<body>


    <div class="login-box">
      <div class="lb-header">
        <a href="#" class="active" id="login-box-link">Login</a>
        <a href="#" id="signup-box-link">Sign Up</a>
      </div>

      <form class="email-login" method="post" action="">
        <div class="u-form-group">
          <input type="email" name="email" placeholder="Email"/>
        </div>
        <div class="u-form-group">
          <input type="password" name="pass" placeholder="Password"/>
        </div>
        <div class="u-form-group">
          <input type="submit" value="Log in" name="submit">
        </div>
        <div class="u-form-group">
          <a href="#" class="forgot-password">Forgot password?</a>
        </div>
      </form>
<?php
  if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $sql="SELECT * FROM login WHERE email='$email' and password='$pass'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) >= 1){
       $_SESSION['email']=$email;
      header("location:home.php");
    } else {
      echo "<script>alert('password not match')</script>";
    }
  }
?>
    </div>

<script>

</script>

    </body>
</html>
