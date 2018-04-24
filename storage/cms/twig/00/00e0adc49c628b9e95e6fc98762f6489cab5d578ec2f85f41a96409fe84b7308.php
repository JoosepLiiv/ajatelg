<?php

/* /home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/login.htm */
class __TwigTemplate_43b890835e7800a2888ce2dae6c14d072134262654f402e2e6041d8cb6c37e0d extends Twig_Template
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
\t<link rel=\"stylesheet\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/style_login.css");
        echo "\" media=\"screen\" />

\t<link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/magnific.css");
        echo "\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/magnific.js");
        echo "\"></script>
    
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/favicon.ico");
        echo "\">
</head>

<body>
\t
 ";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 26
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/login.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 26,  57 => 25,  49 => 20,  43 => 17,  36 => 13,  31 => 11,  19 => 1,);
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
\t<link rel=\"stylesheet\" href=\"{{ \"assets/css/style_login.css\"|theme }}\" media=\"screen\" />

\t<link rel=\"stylesheet\" href=\"{{ \"assets/css/magnific.css\"|theme }}\" />
\t
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"{{ \"assets/js/magnific.js\"|theme }}\"></script>
    
    <!-- favicon -->
    <link rel=\"shortcut icon\" href=\"{{ \"assets/images/favicon.ico\" | theme }}\">
</head>

<body>
\t
 {% page %}

</body>
</html>", "/home/ajatelgiktkhk/public_html/themes/ajatelg/layouts/login.htm", "");
    }
}
