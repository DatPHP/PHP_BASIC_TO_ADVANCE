<?php

$username = $_POST['email'];
$password = $_POST['password'];
$result = ($username == 'root' && $password == '123456')?"Dang nhap thanh cong!":"Dang nhap that bai!! ";
echo $result;
