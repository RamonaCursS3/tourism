<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ab0e444fcaaa8acf62d4a05686ac0c7fa2c8718c0071c3c460af89267c76399a extends Twig_Template
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
        $__internal_f723ab592bd5f2aa9f2a21ffb8bd4b1ed8165c27a18a90efcfc937d3b8c614ce = $this->env->getExtension("native_profiler");
        $__internal_f723ab592bd5f2aa9f2a21ffb8bd4b1ed8165c27a18a90efcfc937d3b8c614ce->enter($__internal_f723ab592bd5f2aa9f2a21ffb8bd4b1ed8165c27a18a90efcfc937d3b8c614ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f723ab592bd5f2aa9f2a21ffb8bd4b1ed8165c27a18a90efcfc937d3b8c614ce->leave($__internal_f723ab592bd5f2aa9f2a21ffb8bd4b1ed8165c27a18a90efcfc937d3b8c614ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
