<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_dc5228ae18b7134c7d5807e12d91e8a81642c5701c8077219dfdc69ca66bc9aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c87d13b59f2fdf9f1bbafafcf2eb32d4b0179881038b88df601ed2b3528a86f = $this->env->getExtension("native_profiler");
        $__internal_9c87d13b59f2fdf9f1bbafafcf2eb32d4b0179881038b88df601ed2b3528a86f->enter($__internal_9c87d13b59f2fdf9f1bbafafcf2eb32d4b0179881038b88df601ed2b3528a86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c87d13b59f2fdf9f1bbafafcf2eb32d4b0179881038b88df601ed2b3528a86f->leave($__internal_9c87d13b59f2fdf9f1bbafafcf2eb32d4b0179881038b88df601ed2b3528a86f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_609470099da7c8da99f43ada785f90317c48b3d99a5c8adb598bf7f3967f2d44 = $this->env->getExtension("native_profiler");
        $__internal_609470099da7c8da99f43ada785f90317c48b3d99a5c8adb598bf7f3967f2d44->enter($__internal_609470099da7c8da99f43ada785f90317c48b3d99a5c8adb598bf7f3967f2d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_609470099da7c8da99f43ada785f90317c48b3d99a5c8adb598bf7f3967f2d44->leave($__internal_609470099da7c8da99f43ada785f90317c48b3d99a5c8adb598bf7f3967f2d44_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dbc8037898581fd65b78f227ad50bc26b0d8aafa08a166abeef4cbed1dd55a55 = $this->env->getExtension("native_profiler");
        $__internal_dbc8037898581fd65b78f227ad50bc26b0d8aafa08a166abeef4cbed1dd55a55->enter($__internal_dbc8037898581fd65b78f227ad50bc26b0d8aafa08a166abeef4cbed1dd55a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dbc8037898581fd65b78f227ad50bc26b0d8aafa08a166abeef4cbed1dd55a55->leave($__internal_dbc8037898581fd65b78f227ad50bc26b0d8aafa08a166abeef4cbed1dd55a55_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed30403266729482cf41cec8887462eca64da3caaa793494dc9d0f3b2c3c15fa = $this->env->getExtension("native_profiler");
        $__internal_ed30403266729482cf41cec8887462eca64da3caaa793494dc9d0f3b2c3c15fa->enter($__internal_ed30403266729482cf41cec8887462eca64da3caaa793494dc9d0f3b2c3c15fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ed30403266729482cf41cec8887462eca64da3caaa793494dc9d0f3b2c3c15fa->leave($__internal_ed30403266729482cf41cec8887462eca64da3caaa793494dc9d0f3b2c3c15fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
