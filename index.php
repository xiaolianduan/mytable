<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        *{
            font-size: 16px;
        }
        table{
            border: 1px solid #ccc;
            border-collapse: collapse;
            margin: 0 auto;
        }
        td{
            width: 99px;
            height: 40px;
            border: 1px solid #ccc;
            cursor: pointer;
            text-align: center;
        }
        #add{
            display: block;
            width: 610px;
            height: 40px;
            text-align: center;
            line-height: 40px;
            border: 1px solid #ccc;
            border-top: 0;
            margin: 0 auto;
            cursor: pointer;
        }
        input{
            margin: 0;
            padding:0;
        }

    </style>
</head>
<script src="js/jquery1.12.3.js"></script>
<body>
<table>
    <tr>
        <td>姓名</td>
        <td>性别</td>
        <td>年龄</td>
        <td>年级</td>
        <td>班级</td>
        <td>删除</td>
    </tr>

    <?php
        $db=new mysqli("localhost","root","","list");
        $db->query("set names utf8");
        $sql="select * from tables";
        $result=$db->query($sql);
        while ($row=$result->fetch_assoc()){   //每循环一行,就读取一行数据

    ?>
    <tr id="<?php echo $row['id'] ?>">
        <td attr="name"><?php echo $row['name']?></td>
        <td attr="sex"><?php echo $row['sex']?></td>
        <td attr="age"><?php echo $row['age']?></td>
        <td attr="class"><?php echo $row['class']?></td>
        <td attr="gread"><?php echo $row['gread']?></td>
        <td class="remove">
            <a href="admin/del.php?id=<?php echo $row['id']?>">删除</a>
            <a href="nowupdate.php?id=<?php echo $row['id']?>">修改</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
<a href="admin/add.php" id="add">+</a>
</body>
<script>
    $(function(){
        $("td").on("dblclick",$("td").not(".remove"),function () {
            var odval=$(this).html();
            $(this).html("");
            var that=$(this);
            var input=$("<input type='text'>").appendTo($(this)).focus();
            input.blur(function () {
                var newval=input.val();
                if(odval==newval){
                    that.html(input.val());
                    $(this).remove();
                }else{
                    var id=that.parent().attr("id");
                    var attr=that.attr("attr");
                    location.href="admin/update.php?id="+id+"&attr="+attr+"&val="+newval;
                }

            })
        })
    })
</script>
</html>