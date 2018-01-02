<?php
/* Smarty version 3.1.29, created on 2017-10-22 23:39:11
  from "D:\phpStudy\WWW\smarty1\templates\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59ecbb9fea2b87_55398436',
  'file_dependency' => 
  array (
    '4796344f0925d7df11488f3fc56a6244afb7faf7' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\smarty1\\templates\\login.html',
      1 => 1508686729,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ecbb9fea2b87_55398436 ($_smarty_tpl) {
?>
<meta charset="utf-8">
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		button{
			margin-top:5px;
			margin-left:20px;
			border-radius:20%;   
		}
	</style>
<?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
$(function(){
	//获取登录按钮
$("#loginBtn").click(function(){
var uname=$("#txtName").val();
var upwd=$("#txtPwd").val();
$.ajax({
 url:"loginPProcess.php",
 // 数据传的多了 就好像jsom传值
 data:{
    useName:uname,
    usePwd:upwd},
   dataType:'text',
   type:'post',
 success:function(data){
  alert(data);
}
})




})
})	

<?php echo '</script'; ?>
>
</head>
<body bgcolor="skyblue">
<form align="center" style="margin-top:200px;">
用户名:<input type="text" id="txtName" placeholder="请输入用户名"><br>
密&nbsp;&nbsp;&nbsp;码:<input type="text" id="txtPwd" placeholder="请输入密码"><br>
<button id="loginBtn">点我登录</button>	
</form>
</body>
</html><?php }
}
