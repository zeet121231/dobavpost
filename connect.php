<?php
$connect = mysqli_connect(hostname: 'localhost', username: 'root', password: '', database: 'dobav' );

if(!$connect){
    die('ошибка ');
}