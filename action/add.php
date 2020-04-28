<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/User.php";
    include "../class/UserManager.php";
    include "../function/checkRegex.php";

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $password = $_REQUEST['password'];

    try {
        if (isValidEmail($email) && isValidPhoneNumber($phone) && isValidPassword($password)){
            $user = new User($name, $email, $phone,$password);
            $userManager = new UserManager("../data/data.json");

            $userManager->add($user);
            header("Location: ../index.php");
        }
    }catch (Exception $e){
        echo $e->getMessage();
//        header("Location: ../view/register_form.php");
    };


}