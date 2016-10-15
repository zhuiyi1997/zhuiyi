<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <style type="text/css">
    body, html{width: 100%;height: 100%;margin:0;font-family:"微软雅黑";font-size:14px;}
    #allmap {width:100%;height:500px;}
  </style>
  <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9"></script>
  <title>逆地址解析</title>
<body>
  <div id="allmap"></div>
  <p>点击地图展示详细地址</p>
</body>
</html>
<script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,12);
  map.enableScrollWheelZoom(true); 
  var geoc = new BMap.Geocoder();    

  map.addEventListener("click", function(e){        
    var pt = e.point;
    geoc.getLocation(pt, function(rs){
      var addComp = rs.addressComponents;
      console.log(addComp)
      var dizhi = addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber;
      console.log(dizhi)
      var myGeo = new BMap.Geocoder();
  // 将地址解析结果显示在地图上,并调整地图视野
  myGeo.getPoint(dizhi, function(point){
    if (point) {
      console.log(point.lng,point.lat)
      map.centerAndZoom(point, 16);
      map.addOverlay(new BMap.Marker(point));
    }else{
      alert("您选择地址没有解析到结果!");
    }
  }, "北京市");
    });        
  });
</script>