<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_22090b6756b72127e392312152099d203c9ff966cbe5bdc9aa3c5279c67e7590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7566a3a9b097203f2ec53a815bd3c569a015a33203db543c69083a2084a6ae = $this->env->getExtension("native_profiler");
        $__internal_4f7566a3a9b097203f2ec53a815bd3c569a015a33203db543c69083a2084a6ae->enter($__internal_4f7566a3a9b097203f2ec53a815bd3c569a015a33203db543c69083a2084a6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4f7566a3a9b097203f2ec53a815bd3c569a015a33203db543c69083a2084a6ae->leave($__internal_4f7566a3a9b097203f2ec53a815bd3c569a015a33203db543c69083a2084a6ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_96c064d19be5be35e27917220e995c8ea77b9ce8e37c6e8ef6fcbbfb3d06ef53 = $this->env->getExtension("native_profiler");
        $__internal_96c064d19be5be35e27917220e995c8ea77b9ce8e37c6e8ef6fcbbfb3d06ef53->enter($__internal_96c064d19be5be35e27917220e995c8ea77b9ce8e37c6e8ef6fcbbfb3d06ef53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_96c064d19be5be35e27917220e995c8ea77b9ce8e37c6e8ef6fcbbfb3d06ef53->leave($__internal_96c064d19be5be35e27917220e995c8ea77b9ce8e37c6e8ef6fcbbfb3d06ef53_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
