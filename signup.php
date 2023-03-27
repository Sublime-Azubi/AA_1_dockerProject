<?php

$userName = $_POST['name'];
$password = $_POST['password'];

if ($userName !== 'johndoe' && $password !== '12345'){

    print('Invalid username or password');
}else{
    print('Welcome, This is admin!');
}
