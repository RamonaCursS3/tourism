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
        $__internal_eacc0fa7828ee4396ea71135f5ec6d6d885d497a4fb91e096d61cfeb356cff98 = $this->env->getExtension("native_profiler");
        $__internal_eacc0fa7828ee4396ea71135f5ec6d6d885d497a4fb91e096d61cfeb356cff98->enter($__internal_eacc0fa7828ee4396ea71135f5ec6d6d885d497a4fb91e096d61cfeb356cff98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eacc0fa7828ee4396ea71135f5ec6d6d885d497a4fb91e096d61cfeb356cff98->leave($__internal_eacc0fa7828ee4396ea71135f5ec6d6d885d497a4fb91e096d61cfeb356cff98_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_946d223f92e4478fc76dda4000589da8235ab5f417d42a509fd1593d7c71d1ef = $this->env->getExtension("native_profiler");
        $__internal_946d223f92e4478fc76dda4000589da8235ab5f417d42a509fd1593d7c71d1ef->enter($__internal_946d223f92e4478fc76dda4000589da8235ab5f417d42a509fd1593d7c71d1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_946d223f92e4478fc76dda4000589da8235ab5f417d42a509fd1593d7c71d1ef->leave($__internal_946d223f92e4478fc76dda4000589da8235ab5f417d42a509fd1593d7c71d1ef_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d570201bef4fe56b31fcf01a037e736132d93f9577c6c4a180051605fbdfc9f9 = $this->env->getExtension("native_profiler");
        $__internal_d570201bef4fe56b31fcf01a037e736132d93f9577c6c4a180051605fbdfc9f9->enter($__internal_d570201bef4fe56b31fcf01a037e736132d93f9577c6c4a180051605fbdfc9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d570201bef4fe56b31fcf01a037e736132d93f9577c6c4a180051605fbdfc9f9->leave($__internal_d570201bef4fe56b31fcf01a037e736132d93f9577c6c4a180051605fbdfc9f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fce311a2b1706ba8c7884bfdcbb9fc3d19c8cc46c3b8dcfdb88701dbe973b802 = $this->env->getExtension("native_profiler");
        $__internal_fce311a2b1706ba8c7884bfdcbb9fc3d19c8cc46c3b8dcfdb88701dbe973b802->enter($__internal_fce311a2b1706ba8c7884bfdcbb9fc3d19c8cc46c3b8dcfdb88701dbe973b802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fce311a2b1706ba8c7884bfdcbb9fc3d19c8cc46c3b8dcfdb88701dbe973b802->leave($__internal_fce311a2b1706ba8c7884bfdcbb9fc3d19c8cc46c3b8dcfdb88701dbe973b802_prof);

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
