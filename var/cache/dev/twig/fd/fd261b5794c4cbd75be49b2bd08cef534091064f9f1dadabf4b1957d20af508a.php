<?php

/* Form/labels.html.twig */
class __TwigTemplate_5475f453c148da04f923b5ef578afdea164d5845a2944ab0e1af8e56594acb49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5f1d1752957b501e42e0c83a21206a32f22a3150151184744ea2411d4ff77d2 = $this->env->getExtension("native_profiler");
        $__internal_e5f1d1752957b501e42e0c83a21206a32f22a3150151184744ea2411d4ff77d2->enter($__internal_e5f1d1752957b501e42e0c83a21206a32f22a3150151184744ea2411d4ff77d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/labels.html.twig"));

        // line 3
        $this->displayBlock('form_label', $context, $blocks);
        // line 25
        $this->displayBlock('button_label', $context, $blocks);
        
        $__internal_e5f1d1752957b501e42e0c83a21206a32f22a3150151184744ea2411d4ff77d2->leave($__internal_e5f1d1752957b501e42e0c83a21206a32f22a3150151184744ea2411d4ff77d2_prof);

    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_25dc1cd99d74d0cb606651289f879e25740f3b35f00639438c426b58e631125f = $this->env->getExtension("native_profiler");
        $__internal_25dc1cd99d74d0cb606651289f879e25740f3b35f00639438c426b58e631125f->enter($__internal_25dc1cd99d74d0cb606651289f879e25740f3b35f00639438c426b58e631125f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 4
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 5
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 6
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 8
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 9
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 11
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 12
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 13
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 14
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 15
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 18
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 21
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_25dc1cd99d74d0cb606651289f879e25740f3b35f00639438c426b58e631125f->leave($__internal_25dc1cd99d74d0cb606651289f879e25740f3b35f00639438c426b58e631125f_prof);

    }

    // line 25
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_87110c06cbb314782c31f5d8af99d1cb6bcbe67c53b84d9ded3c4b7afe0505c6 = $this->env->getExtension("native_profiler");
        $__internal_87110c06cbb314782c31f5d8af99d1cb6bcbe67c53b84d9ded3c4b7afe0505c6->enter($__internal_87110c06cbb314782c31f5d8af99d1cb6bcbe67c53b84d9ded3c4b7afe0505c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_87110c06cbb314782c31f5d8af99d1cb6bcbe67c53b84d9ded3c4b7afe0505c6->leave($__internal_87110c06cbb314782c31f5d8af99d1cb6bcbe67c53b84d9ded3c4b7afe0505c6_prof);

    }

    public function getTemplateName()
    {
        return "Form/labels.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  64 => 21,  60 => 18,  57 => 15,  56 => 14,  55 => 13,  53 => 12,  51 => 11,  48 => 9,  46 => 8,  43 => 6,  41 => 5,  39 => 4,  33 => 3,  26 => 25,  24 => 3,);
    }
}
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
