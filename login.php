<?php
$userNotFound = false;
$passwordWrong = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "login111.php"; // DB connection

    $name = $_POST['name'];
    $password = $_POST['password'];

    // Check if user exists
    $user_check_sql = "SELECT * FROM login111 WHERE name='$name'";
    $user_result = mysqli_query($connect, $user_check_sql);

    if (mysqli_num_rows($user_result) > 0) {
        // Check password
        $sql = "SELECT * FROM login111 WHERE name='$name' AND password='$password'";
        $result = mysqli_query($connect, $sql);
        if ($result && mysqli_num_rows($result) > 0) {
            session_start();
            session_destroy(); // optional: remove if you need session to persist
            header("Location: index.php");
            exit();
        } else {
            $passwordWrong = true;
        }
    } else {
        $userNotFound = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login - Event Management System</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #2c3e50;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-container {
      background: #ffffff;
      padding: 30px 40px;
      border-radius: 6px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
      width: 90%;
      max-width: 400px;
    }

    .login-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #2c3e50;
    }

    label {
      font-weight: bold;
      display: block;
      margin-top: 15px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    button {
      width: 100%;
      padding: 12px;
      margin-top: 25px;
      background-color: #2980b9;
      color: white;
      font-size: 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #1c5980;
    }

    .error {
      color: red;
      font-size: 14px;
      text-align: center;
    }

    .links {
      text-align: center;
      margin-top: 15px;
    }

    .links a {
      color: #2980b9;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }
  </style>

  <script>
    function validateForm() {
      const name = document.forms["form2"]["name"].value;
      const password = document.forms["form2"]["password"].value;
      if (name === "" || password === "") {
        alert("Name and password must be filled out");
        return false;
      }
      return true;
    }
  </script>
</head>
<body>

  <div class="login-container">
    <h2>Login</h2>

    <?php if ($userNotFound): ?>
      <p class="error">User doesn't exist. Please sign up.</p>
    <?php elseif ($passwordWrong): ?>
      <p class="error">Incorrect password. Please try again.</p>
    <?php endif; ?>

    <form action="login.php" method="POST" id="form2" name="form2" onsubmit="return validateForm()">
      <label for="name">Username</label>
      <input type="text" id="name" name="name">

      <label for="password">Password</label>
      <input type="password" id="password" name="password">

      <button type="submit">Login</button>
    </form>

    <div class="links">
      <p>Don't have an account? <a href="signup.php">Sign up</a></p>
      <p>Back to <a href="index.php">Home</a></p>
    </div>
  </div>

</body>
</html>
