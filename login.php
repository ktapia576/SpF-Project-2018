<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Login</title>

  <link href='styles/loginStyle.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- NavBar Script functionality -->
  <script src="js/nav.js"></script>
</head>

<body>
  <div class="wrapper">
    <?php include('includes/header.html'); ?>
    <div class="content">
        <h2>Please Login Below!</h2><br>

        <form action="login.inc.php" method="post">
          <label for="username">Username</label><br>
          <input type="text" id="username" placeholder="Enter Username" name="username" required><br>
          <label for="password">Password</label><br>
          <input type="password" id="password" placeholder="Enter Password" name="password" required><br><br>

          <input type="submit" value="Login">
        </form>
    </div>
  </div>
</body>

</html>
