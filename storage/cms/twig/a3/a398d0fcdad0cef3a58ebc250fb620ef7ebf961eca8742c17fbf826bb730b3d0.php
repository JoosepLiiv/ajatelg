<?php

/* /home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/default.htm */
class __TwigTemplate_dad5bcd73e419723ea36408725fc45e28eed859f67aefd40fedabdc1fb8896bc extends Twig_Template
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
        if ( !($context["user"] ?? null)) {
            // line 2
            echo "
    <div class=\"row\">

        <div class=\"col-md-6 login\">
        <h3>IKT osakonna ajatelg</h3>
            ";
            // line 7
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::signin")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 8
            echo "        </div>

    </div>

";
        } else {
            // line 13
            echo "
    ";
            // line 14
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::activation_check")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 15
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  42 => 14,  39 => 13,  32 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not user %}

    <div class=\"row\">

        <div class=\"col-md-6 login\">
        <h3>IKT osakonna ajatelg</h3>
            {% partial __SELF__ ~ '::signin' %}
        </div>

    </div>

{% else %}

    {% partial __SELF__ ~ '::activation_check' %}

{% endif %}", "/home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/default.htm", "");
    }
}
