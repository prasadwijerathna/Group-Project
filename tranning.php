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

    </div>

    
    <button class="dark-toggle" onclick="toggleDarkMode()"> Dark Mode</button>
  </nav>
<style>
    body {
  font-family: 'Comic Sans MS', cursive, sans-serif;
  margin: 0;
  background: #fff5e1;
  color: #333;
  text-align: center;
}

header {
  background: #ffb347;
  padding: 2rem;
  color: white;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.packages {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 1rem;
  padding: 2rem;
}

.package {
  padding: 1.5rem;
  border-radius: 20px;
  color: white;
  cursor: pointer;
  transition: transform 0.3s ease;
}

.package:hover {
  transform: scale(1.05);
}

.basic {
  background: #ff6f61;
}

.advanced {
  background: #6a5acd;
}

.social {
  background: #20b2aa;
}

.behavior {
  background: #f08080;
}

.details {
  display: none;
  margin-top: 1rem;
}

footer {
  background: #ffb347;
  padding: 1rem;
}

footer button {
  background: #fff;
  border: none;
  padding: 0.8rem 1.5rem;
  font-size: 1rem;
  border-radius: 10px;
  cursor: pointer;
}

</style>
<script>
    function toggleDetails(id) {
  const detail = document.getElementById(id);
  detail.style.display = detail.style.display === 'block' ? 'none' : 'block';
}

</script>
<header><br>
    <h1>🐶 Happy Paws Training</h1>
    <p>Fun & Colorful Pet Training Sessions</p>
  </header>
<video width="640" height="360" controls>
  <source src="1.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>

  <section class="packages">
    <div class="package basic" onclick="toggleDetails('details1')">
      <h2>🐾 Basic Obedience</h2>
      <p class="details" id="details1">Learn sit, stay, come, and leash training. Perfect for puppies!</p>
    </div>

    <div class="package advanced" onclick="toggleDetails('details2')">
      <h2>🐕 Advanced Skills</h2>
      <p class="details" id="details2">Includes heel, off-leash control, and trick training.</p>
    </div>

    <div class="package social" onclick="toggleDetails('details3')">
      <h2>🐕‍🦺 Socialization</h2>
      <p class="details" id="details3">Helps pets interact positively with people and other pets.</p>
    </div>

    <div class="package behavior" onclick="toggleDetails('details4')">
      <h2>🐩 Behavioral Training</h2>
      <p class="details" id="details4">Corrects issues like barking, chewing, and jumping.</p>
    </div>
  </section>

  <footer>
    <a href="trainfrom.php"><button onclick="alert('Contact us to book a session!')">Book a Session</button></a>
  </footer>
</body>


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
</div>
</body>
</html>
