<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dog & Puppy Adoption</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="new.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', sans-serif;
    }
    .card-content {
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .right-box {
      background: #fff;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .right-box img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
    }
    .banner {
      background-color: #fff;
      padding: 15px;
      margin-top: 20px;
      border-radius: 10px;
      text-align: center;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .banner img {
      max-height: 60px;
    }
  </style>
</head>
<body>
<!-- Navbar Start -->
  <nav>
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
    </div>

    
    <button class="dark-toggle" onclick="toggleDarkMode()"> Dark Mode</button>
  </nav>

  <main style="padding: 2rem;"></main>
<!-- Navbar End -->



  <!-- Page Heading -->
  <h2 class="fw-bold mb-4">Dog & Puppy Adoption</h2>

  <div class="row g-4">
    <!-- Left Column -->
    <div class="col-md-8">
      <div class="card-content">
        <p>
          Ready to add a furry friend to your family? Our comprehensive articles cover everything you need to know about adopting
          a dog or puppy, from finding the best organization to understanding the adoption process. Our team of experts and
          experienced animal advocates are here to guide you every step of the way and help you find the perfect canine companion
          for your home. Whether you're looking for a playful puppy or a laid-back senior dog, there’s a wide variety of adoptable
          dogs out there, each with its unique charm, and we’re here to assist you throughout the process. Read our articles today
          and open your heart to the possibilities of finding your perfect canine companion!
        </p>
      </div>

      <!-- Banner Ad -->
      <div class="banner mt-4">
        <img src="https://placehold.co/250x60?text=Shelters+are+full%21+Help+pets+get+out." alt="Ad Banner">
        <p class="text-muted small mt-2">Sponsored ad</p>
      </div>
    </div>

    <!-- Right Column -->
    <div class="col-md-4">
      <div class="right-box">
        <div class="d-flex justify-content-center gap-2 mb-2">
          <img src="image/adopt/1.jpg" alt="Dog 1">
          <img src="image/adopt/2.jpg" alt="Dog 2" style="border: 2px solid #00c2ff;">
        </div>
        <h5 class="fw-semibold">Find your best match</h5>
        <p class="text-muted">It only takes 60 seconds.</p>
        <a href="matfrom.php" class="btn btn-purple w-100" style="background-color: #8000ff; color: #fff;">GET STARTED</a>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

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
<script>
     function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
      const toggle = document.querySelector('.dark-toggle');
      if (document.body.classList.contains('dark-mode')) {
        toggle.innerHTML = '☀️ Light Mode';
      } else {
        toggle.innerHTML = '🌙 Dark Mode';
      }
    }
  </script>
</html>
