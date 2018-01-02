<?php
require_once 'Public/AjaxUpload.php';
//上传图片
$form_name = $_GET['form_name'];
//intval()函数：PHP中获取变量的整数值 
$file_size = intval($_GET['file_size']);
$upload_dir = $_GET['upload_dir'];
$upload=new \AjaxUpload($form_name, $file_size,$upload_dir);

