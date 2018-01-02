<?php
?>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/ajaxupload.3.5.js"></script>
<script src="js/script.js"></script>
<script>
 $(function(){
	 var url =  "Uploads";
     ajaxUpload(
			'upload_button1', //上传的按钮id名称
			1024,  //允许上传的文件大小（单位：kb）
			"uploadProcess.php?form_name=userfile&file_size=1024&upload_dir="+url, //提交服务器端地址
			'userfile', //提交服务器文件表单名称
			"alert(obj.filename);$(\"#img_path1\").show();$(\"#img_path1\").attr('src',obj.filename);", //上传成功后执行的 js callback
			'loadimg'  //loading 图片id
		);
})
	
</script>
<style>
 img{
   position:absolute;
 }
</style>
<a href="#">
<img src="images/duibiao/01.png" id = "img_path1"  style="width: 50px;  padding: 10px;display:none;" />
<img src="images/s4.png" id = "upload_button1"  style="width: 50px;  padding: 10px;" />
<img src="images/loading-images/004.gif" id = "loadimg"  style="width: 50px;  padding: 10px;display:none;" />
</a>

