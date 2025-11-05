<?php
/* Variable Rule

->A variale start with the $ sign.
->A varbile name can't start with a number and special sysmbol expection (_).
->A varbile name can't start wuth a special char.
->A variable name only contains alpha-numeric char and underscores(_).
->$name,$Name and $NAME are three different variable because it's a case senivtive.
->Vaeiable Systenx
    -> $name="Tarun";
*/
// echo "Tarun";

$name="Tarun";
$_name="Anuj";
$Name="Priya";
$NAME="Kajal";

echo $name."<br>".$_name."<br>".$Name."<br>".$NAME;

$yes="Hello";
$YES="Hello";
$Yes="Hello";
echo "<br>";
if ($yes==$YES)
    echo "Ha";
else
    echo "Na";

?>
