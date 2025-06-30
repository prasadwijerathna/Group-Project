<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PetPulse Login</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #00b4d8, #0077b6);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background: white;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
      width: 100%;
      max-width: 400px;
      text-align: center;
    }

    h2 {
      margin-bottom: 30px;
      color: #0077b6;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 8px;
      transition: 0.3s;
    }

    input:focus {
      border-color: #00b4d8;
      outline: none;
      box-shadow: 0 0 5px #00b4d8;
    }

    .login-btn {
      background: #00b4d8;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      width: 100%;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 15px;
    }

    .login-btn:hover {
      background: #0077b6;
    }

    .error {
      color: red;
      font-size: 14px;
      display: none;
    }
  </style>
</head>
<body>

<div class="login-container">
  <h2>PetPulse Login</h2>
  <form id="loginForm" action="login.php" method="POST">
    <input type="text" name="username" id="username" placeholder="Username" required />
    <input type="password" name="password" id="password" placeholder="Password" required />
    <p class="error" id="errorMsg">Please fill in both fields!</p>
    <button class="login-btn" type="submit" name="submit">Login</button>
  </form>
</div>

<?php
session_start();
include 'admin.php';

// Example credentials (replace with database check)
$valid_username = "admin";
$valid_password = "1234";
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petusers WHERE owner_name='$username' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);

    
    $_SESSION['username'] = $username;
   
    
    //print_r($row);
    $type = $row['user_type'];
    if($type === 'doctor'){
         header("Location: docdashboard.php");

    }if($type === 'ADMIN'){
         header("Location: admindash.php");

    }if($type === 'trainer'){
         header("Location:traindashboard.php");

    }if($type === 'petowner'){
        header("Location:index.php");
    }
     
    
    

// if ($username === $valid_username && $password === $valid_password) {
//   $_SESSION['username'] = $username;
//   header("Location: dashboard.php"); // Redirect to protected page
// } else {
//   echo "Invalid credentials. <a href='login.php'>Try again</a>";
// }
}
?>


</body>
</html>

