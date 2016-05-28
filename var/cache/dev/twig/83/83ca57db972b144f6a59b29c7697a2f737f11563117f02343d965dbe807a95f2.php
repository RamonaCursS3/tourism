<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3b9b56a064c76273c5451672d99a483d4994d51cadcc4f279ec7d9755cd4e737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09a5116c65408e2de4fdd57851b45df72300016cdabdc1f5d2299adf6ecea911 = $this->env->getExtension("native_profiler");
        $__internal_09a5116c65408e2de4fdd57851b45df72300016cdabdc1f5d2299adf6ecea911->enter($__internal_09a5116c65408e2de4fdd57851b45df72300016cdabdc1f5d2299adf6ecea911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09a5116c65408e2de4fdd57851b45df72300016cdabdc1f5d2299adf6ecea911->leave($__internal_09a5116c65408e2de4fdd57851b45df72300016cdabdc1f5d2299adf6ecea911_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0226ffefb274de083c0804b0a995cda47f7eb9a2060a89d1f9217c819f72b949 = $this->env->getExtension("native_profiler");
        $__internal_0226ffefb274de083c0804b0a995cda47f7eb9a2060a89d1f9217c819f72b949->enter($__internal_0226ffefb274de083c0804b0a995cda47f7eb9a2060a89d1f9217c819f72b949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0226ffefb274de083c0804b0a995cda47f7eb9a2060a89d1f9217c819f72b949->leave($__internal_0226ffefb274de083c0804b0a995cda47f7eb9a2060a89d1f9217c819f72b949_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8e7e7ea46ea43926d239ce8737e68a4ec8cf6a20292d42d8ed4afd2d47f8105 = $this->env->getExtension("native_profiler");
        $__internal_c8e7e7ea46ea43926d239ce8737e68a4ec8cf6a20292d42d8ed4afd2d47f8105->enter($__internal_c8e7e7ea46ea43926d239ce8737e68a4ec8cf6a20292d42d8ed4afd2d47f8105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c8e7e7ea46ea43926d239ce8737e68a4ec8cf6a20292d42d8ed4afd2d47f8105->leave($__internal_c8e7e7ea46ea43926d239ce8737e68a4ec8cf6a20292d42d8ed4afd2d47f8105_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
