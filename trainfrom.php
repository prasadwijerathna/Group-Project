<section class="form-section">
  <h2>Register for a Training Session</h2>
  <style>
    .form-section {
  background-color: #fff8f0;
  padding: 30px;
  margin-top: 40px;
  border-radius: 12px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.form-section h2 {
  text-align: center;
  color: #ff6f61;
  margin-bottom: 20px;
}

form .form-group {
  margin-bottom: 15px;
}

form label {
  display: block;
  font-weight: bold;
  color: #333;
  margin-bottom: 5px;
}

form select,
form textarea {
  width: 100%;
  padding: 10px;
  border: 2px solid #ffdac1;
  border-radius: 6px;
  font-size: 1rem;
}

form button {
  background-color: #ff6f61;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 8px;
  font-size: 1rem;
  cursor: pointer;
  display: block;
  margin: 20px auto 0;
  transition: background-color 0.3s ease;
}

form button:hover {
  background-color: #ff3e2f;
}

  </style>



  <form id="trainingForm" method="POST" action="" >
    <div class="form-group">
        <label for="username">Name</label>
      <textarea id="owner" name="owner_name" rows="1" placeholder="Owner name"></textarea>

      <label for="package">Select Training Package</label>
      <select id="package" name="package" required>
        <option value="">-- Choose a Package --</option>
        <option>Basic Obedience</option>
        <option>Advanced Training</option>
        <option>Puppy Training</option>
        <option>Behavior Correction</option>
      </select>
    </div>

    <div class="form-group">
   

      <label for="message">Message (optional)</label>
      <textarea id="message" name="message" rows="4" placeholder="Anything you'd like us to know?"></textarea>

      <label for="telephone no">Mobile No</label>
      <textarea id="Mobile No" name="MobileNo" rows="1" placeholder="MobileNo"></textarea>
        
  
    <button type="submit" name="submit">Submit</button>
  </form>
</section>


<?php
include 'admin.php';

// Get data from form

if(isset($_POST['submit'])){
$owner_name = $_POST['owner_name'];
$package = $_POST['package'];
$message = $_POST['message'];
$MobileNo = $_POST['MobileNo'];
// Insert data

$sql = "INSERT INTO trainner (owner_name,package, message,mobile_no) VALUES ('$owner_name','$package','$message','$MobileNo');";
$rst=mysqli_query($conn,$sql);
// var_dump($sql);
if ($rst) {
  echo "Record added successfully!";
  header("Location:index.php");
} else {
 
}


$conn->close();

}
?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


