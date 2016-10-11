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
        <script type=\"text/javascript\" src=\"http://developer.baidu.com/map/jsdemo/demo/convertor.js\"></script> 
        <script>
        \$(function () {
                        
              if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                //标记并加上label
                // 百度地图API功能
                var map = new BMap.Map(\"allmap\");    // 创建Map实例
                map.centerAndZoom(new BMap.Point(x,y), 11);  // 初始化地图,设置中心点坐标和地图级别
                map.addControl(new BMap.MapTypeControl()); 
                map.enableScrollWheelZoom(true);
                //初始化一个地址解析类
                var geoc = new BMap.Geocoder(); 

                //创建一个标记
                var point = new BMap.Point(x,y);
                var marker = new BMap.Marker(point);
                map.addOverlay(marker);
                marker.addEventListener(\"click\",attribute);
                //添加点击事件
                function attribute(e){
                  //获取具体位置
                   var pt = e.point;
                    geoc.getLocation(pt, function(rs){
                      var addComp = rs.addressComponents;
                      var dizhi = addComp.province + \", \" + addComp.city + \", \" + addComp.district + \", \" + addComp.street + \", \" + addComp.streetNumber;
                      openinfo(dizhi,e);
                    });
                }

                function openinfo(content,e) 
                {
                    var opts = {
                        width : 250,     // 信息窗口宽度
                        height: 80,     // 信息窗口高度
                        title : \"信息窗口\" , // 信息窗口标题
                        enableMessage:true//设置允许信息窗发送短息
                         };
                    var p = e.target;
                    var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                    var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
                    map.openInfoWindow(infoWindow,point); //开启信息窗口
                }

             }

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
<!--导航-->
 <ul class=\"sq-nav\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"newproduct.html\" class=\"\">
              <img src=\"images/icon.png\" />
              <p>新品</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"specialprice.html\" class=\"\">
              <img src=\"images/icon1.png\" />
              <p>特价</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"reserve.html\" class=\"\">
              <img src=\"images/icon2.png\" />
              <p>预定</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"integral.html\" class=\"\">
              <img src=\"images/icon3.png\" />
              <p>积分</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"allchips.html\" class=\"\">
              <img src=\"images/icon4.png\" />
              <p>众筹</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"whitebar.html\" class=\"\">
              <img src=\"images/icon5.png\" />
              <p>白条</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"news.html\" class=\"\">
              <img src=\"images/icon6.png\" />
              <p>头条</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"category.html\" class=\"\">
              <img src=\"images/icon7.png\" />
              <p>分类</p>
            </a>
        </div>
      </li>
  </ul>
 <!--限时秒杀 -->
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
 <!--
 <div style=\"max-width:100%\">
    <div style=\"max-width:100%,min-width:100%\" id=\"allmap\"></div>
 </div>
 -->
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test1.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test2.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
 <!-- 特色专区-->
  <div class=\"sq-title\">
    <img src=\"images/ts.png\" width=\"24\"/>
    特色专区
 </div>
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test3.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test4.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test5.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
  <!-- 精品专区-->
  <div class=\"sq-title\">
    <img src=\"images/jp.png\" width=\"24\"/>
    精品专区
 </div>
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test1.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test2.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
  <!-- 便民-->
  <div class=\"sq-title\">
    <img src=\"images/bm.png\" width=\"24\"/>
    便民服务
 </div>
 <ul class=\"yule\">
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
 </ul>
 <!--底部-->
 <div style=\"height: 55px;\"></div>
 <div data-am-widget=\"navbar\" class=\"am-navbar am-cf am-navbar-default sq-foot am-no-layout\" id=\"\">
      <ul class=\"am-navbar-nav am-cf am-avg-sm-4\">   
          <li>
            <a href=\"index.html\" class=\"curr\">
                <span class=\"am-icon-home\"></span>
                <span class=\"am-navbar-label\">首页</span>
            </a>
          </li>
          <li>
            <a href=\"category.html\" class=\"\">
                <span class=\"am-icon-th-large\"></span>
                <span class=\"am-navbar-label\">分类</span>
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
        <script type=\"text/javascript\" src=\"http://developer.baidu.com/map/jsdemo/demo/convertor.js\"></script> 
        <script>
        \$(function () {
                        
              if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                //标记并加上label
                // 百度地图API功能
                var map = new BMap.Map(\"allmap\");    // 创建Map实例
                map.centerAndZoom(new BMap.Point(x,y), 11);  // 初始化地图,设置中心点坐标和地图级别
                map.addControl(new BMap.MapTypeControl()); 
                map.enableScrollWheelZoom(true);
                //初始化一个地址解析类
                var geoc = new BMap.Geocoder(); 

                //创建一个标记
                var point = new BMap.Point(x,y);
                var marker = new BMap.Marker(point);
                map.addOverlay(marker);
                marker.addEventListener(\"click\",attribute);
                //添加点击事件
                function attribute(e){
                  //获取具体位置
                   var pt = e.point;
                    geoc.getLocation(pt, function(rs){
                      var addComp = rs.addressComponents;
                      var dizhi = addComp.province + \", \" + addComp.city + \", \" + addComp.district + \", \" + addComp.street + \", \" + addComp.streetNumber;
                      openinfo(dizhi,e);
                    });
                }

                function openinfo(content,e) 
                {
                    var opts = {
                        width : 250,     // 信息窗口宽度
                        height: 80,     // 信息窗口高度
                        title : \"信息窗口\" , // 信息窗口标题
                        enableMessage:true//设置允许信息窗发送短息
                         };
                    var p = e.target;
                    var point = new BMap.Point(p.getPosition().lng, p.getPosition().lat);
                    var infoWindow = new BMap.InfoWindow(content,opts);  // 创建信息窗口对象 
                    map.openInfoWindow(infoWindow,point); //开启信息窗口
                }

             }

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
<!--导航-->
 <ul class=\"sq-nav\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"newproduct.html\" class=\"\">
              <img src=\"images/icon.png\" />
              <p>新品</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"specialprice.html\" class=\"\">
              <img src=\"images/icon1.png\" />
              <p>特价</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"reserve.html\" class=\"\">
              <img src=\"images/icon2.png\" />
              <p>预定</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"integral.html\" class=\"\">
              <img src=\"images/icon3.png\" />
              <p>积分</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"allchips.html\" class=\"\">
              <img src=\"images/icon4.png\" />
              <p>众筹</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"whitebar.html\" class=\"\">
              <img src=\"images/icon5.png\" />
              <p>白条</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"news.html\" class=\"\">
              <img src=\"images/icon6.png\" />
              <p>头条</p>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"category.html\" class=\"\">
              <img src=\"images/icon7.png\" />
              <p>分类</p>
            </a>
        </div>
      </li>
  </ul>
 <!--限时秒杀 -->
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
 <!--
 <div style=\"max-width:100%\">
    <div style=\"max-width:100%,min-width:100%\" id=\"allmap\"></div>
 </div>
 -->
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test1.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test2.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
 <!-- 特色专区-->
  <div class=\"sq-title\">
    <img src=\"images/ts.png\" width=\"24\"/>
    特色专区
 </div>
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test3.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test4.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test5.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
  <!-- 精品专区-->
  <div class=\"sq-title\">
    <img src=\"images/jp.png\" width=\"24\"/>
    精品专区
 </div>
  <ul data-am-widget=\"gallery\" class=\"am-gallery pro-list am-avg-sm-3 am-avg-md-3 am-avg-lg-4 am-gallery-default\"  >
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test.png\" />
                <h3 class=\"am-gallery-title\">猪骨头棒新鲜生鲜肉制品猪大骨头筒骨熬汤佳品500g</h3>
                <div class=\"am-gallery-desc\">￥52</div>
            </a>
        </div>
      </li>
      <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test1.png\" />
                <h3 class=\"am-gallery-title\">冻品批发大江鸡腿 冷鲜鸡腿放心食材1kg 冷冻食材</h3>
                <div class=\"am-gallery-desc\">￥39</div>
            </a>
        </div>
      </li>
        <li>
        <div class=\"am-gallery-item\">
            <a href=\"detail.html\" class=\"\">
              <img src=\" images/test2.png\" />
                <h3 class=\"am-gallery-title\">法国加力果12个装 进口新鲜水果 嘎啦苹果 包邮</h3>
                <div class=\"am-gallery-desc\">￥45.8</div>
            </a>
        </div>
      </li>
  </ul>
  <!-- 便民-->
  <div class=\"sq-title\">
    <img src=\"images/bm.png\" width=\"24\"/>
    便民服务
 </div>
 <ul class=\"yule\">
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
        <li>
            <a href=\"news.html\">
                <img src=\"images/test.jpg\">
                <div style=\"width: 70%; float: left;\">
                <h3 class=\"title\">青山湖区熊氏锁业</h3>
                <p class=\"intro\">开、修、换各式民用锁具（各类普通房门、防盗门、车库门、密码箱</p>
                </div>
            </a>
        </li>
 </ul>
 <!--底部-->
 <div style=\"height: 55px;\"></div>
 <div data-am-widget=\"navbar\" class=\"am-navbar am-cf am-navbar-default sq-foot am-no-layout\" id=\"\">
      <ul class=\"am-navbar-nav am-cf am-avg-sm-4\">   
          <li>
            <a href=\"index.html\" class=\"curr\">
                <span class=\"am-icon-home\"></span>
                <span class=\"am-navbar-label\">首页</span>
            </a>
          </li>
          <li>
            <a href=\"category.html\" class=\"\">
                <span class=\"am-icon-th-large\"></span>
                <span class=\"am-navbar-label\">分类</span>
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
