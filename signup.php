<?php
$registered = false;
$userExists = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "login111.php";  // DB connection

    $name = $_POST['name'];
    $place = $_POST['place'];
    $password = $_POST['password'];

    // Check if user already exists
    $check_sql = "SELECT * FROM login111 WHERE name='$name'";
    $check_result = mysqli_query($connect, $check_sql);

    if (mysqli_num_rows($check_result) > 0) {
        $userExists = true;
    } else {
        // Insert new user
        $insert_sql = "INSERT INTO login111 (name, place, password) VALUES ('$name', '$place', '$password')";
        $insert_result = mysqli_query($connect, $insert_sql);

        if ($insert_result) {
            $registered = true;
            // Clear form data after successful registration
            $name = $place = $password = '';
        } else {
            die("Database Error: " . mysqli_error($connect));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Signup Page</title>
  <style>
    body {
      font-family: Arial;
      background-color: #2c3e50;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form-container {
      background: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 350px;
    }

    .form-container h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-top: 15px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .error {
      color: red;
      font-size: 14px;
      text-align: center;
    }

    .success {
      color: green;
      font-size: 14px;
      text-align: center;
      margin-bottom: 10px;
    }

    button {
      width: 100%;
      margin-top: 20px;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: white;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Signup</h2>

  <?php if ($userExists): ?>
    <p class="error">Username already exists. Please choose another.</p>
  <?php elseif ($registered): ?>
    <p class="success">Signup successful! You can now <a href="login.php">login</a>.</p>
  <?php endif; ?>

  <?php if (!$registered): ?>
  <form action="signup.php" method="POST">
    <label for="name">Username:</label>
    <input type="text" name="name" id="name" value="<?= isset($name) ? htmlspecialchars($name) : '' ?>" required>

    <label for="place">Place:</label>
    <input type="text" name="place" id="place" value="<?= isset($place) ? htmlspecialchars($place) : '' ?>" required>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Sign Up</button>
  </form>
  <?php endif; ?>
</div>

</body>
</html>
