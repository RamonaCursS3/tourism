<?php

/* city/new.html.twig */
class __TwigTemplate_6dd5b2a5184b7018413022dedac4093e3cfdf343b4a75359e022c51909128aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "city/new.html.twig", 1);
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
        $__internal_83274ddf9e2450766f19a6a19428134be4d24a5eb8b47ea892a20905d8aba6b2 = $this->env->getExtension("native_profiler");
        $__internal_83274ddf9e2450766f19a6a19428134be4d24a5eb8b47ea892a20905d8aba6b2->enter($__internal_83274ddf9e2450766f19a6a19428134be4d24a5eb8b47ea892a20905d8aba6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "city/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83274ddf9e2450766f19a6a19428134be4d24a5eb8b47ea892a20905d8aba6b2->leave($__internal_83274ddf9e2450766f19a6a19428134be4d24a5eb8b47ea892a20905d8aba6b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_333591604cb5a5e23705705697eba2b1c15a9a10836dcc973623ecdc913d72b7 = $this->env->getExtension("native_profiler");
        $__internal_333591604cb5a5e23705705697eba2b1c15a9a10836dcc973623ecdc913d72b7->enter($__internal_333591604cb5a5e23705705697eba2b1c15a9a10836dcc973623ecdc913d72b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("city_index");
        echo "\">Back to the list</a>

";
        
        $__internal_333591604cb5a5e23705705697eba2b1c15a9a10836dcc973623ecdc913d72b7->leave($__internal_333591604cb5a5e23705705697eba2b1c15a9a10836dcc973623ecdc913d72b7_prof);

    }

    public function getTemplateName()
    {
        return "city/new.html.twig";
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
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('city_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
