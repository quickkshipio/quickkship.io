<footer class="new_footer_area bg_color">
  <div class="new_footer_top">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_18" style="padding-top: 20px;">Get in Touch</h3>
                      <p>We'd love to hear from you! Whether you have questions, feedback, or inquiries about our services, our team is here to assist you. Your satisfaction is our priority, and we're committed to providing exceptional support!</p>
                     
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_18" style="padding-top: 20px;">Download</h3>
                      <ul class="list-unstyled f_list">
                          <li><a href="#">Android App</a></li>
                          <li><a href="https://apps.apple.com/us/app/quickkship-admin/id6475731450">IOS App</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_18" style="padding-top: 20px;">Helpful Links</h3>
                      <ul class="list-unstyled f_list">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="tracking.html">Tracking</a></li>
                          <li><a href="contact.html">Contact</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6" >
                  <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                      <h3 class="f-title f_600 t_color f_size_18" style="padding-top: 20px;">Team Solutions</h3>
                      <div class="f_social_icon">
                          <a href="#" class="fab fa-facebook"></a>
                          <a href="#" class="fab fa-twitter"></a>
                          <a href="#" class="fab fa-linkedin"></a>
                          <a href="#" class="fab fa-pinterest"></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="footer_bg">
          <div class="footer_bg_one"></div>
          <div class="footer_bg_two"></div>
      </div>
  </div>
  <div class="footer_bottom">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6 col-sm-7">
                  <p class="mb-0 f_400">© QuickkShip LLC.. 2023 All rights reserved.</p>
              </div>
          </div>
      </div>
  </div>
</footer>
   
</script>
  <script type="module">
//       document.getElementById("searchForm").addEventListener("submit", function (e) {
//           e.preventDefault(); // Prevents the default form submission
  
//           const searchText = document.getElementById('searchText').value;
//           const trackingPageURL = window.origin+`/?trackingId=${encodeURIComponent(searchText)}`;
  
