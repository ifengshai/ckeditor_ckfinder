<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CKEditor and CKFinder</title>
<script language="javascript" type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript" src="ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
<?php echo stripcslashes($_POST['description']);?><br>
<?php echo stripcslashes($_POST['description1']);?><br>
<?php echo stripcslashes($_POST['description2']);?>
<form action="index.php" method="post" name="form1">
		<h1>完整demo</h1>
		姓名：<input type="text" name="name"/><br>
				<textarea id="editor" name='description'>333</textarea><br>
				<script type="text/javascript">  
					CKEDITOR.replace("editor",{ width: '450px', height: '100px' });  
				</script>
				<textarea id="editor1" name='description1'>555</textarea><br>
				<script type="text/javascript">  
					CKEDITOR.replace("editor1",{ width: '671px', height: '300px' });  
				</script>
				<textarea id="editor2" name='description2'>777</textarea><br>
				<script type="text/javascript">  
					CKEDITOR.replace("editor2",{ width: '671px', height: '100px' });  
				</script>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>