<?php
$host = null;
$database = null;
$username = null;
$password = null;
if ($_SERVER['REMOTE_ADDR'] == '::1') {
    $host = 'localhost';
    $database = 'mleczarnia2';
    $username = 'root';
    $password = '';
    
} else {
    $host = 'sql.juice.home.pl';
    $database = '00817828_mleczarnia';
    $username = '00817828_mleczarnia';
    $password = 'Juice2012!';
}
