<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7a97d125b653731f3339a9575e46a022205a55a60f5188b9770435d4d3733b01 extends Twig_Template
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
        $__internal_092923941a1303a02284d5a32ad04d08cc442dc520a0a227502c6e0ab932472f = $this->env->getExtension("native_profiler");
        $__internal_092923941a1303a02284d5a32ad04d08cc442dc520a0a227502c6e0ab932472f->enter($__internal_092923941a1303a02284d5a32ad04d08cc442dc520a0a227502c6e0ab932472f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_092923941a1303a02284d5a32ad04d08cc442dc520a0a227502c6e0ab932472f->leave($__internal_092923941a1303a02284d5a32ad04d08cc442dc520a0a227502c6e0ab932472f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
