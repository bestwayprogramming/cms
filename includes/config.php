<?php
$con = mysqli_connect('localhost', 'root', 'root', 'college_management_system');

if(!$con) {
    echo "Database Connection Failed...";
    exit;
}

include('functions.php');
?>