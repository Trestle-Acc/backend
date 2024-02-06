<?php
$message = "No update actions";
require __DIR__ . '/query.php';

if (!isset($_GET['id'])) {
    include "null.php";
    
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "null.php";
    
    exit;
}

//$errors = [
//    'name' => "",
//    'username' => "",
//    'email' => "",
//    'phone' => "",
//    'website' => "",
//];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);
    $user = updateUser($_POST, $userId);
    uploadImage($_FILES['picture'], $user);
    if($user){
        
        echo "<script>alert('updated')</script>";
        echo "<script>window.open('real.php','_self')</script>";
        exit;
    }
    else{
        echo "<script>alert('update fail')</script>";
        
        
    }
//    $isValid = validateUser($user, $errors);

//    if ($isValid) {
//        
//        uploadImage($_FILES['picture'], $user);
//        header("Location: index.php");
//    }
}

?>

<?php include '_form.php' ?>
