<?php
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="asset/css/login.css">
</head>
<body>
  <div class="container mt-3">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create'])) {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        try {
            // ✅ Use your actual column names: username, passward
            $sql = "INSERT INTO test (username, passward) VALUES (?, ?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$username, $password]);

            if ($result) {
                echo '<div class="alert alert-success text-center">Successfully saved!</div>';
            } else {
                echo '<div class="alert alert-danger text-center">Error while saving the data.</div>';
            }
        } catch (PDOException $e) {
            echo '<div class="alert alert-danger text-center">Database error: ' . $e->getMessage() . '</div>';
        }
    }
    ?>
  </div>


  <div class="login-container">
    <div class="login-box">
      <h2>Login to BeastSpire</h2>
      <form>
        <input type="text" placeholder="Username" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <p class="signup-text">Forgot Password?<a href="reset.php">Reset Password</a></p>
      </form>
    </div>
  </div>
</body>
</html>