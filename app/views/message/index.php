<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>留言板</title>
	<link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="public/js/Dialog/skin/default.css" rel="stylesheet" />
	<script src="public/js/jquery.js"></script>
	<script src="public/js/Dialog/artDialog.basic.js"></script>
	<style>
		.header{background-color: black;width:%100;height:50px;text-align: center;color:white;line-height:50px;}
		.content{
			width:%100;
			margin:20px;
		}
		.one{
			display: inline-block;
			width:300px;
			height:200px;
			border:1px solid black;
			clear:both;

		}
		.left{
			width:180px;
			padding:10px;
			float:left;
			word-wrap:break-word;
			word-break:break-all;

          
		}
		.left blockquote p{
			font-family:"微软雅黑","黑体","宋体";
      		font-size:12px;
			text-indent: 2em; 
			width:180px; 
			height:65px;
			overflow: hidden;

		}
		.right{
			width:10px;
			height:200px;
			background-color:black;
			float:right;
		}
		cite{
			width:;
		}
		.header span{
			float:right;
			padding-right:20px;
			color:white;
		}
	</style>
</head>
<body>
	<div class="header">
		欢迎来到我的留言板 <span><a href="index.php?c=message&a=addMessage">给我留言</a></span>
	</div>
	<div class="content">
		{% for item in data %}
			<div class="one" id="{{ item.id }}">
			<div class="left">
				<h4>{{ item.title }}</h4>
				<blockquote><p>{{ item.content }}</p><small><cite>{{ item.addtime }}</cite></small></blockquote>
			</div>
			<div class="right"></div>
			</div>
		{% endfor %}
	</div>
	<div class="pagination pagination-right">
		{% for i in 1..sum %}  
        	<a href="index.php?c=message&a=index&page={{ i }}">{{ i }} </a>
    	{% endfor %}  
	</div>
</body>
</html>
<script type="text/javascript">
	$('.one').on('click',function(){
		var id = $(this).attr('id');
		//查询数据库
		$.ajax({
     		'type': 'POST',

     		'url': "index.php?c=message&a=getOne&id="+id,

    		'data':'',

    		success: function(msg){
    			eval("var data="+msg);
    			var dialog = art.dialog({
    				title: '我是对话框',
    				content: '我是初始化的内容'
				});
      
				dialog.content(data.content).title(data.title);
    		}

		});
	})
</script>