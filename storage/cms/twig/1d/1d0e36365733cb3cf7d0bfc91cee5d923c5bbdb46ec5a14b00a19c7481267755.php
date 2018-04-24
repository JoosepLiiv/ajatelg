<?php

/* /home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/default.htm */
class __TwigTemplate_2e57e8bd806fb39f490ef3130a6a72d0b9425d96e5c05cbc0ff6dfa68e6a187e extends Twig_Template
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
\t<meta name=\"author\" content=\"Joosep & Lars\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<title>Tartu KHK IKT osakonna ajatelg</title>
\t<link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style.css");
        echo "\" media=\"screen\" />
\t<link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/magnific.css");
        echo "\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js\"></script>
    <script src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/magnific.js");
        echo "\"></script>
    
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\">
\t
\t<!-- <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script> -->
\t<script src=\"";
        // line 23
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
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 36
        echo "
</body>
<script src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 38,  72 => 36,  70 => 35,  55 => 23,  49 => 20,  43 => 17,  35 => 12,  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t<meta name=\"author\" content=\"Joosep & Lars\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t
\t<title>Tartu KHK IKT osakonna ajatelg</title>
\t<link href=\"https://fonts.googleapis.com/css?family=Rubik\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"{{ \"assets/css/style.css\"|theme }}\" media=\"screen\" />
\t<link rel=\"stylesheet\" href=\"{{ \"assets/css/magnific.css\"|theme }}\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"//cdn.jsdelivr.net/npm/jquery.scrollto@2.1.2/jquery.scrollTo.min.js\"></script>
    <script src=\"{{ \"assets/js/magnific.js\"|theme }}\"></script>
    
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"{{ \"assets/images/favicon.ico\" | theme }}\">
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
</html>", "/home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/default.htm", "");
    }
}
