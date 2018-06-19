<?php
    function addCate(){
//接收传过来的信息
        if(!$_POST['cName']==null){
            $arr=$_POST;
            if(insert("imooc_cate",$arr)){
                $mes="分类添加成功！<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看列表</a>";
            }else {
                $mes="分类添加失败！<br/><a href='addCate.php'>继续添加</a>|<a href='listCate.php'>查看列表</a>";
            }
            return $mes;
        }else{
            
            alertMes("分类信息不能为空","addCate.php");
        }
//判断是否传输成功
    }