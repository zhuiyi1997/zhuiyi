<?php

/* near/mynear.php */
class __TwigTemplate_06cc37105d8ada5d00fff27d642bb07bf18b46a2e31b65d2cb635fd76a5303ae extends Twig_Template
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
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<script src=\"public/js/jquery.js\"></script>
\t<link href=\"public/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t <script src=\"public/js/jquery.js\"></script>
    <script src=\"public/bootstrap/dist/js/bootstrap.min.js\"></script>
    <style type=\"text/css\">
    \tbody{
    \t\tfont-size:12px;
    \t}
    \t.header{
    \t\twidth:100%;
    \t\theight:200px;
    \t}
\t\t.header img{
\t\t\tmargin-top:50px;
\t\t\twidth:20%;
\t\t\theight:100px;
\t\t\tfloat:left;
\t\t}
\t\t.header h5{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
\t\t}
\t\t.header p{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
      margin-left:-150px;
\t\t}
    .goods{
      margin-top:50px;
    }
    .yule{
      margin-top:20px;
    }
\t\t
    </style>
</head>
<body>
<input type=\"hidden\" id=\"number\" value=\"10\"/>
\t<div class=\"header\"><img src=\"public/upload/";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "near_image", array()), "html", null, true);
        echo "\"/><h5>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "near_name", array()), "html", null, true);
        echo "</h5><br/><p>发布数";
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "</p></div>
\t<div class=\"yule\">
\t";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["goods"]) ? $context["goods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "\t\t<div class=\"goods\">
    <a href=\"\">
\t\t\t<img src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "user_pic", array()), "html", null, true);
            echo "\" class=\"img-circle\" width=\"50px\" height=\"50px\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nickname", array()), "html", null, true);
            echo "<span style=\"float:right\">￥";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "goods_now", array()), "html", null, true);
            echo "</span><br/>
\t\t\t";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["item"], "goods_pic", array()), ","));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 52
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, twig_replace_filter($context["img"], "\\", "/"), "html", null, true);
                echo "\" class=\"img-thumbnail img-responsive\" width=\"40%\" height=\"10%\">
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "      <br/>
      <p>";
            // line 55
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["item"], "goods_desc", array()), 0, 50), "html", null, true);
            echo "</p>
      <p style=\"color:orange;\">来自";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "goods_city", array()), "html", null, true);
            echo "市</p>
    </a>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "\t</div>
  <div class=\"navbar-fixed-bottom\">
    <a class=\"btn btn-large btn-success\" href=\"\">发布</a>
  </div>
