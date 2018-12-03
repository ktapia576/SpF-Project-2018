<?php
  if(isset($_POST['submit'])) {
      $file = $_FILES['file'];

      print_r ($file);

      $fileName = $_FILES['file']['name']; //Other Way: $fileName = $file['name'];
      $fileTmpName = $file['tmp_name'];
      $fileSize = $file['size'];
      $fileError = $file['error'];
      $fileType = $file['type'];

      //Get file Extension
      $fileExt = explode('.', $fileName); //explodes into array with "." as seperation
      //Make file extension lower case
      $fileActualExt = strtolower(end($fileExt)); //end() gets last value in array

      //What type of files that are allowed to be uploaded
      $allowed = array('jpg', 'jpeg', 'png', 'pdf');

      $target_dir = "../uploads/";  // "../" to go back a directory since "uploads/" does not exist in "/src/upload.php" directory
      $target_file = $target_dir . basename($_FILES["file"]["name"]); //basename returns the base name of a given path

      //Check file type
      if(in_array($fileActualExt, $allowed)) {  //in_array(value, array) will check if left argument is in the array on the right
        //Check for errors in file
        if($fileError === 0) {
          //Check file size
            if($fileSize < 100000) {   //10,000kb = 10mb
              //Change file name
              $fileNameNew = uniqid('', true).".".$fileActualExt; //gets time in microseconds

              $target = $target_dir.$fileNameNew; //create new file destination

              move_uploaded_file($fileTmpName,$target);  //moves the temporary file to the destination path in second argument
                                                                    //move_uploaded_file(tmp location, new location)

              //header("Location: ../index.html?uploadsuccess"); //change url (..) to go back a directory and let user know of success
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file!";
        }
      } else {
          echo "You cannot upload files of this type!";
      }
  }
?>
