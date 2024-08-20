<?php include('header.php'); ?>
    
    <div class="main-banner" style="background-image: url('jobado/layout/images/d.jpg'); padding: 225px 0px;">
      <div class="container">
            <div class="caption header-text">
              <div class="custom-box" style="margin-left: 0;">
              <h2 class="about-heading mb_40 wow fadeInUp" style="font-size: xx-large; line-height: 70px;" data-wow-delay="0.2s">Track your shipment</h2>
              <p>Track your shipment with ease! Enter your unique Tracking ID below and click 'Track Now' for real-time updates on your delivery. Stay informed about the status, location, and estimated delivery time. We're committed to providing accurate and timely tracking details to enhance your experience. Thank you for choosing our services; we're here to keep you informed every step of the way!</p>
               

               
            </div>
            <div class="search-input" style="padding-top: 30px;">
              <form id="searchForm" class="searchForm" action="#">
                <input type="text" placeholder="Tracking ID" class="searchText" id="searchText" name="searchKeyword" />
                <button type="submit" style="background-color: #ffc107;">Track Now</button>
            </form>
            </div>
        </div>
      </div>
    </div>
    <!-- =====  ABOUT END  ===== -->

    


   
    <div class="caption header-text" style="padding-top: 00px; padding-bottom: 20px;">
      <div id="shipmentCardContainer" style="display: none;">
        <!-- Your card content goes here -->
        <div class="shipmentCard">
          <!-- Card content will be dynamically updated here -->
        </div>
      </div>
  </div>
    
    </div>
   
<?php include('footer.php'); ?>