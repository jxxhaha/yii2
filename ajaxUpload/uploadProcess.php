<?php
require_once 'Public/AjaxUpload.php';
//�ϴ�ͼƬ
$form_name = $_GET['form_name'];
//intval()������PHP�л�ȡ����������ֵ 
$file_size = intval($_GET['file_size']);
$upload_dir = $_GET['upload_dir'];
$upload=new \AjaxUpload($form_name, $file_size,$upload_dir);

