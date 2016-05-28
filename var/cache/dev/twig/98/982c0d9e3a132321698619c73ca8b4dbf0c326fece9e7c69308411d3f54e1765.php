<?php

/* Form/fields_checkbox2.html.twig */
class __TwigTemplate_4780ad9656ddc74e34f6277ca08479316b3735ab2918e89f7f86bca99db67c5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6184dd83481f0dc78394e9bfc9015bdf18b1ee0aa5598f45f8224ec9e7f97920 = $this->env->getExtension("native_profiler");
        $__internal_6184dd83481f0dc78394e9bfc9015bdf18b1ee0aa5598f45f8224ec9e7f97920->enter($__internal_6184dd83481f0dc78394e9bfc9015bdf18b1ee0aa5598f45f8224ec9e7f97920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/fields_checkbox2.html.twig"));

        // line 2
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 29
        echo "    
";
        // line 30
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 50
        echo "    
    
";
        
        $__internal_6184dd83481f0dc78394e9bfc9015bdf18b1ee0aa5598f45f8224ec9e7f97920->leave($__internal_6184dd83481f0dc78394e9bfc9015bdf18b1ee0aa5598f45f8224ec9e7f97920_prof);

    }

    // line 2
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_344804efb7c1635da1f03ae5c51de096391a433ea05b7642a80c718bc3b05836 = $this->env->getExtension("native_profiler");
        $__internal_344804efb7c1635da1f03ae5c51de096391a433ea05b7642a80c718bc3b05836->enter($__internal_344804efb7c1635da1f03ae5c51de096391a433ea05b7642a80c718bc3b05836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 3
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 4
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 5
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 7
            echo "
            ";
            // line 8
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " col-md-2 control-label required"))));
            // line 9
            echo "
        ";
            // line 10
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 11
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
            // line 13
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_344804efb7c1635da1f03ae5c51de096391a433ea05b7642a80c718bc3b05836->leave($__internal_344804efb7c1635da1f03ae5c51de096391a433ea05b7642a80c718bc3b05836_prof);

    }

    // line 17
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_1ee9ec47b5e439521aa352ade0b72d26ce11c14b48385ad53d4d4bf278d6cdf8 = $this->env->getExtension("native_profiler");
        $__internal_1ee9ec47b5e439521aa352ade0b72d26ce11c14b48385ad53d4d4bf278d6cdf8->enter($__internal_1ee9ec47b5e439521aa352ade0b72d26ce11c14b48385ad53d4d4bf278d6cdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_1ee9ec47b5e439521aa352ade0b72d26ce11c14b48385ad53d4d4bf278d6cdf8->leave($__internal_1ee9ec47b5e439521aa352ade0b72d26ce11c14b48385ad53d4d4bf278d6cdf8_prof);

    }

    // line 19
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b3a64274c1b7ee6136fc8f31f30a9f8a5d8ff4eb420d73127d2ee5c94c4c0d20 = $this->env->getExtension("native_profiler");
        $__internal_b3a64274c1b7ee6136fc8f31f30a9f8a5d8ff4eb420d73127d2ee5c94c4c0d20->enter($__internal_b3a64274c1b7ee6136fc8f31f30a9f8a5d8ff4eb420d73127d2ee5c94c4c0d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 20
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"col-md-10\">";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</div>
";
        
        $__internal_b3a64274c1b7ee6136fc8f31f30a9f8a5d8ff4eb420d73127d2ee5c94c4c0d20->leave($__internal_b3a64274c1b7ee6136fc8f31f30a9f8a5d8ff4eb420d73127d2ee5c94c4c0d20_prof);

    }

    // line 30
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_1a36d9473067a63881197126233a5dc8011eb8e4c39dcbbb7a33922c6368d753 = $this->env->getExtension("native_profiler");
        $__internal_1a36d9473067a63881197126233a5dc8011eb8e4c39dcbbb7a33922c6368d753->enter($__internal_1a36d9473067a63881197126233a5dc8011eb8e4c39dcbbb7a33922c6368d753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 31
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 32
            $context["required"] = false;
        }
        // line 35
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 36
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 37
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>";
        }
        // line 39
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 40
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 41
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 42
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 43
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 46
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 47
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 48
        echo "</select>";
        
        $__internal_1a36d9473067a63881197126233a5dc8011eb8e4c39dcbbb7a33922c6368d753->leave($__internal_1a36d9473067a63881197126233a5dc8011eb8e4c39dcbbb7a33922c6368d753_prof);

    }

    public function getTemplateName()
    {
        return "Form/fields_checkbox2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  190 => 48,  188 => 47,  186 => 46,  180 => 43,  178 => 42,  176 => 41,  174 => 40,  172 => 39,  163 => 37,  161 => 36,  153 => 35,  150 => 32,  148 => 31,  142 => 30,  134 => 27,  128 => 24,  126 => 23,  122 => 21,  118 => 20,  112 => 19,  101 => 17,  78 => 13,  75 => 11,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  62 => 5,  60 => 4,  58 => 3,  52 => 2,  43 => 50,  41 => 30,  38 => 29,  36 => 19,  33 => 18,  31 => 17,  28 => 16,  26 => 2,);
    }
}
/* {# src/Ktap/MembersBundle/Resources/views/Form/fields_checkbox.html.twig #}*/
/* {% block form_label -%}*/
/*     {% if label is not sameas(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif %}*/
/* */
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' col-md-2 control-label required')|trim}) %}*/
/* */
/*         {% if label is empty -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ label|trans({}, translation_domain) }}</label>*/
/*     {%- endif %}*/
/* {%- endblock form_label %}*/
/* */
/* {% block button_label -%}{%- endblock %}*/
/* */
/* {% block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }} class="col-md-10">*/
/*     {%- for child in form %}*/
/* */
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child) -}}*/
/* */
/*     {% endfor -%}*/
/*     </div>*/
/* {% endblock choice_widget_expanded %}*/
/*     */
/* {% block choice_widget_collapsed -%}*/
/*     {% if required and empty_value is none and not empty_value_in_choices and not multiple -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/* */
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
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
/* {%- endblock choice_widget_collapsed %}    */
/*     */
/* */
