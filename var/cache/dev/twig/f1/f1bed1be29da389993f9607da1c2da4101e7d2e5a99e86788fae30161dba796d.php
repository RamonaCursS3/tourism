<?php

/* :country:new.html.twig */
class __TwigTemplate_2713b268abe94f40eb5081470c4eadf54423ee905419bc544f0eef7e8564d5bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":country:new.html.twig", 1);
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
        $__internal_895c2fbecd74c7c4e43494930dfd39b15132ac4b81fd4cc901d08c1d5dfc1619 = $this->env->getExtension("native_profiler");
        $__internal_895c2fbecd74c7c4e43494930dfd39b15132ac4b81fd4cc901d08c1d5dfc1619->enter($__internal_895c2fbecd74c7c4e43494930dfd39b15132ac4b81fd4cc901d08c1d5dfc1619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":country:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_895c2fbecd74c7c4e43494930dfd39b15132ac4b81fd4cc901d08c1d5dfc1619->leave($__internal_895c2fbecd74c7c4e43494930dfd39b15132ac4b81fd4cc901d08c1d5dfc1619_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c0ea9a3439daa59dba1b0e1afa4de56d5662c838b9822cb76e18c5ffcd9b770 = $this->env->getExtension("native_profiler");
        $__internal_1c0ea9a3439daa59dba1b0e1afa4de56d5662c838b9822cb76e18c5ffcd9b770->enter($__internal_1c0ea9a3439daa59dba1b0e1afa4de56d5662c838b9822cb76e18c5ffcd9b770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c0ea9a3439daa59dba1b0e1afa4de56d5662c838b9822cb76e18c5ffcd9b770->leave($__internal_1c0ea9a3439daa59dba1b0e1afa4de56d5662c838b9822cb76e18c5ffcd9b770_prof);

    }

    public function getTemplateName()
    {
        return ":country:new.html.twig";
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
