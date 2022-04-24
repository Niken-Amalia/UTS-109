<?php
include "koneksi.php";
$nama = $_POST["nama_niken"];
$email= $_POST["email_niken"];
$alamat=$_POST["alamat_niken"];

$sqli = "INSERT INTO tbl_niken VALUES(null,'$nama','$email','$alamat')";
$hasil = mysqli_query($koneksi, $sqli);
if(!$hasil){
    echo "Eksekusi tambah mahasiswa gagal";
}else{
    echo "Eksekusi tambah mahasiswa berhasil<br/>";
    echo "<a href='data_mhs.php'>show data</a>";
}
?>