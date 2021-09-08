<?php
$connect = mysqli_connect('localhost', 'root', 'root', 'crad');
if(!$connect){
    die('ошибка подключения БД');
}