<?php

/* country/edit.html.twig */
class __TwigTemplate_d7b449db8c559981530b3e48cf19fa98c5074f6165d9648b9809b54767f92587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "country/edit.html.twig", 1);
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
        $__internal_0900de7a103443b9c3747e5ff8c92af17b51bc94e2130b697657998ed779dfc5 = $this->env->getExtension("native_profiler");
        $__internal_0900de7a103443b9c3747e5ff8c92af17b51bc94e2130b697657998ed779dfc5->enter($__internal_0900de7a103443b9c3747e5ff8c92af17b51bc94e2130b697657998ed779dfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "country/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0900de7a103443b9c3747e5ff8c92af17b51bc94e2130b697657998ed779dfc5->leave($__internal_0900de7a103443b9c3747e5ff8c92af17b51bc94e2130b697657998ed779dfc5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_54c30a24ef6d1705761c3ba43970c735ecd1db0da2da546dc2c616270fd42d0b = $this->env->getExtension("native_profiler");
        $__internal_54c30a24ef6d1705761c3ba43970c735ecd1db0da2da546dc2c616270fd42d0b->enter($__internal_54c30a24ef6d1705761c3ba43970c735ecd1db0da2da546dc2c616270fd42d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Country edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("country_index");
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
        
        $__internal_54c30a24ef6d1705761c3ba43970c735ecd1db0da2da546dc2c616270fd42d0b->leave($__internal_54c30a24ef6d1705761c3ba43970c735ecd1db0da2da546dc2c616270fd42d0b_prof);

    }

    public function getTemplateName()
    {
        return "country/edit.html.twig";
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
/*     <h1>Country edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-warning" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* */
/* <a class="btn btn-info" href="{{ path('country_index') }}">Back to the list</a>*/
/* */
/* {{ form_start(delete_form) }}*/
/*     <input class="btn btn-danger" type="submit" value="Delete">*/
/* {{ form_end(delete_form) }}*/
/* */
/* {% endblock %}*/
/* */
