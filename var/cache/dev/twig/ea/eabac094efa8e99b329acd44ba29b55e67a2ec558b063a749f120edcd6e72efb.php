<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_2ab797d4309b75f4fcca563b688ed04bae0fc89853a9112678ed89bdefedd48b extends Twig_Template
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
        $__internal_e89d673970d5daed0c3607faf3fb1f1810d32dfaafff8203ac35408d1e810c2a = $this->env->getExtension("native_profiler");
        $__internal_e89d673970d5daed0c3607faf3fb1f1810d32dfaafff8203ac35408d1e810c2a->enter($__internal_e89d673970d5daed0c3607faf3fb1f1810d32dfaafff8203ac35408d1e810c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e89d673970d5daed0c3607faf3fb1f1810d32dfaafff8203ac35408d1e810c2a->leave($__internal_e89d673970d5daed0c3607faf3fb1f1810d32dfaafff8203ac35408d1e810c2a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
