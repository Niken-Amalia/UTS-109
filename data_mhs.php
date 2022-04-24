<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title></title>
</head>
<body>
<table class="table">
<thead>
  <tr>
    <th scope="col">id_niken</th>
    <th scope="col">nama_niken</th>
    <th scope="col">email_niken</th>
    <th scope="col">alamat_niken</th>
    <th scope="col">action</th>
  </tr>
</thead>
<?php
include "koneksi.php";
$sql = "SELECT * FROM tbl_niken";
$hasil = mysqli_query($koneksi, $sql);

while($row = mysqli_fetch_array($hasil))
{
?>
<tbody>
    <tr>
      <td><?=$row["id_niken"];?></td>
      <td><?=$row["nama_niken"];?></td>
      <td><?=$row["email_niken"];?></td>
      <td><?=$row["alamat_niken"];?></td>
      <td><a href="form_edit.php?id=<?= $row['id_niken']?>">edit</a>|<a href="delete.php?id=<?= $row['id_niken']?>">delete</a></td>
    </tr>
</tbody>
<?php
}?>
?>
</table>
</body>
</html>