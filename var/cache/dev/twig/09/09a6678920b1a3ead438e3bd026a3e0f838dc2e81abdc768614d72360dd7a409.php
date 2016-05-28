<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b2c463b4b474ced43f4db4c79bf54e0e3f85957e0e109dda78df8578b64a3264 extends Twig_Template
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
        $__internal_b3c0cd240db967ec9baa58861464a50905db1fd469045b61b7fefb2d322cd6c8 = $this->env->getExtension("native_profiler");
        $__internal_b3c0cd240db967ec9baa58861464a50905db1fd469045b61b7fefb2d322cd6c8->enter($__internal_b3c0cd240db967ec9baa58861464a50905db1fd469045b61b7fefb2d322cd6c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b3c0cd240db967ec9baa58861464a50905db1fd469045b61b7fefb2d322cd6c8->leave($__internal_b3c0cd240db967ec9baa58861464a50905db1fd469045b61b7fefb2d322cd6c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
