<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1859f999d7029f2abba0ab67f6378a8c4cba0f58079c7908747c89a7f5fa8166 extends Twig_Template
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
        $__internal_bf103364e997a6418122592d3f8ff4bad5e5216905533020b4c2af8eb0a8308a = $this->env->getExtension("native_profiler");
        $__internal_bf103364e997a6418122592d3f8ff4bad5e5216905533020b4c2af8eb0a8308a->enter($__internal_bf103364e997a6418122592d3f8ff4bad5e5216905533020b4c2af8eb0a8308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf103364e997a6418122592d3f8ff4bad5e5216905533020b4c2af8eb0a8308a->leave($__internal_bf103364e997a6418122592d3f8ff4bad5e5216905533020b4c2af8eb0a8308a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
