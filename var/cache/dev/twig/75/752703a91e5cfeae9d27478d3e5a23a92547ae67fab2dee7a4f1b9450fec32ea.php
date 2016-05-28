<?php

/* Form/fields_del.html.twig */
class __TwigTemplate_ffd4be7aa85a239a5927e84d744b92f65a2e66db6a48e3c2aea463454108e6af extends Twig_Template
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
        $__internal_e245540953b28a18aeb7cba46ec7898c504688929832c7713f42c7aea1bcea33 = $this->env->getExtension("native_profiler");
        $__internal_e245540953b28a18aeb7cba46ec7898c504688929832c7713f42c7aea1bcea33->enter($__internal_e245540953b28a18aeb7cba46ec7898c504688929832c7713f42c7aea1bcea33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/fields_del.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('button_widget', $context, $blocks);
        
        $__internal_e245540953b28a18aeb7cba46ec7898c504688929832c7713f42c7aea1bcea33->leave($__internal_e245540953b28a18aeb7cba46ec7898c504688929832c7713f42c7aea1bcea33_prof);

    }

    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_71808c7982154451d7a8da338dd90fa1939854238cca93a4b47949b32e7cf2f1 = $this->env->getExtension("native_profiler");
        $__internal_71808c7982154451d7a8da338dd90fa1939854238cca93a4b47949b32e7cf2f1->enter($__internal_71808c7982154451d7a8da338dd90fa1939854238cca93a4b47949b32e7cf2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_71808c7982154451d7a8da338dd90fa1939854238cca93a4b47949b32e7cf2f1->leave($__internal_71808c7982154451d7a8da338dd90fa1939854238cca93a4b47949b32e7cf2f1_prof);

    }

    public function getTemplateName()
    {
        return "Form/fields_del.html.twig";
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
