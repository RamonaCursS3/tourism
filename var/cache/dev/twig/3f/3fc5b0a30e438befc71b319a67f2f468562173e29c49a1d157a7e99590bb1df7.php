<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_026b72b901573b044a5f1b68b36c3478f9fb15a412b4a676dffdc437cdddd75e extends Twig_Template
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
        $__internal_c4fe77f46ef0dba03ae360688d9b6e3a2f6646434331e04863d51ef4433ec25f = $this->env->getExtension("native_profiler");
        $__internal_c4fe77f46ef0dba03ae360688d9b6e3a2f6646434331e04863d51ef4433ec25f->enter($__internal_c4fe77f46ef0dba03ae360688d9b6e3a2f6646434331e04863d51ef4433ec25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c4fe77f46ef0dba03ae360688d9b6e3a2f6646434331e04863d51ef4433ec25f->leave($__internal_c4fe77f46ef0dba03ae360688d9b6e3a2f6646434331e04863d51ef4433ec25f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
