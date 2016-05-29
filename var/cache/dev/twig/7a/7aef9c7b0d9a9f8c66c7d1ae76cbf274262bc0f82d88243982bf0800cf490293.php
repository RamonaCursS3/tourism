<?php

/* country/new.html.twig */
class __TwigTemplate_9e13ff26c4ebc60336e69dee515d4df29d41d105886701cdf498426c55c788ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "country/new.html.twig", 1);
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
        $__internal_9560dbfb4b882da3c379f470595ec6edff7d0cf9b782ca07804d35442007f51d = $this->env->getExtension("native_profiler");
        $__internal_9560dbfb4b882da3c379f470595ec6edff7d0cf9b782ca07804d35442007f51d->enter($__internal_9560dbfb4b882da3c379f470595ec6edff7d0cf9b782ca07804d35442007f51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "country/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9560dbfb4b882da3c379f470595ec6edff7d0cf9b782ca07804d35442007f51d->leave($__internal_9560dbfb4b882da3c379f470595ec6edff7d0cf9b782ca07804d35442007f51d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_096391ac5a69068cb60153d058943f2007613f4ee5b4daa689674a65268c4a00 = $this->env->getExtension("native_profiler");
        $__internal_096391ac5a69068cb60153d058943f2007613f4ee5b4daa689674a65268c4a00->enter($__internal_096391ac5a69068cb60153d058943f2007613f4ee5b4daa689674a65268c4a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Country creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("country_index");
        echo "\">Back to the list</a>

";
        
        $__internal_096391ac5a69068cb60153d058943f2007613f4ee5b4daa689674a65268c4a00->leave($__internal_096391ac5a69068cb60153d058943f2007613f4ee5b4daa689674a65268c4a00_prof);

    }

    public function getTemplateName()
    {
        return "country/new.html.twig";
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
/*     <h1>Country creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('country_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
