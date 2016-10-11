{% extends "layout.html" %} 
{% block content %}
	<ul data-role="listview">		
  		<li><img src="public/images/{{ data.user_image }}" style="width:100px;height:100px;border-radius:50%;" id="image"/><span class="nickname">{{ data.nickname }}</span></li>
  		<li>个性签名：<p id="sign">{{ data.sign }}</p></li>
	</ul>
{% endblock %}
{% block jquery %}
<script>
	$(function(){
		$('.nickname').on('click',function(){
			var span = $(this);
			var content = $(this).html();
			span.hide();		
			span.after("<input type='text' id='nick' value='"+content+"'/>");

		})
		$(document).on('blur','#nick',function(){
			var nickname = $(this).val();
			$.ajax({
				'url':'index.php?c=news&a=updateOne',
				'data':{'nickname':nickname},
				'type':'post',
				success:function(msg){

					var span = $('.nickname');
					span.html(nickname)
					span.show();
					span.next().remove();

				}
			})
		})
		$('#sign').on('click',function(){
			var p = $(this);
			var content = $(this).html();
			p.hide();		
			p.after("<textarea id='sign_data'>"+content+"</textarea>");

		})
		$(document).on('blur','#sign_data',function(){
			var sign = $(this).val();
			$.ajax({
				'url':'index.php?c=news&a=updateOne',
				'data':{'sign':sign},
				'type':'post',
				success:function(msg){
				
					var p = $('#sign');
					p.html(sign)
					p.show();
					p.next().remove();

				}
			})
		})
		$('#image').on('click',function(){
			var str = "<form style='display:none;' enctype='multipart/form-data' id='upload'><input type='file' name='image' id='img'/></form>";
			$('#extra').append(str);
			//$(document).ready(function(){
			$('#img').click();
			
			//})
		})
		$(document).on('change','#img',function(){
			var data = new FormData($('#upload')[0]);
			//var content = data.serialize();
			$.ajax({
				'url':'index.php?c=news&a=upload',
				'data':data,
				'type':'post',
				'contentType': false, //必须false才会避开jQuery对 formdata 的默认处理 XMLHttpRequest会对 formdata 进行正确的处理 
    			'processData': false,
				success:function(msg){
				
					$('#image').attr('src','public/images/'+msg);

				}
			})
		})
	})
</script>
{% endblock %}