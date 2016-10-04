<!DOCTYPE html>
<html lang="en">
<head>
 
	<meta charset="UTF-8">
	<title>留言添加</title>
	<link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<form class="form-horizontal" role="form" action="index.php?c=message&a=save" method="post">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="inputtitle" required name="title">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-6">
      <textarea class="form-control" rows="3" required name="content"></textarea>
  	</div>
  </div>
      <button type="submit" class="btn btn-success btn-lg" style="margin-left:285px;">提交</button>
</form>
</body>
</html>