{% extends "layout.html" %} 
{% block content %}
	<p id="demo">点击这个按钮，获得您的坐标：</p>
	<button onclick="getLocation()">试一下</button>

{% endblock %}
{% block jquery %}
	<script>
    var x=document.getElementById("demo");
    function getLocation(){
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            x.innerHTML="Geolocation is not supported by this browser.";
        }
    }
    function showPosition(position){
        x.innerHTML="Latitude: " + position.coords.latitude + "<br />Longitude: " + position.coords.longitude;
        $.ajax({
        	url:'http://api.map.baidu.com/geoconv/v1/?coords='+position.coords.latitude+','+position.coords.longitude+'&from=1&to=5&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9',
        	dataType:'jsonp',
        	type:'post',
        	success:function(msg){
        		console.log(JSON.stringify(msg))
        	}
        })
    }
 </script>
{% endblock %}