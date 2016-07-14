
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
      
    <!--
      <div class="row">
    <div class="large-3 columns">
        <h1><img src="logo1.jpg" style="height: 85px" /></h1>
    </div>
    <div class="large-9 columns">
      <ul class="right button-group">
      <li><a href="#" class="button">Home</a></li>
      <li><a href="#" class="button">Sign Up</a></li>
      <li><a href="#" class="button">Login</a></li>
      </ul>
  </div>
  </div>
    -->
    
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="#">Blood Donor Central Database</a></h1>
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
         <form action="user.php" method="post">
        <fieldset>
            <legend><h3>Blood Donor Registration</h3></legend>
      <div class="row">
            <div class="small-8">   
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>User ID</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="right-label" required name="user_id" placeholder="UserID/Username">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Password</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="password" id="right-label" required pattern="^(?=.*\d).{4,8}$" name="password" placeholder="Must be between 4 and 8 characters with at least one digit">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Confirm Password</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="password" id="right-label" required pattern="^(?=.*\d).{4,8}$" data-equalto="password" name="password_confirm" placeholder="Retype password">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Full Name</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="right-label" name="name" placeholder="Name" required pattern="[a-zA-Z]*( [a-zA-Z]*)?">
                    </div>
                </div>
            </div>
        </div>
 
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline"><b>Address</label>
                    </div>
                    <div class="small-9 columns">
                        <textarea id="right-label" name="address" placeholder="Address" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>City</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="right-label" name="city" placeholder="City" required pattern="[a-zA-Z]*( [a-zA-Z]*)?">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>State</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" id="right-label" name="state" placeholder="State" required pattern="[a-zA-Z]*( [a-zA-Z]*)?">
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Zip</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="number" id="right-label" name="zip" placeholder="Zip" required>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Phone Number</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="number" id="right-label" name="phone" placeholder="Phone" required>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Email</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="email" id="right-label" name="email" placeholder="Email" required>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Gender</label>
                    </div>
                    <div class="small-9 columns">
                  
                    <input type="radio" name="gender" value="Male" id="male" required><label>Male</label>
                    <input type="radio" name="gender" value="Female" id="female" required><label>Female</label>
                    </div>
                   
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Date of Birth</label>
                    </div>
                    <div class="small-9 columns">
                        
                        <input type="date" id="right-label" name = "dob" required>
                    </div>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="small-8">
                <div class="row">
                    <div class="small-3 columns">
                    
                        <label for="right-label" class="right inline"><b>Last Donation Date</label>
                    </div>
                    <div class="small-9 columns">
                        
                        <input type="date" id="right-label" name = "last_donation">
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
                        <label>Blood Group</label>
                        <select name="blood_group" required>
                                <option value="O-">O-</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="A+">A+</option>
                                <option value="B-">B-</option>
                                <option value="B+">B+</option>
                                <option value="AB-">AB-</option>
                                <option value="AB+">AB+</option>
                        </select>
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
                        <button type="submit" name="register">Submit</button>
                        <button class = "secondary" type="reset" style="float: right">Reset</button>
                        
                    </div>
                </div>
            </div>
        </div>  
        
    </label>
  </fieldset>
        
        
      </form>
    </div>
    
    
      </form>
      
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





