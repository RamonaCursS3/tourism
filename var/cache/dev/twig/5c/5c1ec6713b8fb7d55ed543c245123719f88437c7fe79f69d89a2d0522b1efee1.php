<?php

/* Form/fields_date.html.twig */
class __TwigTemplate_9b7fc198f334c7579b0c23982e92d5963e675f6473e74135fa36db7f072a25c7 extends Twig_Template
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
        $__internal_7ad676b8dda7cb62ce255398411233c74a58a8d00db66981b482d7f3a2035cc5 = $this->env->getExtension("native_profiler");
        $__internal_7ad676b8dda7cb62ce255398411233c74a58a8d00db66981b482d7f3a2035cc5->enter($__internal_7ad676b8dda7cb62ce255398411233c74a58a8d00db66981b482d7f3a2035cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/fields_date.html.twig"));

        // line 3
        $this->displayBlock('date_widget', $context, $blocks);
        // line 17
        $this->displayBlock('datetime_widget', $context, $blocks);
        
        $__internal_7ad676b8dda7cb62ce255398411233c74a58a8d00db66981b482d7f3a2035cc5->leave($__internal_7ad676b8dda7cb62ce255398411233c74a58a8d00db66981b482d7f3a2035cc5_prof);

    }

    // line 3
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f1f693b32d4a8998d96a73f586e3b63234d777051b0909ed6db2e73e7a95cdd1 = $this->env->getExtension("native_profiler");
        $__internal_f1f693b32d4a8998d96a73f586e3b63234d777051b0909ed6db2e73e7a95cdd1->enter($__internal_f1f693b32d4a8998d96a73f586e3b63234d777051b0909ed6db2e73e7a95cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_f1f693b32d4a8998d96a73f586e3b63234d777051b0909ed6db2e73e7a95cdd1->leave($__internal_f1f693b32d4a8998d96a73f586e3b63234d777051b0909ed6db2e73e7a95cdd1_prof);

    }

    // line 17
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6ccb8cd0a9777721b2680fe9b2076fa2e83bf099151d1895817d0cb25bf8712a = $this->env->getExtension("native_profiler");
        $__internal_6ccb8cd0a9777721b2680fe9b2076fa2e83bf099151d1895817d0cb25bf8712a->enter($__internal_6ccb8cd0a9777721b2680fe9b2076fa2e83bf099151d1895817d0cb25bf8712a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_6ccb8cd0a9777721b2680fe9b2076fa2e83bf099151d1895817d0cb25bf8712a->leave($__internal_6ccb8cd0a9777721b2680fe9b2076fa2e83bf099151d1895817d0cb25bf8712a_prof);

    }

    public function getTemplateName()
    {
        return "Form/fields_date.html.twig";
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
