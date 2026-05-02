<?php
$hostname= "localhost";
$username= "root";
$password = "";
$database = "mathpartner";

$koneksi = new mysqli ($hostname, $username, $password, $database);
if ($koneksi->connect_error) {
    die('maaf koneksi gagal '. $koneksi->$connect_error);

}
?>