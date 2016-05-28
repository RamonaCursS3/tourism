<?php

/* :hotel:show.html.twig */
class __TwigTemplate_9c5f13352896bfc1cd7e04eff57b993276da0040289e69e2351d6cd670a19d2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":hotel:show.html.twig", 1);
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
        $__internal_0c515ab636754ffdc9fbecb5f7bcda2675e73a1ffd05f2a68d13c05a7093bb37 = $this->env->getExtension("native_profiler");
        $__internal_0c515ab636754ffdc9fbecb5f7bcda2675e73a1ffd05f2a68d13c05a7093bb37->enter($__internal_0c515ab636754ffdc9fbecb5f7bcda2675e73a1ffd05f2a68d13c05a7093bb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":hotel:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c515ab636754ffdc9fbecb5f7bcda2675e73a1ffd05f2a68d13c05a7093bb37->leave($__internal_0c515ab636754ffdc9fbecb5f7bcda2675e73a1ffd05f2a68d13c05a7093bb37_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd31b66d65ccfff99e3d88847e12ec2db6778567f7bdcb8c0504c0b0affdd107 = $this->env->getExtension("native_profiler");
        $__internal_cd31b66d65ccfff99e3d88847e12ec2db6778567f7bdcb8c0504c0b0affdd107->enter($__internal_cd31b66d65ccfff99e3d88847e12ec2db6778567f7bdcb8c0504c0b0affdd107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cd31b66d65ccfff99e3d88847e12ec2db6778567f7bdcb8c0504c0b0affdd107->leave($__internal_cd31b66d65ccfff99e3d88847e12ec2db6778567f7bdcb8c0504c0b0affdd107_prof);

    }

    public function getTemplateName()
    {
        return ":hotel:show.html.twig";
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
