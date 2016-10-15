<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>55社区田园</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="theme/default/images/favicon.png">
        <link href="theme/css/amazeui.min.css" rel="stylesheet" type="text/css" />
        <link href="theme/css/style.css" rel="stylesheet" type="text/css" />
        <script src="theme/js/jquery-1.10.2.min.js"></script>
    </head>
    <body>
    <input type="hidden" value='{{ count }}' id="number"/>
 <ul class="yule">
 {% for item in data %}
       <li><a href='index.php?c=near&a=mynear&id={{ item.id }}'><img src='public/upload/{{ item.near_image }}' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>{{ item.near_name }}</h3><p class='intro'>{{ item.near_desc }}</p></div></a></li>
 {% endfor %}
 </ul>
 <!--底部-->
 <div style="height: 55px;"></div>
 <div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default sq-foot am-no-layout" id="">
      <ul class="am-navbar-nav am-cf am-avg-sm-4">   
          <li>
            <a href="index.php?c=near&a=index" class="curr">
                <span class="am-icon-home"></span>
                <span class="am-navbar-label">首页</span>
            </a>
          </li>
          <li>
            <a href="index.php?c=near&a=add" class="">
                <span class="am-icon-th-large"></span>
                <span class="am-navbar-label">创建</span>
            </a>
          </li>
       
          <li>
            <a href="shopcart.html" class="">
                <span class="am-icon-shopping-cart"></span>
                <span class="am-navbar-label">购物车</span>
            </a>
          </li>
          <li>
            <a href="login.html" class="">
                <span class="am-icon-user"></span>
                <span class="am-navbar-label">我的55</span>
            </a>
          </li>
      </ul>
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
                    'url':'index.php?c=near&a=list',
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