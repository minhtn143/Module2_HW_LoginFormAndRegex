<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $userManager = new UserManager("../data/data.json");

}