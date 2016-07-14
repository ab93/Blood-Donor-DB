
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
                <h1><a href="home.php">Blood Donor Central Database</a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
        </ul>

        <section class="top-bar-section">
        <!-- Right Nav Section -->
            <ul class="right">
                <li class="active"><a href="login.php">Login</a></li>
                <li class="has-dropdown">
                <a href="#">Sign Up</a>
                <ul class="dropdown">
                    <li><a href="Register_donor.php">Blood Donor</a></li>
                    <li><a href="Register_hospital.php">Hospital</a></li>
                    <li><a href="Register_bank.php">Blood Bank</a></li>
                </ul>
                </li>
            </ul>

    <!-- Left Nav Section -->
        <ul class="left">
            <li><a href="home.php">Home</a></li>
        </ul>
        </section>
    </nav>
  
 


  <div class="row">
    <div class="large-12 columns">
      <ul class="example-orbit" data-orbit>
        <li><img src=
                 "blood-cells.jpg" style = "position:relative; top:10px; width:1200px; height:300px;"></li>
      </ul>
    </div>
  </div>
    
<hr/>

  
<!-- Three-up Content Blocks -->

  <div class="row">
    <div class="large-4 columns">
        <img src="hospital.jpg" />
        <h4 style="position: relative; left:50px;">Hospital login</h4>
      <form data-abide action="hospital.php" method="post">
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"></label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" name="user_id_hospital" id="right-label" placeholder="UserID" required>
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
                        <input type="password" id="right-label" name="password_hospital" placeholder="Password" required>
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
                      <button type="submit" name="login_hospital" >Login</button>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </div>
    
    <div class="large-4 columns">
        <img src="donor.jpg" />
      <h4 style="position: relative; left:-20px;"><center>Blood Donor Login</center></h4>
      <form data-abide action="donor.php" method="post">
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"></label>
                    </div>
                    <div class="small-9 columns">
                        <?php
                            if(isset($_GET['error']) && isset($_GET['error']))
                            {
                                echo $_GET['msg'];
                            }
                        ?>
                        <input type="text" id="right-label" name="user_id_donor" placeholder="UserID" required>
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
                        <input type="password" id="right-label" name="password_donor" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"></label>
                    </div>
                    <div class="small-9 columns">
                      <button type="submit" name="login_donor">Login</button>
                    </div>
                </div>
        </div>
      </form>
    </div>
    
    <div class="large-4 columns">
        <img src="bank2.jpg" style="height: 220px"/>
        <h4 style="position: relative; left:30px;">Blood Bank Login</h4>
        <form data-abide action="bank.php" method="post">
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"></label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="right-label" name="user_id_bank" placeholder="UserID" required>
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
                        <input type="password" id="right-label" name="password_bank" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"></label>
                    </div>
                    <div class="small-9 columns">
                      <button type="submit" name="login_bank" >Login</button>
                    </div>
                </div>
        </div>
      </form>
    </div>
  
    </div>
    
<!-- Call to Action Panel -->

  <!-- Footer -->
  
  <footer class="row">
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
            <li><a href="loginAdmin.php">Admin</a></li>
            
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

