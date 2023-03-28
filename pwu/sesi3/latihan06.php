<?php
//php multidimensi arrays
    //dimensi array lebih dari satu dimensi (bisa dua di mensi)
    $mhs = array (
         array("ketin","2201010567","denpasar"),
         array("wahyu hidayat","22340767","kalimantan"),
         array("santi kirana","22345678","kupang"),
         array("zizi","220165778","gianyar"),
    );
    header('contet-type:application/json; charset=utf=8');
    echo json_encode($mhs);