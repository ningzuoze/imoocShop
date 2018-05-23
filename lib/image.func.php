<?php
require_once "string.func.php";

//通过GD库做验证码
//定义画布宽高
$width=80;
$height=20;
//创建画布
$image=imagecreatetruecolor($width,$height);
//创建颜色填充画布
$white=imagecolorallocate($image,255,255,255);
$black=imagecolorallocate($image,0,0,0);
//用填充矩形填充画布背景
imagefilledrectangle($image,1,1,$width-2,$height-2,$white);
//定义类型与长度
$type=1;
$length=4;

$chars=buildRandomString($type,$length);
$sess_name="verify";
$_SESSION[$sess_name]=$chars;
//创建数组存放字体
$fontfiles=array("corbel.ttf","corbelb.ttf","corbeli.ttf","corbelz.ttf","framd.ttf","framdit.ttf");
//要产生的验证码
for($i=0;$i<$length;$i++){
//随机字体大小
    $size=mt_rand(14,18);
//随机字体角度
    $angle=mt_rand(-15,15);
//随机单个验证码坐标
    $x=5+$i*$size;
    $y=15;
//随机验证码颜色
    $color=imagecolorallocate($image,0,255,255);
//随机产生字体
    $fontfile="C:\Windows\Fonts\corbel.ttf";
//产生随机的字符串
    $text=substr($chars,$i,1);
    imagettftext($image,$size,$angle,$x,$y,$color,$fontfile,$text);
    //注意字体路径
}

header("content-type:image/gif");
imagegif($image);
imagedestroy($image);