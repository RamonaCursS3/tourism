<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_82c78011f106d7d1f4ac188b541131dcf8c5b5576f61285c7cd843a52ad0c5f9 extends Twig_Template
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
        $__internal_2daa58ee4948c96e24b70ed4f40a2997d89261886364711dbc3f840b5d791165 = $this->env->getExtension("native_profiler");
        $__internal_2daa58ee4948c96e24b70ed4f40a2997d89261886364711dbc3f840b5d791165->enter($__internal_2daa58ee4948c96e24b70ed4f40a2997d89261886364711dbc3f840b5d791165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_2daa58ee4948c96e24b70ed4f40a2997d89261886364711dbc3f840b5d791165->leave($__internal_2daa58ee4948c96e24b70ed4f40a2997d89261886364711dbc3f840b5d791165_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
