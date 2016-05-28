<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a70b55c80710845c3d333dfbdfd29f8d53ae31c7584ff857d4fcba7700c6fab8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_eb467949394d148bd491425dc58bf031e57cbb9f6ce004107a62c886cfaf3126 = $this->env->getExtension("native_profiler");
        $__internal_eb467949394d148bd491425dc58bf031e57cbb9f6ce004107a62c886cfaf3126->enter($__internal_eb467949394d148bd491425dc58bf031e57cbb9f6ce004107a62c886cfaf3126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb467949394d148bd491425dc58bf031e57cbb9f6ce004107a62c886cfaf3126->leave($__internal_eb467949394d148bd491425dc58bf031e57cbb9f6ce004107a62c886cfaf3126_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc668b04d67641838b245ec0abe6f9d0964f7db32e04eb3b85d0d16e448e7893 = $this->env->getExtension("native_profiler");
        $__internal_dc668b04d67641838b245ec0abe6f9d0964f7db32e04eb3b85d0d16e448e7893->enter($__internal_dc668b04d67641838b245ec0abe6f9d0964f7db32e04eb3b85d0d16e448e7893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc668b04d67641838b245ec0abe6f9d0964f7db32e04eb3b85d0d16e448e7893->leave($__internal_dc668b04d67641838b245ec0abe6f9d0964f7db32e04eb3b85d0d16e448e7893_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ea6bb520ceaeb41eb4784f7636cf1a700b1e89b832282827c1d9497facc625ca = $this->env->getExtension("native_profiler");
        $__internal_ea6bb520ceaeb41eb4784f7636cf1a700b1e89b832282827c1d9497facc625ca->enter($__internal_ea6bb520ceaeb41eb4784f7636cf1a700b1e89b832282827c1d9497facc625ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ea6bb520ceaeb41eb4784f7636cf1a700b1e89b832282827c1d9497facc625ca->leave($__internal_ea6bb520ceaeb41eb4784f7636cf1a700b1e89b832282827c1d9497facc625ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2e0f4269b54de7459f70c14a813090c92308a26484b975075a4dca7186b17f0c = $this->env->getExtension("native_profiler");
        $__internal_2e0f4269b54de7459f70c14a813090c92308a26484b975075a4dca7186b17f0c->enter($__internal_2e0f4269b54de7459f70c14a813090c92308a26484b975075a4dca7186b17f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e0f4269b54de7459f70c14a813090c92308a26484b975075a4dca7186b17f0c->leave($__internal_2e0f4269b54de7459f70c14a813090c92308a26484b975075a4dca7186b17f0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
