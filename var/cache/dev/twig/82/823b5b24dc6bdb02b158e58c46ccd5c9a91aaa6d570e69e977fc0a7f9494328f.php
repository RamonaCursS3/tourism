<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_074a59aa4a24d3aa42b068bc5d6f6c3631a37f2104f9010102ccd78251f4e94e extends Twig_Template
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
        $__internal_11891408ba5b1690ccc5286bdb33a6cd43c75ee73bb591509fc460ce6adc15ac = $this->env->getExtension("native_profiler");
        $__internal_11891408ba5b1690ccc5286bdb33a6cd43c75ee73bb591509fc460ce6adc15ac->enter($__internal_11891408ba5b1690ccc5286bdb33a6cd43c75ee73bb591509fc460ce6adc15ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_11891408ba5b1690ccc5286bdb33a6cd43c75ee73bb591509fc460ce6adc15ac->leave($__internal_11891408ba5b1690ccc5286bdb33a6cd43c75ee73bb591509fc460ce6adc15ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
