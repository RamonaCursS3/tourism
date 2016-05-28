<?php

/* :Form:fields.html.twig */
class __TwigTemplate_c2c0cd7128a2dbf33f845b1bac67ab4ac054f67d2b1f6c0f771be32950f10557 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a3835619f3915f613a841bd5128a1b8d41520de8ab77a352b71bbf0b199cf3e = $this->env->getExtension("native_profiler");
        $__internal_2a3835619f3915f613a841bd5128a1b8d41520de8ab77a352b71bbf0b199cf3e->enter($__internal_2a3835619f3915f613a841bd5128a1b8d41520de8ab77a352b71bbf0b199cf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_2a3835619f3915f613a841bd5128a1b8d41520de8ab77a352b71bbf0b199cf3e->leave($__internal_2a3835619f3915f613a841bd5128a1b8d41520de8ab77a352b71bbf0b199cf3e_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_85071f0cb44d1dd64ff8341ba8a65d6e73ee7e3b69d329a8015eb49761a6bd4e = $this->env->getExtension("native_profiler");
        $__internal_85071f0cb44d1dd64ff8341ba8a65d6e73ee7e3b69d329a8015eb49761a6bd4e->enter($__internal_85071f0cb44d1dd64ff8341ba8a65d6e73ee7e3b69d329a8015eb49761a6bd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 2
        ob_start();
        // line 3
        echo "    <div class=\"form-group\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => array("class" => "col-md-2 col-sm-2 control-label")) + (twig_test_empty($_label_ = twig_capitalize_string_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))) ? array() : array("label" => $_label_)));
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        <div class=\"row\">
            <div class=\"col-md-3 col-sm-4\">
            ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_85071f0cb44d1dd64ff8341ba8a65d6e73ee7e3b69d329a8015eb49761a6bd4e->leave($__internal_85071f0cb44d1dd64ff8341ba8a65d6e73ee7e3b69d329a8015eb49761a6bd4e_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 8,  44 => 5,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block form_row %}*/
/* {% spaceless %}*/
/*     <div class="form-group">*/
/*         {{ form_label(form, name|capitalize, {'label_attr': {'class': 'col-md-2 col-sm-2 control-label'}}) }}*/
/*         {{ form_errors(form) }}*/
/*         <div class="row">*/
/*             <div class="col-md-3 col-sm-4">*/
/*             {{ form_widget(form, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock form_row %}*/
