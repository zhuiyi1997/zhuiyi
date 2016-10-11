{% extends "layout.html" %} 

{% block content %}
<form class="form-horizontal" role="form" data-ajax='false'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="username" placeholder="username" name="user_name" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">密 码</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="passwd" placeholder="password" name="user_passwd" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default" id="login">登录</button>
    </div>
  </div>
</form>
{% endblock %}
{% block jquery %}
<script>
	$(function(){
		$('#login').on('click',function(evt){
			evt.preventDefault();

			$.ajax({
				'url':'index.php?c=index&a=login',
				'data':{'user_name':$('#username').val(),'user_passwd':$('#passwd').val()},
				'type':'post',
				success:function(msg){
					//$.blockUI({ message: '发布成功' });
					if(msg == '1')
					{
						$.blockUI({ message: '登录成功' });
            location.href="index.php?c=index&a=index";
					}else{
						$.blockUI({ message: '账号或密码错误' });
					}
					setTimeout(function(){ $.unblockUI(); },3000);
				}
			})
	})
})
</script>
{% endblock %}