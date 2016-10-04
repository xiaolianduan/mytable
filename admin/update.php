<?php
    $db=new mysqli("localhost","root","","list");
    $db->query("set names utf8");

    $id=$_GET["id"];		//接收HTML页面发送的请求
    $attr=$_GET["attr"];
    $val=$_GET["val"];

    $sql="UPDATE `tables` SET {$attr}='{$val}' WHERE id=".$id;
    // 往数据库插入数据
    $db->query($sql);
    if ($row=$db->affected_rows>0) {  //判断结果
        include "../back.html";
    //echo "<script>alert('插入成功'),location.href='back.html'</script>";
    }
?>