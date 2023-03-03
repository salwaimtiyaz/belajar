<?php
function luas(){
    $p = 5;
    $l = 7;
    echo $p*$l;
}
luas();

function luas3($p,$l){
    $hasil = $p*$l;
    return $hasil;
}
echo luas3(5,8);
$a=luas3(5,8);
?>