<?php

/* /home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/signin.htm */
class __TwigTemplate_64e66e75ca1bdaa9c74b08641c532957b73b5c23cbcfcd2d2651b6e92499ca51 extends Twig_Template
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
        echo "<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">Kasutaja</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Sisesta kasutaja\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Parool</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Sisesta parool\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Logi sisse</button>
</form>";
    }

    public function getTemplateName()
    {
        return "/home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/signin.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form
    data-request=\"onSignin\">
    <div class=\"form-group\">
        <label for=\"userSigninLogin\">Kasutaja</label>
        <input
            name=\"login\"
            type=\"text\"
            class=\"form-control\"
            id=\"userSigninLogin\"
            placeholder=\"Sisesta kasutaja\" />
    </div>

    <div class=\"form-group\">
        <label for=\"userSigninPassword\">Parool</label>
        <input
            name=\"password\"
            type=\"password\"
            class=\"form-control\"
            id=\"userSigninPassword\"
            placeholder=\"Sisesta parool\" />
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Logi sisse</button>
</form>", "/home/ajatelgiktkhk/public_html/plugins/rainlab/user/components/account/signin.htm", "");
    }
}
