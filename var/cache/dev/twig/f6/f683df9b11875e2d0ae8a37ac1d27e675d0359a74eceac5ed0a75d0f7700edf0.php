<?php

/* :Form:fields_date.html.twig */
class __TwigTemplate_8ae95fd020378a1d9b099de282cbb8fd00afff65f87817eefcee14f19f40b761 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_widget' => array($this, 'block_date_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66a29510635ca40e912513b9a79156f8e840d93a2b78544ff5d51dbbfea87a6c = $this->env->getExtension("native_profiler");
        $__internal_66a29510635ca40e912513b9a79156f8e840d93a2b78544ff5d51dbbfea87a6c->enter($__internal_66a29510635ca40e912513b9a79156f8e840d93a2b78544ff5d51dbbfea87a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Form:fields_date.html.twig"));

        // line 3
        $this->displayBlock('date_widget', $context, $blocks);
        // line 17
        $this->displayBlock('datetime_widget', $context, $blocks);
        
        $__internal_66a29510635ca40e912513b9a79156f8e840d93a2b78544ff5d51dbbfea87a6c->leave($__internal_66a29510635ca40e912513b9a79156f8e840d93a2b78544ff5d51dbbfea87a6c_prof);

    }

    // line 3
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_38f12f85ce9ca2d4cf2c57659437b2415debdcc516fa677e7b1abe5f33ef4f1e = $this->env->getExtension("native_profiler");
        $__internal_38f12f85ce9ca2d4cf2c57659437b2415debdcc516fa677e7b1abe5f33ef4f1e->enter($__internal_38f12f85ce9ca2d4cf2c57659437b2415debdcc516fa677e7b1abe5f33ef4f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 4
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 5
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 7
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 8
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 9
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 10
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 11
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 13
            echo "</div>";
        }
        
        $__internal_38f12f85ce9ca2d4cf2c57659437b2415debdcc516fa677e7b1abe5f33ef4f1e->leave($__internal_38f12f85ce9ca2d4cf2c57659437b2415debdcc516fa677e7b1abe5f33ef4f1e_prof);

    }

    // line 17
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d678bf0a24b0c33a3f7fc8eab83cce42b21ff47f2131fea5175e165003b7660a = $this->env->getExtension("native_profiler");
        $__internal_d678bf0a24b0c33a3f7fc8eab83cce42b21ff47f2131fea5175e165003b7660a->enter($__internal_d678bf0a24b0c33a3f7fc8eab83cce42b21ff47f2131fea5175e165003b7660a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 18
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 19
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 21
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 22
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 23
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 24
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 25
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 26
            echo "</div>";
        }
        
        $__internal_d678bf0a24b0c33a3f7fc8eab83cce42b21ff47f2131fea5175e165003b7660a->leave($__internal_d678bf0a24b0c33a3f7fc8eab83cce42b21ff47f2131fea5175e165003b7660a_prof);

    }

    public function getTemplateName()
    {
        return ":Form:fields_date.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  82 => 25,  80 => 24,  78 => 23,  76 => 22,  72 => 21,  69 => 19,  67 => 18,  61 => 17,  53 => 13,  51 => 11,  50 => 10,  49 => 9,  48 => 8,  44 => 7,  41 => 5,  39 => 4,  33 => 3,  26 => 17,  24 => 3,);
    }
}
/* {# buttons #}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
