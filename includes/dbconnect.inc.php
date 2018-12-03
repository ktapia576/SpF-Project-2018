<?php
function db_connect() {

        // Defined connection as a static variable, to avoid connecting more than once
    static $conn;

        // Try and connect to the database, if a connection has not been established yet
    if(!isset($conn)) {
        // Load configuration as an array. The location of config file is not accesible
        // to others externally as it does not have url, being one level above the root folder.     
        $config = parse_ini_file('../private/config.ini');
        $conn = mysqli_connect($config['servername'],$config['username'],$config['password'],$config['dbname']);
    }

        // If connection was not successful, show the error
    if($conn === false) {
        return mysqli_connect_error();
    }
    return $conn;
}

// Connect to the database
$conn = db_connect();

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
