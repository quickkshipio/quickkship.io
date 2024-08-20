<?php 
include('connection.php');
$pgTitle = "Shipments | ";
include('header.php'); 
$user_id = $_SESSION['id'];
$userEmail = $_SESSION['email'];
if(empty($userEmail)) {
    echo "<script>window.open('https://quickkship.com/login.php', '_SELF');</script>";
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
                    <h2>Shipment History</h2>
                    <a href="/add-shipment"><i class="bi bi-plus"></i></a>
                </div>
                <div class="shipment_labels">
                    <ul></ul>
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

  // SELECT DATA FROM FIREBASE
   const q = query(collectionRef, where("status", "==", 0));

getDocs(q)
  .then((querySnapshot) => {
    querySnapshot.forEach((doc) => {
      const data = doc.data(); // Get document data
        
        const createdAt = new Date(data.createdAt); // Convert Firestore Timestamp to JavaScript Date object
        const estimatedDeliveryDate = new Date(createdAt);
        estimatedDeliveryDate.setDate(estimatedDeliveryDate.getDate() + 3); // Add 3 days to createdAt
        
      const li = document.createElement("li"); // Create <li> element

      // Populate HTML structure with document data
      const trackingID = document.createElement("h3");
      trackingID.textContent = `Tracking ID # ${data.orderID}`;
      li.appendChild(trackingID);

      const address = document.createElement("p");
      address.textContent = data.address;
      li.appendChild(address);

      const packageDimensions = document.createElement("p");
      packageDimensions.textContent = `Package Dimension ${data.packageDimensions}`;
      li.appendChild(packageDimensions);

      const description = document.createElement("h5");
      description.textContent = data.description;
      li.appendChild(description);

      const estimatedDelivery = document.createElement("h2");
      estimatedDelivery.textContent = `Estimated Date of Delivery: ${estimatedDeliveryDate.toLocaleDateString("en-US", { weekday: 'short', month: 'numeric', day: 'numeric', year: 'numeric' })}`;
      li.appendChild(estimatedDelivery);

      const status = document.createElement("p");
      status.textContent = "Status";
      const statusSpan = document.createElement("span");
      statusSpan.textContent = 'Labled';
      status.appendChild(statusSpan);
      status.classList.add("_status");
      li.appendChild(status);

      const actions = document.createElement("p");
      actions.classList.add("actions");
      const printLink = document.createElement("a");
      var pageURL = "https://quickkship.com/shipment-label?orderid="+data.oredrid+"&date="+estimatedDeliveryDate.toLocaleDateString("en-US", { month: 'short', day: 'numeric', year: 'numeric' })+"&dimension="+data.packageDimensions+"&to="+data.recipentName+"&location="+data.address+"&tracking="+data.orderID+"&quantity="+data.quantity;
          // Separate the domain from the rest of the URL
        var parts = pageURL.split("//");
        var domain = parts[0] + "//" + parts[1].split("/")[0];
        var path = parts[1].split("/").slice(1).join("/");
        
        // Separate the query string
        var queryString = path.split("?")[1];
        var queryParameters = queryString.split("&");
        
        // Encode each parameter individually
        var encodedParameters = queryParameters.map(function(parameter) {
            var keyValuePair = parameter.split("=");
            var encodedKey = encodeURIComponent(keyValuePair[0]);
            var encodedValue = encodeURIComponent(keyValuePair[1]);
            return encodedKey + "=" + encodedValue;
        });
        
        // Reconstruct the encoded query string
        var encodedQueryString = encodedParameters.join("&");
        
        // Reconstruct the URL
        var encodedPath = path.split("?")[0] + "?" + encodedQueryString;
        var encodedURL = domain + "/" + encodedPath;
      
      printLink.href = encodedURL;
      printLink.classList.add("btn-print");
      printLink.target = '_blank';
      printLink.innerHTML = '<i class="bi bi-printer"></i>';
      const trashLink = document.createElement("a");
      trashLink.href = "javascript:;";
      trashLink.classList.add("btn-trash");
      trashLink.innerHTML = '<i class="bi bi-trash3"></i>';
      actions.appendChild(printLink);
      actions.appendChild(trashLink);
      li.appendChild(actions);

      // Append <ul> inside div.shipment_labels
      const shipmentLabelsDiv = document.querySelector(".shipment_labels>ul");
      if (shipmentLabelsDiv) {
        shipmentLabelsDiv.appendChild(li);
      } else {
        console.error(".shipment_labels not found in the document.");
      }
    });
  })
  .catch((error) => {
    console.log("Error getting documents: ", error);
  });

</script>