//           window.location.href = trackingPageURL;
//   });
    $(document).ready(function() {
        $('.searchForm').submit(function(e) {
            e.preventDefault(); // Prevents the default form submission
    
            const searchText = $('.searchText').val();
            const trackingPageURL = window.origin + '/?trackingId=' + encodeURIComponent(searchText);
    
            window.location.href = trackingPageURL;
        });
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <script src="jobado/layout/js/jQuery_v3.1.1.min.js"></script>
  <script src="jobado/layout/js/owl.carousel.min.js"></script>
  <script src="jobado/layout/js/bootstrap.min.js"></script>
  <script src="jobado/layout/js/isotope.pkgd.min.js"></script>
  <script src="jobado/layout/js/letters-type.js"></script>
  <script src="jobado/layout/js/menu.js"></script>
  <script src="jobado/layout/js/custom.js"></script>
  <script src="jobado/layout/js/circle-progress.js"></script>
  <script src="jobado/layout/js/circle-progress-examples.js"></script>
  <!--<script src="jobado/layout/js/map.js"></script>-->
  <script src="jobado/layout/js/parallax.js"></script>
  <script src="jobado/layout/js/wow.js"></script>
  <script src="jobado/layout/js/mail.js"></script>
  <script src="jobado/layout/js/mouse_position.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- =====  SCRIPT END  ===== -->
  <script src="assets/js/main.js"></script>
  <script>
       Fancybox.bind('[data-fancybox]', {
        //
      });    
  </script>
  <script type="module">
      import { initializeApp } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-app.js";
      import { getFirestore, collection, getDoc, doc } from "https://www.gstatic.com/firebasejs/10.8.0/firebase-firestore.js";

      const firebaseConfig = {
        apiKey: "AIzaSyAFNy8KHlaIj58oYZAPkI75t4Loezj79YQ",
        authDomain: "quickkship-e4ef8.firebaseapp.com",
        projectId: "quickkship-e4ef8",
        storageBucket: "quickkship-e4ef8.appspot.com",
        messagingSenderId: "884267422531",
        appId: "1:884267422531:web:4dc288db482d0e955015f6",
        measurementId: "G-J2L4BEFRC4"
      };

    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const firestore = getFirestore(app);
    const shipmentsCollection = collection(firestore, 'shipments');
    
    // Function to extract query parameter from URL
    const getQueryParam = (name) => {
      const urlParams = new URLSearchParams(window.location.search);
      return urlParams.get(name);
    };
    
    // Function to perform search
    const performSearch = async (shipmentId) => {
      if (!shipmentId) {
        return; // Exit early if shipmentId is empty
      }
    
      try {
        const shipmentDoc = await getDoc(doc(shipmentsCollection, shipmentId));
    
        if (shipmentDoc.exists()) {
          // Function to format date
        //   const formatDate = (timestamp) => {
        //     const options = {
        //       day: 'numeric',
        //       month: 'numeric',
        //       year: 'numeric',
        //       hour: 'numeric',
        //       minute: 'numeric',
        //       hour12: true
        //     };
        //     return new Date(timestamp).toLocaleString('en-US', options);
        //   };
        const formatDate = (timestamp) => {
          const date = new Date(timestamp);
        
          // Define month names array
          const monthNames = [
            'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
          ];
        
          // Get month, day, year, hour, and minute from the date object
          const month = monthNames[date.getMonth()];
          const day = date.getDate();
          const year = date.getFullYear();
          let hour = date.getHours();
          const minute = (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
          const period = (hour >= 12) ? 'pm' : 'am';
        
          // Convert 24-hour time to 12-hour format
          hour = (hour % 12) || 12;
        
          // Construct the formatted date string
          const formattedDate = `${month} - ${day}- ${year} at ${hour}:${minute}${period}`;
        
          return formattedDate;
        };
    
          // Function to calculate expected delivery date
        //   const expectedDeliveryDate = (timestamp) => {
        //     const options = {
        //       day: 'numeric',
        //       month: 'numeric',
        //       year: 'numeric',
        //       hour: 'numeric',
        //       minute: 'numeric',
        //       hour12: true
        //     };
    
        //     const originalDate = new Date(timestamp);
        //     const updatedDate = new Date(originalDate);
        //     updatedDate.setDate(originalDate.getDate() + 3);
    
        //     return updatedDate.toLocaleString('en-US', options);
        //   };
        const expectedDeliveryDate = (timestamp) => {
          const date = new Date(timestamp);
        
          // Define month names array
          const monthNames = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
          ];
        
          // Get month, day, and year for the expected delivery date
          const month = monthNames[date.getMonth()];
          const day = date.getDate();
          const year = date.getFullYear();
        
          // Construct the formatted expected delivery date string
          const formattedDate = `${month} ${day}, ${year}`;
        
          return formattedDate;
        };
        // jQuery('#imageGalleryContainer').append('<div class="proof-image">feasxasd</div>');
        
        // Assuming shipmentDoc.data().images contains the array of image URLs
        
    
          // Construct HTML content for shipment details card
          const cardContainer = document.getElementById('shipmentCardContainer');
          const cardContent = `
            <div class="shipment-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="trackingbox">
                                <div class="trackingid">
                                    <h4>Your Shipment information</h4>
                                    <h3>Tracking #: ${shipmentDoc.data().orderID}</h3>
                                </div>
                                <div class="tracking-date">
                                    <h3>Estimated delivery date:</h3>
                                    <h5>${expectedDeliveryDate(shipmentDoc.data().updatedat)}</h5>
                                </div>
                                <div class="tracking-status">
                                    <h4>Status</h4>
                                    <ul>
                                        <li>
                                            <div>
                                                ${
                                                  shipmentDoc.data().status === 2 ? `<h4>Delivered</h4> <p> ${formatDate(shipmentDoc.data().updatedat)} </p>` :
                                                  shipmentDoc.data().status === 0 ? `<h4>Label Created </h4> <p>${formatDate(shipmentDoc.data().updatedat)}</p>` :
                                                  shipmentDoc.data().status === 1 ? `<h4>Shipped on truck ready for Delivery</h4> <p>${formatDate(shipmentDoc.data().updatedat)}</p>` :
                                                  shipmentDoc.data().status === 3 ? '<h4>Out for Delivery</h4>' :
                                                  '<h4>In Transit</h4>'
                                                }
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tracking-ship">
                                    <h4>Ship to:</h4>
                                    <h3>${shipmentDoc.data().address}</h3>
                                </div>
                                <button class="btn reload-pg" data-fancybox data-src="#our-app">get Updates ></button>
                                <div id="our-app" style="display:none;max-width:800px;">
                                    <div class="col-md-12">
                                        <h2 class="about-heading mb_40" style="font-size: x-large; padding-bottom: 0px; line-height: 70px;">DOWNLOAD OUR QUICKKSHIP APPS FOR REAL TIME TRACKING </h2>
                                        <div class="row text-left">
                                            <div class="col-md-4 col-md-offset-4 mt_30">
                                                <div class="feature-i-left">
                                                    <div class="icon-right">
                                                        <svg fill="#ffc107" height="40px" width="40px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 210 210" xml:space="preserve" stroke="#ffc107">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="M190.32,90.03L36.784,2.266C34.137,0.754,31.19,0,28.243,0c-0.06,0-0.119,0.008-0.178,0.008 c-0.396,0.004-0.791,0.024-1.185,0.055c-0.178,0.014-0.355,0.033-0.533,0.053c-0.308,0.034-0.615,0.077-0.921,0.128 c-0.111,0.019-0.223,0.025-0.334,0.046l0.006,0.008c-1.913,0.353-3.78,1.027-5.515,2.034c-5.314,3.083-8.585,8.762-8.585,14.905 v175.527c0,6.143,3.271,11.822,8.585,14.905c1.734,1.007,3.601,1.682,5.514,2.035l-0.005,0.007c0.1,0.019,0.201,0.025,0.3,0.041 c0.329,0.056,0.659,0.102,0.99,0.137c0.166,0.018,0.331,0.036,0.497,0.049c0.389,0.031,0.777,0.049,1.167,0.054 c0.066,0.001,0.131,0.009,0.197,0.009c2.947,0,5.894-0.754,8.541-2.266L190.32,119.97c5.368-3.069,8.681-8.777,8.681-14.962 c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004c0,0,0-0.003,0-0.004C199.001,98.808,195.688,93.1,190.32,90.03z M129.602,72.601l-15.266,20.027L75.496,41.672L129.602,72.601z M182.876,106.947l-107.38,61.381l67.234-88.206l40.145,22.947 c0.695,0.397,1.127,1.141,1.127,1.938C184.001,105.807,183.569,106.551,182.876,106.947z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h4 class="mb_10 title">Android App</h4>
                                                    <div class="email"><a href="mailto:contactus@quickkship.com?subject=A vistor from Portfolio website&body=Hi Can you give me more info about,%0D%0A%0D%0A" target="_top">View on Play Store</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row text-left">
                                            <div class="col-md-4 col-md-offset-4 mt_30">
                                                <div class="feature-i-left">
                                                    <div class="icon-right">
                                                        <svg fill="#ffc107" width="40px" height="40px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                                            <g id="SVGRepo_iconCarrier">
                                                                <path d="m12.434 4.693c.132-.225.345-.391.598-.458l.007-.002c.082-.028.176-.044.275-.044.177 0 .341.053.479.143l-.003-.002c.219.139.382.349.458.597l.002.008c.025.078.039.169.039.262 0 .192-.06.369-.162.515l.002-.003-4.21 7.307h3.048.029c.467 0 .87.274 1.057.671l.003.007c.118.192.187.425.187.674 0 .232-.061.45-.167.639l.003-.007h-8.947c-.008 0-.017 0-.027 0-.273 0-.52-.111-.699-.291-.179-.175-.29-.418-.29-.688 0-.005 0-.01 0-.014v.001c0-.004 0-.009 0-.014 0-.27.111-.513.29-.688.178-.18.426-.291.699-.291h.028-.001 2.516l3.193-5.564-.971-1.739c-.1-.143-.16-.321-.16-.512 0-.094.014-.184.041-.269l-.002.006c.078-.256.241-.466.456-.602l.004-.003c.134-.089.299-.141.476-.141.098 0 .193.016.281.046l-.006-.002c.26.069.473.235.602.455l.003.005.435.774zm-5.177 12.967c-.151.216-.368.378-.62.458l-.008.002c-.081.027-.175.043-.272.043-.177 0-.342-.052-.481-.142l.003.002c-.227-.13-.394-.344-.459-.598l-.001-.007c-.02-.078-.032-.168-.032-.261 0-.188.048-.365.131-.519l-.003.006.726-1.21c.169-.061.365-.097.569-.097.556 0 1.05.264 1.363.674l.003.004zm11.661-4.644h.027c.273 0 .52.111.699.291.179.175.29.418.29.688v.014-.001.014c0 .27-.111.513-.29.688-.178.18-.426.291-.699.291-.009 0-.019 0-.028 0h.001-1.403l.968 1.645c.075.137.119.3.119.474 0 .107-.017.211-.048.308l.002-.007c-.078.256-.241.466-.456.602l-.004.003c-.134.088-.299.141-.475.141-.098 0-.192-.016-.28-.046l.006.002c-.26-.069-.473-.235-.602-.455l-.003-.005-3.629-6.338c-.273-.429-.435-.952-.435-1.512 0-.184.017-.363.051-.538l-.003.018c.091-.523.352-.974.723-1.304l.002-.002 2.903 5.032zm-6.919-13.015h.077c2.185 0 4.229.602 5.976 1.65l-.053-.029c1.824 1.075 3.304 2.555 4.348 4.322l.031.056c1.018 1.694 1.621 3.738 1.621 5.923v.081-.004.077c0 2.185-.602 4.229-1.65 5.976l.029-.053c-1.075 1.824-2.555 3.304-4.322 4.348l-.056.031c-1.694 1.018-3.738 1.621-5.923 1.621-.027 0-.054 0-.081 0h.004c-.023 0-.05 0-.077 0-2.185 0-4.229-.602-5.976-1.65l.053.029c-1.824-1.075-3.304-2.555-4.348-4.323l-.031-.056c-1.018-1.694-1.621-3.738-1.621-5.923 0-.027 0-.054 0-.081v.004c0-.023 0-.05 0-.077 0-2.185.602-4.229 1.65-5.976l-.029.053c1.075-1.824 2.555-3.304 4.322-4.348l.056-.031c1.694-1.018 3.738-1.621 5.923-1.621h.081-.004zm10.452 11.999c0-.027 0-.058 0-.09 0-1.901-.52-3.681-1.426-5.205l.026.047c-.934-1.588-2.227-2.873-3.772-3.771l-.05-.027c-1.485-.881-3.273-1.402-5.183-1.402-.025 0-.05 0-.075 0h.004c-.022 0-.048 0-.075 0-1.899 0-3.677.521-5.197 1.429l.046-.026c-1.588.934-2.873 2.226-3.771 3.771l-.027.05c-.882 1.485-1.403 3.275-1.403 5.186v.065-.003.075c0 1.899.521 3.677 1.429 5.197l-.026-.046c.934 1.588 2.227 2.873 3.772 3.771l.05.027c1.485.882 3.275 1.403 5.186 1.403h.067-.003.075c1.899 0 3.677-.521 5.197-1.429l-.046.026c1.59-.934 2.876-2.227 3.775-3.773l.027-.05c.882-1.481 1.403-3.267 1.403-5.174 0-.018 0-.037 0-.055v.003z"></path>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                    <h4 class="mb_10 title">iOS App</h4>
                                                    <div class="email"><a href="https://apps.apple.com/us/app/quickkship-admin/id6475731450" target="_top">View on App Store</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card sign-in">
                                <h3>Get package updates, Chat with your driver, and get real-time tracking information. <br>Create your profile now.</h3>
                                <button class="btn sign-btn">Sign up ></button>
                                <h3>Already Enrolled? <a href="javascript:;">Login</a></h3>
                            </div>
                            <div class="card track-package">
                                <h3>Track Another Package</h3>
                                <div class="search-input">
                                    <form id="searchForm" class="searchForm">
                                        <input type="text" placeholder="Tracking ID" class="searchText" id="searchText" name="trackingId" />
                                        <button type="submit" style="background-color: #ffc107;">Track Now</button>
                                    </form>
                                </div>
                            </div>
                            <div id="imageGalleryContainer">
                            </div>
                        </div>
                    </div>
            </div>
          `;
    
          // Show the card container and update its content
          cardContainer.style.display = 'block';
          cardContainer.innerHTML = cardContent;
          
          const prove_images = shipmentDoc.data().images;
            // if(prove_images.length > 0){
            //     jQuery('#imageGalleryContainer').append('<div class="proof-image">\
            //         <a data-fancybox="gallery" class="btn btn-gallery" href="'+prove_images[0]+'">\
            //             Proof Of Delivery\
            //         </a></div><div style="display:none">');
            // }
            if (prove_images.length > 0) {
                // Create the main proof of delivery <a> element
                const mainAnchor = $('<a>')
                    .addClass('btn btn-gallery')
                    .attr('data-fancybox', 'gallery')
                    .attr('href', prove_images[0]) // Link the main <a> to the first image URL
                    .text('Proof Of Delivery'); // Set the text content to "Proof Of Delivery"
            
                // Create the main container <div> for the proof of delivery
                const mainContainer = $('<div>').addClass('proof-image').append(mainAnchor);
            
                // Create the hidden <div> container for additional images
                const hiddenContainer = $('<div>').css('display', 'none');
            
                // Loop through each image URL starting from index 1 (skip the first one)
                for (let i = 1; i < prove_images.length; i++) {
                    // Create <a> element for the thumbnail image
                    const thumbnailAnchor = $('<a>')
                        .attr('data-fancybox', 'gallery')
                        .attr('href', prove_images[i]); // Link the <a> to the current image URL
            
                    // Create <img> element for the thumbnail (using a placeholder image for now)
                    const thumbnailImage = $('<img>')
                        .attr('src', prove_images[i]) // Use the same URL for the thumbnail image
                        .attr('width', '120') // Set width for the thumbnail
                        .attr('height', '80'); // Set height for the thumbnail
            
                    // Append the <img> to the <a> element
                    thumbnailAnchor.append(thumbnailImage);
            
                    // Append the <a> element to the hiddenContainer
                    hiddenContainer.append(thumbnailAnchor);
                }
            
                // Append the hiddenContainer to the mainContainer
                mainContainer.append(hiddenContainer);
            
                // Append the mainContainer to the #imageGalleryContainer
                $('#imageGalleryContainer').append(mainContainer);
            }
            jQuery('.main-banner').hide();
        } else {
          // Display message for no shipment found
          const cardContainer = document.getElementById('shipmentCardContainer');
          const cardContent = `
            <div class="main-banner" style="padding-top:0%">
              <div class="container" style="padding-top:0%">
                <div class="caption header-text">
                  <div class="custom-box" style="background-color: transparent; margin-left: -3%;">
                    <h2 class="about-heading mb_40 wow fadeInUp" style="font-size: xx-large;" data-wow-delay="0.2s">No shipment found with Tracking ID - ${shipmentId}</h2>
                  </div>
                </div>
              </div>
            </div>
          `;
    
          cardContainer.style.display = 'block';
          cardContainer.innerHTML = cardContent;
          
          jQuery('.main-banner').show();
        }
      } catch (error) {
        console.error('Error searching for shipment:', error);
      }
    };
    
    // Check if there is a trackingId parameter in the URL when the page loads
    const trackingId = getQueryParam('trackingId');
    
    // If there is a trackingId, perform the search
    if (trackingId) {
      // Set the search text in the input field
      document.getElementById('searchText').value = trackingId;
    
      // Perform the search
      performSearch(trackingId);
    }
    
    // Add event listener for the search form
    document.getElementById("searchshipment").addEventListener("click", async function (e) {
      e.preventDefault(); // Prevent form submission
      const shipmentId = document.getElementById('searchText').value;
      performSearch(shipmentId);
    });

    </script>
</html>