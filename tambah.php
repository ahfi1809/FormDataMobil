<?php 
require_once 'mobilController.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $brand = $_POST['BRAND'];
    $tipe = $_POST['TIPE'];
    $warna = $_POST['WARNA'];
    $harga = $_POST['HARGA'];

    $mobil = new Mobil();
    $mobil -> insert($brand, $tipe, $warna, $harga);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 20px;
        padding: 20px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        width: 50%;
        margin: 0 auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    input {
        width: 100%;
        padding: 8px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #007bff;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
</head>
<body>
    <h2>Tambah Data Buku</h2>
    <form method="POST">
        Brand: <input type="text" name="BRAND" require><br>
        Tipe: <input type="text" name="TIPE" require><br>
        Warna: <input type="text" name="WARNA" require><br>
        Harga: <input type="text" name="HARGA" require><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>