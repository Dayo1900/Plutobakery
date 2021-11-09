<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Log in</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="'pluto bakery', 'bakery', 'buy bread', 'bread', 'bread shop'">
<link rel="stylesheet" type="text/css" href="plutobakery.css">
<link rel="stylesheet" type="text/css" media="(max-width:1299px)" href="plutobakery1024px.css">

<link rel="stylesheet" type="text/css" media="(max-width:999px)" href="plutobakery760px.css">

<link rel="stylesheet" type="text/css" media="(max-width:600px)" href="plutobakery218px.css">	
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>

<?php 
if (isset ($_POST["login"]))           //begin the log in process once the login button is clicked
{
$email=$password="";                    //define variables and initialise to empty

$email=($_POST['email']);
$password=md5($_POST['password']);

include 'server_loginform.php';
}
?>


<!-- Design the login page -->
<div class="a">
 <h5> Login </h5>
  <div class="b"> 
  <form action="login_form.php" method="post">
      
      
  <input class="c" type="email" name="email" placeholder="Email" required autocomplete="on"><br>
         <span class="error"> <?php if ((isset ($_POST["login"])) && (empty ($_POST["email"])))
                                     {echo "*Email required";}  ?> </span>
  
  <input class="c" type="password" name="password" placeholder="Password" required> 
         <span class="error"> <?php if((isset ($_POST["login"])) && (empty ($_POST["password"])))
                                     {echo "*Password required";}  ?> </span>
  <br> <br>
    <input style="box-shadow:none;" type="submit" name="login" value="Login">
 </form>
 </div>  
</div>
<p class="effects design"> Not yet registered? <a href="registration_form.php"> Create account.</a></p>



</body>
</html>
