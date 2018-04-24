<?php

/* /home/ajatelgiktkhk/public_html/themes/demo/layouts/default.htm */
class __TwigTemplate_e270cc757d7301e5f91516917d6feac588d42e9252a31d6a212b763836209962 extends Twig_Template
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
        echo "<!doctype html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<meta name=\"author\" content=\"\">
\t
\t<title>Tartu KHK IKT osakonna ajatelg</title>
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" media=\"screen\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t
\t<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script> -->
\t<script src=\"";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.timelinr-0.9.6.js");
        echo "\"></script>
\t<script>
\t\t\$(function(){
\t\t\t\$().timelinr({
\t\t\t\tarrowKeys: 'true'
\t\t\t})
\t\t});
\t</script>
</head>

<body>
\t
 ";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 29
        echo "
</body>
<script src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 31,  56 => 29,  54 => 28,  39 => 16,  30 => 10,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<meta name=\"author\" content=\"\">
\t
\t<title>Tartu KHK IKT osakonna ajatelg</title>
\t<link href=\"https://fonts.googleapis.com/css?family=Poppins\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"{{ \"assets/css/style.css\"|theme }}\" media=\"screen\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t
\t<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script> -->
\t<script src=\"{{ \"assets/js/jquery.timelinr-0.9.6.js\"|theme }}\"></script>
\t<script>
\t\t\$(function(){
\t\t\t\$().timelinr({
\t\t\t\tarrowKeys: 'true'
\t\t\t})
\t\t});
\t</script>
</head>

<body>
\t
 {% page %}

</body>
<script src=\"{{ \"assets/js/custom.js\"|theme }}\"></script>
</html>", "/home/ajatelgiktkhk/public_html/themes/demo/layouts/default.htm", "");
    }
}
