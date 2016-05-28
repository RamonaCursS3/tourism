<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_4946a02bd8494c25e0166c9d988d31625e8e6eadf6e5dd65ca13f4b2274b529b extends Twig_Template
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
        $__internal_1fd4a5cc59b63d0a2c7df6d21b32adbe95925498a3d6dcf3428ea64f91c8ab03 = $this->env->getExtension("native_profiler");
        $__internal_1fd4a5cc59b63d0a2c7df6d21b32adbe95925498a3d6dcf3428ea64f91c8ab03->enter($__internal_1fd4a5cc59b63d0a2c7df6d21b32adbe95925498a3d6dcf3428ea64f91c8ab03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1fd4a5cc59b63d0a2c7df6d21b32adbe95925498a3d6dcf3428ea64f91c8ab03->leave($__internal_1fd4a5cc59b63d0a2c7df6d21b32adbe95925498a3d6dcf3428ea64f91c8ab03_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
