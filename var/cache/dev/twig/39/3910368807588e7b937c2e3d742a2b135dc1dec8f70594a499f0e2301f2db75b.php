<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_7cc3459fa1cbe88370b4cc09c212b4830fe24adb64c8eb8c166e7ceac5c43919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a38bafd3c42dc102a0771afca06f1c4290406ef9c153b1182155dbb259cf91e = $this->env->getExtension("native_profiler");
        $__internal_8a38bafd3c42dc102a0771afca06f1c4290406ef9c153b1182155dbb259cf91e->enter($__internal_8a38bafd3c42dc102a0771afca06f1c4290406ef9c153b1182155dbb259cf91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_8a38bafd3c42dc102a0771afca06f1c4290406ef9c153b1182155dbb259cf91e->leave($__internal_8a38bafd3c42dc102a0771afca06f1c4290406ef9c153b1182155dbb259cf91e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
