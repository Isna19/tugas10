<?php
require_once 'config/db.php';

class Mobil {
    public $id;
    public $nama;
    public $merk;
    public $tahun;
    public $harga;

    // Fungsi untuk menampilkan semua mobil
    public static function getAll() {
        global $conn;
        $query = "SELECT * FROM mobil";
        $result = $conn->query($query);
        return $result;
    }

    // Fungsi untuk menambah mobil
    public static function create($nama, $merk, $tahun, $harga) {
        global $conn;
        $query = "INSERT INTO mobil (nama, merk, tahun, harga) VALUES ('$nama', '$merk', '$tahun', '$harga')";
        return $conn->query($query);
    }

    // Fungsi untuk menghapus mobil
    public static function delete($id) {
        global $conn;
        $query = "DELETE FROM mobil WHERE id = $id";
        return $conn->query($query);
    }
}
?>
