<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_48acab6a311cc3fcef483c887e522e636551472b6bff3d089b411835ddec6e7a extends Twig_Template
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
        $__internal_54c02322a70b440448bc6527565ca0b26db6b19d12703b90521064ef59438156 = $this->env->getExtension("native_profiler");
        $__internal_54c02322a70b440448bc6527565ca0b26db6b19d12703b90521064ef59438156->enter($__internal_54c02322a70b440448bc6527565ca0b26db6b19d12703b90521064ef59438156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_54c02322a70b440448bc6527565ca0b26db6b19d12703b90521064ef59438156->leave($__internal_54c02322a70b440448bc6527565ca0b26db6b19d12703b90521064ef59438156_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
