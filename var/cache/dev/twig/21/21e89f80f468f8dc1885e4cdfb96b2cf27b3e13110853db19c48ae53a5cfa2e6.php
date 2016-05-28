<?php

/* Form/fields.html.twig */
class __TwigTemplate_8deea9a8f8db3013898d71a27c084e0a39c51f3beca3893c4ef6b634aeadbff7 extends Twig_Template
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
        $__internal_3b43fe5c72e9d07100e42b2c0f62668794bc089ddfba90aa86f93b79c1afb7ff = $this->env->getExtension("native_profiler");
        $__internal_3b43fe5c72e9d07100e42b2c0f62668794bc089ddfba90aa86f93b79c1afb7ff->enter($__internal_3b43fe5c72e9d07100e42b2c0f62668794bc089ddfba90aa86f93b79c1afb7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_3b43fe5c72e9d07100e42b2c0f62668794bc089ddfba90aa86f93b79c1afb7ff->leave($__internal_3b43fe5c72e9d07100e42b2c0f62668794bc089ddfba90aa86f93b79c1afb7ff_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_2a8059ecfb39653083845e6bab41b9f74be8af9357398d5a67c93b3d6b8f989c = $this->env->getExtension("native_profiler");
        $__internal_2a8059ecfb39653083845e6bab41b9f74be8af9357398d5a67c93b3d6b8f989c->enter($__internal_2a8059ecfb39653083845e6bab41b9f74be8af9357398d5a67c93b3d6b8f989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_2a8059ecfb39653083845e6bab41b9f74be8af9357398d5a67c93b3d6b8f989c->leave($__internal_2a8059ecfb39653083845e6bab41b9f74be8af9357398d5a67c93b3d6b8f989c_prof);

    }

    public function getTemplateName()
    {
        return "Form/fields.html.twig";
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
