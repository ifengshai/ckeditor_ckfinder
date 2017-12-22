ckfinder2.6支持php版本低于6.0的
上传文件受限于php上传配置

ckfinder/config.php

authentication：此函数返回值改为true,意思是你是用钱购买的这个软件
$baseUrl：此变量设置上传文件路径(需用绝对路径)
ResourceType：增加此数组增加上传类型，可仿照文件里面例子


ckeditor/config.js配置ckfinder,注意对应路径

config.filebrowserImageBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?type=Images'; 
	config.filebrowserImageUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	
	config.filebrowserBrowseUrl = 'ckeditor/ckfinder/ckfinder.html';
	config.filebrowserUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	
	config.filebrowserFlashBrowseUrl = 'ckeditor/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserFlashUploadUrl = 'ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
