<?php
 header("Content-type:text/html;charset=utf-8");
// 开启session
 session_start();
//获取get传过来的值
$Usename=$_POST['useName'];

//密码加密的 所以用MD5 
$Usepwd=md5($_POST['usePwd']);
// //连接数据库
 mysql_connect("localhost","root","root");
 mysql_select_db("smarty");
 echo "jiang";
 return;
mysql_query("set names utf-8");
//写sql语句
$sql="select count(userid) as num from tb_userinfo where username=$Usename && userpwd=$Usepwd";

$res=mysql_query($sql);
$resArr=mysql_fetch_assoc($res);//本来是二维数组 但有一条数据
// 获取一维数组得值
?>