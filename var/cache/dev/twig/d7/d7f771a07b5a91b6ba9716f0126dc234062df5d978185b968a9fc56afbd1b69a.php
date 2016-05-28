<?php

/* :tour:new.html.twig */
class __TwigTemplate_9af01972ae5bb9ca91cbd27bcbeec1073760099dd691ded73f36f02da799a9f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tour:new.html.twig", 1);
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
        $__internal_1476fc1d8a07979ab44d9cea5bf8ea85b2a29b11f0e71cb50df7e7d808b09ed6 = $this->env->getExtension("native_profiler");
        $__internal_1476fc1d8a07979ab44d9cea5bf8ea85b2a29b11f0e71cb50df7e7d808b09ed6->enter($__internal_1476fc1d8a07979ab44d9cea5bf8ea85b2a29b11f0e71cb50df7e7d808b09ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tour:new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1476fc1d8a07979ab44d9cea5bf8ea85b2a29b11f0e71cb50df7e7d808b09ed6->leave($__internal_1476fc1d8a07979ab44d9cea5bf8ea85b2a29b11f0e71cb50df7e7d808b09ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33eb9348c943e4b28d9759e93a5d5dfbaf114caf5fecd9a0100db81f1e9fa4cc = $this->env->getExtension("native_profiler");
        $__internal_33eb9348c943e4b28d9759e93a5d5dfbaf114caf5fecd9a0100db81f1e9fa4cc->enter($__internal_33eb9348c943e4b28d9759e93a5d5dfbaf114caf5fecd9a0100db81f1e9fa4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tour creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("tour_index");
        echo "\">Back to the list</a>

";
        
        $__internal_33eb9348c943e4b28d9759e93a5d5dfbaf114caf5fecd9a0100db81f1e9fa4cc->leave($__internal_33eb9348c943e4b28d9759e93a5d5dfbaf114caf5fecd9a0100db81f1e9fa4cc_prof);

    }

    public function getTemplateName()
    {
        return ":tour:new.html.twig";
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
/*     <h1>Tour creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('tour_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
