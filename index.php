<?php
header("Content-type:text/html;charset=utf-8");
require_once'libs/Smarty.class.php';
$Smarty=new Smarty();
//smarty中数组便利的两种方式(foreach section)
// foreach
  $arr=array("name"=>"wzy","sex"=>"女","age"=>18);	
$Smarty->assign("arr",$arr);
$arr1=array();
$Smarty->assign("arr1",$arr1);
 $arr2=array("wzy","女",18);
$Smarty->assign("arr2",$arr2);
$arr3=array("name"=>"蒋茜茜最美","sex"=>"女","age"=>18);
$Smarty->assign("arr3",$arr3);
//二维数组
$arr4=array(
		array('name'=>'蒋茜茜最美','sex'=>'女','age'=>'16'),
		array('name'=>'蒋西西最美','sex'=>'女','age'=>'18'),
		array('name'=>'蒋嘻嘻最美','sex'=>'男','age'=>'20')
);
$Smarty->assign("arr4",$arr4);

$Car=array(
		array('name'=>'尼桑','type'=>'中型车','price'=>'16万'),
	    array('name'=>'宝马','type'=>'小型车','price'=>'30万'),
		array('name'=>'卡车','type'=>'大型车','price'=>'50万'),
		);
$Smarty->assign("car",$Car);

$person=array(
		array('name'=>'蒋茜茜小仙女','sex'=>'女','age'=>'16'),
		array('name'=>'蒋西西小仙女','sex'=>'女','age'=>'18'),
		array('name'=>'蒋嘻嘻小仙女','sex'=>'男','age'=>'20')
);
$Smarty->assign("person",$person);
$Smarty->display("templates/index.html");
?>

