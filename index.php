<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pet pulse</title>
  <link rel="stylesheet" href="new.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</head>
<body>

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
      
      <a href="https://www.chatbase.co/chatbot-iframe/T4Pz_vQcuKlP_LMoBULzI"> help </a>

    </div>

    
    <button class="dark-toggle" onclick="toggleDarkMode()"> Dark Mode</button>
  </nav>

  <main style="padding: 2rem;">
    
   <!-- About Us Section -->
<section class="about-section">
  <div class="about-container">
    <h2>About Us</h2>
    <p>
      At <span class="brand">PetPulse</span> , we're passionate about providing complete, compassionate
       care for your furry family members. From health check-ups to training and lost pet recovery, our services
        are designed to keep pets happy, healthy, and safe. We combine expert care with modern
       solutions to be your trusted partner in every step of your pet's journey.
    </p>
  </div>
</section>
<div class="row">
  
  <main style="padding: 2rem;">

    <p></p>
    <!-- Our Services Section -->
<section class="services-section">
  <h2>Our Services</h2>
  <div class="services-container">
    <div class="service-card">
      <h3>Animal Care</h3>
      <p>Comprehensive health check-ups and personalized treatment for your beloved pets.</p>
    </div>
    <div class="service-card">
      <h3>Lost & Found</h3>
      <p>Helping reunite lost pets with their families through community alerts and tracking.</p>
    </div>
    <div class="service-card">
      <h3>Training</h3>
      <p>Fun and effective obedience training programs for pets of all ages.</p>
    </div>
    <div class="service-card">
      <h3>Mating Services</h3>
      <p>Safe and responsible breeding guidance under expert supervision.</p>
    </div>
    <div class="service-card">
      <h3>Daycare</h3>
      <p>Safe, fun, and social daycare environment while you’re away.</p>
    </div>
    <div class="service-card">
      <h3>Gallery</h3>
      <p>Explore happy moments, success stories, and pet transformations!</p>
    </div>
  </div>

<!-- CSS Styling -->
<style>
  nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  z-index: 1000; /* ensures it's above all content */
  background-color: #0077b6; /* optional, for visibility */
  box-shadow: 0 2px 10px rgba(0,0,0,0.2); /* optional, adds depth */
}

  .about-section {
    background: linear-gradient(to right, #ffecd2, #fcb69f);
    color: #333;
    padding: 60px 20px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
  }

  .about-container {
    max-width: 800px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
  }

  .about-section h2 {
    font-size: 2.5rem;
    margin-bottom: 20px;
    color: #ff6f61;
  }

  .about-section p {
    font-size: 1.1rem;
    line-height: 1.8;
  }

  .brand {
    font-weight: bold;
    color: #ff6f61;
  }

  @media (max-width: 600px) {
    .about-section {
      padding: 40px 10px;
    }

    .about-section h2 {
      font-size: 2rem;
    }

    .about-section p {
      font-size: 1rem;
    }
  }
</style>

  </main>


  <div class="row">
    
  </div>
  <div class="row">
   <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/Home/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/Home/2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image/Home/4.avif" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
  </div>
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

</section>

<!-- CSS Styling -->
<style>
  .services-section {
    background: linear-gradient(to right, #fceabb, #f8b500);
    color: #333;
    padding: 60px 20px;
    text-align: center;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .services-section h2 {
    font-size: 2.5rem;
    margin-bottom: 40px;
    color: #6a1b9a;
  }

  .services-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
  }

  .service-card {
    background: white;
    border-radius: 16px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    width: 280px;
    padding: 25px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .service-card h3 {
    font-size: 1.4rem;
    margin-bottom: 15px;
    color: #ff6f00;
  }

  .service-card p {
    font-size: 1rem;
    line-height: 1.6;
  }

  .service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
  }

  @media (max-width: 768px) {
    .service-card {
      width: 90%;
    }

    .services-section h2 {
      font-size: 2rem;
    }
  }
</style>
<p></p>
<div class="row">
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

</div>
</body>
</html>
