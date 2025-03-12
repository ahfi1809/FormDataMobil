<?php
require_once 'mobilController.php';

$mobil = new Mobil();
$data = $mobil->getAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>DATA MOBIL</title>
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

    a {
        text-decoration: none;
        color: white;
        background-color: #007bff;
        padding: 8px 12px;
        border-radius: 5px;
        display: inline-block;
        margin-bottom: 15px;
    }

    a:hover {
        background-color: #0056b3;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #007bff;
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    td a {
        color: white;
        padding: 5px 10px;
        border-radius: 3px;
    }

    td a:first-child {
        background-color: #28a745;
    }

    td a:first-child:hover {
        background-color: #218838;
    }

    td a:last-child {
        background-color: #dc3545;
    }

    td a:last-child:hover {
        background-color: #c82333;
    }

    .add-data {
        margin-top: 50px;
        display: inline-block;
    }
    </style>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>BRAND</th>
            <th>TIPE</th>
            <th>WARNA</th>
            <th>HARGA</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($data as $row): ?>
        <tr>
            <td><?= $row['ID'] ?></td>
            <td><?= $row['BRAND'] ?></td>
            <td><?= $row['TIPE'] ?></td>
            <td><?= $row['WARNA'] ?></td>
            <td><?= $row['HARGA'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['ID'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['ID'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="tambah.php">Tambah Data</a>

</body>
</html>
