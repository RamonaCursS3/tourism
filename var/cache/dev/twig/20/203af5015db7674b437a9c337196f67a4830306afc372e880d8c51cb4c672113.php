<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0ba90d8b4350430bbcd80af16fada5549315d1e7c186027619f9329a9859e2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e97ff67561cac19ada10a12d46556821d8ef9f9d96ed451d85e695aed2e8bbf7 = $this->env->getExtension("native_profiler");
        $__internal_e97ff67561cac19ada10a12d46556821d8ef9f9d96ed451d85e695aed2e8bbf7->enter($__internal_e97ff67561cac19ada10a12d46556821d8ef9f9d96ed451d85e695aed2e8bbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e97ff67561cac19ada10a12d46556821d8ef9f9d96ed451d85e695aed2e8bbf7->leave($__internal_e97ff67561cac19ada10a12d46556821d8ef9f9d96ed451d85e695aed2e8bbf7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7bad887687281c00e89ca087903f5139f66629cdb72bddb4c717d268604fc8cc = $this->env->getExtension("native_profiler");
        $__internal_7bad887687281c00e89ca087903f5139f66629cdb72bddb4c717d268604fc8cc->enter($__internal_7bad887687281c00e89ca087903f5139f66629cdb72bddb4c717d268604fc8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7bad887687281c00e89ca087903f5139f66629cdb72bddb4c717d268604fc8cc->leave($__internal_7bad887687281c00e89ca087903f5139f66629cdb72bddb4c717d268604fc8cc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_74e1071f17f5b8228f0ae20cfba7474f156fc366a9a6b493e1de6b133fef4c4a = $this->env->getExtension("native_profiler");
        $__internal_74e1071f17f5b8228f0ae20cfba7474f156fc366a9a6b493e1de6b133fef4c4a->enter($__internal_74e1071f17f5b8228f0ae20cfba7474f156fc366a9a6b493e1de6b133fef4c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74e1071f17f5b8228f0ae20cfba7474f156fc366a9a6b493e1de6b133fef4c4a->leave($__internal_74e1071f17f5b8228f0ae20cfba7474f156fc366a9a6b493e1de6b133fef4c4a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e63cdb772959f8e1b1f9e359247b8139ca22c75253c331d57028711602e2cca = $this->env->getExtension("native_profiler");
        $__internal_3e63cdb772959f8e1b1f9e359247b8139ca22c75253c331d57028711602e2cca->enter($__internal_3e63cdb772959f8e1b1f9e359247b8139ca22c75253c331d57028711602e2cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3e63cdb772959f8e1b1f9e359247b8139ca22c75253c331d57028711602e2cca->leave($__internal_3e63cdb772959f8e1b1f9e359247b8139ca22c75253c331d57028711602e2cca_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
