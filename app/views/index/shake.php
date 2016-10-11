{% extends "layout.html" %} 
{% block jquery %}
<script>
var SHAKE_THRESHOLD = 800;
var last_update = 0;
var x, y, z, last_x, last_y, last_z;
if (window.DeviceMotionEvent) {
  window.addEventListener('devicemotion', deviceMotionHandler, false);
} else {
  document.getElementById("dmEvent").innerHTML = "Not supported on your device."
}
var num =0;    
function deviceMotionHandler(eventData) {      
  var acceleration =eventData.accelerationIncludingGravity;
  var curTime = new Date().getTime();       
  if ((curTime - last_update)> 100) {                
      var diffTime = curTime -last_update;
      last_update = curTime;       
      x = acceleration.x;
      y = acceleration.y;
      z = acceleration.z;     
      var speed = Math.abs(x +y + z - last_x - last_y - last_z) / diffTime * 10000;  
      		//alert(speed)        
           if (speed > SHAKE_THRESHOLD) {
                alert('走路')
      }

      last_x = x;
      last_y = y;
      last_z = z;
  }
} 
</script>
{% endblock %}