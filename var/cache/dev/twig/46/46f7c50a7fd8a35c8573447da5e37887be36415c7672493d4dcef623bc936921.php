<?php

/* :default:index.html.twig */
class __TwigTemplate_a6358690bdb0f29d639d5131c314fb00f3c5e08145acff0794bccebf9b3a9ae2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_b0169f6039a9380e6a7e1704273a044aa62caab89d4a6f6979bcf5a07ae61f74 = $this->env->getExtension("native_profiler");
        $__internal_b0169f6039a9380e6a7e1704273a044aa62caab89d4a6f6979bcf5a07ae61f74->enter($__internal_b0169f6039a9380e6a7e1704273a044aa62caab89d4a6f6979bcf5a07ae61f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0169f6039a9380e6a7e1704273a044aa62caab89d4a6f6979bcf5a07ae61f74->leave($__internal_b0169f6039a9380e6a7e1704273a044aa62caab89d4a6f6979bcf5a07ae61f74_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c166f1220e2168f7985ee8c4a803b86c08fefba5a90de938e8f962232bc41316 = $this->env->getExtension("native_profiler");
        $__internal_c166f1220e2168f7985ee8c4a803b86c08fefba5a90de938e8f962232bc41316->enter($__internal_c166f1220e2168f7985ee8c4a803b86c08fefba5a90de938e8f962232bc41316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c166f1220e2168f7985ee8c4a803b86c08fefba5a90de938e8f962232bc41316->leave($__internal_c166f1220e2168f7985ee8c4a803b86c08fefba5a90de938e8f962232bc41316_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
