<?php 
require_once 'mobilController.php';

$mobil = new Mobil();
$id = $_GET['id'];
$data = $mobil->getById($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $brand = $_POST['BRAND'];
    $tipe = $_POST['TIPE'];
    $warna = $_POST['WARNA'];
    $harga = $_POST['HARGA'];

    $mobil = new Mobil();
    $mobil -> update($id, $brand, $tipe, $warna, $harga);
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT DATA</title>
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
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }
    </style>
</head>
<body>
    <h2>Update Data Buku</h2>
    <form method="POST">
        BRAND: <input type="text" name="BRAND" value="<?= $data['BRAND']?>" require><br>
        TIPE: <input type="text" name="TIPE" value="<?= $data['TIPE']?>"require><br>
        WARNA: <input type="text" name="WARNA" value="<?= $data['WARNA']?>"require><br>
        HARGA: <input type="text" name="HARGA" value="<?= $data['HARGA']?>"require><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>