<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d3204fe11b5f2890d5a6ec1d0e4308073ab49d8a5c55d74f4839887a8390edd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_6b6fcaf264be2d151a84ed7b5632ab6e0c7c01a4e44c7b960c4d49fa4eb7c1e7 = $this->env->getExtension("native_profiler");
        $__internal_6b6fcaf264be2d151a84ed7b5632ab6e0c7c01a4e44c7b960c4d49fa4eb7c1e7->enter($__internal_6b6fcaf264be2d151a84ed7b5632ab6e0c7c01a4e44c7b960c4d49fa4eb7c1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b6fcaf264be2d151a84ed7b5632ab6e0c7c01a4e44c7b960c4d49fa4eb7c1e7->leave($__internal_6b6fcaf264be2d151a84ed7b5632ab6e0c7c01a4e44c7b960c4d49fa4eb7c1e7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_779a2486d6dc9f89956a3409547daf6c2f08f786dec82196f1c613003e4ee4ea = $this->env->getExtension("native_profiler");
        $__internal_779a2486d6dc9f89956a3409547daf6c2f08f786dec82196f1c613003e4ee4ea->enter($__internal_779a2486d6dc9f89956a3409547daf6c2f08f786dec82196f1c613003e4ee4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_779a2486d6dc9f89956a3409547daf6c2f08f786dec82196f1c613003e4ee4ea->leave($__internal_779a2486d6dc9f89956a3409547daf6c2f08f786dec82196f1c613003e4ee4ea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_725909ba40e35830de344c05335e64605456fe4425c15e36a22a47ff87f14230 = $this->env->getExtension("native_profiler");
        $__internal_725909ba40e35830de344c05335e64605456fe4425c15e36a22a47ff87f14230->enter($__internal_725909ba40e35830de344c05335e64605456fe4425c15e36a22a47ff87f14230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_725909ba40e35830de344c05335e64605456fe4425c15e36a22a47ff87f14230->leave($__internal_725909ba40e35830de344c05335e64605456fe4425c15e36a22a47ff87f14230_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_62cb0233235565774c0e0f87c01332510040a43e8b62e21f88187f1ad14fc490 = $this->env->getExtension("native_profiler");
        $__internal_62cb0233235565774c0e0f87c01332510040a43e8b62e21f88187f1ad14fc490->enter($__internal_62cb0233235565774c0e0f87c01332510040a43e8b62e21f88187f1ad14fc490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_62cb0233235565774c0e0f87c01332510040a43e8b62e21f88187f1ad14fc490->leave($__internal_62cb0233235565774c0e0f87c01332510040a43e8b62e21f88187f1ad14fc490_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
