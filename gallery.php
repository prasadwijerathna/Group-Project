<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   <script>
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }
  </script>
<div class="row">
    <main style="padding: 2rem;">
    <h1>Gallery</h1>

    <button id='img-btn' type="button" class="btn btn-primary btn-sm">Images</button>
    <button id='vdo-btn' type="button" class="btn btn-secondary btn-sm">Videos</button>
<br>
<br>
<!-- Images div -->
<div id='img-div' class="row row-cols-1 row-cols-md-3 g-4">
  <!-- Images div -->

  <!-- Images -->
  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (1).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

   <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (2).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

   <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (3).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (4).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (5).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (6).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (7).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (8).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>

  <div class="col">
    <div class="card h-100">
      <img src="image/gallery/img (9).jpg" class="card-img-top" alt="..." style="width: 100%; height: 100%;">
    </div>
  </div>
  <br>



</div>

<!-- Video div -->
<div id='vdo-div' class="row row-cols-1 row-cols-md-3 g-4" style="display:none">
  <div class="col">
    <div class="card h-100">
<video width="100%" height="100%" controls>
  <source src="image/gallery/vdo1.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>    
</div>
  </div>
  <br>

   <div class="col">
    <div class="card h-100">
<video width="100%" height="100%" controls>
  <source src="image/gallery/vdo2.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
    </div>
  </div>
  <br>

   <div class="col">
    <div class="card h-100">
<video width="100%" height="100%" controls>
  <source src="image/gallery/vdo3.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
    </div>
  </div>
  <br>

</div>
  

</div>
  </main>
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

<br><br>
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
 const imgBtn =  document.getElementById("img-btn");
 const vdoBtn =  document.getElementById("vdo-btn");
 const imgDiv =  document.getElementById("img-div");
 const vdoDiv =  document.getElementById("vdo-div");
 
 imgBtn.addEventListener("click", ()=>{
  vdoDiv.style.display="none";
  imgDiv.style.display="flex";
 })

  vdoBtn.addEventListener("click", ()=>{
  vdoDiv.style.display="flex";
  imgDiv.style.display="none";
 })
</script>
</body>

</html>
