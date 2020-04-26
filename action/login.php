<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $userManager = new UserManager("../data/data.json");
/*pending
lay mail trong data kiem tra trung voi email nhap vao ko
Neu k thi thong bao sai email
Neu co check tiep co trung pass ko
    neu khong thi thong bao sai pw
    neu dung thi ok login

*/
}