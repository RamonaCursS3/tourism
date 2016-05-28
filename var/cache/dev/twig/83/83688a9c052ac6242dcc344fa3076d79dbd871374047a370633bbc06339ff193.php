<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_0b5c4f6f429ba7ab52e390e8827611807d41e12187c6dc5c97688b72197da2f4 extends Twig_Template
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
        $__internal_4304b000c60d04600bb9ed62d26f5f65ca686b45eec34a65e9f6d43e5e533cdf = $this->env->getExtension("native_profiler");
        $__internal_4304b000c60d04600bb9ed62d26f5f65ca686b45eec34a65e9f6d43e5e533cdf->enter($__internal_4304b000c60d04600bb9ed62d26f5f65ca686b45eec34a65e9f6d43e5e533cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4304b000c60d04600bb9ed62d26f5f65ca686b45eec34a65e9f6d43e5e533cdf->leave($__internal_4304b000c60d04600bb9ed62d26f5f65ca686b45eec34a65e9f6d43e5e533cdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
