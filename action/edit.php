<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include "../class/User.php";
    include "../class/UserManager.php";
    $index = (int)$_REQUEST['index'];

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $newInfo = new User($name, $email, $phone);
    $userManager = new UserManager("../data/data.json");
    $userManager->updateInfoUser($index,$newInfo);
    header("Location: ../index.php");
}