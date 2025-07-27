<?php

session_start();

$tmp = $_SESSION['username'];

include 'admin.php';

$sql = "SELECT * FROM petusers WHERE owner_name='$tmp'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
print_r($row);

include 'admin.php';



$sql = "SELECT petusers.owner_name, petusers.pet_name, petusers.pet_category, petusers.age, petusers.breed,
               doctor.email, doctor.appoinment_date, doctor.time, doctor.doctor_name
        FROM doctor
        JOIN petusers ON doctor.email = petusers.email";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Panel - Appointments</title>
  <style>
    body {
      background: #f0f2f5;
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    h2 {
      text-align: center;
      color: #2c3e50;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th, td {
      padding: 12px 15px;
      border-bottom: 1px solid #eee;
    }
    th {
      background-color: #34495e;
      color: white;
    }
    tr:hover {
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <h2>Admin Panel - Pet Appointments</h2>
  <table>
    <tr>
      <th>Owner Name</th>
      <th>Pet Name</th>
      <th>Category</th>
      <th>Age</th>
      <th>Breed</th>
      <th>Doctor Email</th>
      <th>Date</th>
      <th>Time</th>
      <th>Doctor Name</th>
    </tr>
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['owner_name']}</td>
                    <td>{$row['pet_name']}</td>
                    <td>{$row['pet_category']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['breed']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['appoinment_date']}</td>
                    <td>{$row['time']}</td>
                    <td>{$row['doctor_name']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='9'>No data found</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</body>
</html>
