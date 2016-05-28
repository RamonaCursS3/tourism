<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f6a10d3e7d253b9718046cd2816c63a6255b2b214d1fa4e8199ed43fc8dcce7b extends Twig_Template
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
        $__internal_f8637164a608bac50ee1247989a0fe4027d44eeef3415dc179ce368226329988 = $this->env->getExtension("native_profiler");
        $__internal_f8637164a608bac50ee1247989a0fe4027d44eeef3415dc179ce368226329988->enter($__internal_f8637164a608bac50ee1247989a0fe4027d44eeef3415dc179ce368226329988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f8637164a608bac50ee1247989a0fe4027d44eeef3415dc179ce368226329988->leave($__internal_f8637164a608bac50ee1247989a0fe4027d44eeef3415dc179ce368226329988_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
