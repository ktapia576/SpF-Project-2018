<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Webcam</title>

  <link href='styles/style.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- NavBar Script functionality -->
  <script src="scripts/nav.js"></script>

  <!-- Load webcam functionality -->
  <script src="scripts/webcam.js"></script>
</head>

<body>
  <div class="wrapper">
    <?php include('includes/header.html'); ?>
    <div class="content" onload="start();">
      <video autoplay="true" id="videoElement"></video>
    </div>
  </div>
</body>

</html>
