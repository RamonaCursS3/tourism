<?php

/* :Form:fields_checkbox2.html.twig */
class __TwigTemplate_6d734ac31fdadc04256ac6b2b150a5ac2e5f2780ed8e1b9774818609e5c72849 extends Twig_Template
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
        $__internal_df6ef0c4ea3e5c36e369e43a41691e32b2a42bfcaf3bf92faaf0b2a28404b02b = $this->env->getExtension("native_profiler");
        $__internal_df6ef0c4ea3e5c36e369e43a41691e32b2a42bfcaf3bf92faaf0b2a28404b02b->enter($__internal_df6ef0c4ea3e5c36e369e43a41691e32b2a42bfcaf3bf92faaf0b2a28404b02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields_checkbox2.html.twig"));

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
        
        $__internal_df6ef0c4ea3e5c36e369e43a41691e32b2a42bfcaf3bf92faaf0b2a28404b02b->leave($__internal_df6ef0c4ea3e5c36e369e43a41691e32b2a42bfcaf3bf92faaf0b2a28404b02b_prof);

    }

    // line 2
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_ce64d9d14c3c65ef8714a721f006d30502ef772cdf2e87e0c406427f5caf2e8f = $this->env->getExtension("native_profiler");
        $__internal_ce64d9d14c3c65ef8714a721f006d30502ef772cdf2e87e0c406427f5caf2e8f->enter($__internal_ce64d9d14c3c65ef8714a721f006d30502ef772cdf2e87e0c406427f5caf2e8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_ce64d9d14c3c65ef8714a721f006d30502ef772cdf2e87e0c406427f5caf2e8f->leave($__internal_ce64d9d14c3c65ef8714a721f006d30502ef772cdf2e87e0c406427f5caf2e8f_prof);

    }

    // line 17
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_4e7fd5f7750a2b423e6295774082f0c4e3e1b75f5a3a32c60e085c9a50ee6888 = $this->env->getExtension("native_profiler");
        $__internal_4e7fd5f7750a2b423e6295774082f0c4e3e1b75f5a3a32c60e085c9a50ee6888->enter($__internal_4e7fd5f7750a2b423e6295774082f0c4e3e1b75f5a3a32c60e085c9a50ee6888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_4e7fd5f7750a2b423e6295774082f0c4e3e1b75f5a3a32c60e085c9a50ee6888->leave($__internal_4e7fd5f7750a2b423e6295774082f0c4e3e1b75f5a3a32c60e085c9a50ee6888_prof);

    }

    // line 19
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_eee5fbb2cdc7fe801d4e70922bc03769a4390d329532a89881abb7f54d405bbb = $this->env->getExtension("native_profiler");
        $__internal_eee5fbb2cdc7fe801d4e70922bc03769a4390d329532a89881abb7f54d405bbb->enter($__internal_eee5fbb2cdc7fe801d4e70922bc03769a4390d329532a89881abb7f54d405bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_eee5fbb2cdc7fe801d4e70922bc03769a4390d329532a89881abb7f54d405bbb->leave($__internal_eee5fbb2cdc7fe801d4e70922bc03769a4390d329532a89881abb7f54d405bbb_prof);

    }

    // line 30
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_d5abbdd5e7aab6a84ee20bf2670e4f9be1719f00a260a053bbc4ea4f4c1737ef = $this->env->getExtension("native_profiler");
        $__internal_d5abbdd5e7aab6a84ee20bf2670e4f9be1719f00a260a053bbc4ea4f4c1737ef->enter($__internal_d5abbdd5e7aab6a84ee20bf2670e4f9be1719f00a260a053bbc4ea4f4c1737ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_d5abbdd5e7aab6a84ee20bf2670e4f9be1719f00a260a053bbc4ea4f4c1737ef->leave($__internal_d5abbdd5e7aab6a84ee20bf2670e4f9be1719f00a260a053bbc4ea4f4c1737ef_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields_checkbox2.html.twig";
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
