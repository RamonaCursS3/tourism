<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_72f12c34a36899469accf2a861631fccc9f8003be0d830ad4a69c697a55e91cd extends Twig_Template
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
        $__internal_b91a43cd92dfd97f5c56540d0d22fb184237c79716119ad90ca3a26f561d046b = $this->env->getExtension("native_profiler");
        $__internal_b91a43cd92dfd97f5c56540d0d22fb184237c79716119ad90ca3a26f561d046b->enter($__internal_b91a43cd92dfd97f5c56540d0d22fb184237c79716119ad90ca3a26f561d046b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b91a43cd92dfd97f5c56540d0d22fb184237c79716119ad90ca3a26f561d046b->leave($__internal_b91a43cd92dfd97f5c56540d0d22fb184237c79716119ad90ca3a26f561d046b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
