<?php

$nama = array("Naomi","Tarisa","Elma","Salwa","Azizah","Anisa","Sekar");
echo "$nama[3]";

$hobby = ["Berenang","Sepak Bola","Basket","Voli"];
echo "$hobby[2]","<br>";

$angka = array("1","2","3","4");
echo "$angka[3]";
$total = array_sum($angka);
echo "$total","<br>";

$nama = array("Naomi","Tarisa","Elma","Salwa","Azizah","Anisa","Sekar");
foreach ($nama as $a){
    echo $a;
}

?>