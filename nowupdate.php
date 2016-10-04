<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    $db=new mysqli("localhost","root","","list");
    $db->query("set names utf8");

    $id=$_GET["id"];

    $sql="select * from tables where id=".$id;
    $result=$db->query($sql);
    $row=$result->fetch_assoc();
?>
    <h3>个人信息</h3>
    <form action="admin/newval.php" method="get">
        姓名:<input type="text" name="name" value="<?php echo $row['name']?>"><br>
        性别:<input type="text" name="sex" value="<?php echo $row['sex']?>"><br>
        年龄:<input type="text" name="age" value="<?php echo $row['age']?>"><br>
        <input type="hidden" name="id" value="<?php echo $id?>"><br>
        <input  type="submit" value="提交">
    </form>
</body>
</html>