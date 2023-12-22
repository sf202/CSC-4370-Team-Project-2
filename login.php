<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Jeopardy!</title>
<link href="style copy.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1> Login now </h1>
 <div id="home-login"> 
   <form action="loginhome.php" method="get">        
        <input type="text" name="username" maxlength="50" size="30" placeholder="Username" required>
        <br>
        
        <input type="password" name="password" maxlength="20" size="30" placeholder="Password"  required>
        <br>
   

        <br><br>
        <input type="submit" value="Login">
        <br><br>
		
     </form>
	 
	 
	  
  </div>
  
  <h1> Register now </h1>

<div class="register-form">
  <span id="user-icon"></span>
      <form action="register-submit.php" method="post">
        
        <input type="text" name="username" maxlength="50" size="30" placeholder="Your Username" title=""required>
        <br>
        
        <input type="password" name="password" maxlength="20" size="30" placeholder="Your Password" title="" required>
        <br>
  
        <br><br>
        <input type="submit" value="Register">
        <br><br>
      </form>
</div>


  </body>
</html>