<?php
    $db=new mysqli("localhost","root","","list");
    $db->query("set names utf8");

    $id=$_GET["id"];
    $name=$_GET["name"];
    $age=$_GET["age"];
    $sex=$_GET["sex"];

    $sql="update tables set name='{$name}',age='{$age}',sex='{$sex}' where id='{$id}'";

    $db->query($sql);

    if ($row=$db->affected_rows>0) {
        include "../back.html";
    }
?>