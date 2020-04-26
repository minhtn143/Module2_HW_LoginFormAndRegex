<?php

include "../class/User.php";
include "../class/UserManager.php";
$index = (int)$_GET['index'];

$userManager = new UserManager("../data/data.json");
var_dump($userManager);

$userManager->deleteUser($index);
var_dump($userManager);

header("Location: ../index.php");