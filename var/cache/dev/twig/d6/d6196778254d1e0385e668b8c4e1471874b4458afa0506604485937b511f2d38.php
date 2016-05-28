<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_3652455b69b653d9e798e95250e93e0e962725f9de54003b1793fdfe6b6d1931 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ffa456e8d0bcc5157ec3b832f60f3025d87defb6df04b7c9968d5cfabfef752a = $this->env->getExtension("native_profiler");
        $__internal_ffa456e8d0bcc5157ec3b832f60f3025d87defb6df04b7c9968d5cfabfef752a->enter($__internal_ffa456e8d0bcc5157ec3b832f60f3025d87defb6df04b7c9968d5cfabfef752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffa456e8d0bcc5157ec3b832f60f3025d87defb6df04b7c9968d5cfabfef752a->leave($__internal_ffa456e8d0bcc5157ec3b832f60f3025d87defb6df04b7c9968d5cfabfef752a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_408c6e214f05f00966ac6e8a7ab5a1d652154301804841e8897be226a14f9c9c = $this->env->getExtension("native_profiler");
        $__internal_408c6e214f05f00966ac6e8a7ab5a1d652154301804841e8897be226a14f9c9c->enter($__internal_408c6e214f05f00966ac6e8a7ab5a1d652154301804841e8897be226a14f9c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_408c6e214f05f00966ac6e8a7ab5a1d652154301804841e8897be226a14f9c9c->leave($__internal_408c6e214f05f00966ac6e8a7ab5a1d652154301804841e8897be226a14f9c9c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2b063d904b5749ad1a41515748d15dbfd2892e59159b16ad8376bec1664a2fa = $this->env->getExtension("native_profiler");
        $__internal_e2b063d904b5749ad1a41515748d15dbfd2892e59159b16ad8376bec1664a2fa->enter($__internal_e2b063d904b5749ad1a41515748d15dbfd2892e59159b16ad8376bec1664a2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e2b063d904b5749ad1a41515748d15dbfd2892e59159b16ad8376bec1664a2fa->leave($__internal_e2b063d904b5749ad1a41515748d15dbfd2892e59159b16ad8376bec1664a2fa_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
