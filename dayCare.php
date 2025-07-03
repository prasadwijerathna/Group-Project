<?php
// Start PHP block before HTML
include "admin.php"; // this should create $conn

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
  $pettype = $_POST['pettype'];
  $service = $_POST['service'];
  $address = $_POST['address'];
  $dropoff = $_POST['dropoff'];
  $pickup = $_POST['pickup'];
  $size = $_POST['size'];

  $stmt = $conn->prepare("INSERT INTO daycare (pet_type, service_type, location, drop_off_date, pick_up_date, dog_size) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssss", $pettype, $service, $address, $dropoff, $pickup, $size);

  if ($stmt->execute()) {
    echo "<script>alert('Booking saved successfully!');</script>";
    header("Location:index.php");
  } else {
    echo "<script>alert('Database Error: " . $stmt->error . "');</script>";
  }

  $stmt->close();
  $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pet Daycare Booking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://images.unsplash.com/photo-1543852786-1cf6624b9987') no-repeat center center/cover;
      font-family: 'Segoe UI', sans-serif;
      height: 100vh;
    }

    .search-box {
      background-color: rgba(255, 255, 255, 0.95);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 900px;
      margin: auto;
      margin-top: 100px;
    }

    .pet-size label {
      margin-right: 10px;
    }

    .form-title {
      text-align: center;
      margin-bottom: 20px;
      color: #0d6efd;
    }
  </style>
  <link rel="stylesheet" href="new.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</head>
<body><nav>
    <div class="logo"><strong>PetPulse</strong></div>
    <div class="nav-links">

      <a href="index.php">Home</a>
      <a href="channel.php">Animal Care</a>
      <a href="Lost&Found.php">Lost & Found</a>
      <a href="tranning.php">Tranning</a>
      <a href="adoption.php">mating</a>
      <a href="daycare.php">Daycare</a>
       <a href="gallery.php">Gallery</a>
      <a href="singup.php">SignUp</a>
       <a href="login.php">login</a>
      <a href="https://www.chatbase.co/chatbot-iframe/T4Pz_vQcuKlP_LMoBULzI"> help </a>

    </div>

    
    <button class="dark-toggle" onclick="toggleDarkMode()"> Dark Mode</button>
  </nav>


    <div class="container text-center text-white mt-5">
  <h1 class="display-5 fw-bold">Loving pet care in your neighborhood™</h1>
  <p class="lead">Book trusted sitters and dog walkers </p>
</div>
<div class="container">
  <div class="search-box">

  
    <h2 class="form-title">Book a Pet Daycare Service</h2>
    

    <form method="POST" action="">

      <!-- Pet Type -->
      <div class="mb-3 d-flex gap-3 align-items-center">
        <label class="form-label me-2">I'm booking for:</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="pettype" type="radio" id="dog" value="Dog" checked>
          <label class="form-check-label" for="dog">Dog</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="pettype" type="radio" id="cat" value="Cat">
          <label class="form-check-label" for="cat">Cat</label>
        </div>
      </div>

      <!-- Service Type -->
      <div class="mb-3">
        <label for="service" class="form-label">Select Service</label>
        <select class="form-select" name="service" required>
          <option value="">-- Choose a Service --</option>
          <option value="Boarding">Boarding</option>
          <option value="House Sitting">House Sitting</option>
          <option value="Drop-In Visits">Drop-In Visits</option>
          <option value="Doggy Day Care">Doggy Day Care</option>
          <option value="Dog Walking">Dog Walking</option>
        </select>
      </div>

      <!-- Address and Dates -->
      <div class="row mb-3">
        <div class="col-md-4">
          <input type="text" name="address" class="form-control" placeholder="Zip code or Address" required>
        </div>
        <div class="col-md-4">
          <input type="date" name="dropoff" class="form-control" required>
        </div>
        <div class="col-md-4">
          <input type="date" name="pickup" class="form-control" required>
        </div>
      </div>

      <!-- Dog Size -->
      <div class="mb-3">
        <label class="form-label">Dog Size</label><br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="size" type="radio" value="Small" checked>
          <label class="form-check-label">Small (0-15 lbs)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="size" type="radio" value="Medium">
          <label class="form-check-label">Medium (16-40 lbs)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="size" type="radio" value="Large">
          <label class="form-check-label">Large (41-100 lbs)</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" name="size" type="radio" value="Giant">
          <label class="form-check-label">Giant (101+ lbs)</label>
        </div>
      </div>

      <!-- Submit -->
      <div class="d-grid">
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit Booking</button>

        
      </div>
    </form>
  </div>
</div>
<p></p><p></p>
 <footer class="pet-footer">
  <div class="footer-container">
    <div class="footer-about">
      <h2>🐾 PetCare</h2>
      <p>We care for your furry friends with love and joy. Visit us for grooming, training, and pet products!</p>
    </div>

    <div class="footer-links">
      <h3>Quick Links</h3>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="footer-social">
      <h3>Follow Us</h3>
      <div class="social-icons">
        <a href="#"><img src="https://img.icons8.com/color/48/facebook-new.png" alt="Facebook"></a>
        <a href="#"><img src="https://img.icons8.com/color/48/instagram-new.png" alt="Instagram"></a>
        <a href="#"><img src="https://img.icons8.com/color/48/twitter--v1.png" alt="Twitter"></a>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2025 PetCare. All rights reserved. 🐶🐱</p>
  </div>
</footer>
</body>
</html>
