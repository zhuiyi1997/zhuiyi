{% extends "layout.html" %} 
{% block content %}
<a href="javascript:void(0)" class="ui-btn ui-btn-inline ui-corner-all" id="add">添加</a>
	<ul data-role="listview" id='news'>
 		{% for item in data %}
  		<li><a href="index.php?c=news&a=getOne&id={{ item.id }}" data-ajax='false'>{{ item.title }}</a></li>
  		{% endfor %} 
	</ul>
<div id="question" style="display:none; cursor: default">
<a href="javascript:void(0)" id="shut" class="ui-btn ui-btn-inline ui-icon-delete ui-btn-icon-left" data-ajax='false'>关闭</a>
	<form method="post" action="index.php?c=news&a=addOne" data-ajax='false'>
      <div class="ui-field-contain">
        <label for="title">标题:</label>
        <input type="text" name="title" id="title">
        <label for="content">内容:</label>
        <textarea name="content" id="content"></textarea>
      </div>
      <input type="submit" data-inline="true" value="发布" id="tijiao">
    </form>
</div>
{% endblock %}
{% block jquery %}
<script>
	$(function(){
		$('#add').on('click',function(){
			$.blockUI({ message: $('#question'), css: { width: '500px'} });
		})
		$('#shut').on('click',function(){
		
			$.unblockUI();
		})
		$('#tijiao').on('click',function(evt){
			evt.preventDefault();
			var title = $('#title').val()
			$.ajax({
				'url':'index.php?c=news&a=addOne',
				'data':{'title':title,'content':$('#content').val()},
				'type':'post',
				success:function(msg){
					$.blockUI({ message: '发布成功' });
					var str = "<li><a href='index.php?c=news&a=getOne&id="+msg+"' data-ajax='false'>"+title+"</a></li>";

					$('#news').append(str);
					setTimeout(function(){ $.unblockUI(); },3000);
				}
			})
	})
})
</script>
{% endblock %}