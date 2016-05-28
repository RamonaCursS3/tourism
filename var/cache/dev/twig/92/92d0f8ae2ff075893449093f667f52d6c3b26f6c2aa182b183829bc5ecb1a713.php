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
        $__internal_373b15ba08c14c8e5cab5dcebd089c24f02779ceaa03c64ff442ef435ced3c14 = $this->env->getExtension("native_profiler");
        $__internal_373b15ba08c14c8e5cab5dcebd089c24f02779ceaa03c64ff442ef435ced3c14->enter($__internal_373b15ba08c14c8e5cab5dcebd089c24f02779ceaa03c64ff442ef435ced3c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_373b15ba08c14c8e5cab5dcebd089c24f02779ceaa03c64ff442ef435ced3c14->leave($__internal_373b15ba08c14c8e5cab5dcebd089c24f02779ceaa03c64ff442ef435ced3c14_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf27804f3ec5d6770d2abdc603947d5d94721a1529aa6a2002ca4c6b5cb87887 = $this->env->getExtension("native_profiler");
        $__internal_cf27804f3ec5d6770d2abdc603947d5d94721a1529aa6a2002ca4c6b5cb87887->enter($__internal_cf27804f3ec5d6770d2abdc603947d5d94721a1529aa6a2002ca4c6b5cb87887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
 <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
      <div class=\"container\">
        <h1>Welcome to Europe Travel!</h1>
        <p>Travel to the four corners of the world,without going around in circles.</p>
        <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">&raquo; Help me plan my trip</a></p>
      </div>
    </div>

    <div class=\"container\">


    </div> <!-- /container -->
";
        
        $__internal_cf27804f3ec5d6770d2abdc603947d5d94721a1529aa6a2002ca4c6b5cb87887->leave($__internal_cf27804f3ec5d6770d2abdc603947d5d94721a1529aa6a2002ca4c6b5cb87887_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
/*         <p><a class="btn btn-primary btn-lg" href="#" role="button">&raquo; Help me plan my trip</a></p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/* */
/* */
/*     </div> <!-- /container -->*/
/* {% endblock %}*/
