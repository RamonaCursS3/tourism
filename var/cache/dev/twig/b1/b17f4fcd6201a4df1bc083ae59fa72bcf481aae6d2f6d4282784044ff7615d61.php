<?php

/* :hotel:new.html.twig */
class __TwigTemplate_d404736ae50f1f45d3da7e3a847aa7a5c9ecca23fe6fb172d0922015fcf910b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":hotel:new.html.twig", 1);
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
        $__internal_8b02e450c054e316bdfb8c8af48ac3905dc21bd0ab9b08a3335895a5ef0b0527 = $this->env->getExtension("native_profiler");
        $__internal_8b02e450c054e316bdfb8c8af48ac3905dc21bd0ab9b08a3335895a5ef0b0527->enter($__internal_8b02e450c054e316bdfb8c8af48ac3905dc21bd0ab9b08a3335895a5ef0b0527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hotel:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b02e450c054e316bdfb8c8af48ac3905dc21bd0ab9b08a3335895a5ef0b0527->leave($__internal_8b02e450c054e316bdfb8c8af48ac3905dc21bd0ab9b08a3335895a5ef0b0527_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_509ac5e5e10fbcb425ea952bfc2e24fefc6a389394880c3808da830960a801ed = $this->env->getExtension("native_profiler");
        $__internal_509ac5e5e10fbcb425ea952bfc2e24fefc6a389394880c3808da830960a801ed->enter($__internal_509ac5e5e10fbcb425ea952bfc2e24fefc6a389394880c3808da830960a801ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>

";
        
        $__internal_509ac5e5e10fbcb425ea952bfc2e24fefc6a389394880c3808da830960a801ed->leave($__internal_509ac5e5e10fbcb425ea952bfc2e24fefc6a389394880c3808da830960a801ed_prof);

    }

    public function getTemplateName()
    {
        return ":hotel:new.html.twig";
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
/*     <h1>Hotel creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('hotel_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