</body>
</html>
<script>
\t\$(function(){
      function scrollTop(){
          return Math.max(
          //chrome
          document.body.scrollTop,
          //firefox/IE
          document.documentElement.scrollTop);
    }
    function documentHeight(){
          //现代浏览器（IE9+和其他浏览器）和IE8的document.body.scrollHeight和document.documentElement.scrollHeight都可以
          return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
    }


  function windowHeight(){
        return (document.compatMode == \"CSS1Compat\")?
        document.documentElement.clientHeight:
        document.body.clientHeight;
  }


        \$(window).on('scroll',function(){
        if(scrollTop() + windowHeight() >= (documentHeight() - 50/*滚动响应区域高度取50px*/)){
            //再次加载10条数据
            var limit = \$('#number').val();
            if(limit<10)
            {
              return ;
            }
            else{
                \$('#number').attr('value',parseInt(limit)+10);
            }
            \$.ajax({
                    'url':'index.php?c=near&a=mynear&id='+";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "id", array()), "html", null, true);
        echo ",
                    'data':'limit='+limit,
                    'type':'post',
                    success:function(msg){
                        eval(\"var data=\"+msg)

                        for(var i in data)
                        {
                              var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p></div></a></li>\";
                            \$('.yule').append(html)
                        }                       
                    }
                  });
      }; 
    })

      })
    
</script>
</script>";
    }

    public function getTemplateName()
    {
        return "near/mynear.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 100,  120 => 60,  110 => 56,  106 => 55,  103 => 54,  94 => 52,  90 => 51,  82 => 50,  78 => 48,  74 => 47,  65 => 45,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta name=\"viewport\" content=\"width=device-width,minimum-scale=1.0,maximum-scale=1.0\"/>
\t<meta charset=\"UTF-8\">
\t<title></title>
\t<script src=\"public/js/jquery.js\"></script>
\t<link href=\"public/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
\t <script src=\"public/js/jquery.js\"></script>
    <script src=\"public/bootstrap/dist/js/bootstrap.min.js\"></script>
    <style type=\"text/css\">
    \tbody{
    \t\tfont-size:12px;
    \t}
    \t.header{
    \t\twidth:100%;
    \t\theight:200px;
    \t}
\t\t.header img{
\t\t\tmargin-top:50px;
\t\t\twidth:20%;
\t\t\theight:100px;
\t\t\tfloat:left;
\t\t}
\t\t.header h5{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
\t\t}
\t\t.header p{
\t\t\tmargin-top:50px;
\t\t\tfloat:left;
      margin-left:-150px;
\t\t}
    .goods{
      margin-top:50px;
    }
    .yule{
      margin-top:20px;
    }
\t\t
    </style>
</head>
<body>
<input type=\"hidden\" id=\"number\" value=\"10\"/>
\t<div class=\"header\"><img src=\"public/upload/{{ info.near_image }}\"/><h5>{{ info.near_name }}</h5><br/><p>发布数{{ count }}</p></div>
\t<div class=\"yule\">
\t{% for item in goods %}
\t\t<div class=\"goods\">
    <a href=\"\">
\t\t\t<img src=\"{{ item.user_pic }}\" class=\"img-circle\" width=\"50px\" height=\"50px\">{{ item.nickname }}<span style=\"float:right\">￥{{ item.goods_now }}</span><br/>
\t\t\t{% for img in item.goods_pic|split(',') %}
\t\t\t\t<img src=\"{{ img|replace('\\\\','/') }}\" class=\"img-thumbnail img-responsive\" width=\"40%\" height=\"10%\">
\t\t\t{% endfor %}
      <br/>
      <p>{{ item.goods_desc|slice(0,50) }}</p>
      <p style=\"color:orange;\">来自{{ item.goods_city }}市</p>
    </a>
\t\t</div>
\t\t{% endfor %}
\t</div>
  <div class=\"navbar-fixed-bottom\">
    <a class=\"btn btn-large btn-success\" href=\"\">发布</a>
  </div>
</body>
</html>
<script>
\t\$(function(){
      function scrollTop(){
          return Math.max(
          //chrome
          document.body.scrollTop,
          //firefox/IE
          document.documentElement.scrollTop);
    }
    function documentHeight(){
          //现代浏览器（IE9+和其他浏览器）和IE8的document.body.scrollHeight和document.documentElement.scrollHeight都可以
          return Math.max(document.body.scrollHeight,document.documentElement.scrollHeight);
    }


  function windowHeight(){
        return (document.compatMode == \"CSS1Compat\")?
        document.documentElement.clientHeight:
        document.body.clientHeight;
  }


        \$(window).on('scroll',function(){
        if(scrollTop() + windowHeight() >= (documentHeight() - 50/*滚动响应区域高度取50px*/)){
            //再次加载10条数据
            var limit = \$('#number').val();
            if(limit<10)
            {
              return ;
            }
            else{
                \$('#number').attr('value',parseInt(limit)+10);
            }
            \$.ajax({
                    'url':'index.php?c=near&a=mynear&id='+{{ info.id }},
                    'data':'limit='+limit,
                    'type':'post',
                    success:function(msg){
                        eval(\"var data=\"+msg)

                        for(var i in data)
                        {
                              var html = \"<li><a href='index.php?c=near&a=mynear&id=\"+data[i].id+\"'><img src='public/upload/\"+data[i].near_image+\"' width='100px' height='200px'><div style='width: 70%; float: left;'><h3 class='title'>\"+data[i].near_name+\"</h3><p class='intro'>\"+data[i].near_desc+\"</p></div></a></li>\";
                            \$('.yule').append(html)
                        }                       
                    }
                  });
      }; 
    })

      })
    
</script>
</script>";
    }
}
