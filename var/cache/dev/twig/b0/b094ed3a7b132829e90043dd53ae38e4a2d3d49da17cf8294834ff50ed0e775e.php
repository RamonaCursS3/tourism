<?php

/* touristattraction/edit.html.twig */
class __TwigTemplate_17dc8152075b02b90c175a9891e02f3c2de5660311b8ab9f2b9388adef4e867b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "touristattraction/edit.html.twig", 1);
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
        $__internal_c78afff935a771ac0c607d390677914241ee59b91ee6728ecdcaced60867b09b = $this->env->getExtension("native_profiler");
        $__internal_c78afff935a771ac0c607d390677914241ee59b91ee6728ecdcaced60867b09b->enter($__internal_c78afff935a771ac0c607d390677914241ee59b91ee6728ecdcaced60867b09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "touristattraction/edit.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c78afff935a771ac0c607d390677914241ee59b91ee6728ecdcaced60867b09b->leave($__internal_c78afff935a771ac0c607d390677914241ee59b91ee6728ecdcaced60867b09b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ee9dd2e898ff4486c80fb921b6ddf217892b01dbba42fb2ae04c637901a4c84 = $this->env->getExtension("native_profiler");
        $__internal_4ee9dd2e898ff4486c80fb921b6ddf217892b01dbba42fb2ae04c637901a4c84->enter($__internal_4ee9dd2e898ff4486c80fb921b6ddf217892b01dbba42fb2ae04c637901a4c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TouristAttraction edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("touristattraction_index");
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
        
        $__internal_4ee9dd2e898ff4486c80fb921b6ddf217892b01dbba42fb2ae04c637901a4c84->leave($__internal_4ee9dd2e898ff4486c80fb921b6ddf217892b01dbba42fb2ae04c637901a4c84_prof);

    }

    public function getTemplateName()
    {
        return "touristattraction/edit.html.twig";
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
/*     <h1>TouristAttraction edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input class="btn btn-warning" type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('touristattraction_index') }}">Back to the list</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* */
/* {% endblock %}*/
/* */
