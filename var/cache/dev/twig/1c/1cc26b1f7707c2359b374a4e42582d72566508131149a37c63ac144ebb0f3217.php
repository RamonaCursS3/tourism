<?php

/* Form/select.html.twig */
class __TwigTemplate_5cabf618c2ebd61e84f992c15c7bab728fbd2bc7a61e5ef0f350dd240f456ab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2ea319e34393d7fc0ba9449cc8ad27d7e2a736f7f38f749f2ad6cee8e6ebd58 = $this->env->getExtension("native_profiler");
        $__internal_b2ea319e34393d7fc0ba9449cc8ad27d7e2a736f7f38f749f2ad6cee8e6ebd58->enter($__internal_b2ea319e34393d7fc0ba9449cc8ad27d7e2a736f7f38f749f2ad6cee8e6ebd58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/select.html.twig"));

        // line 1
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_b2ea319e34393d7fc0ba9449cc8ad27d7e2a736f7f38f749f2ad6cee8e6ebd58->leave($__internal_b2ea319e34393d7fc0ba9449cc8ad27d7e2a736f7f38f749f2ad6cee8e6ebd58_prof);

    }

    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_be9311f7c5ea12c46d65cad70588135862f203e86f5016edfcdceede96644fa9 = $this->env->getExtension("native_profiler");
        $__internal_be9311f7c5ea12c46d65cad70588135862f203e86f5016edfcdceede96644fa9->enter($__internal_be9311f7c5ea12c46d65cad70588135862f203e86f5016edfcdceede96644fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 2
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 3
            $context["required"] = false;
        }
        // line 6
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo " class=\"form-control\">
        ";
        // line 7
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 8
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>";
        }
        // line 10
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 11
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 12
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 13
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 14
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 17
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 18
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 19
        echo "</select>";
        
        $__internal_be9311f7c5ea12c46d65cad70588135862f203e86f5016edfcdceede96644fa9->leave($__internal_be9311f7c5ea12c46d65cad70588135862f203e86f5016edfcdceede96644fa9_prof);

    }

    public function getTemplateName()
    {
        return "Form/select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  75 => 18,  73 => 17,  67 => 14,  65 => 13,  63 => 12,  61 => 11,  59 => 10,  50 => 8,  48 => 7,  40 => 6,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block choice_widget_collapsed -%}*/
/*     {% if required and empty_value is none and not empty_value_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     */
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %} class="form-control">*/
/*         {% if empty_value is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ empty_value|trans({}, translation_domain) }}</option>*/
/*         {%- endif %}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {% if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif %}*/
/*         {%- endif -%}*/
/*         {% set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* */
/* */
/* {%- endblock choice_widget_collapsed %}*/
/* */
