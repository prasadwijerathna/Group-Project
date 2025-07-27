<?php

session_start();

$tmp = $_SESSION['username'];

include 'admin.php';

$sql = "SELECT * FROM petusers WHERE owner_name='$tmp'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
print_r($row);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Trainer Admin Panel</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #fefcea, #f1da36);
      font-family: "Segoe UI", sans-serif;
    }

    header {
      background: #d35400;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 28px;
      font-weight: bold;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    table {
      width: 95%;
      margin: 30px auto;
      border-collapse: collapse;
      background: #fff;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px 15px;
      text-align: center;
      border: 1px solid #ddd;
    }

    th {
      background: #e67e22;
      color: white;
      font-size: 16px;
    }

    tr:nth-child(even) {
      background: #f9f9f9;
    }

    tr:hover {
      background: #ffeaa7;
    }

    @media screen and (max-width: 768px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        display: none;
      }

      td {
        padding-left: 50%;
        position: relative;
      }

      td::before {
        position: absolute;
        top: 12px;
        left: 10px;
        font-weight: bold;
        white-space: nowrap;
      }
    }
  </style>
</head>
<body>

  <header>🐾 Trainer Admin Panel</header>

  <table>
    <tr>
      <th>Owner Name</th>
      <th>Pet Name</th>
      <th>Category</th>
      <th>Age</th>
      <th>Breed</th>
      <th>Package</th>
      <th>Message</th>
      <th>Mobile No</th>
    </tr>

    <?php
    $sql = "SELECT 
                petusers.owner_name, 
                petusers.pet_name, 
                petusers.pet_category, 
                petusers.age, 
                petusers.breed, 
                trainner.package, 
                trainner.message, 
                trainner.mobile_no
            FROM trainner
            JOIN petusers ON trainner.owner_name = petusers.owner_name";

    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['owner_name']}</td>
                    <td>{$row['pet_name']}</td>
                    <td>{$row['pet_category']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['breed']}</td>
                    <td>{$row['package']}</td>
                    <td>{$row['message']}</td>
                    <td>{$row['mobile_no']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='8'>No Training Records Found</td></tr>";
    }

    $conn->close();
    ?>
  </table>

</body>
</html>
