<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Appointment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(to right, #74ebd5, #acb6e5);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .appointment-form {
      background-color: white;
      border-radius: 15px;
      padding: 2rem;
      width: 100%;
      max-width: 450px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .appointment-form h2 {
      text-align: center;
      margin-bottom: 1.5rem;
      color: #2c3e50;
    }

    .appointment-form label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .appointment-form input,
    .appointment-form select,
    .appointment-form button {
      width: 100%;
      padding: 0.75rem;
      margin-bottom: 1.2rem;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 1rem;
    }

    .appointment-form button {
      background-color: #3498db;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    .appointment-form button:hover {
      background-color: #2980b9;
    }

    .success-message {
      display: none;
      background-color: #2ecc71;
      color: white;
      padding: 1rem;
      border-radius: 8px;
      text-align: center;
      margin-top: 1rem;
    }
  </style>
</head>
<body>

  <form class="appointment-form" id="doctorForm" method="POST" action="appoinment.php">
    <h2>Doctor Appointment</h2>

    <label for="fullName">Full Name</label>
    <input type="text" name="fullName" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>

    <label for="date">Appointment Date</label>
    <input type="date" name="date" required>

    <label for="time">Time</label>
    <input type="time" name="time" required>

    
    <label for="presentstatus">Present State of Animal</label>
    <input type="text" name="state" required>

    <label for="department">Doctor Name</label>
    <select name="department" required>
      <option value="">-- Select --</option>
      <option value="Dr. Andrew Patel">Dr. Andrew Patel</option>
      <option value="Dr.Teena Wijesinghe">Dr.Teena Wijesinghe</option>
      <option value="Dr. Abdul Ahamed">Dr. Abdul Ahamed</option>
    
    </select>
        <a href="index.php"><button type="submit" name="submit">Book Appointment</button></a>
    
    <div class="success-message" id="successMessage">
      ✅ Appointment Booked Successfully!
    </div>
  </form>
