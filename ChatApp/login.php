<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<title>Login</title>
<body>
  <div class="wrapper">
    <section class="form login">
      <div class="link"><a class="fas fa-arrow-left" style="color:rgb(250, 23, 23);" href="../index.php">&nbsp; Back To The Website</a></div>
      <header style="text-align: center";>CHAT</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="forgot-password">
                    <a href="forgot-password.php">Forgotten password?</a>
                </div>
        <div class="field button">
          <input  style="background-color: #FFAA33"; type="submit" name="submit" value="Continue to Chat">
        </div>
      </form>
      <div class="link">Not yet signed up? <a style="color: blue" href="index.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
