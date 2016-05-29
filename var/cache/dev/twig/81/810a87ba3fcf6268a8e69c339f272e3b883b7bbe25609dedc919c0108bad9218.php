<?php

/* tour/edit.html.twig */
class __TwigTemplate_6a748fa0abf72d7f815e3941b5b5b3aa6ac5a155904f0c13580bf5a4ef487d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tour/edit.html.twig", 1);
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
        $__internal_5853e752a0df7185cc235d97203a563533c4fb8d954e564fe6601081fce4fa55 = $this->env->getExtension("native_profiler");
        $__internal_5853e752a0df7185cc235d97203a563533c4fb8d954e564fe6601081fce4fa55->enter($__internal_5853e752a0df7185cc235d97203a563533c4fb8d954e564fe6601081fce4fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5853e752a0df7185cc235d97203a563533c4fb8d954e564fe6601081fce4fa55->leave($__internal_5853e752a0df7185cc235d97203a563533c4fb8d954e564fe6601081fce4fa55_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5948f8d6de9cfb5d05d6a8e73fcc0a500096404a886f191f864a9b285bf03bfd = $this->env->getExtension("native_profiler");
        $__internal_5948f8d6de9cfb5d05d6a8e73fcc0a500096404a886f191f864a9b285bf03bfd->enter($__internal_5948f8d6de9cfb5d05d6a8e73fcc0a500096404a886f191f864a9b285bf03bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tour edit</h1>

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
        // line 11
        echo $this->env->getExtension('routing')->getPath("tour_index");
        echo "\">Back to the list</a>

";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

";
        
        $__internal_5948f8d6de9cfb5d05d6a8e73fcc0a500096404a886f191f864a9b285bf03bfd->leave($__internal_5948f8d6de9cfb5d05d6a8e73fcc0a500096404a886f191f864a9b285bf03bfd_prof);

    }

    public function getTemplateName()
    {
        return "tour/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  61 => 11,  56 => 9,  51 => 7,  47 => 6,  43 => 4,  37 => 3,  30 => 1,  28 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme edit_form ':Form:fields.html.twig' %}*/
/* {% block body %}*/
/*     <h1>Tour edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-warning" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/* <a class="btn btn-info" href="{{ path('tour_index') }}">Back to the list</a>*/
/* */
/* {{ form_start(delete_form) }}*/
/*     <input class="btn btn-danger" type="submit" value="Delete">*/
/* {{ form_end(delete_form) }}*/
/* */
/* {% endblock %}*/
/* */
