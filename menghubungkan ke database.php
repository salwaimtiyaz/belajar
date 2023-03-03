<?php
// isi namahost, username my sql, dan password mysql anda
$host = mysql_connect("localhost","root","pencucian mobil")

if ($host){
    echo "koneksi host berhasil,<br>";
}else{
    echo"koneksi gagal,<br>";
}
// isikan dengan nama database yang akan dihubungkan
$ = mysql_select_dp("dp_pencucian_mobil");

if($dp){
    echo "koneksi database berhasil,";
}else{
    echo "koneksi database gagal,";
}
?>