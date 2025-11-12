<?php

/* Php in 8 types of data types
->String = Combintaion of char consider string
Integer = 0 to infinite consider in Interger
Float = Decimal value use
Boolean = True(1) and False(0) 
Null = Nothing
Array = Array is a hetrogeonous data type in php
Objects(class) = It is define like student complete info in a single id use a object
Recourse = please deine
->Know the data type in php use var_dump()  function
->stroe multiple value in signle data type called array 
array in php is hetrogeonous

->Null use 

->class is a blue print of object 
syntax 
$user = new classname();

->resourse
syntax 
$connection = ftp_connect("127.0.0.1") or die("Local host not found")



*/

$num=10;

echo var_dump($num);

$str="Tarun";

echo "<br>";
echo var_dump($str);
echo "<br>";    

$connection = ftp_connect("127.0.0.1") or die("Local host not found");
echo $connection;

?>