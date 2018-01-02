/**
 * Ajax 无刷新上传图片（jpg|gif|png）
 * @param string id_name id名称
 * @param int filesize 文件大小 k 为单位
 * @param string url   提交服务器端地址
 * @param string filename 提交服务器文件表单名称
 * @param string callback 上传成功运行代码
 * @param string loadingid loading 图片id名称
 * @return json
 */
function ajaxUpload(id_name, filesize, url, filename, callback, loadingid) {

    var button = $('#'+id_name), interval;
    var fileType = "pic", fileNum = "one";
    new AjaxUpload(button,{
        action: url,
        name: filename,
        onSubmit : function(file, ext){
            if(fileType == "pic") {
                if (ext && /^(jpg|png|jpeg|gif)$/.test(ext)){
                    this.setData({
                        'info': '文件类型为图片'
                    });
                } else {
                    alert('提示：您上传的是非图片类型！');
                    return false;
                }
            }
            $("#"+loadingid).show();
            if(fileNum == 'one') this.disable();
        },
        onComplete: function(file, response){
            eval("var obj="+response);
            if (obj.ok) {
                eval(callback);
            } else {
                switch (response) {
                    case '1':
                        alert('提示：上传失败，图片不能大于'+filesize+'k！');
                        break;
                    case '3':
                        alert('提示：图片只有部分文件被上传，请重新上传！');
                        break;
                    case '4':
                        alert('提示：没有任何文件被上传！');
                        break;
                    case '5':
                        alert('提示：非图片类型，请上传jpg|png|gif图片！');
                        break;
                    default:
                        alert('提示：上传失败，错误未知，请您及时联系网站客服人员！');
                        break;
                }
            }
            $("#"+loadingid).hide();
            window.clearInterval(interval);
            this.enable();
        }
    });
}
