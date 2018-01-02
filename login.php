<?php
//包含类
require_once 'libs/Smarty.class.php';
$Smarty=new Smarty();
//分配过去
$Smarty->display("login.html");
?>