<?php

/* :city:new.html.twig */
class __TwigTemplate_34f48fa3986f957e7d9cca46d34d4213d40c46d73f25576224929216a625c068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":city:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96df31d35dc91331ea84adfab3cfb79a71320e0c38204637ae251d5aa4133749 = $this->env->getExtension("native_profiler");
        $__internal_96df31d35dc91331ea84adfab3cfb79a71320e0c38204637ae251d5aa4133749->enter($__internal_96df31d35dc91331ea84adfab3cfb79a71320e0c38204637ae251d5aa4133749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":city:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96df31d35dc91331ea84adfab3cfb79a71320e0c38204637ae251d5aa4133749->leave($__internal_96df31d35dc91331ea84adfab3cfb79a71320e0c38204637ae251d5aa4133749_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20623cce3772917d3142ca995657c7b23ec260dc6a7408bd15642195475a6c8c = $this->env->getExtension("native_profiler");
        $__internal_20623cce3772917d3142ca995657c7b23ec260dc6a7408bd15642195475a6c8c->enter($__internal_20623cce3772917d3142ca995657c7b23ec260dc6a7408bd15642195475a6c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>City creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("city_index");
        echo "\">Back to the list</a>

";
        
        $__internal_20623cce3772917d3142ca995657c7b23ec260dc6a7408bd15642195475a6c8c->leave($__internal_20623cce3772917d3142ca995657c7b23ec260dc6a7408bd15642195475a6c8c_prof);

    }

    public function getTemplateName()
    {
        return ":city:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  51 => 7,  47 => 6,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form ':Form:fields.html.twig' %}*/
/* {% block body %}*/
/*     <h1>City creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('city_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
