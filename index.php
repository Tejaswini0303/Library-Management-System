<!DOCTYPE html>
<html>
<head>
	<title>Library Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	

</head>

<body>
	<div class="wrapper">
		
      <header>
      	 <div class="logo">
      	 	      
      	 	<img src="image/logo main.jpg">           
      	 	<h1 style="color: white;font-size: 20px;margin-top:-10px ;padding-left: 3px;">BLOSSOM LIBRARY</h1>
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
		<div class="sec_img">
			<div class=" w3-section" style="width: 1370px; height: 450px;margin-top: -20px;">
			<img class="mySlides w3-animate-right" src="image/lib.jpg" style="width: 100%">
			<img class="mySlides w3-animate-right" src="image/lib1.png" style="width: 100%">
			<img class="mySlides w3-animate-right" src="image/lib2.jpeg" style="width: 100%">
			<img class="mySlides w3-animate-right" src="image/lib3.jpeg" style="width: 100%">
			
		</div>

<script type="text/javascript">
	var a=0;
	carousel();

	function carousel()
	{
		var i;

		var x= document.getElementsByClassName("mySlides");

		for(i=0; i<x.length; i++)
		{
			x[i].style.display="none";
		}

		a++;  
		if(a > x.length) {a = 1}
			x[a-1].style.display = "block";
			setTimeout(carousel, 2000);
	}
</script>
			<!--<br><br><br><br>-->
	       <div class="box">
	       	<br><br><br><br>
	       	 <h1 style="text-align: center; font-size: 50px; margin-top: -50px;">Library Management System</h1>
	       	 <h3 style="text-align: center;font-size: 30px;">A Step Towards The Future</h3><br>
	       	
	       </div>
	   
	   </div>
		</section>
		<footer>
	        <div class="last">
	        	
	        </div>
	        <nav id="ac">
	        	<ul>
	        		<li><a href="">ABOUT_US</a></li>
	        		<li><a href="">CONTACT_US</a></li>
	        	</ul>
	        </nav>
	        <p style="color:white;">
	        	<br><br>
	        	Email:online.library1@gmail.com<br><br>
	        	Mobile:+834*******
	        </p>
		</footer>
	</div>
</body>
</html>
