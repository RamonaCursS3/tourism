<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_4d55f1bc2ea5029175fed87259ce816d4f6e5671e3b6ff469285d847eb2b84de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba0ac8c011893abfed2736ee06a0fb9fd75ac9ac62e5e5f04d14ad43de3a5f51 = $this->env->getExtension("native_profiler");
        $__internal_ba0ac8c011893abfed2736ee06a0fb9fd75ac9ac62e5e5f04d14ad43de3a5f51->enter($__internal_ba0ac8c011893abfed2736ee06a0fb9fd75ac9ac62e5e5f04d14ad43de3a5f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ba0ac8c011893abfed2736ee06a0fb9fd75ac9ac62e5e5f04d14ad43de3a5f51->leave($__internal_ba0ac8c011893abfed2736ee06a0fb9fd75ac9ac62e5e5f04d14ad43de3a5f51_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_980f8999fbcc8648d4e5548188ed60c06390b320f8a7128478811b34eec5617e = $this->env->getExtension("native_profiler");
        $__internal_980f8999fbcc8648d4e5548188ed60c06390b320f8a7128478811b34eec5617e->enter($__internal_980f8999fbcc8648d4e5548188ed60c06390b320f8a7128478811b34eec5617e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_980f8999fbcc8648d4e5548188ed60c06390b320f8a7128478811b34eec5617e->leave($__internal_980f8999fbcc8648d4e5548188ed60c06390b320f8a7128478811b34eec5617e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
