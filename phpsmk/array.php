<?php
    // array dimensi

    // $nama = array("joni","tejo","budi","siti");

    // var_dump($nama);

    // echo "<br>";
    // echo $nama[2];

    // echo "<br>";
     

    // for ($i=0; $i < 6; $i++) {
    //     echo $nama[$i];
    // }

    // foreach ($nama as $k) {
    //     echo $k.'<br>';
    // }

    // array asosiatif

    // $nama = array(
    //     "joni" => "surabaya",
    //     "budi" => "malang raya",
    //     "tejo" => "jakarta",
    //     "siti" => "sidoarjo"
    // ); 

    $nama["joni"]="surabaya";
    $nama["budi"]= "malang raya";
    $nama["tejo"]= "jakarta";
    $nama["siti"]= "sidoarjo";
    $nama["edi"]= "semarang";

    var_dump($nama);

    echo "<br>";

    echo $nama['budi'];

    echo '<br>';

    foreach ($nama as $key => $value) {
        echo $key." => ".$value;
        echo "<br>";
    }
?>