<?php
$namafile = $_FILES['gambar']['name'];
$ukuran = $_FILES['gambar']['size'];
$error = $_FILES['gambar']['error'];

if($ukuran > 0 || $error == 0)
{
$move = move_uploaded_file($_FILES['gambar']['tmp_name'], 'gambar/'.$namafile);
if($move){
echo "  <br>File '$namafile' dengan ukuran $ukuran sudah terupload<br>";
echo "<img src = 'mingguke5/$namafile'>";
}
else
{
echo "Terjadi kesalahan sewaktu mengupload file";
}
}
else
{
echo "File gagal diupload karena : ".$error;
}
?>
