<?php

/* hotel/new.html.twig */
class __TwigTemplate_8dd436e329a8746e1697b160968f49f6fc9d18e9919b5713b33a76a110e35194 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/new.html.twig", 1);
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
        $__internal_ce8375739b1c53746a9bf39acef214b22f48ccd79e26bd82e1016ed18ac14b03 = $this->env->getExtension("native_profiler");
        $__internal_ce8375739b1c53746a9bf39acef214b22f48ccd79e26bd82e1016ed18ac14b03->enter($__internal_ce8375739b1c53746a9bf39acef214b22f48ccd79e26bd82e1016ed18ac14b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce8375739b1c53746a9bf39acef214b22f48ccd79e26bd82e1016ed18ac14b03->leave($__internal_ce8375739b1c53746a9bf39acef214b22f48ccd79e26bd82e1016ed18ac14b03_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_542492134aa02068d9e4935e82a58d6be41b0c0ef8c2822ba6de2e328770122b = $this->env->getExtension("native_profiler");
        $__internal_542492134aa02068d9e4935e82a58d6be41b0c0ef8c2822ba6de2e328770122b->enter($__internal_542492134aa02068d9e4935e82a58d6be41b0c0ef8c2822ba6de2e328770122b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_542492134aa02068d9e4935e82a58d6be41b0c0ef8c2822ba6de2e328770122b->leave($__internal_542492134aa02068d9e4935e82a58d6be41b0c0ef8c2822ba6de2e328770122b_prof);

    }

    public function getTemplateName()
    {
        return "hotel/new.html.twig";
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
