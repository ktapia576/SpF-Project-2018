<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">

  <title>Webcam</title>

  <link href='styles/webcamStyle.css' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">

  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- NavBar Script functionality -->
  <script src="js/nav.js"></script>

  <!-- Load webcam functionality -->
  <script src="js/webcam.js"></script>
</head>

<body onload="start();">
  <div class="wrapper">
    <?php include('includes/header.html'); ?>
    <div class="content">

      <div id="videoStream">
        <video autoplay="true" id="videoElement"></video>
        </br><button onclick="snapshot();" id="snapshot">Take Snapshot</button>
      </div>

      <div id="snapshotCanvas">
        <canvas id="canvasElement" width="500" height="375"></canvas>
        </br><button onclick="upload();" id="upload"> Upload </button>
        <button onclick="load();" id="loadTest"> Load Test</button>
      </div>

    </div>
  </div>
</body>

</html>
