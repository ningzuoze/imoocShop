<?php

//查找管理员账号
function checkAdmin($sql){
    return fetchOne($sql);
}
//通过ID判断是否登陆
function checkLogined(){
    if($_SESSION['adminID']==""){
        alertMes("请先登录","adminLogin.html");
    }
}