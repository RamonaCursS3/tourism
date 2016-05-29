<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_88adc14aa633c051b5be010e5daf4b2f1d8a106f390a218efa67ec5e17f4dc32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15a9a176307ff9622685c850ec901289b7d8a04b40f75ac13bf90e1763e87986 = $this->env->getExtension("native_profiler");
        $__internal_15a9a176307ff9622685c850ec901289b7d8a04b40f75ac13bf90e1763e87986->enter($__internal_15a9a176307ff9622685c850ec901289b7d8a04b40f75ac13bf90e1763e87986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15a9a176307ff9622685c850ec901289b7d8a04b40f75ac13bf90e1763e87986->leave($__internal_15a9a176307ff9622685c850ec901289b7d8a04b40f75ac13bf90e1763e87986_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_29358f3e73c1a120a831126b287899ccca39fa4f1de5c06d9a84e99f864e7e74 = $this->env->getExtension("native_profiler");
        $__internal_29358f3e73c1a120a831126b287899ccca39fa4f1de5c06d9a84e99f864e7e74->enter($__internal_29358f3e73c1a120a831126b287899ccca39fa4f1de5c06d9a84e99f864e7e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_29358f3e73c1a120a831126b287899ccca39fa4f1de5c06d9a84e99f864e7e74->leave($__internal_29358f3e73c1a120a831126b287899ccca39fa4f1de5c06d9a84e99f864e7e74_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b34e3fe0871fb231f66dacbc662fcf1201e9ae9ec9dc5802286571bd93087649 = $this->env->getExtension("native_profiler");
        $__internal_b34e3fe0871fb231f66dacbc662fcf1201e9ae9ec9dc5802286571bd93087649->enter($__internal_b34e3fe0871fb231f66dacbc662fcf1201e9ae9ec9dc5802286571bd93087649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b34e3fe0871fb231f66dacbc662fcf1201e9ae9ec9dc5802286571bd93087649->leave($__internal_b34e3fe0871fb231f66dacbc662fcf1201e9ae9ec9dc5802286571bd93087649_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e6f7a6eceff772cdbe32d6cf04b33d87c2e8dfe7cf1d22d2ebb136acadb5b9 = $this->env->getExtension("native_profiler");
        $__internal_a8e6f7a6eceff772cdbe32d6cf04b33d87c2e8dfe7cf1d22d2ebb136acadb5b9->enter($__internal_a8e6f7a6eceff772cdbe32d6cf04b33d87c2e8dfe7cf1d22d2ebb136acadb5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a8e6f7a6eceff772cdbe32d6cf04b33d87c2e8dfe7cf1d22d2ebb136acadb5b9->leave($__internal_a8e6f7a6eceff772cdbe32d6cf04b33d87c2e8dfe7cf1d22d2ebb136acadb5b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
