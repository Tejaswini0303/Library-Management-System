<?php
   include "connection.php";
?>


<!DOCTYPE html>
<html>
<head>
   <title>books</title>
   <link rel="stylesheet" type="text/css" href="styles.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
    body {
  font-family: "Lato", sans-serif;
  transition: background-color .5s;
}

.sidenav {
  height: 100%;
  margin-top: 120px;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}  
   </style>
</head>
<body>
<div class="wrapper">
      
   
      <header>
          <div class="logo">
                  
            <img src="image/logo main.jpg">           
            <!--<h1 style="color: white;font-size: 20px;margin-top:-10px ;padding-left: 3px;">BLOSSOM LIBRARY</h1>-->
          </div>
       <nav>
         <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="book.php">BOOKS</a></li>
            <li><a href="student.php">STUDENT-INFO</a></li>
          <li><a href="admin.php">ADMINLOGIN</a></li>
            <!--<li><a href="profile.php">Profile</a></li>-->
            
         </ul>
       </nav>
      </header>
      <h1 style="text-align: center;font-size: 70px;font: black;">CATEGORIES</h1>

<!-- sidenav-->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="book.php">BOOKS</a>
  <a href="request.php">Book Request</a>
  <a href="issueinfo.php">ISSUE INFORMATION</a>
  <a href="expired.php">EXPIRED LIST</a>
  
</div>

<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>


<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>




                 








<!-- search-->
   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

   <div class="container">
      <div class="search_wrap search_wrap_1" style="">
         <form method="post" name="form2">
         <div class="search_box" style="">
         
           <input   class="input" type="text"  name="search"  placeholder="search...." required=""  >
            <button type="submit" name="submit" class="btn btn_common"  style="margin-top: 0px;">
              
               <span class="fas fa-search"></span>
                 
            </button>
            </form>
         </div>
      </div>
   </div>
   

   
      
   <div class="main">

 <!--cards -->

   <div class="card">

   <div class="image">
   <img src="https://www.engineersacademy.org/blog/wp-content/uploads/2019/05/pile-of-books.jpg">
   </div>
   <!--<div class="title">
    <h1>B.TECH</h1>
   </div>-->
   <!--<div class="des">
   <p>You can Add Desccription Here...</p>-->
   <button style="font-size: 13px;"> <a href="btech.php"><strong>B.TECH</strong></a></button>
   <!--</div>-->

   </div>
   <!--cards -->


   <div class="card">
   <div class="image">
      <img src="https://c0.wallpaperflare.com/preview/386/354/385/analysis-hospital-doctor-medical.jpg">
   </div>


   <button style="font-size:13px"><a href="pharmacy.php"><strong>PHARMACY</strong></button>

   </div>





<!--cards -->


   <div class="card">

   <div class="image">
   <img src="https://i.pinimg.com/236x/7c/f4/e3/7cf4e312e14da5a434340676b1487384.jpg">
   </div>
   <button><a href="mba.php"><strong>MBA</strong></a></button>
   </div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://newint.org/sites/default/files/features/2016/09/20/01.10.2016-world-fiction-special-590.jpg">
</div>
<button><a href="fiction.php"><strong>FICTION</strong></button>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
</div>
<button><a href="nonfiction.php"><strong>NON-FICTION</strong></button>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
</div>
<button><a href="history.php"><strong>HISTORY</strong></button>
</div>
<!--cards -->

<div class="card">

<div class="image">
   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg">
</div>

<button><a href="ncert.php"><strong>NCERT</strong></button>
</div>
<!--cards -->


<div class="card">

<div class="image">
   <img src="https://cdn.pixabay.com/photo/2018/01/09/03/49/the-natural-scenery-3070808_1280.jpg">
</div>
<button>Read More...</button>
</div>
<!--cards -->



 </div>

   </div>
   </div>
</body>
</html>
