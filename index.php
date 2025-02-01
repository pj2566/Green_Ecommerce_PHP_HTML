<?php
session_start();
$count = 0;
// connect to database

$title = "Index";
require_once "./template/header.php";
require_once "./functions/database_functions.php";
$conn = db_connect();
$row = select4LatestBook($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .iconwrapper {
      display: flex;
      justify-content: center;
      margin-top: 50px; /* Adjust margin as needed */
    }
    .background-white {
      background-color: white;
      padding: 10px; /* Adjust padding as needed */
      border-radius: 5px; /* Add border radius for styling */
    }
    body {
      background-color: white; /* Change body background color to white */
    }
    /* Popup styles */
    .popup {
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #fff;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      z-index: 9999;
    }
  </style>
</head>
<body>
<div class="container">
  <div class="background-white"> <!-- Added div with background-white class -->
    <p class="lead text-center text-muted" style="color: #000; font-weight: bold;">Best Sellers</p>
  </div>
  <div class="row">
    <?php foreach($row as $book) { ?>
    <div class="col-md-3">
      <a href="book.php?bookisbn=<?php echo $book['book_isbn']; ?>">
        <img class="img-responsive img-thumbnail" src="./bootstrap/img/<?php echo $book['book_image']; ?>">
      </a>
    </div>
    <?php } ?>
  </div>
</div>

<!-- Popup HTML -->
<div id="popup" class="popup">
  <p>GET 50% OFF</p>
  <p>Add a picture of yours planting seed with your unique promo code and get upto 50% off. No spam,</p>
  <button class="start-shopping-btn">Start Shopping</button>
</div>

<style>
.popup {
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 80px; /* Increased padding */
  border: 3px solid green; /* Added green border */
  border-radius: 5px;
  z-index: 9999;
  width: 800px; /* Increased width */
  max-width: 90%; /* Set a maximum width to ensure responsiveness */
  height: 400px; /* Increased height */
  display: flex;
  flex-direction: column;
  justify-content: space-between; /* Space between content and button */
}

.start-shopping-btn {
  background-color: green;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  align-self: flex-end; /* Align button to the end (right side) */
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
  // Show popup when page loads
  document.getElementById("popup").style.display = "block";

  // Close popup when anywhere on the screen is clicked
  document.addEventListener("click", function() {
    document.getElementById("popup").style.display = "none";
  });
});
</script>







</div>
<div class="container">
  <div class="row">
    <div class="col-md-3">
      <div class="item text-center">
        <img src="https://www.bookswagon.com/Images/staticimages/icon1.png" width="71px" height="71px" alt="Best seller"><br>
        <span>Best Seller</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="item text-center">
        <img src="https://www.bookswagon.com/Images/staticimages/icon8.png" width="71px" height="71px" alt="Award Winners"><br>
        <span>Award Winners</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="item text-center">
        <img src="https://www.bookswagon.com/Images/staticimages/icon4.png" width="71px" height="71px" alt="Box Sets"><br>
        <span>Box Sets</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="item text-center">
        <img src="https://www.bookswagon.com/Images/staticimages/icon7.png" width="71px" height="71px" alt="International Best Seller"><br>
        <span>International Best Seller</span>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <!-- Add more columns here -->
</div>
</div>
<style>
.item {
  margin-bottom: 20px;
}
</style>
</body>
</html>

<footer class="pt-5 pb-1">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-12 pl-0">
        <div class="row">
          <div class="col-sm-3">
            <h4>Company</h4>
            <ul class="list-unstyled text-center">
              <li class="list-inline-item"><a href=>About Us</a></li>
              <li><a href=>Career</a></li>
              <li><a href= >Blog</a></li>
              <li><a href=>Contact Us</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4>Policies</h4>
            <ul class="list-unstyled text-center">
              <li><a href=>Privacy Policies</a></li>
              <li><a href=>Terms of Use</a></li>
              <li><a href=>Secure Shopping</a></li>
              <li><a href=>Copyright Policy</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4>Help</h4>
            <ul class="list-unstyled text-center">
              <li><a href=>Payment</a></li>
              <li><a href=>Shipping</a></li>
              <li><a href=>Return</a></li>
              <li><a href=>FAQ</a></li>
            </ul>
          </div>
          <div class="col-sm-3">
            <h4>Misc</h4>
            <ul class="list-unstyled text-center">
              <li><a href=>Affiliate</a></li>
              <li><a href=>Sitemap</a></li>
            </ul>
          </div>
        </div>
        <ul class="list-unstyled icons list-inline text-center">
          <li class="list-inline-item"><a href="https://www.facebook.com/tushar.ahlawat.5055?mibextid=LQQJ4d" target="_blank"><img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/facebook.png" alt="Facebook" width="32px" height="32px"></a></li>
          <li class="list-inline-item"><a href="https://twitter.com/0xSoumya" target="_blank"><img src="https://www.bookswagon.com/Images/staticimages/twitter.png" alt="Twitter" width="32px" height="32px"></a></li>
          <li class="list-inline-item"><a href="https://www.linkedin.com/in/soumya-upadhyay-175306258/" target="_blank"><img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/linkedin.png" alt="Linkedin" width="32px" height="32px"></a></li>
          <li class="list-inline-item"><a href="https://www.pinterest.co.uk/bookswagon/" target="_blank"><img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/pinterest.png" alt="Pinterest" width="32px" height="32px"></a></li>
          <li class="list-inline-item"><a target="_blank" href="https://youtube.com/@metushar8191?feature=shared"><img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/youtube.png" alt="Youtube" width="32px" height="32px"></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/praski_chuski/" target="_blank"><img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/instagram.png" alt="Instagram" width="32px" height="32px"></a></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12  text-center text-light copyrighttext mb-3">
        Copyright © 2024 . GreenBooks.com . <span class="allrightreserve">All Rights Reserved @TSP</span>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
