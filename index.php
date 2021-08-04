<style>

    h1 {color: red;}



</style>







<?php

echo "<h1> PIRMAS UZDAVINIS </h1> <br>";


howareyou();

function howareyou(){
    $text = "How are You doing?";
    echo "<h1>" .$text. "</h1> <br>";
}

echo "<hr>";


//-------------------------------//


echo "<h1> ANTRAS UZDAVINIS </h1> <br>";

howareyou1();

function howareyou1(){

     $text = "How are You doing?";
     $tag = rand(1,6);

    echo "<h".$tag.">". $text ."</h".$tag."> <br>";}

echo "<hr>";


//-------------------------------//    

echo "<h1> TRECIAS UZDAVINIS </h1> <br>";

construct();

function construct (){
    $strg = md5(time());

    echo $strg;
}



?>
