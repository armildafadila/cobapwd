<?php
include 'koneksi.php';

$nama = $_POST['first_name']. " " . $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm_pw'];

if ($password)