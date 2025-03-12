<?php
require_once 'mobilController.php';

if (isset($_GET['id'])){
    $mobil = new Mobil();
    $mobil -> delete($_GET['id']);
    header("Location: index.php");
}
?>