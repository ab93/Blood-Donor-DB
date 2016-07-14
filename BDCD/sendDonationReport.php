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
                <h1><a href="sendDonationReport.php">Blood Donor Central Database</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">
        <!-- Right Nav Section -->
        <form action="hospital.php" method="post">
            <ul class="right">
                <li class="active"><button type="submit" name="logout_donor" >Logout</button></li>
            </ul>
        </form>

    <!-- Left Nav Section -->
        
    </nav> 
    
    
    <div class="row">
         <ul class="side-nav" style="position:relative; top:190px; right:200px ">
             <a href="Search.php" style="width: 215px;"class="button [radius round]">Search</a></br>
             <a href="sendDonationReport.php" class="button [radius round]">Send Donation report</a></br>
             <a href="searchHealthReport.php" style="width:215px;" class="button [radius round]">View Health report</a></br>   
         </ul>
     </div>
    
    <div class="row">
        <form data-abide action="hospital.php" method="post">
        
            <fieldset style="position: relative; right:-100px; top:-100px">
                <legend><h3>Blood Donation Report</h3></legend>
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                    
                                <label for="right-label" class="right inline"><b>Donor ID</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" id="right-label" name="donor_id" placeholder="Donor's ID" required>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                    
                                <label for="right-label" class="right inline"><b>Date</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="date" id="right-label" name="date" placeholder="Date of donation" required>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                    
                              <label for="right-label" class="right inline"><b>Amount</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="number" id="right-label" name="amount" placeholder="Amount in Litres" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                    
                                <label for="right-label" class="right inline"><b>Blood Group</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" id="right-label" name="blood_group" placeholder="Blood Group" required>
                            </div>
                        </div>
                    </div>
                </div>
 
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                                <label for="right-label" class="right inline"><b>Type</label>
                            </div>
                            <div class="small-9 columns">
                                <input type="text" id="right-label" name="type" placeholder="Type of donation" required pattern="[a-zA-Z]*( [a-zA-Z]*)?">
                            </div>
                        </div>
                    </div>
                </div>
        
                
       
                <div class="row">
                    <div class="small-8">
                        <div class="row">
                            <div class="small-3 columns">
                    
                                <label for="right-label" class="right inline"></label>
                            </div>
                            <div class="small-9 columns">
                                <button type="submit" name="send">Submit</button>
                                <button class = "secondary" type="reset" style="float: right">Reset</button>   
                            </div>
                        </div>
                    </div>
                </div>  
            </fieldset>
        </form>
    </div>
    
      
    <footer style="position:relative; top:45px;">
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
    
  </body>
</html>







