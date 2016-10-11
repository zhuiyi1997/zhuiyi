{% extends "layout.html" %} 
{% block content %}
 <a href="#" class="ui-btn ui-btn-inline ui-icon-arrow-l ui-btn-icon-left" data-rel="back">返回</a>
	<h3>{{ data.title }}</h3>
	<p>{{ data.content }}</p>
{% endblock %}