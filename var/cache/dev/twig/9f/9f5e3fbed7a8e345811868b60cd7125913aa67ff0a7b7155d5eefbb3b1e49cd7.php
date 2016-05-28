<?php

/* :hotel:edit.html.twig */
class __TwigTemplate_0f7cb887ec4fd51bcce4e0d6d085e5c9dbb869d083435f01fac88b37ae607218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":hotel:edit.html.twig", 1);
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
        $__internal_b0f6ce4205e24c1925371f9025f1e5fe4a3981d8996c2e3c35020d243fa7c2b2 = $this->env->getExtension("native_profiler");
        $__internal_b0f6ce4205e24c1925371f9025f1e5fe4a3981d8996c2e3c35020d243fa7c2b2->enter($__internal_b0f6ce4205e24c1925371f9025f1e5fe4a3981d8996c2e3c35020d243fa7c2b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hotel:edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0f6ce4205e24c1925371f9025f1e5fe4a3981d8996c2e3c35020d243fa7c2b2->leave($__internal_b0f6ce4205e24c1925371f9025f1e5fe4a3981d8996c2e3c35020d243fa7c2b2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8701f077b65e505bd08b784d7d28ed9128694e7135238f9d05e2d047cf020c94 = $this->env->getExtension("native_profiler");
        $__internal_8701f077b65e505bd08b784d7d28ed9128694e7135238f9d05e2d047cf020c94->enter($__internal_8701f077b65e505bd08b784d7d28ed9128694e7135238f9d05e2d047cf020c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input class=\"btn btn-warning\" type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


    <a class=\"btn btn-info\" href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_8701f077b65e505bd08b784d7d28ed9128694e7135238f9d05e2d047cf020c94->leave($__internal_8701f077b65e505bd08b784d7d28ed9128694e7135238f9d05e2d047cf020c94_prof);

    }

    public function getTemplateName()
    {
        return ":hotel:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 16,  67 => 14,  62 => 12,  56 => 9,  51 => 7,  47 => 6,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form ':Form:fields.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Hotel edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-warning" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/*     <a class="btn btn-info" href="{{ path('hotel_index') }}">Back to the list</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* */
/* {% endblock %}*/
/* */
