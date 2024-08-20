<?php 
include('connection.php');
$pgTitle = "Add Shipment | ";
include('header.php'); 
$user_id = $_SESSION['id'];
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://tracking.quickkship.com/login', '_SELF');</script>";
}

$getUser = mysqli_query($conn,'SELECT * FROM auth WHERE email = "'.$userEmail.'"');
$userArray = mysqli_fetch_array($getUser);
?>
<div class="user_section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebarMain">
                    <?php include('dashboard-sidebar.php'); ?>
                </div>
            </div>
            <div class="col-md-9">
                <div class="user_block shipment_title_block">
                    <h2>Add New Shipment</h2>
                    <a href="/shipments"><i class="bi bi-arrow-left"></i></a>
                </div>
                <div class="add_shipment_labels">
                    <form id="add_shipment_form" class="add_shipment_form" method="POST">
                        <p>
                            <label>Tracking ID</label>
                            <input type="text" name="tracking_id" id="tracking_id" required>
                        </p>
                        <p>
                            <label>Order ID</label>
                            <input type="text" name="order_id" id="order_id" required>
                        </p>
                        <p>
                            <label>Quantity</label>
                            <input type="text" name="quantity" id="quantity" required>
                        </p>
                        <p>
                            <label>Recipient Name</label>
                            <input type="text" name="recipient_name" id="recipient_name" required>
                        </p>
                        <p>
                            <label>Description</label>
                            <textarea name="description" id="description" required></textarea>
                        </p>
                        <p>
                            <label>Package Dimensions</label>
                            <input type="text" name="package_dimensions" id="package_dimensions" required>
                        </p>
                        <p>
                            <label>ZIP Code</label>
                            <input type="text" name="zip_code" id="zip_code" required>
                        </p>
                        <p>
                            <label>Select User</label>
                            <select name="_user" id="user">
                                <option value="0" selected disabled>Select</option>
                            </select>
                        </p>
                        <p>
                            <label>Location</label>
                            <input type="text" name="location" id="location" required>
                        </p>
                        <img src="jobado/layout/images/Loading-GIF.gif" id="form-loader">
                        <button type="submit">Add Shipment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>

<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-app.js";
  import { getFirestore, collection, getDocs, query, where, addDoc } from "https://www.gstatic.com/firebasejs/10.10.0/firebase-firestore.js";
  
  
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
  const db = getFirestore(app);

  // Reference to a Firestore collection
  const collectionRef = collection(db, 'shipments');
  const currentDate = new Date();

$("#add_shipment_form").submit(function(e) {
    e.preventDefault();
    $("img#form-loader").css('height','100px');
    // INSERT INTO FIREBASE SHIPMENT DATABASE COLLECTION
    // Data to be inserted
    var quantity = Number($("#quantity").val());
    const newData = {
        orderID: $("#tracking_id").val(),
        address: $("#location").val(),
        createdAt: currentDate.toISOString(), // Assuming this is a timestamp
        description: $("#description").val(),
        latitude: 40.8952397, // Example latitude
        longitude: -74.0835263, // Example longitude
        oredrid: $("#order_id").val(),
        packageDimensions: $("#package_dimensions").val(), // Example package dimension.val()s
        quantity: quantity,
        recipientName: $("#recipient_name").val(),
        status: 0,
        uid: $("#tracking_id").val(),
        updatedAt: currentDate.toISOString(), // Assuming this is a timestamp
        zipCode: $("#zip_code").val(),
        zone: "ALL",
        allowTrack: true
    };
    addDoc(collectionRef, newData)
    .then((docRef) => {
        console.log("Document written with ID: ", docRef.id);
        window.open('https://tracking.quickkship.com/shipments','_SELF');
    })
    .catch((error) => {
        console.error("Error adding document: ", error);
    });
});

</script>