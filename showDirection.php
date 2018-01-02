<?php
//只要有session地方,就要开启,session随处都可以用
session_start();
// 这个页面是写个人信息和技术方向表
//注意:找链接时根据php页面找关系,这两者页面关联
//包括类
require_once 'libs/Smarty.class.php';
//new新对象
$Smarty=new Smarty();
//这里做的功能是判断是否登录(用户名和密码是否为空)
//数据库工作
mysql_connect("localhost","root","root");
mysql_select_db("smarty");
mysql_query("set names utf-8");
$sql="select userid,username,tb_direction.directname
from tb_direction,tb_userinfo
where tb_direction.ID=tb_userinfo.directionID
";
$res=mysql_query($sql);//一维数组
// $resArr=mysql_fetch_assoc($res);
// print_r($resArr);
//把一维数组赋给空数组,就是二维数组
$Allarr=array();
//资源类型,弄成二维数组,但是只有一条,结合循环取用
while (($resArr=mysql_fetch_assoc($res))!=false) {
	$Allarr[]=$resArr;//赋给空数组 $Allarr是二维数组
	}
// print_r($Allarr);
$Smarty->assign("Res",$Allarr);
$Smarty->display("showDirection.html");
?>
