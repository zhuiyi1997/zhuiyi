<?php

/* near/index.php */
class __TwigTemplate_62700a0c16f5096abb3a0b6742604596c582057a63c1d85de11b77203163fc92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>55社区田园</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <link rel=\"icon\" type=\"image/png\" href=\"theme/default/images/favicon.png\">
        <link href=\"theme/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"theme/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"theme/js/jquery-1.10.2.min.js\"></script>
        <script src=\"theme/js/time.js\"></script>
        <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script> 
        <script type=\"text/javascript\" src=\"public/js/convertor.js\"></script> 
        <script>
        \$(function () {
                        
              if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                \$.ajax({
                    'url':'index.php?c=near&a=getNear',
                    'data':'x='+x+\"&y=\"+y,
                    'type':'post',
                    success:function(msg){

                    
                        eval(\"var data=\"+msg)
                        // 百度地图API功能
                        var map = new BMap.Map(\"allmap\");    // 创建Map实例
                        map.centerAndZoom(new BMap.Point(x,y), 16);  // 初始化地图,设置中心点坐标和地图级别
                        map.addControl(new BMap.MapTypeControl()); 
                        map.enableScrollWheelZoom(true);
                    
                        //初始化一个地址解析类
                        var geoc = new BMap.Geocoder(); 
                         translateCallback = function (point){
                            var marker = new BMap.Marker(point);
                            map.addOverlay(marker);
                            
                            //map.setCenter(point);                     
                            //location.href = 'index.php?c=near&a/mynear';
                        }
                         translateCallback2 = function (point){
                            var marker = new BMap.Marker(point,{icon:myIcon});
                            map.addOverlay(marker);
                            map.setCenter(point);                  
                            //location.href = 'index.php?c=near&a/mynear';
                        }

                        function openinfo(e,content) 
                        {
                            var opts = {
                                width : 250,     // 信息窗口宽度
                                height: 80,     // 信息窗口高度
                                title : \"信息窗口\", // 信息窗口标题
                                enableMessage:true//设置允许信息窗发送短息
                                 };
                            var p = e.target;
                            var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                            var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
                            map.openInfoWindow(infoWindow,point); //开启信息窗口
                        }

                        //创建一个标记
                        var point = new BMap.Point(x,y);
                        var myIcon = new BMap.Icon(\"http://api.map.baidu.com/img/markers.png\", new BMap.Size(23, 25), {  
                              offset: new BMap.Size(10, 25), // 指定定位位置  
                              imageOffset: new BMap.Size(0, 0 - 10 * 25) // 设置图片偏移  
                        });  
                        BMap.Convertor.translate(point,0,translateCallback2); 
                        //var marker = new BMap.Marker(point);
                        //map.addOverlay(marker);
                        


                        for(var i in data)
                        {
                             var pointone = new BMap.Point(data[i].near_long,data[i].near_lat);
                             var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p><span>约\"+data[i].distance+\"米</span></div></a></li>\";
                             \$('.yule').append(html)
                             BMap.Convertor.translate(pointone,0,translateCallback);
                        }
                        
                    }
              })

             }

             \$('#add').click(function(){
                location.href='index.php?c=near&a=list';
             })

        });

    

</script>
 <style type=\"text/css\">
  #allmap {width: 100%;height: 300px;overflow: hidden;margin:0;font-family:\"微软雅黑\";}
  </style>
    </head>
    <body>
<!--图片轮换-->
<div class=\"am-slider am-slider-default\" data-am-flexslider id=\"demo-slider-0\" style=\"position: relative;\">
    <header data-am-widget=\"header\" class=\"am-header am-header-default tm-head\" id=\"shortbar\" >
            <div class=\"am-header-left am-header-nav\">
                <a href=\"city.html\" class=\"\">
                    <img src=\"images/city.png\" />
                    <p style=\"font-size: 12px; margin-top: -35px;\">南昌</p>
                </a>
           </div>
            <h1 class=\"am-header-title1\">
                <div class=\"search-box\">
                   <input type=\"text\" name=\"title\" class=\"index-search\" placeholder=\"寻找你喜欢的商品......\" />
                   <input type=\"submit\" value=\"\" class=\"search-icon\" /> 
                </div>
            </h1>
            <div class=\"am-header-right am-header-nav\">
                
                <a href=\"\" class=\"\">
                   <img src=\"images/sao.png\" />
                   <p style=\"font-size: 12px; margin-top: -35px;\">扫一扫</p>
                </a>
            </div>
        </header>
  <ul class=\"am-slides\">
    <li><img src=\"images/banner1.png\" /></li>
    <li><img src=\"images/banner1.png\" /></li>
  </ul>
