<?php 
session_start();
$tmp = $_SESSION['username'];



  if(isset($_POST['appointment'])){
  if(!empty($_SESSION)){
    // header('Location:appoinment.php');
    echo "<script>window.location.href='appoinment.php';</script>";
    }
    else{
     header('Location:login.php'); 
    }
 
  }
  
?>
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
    <h1>Animal Care</h1>
    <h3>- Our Services -</h3>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="image/Channel/pic1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dental Services</h5>
        <p class="card-text">
Dental pain can be as uncomfortable and painful for animals as it would be for us humans.

Pet Vet is a pioneer in animal dentistry, and have strived from the outset to highlight its importance to overall quality of an animal’s life. We encourage our customers to bring their companion animals in for regular annual check-ups to ensure their dental health isn’t ignored.</p>
      </div>
    </div>
  </div>
  <br>
  <div class="col">
    <div class="card h-100">
      <img src="image/Channel/pic3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Companion Animal Surgery</h5>
        <p class="card-text">PetVet offers all surgery procedures from the standard to more complex operations such as ophthalmic and orthopedic surgeries.

Surgeries are conducted in a sterile, fully equipped, and state-of-the-art theatre. Our highly qualified team of surgeons and nursing staff has many years of experience – both internationally and locally.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="image/Channel/pic2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Companion Animal Medical Services</h5>
        <p class="card-text">From the very beginning of operations, PetVet’s founder-doctors have always sought to raise the bar on quality of veterinarian care in Sri Lanka. PetVet’s team of veterinarians combine a strong fundamental grasp of general medicine with areas of special interest.</p>
      </div>
    </div>
  </div>
</div>
<br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="image/Channel/pic6.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Pet Salon</h5>
        <p class="card-text">Good grooming is just as important for your pet as it is for all of us. To make this convenient, and pleasure for your pet, our specially trained teams are available to keep your pet well groomed and looking fine at all times.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/Channel/pic7.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">House Visits</h5>
        <p class="card-text">Modern life often leads to rough and tough days for us all. Regardless we know your pet is constantly on your mind. If you need us on a busy day, our teams are happy to help you out by bringing our services to your doorstep.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/Channel/pic5.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">In-house Pharmacy</h5>
        <p class="card-text">For your convenience PetVet’s well-stocked pharmacy includes animal-specific medication as well as a wide array of food for dogs and cats, including specialized diets. Our veterinary team is constantly learning about new and innovative products and we strive to obtain these, often from international suppliers because we know your pet deserves the best.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="image/Channel/pic4.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Laboratory Services</h5>
        <p class="card-text">PetVet’s state-of-the-art laboratory is operated by staff who bring over 20 years experience with animals. This ensures accurate, precise laboratory results at all times. Our clinicians work as teams with our lab technicians to make sure these results are converted to a good diagnosis.</p>
      </div>
    </div>
  </div>
</div>
  </main>
</div>

<form method="POST" >
  <a href="doctor.php"><button type="button" class="btn btn-primary btn-sm">Meet Doctors</button></a>
  <button type="submit" name="appointment" class="btn btn-secondary btn-sm">Book Appoinment</button>

</form>


<!-- 
<a href="appoinment.php"></a> -->
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
</body>
</html>

<?php  

?>
