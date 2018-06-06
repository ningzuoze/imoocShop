<?php
//接受数据
require_once '../include.php';
// session_start();
$usename=$_POST['username'];
$password=md5($_POST['password']);
$verify=$_POST['verify'];
$verify1=$_SESSION['verify'];
$autoFlay=$_POST['autoFlag'];

echo $autoFlay;
echo $verify;
echo $verify1;

//判断验证码是否填写正确
if($verify==$verify1){
//查询管理员账号sql
    $sql="select * from imooc_admin where username='{$usename}' and password='{$password}'";
//执行语句
    $row = checkAdmin($sql);
//判断账户是否存在
    if($row){
//勾选自动登陆一周内自动登陆
        if($autoFlay){
//将获取的数据保留到cookie变量中
            setcookie("adminId",$row['id'],time()+7*24*3600);
            setcookie("adminName",$row['username'],time()+7*24*3600);            
        }
//将管理员账号赋给$_SESSION["adminName"]和管理员密码赋给$_SESSION["adminId"]
        $_SESSION['adminName']=$row['username'];
        $_SESSION['adminID']=$row['id'];        
//转到管理员页面
        alertMes("登陆成功","index.php");
    }else{
        alertMes("登陆失败，重新登陆","adminLogin.html");
    }
}else{
    alertMes("验证码错误","adminLogin.html");
}