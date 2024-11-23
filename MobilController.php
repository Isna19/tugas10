<?php
require_once 'model/Mobil.php';

class MobilController {

    // Menampilkan halaman daftar mobil
    public function index() {
        $mobil = Mobil::getAll();
        include 'view/index.php';
    }

    // Menambah mobil
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nama = $_POST['nama'];
            $merk = $_POST['merk'];
            $tahun = $_POST['tahun'];
            $harga = $_POST['harga'];
            Mobil::create($nama, $merk, $tahun, $harga);
            header('Location: index.php');
        }
        include 'view/create.php';
    }

    // Menghapus mobil
    public function delete($id) {
        Mobil::delete($id);
        header('Location: index.php');
    }
}
?>
