<?php

/* :Form:fields_checkbox.html.twig */
class __TwigTemplate_34c01e6edec919e733f3cb665cc0ad2a86aed71f0dbdb1e24a31ae88c712e235 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06a7b9587c1ca4c2667eba58b896434272ac96b3b5daed0ec3372bedc8623a0b = $this->env->getExtension("native_profiler");
        $__internal_06a7b9587c1ca4c2667eba58b896434272ac96b3b5daed0ec3372bedc8623a0b->enter($__internal_06a7b9587c1ca4c2667eba58b896434272ac96b3b5daed0ec3372bedc8623a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields_checkbox.html.twig"));

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
        // line 20
        $this->displayBlock('checkbox_widget', $context, $blocks);
        
        $__internal_06a7b9587c1ca4c2667eba58b896434272ac96b3b5daed0ec3372bedc8623a0b->leave($__internal_06a7b9587c1ca4c2667eba58b896434272ac96b3b5daed0ec3372bedc8623a0b_prof);

    }

    // line 2
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_9853ff909551bd040294e95d84f9f59afd55c94489fb7d9891c00f0f3cc45550 = $this->env->getExtension("native_profiler");
        $__internal_9853ff909551bd040294e95d84f9f59afd55c94489fb7d9891c00f0f3cc45550->enter($__internal_9853ff909551bd040294e95d84f9f59afd55c94489fb7d9891c00f0f3cc45550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_9853ff909551bd040294e95d84f9f59afd55c94489fb7d9891c00f0f3cc45550->leave($__internal_9853ff909551bd040294e95d84f9f59afd55c94489fb7d9891c00f0f3cc45550_prof);

    }

    // line 17
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_a01ddb463bc5d992ed9ee1f13ba55553aab35ca3f2ae754b7d3af6461f8b948c = $this->env->getExtension("native_profiler");
        $__internal_a01ddb463bc5d992ed9ee1f13ba55553aab35ca3f2ae754b7d3af6461f8b948c->enter($__internal_a01ddb463bc5d992ed9ee1f13ba55553aab35ca3f2ae754b7d3af6461f8b948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_a01ddb463bc5d992ed9ee1f13ba55553aab35ca3f2ae754b7d3af6461f8b948c->leave($__internal_a01ddb463bc5d992ed9ee1f13ba55553aab35ca3f2ae754b7d3af6461f8b948c_prof);

    }

    // line 20
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dd0feaac74e7795daa428bdfa05929373334818bce0596021f6748aa701ecc14 = $this->env->getExtension("native_profiler");
        $__internal_dd0feaac74e7795daa428bdfa05929373334818bce0596021f6748aa701ecc14->enter($__internal_dd0feaac74e7795daa428bdfa05929373334818bce0596021f6748aa701ecc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 21
        echo "<div class=\"col-md-3 col-sm-4\">
        <input type=\"checkbox\" ";
        // line 22
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />
    </div>";
        
        $__internal_dd0feaac74e7795daa428bdfa05929373334818bce0596021f6748aa701ecc14->leave($__internal_dd0feaac74e7795daa428bdfa05929373334818bce0596021f6748aa701ecc14_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields_checkbox.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  109 => 21,  103 => 20,  92 => 17,  69 => 13,  66 => 11,  64 => 10,  61 => 9,  59 => 8,  56 => 7,  53 => 5,  51 => 4,  49 => 3,  43 => 2,  36 => 20,  32 => 18,  30 => 17,  27 => 16,  25 => 2,);
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
/* */
/* {% block checkbox_widget -%}    */
/*     <div class="col-md-3 col-sm-4">*/
/*         <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/*     </div>*/
/*     */
/* {%- endblock checkbox_widget %}*/
