<?php

/* default/index.html.twig */
class __TwigTemplate_563d48075b5447d5de762cfa8e8e4e9e5cd52b2a7bc290eb9d80d91849922524 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0a7c1e28b0e73876fae912d2d44b33669313c91613ed98feaa812ff9748622 = $this->env->getExtension("native_profiler");
        $__internal_8a0a7c1e28b0e73876fae912d2d44b33669313c91613ed98feaa812ff9748622->enter($__internal_8a0a7c1e28b0e73876fae912d2d44b33669313c91613ed98feaa812ff9748622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0a7c1e28b0e73876fae912d2d44b33669313c91613ed98feaa812ff9748622->leave($__internal_8a0a7c1e28b0e73876fae912d2d44b33669313c91613ed98feaa812ff9748622_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9194cef23fe1eadad032d3283754ad38a960b0686c1d54353233d76d159d245e = $this->env->getExtension("native_profiler");
        $__internal_9194cef23fe1eadad032d3283754ad38a960b0686c1d54353233d76d159d245e->enter($__internal_9194cef23fe1eadad032d3283754ad38a960b0686c1d54353233d76d159d245e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Welcome to Europe Travel!</h1>
        <p>Travel to the four corners of the world,without going around in circles.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("tour_new");
        echo "\" role=\"button\">&raquo; Add new tour</a></p>
      </div>
    </div>

    <div class=\"container\">


    </div> <!-- /container -->
";
        
        $__internal_9194cef23fe1eadad032d3283754ad38a960b0686c1d54353233d76d159d245e->leave($__internal_9194cef23fe1eadad032d3283754ad38a960b0686c1d54353233d76d159d245e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*  <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*       <div class="container">*/
/*         <h1>Welcome to Europe Travel!</h1>*/
/*         <p>Travel to the four corners of the world,without going around in circles.</p>*/
/*         <p><a class="btn btn-primary btn-lg" href="{{ path('tour_new') }}" role="button">&raquo; Add new tour</a></p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/* */
/* */
/*     </div> <!-- /container -->*/
/* {% endblock %}*/
