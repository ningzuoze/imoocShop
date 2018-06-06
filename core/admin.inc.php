<?php

//查找管理员账号
function checkAdmin($sql){
    return fetchOne($sql);
}
//通过ID判断是否登陆
function checkLogined(){
    if(@$_SESSION['adminID']==""&&$_COOKIE['adminId']==""){
        alertMes("请先登录","adminLogin.html");
    }
}

//注销管理员函数
function logout(){
//将$_REQUEST变量清空
    $_REQUEST==array();
//判断是否有自动登陆
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),"",time()-1);
    }
    if(isset($_COOKIE['adminName'])){
        setcookie("adminName","",time()-1);
    }if(isset($_COOKIE['adminId'])){
        setcookie("adminId","",time()-1);
    }
//关闭cookie事件 并跳转页面
    session_destroy();
    header("Location: adminLogin.html");
}
