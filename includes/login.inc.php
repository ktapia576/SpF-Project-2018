<?php
//Connect to Database and Check Connection Included
require "dbconnect.inc.php";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
      $username = $_POST["username"];
      $password = $_POST["password"];

      $password = SHA1($password);
      $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

      $result = $conn->query($sql);

      if ($result->num_rows == 1) {
        //Create Cookie
        $cookie_name = "username";
        $cookie_value = $username;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        header("location:webcam.php");  //Where to take User after loggin in
      }
      else {
        header("location:login.php");   //Where to take user after failing login 
      }
    }
    else {
      echo '<p>Username and Password Not Entered!</p>';
    }
}
else {
  echo '<p>Error! Form Not Submitted Correctly!</p>';
}

?>
