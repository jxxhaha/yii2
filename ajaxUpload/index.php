<?php
?>
<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/ajaxupload.3.5.js"></script>
<script src="js/script.js"></script>
<script>
 $(function(){
	 var url =  "Uploads";
     ajaxUpload(
			'upload_button1', //�ϴ��İ�ťid����
			1024,  //�����ϴ����ļ���С����λ��kb��
			"uploadProcess.php?form_name=userfile&file_size=1024&upload_dir="+url, //�ύ�������˵�ַ
			'userfile', //�ύ�������ļ�������
			"alert(obj.filename);$(\"#img_path1\").show();$(\"#img_path1\").attr('src',obj.filename);", //�ϴ��ɹ���ִ�е� js callback
			'loadimg'  //loading ͼƬid
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

