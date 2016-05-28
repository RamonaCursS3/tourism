<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_1b669cbc00cbdbcdad84ed5e2a00a7956cd3abda5031e66bc5ae179e81adaf06 extends Twig_Template
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
        $__internal_989059b7571caeb5bd19b914accd1ba8aee2fd870c6db5e53db18364c09e81a6 = $this->env->getExtension("native_profiler");
        $__internal_989059b7571caeb5bd19b914accd1ba8aee2fd870c6db5e53db18364c09e81a6->enter($__internal_989059b7571caeb5bd19b914accd1ba8aee2fd870c6db5e53db18364c09e81a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_989059b7571caeb5bd19b914accd1ba8aee2fd870c6db5e53db18364c09e81a6->leave($__internal_989059b7571caeb5bd19b914accd1ba8aee2fd870c6db5e53db18364c09e81a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
