<?php
//配置文件
define("DB_HOST","localhost");//服务器名
define("DB_USER","root");//数据库用户名
define("DB_PWD","root");//数据库密码
define("DB_DBNAME","shopimooc");//打开的数据库
define("DB_CHARSET","utf8");//数据库编码


//连接数据库函数
function connect(){
//链接数据库
    $link=mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库链接失败Error:".mysql_errno().":".mysql_error());
//数据库编码
    mysqli_set_charset($link,DB_CHARSET);
//打开数据库shopimooc
    mysqli_select_db($link,DB_DBNAME)or die ("指定数据库打开失败");    
    return $link;
}

//完成插入数据的操作 insert(插入到那个表,插入的数据);
function insert($tavle,$array){
    $keys=join("",array_keys($array));
}