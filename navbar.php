<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colorful Navbar with Dark Mode</title>
  <style>
    :root {
      --bg-color-light: #ffffff;
      --bg-color-dark: #1a1a1a;
      --text-color-light: #000000;
      --text-color-dark: #ffffff;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--bg-color-light);
      color: var(--text-color-light);
      transition: background-color 0.3s, color 0.3s;
    }

    body.dark-mode {
      background-color: var(--bg-color-dark);
      color: var(--text-color-dark);
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      background: linear-gradient(90deg, #ff6b6b, #feca57, #48dbfb, #1dd1a1);
      background-size: 400% 400%;
      animation: gradientShift 15s ease infinite;
      color: white;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .nav-links {
      display: flex;
      gap: 1rem;
    }

    .nav-links a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: opacity 0.3s;
    }

    .nav-links a:hover {
      opacity: 0.7;
    }

    .dark-toggle {
      background: none;
      border: 2px solid white;
      color: white;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      transition: background 0.3s, color 0.3s;
    }

    body.dark-mode .dark-toggle {
      border-color: #feca57;
      color: #feca57;
    }
  </style>
</head>
<body>
  <?php
function nav(){
  

?>
  <nav>
    <div class="logo"><strong>MySite</strong></div>
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </div>
    <button class="dark-toggle" onclick="toggleDarkMode()">Toggle Dark Mode</button>
  </nav>

  <main style="padding: 2rem;">
    <h1>Welcome!</h1>
    <p>This is a colorful navbar with a dark mode toggle.</p>
  </main>

  <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>






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
<style>
    .pet-footer {
  background: linear-gradient(45deg, #ffb347, #ffcc33, #ffb6c1);
  color: #333;
  padding: 2rem 1rem 1rem;
  font-family: 'Segoe UI', sans-serif;
}

.footer-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  text-align: left;
  gap: 2rem;
}

.footer-about h2 {
  margin-bottom: 0.5rem;
  color: #d35400;
}

.footer-about p {
  max-width: 300px;
  font-size: 0.95rem;
}

.footer-links ul {
  list-style: none;
  padding: 0;
}

.footer-links li {
  margin: 0.5rem 0;
}

.footer-links a {
  text-decoration: none;
  color: #333;
  font-weight: 500;
  transition: color 0.3s;
}

.footer-links a:hover {
  color: #d35400;
}

.footer-social .social-icons a {
  margin-right: 0.5rem;
  display: inline-block;
}

.footer-social img {
  width: 32px;
  height: 32px;
  transition: transform 0.3s;
}

.footer-social img:hover {
  transform: scale(1.2);
}

.footer-bottom {
  text-align: center;
  padding-top: 1rem;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
  font-size: 0.85rem;
  margin-top: 1rem;
}

</style>
</body>
</html>
