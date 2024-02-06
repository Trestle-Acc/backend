<?php
$message = "<a class='btn btn-danger'>No delete action</a>";
require __DIR__ . '/query.php';

if (!isset($_GET['id'])) {
    include "null.php";
    
    exit;
}
$userId = $_GET['id'];

deleteUser($userId);

   echo  "<script>alert('Deleted')</script>";
        echo "<script>window.open('real.php','_self')</script>";
 


?>