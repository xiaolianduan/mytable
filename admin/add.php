<?php
    $db=new mysqli("localhost","root","","list");
    $db->query("set names utf8");

    $sql="INSERT INTO `list`.`tables` (`name`,`sex`,`age`,`class`,`gread`) VALUES ('','','','','')";
    $db->query($sql);

    if ($row=$db->affected_rows>0) {  //判断结果
        include "../back.html";
        //echo "<script>alert('123');location.href='back.html'</script>";
    }
?>