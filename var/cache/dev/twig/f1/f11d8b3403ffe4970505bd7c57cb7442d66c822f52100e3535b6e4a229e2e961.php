<?php

/* base.html.twig */
class __TwigTemplate_05d0cb704c955413540889fe7781bbca6ee95667294ff330f8fd19d7a893b5a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'dashboard_links' => array($this, 'block_dashboard_links'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_901ed7a4d1484f8f3bd87a0e7f13ef8c870ae17bea51e37da77824c671971be1 = $this->env->getExtension("native_profiler");
        $__internal_901ed7a4d1484f8f3bd87a0e7f13ef8c870ae17bea51e37da77824c671971be1->enter($__internal_901ed7a4d1484f8f3bd87a0e7f13ef8c870ae17bea51e37da77824c671971be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta content=\"IE=edge\" http-equiv=\"X-UA-Compatible\">
    <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"author\">
    <link rel=\"icon\"  href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 13
        $context["name"] = "Europe Travel";
        // line 14
        echo "
    ";
        // line 15
        $context["mypath"] = (("images/" . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) . ".png");
        // line 16
        echo "    ";
        if (array_key_exists("head_title", $context)) {
            // line 17
            echo "        <title>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["head_title"]) ? $context["head_title"] : $this->getContext($context, "head_title")), "html", null, true);
            echo "</title>
    ";
        } else {
            // line 19
            echo "        <title>";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</title>
    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
</head>

  <body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Menu</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                <img class=\"logo-img\" alt=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_lower_filter($this->env, (isset($context["mypath"]) ? $context["mypath"] : $this->getContext($context, "mypath")))), "html", null, true);
        echo "\" />
            </a>
        </div>

        <div class=\"navbar-collapse collapse clear\">
            ";
        // line 55
        $context["d_links"] = array("Tours" => "tour_index", "Tourist Attractions" => "touristattraction_index", "Hotels" => "hotel_index", "Cities" => "city_index", "Countries" => "country_index");
        // line 65
        echo "            ";
        $this->displayBlock('dashboard_links', $context, $blocks);
        // line 76
        echo "        <div id=\"navbar\" class=\"navbar-collapse collapse\">
          <form class=\"navbar-form navbar-right\">
            <div class=\"form-group\">
              <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
            </div>
            <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
<div class=\"content-main\">
    <div class=\"row\">
        <div class=\"main\">
            ";
        // line 92
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "        </div>
    </div>
</div>
   

";
        // line 100
        $this->displayBlock('javascript', $context, $blocks);
        // line 111
        echo "</html>
";
        
        $__internal_901ed7a4d1484f8f3bd87a0e7f13ef8c870ae17bea51e37da77824c671971be1->leave($__internal_901ed7a4d1484f8f3bd87a0e7f13ef8c870ae17bea51e37da77824c671971be1_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3f578b874639008f119a74f359176e4216f9990c889b033b9553fa8be572eaa0 = $this->env->getExtension("native_profiler");
        $__internal_3f578b874639008f119a74f359176e4216f9990c889b033b9553fa8be572eaa0->enter($__internal_3f578b874639008f119a74f359176e4216f9990c889b033b9553fa8be572eaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <!-- Optional theme -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        <!-- Latest compiled and minified JavaScript -->
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
       
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/tourism.css"), "html", null, true);
        echo "\" />


    ";
        
        $__internal_3f578b874639008f119a74f359176e4216f9990c889b033b9553fa8be572eaa0->leave($__internal_3f578b874639008f119a74f359176e4216f9990c889b033b9553fa8be572eaa0_prof);

    }

    // line 65
    public function block_dashboard_links($context, array $blocks = array())
    {
        $__internal_7300c5ec8083dfd36e03c28bd895a3f183ffccd845fabb465370a225f260655a = $this->env->getExtension("native_profiler");
        $__internal_7300c5ec8083dfd36e03c28bd895a3f183ffccd845fabb465370a225f260655a->enter($__internal_7300c5ec8083dfd36e03c28bd895a3f183ffccd845fabb465370a225f260655a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dashboard_links"));

        // line 66
        echo "                <ul class=\"nav navbar-nav navbar-left\">
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Home", array(), "messages");
        echo "</a></li>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["d_links"]) ? $context["d_links"] : $this->getContext($context, "d_links")));
        foreach ($context['_seq'] as $context["key"] => $context["link"]) {
            // line 69
            echo "                        
                            <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath($context["link"]);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["key"]), "html", null, true);
            echo "</a></li>
                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                </ul>
            ";
        
        $__internal_7300c5ec8083dfd36e03c28bd895a3f183ffccd845fabb465370a225f260655a->leave($__internal_7300c5ec8083dfd36e03c28bd895a3f183ffccd845fabb465370a225f260655a_prof);

    }

    // line 92
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c6269beda06fe63a3add391f9904f6e8a8b1992b80cefe394d3af9043170417 = $this->env->getExtension("native_profiler");
        $__internal_6c6269beda06fe63a3add391f9904f6e8a8b1992b80cefe394d3af9043170417->enter($__internal_6c6269beda06fe63a3add391f9904f6e8a8b1992b80cefe394d3af9043170417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 93
        echo "            
            ";
        
        $__internal_6c6269beda06fe63a3add391f9904f6e8a8b1992b80cefe394d3af9043170417->leave($__internal_6c6269beda06fe63a3add391f9904f6e8a8b1992b80cefe394d3af9043170417_prof);

    }

    // line 100
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_42c5965fd28304612a4eda0c55a1c73c63c601593772220b4ef73e317bcd0665 = $this->env->getExtension("native_profiler");
        $__internal_42c5965fd28304612a4eda0c55a1c73c63c601593772220b4ef73e317bcd0665->enter($__internal_42c5965fd28304612a4eda0c55a1c73c63c601593772220b4ef73e317bcd0665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 101
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
  
  ";
        
        $__internal_42c5965fd28304612a4eda0c55a1c73c63c601593772220b4ef73e317bcd0665->leave($__internal_42c5965fd28304612a4eda0c55a1c73c63c601593772220b4ef73e317bcd0665_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 105,  233 => 101,  227 => 100,  219 => 93,  213 => 92,  204 => 73,  193 => 70,  190 => 69,  186 => 68,  180 => 67,  177 => 66,  171 => 65,  160 => 31,  150 => 23,  144 => 22,  136 => 111,  134 => 100,  127 => 95,  125 => 92,  107 => 76,  104 => 65,  102 => 55,  92 => 50,  88 => 49,  72 => 35,  70 => 22,  67 => 21,  61 => 19,  53 => 17,  50 => 16,  48 => 15,  45 => 14,  43 => 13,  38 => 11,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta content="IE=edge" http-equiv="X-UA-Compatible">*/
/*     <meta content="width=device-width, initial-scale=1" name="viewport">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/* */
/*     <meta content="" name="description">*/
/*     <meta content="" name="author">*/
/*     <link rel="icon"  href="{{ asset('favicon.ico') }}" />*/
/* */
/*     {% set name = 'Europe Travel' %}*/
/* */
/*     {% set mypath = 'images/'~name~'.png' %}*/
/*     {% if head_title is defined %}*/
/*         <title>{{name}} - {{ head_title }}</title>*/
/*     {% else %}*/
/*         <title>{{name}}</title>*/
/*     {% endif %}*/
/* */
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <!-- Optional theme -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         <!-- Latest compiled and minified JavaScript -->*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*        */
/*         <link rel="stylesheet" href="{{ asset('css/tourism.css') }}" />*/
/* */
/* */
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                 <span class="sr-only">Menu</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('homepage') }}">*/
/*                 <img class="logo-img" alt="{{name}}" src="{{ asset(mypath|lower) }}" />*/
/*             </a>*/
/*         </div>*/
/* */
/*         <div class="navbar-collapse collapse clear">*/
/*             {% set d_links = {*/
/*             'Tours':'tour_index',*/
/*             'Tourist Attractions':'touristattraction_index',*/
/*             'Hotels':'hotel_index',*/
/*             'Cities':'city_index',*/
/*             'Countries':'country_index',*/
/*             */
/* */
/*             }*/
/*             %}*/
/*             {% block dashboard_links %}*/
/*                 <ul class="nav navbar-nav navbar-left">*/
/*                     <li><a href="{{ path('homepage') }}">{% trans %}Home{% endtrans %}</a></li>*/
/*                     {% for key,link in d_links %}*/
/*                         */
/*                             <li><a href="{{ path(link) }}">{{ key|trans }}</a></li>*/
/*                         */
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/*             {% endblock %}*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*           <form class="navbar-form navbar-right">*/
/*             <div class="form-group">*/
/*               <input type="text" placeholder="Email" class="form-control">*/
/*             </div>*/
/*             <div class="form-group">*/
/*               <input type="password" placeholder="Password" class="form-control">*/
/*             </div>*/
/*             <button type="submit" class="btn btn-success">Sign in</button>*/
/*           </form>*/
/*         </div><!--/.navbar-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* <div class="content-main">*/
/*     <div class="row">*/
/*         <div class="main">*/
/*             {% block body %}*/
/*             */
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/*    */
/* */
/* {% block javascript %}*/
/*     <!-- Bootstrap core JavaScript*/
/*     ================================================== -->*/
/*     <!-- Placed at the end of the document so the pages load faster -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-ui-1.11.1.min.js') }}"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     */
/*   </body>*/
/*   */
/*   {% endblock %}*/
/* </html>*/
/* */