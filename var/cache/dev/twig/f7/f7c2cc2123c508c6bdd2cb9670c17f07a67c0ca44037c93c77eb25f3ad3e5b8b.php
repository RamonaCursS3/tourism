<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_8ed978890f19cac0e7179f946c7be5302f11085af48edd5dc0856527e9e4245b extends Twig_Template
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
        $__internal_1335d5dc6ad65a9297c41e88d97095cd741b81bafb29bbda56070762b2d9fb20 = $this->env->getExtension("native_profiler");
        $__internal_1335d5dc6ad65a9297c41e88d97095cd741b81bafb29bbda56070762b2d9fb20->enter($__internal_1335d5dc6ad65a9297c41e88d97095cd741b81bafb29bbda56070762b2d9fb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1335d5dc6ad65a9297c41e88d97095cd741b81bafb29bbda56070762b2d9fb20->leave($__internal_1335d5dc6ad65a9297c41e88d97095cd741b81bafb29bbda56070762b2d9fb20_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
