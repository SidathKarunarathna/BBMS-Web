<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="form1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>style1</title>
  </head>
  <body id="body">
    <div class="container1">
      <nav class="navbar">
        <div class="nav_icon" onclick="toggleSidebar()">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="navbar__left">
          
          <i  class="fa fa-user-md fa-2x  a" aria-hidden="true"></i>
          <h7 style = "font-size: 25px; font-weight:bold; vertical-align: text-bottom;"class="active_link" >User Registration</h7>
        </div>
        <div class="navbar__right">
          <a href="#">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
          <a href="#">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
          </a>
          <a href="#">
            <img width="30" src="assets/avatar.svg" alt="" />
            
          </a>
        </div>
      </nav>

      <main>
         <div class="main__container">
         
          <div class="charts">
            <!-- <div class="charts__left"> -->
              <div class="charts__left__title">
                <div>
                <div class="body1">
                    <div class="container-form-1">
                       
                        <div class="content">
                          <form action="#">
                             <div class="User-details">
                              <input type="radio" name="user" id="dot-1">
                              <input type="radio" name="user" id="dot-2">
                            
                              <span class="gender-title" style="font-weight: bold;">User Type</span>
                              <div class="category">
                                <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">Admin</span>
                              </label>
                              <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">Staff</span>
                              </label>
                              
                              </div>
                            </div>
                            <div class="user-details">
                              <div class="input-box">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required>
                              </div>
                              <div class="input-box">
                                <span class="details">Username</span>
                                <input type="text" placeholder="Enter your username" required>
                              </div>
                              <div class="input-box">
                                <span class="details">Password</span>
                                <input type="text" placeholder="Enter your Password" required>
                              </div>
                              <div class="input-box">
                                <span class="details">Confirm Password</span>
                                <input type="text" placeholder="Confirm Password" required>
                              </div>
                              <div class="input-box">
                                <span class="details">Staff Id</span>
                                <input type="text" placeholder="Enter your Staff Id" required>
                              </div>
                              <div class="input-box">
                                <span class="details">NIC</span>
                                <input type="text" placeholder="Enter your NIC" required>
                              </div>
                            </div>
                           
                            <div class="button">
                              <input type="submit" value="Register">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    
                  
                </div>
                

           
        </div>

      </main>

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img src="assets/logo.png" alt="logo" />
            <h1 style="font-size: 24px; font-weight:bold">BLOOD BANK</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__link">
          <div class="sidebar__link">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
            <a href="Dashboard.php"style="text-decoration: none;">Dashboard</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-pie-chart"></i>
            <a href="BloodStock.php"style="text-decoration: none;">Blood Stock</a>
          </div>
         
          <div class="sidebar__link ">
            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <a href="DonorRegistrations.php"style="text-decoration: none;">Donor Registration</a>
          </div>
          <div class="sidebar__link">
           <i class="fa fa-heartbeat" aria-hidden="true"></i>
            <a href="Donor.php"style="text-decoration: none;">Donor</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-medkit" aria-hidden="true"></i>
            <a href="Donation.php"style="text-decoration: none;">Donation</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-refresh" aria-hidden="true"></i>
            <a href="PendingRequests.php"style="text-decoration: none;">Pending Requests</a>
          </div>
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <a href="UserRegistration.php"style="text-decoration: none;">User Registrations</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <a href="DonationCampaign.php"style="text-decoration: none;">Donation Campaign</a>
          </div>
          
          
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="#"style="text-decoration: none;">Log out</a>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
