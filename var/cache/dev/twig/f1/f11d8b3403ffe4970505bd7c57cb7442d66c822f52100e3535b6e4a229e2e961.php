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
            'user_links' => array($this, 'block_user_links'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a7ac049f98525a36c895e37d31026f2b0dafdd2d345fe121104d0159833fb27 = $this->env->getExtension("native_profiler");
        $__internal_4a7ac049f98525a36c895e37d31026f2b0dafdd2d345fe121104d0159833fb27->enter($__internal_4a7ac049f98525a36c895e37d31026f2b0dafdd2d345fe121104d0159833fb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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

    <div class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
      <div class=\"container-fluid\">
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
        $context["d_links"] = array("Tours" => "tour", "Tourist Attractions" => "touristattraction", "Hotels" => "hotel", "Cities" => "city", "Countries" => "country");
        // line 65
        echo "            ";
        $this->displayBlock('dashboard_links', $context, $blocks);
        // line 76
        echo "            
        ";
        // line 77
        $this->displayBlock('user_links', $context, $blocks);
        // line 97
        echo "        </div>
      </div>
    </div>
<div class=\"content-main\">
    <div class=\"row\">
        <div class=\"main\">
            ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "        </div>
    </div>
</div>
   

";
        // line 111
        $this->displayBlock('javascript', $context, $blocks);
        // line 123
        echo "</html>
";
        
        $__internal_4a7ac049f98525a36c895e37d31026f2b0dafdd2d345fe121104d0159833fb27->leave($__internal_4a7ac049f98525a36c895e37d31026f2b0dafdd2d345fe121104d0159833fb27_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1d44e86f8893e8e92a1dd51127f9f8765febb9cecfa0ee483de453c22d333b21 = $this->env->getExtension("native_profiler");
        $__internal_1d44e86f8893e8e92a1dd51127f9f8765febb9cecfa0ee483de453c22d333b21->enter($__internal_1d44e86f8893e8e92a1dd51127f9f8765febb9cecfa0ee483de453c22d333b21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1d44e86f8893e8e92a1dd51127f9f8765febb9cecfa0ee483de453c22d333b21->leave($__internal_1d44e86f8893e8e92a1dd51127f9f8765febb9cecfa0ee483de453c22d333b21_prof);

    }

    // line 65
    public function block_dashboard_links($context, array $blocks = array())
    {
        $__internal_e115d42094641b6ebe6cbdb5b79096c2253e5cad723c31970225fb3ffe3acb27 = $this->env->getExtension("native_profiler");
        $__internal_e115d42094641b6ebe6cbdb5b79096c2253e5cad723c31970225fb3ffe3acb27->enter($__internal_e115d42094641b6ebe6cbdb5b79096c2253e5cad723c31970225fb3ffe3acb27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dashboard_links"));

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
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted(("ROLE_" . twig_upper_filter($this->env, $context["link"])))) {
                // line 70
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath(($context["link"] . "_index"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["key"]), "html", null, true);
                echo "</a></li>
                        ";
            }
            // line 72
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
                </ul>
            ";
        
        $__internal_e115d42094641b6ebe6cbdb5b79096c2253e5cad723c31970225fb3ffe3acb27->leave($__internal_e115d42094641b6ebe6cbdb5b79096c2253e5cad723c31970225fb3ffe3acb27_prof);

    }

    // line 77
    public function block_user_links($context, array $blocks = array())
    {
        $__internal_7dc1d34964f66f28925b03855da1922dc75b771356fd6dea33530022bb8f7b3a = $this->env->getExtension("native_profiler");
        $__internal_7dc1d34964f66f28925b03855da1922dc75b771356fd6dea33530022bb8f7b3a->enter($__internal_7dc1d34964f66f28925b03855da1922dc75b771356fd6dea33530022bb8f7b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_links"));

        // line 78
        echo "
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 80
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 81
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 82
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_user_index");
                echo "\">Admin</a></li> 
                            <li><a href=\"";
                // line 83
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit account", array(), "messages");
                echo "</a></li>
                            <li><a href=\"";
                // line 84
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Account details", array(), "messages");
                echo "</a></li>
                        ";
            } else {
                // line 86
                echo "                            <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Edit account", array(), "messages");
                echo "</a></li>
                            <li><a href=\"";
                // line 87
                echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Account details", array(), "messages");
                echo "</a></li>
                            <li><a href=\"";
                // line 88
                echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Reset Password", array(), "messages");
                echo "</a></li>
                        ";
            }
            // line 90
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Logout", array(), "messages");
            echo "</a></li>
                    ";
        } else {
            // line 92
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Login", array(), "messages");
            echo "</a></li>
                        <li><a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Register", array(), "messages");
            echo "</a></li>
                    ";
        }
        // line 95
        echo "                </ul>
            ";
        
        $__internal_7dc1d34964f66f28925b03855da1922dc75b771356fd6dea33530022bb8f7b3a->leave($__internal_7dc1d34964f66f28925b03855da1922dc75b771356fd6dea33530022bb8f7b3a_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_605e2e1997acc7e71a8492739c4834edd210d8e8189d1c204c818d1bb9360c15 = $this->env->getExtension("native_profiler");
        $__internal_605e2e1997acc7e71a8492739c4834edd210d8e8189d1c204c818d1bb9360c15->enter($__internal_605e2e1997acc7e71a8492739c4834edd210d8e8189d1c204c818d1bb9360c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "            
            ";
        
        $__internal_605e2e1997acc7e71a8492739c4834edd210d8e8189d1c204c818d1bb9360c15->leave($__internal_605e2e1997acc7e71a8492739c4834edd210d8e8189d1c204c818d1bb9360c15_prof);

    }

    // line 111
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_edc16bc51308d172b4ac0b0904dc70ecf08913d56d5ed78c8fadb1f92bad691a = $this->env->getExtension("native_profiler");
        $__internal_edc16bc51308d172b4ac0b0904dc70ecf08913d56d5ed78c8fadb1f92bad691a->enter($__internal_edc16bc51308d172b4ac0b0904dc70ecf08913d56d5ed78c8fadb1f92bad691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 112
        echo "    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
  
  ";
        
        $__internal_edc16bc51308d172b4ac0b0904dc70ecf08913d56d5ed78c8fadb1f92bad691a->leave($__internal_edc16bc51308d172b4ac0b0904dc70ecf08913d56d5ed78c8fadb1f92bad691a_prof);

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
        return array (  325 => 117,  321 => 116,  315 => 112,  309 => 111,  301 => 104,  295 => 103,  287 => 95,  280 => 93,  273 => 92,  265 => 90,  258 => 88,  252 => 87,  245 => 86,  238 => 84,  232 => 83,  227 => 82,  224 => 81,  222 => 80,  218 => 78,  212 => 77,  203 => 73,  197 => 72,  189 => 70,  186 => 69,  182 => 68,  176 => 67,  173 => 66,  167 => 65,  156 => 31,  146 => 23,  140 => 22,  132 => 123,  130 => 111,  123 => 106,  121 => 103,  113 => 97,  111 => 77,  108 => 76,  105 => 65,  103 => 55,  93 => 50,  89 => 49,  73 => 35,  71 => 22,  68 => 21,  62 => 19,  54 => 17,  51 => 16,  49 => 15,  46 => 14,  44 => 13,  39 => 11,  27 => 1,);
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
/*     <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*       <div class="container-fluid">*/
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
/*             'Tours':'tour',*/
/*             'Tourist Attractions':'touristattraction',*/
/*             'Hotels':'hotel',*/
/*             'Cities':'city',*/
/*             'Countries':'country',*/
/*             */
/* */
/*             }*/
/*             %}*/
/*             {% block dashboard_links %}*/
/*                 <ul class="nav navbar-nav navbar-left">*/
/*                     <li><a href="{{ path('homepage') }}">{% trans %}Home{% endtrans %}</a></li>*/
/*                     {% for key,link in d_links %}*/
/*                         {% if is_granted('ROLE_'~link|upper) %}*/
/*                             <li><a href="{{ path(link~'_index') }}">{{ key|trans }}</a></li>*/
/*                         {% endif %}*/
/*                     {% endfor %}*/
/* */
/*                 </ul>*/
/*             {% endblock %}*/
/*             */
/*         {% block user_links %}*/
/* */
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                         {% if is_granted('ROLE_ADMIN') %}*/
/*                             <li><a href="{{ path('admin_user_index') }}">Admin</a></li> */
/*                             <li><a href="{{ path('fos_user_profile_edit') }}">{% trans %}Edit account{% endtrans %}</a></li>*/
/*                             <li><a href="{{ path('fos_user_profile_show') }}">{% trans %}Account details{% endtrans %}</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ path('fos_user_profile_edit') }}">{% trans %}Edit account{% endtrans %}</a></li>*/
/*                             <li><a href="{{ path('fos_user_profile_show') }}">{% trans %}Account details{% endtrans %}</a></li>*/
/*                             <li><a href="{{ path('fos_user_change_password') }}">{% trans %}Reset Password{% endtrans %}</a></li>*/
/*                         {% endif %}*/
/*                         <li><a href="{{ path('fos_user_security_logout') }}">{% trans %}Logout{% endtrans %}</a></li>*/
/*                     {% else %}*/
/*                         <li><a href="{{ path('fos_user_security_login') }}">{% trans %}Login{% endtrans %}</a></li>*/
/*                         <li><a href="{{ path('fos_user_registration_register') }}">{% trans %}Register{% endtrans %}</a></li>*/
/*                     {% endif %}*/
/*                 </ul>*/
/*             {% endblock %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
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
/*     <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/*     <script type="text/javascript" src="{{ asset('js/jquery-ui-1.11.1.min.js') }}"></script>*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     */
/*   </body>*/
/*   */
/*   {% endblock %}*/
/* </html>*/
/* */
