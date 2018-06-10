<?php
    require_once '../include.php';

//通过REQUET变量找到act的值
    @$act=$_REQUEST["act"];
    @$id=$_REQUEST['id'];
//判断传过来需要执行的操作
    if($act=="logout"){
//退出登陆事件
        logout();
//添加管理员
    }elseif($act=="addAdmin"){
        $mes=addAdmin();
//编辑管理员
    }elseif($act=='editAdmin'){
        $mes=editAdmin($id);
    }elseif($act=="delAdmin"){
        $mes=delAdmin($id);
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>main</title>
</head>
<body>
    <?php
    if(@$mes){
        echo $mes;
    }
    ?>
</body>
</html>