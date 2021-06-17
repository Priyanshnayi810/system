<?php 
    define ('hostname', 'localhost');
    define ('username', 'root');
    define ('password', '');
    define ('dbname', 'priyansh');


$conn = mysqli_connect(hostname, username, password, dbname) or die("Can not connect with the server.");
error_reporting(0);

?>