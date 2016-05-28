<?php

/* touristattraction/new.html.twig */
class __TwigTemplate_bf15c31d2fb350b6cc3f5bdf7e97038673ddd524b21725793e307aae930fec89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "touristattraction/new.html.twig", 1);
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
        $__internal_d951633687f994789880732cf6c1c15695439e799450c05f5594b0d6c310b627 = $this->env->getExtension("native_profiler");
        $__internal_d951633687f994789880732cf6c1c15695439e799450c05f5594b0d6c310b627->enter($__internal_d951633687f994789880732cf6c1c15695439e799450c05f5594b0d6c310b627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "touristattraction/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d951633687f994789880732cf6c1c15695439e799450c05f5594b0d6c310b627->leave($__internal_d951633687f994789880732cf6c1c15695439e799450c05f5594b0d6c310b627_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3acfe33c415160ae910f342168138e10653bacc999e5b8837579f61d8ff4d445 = $this->env->getExtension("native_profiler");
        $__internal_3acfe33c415160ae910f342168138e10653bacc999e5b8837579f61d8ff4d445->enter($__internal_3acfe33c415160ae910f342168138e10653bacc999e5b8837579f61d8ff4d445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TouristAttraction creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("touristattraction_index");
        echo "\">Back to the list</a>
";
        
        $__internal_3acfe33c415160ae910f342168138e10653bacc999e5b8837579f61d8ff4d445->leave($__internal_3acfe33c415160ae910f342168138e10653bacc999e5b8837579f61d8ff4d445_prof);

    }

    public function getTemplateName()
    {
        return "touristattraction/new.html.twig";
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
/*     <h1>TouristAttraction creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input class="btn btn-success" type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('touristattraction_index') }}">Back to the list</a>*/
/* {% endblock %}*/
/* */
