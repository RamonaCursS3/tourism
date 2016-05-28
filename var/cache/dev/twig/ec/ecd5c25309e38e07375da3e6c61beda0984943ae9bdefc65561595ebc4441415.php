<?php

/* hotel/show.html.twig */
class __TwigTemplate_05c47678cbc81c5e67736dca859160444e39ff37b034310a85915a5ca99d4065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/show.html.twig", 1);
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
        $__internal_baa9bf4620f5caa71fd5b047d30fd68cf6f40e5a25931b75dbbcbd0d575fd751 = $this->env->getExtension("native_profiler");
        $__internal_baa9bf4620f5caa71fd5b047d30fd68cf6f40e5a25931b75dbbcbd0d575fd751->enter($__internal_baa9bf4620f5caa71fd5b047d30fd68cf6f40e5a25931b75dbbcbd0d575fd751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_baa9bf4620f5caa71fd5b047d30fd68cf6f40e5a25931b75dbbcbd0d575fd751->leave($__internal_baa9bf4620f5caa71fd5b047d30fd68cf6f40e5a25931b75dbbcbd0d575fd751_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55c0ba50a06b84dcd4819e33b230695d49a04a2566949085a24af29e9e07d82a = $this->env->getExtension("native_profiler");
        $__internal_55c0ba50a06b84dcd4819e33b230695d49a04a2566949085a24af29e9e07d82a->enter($__internal_55c0ba50a06b84dcd4819e33b230695d49a04a2566949085a24af29e9e07d82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel</h1>
<div class=\"col-lg-4\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Star_rating</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "starrating", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Price_range</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "pricerange", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>

<a class=\"btn btn-info\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("hotel_index");
        echo "\">Back to the list</a>

<a class=\"btn btn-warning\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_edit", array("id" => $this->getAttribute((isset($context["hotel"]) ? $context["hotel"] : $this->getContext($context, "hotel")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_55c0ba50a06b84dcd4819e33b230695d49a04a2566949085a24af29e9e07d82a->leave($__internal_55c0ba50a06b84dcd4819e33b230695d49a04a2566949085a24af29e9e07d82a_prof);

    }

    public function getTemplateName()
    {
        return "hotel/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 35,  89 => 33,  84 => 31,  79 => 29,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hotel</h1>*/
/* <div class="col-lg-4">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ hotel.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ hotel.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Star_rating</th>*/
/*                 <td>{{ hotel.starrating }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Price_range</th>*/
/*                 <td>{{ hotel.pricerange }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/* <a class="btn btn-info" href="{{ path('hotel_index') }}">Back to the list</a>*/
/* */
/* <a class="btn btn-warning" href="{{ path('hotel_edit', { 'id': hotel.id }) }}">Edit</a>*/
/* */
/* {{ form_start(delete_form) }}*/
/*     <input class="btn btn-danger" type="submit" value="Delete">*/
/* {{ form_end(delete_form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
