<?php

/* /home/ajatelgiktkhk/public_html/themes/ajatelg/pages/index.htm */
class __TwigTemplate_1f563023551a57d0d10fb4734ddb4c9772d3cd23778d0a298077c0bd358b10b7 extends Twig_Template
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
        echo "<div id=\"timeline\">
\t\t<ul id=\"dates\">
\t\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 4
            echo "\t\t    <li class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "color", array()), "html", null, true);
            echo "\"><a href=\"#";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "F jS, Y"), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFilter('etdate')->getCallable(), array(twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "%BP </br> %Y"));
            echo "</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "\t\t</ul>
\t\t<ul id=\"issues\">
\t\t\t<!-- <li id=\"1900\">
\t\t\t\t<img src=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/1.png");
        echo "\" width=\"256\" height=\"256\" />
\t\t\t\t<h1>1900</h1> 
\t\t\t\t<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
\t\t\t</li> -->
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 14
            echo "    \t\t\t<li class=\"syndmus\" id=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "date", array()), "F jS, Y"), "html", null, true);
            echo "\">
    \t\t\t    <h1>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "title", array()), "html", null, true);
            echo "</h1>
    \t\t\t    <p>";
            // line 16
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["entry"], "text", array());
            echo "</p>
    \t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</ul>
\t\t<a href=\"#\" id=\"next\">+</a>
\t\t<a href=\"#\" id=\"prev\">-</a>
\t</div>
\t<div id=\"logout\">
\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/login'\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\" title=\"Logi välja\"></span></a>
\t</div>
\t";
        // line 26
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        // line 27
        echo "\t<script>
\t
\t</script>";
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/themes/ajatelg/pages/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  83 => 26,  74 => 19,  65 => 16,  61 => 15,  56 => 14,  52 => 13,  45 => 9,  40 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"timeline\">
\t\t<ul id=\"dates\">
\t\t{% for entry in entries %}
\t\t    <li class=\"{{ entry.color }}\"><a href=\"#{{ entry.date|date('F jS, Y') }}\">{{ entry.date|etdate(\"%BP </br> %Y\") }}</a></li>
\t\t{% endfor %}
\t\t</ul>
\t\t<ul id=\"issues\">
\t\t\t<!-- <li id=\"1900\">
\t\t\t\t<img src=\"{{ \"assets/images/1.png\"|theme }}\" width=\"256\" height=\"256\" />
\t\t\t\t<h1>1900</h1> 
\t\t\t\t<p>Donec semper quam scelerisque tortor dictum gravida. In hac habitasse platea dictumst. Nam pulvinar, odio sed rhoncus suscipit, sem diam ultrices mauris, eu consequat purus metus eu velit. Proin metus odio, aliquam eget molestie nec, gravida ut sapien. Phasellus quis est sed turpis sollicitudin venenatis sed eu odio. Praesent eget neque eu eros interdum malesuada non vel leo. Sed fringilla porta ligula.</p>
\t\t\t</li> -->
\t\t\t{% for entry in entries %}
    \t\t\t<li class=\"syndmus\" id=\"{{ entry.date|date('F jS, Y') }}\">
    \t\t\t    <h1>{{ entry.title }}</h1>
    \t\t\t    <p>{{ entry.text|raw }}</p>
    \t\t\t</li>
\t\t\t{% endfor %}
\t\t</ul>
\t\t<a href=\"#\" id=\"next\">+</a>
\t\t<a href=\"#\" id=\"prev\">-</a>
\t</div>
\t<div id=\"logout\">
\t<a data-request=\"onLogout\" data-request-data=\"redirect: '/login'\"><span class=\"glyphicon glyphicon-log-out\" aria-hidden=\"true\" title=\"Logi välja\"></span></a>
\t</div>
\t{% framework %}
\t<script>
\t
\t</script>", "/home/ajatelgiktkhk/public_html/themes/ajatelg/pages/index.htm", "");
    }
}
