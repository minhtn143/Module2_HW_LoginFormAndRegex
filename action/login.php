<?php
include "../class/User.php";
include "../class/UserManager.php";
include "../function/checkRegex.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    var_dump($email,$password);

    $userManager = new UserManager("../data/data.json");
    $listUser = $userManager->getListUser();

    foreach ($listUser as $user) {
        if ($email == $user->getEmail() && $password == $user->getPassword()) {
            header("Location:../view/register_form.php");
        } else {
            header("Location:../index.php");
        }
    }


}