<?php
    

    function belajar(){
        echo "saya belajar PHP";
    }

    // belajar();
    // belajar();

    function luaspersegi($p =5, $l =3){
        $luas = $p * $l;
    
        echo $luas;
    }

    // luaspersegi(10,3);

    function luas($p =5, $l =3){
        $luas = $p * $l;
    
        return $luas;
    }

    function output(){
        return "belajar function";
    }

    // echo output();

    echo luas() *5;
?>