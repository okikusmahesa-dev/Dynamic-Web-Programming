<?php
if(isset($_GET['kode'])) {
    include_once('config/koneksi.php');
    // cek mahasiswa
    $kode=$_GET['kode'];
    $query=mysqli_query($db,"SELECT * FROM barang WHERE kode_barang='$kode'");
    if(mysqli_num_rows($query) == 0) {
        echo "<script>alert('Barang Tidak Ada..');window.location='./';</script>";
        exit;
    } else {
        $query=mysqli_query($db, "DELETE FROM barang WHERE kode_barang='$kode'");
        if($query) {
            echo "<script>alert('Barang Berhasil Dihapus');window.location='./';</script>";
        } else {
            echo "<script>alert('Barang Gagal Dihapus');window.location='./';</script>";
        }
    }
}
?>