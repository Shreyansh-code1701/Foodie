<?php
require_once 'adminsecure.php';
?>
<div class="left-side sticky-left-side">


        <div class="logo">
            <a href="../index.php"><img src="images/tablogo.png" alt="" width="30%" class="img img-responsive text-center"/></a>
        </div>

        <div class="logo-icon text-center">
            <a href="../index.php"><img src="images/tablogo.png" alt="" class="img img-responsive"/></a>
        </div>


        <div class="left-side-inner">


            <!-- <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media logged-user">
                     <img alt="" src="images/photos/user-avatar.png" class="media-object">
                    <div class="media-body"> 
                        <h4><a href="#">John Doe</a></h4>
                        <span>"Hello There..."</span>
                    </div> 
                </div>

                <h5 class="left-nav-title">Account Information</h5>
                <ul class="nav nav-pills nav-stacked custom-nav">
                  <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                  <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
                  <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul> 
            </div> -->

            <ul class="nav nav-pills nav-stacked custom-nav">
                <li class="active"><a href="index.php"><i class="fas fa-home"></i> <span>Dashboard</span></a>
                </li>
                
                <li class="menu-list"><a href="#"><i class="fas fa-map-marked-alt"></i> <span>Manage Location</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="managestate.php"><i class="fas fa-building"></i> <span> State</span> </a></li>
                        <li><a href="managecity.php"><i class="fas fa-city"></i><span> City</span></a></li>
                        <li><a href="managearea.php"><i class="fas fa-map-marker-alt"></i><span> Area</span></a></li>
                    </ul>
                </li>
                <li class="menu-list"><a href="#"><i class="fas fa-users"></i> <span>Manage Seller</span></a>
                    <ul class="sub-menu-list">
                        <li><a href="manageseller.php"><i class="fas fa-id-badge"></i> <span> Seller Profile</span> </a></li>
                        <li><a href="managebusiness.php"><i class="fas fa-briefcase"></i> <span> Seller Business    </span> </a></li>
                        <li><a href="managesellerreview.php"><i class="fas fa-star"></i><span> Seller Review</span></a></li>
                        
                    </ul>
                </li>
           
                
                <li><a href="manageproductreview.php"><i class="fas fa-burger-soda"></i> <span>Product Review</span></a></li>
                
                <li><a href="managestoretype.php"><i class="fas fa-store"></i> <span>Manage Store Type</span></a></li>
                
                <li><a href="managemaincategory.php"><i class="fas fa-utensils-alt"></i> <span>Manage Category</span></a></li>
               
                <!-- <li><a href="manageduration.php"><i class="fa  fa-cogs"></i> <span>Manage Duration</span></a></li> -->
                
                <li><a href="managesubscriber.php"><i class="fas fa-envelope-open-text"></i> <span>Manage Email Subscriber</span></a></li>
                
                <li><a href="managecontact.php"><i class="fas fa-address-book"></i> <span>Manage Contact Us</span></a></li>
                
                 <li><a href="managefeedback.php"><i class="fas fa-comment-alt-lines"></i>   <span>Manage Feedback</span></a></li>
               
                 <!-- <li><a href="managetimeperiod.php"><i class="fa  fa-cogs"></i> <span>Manage Time Period</span></a></li> -->
                
                 <!-- <li><a href="manageuser.php"><i class="fa  fa-cogs"></i> <span>Manage User</span></a></li> -->
                 
                 <!-- Manageuser will be added soon -->
                 
                 <!-- <li><a href="manageevent.php"><i class="fa  fa-cogs"></i> <span>Manage Event</span></a></li> -->
                 
                  <li><a href="managehighlight.php"><i class="fas fa-concierge-bell"></i> <span>Manage Services</span></a></li>
                 
                 <li><a href="managepayment.php"><i class="fal fa-credit-card"></i> <span>Manage Payment Method</span></a></li>
                 
               
                 
                  <li><a href="managepackagebill.php"><i class="far fa-file-invoice-dollar"></i> <span>Manage Package Bill</span></a></li>
  
                  <li><a href="managesellerrequest.php"><i class="fas fa-image"></i> <span>Manage Banner </span></a></li>
                  
                  <li><a href="managebannerbill.php"><i class="fal fa-file-invoice"></i> <span>Manage Banner Bill</span></a></li>
                  
                  <!-- <li><a href="expbusiness.php"><i class="fa  fa-cogs"></i> <span>Expire business alert</span></a></li> -->
                  
                  
                  
                    <li class="menu-list"><a href="#"><i class="far fa-warehouse-alt"></i> <span>Manage Seller MIS</span></a>
                        
                    <ul class="sub-menu-list">
                        <li><a href="packagemis.php"><i class="far fa-archive"></i> <span>Package MIS</span> </a></li>
                        <li><a href="bannermis.php"><i class="far fa-image"></i> <span>Banner MIS</span> </a></li>
                        
                    </ul>
                </li>
                 
                  
            </ul>

        </div>
    </div>