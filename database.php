<?php
$servername='localhost';
$name='root';
$password='';
$dbname='registration';
$conn=mysqli_connect($servername,$name,$password,"$dbname");
if(!$conn){
    die('could not connect my sql:' .mysql_error());
}
?>