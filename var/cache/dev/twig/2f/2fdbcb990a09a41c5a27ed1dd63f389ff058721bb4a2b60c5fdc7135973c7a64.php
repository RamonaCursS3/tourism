<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8c85bf1358249f1c2e2cd5736efe5ab42a324e1f98a49566d829b9e758c32a0e extends Twig_Template
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
        $__internal_c2a6de5c922c9f5a399278bdb71fd6582a269f63ecef16bfabc0bd4f2a550b02 = $this->env->getExtension("native_profiler");
        $__internal_c2a6de5c922c9f5a399278bdb71fd6582a269f63ecef16bfabc0bd4f2a550b02->enter($__internal_c2a6de5c922c9f5a399278bdb71fd6582a269f63ecef16bfabc0bd4f2a550b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c2a6de5c922c9f5a399278bdb71fd6582a269f63ecef16bfabc0bd4f2a550b02->leave($__internal_c2a6de5c922c9f5a399278bdb71fd6582a269f63ecef16bfabc0bd4f2a550b02_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
