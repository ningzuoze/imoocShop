<?php
    require_once '../include.php';

//通过REQUET变量找到act的值
    @$act=$_REQUEST["act"];
//判断传过来需要执行的操作
    if($act=="logout"){
//推出登陆事件
        logout();
    }
?>