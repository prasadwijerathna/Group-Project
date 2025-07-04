<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Sign Up | PetPulse</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap"
    rel="stylesheet"
  />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Quicksand', sans-serif;
      height: 100vh;
      display: flex;
      background: #fefefe;
    }

    .signup-container {
      display: flex;
      flex: 1;
      height: 100vh;
    }

    .left {
      flex: 1;
      background-image: url('https://images.unsplash.com/photo-1601758174933-1b5c8aee32c2?auto=format&fit=crop&w=1050&q=80');
      background-size: cover;
      background-position: center;
      position: relative;
    }

    .left::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
    }

    .left-text {
      position: absolute;
      color: #fff;
      font-size: 2rem;
      font-weight: 600;
      top: 50%;
      left: 10%;
      transform: translateY(-50%);
      z-index: 2;
    }

    .right {
      flex: 1;
      padding: 3rem 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #ffffff;
    }

    h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #1b9aaa;
    }

    form {
      width: 100%;
      max-width: 400px;
      margin: 0 auto;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
    }

    input,
    select {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: border 0.3s;
      font-size: 1rem;
    }

    input:focus,
    select:focus {
      border-color: #1b9aaa;
      outline: none;
    }

    button {
      width: 100%;
      padding: 0.8rem;
      border: none;
      background: #1b9aaa;
      color: #fff;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #14727d;
    }

    .footer-text {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.9rem;
    }

    .footer-text a {
      color: #1b9aaa;
      text-decoration: none;
    }

    @media (max-width: 768px) {
      .signup-container {
        flex-direction: column;
      }

      .left {
        height: 250px;
      }

      .left-text {
        font-size: 1.5rem;
        top: 40%;
      }
    }
  </style>
</head>
<body><br>
  <div class="signup-container">
    <div class="left">
      <div class="left-text">🐾 Join PetPulse<br />Care Starts With You</div>
    </div>

    <div class="right">
      <h2>Create Your Account</h2><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form id="signupForm" method="POST" action="singup.php" >

        <label for="ownerName">Owner Name</label>
        <input type="text" id="ownerName" name="ownerName" required />

        <label for="petName">Pet Name</label>
        <input type="text" id="petName" name="petName" required />

        <label for="petCategory">Pet Category</label>
        <select id="petCategory" name="petCategory" required>
          <option value="">-- Select --</option>
          <option value="parrot">Parrot</option>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
        </select>

           <label for="usertype">user type</label>
        <select id="usertype" name="usertype" required>
          <option value="">-- Select --</option>
          <option value="petowner">Pet owner</option>
          <option value="doctor">Doctor</option>
          <option value="trainer">Trainer</option>
        </select>
        <label for="age">Age (Years)</label>
        <input
          type="number"
          id="age"
          name="age"
          min="0"
          max="50"
          step="1"
          required
          placeholder="e.g. 3"
        />

        <label for="breed">Breed</label>
        <input type="text" id="breed" name="breed" required />

        <label for="petPhoto">Upload Pet Photo</label>
        <input
          type="file"
          id="petPhoto"
          name="petPhoto"
          accept="image/*"
          required
        />

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />

        <button type="submit" name="submit">SignUp</button>

        <div class="footer-text">
          Already have an account?
          <a href="login.php">Log in</a>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
include "admin.php";

// Get data from form

if(isset($_POST['submit'])){
$ownername = $_POST['ownerName'];
$petname = $_POST['petName'];
$category = $_POST['petCategory'];
$usertype = $_POST['usertype'];
$age = $_POST['age'];
$breed = $_POST['breed'];
$petphoto = $_POST['petPhoto'];
$email = $_POST['email'];
$password = $_POST['password'];
