<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/User.php";
    include "../class/UserManager.php";
    include "../function/checkRegex.php";

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];

    if (checkRegex($email,$phone,$password)){
        $user = new User($name, $email, $phone,$password);
        $userManager = new UserManager("../data/data.json");

        $userManager->add($user);
        header("Location: ../index.php");
    }else{
        header("Location: ../view/register_form.php");
    }

}