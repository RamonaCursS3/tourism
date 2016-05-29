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
        $__internal_bef64093c1d100a9b58fed742beeec0d58802eb3f7cdb9127c14f52f64911fa3 = $this->env->getExtension("native_profiler");
        $__internal_bef64093c1d100a9b58fed742beeec0d58802eb3f7cdb9127c14f52f64911fa3->enter($__internal_bef64093c1d100a9b58fed742beeec0d58802eb3f7cdb9127c14f52f64911fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields.html.twig"));

        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_bef64093c1d100a9b58fed742beeec0d58802eb3f7cdb9127c14f52f64911fa3->leave($__internal_bef64093c1d100a9b58fed742beeec0d58802eb3f7cdb9127c14f52f64911fa3_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_10439d2eaf5376093753e46d7b5e0e6592c72db6cb9818d38748d40439bc8d25 = $this->env->getExtension("native_profiler");
        $__internal_10439d2eaf5376093753e46d7b5e0e6592c72db6cb9818d38748d40439bc8d25->enter($__internal_10439d2eaf5376093753e46d7b5e0e6592c72db6cb9818d38748d40439bc8d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_10439d2eaf5376093753e46d7b5e0e6592c72db6cb9818d38748d40439bc8d25->leave($__internal_10439d2eaf5376093753e46d7b5e0e6592c72db6cb9818d38748d40439bc8d25_prof);

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
