<?php
include "koneksi.php";
$id = $_POST["id_niken"];
$nama = $_POST["nama_niken"];
$email = $_POST["email_niken"];
$alamat = $_POST["alamat_niken"];

$sqli = "UPDATE tbl_niken SET nama_niken = '$nama',email_niken = '$email',alamat_niken = '$alamat' WHERE id_niken = $id";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi update mahasiswa gagal";
}else{
    echo "Eksekusi update mahasiswa berhasil<br/>";
    echo "<a href='data_mhs.php'>show data</a>";
}
?>