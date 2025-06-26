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
