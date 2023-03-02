<?php
session_start();

// Check if user is already logged in
if (isset($_SESSION['username'])) {
  header("Location: students-list.php");
  exit();
}

// Check if login form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if username and password are correct
  if ($username == 'sinhvien' && $password == '123') {
    // If login is successful, store the username in the session
    $_SESSION['username'] = $username;
    header("Location: students-list.php");
    exit();
  } else {
    // If login is unsuccessful, display an error message
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if (isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form method="post" action="login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>
