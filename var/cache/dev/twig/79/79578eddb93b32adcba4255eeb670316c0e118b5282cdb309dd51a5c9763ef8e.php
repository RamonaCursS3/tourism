<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a669c4916040ee306e2c802c507823adba23728fc8c3ca8ad65f6d2501dcd2f2 extends Twig_Template
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
        $__internal_d90f5e634ee3b0109a0d16729b02bdf02fe9722958c07e96c9ea46ba2777836a = $this->env->getExtension("native_profiler");
        $__internal_d90f5e634ee3b0109a0d16729b02bdf02fe9722958c07e96c9ea46ba2777836a->enter($__internal_d90f5e634ee3b0109a0d16729b02bdf02fe9722958c07e96c9ea46ba2777836a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d90f5e634ee3b0109a0d16729b02bdf02fe9722958c07e96c9ea46ba2777836a->leave($__internal_d90f5e634ee3b0109a0d16729b02bdf02fe9722958c07e96c9ea46ba2777836a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
