<?php

/* message/index.php */
class __TwigTemplate_6c9ba8fc92b0b4ecfcebfb2d0d7dde1c3e83721c80aa74da678a9006b5af7c60 extends Twig_Template
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
\t<meta charset=\"UTF-8\">
\t<title>留言板</title>
\t<link href=\"public/js/Dialog/skin/default.css\" rel=\"stylesheet\" />
\t<script src=\"public/js/jquery.js\"></script>
\t<script src=\"public/js/Dialog/artDialog.basic.js\"></script>
\t<style>
\t\t.header{background-color: black;width:%100;height:50px;text-align: center;color:white;line-height:50px;}
\t\t.content{
\t\t\twidth:%100;
\t\t\tmargin:20px;
\t\t}
\t\t.one{
\t\t\tdisplay: inline-block;
\t\t\twidth:300px;
\t\t\theight:200px;
\t\t\tborder:1px solid black;
\t\t\tclear:both;

\t\t}
\t\t.left{
\t\t\twidth:180px;
\t\t\tpadding:10px;
\t\t\tfloat:left;
\t\t\tword-wrap:break-word;
\t\t\tword-break:break-all;

          
\t\t}
\t\t.left blockquote p{
\t\t\tfont-family:\"微软雅黑\",\"黑体\",\"宋体\";
      \t\tfont-size:12px;
\t\t\ttext-indent: 2em; 
\t\t\twidth:180px; 
\t\t\theight:65px;
\t\t\toverflow: hidden;

\t\t}
\t\t.right{
\t\t\twidth:10px;
\t\t\theight:200px;
\t\t\tbackground-color:black;
\t\t\tfloat:right;
\t\t}
\t\tcite{
\t\t\twidth:;
\t\t}
\t\t.header span{
\t\t\tfloat:right;
\t\t\tpadding-right:20px;
\t\t\tcolor:white;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"header\">
\t\t欢迎来到我的留言板 <span><a href=\"index.php?c=message&a=addMessage\">给我留言</a></span>
\t</div>
\t<div class=\"content\">
\t\t";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "\t\t\t<div class=\"one\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\">
\t\t\t<div class=\"left\">
\t\t\t\t<h4>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
\t\t\t\t<blockquote><p>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true);
            echo "</p><small><cite>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "addtime", array()), "html", null, true);
            echo "</cite></small></blockquote>
\t\t\t</div>
\t\t\t<div class=\"right\"></div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "\t</div>
</body>
</html>
<script type=\"text/javascript\">
\t\$('.one').on('click',function(){
\t\tvar id = \$(this).attr('id');
\t\t//查询数据库
\t\t\$.ajax({
     \t\t'type': 'POST',

     \t\t'url': \"index.php?c=message&a=getOne&id=\"+id,

    \t\t'data':'',

    \t\tsuccess: function(msg){
    \t\t\teval(\"var data=\"+msg);
    \t\t\tvar dialog = art.dialog({
    \t\t\t\ttitle: '我是对话框',
    \t\t\t\tcontent: '我是初始化的内容'
\t\t\t\t});
      
\t\t\t\tdialog.content(data.content).title(data.title);
    \t\t}

\t\t});
\t})
</script>";
    }

    public function getTemplateName()
    {
        return "message/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 71,  96 => 66,  92 => 65,  86 => 63,  82 => 62,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>留言板</title>
\t<link href=\"public/js/Dialog/skin/default.css\" rel=\"stylesheet\" />
\t<script src=\"public/js/jquery.js\"></script>
\t<script src=\"public/js/Dialog/artDialog.basic.js\"></script>
\t<style>
\t\t.header{background-color: black;width:%100;height:50px;text-align: center;color:white;line-height:50px;}
\t\t.content{
\t\t\twidth:%100;
\t\t\tmargin:20px;
\t\t}
\t\t.one{
\t\t\tdisplay: inline-block;
\t\t\twidth:300px;
\t\t\theight:200px;
\t\t\tborder:1px solid black;
\t\t\tclear:both;

\t\t}
\t\t.left{
\t\t\twidth:180px;
\t\t\tpadding:10px;
\t\t\tfloat:left;
\t\t\tword-wrap:break-word;
\t\t\tword-break:break-all;

          
\t\t}
\t\t.left blockquote p{
\t\t\tfont-family:\"微软雅黑\",\"黑体\",\"宋体\";
      \t\tfont-size:12px;
\t\t\ttext-indent: 2em; 
\t\t\twidth:180px; 
\t\t\theight:65px;
\t\t\toverflow: hidden;

\t\t}
\t\t.right{
\t\t\twidth:10px;
\t\t\theight:200px;
\t\t\tbackground-color:black;
\t\t\tfloat:right;
\t\t}
\t\tcite{
\t\t\twidth:;
\t\t}
\t\t.header span{
\t\t\tfloat:right;
\t\t\tpadding-right:20px;
\t\t\tcolor:white;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"header\">
\t\t欢迎来到我的留言板 <span><a href=\"index.php?c=message&a=addMessage\">给我留言</a></span>
\t</div>
\t<div class=\"content\">
\t\t{% for item in data %}
\t\t\t<div class=\"one\" id=\"{{ item.id }}\">
\t\t\t<div class=\"left\">
\t\t\t\t<h4>{{ item.title }}</h4>
\t\t\t\t<blockquote><p>{{ item.content }}</p><small><cite>{{ item.addtime }}</cite></small></blockquote>
\t\t\t</div>
\t\t\t<div class=\"right\"></div>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
</body>
</html>
<script type=\"text/javascript\">
\t\$('.one').on('click',function(){
\t\tvar id = \$(this).attr('id');
\t\t//查询数据库
\t\t\$.ajax({
     \t\t'type': 'POST',

     \t\t'url': \"index.php?c=message&a=getOne&id=\"+id,

    \t\t'data':'',

    \t\tsuccess: function(msg){
    \t\t\teval(\"var data=\"+msg);
    \t\t\tvar dialog = art.dialog({
    \t\t\t\ttitle: '我是对话框',
    \t\t\t\tcontent: '我是初始化的内容'
\t\t\t\t});
      
\t\t\t\tdialog.content(data.content).title(data.title);
    \t\t}

\t\t});
\t})
</script>";
    }
}
