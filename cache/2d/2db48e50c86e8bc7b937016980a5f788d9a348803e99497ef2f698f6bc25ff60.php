<?php

/* layout.html */
class __TwigTemplate_129b0304e83d8159e284b5e931976b5f8edef3cb645934bdf9423192d1f2bcc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'jquery' => array($this, 'block_jquery'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "</head>
<body>
\t<div data-role=\"page\" id=\"pageone\">
  <div data-role=\"header\">
    <h1>都市快报</h1>
  </div>

  <div data-role=\"main\" class=\"ui-content\" id='extra'>
    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "  </div>

  <div data-role=\"footer\" data-position=\"fixed\">
    <div data-role=\"navbar\">
      <ul>
        <li><a href=\"index.php?c=news&a=index\" data-icon=\"grid\" data-ajax='false'>列表</a></li>
        <li><a href=\"index.php?c=near&a=index\" data-icon=\"minus\" data-ajax='false'>鱼塘</a></li>
        <li><a href=\"index.php?c=index&a=index\" data-icon=\"home\" data-ajax='false'>个人中心</a></li>
      </ul>
    </div>
</div> 
</body>
</html>
";
        // line 46
        $this->displayBlock('jquery', $context, $blocks);
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "\t<link rel=\"stylesheet\" href=\"public/jquerymobile/jquery.mobile-1.4.5.css\">
\t<link rel=\"stylesheet\" href=\"public/overlay/css/jquery-ui-1.8.22.custom.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"public/overlay/css/jq.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"public/overlay/css/block.css?v3\">
\t<script src=\"public/js/jquery.js\"></script>
\t<script src=\"public/overlay/js/jquery-1.11.3.min.js\"></script>
\t<script src=\"public/overlay/js/jquery.blcokui.js\"></script>
\t<script src=\"public/overlay/js/chili-1.7.pack.js\"></script>
\t<script src=\"public/jquerymobile/jquery.mobile-1.4.5.js\"></script>
\t<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script> 
\t<style type=\"text/css\">
\t\tbody, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:\"微软雅黑\";}
\t</style>
\t<title></title>
\t";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "\t\t
    ";
    }

    // line 46
    public function block_jquery($context, array $blocks = array())
    {
        // line 47
        echo "\t\t
";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  94 => 47,  91 => 46,  86 => 31,  83 => 30,  65 => 7,  62 => 6,  58 => 46,  43 => 33,  41 => 30,  31 => 22,  29 => 6,  22 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t{% block header %}
\t<link rel=\"stylesheet\" href=\"public/jquerymobile/jquery.mobile-1.4.5.css\">
\t<link rel=\"stylesheet\" href=\"public/overlay/css/jquery-ui-1.8.22.custom.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"public/overlay/css/jq.css\">
\t<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"public/overlay/css/block.css?v3\">
\t<script src=\"public/js/jquery.js\"></script>
\t<script src=\"public/overlay/js/jquery-1.11.3.min.js\"></script>
\t<script src=\"public/overlay/js/jquery.blcokui.js\"></script>
\t<script src=\"public/overlay/js/chili-1.7.pack.js\"></script>
\t<script src=\"public/jquerymobile/jquery.mobile-1.4.5.js\"></script>
\t<script type=\"text/javascript\" src=\"http://api.map.baidu.com/api?v=2.0&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9\"></script> 
\t<style type=\"text/css\">
\t\tbody, html,#allmap {width: 100%;height: 100%;overflow: hidden;margin:0;font-family:\"微软雅黑\";}
\t</style>
\t<title></title>
\t{% endblock %}
</head>
<body>
\t<div data-role=\"page\" id=\"pageone\">
  <div data-role=\"header\">
    <h1>都市快报</h1>
  </div>

  <div data-role=\"main\" class=\"ui-content\" id='extra'>
    {% block content %}
\t\t
    {% endblock %}
  </div>

  <div data-role=\"footer\" data-position=\"fixed\">
    <div data-role=\"navbar\">
      <ul>
        <li><a href=\"index.php?c=news&a=index\" data-icon=\"grid\" data-ajax='false'>列表</a></li>
        <li><a href=\"index.php?c=near&a=index\" data-icon=\"minus\" data-ajax='false'>鱼塘</a></li>
        <li><a href=\"index.php?c=index&a=index\" data-icon=\"home\" data-ajax='false'>个人中心</a></li>
      </ul>
    </div>
</div> 
</body>
</html>
{% block jquery %}
\t\t
{% endblock %}
";
    }
}
