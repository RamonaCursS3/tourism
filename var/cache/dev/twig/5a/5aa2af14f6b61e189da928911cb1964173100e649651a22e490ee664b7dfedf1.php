<?php

/* :Form:fields_del.html.twig */
class __TwigTemplate_c9ab4fa798cce8b5677aead92950e9c6fb8407a627a1b8f817d6b72ddb05b59c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb18234cd0e8cede95ed5159766c2f508c0a3cabc0935f960c8c9d524f05ec1c = $this->env->getExtension("native_profiler");
        $__internal_fb18234cd0e8cede95ed5159766c2f508c0a3cabc0935f960c8c9d524f05ec1c->enter($__internal_fb18234cd0e8cede95ed5159766c2f508c0a3cabc0935f960c8c9d524f05ec1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields_del.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('button_widget', $context, $blocks);
        
        $__internal_fb18234cd0e8cede95ed5159766c2f508c0a3cabc0935f960c8c9d524f05ec1c->leave($__internal_fb18234cd0e8cede95ed5159766c2f508c0a3cabc0935f960c8c9d524f05ec1c_prof);

    }

    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_f10ca2d8c2cbccf79ce9c87cdd38b037adee38ab1c95f2505f5e499eb7aaa324 = $this->env->getExtension("native_profiler");
        $__internal_f10ca2d8c2cbccf79ce9c87cdd38b037adee38ab1c95f2505f5e499eb7aaa324->enter($__internal_f10ca2d8c2cbccf79ce9c87cdd38b037adee38ab1c95f2505f5e499eb7aaa324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 4
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 5
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 7
        echo "<button class=\"btn btn-sm btn-danger\" type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_f10ca2d8c2cbccf79ce9c87cdd38b037adee38ab1c95f2505f5e499eb7aaa324->leave($__internal_f10ca2d8c2cbccf79ce9c87cdd38b037adee38ab1c95f2505f5e499eb7aaa324_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields_del.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 5,  38 => 4,  26 => 3,  23 => 2,);
    }
}
/* {# buttons #}*/
/* */
/* {% block button_widget -%}*/
/*     {% if label is empty -%}*/
/*         {% set label = name|humanize %}*/
/*     {%- endif -%}*/
/*     <button class="btn btn-sm btn-danger" type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget %}*/
