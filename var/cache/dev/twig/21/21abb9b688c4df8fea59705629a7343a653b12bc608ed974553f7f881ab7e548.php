<?php

/* tour/new.html.twig */
class __TwigTemplate_4a7e0dd1705ec3f1c142c6c0a5615eeb13f3f45487d16815f417cbaa1b422903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tour/new.html.twig", 1);
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
        $__internal_9cb17af33e603e831aae7817e0ddb4e4da6ff367c7eb1ad69f9f7be9385b5cd3 = $this->env->getExtension("native_profiler");
        $__internal_9cb17af33e603e831aae7817e0ddb4e4da6ff367c7eb1ad69f9f7be9385b5cd3->enter($__internal_9cb17af33e603e831aae7817e0ddb4e4da6ff367c7eb1ad69f9f7be9385b5cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cb17af33e603e831aae7817e0ddb4e4da6ff367c7eb1ad69f9f7be9385b5cd3->leave($__internal_9cb17af33e603e831aae7817e0ddb4e4da6ff367c7eb1ad69f9f7be9385b5cd3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6568a905a10ce450a350b3a9074e24b994e3c9f503abb98de0ebba71b504f3bb = $this->env->getExtension("native_profiler");
        $__internal_6568a905a10ce450a350b3a9074e24b994e3c9f503abb98de0ebba71b504f3bb->enter($__internal_6568a905a10ce450a350b3a9074e24b994e3c9f503abb98de0ebba71b504f3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <input class=\"btn btn-success\" type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-info\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tour_index");
        echo "\">Back to the list</a>

";
        
        $__internal_6568a905a10ce450a350b3a9074e24b994e3c9f503abb98de0ebba71b504f3bb->leave($__internal_6568a905a10ce450a350b3a9074e24b994e3c9f503abb98de0ebba71b504f3bb_prof);

    }

    public function getTemplateName()
    {
        return "tour/new.html.twig";
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
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('tour_index') }}">Back to the list</a>*/
/* */
/* {% endblock %}*/
/* */
