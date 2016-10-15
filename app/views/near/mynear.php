<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0"/>
	<meta charset="UTF-8">
	<title></title>
	<script src="public/js/jquery.js"></script>
	<link href="public/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	 <script src="public/js/jquery.js"></script>
    <script src="public/bootstrap/dist/js/bootstrap.min.js"></script>
    <style type="text/css">
    	body{
    		font-size:12px;
    	}
    	.header{
    		width:100%;
    		height:200px;
    	}
		.header img{
			margin-top:50px;
			width:20%;
			height:100px;
			float:left;
		}
		.header h5{
			margin-top:50px;
			float:left;
		}
		.header p{
			margin-top:50px;
			float:left;
      margin-left:-150px;
		}
    .goods{
      margin-top:50px;
    }
    .yule{
      margin-top:20px;
    }
		
    </style>
</head>
<body>
<input type="hidden" id="number" value="10"/>
	<div class="header"><img src="public/upload/{{ info.near_image }}"/><h5>{{ info.near_name }}</h5><br/><p>发布数{{ count }}</p></div>
	<div class="yule">
	{% for item in goods %}
		<div class="goods">
    <a href="">
			<img src="{{ item.user_pic }}" class="img-circle" width="50px" height="50px">{{ item.nickname }}<span style="float:right">￥{{ item.goods_now }}</span><br/>
			{% for img in item.goods_pic|split(',') %}
				<img src="{{ img|replace('\\','/') }}" class="img-thumbnail img-responsive" width="40%" height="10%">
			{% endfor %}
      <br/>
      <p>{{ item.goods_desc|slice(0,50) }}</p>
      <p style="color:orange;">来自{{ item.goods_city }}市</p>
    </a>
		</div>
		{% endfor %}
	</div>
  <div class="navbar-fixed-bottom">
    <a class="btn btn-large btn-success" href="">发布</a>
  </div>
</body>
</html>
<script>
	$(function(){
      function scrollTop(){
          return Math.max(
          //chrome
          document.body.scrollTop,
          //firefox/IE
          document.documentElement.scrollTop);
    }
    function documentHeight(){
          //现代浏览器（IE9+和其他浏览器）和IE8的document.body.scrollHeight和document.documentElement.scrollHeight都可以
          return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
    }


  function windowHeight(){
        return (document.compatMode == "CSS1Compat")?
        document.documentElement.clientHeight:
        document.body.clientHeight;
  }


        $(window).on('scroll',function(){
        if(scrollTop() + windowHeight() >= (documentHeight() - 50/*滚动响应区域高度取50px*/)){
            //再次加载10条数据
            var limit = $('#number').val();
            if(limit<10)
            {
              return ;
            }
            else{
                $('#number').attr('value',parseInt(limit)+10);
            }
            $.ajax({
                    'url':'index.php?c=near&a=mynear&id='+{{ info.id }},
                    'data':'limit='+limit,
                    'type':'post',
                    success:function(msg){
                        eval("var data="+msg)

                        for(var i in data)
                        {
                              var html = "<li><a href='index.php?c=near&a=mynear&id="+data[i].id+"'><img src='public/upload/"+data[i].near_image+"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>"+data[i].near_name+"</h3><p class='intro'>"+data[i].near_desc+"</p></div></a></li>";
                            $('.yule').append(html)
                        }                       
                    }
                  });
      }; 
    })

      })
    
</script>
</script>