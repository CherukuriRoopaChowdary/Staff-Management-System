<?php
include '../../backend/config/connect.php';
?>
<html>

<head>
  <title>LOGIN</title>
  <link rel="shortcut icon" href="../assets/icon.png" type="image/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
  <link rel="stylesheet" href="../css/login.css">
</head>

<body>
  <form method="post" class="login">
    <header>STAFF LOGIN</header>
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" name="email" placeholder="ID">
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" name="pass" placeholder="Password">
    </div>
    <!-- <div class="forgot-password">
              <a href="#">Forgot password?</a>
          </div> -->
    <input type="submit" class="submit" value="LOGIN">
    <!-- <span class="logn-form-copy">Not an admin ? <a href="login.php" class="login-form__sign-up">Login as User</a></span> -->
  </form>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM staff WHERE email='$email' AND password=PASSWORD('$pass')";
    $result = mysqli_query($conn, $query) or die($mysqli_error($conn));

    $num = mysqli_num_rows($result);
    if ($num == 0) {
      echo '<script>alert("Invalid Credentials");</script>';
    } else {
      $row = mysqli_fetch_array($result);
      $_SESSION['email'] = $row['email'];
      $_SESSION['sid'] = $row['sid'];
      $_SESSION['fname'] = $row['fname'];
      // echo '<script>alert(' . $_SESSION["sid"] . ');</script>';
      echo "<script>window.location='http://localhost/WEBDEV/Project-DCSMS/frontend/pages/staff.php'</script>";
    }
  }
  ?>
</body>

</html>
