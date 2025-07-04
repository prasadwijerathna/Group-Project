<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lost & Found - PetPulse</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
      crossorigin="anonymous"
    ></script>
    <style>
      :root {
        --primary-color: #ff6b6b;
        --secondary-color: #4ecdc4;
        --accent-color: #45b7d1;
        --warning-color: #f9ca24;
        --success-color: #6c5ce7;
      }

      body {
        font-family: "Arial", sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        margin: 0;
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

      .logo {
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
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

      @keyframes gradientShift {
        0% {
          background-position: 0% 50%;
        }
        50% {
          background-position: 100% 50%;
        }
        100% {
          background-position: 0% 50%;
        }
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

      .main-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 0 1rem;
      }

      .page-header {
        text-align: center;
        color: white;
        margin-bottom: 3rem;
      }

      .page-header h1 {
        font-size: 3rem;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      }

      .section-card {
        background: rgba(255, 255, 255, 0.95);
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        transition: transform 0.3s ease;
      }

      .section-card:hover {
        transform: translateY(-5px);
      }

      .section-title {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        gap: 1rem;
      }

      .lost-title {
        color: var(--primary-color);
      }

      .found-title {
        color: var(--success-color);
      }

      .pet-card {
        background: white;
        border-radius: 15px;
        padding: 1.5rem;
        margin-bottom: 1rem;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border-left: 5px solid var(--secondary-color);
        transition: all 0.3s ease;
      }

      .pet-card:hover {
        transform: translateX(5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
      }

      .pet-image {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 1rem;
        border: 3px solid var(--secondary-color);
      }

      .pet-info h4 {
        color: #333;
        margin-bottom: 0.5rem;
      }

      .pet-info p {
        color: #666;
        margin-bottom: 0.3rem;
      }

      .contact-info {
        background: var(--warning-color);
        padding: 0.5rem 1rem;
        border-radius: 20px;
        display: inline-block;
        color: #333;
        font-weight: bold;
        margin-top: 0.5rem;
      }

      .report-form {
        background: linear-gradient(
          135deg,
          var(--accent-color),
          var(--secondary-color)
        );
        color: white;
        border-radius: 20px;
        padding: 2rem;
        margin-top: 2rem;
      }

      .form-control {
        border-radius: 10px;
        border: none;
        padding: 0.75rem;
        margin-bottom: 1rem;
      }

      .btn-custom {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 25px;
        font-weight: bold;
        transition: all 0.3s ease;
      }

      .btn-custom:hover {
        background: #ff5252;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(255, 107, 107, 0.4);
      }

      .pet-footer {
        background: linear-gradient(45deg, #ffb347, #ffcc33, #ffb6c1);
        color: #333;
        padding: 2rem 1rem 1rem;
        font-family: "Segoe UI", sans-serif;
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

      .dark-mode {
        background: #1a1a1a;
        color: white;
      }

      .dark-mode .section-card {
        background: rgba(40, 40, 40, 0.95);
        color: white;
      }

      .dark-mode .pet-card {
        background: #333;
        color: white;
      }

    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .page-header h1 {
        font-size: 2rem;
      }
      
      .pet-card {
        text-align: center;
      }
      
      .pet-image {
        margin: 0 0 1rem 0;
      }
    }
  </style>
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

      <button class="dark-toggle" onclick="toggleDarkMode()">Dark Mode</button>
    </nav>

    <div class="main-container">
      <div class="page-header">
        <h1>🐾 Lost & Found Pets</h1>
        <p>Help reunite pets with their families</p>
      </div>

      <!-- Lost Pets Section -->
      <div class="section-card">
        <h2 class="section-title lost-title">
          🔍 Lost Pets
          <span
            style="
              font-size: 1rem;
              background: var(--primary-color);
              color: white;
              padding: 0.3rem 0.8rem;
              border-radius: 20px;
            "
            >3 Active</span
          >
        </h2>

        <div class="row">
          <div class="col-md-6">
            <div class="pet-card d-flex">
              <img
                src="https://images.unsplash.com/photo-1552053831-71594a27632d?w=150&h=150&fit=crop&crop=face"
                alt="Lost Dog"
                class="pet-image"
              />
              <div class="pet-info">
                <h4>Max - Golden Retriever</h4>
                <p><strong>Last seen:</strong> Park Avenue, May 25th</p>
                <p>
                  <strong>Description:</strong> Friendly golden retriever,
                  wearing blue collar
                </p>
                <p><strong>Age:</strong> 3 years old</p>
                <div class="contact-info">📞 Contact: 071-234-5678</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="pet-card d-flex">
              <img
                src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=150&h=150&fit=crop&crop=face"
                alt="Lost Cat"
                class="pet-image"
              />
              <div class="pet-info">
                <h4>Luna - Persian Cat</h4>
                <p><strong>Last seen:</strong> Main Street, May 24th</p>
                <p>
                  <strong>Description:</strong> White persian cat with blue eyes
                </p>
                <p><strong>Age:</strong> 2 years old</p>
                <div class="contact-info">📞 Contact: 071-987-6543</div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="pet-card d-flex">
              <img
                src="https://images.unsplash.com/photo-1587300003388-59208cc962cb?w=150&h=150&fit=crop&crop=face"
                alt="Lost Dog"
                class="pet-image"
              />
              <div class="pet-info">
                <h4>Buddy - Mixed Breed</h4>
                <p><strong>Last seen:</strong> Central Park, May 23rd</p>
                <p>
                  <strong>Description:</strong> Small brown and white mixed
                  breed
                </p>
                <p><strong>Age:</strong> 1 year old</p>
                <div class="contact-info">📞 Contact: 071-456-7890</div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Found Pets Section -->
      <div class="section-card">
        <h2 class="section-title found-title">
          ✅ Found Pets
          <span
            style="
              font-size: 1rem;
              background: var(--success-color);
              color: white;
              padding: 0.3rem 0.8rem;
              border-radius: 20px;
            "
            >2 Waiting</span
          >
        </h2>

        <div class="row">
          <div class="col-md-6">
            <div class="pet-card d-flex">
              <img
                src="https://images.unsplash.com/photo-1583337130417-3346a1be7dee?w=150&h=150&fit=crop&crop=face"
                alt="Found Dog"
                class="pet-image"
              />
              <div class="pet-info">
                <h4>Found: Small Terrier</h4>
                <p><strong>Found on:</strong> Queen Street, May 26th</p>
                <p>
                  <strong>Description:</strong> Small black terrier, very
                  friendly
                </p>
                <p><strong>Currently at:</strong> City Animal Shelter</p>
                <div class="contact-info">📞 Contact: 071-111-2222</div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="pet-card d-flex">
              <img
                src="https://images.unsplash.com/photo-1596854407944-bf87f6fdd49e?w=150&h=150&fit=crop&crop=face"
                alt="Found Cat"
                class="pet-image"
              />
              <div class="pet-info">
                <h4>Found: Orange Tabby</h4>
                <p><strong>Found on:</strong> Hill Road, May 27th</p>
                <p>
                  <strong>Description:</strong> Orange tabby cat, well-groomed
                </p>
                <p><strong>Currently at:</strong> Pet Care Clinic</p>
                <div class="contact-info">📞 Contact: 071-333-4444</div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Report Form Section -->
    <div class="section-card">
      <div class="row">
        <div class="col-md-6">
          <div class="report-form">
            <h3>🚨 Report a Lost Pet</h3>
            <form method="post">
              <input type="text" class="form-control" placeholder="Pet Name" name="petname">
              <input type="text" class="form-control" placeholder="Pet Type (Dog, Cat, etc.)" name="pet-type">
              <input type="text" class="form-control" placeholder="Breed" name="breed">
         
        
              <input type="text" class="form-control" placeholder="Last Seen Location" name="location">
              <input type="date" class="form-control" name="date">
              <textarea class="form-control" rows="3" placeholder="Description & Special Features" name="message"></textarea>
              <input type="tel" class="form-control" placeholder="Your Phone Number" name="phone-no">
              <input type="file" id="petPhoto" name="petPhoto" accept="image/*" required/ name="image"><p></p>
              <button type="submit" class="btn btn-custom" name="lost">Report Lost Pet</button>
            </form>
          </div>
        </div>
        
        <div class="col-md-6">
          <div class="report-form" style="background: linear-gradient(135deg, var(--success-color), var(--secondary-color));">
            <h3>🎉 Report a Found Pet</h3>
            <form method="POST" action="lost&found.php" >
              <input type="text" class="form-control" placeholder="Pet Type (Dog, Cat, etc.)" name="pettype">
              <input type="text" class="form-control" placeholder="Breed (if known)" name="breed">
              <input type="text" class="form-control" placeholder="Found Location" name="location">
              <input type="date" class="form-control" name="date">
              <textarea class="form-control" rows="3" placeholder="Description & Condition" name="msg"></textarea>
              <input type="text" class="form-control" placeholder="Current Location/Shelter" name="current">
              <input type="tel" class="form-control" placeholder="Your Phone Number" name="phone">
              <button type="submit" class="btn btn-custom" name="submit">Report Found Pet</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
  //lost part
include "admin.php";

if(isset($_POST['lost'])){
$petname = $_POST['petname'];
$pettype = $_POST['pet-type'];
$breed = $_POST['breed'];
$location = $_POST['location'];
$date = $_POST['date'];
$msg = $_POST['msg'];
$phoneno = $_POST['phone-no'];
$image = $_POST['image'];

// Insert data
$sql = "INSERT INTO lost( pet_name,  pet_type,breed,last_location,date,message,telephone,image) VALUES ('$petname','$pettype', 
'$breed', '$location','$date','$msg','$phoneno','$image')";
$rst=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
  echo "Record added successfully!";
} else {

}

$conn->close();
}
?>

  <?php
  //found part
include "admin.php";

if(isset($_POST['submit'])){
$pettype = $_POST['pettype'];
$breed = $_POST['breed'];
$location = $_POST['location'];
$date = $_POST['date'];
$msg = $_POST['msg'];
$current = $_POST['current'];
$phone = $_POST['phone'];

// Insert data
$sql = "INSERT INTO found (pet_type, breed,location,found_date,message,current_location,telephone) VALUES ('$pettype', 
'$breed', '$location','$date','$msg','$current','$phone')";
$rst=mysqli_query($conn,$sql);

if ($conn->query($sql) === TRUE) {
  echo "Record added successfully!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>




    <footer class="pet-footer">
      <div class="footer-container">
        <div class="footer-about">
          <h2>🐾 PetCare</h2>
          <p>
            We care for your furry friends with love and joy. Visit us for
            grooming, training, and pet products!
          </p>
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
            <a href="#"
              ><img
                src="https://img.icons8.com/color/48/facebook-new.png"
                alt="Facebook"
            /></a>
            <a href="#"
              ><img
                src="https://img.icons8.com/color/48/instagram-new.png"
                alt="Instagram"
            /></a>
            <a href="#"
              ><img
                src="https://img.icons8.com/color/48/twitter--v1.png"
                alt="Twitter"
            /></a>
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
</body>
</html>
