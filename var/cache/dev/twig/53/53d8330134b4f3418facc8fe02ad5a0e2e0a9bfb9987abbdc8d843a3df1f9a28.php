<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_09ef5ed2b88d63feed2e5416386c448c24e19f04d2a7270fc48ea870185aa943 extends Twig_Template
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
        $__internal_65b53814d9be70c44b95f2b67dc3ed36df9a3de938a73e34326eb6c25f2b20b4 = $this->env->getExtension("native_profiler");
        $__internal_65b53814d9be70c44b95f2b67dc3ed36df9a3de938a73e34326eb6c25f2b20b4->enter($__internal_65b53814d9be70c44b95f2b67dc3ed36df9a3de938a73e34326eb6c25f2b20b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_65b53814d9be70c44b95f2b67dc3ed36df9a3de938a73e34326eb6c25f2b20b4->leave($__internal_65b53814d9be70c44b95f2b67dc3ed36df9a3de938a73e34326eb6c25f2b20b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
