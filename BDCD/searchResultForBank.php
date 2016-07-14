
<?php
session_start();
error_reporting(0);
if (!$_SESSION['user_id']) 
{
    $loginError = "You are not logged in.";
    include("home.php");
    exit();
}
?>
/
<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Template | Orbit Home</title>

    
    <meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more." />
    
    <meta name="author" content="ZURB, inc. ZURB network also includes zurb.com" />
    <meta name="copyright" content="ZURB, inc. Copyright (c) 2013" />

    <link rel="stylesheet" href="css/foundation.css" />
    <script src="../assets/js/modernizr.js"></script>
  </head>
  <body>
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="searchResultForBank.php">Blood Donor Central Database</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">
        <!-- Right Nav Section -->
        <form action="bank.php" method="post">
            <ul class="right">
                <li class="active"><button type="submit" name="logout_bank" >Logout</button></li>
            </ul>
        </form>

    <!-- Left Nav Section -->
       
        </section>
    </nav> 
      <div class="row">
         <ul class="side-nav" style="position:relative; top:190px; right:200px ">
             <a href="searchForBank.php" style="width: 192px;" class="button [radius round]">Search</a></br>
             
             <a href="searchHealthReportForBank.php" class="button [radius round]">View Health report</a></br>   
         </ul>
     </div>
      <?php


include 'bank.php';
$bank1 = new bank();
if(isset($_POST['search_bank']))
{
    $location = $_POST['location'];
    //echo $location;
    //header('Location: searchResult.php');
    $bank1->search($location);
}

?>
      
 
  <!-- Footer -->
  
  <footer class="row" style="position:relative; top:450px;">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright BDCD, VIT Vellore</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Admin</a></li>
            
          </ul>
        </div>
      </div>
    </div> 
  </footer>

    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/templates/foundation.js"></script>
    <script>
      $(document).foundation();

      var doc = document.documentElement;
      doc.setAttribute('data-useragent', navigator.userAgent);
    </script>
  </body>
</html>




