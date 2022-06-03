<?php
include "../classes/user.php";

$username = $_POST['username'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$photo = "profile.jpg";

if ($password == $confirm_password) {

    //create an object
    $user = new User();
    //call the method
    $user->createUser($username, $email, $tel, $password, $photo);

} else {
    echo "<p class='text-danger'> Password and Confirm Password do not match </p>";
}


?>