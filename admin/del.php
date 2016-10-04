<?php
$db=new mysqli("localhost","root","","list");
$db->query("set names utf8");
$id=$_GET["id"];

$sql="delete from tables where id=". $id;

$db->query($sql);

if ($row=$db->affected_rows>0){
    include "../back.html";
}
?>