<?php

/* :Form:fieldInput.html.twig */
class __TwigTemplate_fdb23183b22c33a418b32d085daa2ee4834a8a340f2bf1b763ce079c4547e2d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'button_widget' => array($this, 'block_button_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2df1e976536b073107b0561c243bc7a167b4d51d622b4d264b80fea7e46795c = $this->env->getExtension("native_profiler");
        $__internal_d2df1e976536b073107b0561c243bc7a167b4d51d622b4d264b80fea7e46795c->enter($__internal_d2df1e976536b073107b0561c243bc7a167b4d51d622b4d264b80fea7e46795c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fieldInput.html.twig"));

        // line 1
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        
        $__internal_d2df1e976536b073107b0561c243bc7a167b4d51d622b4d264b80fea7e46795c->leave($__internal_d2df1e976536b073107b0561c243bc7a167b4d51d622b4d264b80fea7e46795c_prof);

    }

    // line 1
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_439f9f55cffc43f8eac42abe4d8bdf721363e4a146a3f3393753e00c2b90e9ed = $this->env->getExtension("native_profiler");
        $__internal_439f9f55cffc43f8eac42abe4d8bdf721363e4a146a3f3393753e00c2b90e9ed->enter($__internal_439f9f55cffc43f8eac42abe4d8bdf721363e4a146a3f3393753e00c2b90e9ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 2
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 3
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "file")) {
            // line 4
            echo "        <span class=\"btn btn-default btn-file\">
           <input type=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
        </span>  
    ";
        } else {
            // line 8
            echo "        <input onkeyup=\"processInputs(this.value, this.id)\" size=\"3\" type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
            echo "\" ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo " ";
            if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "\" ";
            }
            echo "/>
    ";
        }
        
        $__internal_439f9f55cffc43f8eac42abe4d8bdf721363e4a146a3f3393753e00c2b90e9ed->leave($__internal_439f9f55cffc43f8eac42abe4d8bdf721363e4a146a3f3393753e00c2b90e9ed_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2970f00dc291a3a58117e52f64b248ffdb59541e7bf88a231da619bbde9a272d = $this->env->getExtension("native_profiler");
        $__internal_2970f00dc291a3a58117e52f64b248ffdb59541e7bf88a231da619bbde9a272d->enter($__internal_2970f00dc291a3a58117e52f64b248ffdb59541e7bf88a231da619bbde9a272d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 14
            $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
        }
        // line 17
        echo "<div class=\"col-md-6 col-sm-4\">
            <button class=\"btn btn-sm btn-success\" type=\"";
        // line 18
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
        </div>";
        
        $__internal_2970f00dc291a3a58117e52f64b248ffdb59541e7bf88a231da619bbde9a272d->leave($__internal_2970f00dc291a3a58117e52f64b248ffdb59541e7bf88a231da619bbde9a272d_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fieldInput.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  90 => 17,  87 => 14,  85 => 13,  79 => 12,  60 => 8,  46 => 5,  43 => 4,  41 => 3,  39 => 2,  33 => 1,  26 => 12,  24 => 1,);
    }
}
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {% if type == 'file' %}*/
/*         <span class="btn btn-default btn-file">*/
/*            <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*         </span>  */
/*     {% else %}*/
/*         <input onkeyup="processInputs(this.value, this.id)" size="3" type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/*     {% endif %}*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {% block button_widget -%}*/
/*     {% if label is empty -%}*/
/*         {% set label = name|humanize %}*/
/*     {%- endif -%}*/
/* */
/*         <div class="col-md-6 col-sm-4">*/
/*             <button class="btn btn-sm btn-success" type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>*/
/*         </div>*/
/* */
/* {%- endblock button_widget %}*/
