<?php
session_start();
$tmp = $_SESSION['username'] ?? '';
include 'admin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Quicksand', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #e0f7fa, #f1f8e9);
      min-height: 100vh;
    }

    header {
      background: #2c3e50;
      color: #fff;
      padding: 20px;
      text-align: center;
      font-size: 28px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    nav {
      background: #34495e;
      padding: 10px;
      text-align: center;
    }

    nav a {
      display: inline-block;
      margin: 0 8px;
      color: #fff;
      background: #16a085;
      padding: 10px 20px;
      border-radius: 20px;
      text-decoration: none;
      transition: 0.3s ease;
    }

    nav a:hover {
      background: #1abc9c;
    }

    .container {
      padding: 30px;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    input[type="text"] {
      padding: 10px;
      width: 250px;
      border: 2px solid #ccc;
      border-radius: 8px;
    }

    button {
      padding: 10px 16px;
      background: #27ae60;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 8px;
      transition: 0.3s;
    }

    button:hover {
      background: #2ecc71;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 14px;
      text-align: center;
      border-bottom: 1px solid #ecf0f1;
    }

    th {
      background-color: #3498db;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #ecf0f1;
    }

    .action-btn {
      padding: 6px 12px;
      border-radius: 6px;
      text-decoration: none;
      margin: 0 5px;
      font-size: 14px;
    }

    .edit-btn {
      background: #f39c12;
      color: white;
    }

    .delete-btn {
      background: #e74c3c;
      color: white;
    }

    .message {
      background: #dff0d8;
      padding: 10px 15px;
      border-radius: 5px;
      margin-bottom: 15px;
      color: #3c763d;
      border: 1px solid #d6e9c6;
    }
  </style>
  <script>
    function searchTable() {
      const input = document.getElementById("searchInput").value.toLowerCase();
      const rows = document.querySelectorAll("table tbody tr");
      rows.forEach(row => {
        let visible = false;
        row.querySelectorAll("td").forEach(td => {
          if (td.innerText.toLowerCase().includes(input)) visible = true;
        });
        row.style.display = visible ? "" : "none";
      });
    }

    function exportToPDF() {
      window.print();
    }
  </script>
</head>
<body>

<header>🐾 Admin Dashboard</header>

<nav>
  <a href="?table=petusers">Pet Users</a>
  <a href="?table=trainner">Trainer</a>
  <a href="?table=training_info">Training Info</a>
  <a href="?table=doctor">Doctor</a>
  <a href="?table=daycare">Daycare</a>
  <a href="?table=found">Found</a>
  <a href="?table=lost">Lost</a>
</nav>

<div class="container">
<?php
if (isset($_GET['delete']) && isset($_GET['table'])) {
    $table = $_GET['table'];
    $id = intval($_GET['delete']);
    $conn->query("DELETE FROM `$table` WHERE id = $id");
    echo "<div class='message'>Record deleted from <strong>$table</strong>.</div>";
}

if (isset($_GET['table'])):
  $table = $_GET['table'];
  $result = $conn->query("SELECT * FROM `$table`");

  if ($result && $result->num_rows > 0):
?>

  <div class="top-bar">
    <input type="text" id="searchInput" onkeyup="searchTable()" placeholder="Search in <?php echo $table; ?>..." />
    <button onclick="exportToPDF()">Export to PDF</button>
  </div>

  <h2 style="text-transform: capitalize; margin-bottom: 15px;"><?php echo $table; ?> Table</h2>
  <table>
    <thead>
      <tr>
        <?php foreach ($result->fetch_fields() as $field): ?>
          <th><?php echo $field->name; ?></th>
        <?php endforeach; ?>
       
      </tr>
    </thead>
    <tbody>
      <?php
      $result->data_seek(0);
      while ($row = $result->fetch_assoc()):
      ?>
        <tr>
          <?php foreach ($row as $cell): ?>
            <td><?php echo htmlspecialchars($cell); ?></td>
          <?php endforeach; ?>
          <!-- <td>
            <a class="action-btn edit-btn" href="edit.php?table=<?php echo $table; ?>&id=<?php echo $row['id']; ?>">Edit</a>
            <a class="action-btn delete-btn" href="?table=<?php echo $table; ?>&delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure to delete this record?')">Delete</a>
          </td> -->
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>

<?php else: ?>
  <p>No data found in table <strong><?php echo $table; ?></strong>.</p>
<?php endif; else: ?>
  <h3>Select a table above to view its data.</h3>
<?php endif; ?>
</div>

</body>
</html>

