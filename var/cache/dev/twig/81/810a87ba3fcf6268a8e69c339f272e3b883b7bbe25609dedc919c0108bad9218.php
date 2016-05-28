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
        $__internal_0286182155c2fea789292fa2f898de99b625d0e49f0db8de3a552efad436f1be = $this->env->getExtension("native_profiler");
        $__internal_0286182155c2fea789292fa2f898de99b625d0e49f0db8de3a552efad436f1be->enter($__internal_0286182155c2fea789292fa2f898de99b625d0e49f0db8de3a552efad436f1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0286182155c2fea789292fa2f898de99b625d0e49f0db8de3a552efad436f1be->leave($__internal_0286182155c2fea789292fa2f898de99b625d0e49f0db8de3a552efad436f1be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cbff7741a3b62d9232f32bacf8309dd1590d663a47d449a9119c28fbeeb64ba = $this->env->getExtension("native_profiler");
        $__internal_3cbff7741a3b62d9232f32bacf8309dd1590d663a47d449a9119c28fbeeb64ba->enter($__internal_3cbff7741a3b62d9232f32bacf8309dd1590d663a47d449a9119c28fbeeb64ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3cbff7741a3b62d9232f32bacf8309dd1590d663a47d449a9119c28fbeeb64ba->leave($__internal_3cbff7741a3b62d9232f32bacf8309dd1590d663a47d449a9119c28fbeeb64ba_prof);

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
