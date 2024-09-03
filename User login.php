<?php
   include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
	
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
  <header>
  	<div class="wrapper">
		
	
      <header class="logh" style="height: 130px;">
      	 <div class="logo">
      	 	      
      	 	<img src="image/logo main.jpg">
            
      	 	<h1 style="color: white;"></h1>
      	 </div>
	    <nav>
	    	<ul>
	    		<li><a href="index.php">HOME</a></li>
	    		<li><a href="book.php">BOOKS</a></li>
	    		<li><a href="student.php">STUDENT-INFO</a></li>
	    		<li><a href="admin.php">ADMINLOGIN</a></li>
	    		
	    	</ul>
	    </nav>
     </header>
     <section>
  	  <div class="login_img">
  	      <br><br><br>
  	       <div class="sec1">
	         <h1 style="text-align: center; font-size: 50px;">Library Management System</h1><br>
	         <h3 style="text-align: center;font-size: 30px;">Admin Login Form</h3><br> <br> 
	         <form name="login" action="" method="post">
	         	<div class="log" style="color: black;border-width: 30px;">
	         	<input type="text" name="username" placeholder="username" required="" style="font-size: 17px;"><B>Username:<br><br></B>
	         	<input type="password" name="password" placeholder="password"required=""style="font-size: 17px;"><B>password:<br><br></B>
	         	 <input type="submit" name="submit" value="Login"  style="color:black;height: 30px;width: 80px;font-size: 17px;">
	         	<!--<button style="color:black;height: 30px;width: 80px;font-size: 17px;"><strong><B><a href="utable.html">Login</a></button></B></strong></div>-->
	         </form><br><br
	         <p>
	         	<a style="color:black; padding-left: 30px;font-size: 20px;" href=""><strong><B>Forgot Password?</a></strong></B>
	         </p> 	
  		   </div>
  	  </div>
     </section>
    </div>
    <?php
    	if(isset($_POST['submit']))
    	{
    		$count=0;
    		$res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");
    		$count=mysqli_num_rows($res);
    		if($count==0)
    		{
    ?>
  				 <script type="text/javascript">
  					alert("The username and password doesn't match.");
 					 </script>    
    		
    <?php
      }
         else
         {
           ?>
  					 <script type="text/javascript">
  					   window.location="index.php";
 						 </script>    
    		
    <?php

         }
    	}
    ?>
</body>
</html>
