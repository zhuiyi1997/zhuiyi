<?php

/* index/index.php */
class __TwigTemplate_e470ef17cf4edbfc02975693f2e8daa2ef261e175f3f7078e0af0278f47cbc5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index/index.php", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'jquery' => array($this, 'block_jquery'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "\t<p id=\"demo\">点击这个按钮，获得您的坐标：</p>
\t<button onclick=\"getLocation()\">试一下</button>

";
    }

    // line 7
    public function block_jquery($context, array $blocks = array())
    {
        // line 8
        echo "\t<script>
    var x=document.getElementById(\"demo\");
    function getLocation(){
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            x.innerHTML=\"Geolocation is not supported by this browser.\";
        }
    }
    function showPosition(position){
        x.innerHTML=\"Latitude: \" + position.coords.latitude + \"<br />Longitude: \" + position.coords.longitude;
        \$.ajax({
        \turl:'http://api.map.baidu.com/geoconv/v1/?coords='+position.coords.latitude+','+position.coords.longitude+'&from=1&to=5&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9',
        \tdataType:'jsonp',
        \ttype:'post',
        \tsuccess:function(msg){
        \t\tconsole.log(JSON.stringify(msg))
        \t}
        })
    }
 </script>
";
    }

    public function getTemplateName()
    {
        return "index/index.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"layout.html\" %} 
{% block content %}
\t<p id=\"demo\">点击这个按钮，获得您的坐标：</p>
\t<button onclick=\"getLocation()\">试一下</button>

{% endblock %}
{% block jquery %}
\t<script>
    var x=document.getElementById(\"demo\");
    function getLocation(){
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            x.innerHTML=\"Geolocation is not supported by this browser.\";
        }
    }
    function showPosition(position){
        x.innerHTML=\"Latitude: \" + position.coords.latitude + \"<br />Longitude: \" + position.coords.longitude;
        \$.ajax({
        \turl:'http://api.map.baidu.com/geoconv/v1/?coords='+position.coords.latitude+','+position.coords.longitude+'&from=1&to=5&ak=SnS6Z2pa2I3hpTTSoBKBAvN3i8zZLho9',
        \tdataType:'jsonp',
        \ttype:'post',
        \tsuccess:function(msg){
        \t\tconsole.log(JSON.stringify(msg))
        \t}
        })
    }
 </script>
{% endblock %}";
    }
}
