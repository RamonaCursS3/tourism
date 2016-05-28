<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_9b06b09f9bcfcb4ec41feda47157ff4d65bf2e4fe2659abd1909b72406b648a0 extends Twig_Template
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
        $__internal_5a78520418f9109704d480fbe0b86f1b0a4ce2c9574a6516fffbe7c309e462da = $this->env->getExtension("native_profiler");
        $__internal_5a78520418f9109704d480fbe0b86f1b0a4ce2c9574a6516fffbe7c309e462da->enter($__internal_5a78520418f9109704d480fbe0b86f1b0a4ce2c9574a6516fffbe7c309e462da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_5a78520418f9109704d480fbe0b86f1b0a4ce2c9574a6516fffbe7c309e462da->leave($__internal_5a78520418f9109704d480fbe0b86f1b0a4ce2c9574a6516fffbe7c309e462da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
