<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>55社区</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="renderer" content="webkit">
        <meta http-equiv="Cache-Control" content="no-siteapp" />
        <link rel="icon" type="image/png" href="theme/default/images/favicon.png">
		<link href="theme/css/amazeui.min.css" rel="stylesheet" type="text/css" />
		<link href="theme/css/style.css" rel="stylesheet" type="text/css" />
		<script src="theme/js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9"></script>
		
	</head>
	<body>
		<header data-am-widget="header" class="am-header am-header-default sq-head ">
			<div class="am-header-left am-header-nav">
				<a href="javascript:history.back()" class="">
					<i class="am-icon-chevron-left"></i>
				</a>
			</div>
			<h1 class="am-header-title">
  	            <a href="" class="">建立鱼塘</a>
            </h1>
	    </header>
	    <div style="height: 49px;"></div>
	    <form id='myform' action="index.php?c=near&a=save" method="post" enctype="multipart/form-data">
	    <div class="whitebar">
	    <div data-am-widget="tabs" class="am-tabs am-tabs-d2">
			     
			      <div style="height: 49px;"></div>
			      
			      <div class="am-tabs-bd">
			      
			          <div data-tab-panel-0 class="am-tab-panel am-active">
                            <div class="intergral">
						    	<input required type="text"  placeholder="请输入鱼塘名" class="login-password" name="near_name">
						    	<input required type="text"  placeholder="请输入塘主昵称" class="login-name" name="near_owner">
						    	<textarea required placeholder="鱼塘说明" class="integ-text" style="margin-top:15px;" name="near_desc"></textarea>
						    	<input type="file" required class="login-name" style="margin-top:15px;" name="near_image"/>
						    	<input type="submit" class="login-btn" value="提交" id="add"/>
						    </div>
			          </div>
			          
			      </div>
			      
        </div>
	   </div>
	  </form>
	 

<script src="theme/js/jquery.min.js"></script>
<script src="theme/js/amazeui.min.js"></script>


	</body>
</html>
<script>
	$(function(){
		$('#add').on('click',function(evt){
			evt.preventDefault();			
			var data = new FormData($('#myform')[0]);	
			//获取经纬度
			if (navigator.geolocation){
                  navigator.geolocation.getCurrentPosition(showPosition);
              }
             
             function showPosition(position){  
                var x = position.coords.longitude;
                var y = position.coords.latitude;
                var map = new BMap.Map("allmap");
                var point = new BMap.Point(x,y);
                var geoc = new BMap.Geocoder();
                geoc.getLocation(point, function(rs){
                      var addComp = rs.addressComponents;
                      var dizhi = addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber;
               		  data.append('near_address',dizhi);
               		  data.append('near_long',x);                
						data.append('near_lat',y);
						$.ajax({
						'url':'index.php?c=near&a=save',
						'data':data,
						'type':'post',
						'contentType': false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理 
		    			'processData': false,
						success:function(msg){
						
							alert('提交成功')

						}
					})
                });
				
            }
		})
	})
</script>
