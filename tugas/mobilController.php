<?php
require_once 'koneksi.php';

class Mobil {
    private $conn;

    public function __construct(){
        $db = new Database();
        $this -> conn = $db -> conn;
    }

    public function getAll(){
        $result = $this -> conn -> query ("SELECT * FROM tb_mobil");
        $data = [];
        while ($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }

    public function insert($brand, $tipe, $warna, $harga){
        $query = "INSERT INTO tb_mobil (BRAND,TIPE,WARNA,HARGA) VALUES ('$brand', '$tipe', '$warna', '$harga')";
        return $this -> conn -> query($query);
    }

    public function getById($id){
        $query = "SELECT * FROM tb_mobil WHERE ID = $id";
        $result = $this -> conn -> query($query);
        return $result->fetch_assoc();
    }

    public function update($id, $brand, $tipe, $warna, $harga){
        $query = "UPDATE tb_mobil SET BRAND='$brand', TIPE='$tipe', WARNA='$warna', HARGA='$harga' WHERE ID=$id";
        return $this -> conn -> query($query);
    }

    public function delete($id){
        $query = "DELETE FROM tb_mobil WHERE ID=$id";
        return $this -> conn -> query($query);
    }
}
?>