</div>

 <div class=\"sq-title\">
    <i class=\"am-icon-volume-up\"></i>
    <div class=\"fnTimeCountDown\" data-end=\"2018/07/08 18:45:13\">
                   附近的鱼塘： 
     
    </div>
    <script type=\"text/javascript\">
    \$(\".fnTimeCountDown\").fnTimeCountDown(\"2018/07/08 18:45:13\");
    </script>
 </div>
 <div style=\"max-width:100%,min-width:100%\" id=\"allmap\"></div>
 <ul class=\"yule\">
       
 </ul>
 <input type=\"button\" class=\"login-btn\" value=\"更多\" id=\"add\"/>
 <!--底部-->
 <div style=\"height: 55px;\"></div>
 <div data-am-widget=\"navbar\" class=\"am-navbar am-cf am-navbar-default sq-foot am-no-layout\" id=\"\">
      <ul class=\"am-navbar-nav am-cf am-avg-sm-4\">   
          <li>
            <a href=\"index.php?c=near&a=index\" class=\"curr\">
                <span class=\"am-icon-home\"></span>
                <span class=\"am-navbar-label\">鱼塘</span>
            </a>
          </li>
          <li>
            <a href=\"index.php?c=near&a=add\" class=\"\">
                <span class=\"am-icon-th-large\"></span>
                <span class=\"am-navbar-label\">创建</span>
            </a>
          </li>
       
          <li>
            <a href=\"shopcart.html\" class=\"\">
                <span class=\"am-icon-shopping-cart\"></span>
                <span class=\"am-navbar-label\">购物车</span>
            </a>
          </li>
          <li>
            <a href=\"login.html\" class=\"\">
                <span class=\"am-icon-user\"></span>
                <span class=\"am-navbar-label\">我的55</span>
            </a>
          </li>
      </ul>
</div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "near/index.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>55社区田园</title>
        <meta name=\"description\" content=\"\">
        <meta name=\"keywords\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <link rel=\"icon\" type=\"image/png\" href=\"theme/default/images/favicon.png\">
        <link href=\"theme/css/amazeui.min.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"theme/css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
        <script src=\"theme/js/jquery-1.10.2.min.js\"></script>
        <script src=\"theme/js/time.js\"></script>
        <script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script> 
        <script type=\"text/javascript\" src=\"public/js/convertor.js\"></script> 
        <script>
        \$(function () {
                        
              if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                \$.ajax({
                    'url':'index.php?c=near&a=getNear',
                    'data':'x='+x+\"&y=\"+y,
                    'type':'post',
                    success:function(msg){

                    
                        eval(\"var data=\"+msg)
                        // 百度地图API功能
                        var map = new BMap.Map(\"allmap\");    // 创建Map实例
                        map.centerAndZoom(new BMap.Point(x,y), 16);  // 初始化地图,设置中心点坐标和地图级别
                        map.addControl(new BMap.MapTypeControl()); 
                        map.enableScrollWheelZoom(true);
                    
                        //初始化一个地址解析类
                        var geoc = new BMap.Geocoder(); 
                         translateCallback = function (point){
                            var marker = new BMap.Marker(point);
                            map.addOverlay(marker);
                            
                            //map.setCenter(point);                     
                            //location.href = 'index.php?c=near&a/mynear';
                        }
                         translateCallback2 = function (point){
                            var marker = new BMap.Marker(point,{icon:myIcon});
                            map.addOverlay(marker);
                            map.setCenter(point);                  
                            //location.href = 'index.php?c=near&a/mynear';
                        }

                        function openinfo(e,content) 
                        {
                            var opts = {
                                width : 250,     // 信息窗口宽度
                                height: 80,     // 信息窗口高度
                                title : \"信息窗口\", // 信息窗口标题
                                enableMessage:true//设置允许信息窗发送短息
                                 };
                            var p = e.target;
                            var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                            var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
                            map.openInfoWindow(infoWindow,point); //开启信息窗口
                        }

                        //创建一个标记
                        var point = new BMap.Point(x,y);
                        var myIcon = new BMap.Icon(\"http://api.map.baidu.com/img/markers.png\", new BMap.Size(23, 25), {  
                              offset: new BMap.Size(10, 25), // 指定定位位置  
                              imageOffset: new BMap.Size(0, 0 - 10 * 25) // 设置图片偏移  
                        });  
                        BMap.Convertor.translate(point,0,translateCallback2); 
                        //var marker = new BMap.Marker(point);
                        //map.addOverlay(marker);
                        


                        for(var i in data)
                        {
                             var pointone = new BMap.Point(data[i].near_long,data[i].near_lat);
                             var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p><span>约\"+data[i].distance+\"米</span></div></a></li>\";
                             \$('.yule').append(html)
                             BMap.Convertor.translate(pointone,0,translateCallback);
                        }
                        
                    }
              })

             }

             \$('#add').click(function(){
                location.href='index.php?c=near&a=list';
             })

        });

    

</script>
 <style type=\"text/css\">
  #allmap {width: 100%;height: 300px;overflow: hidden;margin:0;font-family:\"微软雅黑\";}
  </style>
    </head>
    <body>
<!--图片轮换-->
<div class=\"am-slider am-slider-default\" data-am-flexslider id=\"demo-slider-0\" style=\"position: relative;\">
    <header data-am-widget=\"header\" class=\"am-header am-header-default tm-head\" id=\"shortbar\" >
            <div class=\"am-header-left am-header-nav\">
                <a href=\"city.html\" class=\"\">
                    <img src=\"images/city.png\" />
                    <p style=\"font-size: 12px; margin-top: -35px;\">南昌</p>
                </a>
           </div>
            <h1 class=\"am-header-title1\">
                <div class=\"search-box\">
                   <input type=\"text\" name=\"title\" class=\"index-search\" placeholder=\"寻找你喜欢的商品......\" />
                   <input type=\"submit\" value=\"\" class=\"search-icon\" /> 
                </div>
            </h1>
            <div class=\"am-header-right am-header-nav\">
                
                <a href=\"\" class=\"\">
                   <img src=\"images/sao.png\" />
                   <p style=\"font-size: 12px; margin-top: -35px;\">扫一扫</p>
                </a>
            </div>
        </header>
  <ul class=\"am-slides\">
    <li><img src=\"images/banner1.png\" /></li>
    <li><img src=\"images/banner1.png\" /></li>
  </ul>
</div>

 <div class=\"sq-title\">
    <i class=\"am-icon-volume-up\"></i>
    <div class=\"fnTimeCountDown\" data-end=\"2018/07/08 18:45:13\">
                   附近的鱼塘： 
     
    </div>
    <script type=\"text/javascript\">
    \$(\".fnTimeCountDown\").fnTimeCountDown(\"2018/07/08 18:45:13\");
    </script>
 </div>
 <div style=\"max-width:100%,min-width:100%\" id=\"allmap\"></div>
 <ul class=\"yule\">
       
 </ul>
 <input type=\"button\" class=\"login-btn\" value=\"更多\" id=\"add\"/>
 <!--底部-->
 <div style=\"height: 55px;\"></div>
 <div data-am-widget=\"navbar\" class=\"am-navbar am-cf am-navbar-default sq-foot am-no-layout\" id=\"\">
      <ul class=\"am-navbar-nav am-cf am-avg-sm-4\">   
          <li>
            <a href=\"index.php?c=near&a=index\" class=\"curr\">
                <span class=\"am-icon-home\"></span>
                <span class=\"am-navbar-label\">鱼塘</span>
            </a>
          </li>
          <li>
            <a href=\"index.php?c=near&a=add\" class=\"\">
                <span class=\"am-icon-th-large\"></span>
                <span class=\"am-navbar-label\">创建</span>
            </a>
          </li>
       
          <li>
            <a href=\"shopcart.html\" class=\"\">
                <span class=\"am-icon-shopping-cart\"></span>
                <span class=\"am-navbar-label\">购物车</span>
            </a>
          </li>
          <li>
            <a href=\"login.html\" class=\"\">
                <span class=\"am-icon-user\"></span>
                <span class=\"am-navbar-label\">我的55</span>
            </a>
          </li>
      </ul>
</div>
    </body>
</html>";
    }
}
