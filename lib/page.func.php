<?php
//分页
require_once "../include.php";

//得到所有的表单查询
$sql="select * from imooc_admin";

//得到查询的条数
$totalRows=getResultnum($sql);

//定义一页显示的页码数
$pageSize=2;

//得到一共需要几页  ceil:取得最大的整数
$totalPage=ceil($totalRows/$pageSize);

//得到传过来的页码值如果没有的话默认为1
@$page=$_REQUEST['page']?(int)$_REQUEST['page']:1;

//对page进行判断 不小于1 不为空 是数字
if($page<1||$page==null||!is_numeric($page)){
    $page=1;
}

//对传过来的page进行限制不能大于$totalRows
if($page>=$totalPage)$page=$totalPage;


//跳转页面显示的个数 （2-1）*2=2
$offset=($page-1)*$pageSize;

//limit:从那条开始 ，显示几条
$sql="SELECT * FROM `imooc_admin` limit {$offset},{$pageSize}";

$rows=fetchAll($sql);

print_r($rows);

//循环出所有的页码
for($i=1;$i<$totalPage;$i++){

}


