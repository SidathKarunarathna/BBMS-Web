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
          
          <i  class="fa fa-refresh fa-2x  a" aria-hidden="true"></i>
          <h7 style = "font-size: 25px; font-weight:bold; vertical-align: text-bottom;"class="active_link" >Pending Requests</h7>
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
         

          <div class="main__container" style="margin-top: 20px;">

            <div class="row">
               <div class="col-12 col-lg-6"> 

           

                   
                 
       <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">Request ID</th>
      <th scope="col">Patient Name</th>
      <th scope="col">Ward No</th>
      <th scope="col">Blood Group</th>
      <th scope="col">No of Units</th>
      <th scope="col">Staff ID</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>

</div>

 <div class="col-12 col-lg-6" > 

                 
                          <form action="#" >
                            <div class="user-details">
                              <div class="row">
                                <div class="col-12"> 
                              <div class="input-box"style="margin-left: 20px;">
                                <span class="details">Blood Group</span>
                                <select name="Blood" id="Blood">
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                </select>
                              </div> 
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-12"> 

                              <div class="input-box"style="margin-left: 20px;">
                                <span class="details">Requested Units</span>
                                <input type="text" placeholder=" " required>
                              </div>
                            </div>
                          </div>
                            <div class="row">
                              <div class="col-12"> 
                              <div class="input-box" style="margin-left: 20px;">
                                <span class="details">Pending Units</span>
                                <input type="text" placeholder=" " required>
                              </div>
                            </div>
                            </div> 
                            </div> 
                          </form>
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
          <div class="sidebar__link ">
          <i class="fa fa-line-chart" aria-hidden="true"></i>
            <a href="Dashboard.php" style="text-decoration: none;">Dashboard</a>
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
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-refresh" aria-hidden="true"></i>
            <a href="PendingRequests.php"style="text-decoration: none;">Pending Requests</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-user-md" aria-hidden="true"></i>
            <a href="UserRegistration.php"style="text-decoration: none;">User Registrations</a>
          </div>
          <div class="sidebar__link">
            <i class="fa fa-hospital-o" aria-hidden="true"></i>
            <a href="DonationCampaign.php"style="text-decoration: none;">Donation Campaign</a>
          </div>
          
          
          <div class="sidebar__logout">
            <i class="fa fa-power-off"></i>
            <a href="#">Log out</a>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="script.js"></script>
  </body>
</html>
