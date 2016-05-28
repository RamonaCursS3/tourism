<?php

/* :Form:labels.html.twig */
class __TwigTemplate_4b19487545328e1c7c47aa90217fe1e899a0cd623cfebae92fb47eba7bc74a11 extends Twig_Template
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
        $__internal_76b5d1469f8effc38410a9391a6b964ca5e97869a35282bc9dff135a732b4a72 = $this->env->getExtension("native_profiler");
        $__internal_76b5d1469f8effc38410a9391a6b964ca5e97869a35282bc9dff135a732b4a72->enter($__internal_76b5d1469f8effc38410a9391a6b964ca5e97869a35282bc9dff135a732b4a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:labels.html.twig"));

        // line 3
        $this->displayBlock('form_label', $context, $blocks);
        // line 25
        $this->displayBlock('button_label', $context, $blocks);
        
        $__internal_76b5d1469f8effc38410a9391a6b964ca5e97869a35282bc9dff135a732b4a72->leave($__internal_76b5d1469f8effc38410a9391a6b964ca5e97869a35282bc9dff135a732b4a72_prof);

    }

    // line 3
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dd9c47d5d8dff0ab8196ab68d9664b2140d42b3077c07bb7f24b3ceb574d58f6 = $this->env->getExtension("native_profiler");
        $__internal_dd9c47d5d8dff0ab8196ab68d9664b2140d42b3077c07bb7f24b3ceb574d58f6->enter($__internal_dd9c47d5d8dff0ab8196ab68d9664b2140d42b3077c07bb7f24b3ceb574d58f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_dd9c47d5d8dff0ab8196ab68d9664b2140d42b3077c07bb7f24b3ceb574d58f6->leave($__internal_dd9c47d5d8dff0ab8196ab68d9664b2140d42b3077c07bb7f24b3ceb574d58f6_prof);

    }

    // line 25
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_1f6658e45b518976c1f854fb72ea429079c2493a5f9a9a1e76ae8c5ab42c1abd = $this->env->getExtension("native_profiler");
        $__internal_1f6658e45b518976c1f854fb72ea429079c2493a5f9a9a1e76ae8c5ab42c1abd->enter($__internal_1f6658e45b518976c1f854fb72ea429079c2493a5f9a9a1e76ae8c5ab42c1abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_1f6658e45b518976c1f854fb72ea429079c2493a5f9a9a1e76ae8c5ab42c1abd->leave($__internal_1f6658e45b518976c1f854fb72ea429079c2493a5f9a9a1e76ae8c5ab42c1abd_prof);

    }

    public function getTemplateName()
    {
        return ":Form:labels.html.twig";
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
