<?php

/* hotel/index.html.twig */
class __TwigTemplate_a742dc3dfefe4ef0b712f3946053f55d816632e8fc1cffbeef4c53dfadedec54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "hotel/index.html.twig", 1);
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
        $__internal_1c4328207b2b1de5296078e0ddd6005bc024f1f4d8601b18600276e4a5b1d60f = $this->env->getExtension("native_profiler");
        $__internal_1c4328207b2b1de5296078e0ddd6005bc024f1f4d8601b18600276e4a5b1d60f->enter($__internal_1c4328207b2b1de5296078e0ddd6005bc024f1f4d8601b18600276e4a5b1d60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "hotel/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c4328207b2b1de5296078e0ddd6005bc024f1f4d8601b18600276e4a5b1d60f->leave($__internal_1c4328207b2b1de5296078e0ddd6005bc024f1f4d8601b18600276e4a5b1d60f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c012ace4cdfff9dd5436bdf1b5de36d1601dd62d9fb1f943e063e62f1fa0fef4 = $this->env->getExtension("native_profiler");
        $__internal_c012ace4cdfff9dd5436bdf1b5de36d1601dd62d9fb1f943e063e62f1fa0fef4->enter($__internal_c012ace4cdfff9dd5436bdf1b5de36d1601dd62d9fb1f943e063e62f1fa0fef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Hotel list</h1>
<div class=\"table-responsive\">
    <table class=\"table table-hover records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Star_rating</th>
                <th>Price_range</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hotels"]) ? $context["hotels"] : $this->getContext($context, "hotels")));
        foreach ($context['_seq'] as $context["_key"] => $context["hotel"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_show", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "starrating", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["hotel"], "pricerange", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_show", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-share\"></span> Show</a>

                    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hotel_edit", array("id" => $this->getAttribute($context["hotel"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-edit\"></span> Edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hotel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
</div>
<a class=\"btn btn-success\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("hotel_new");
        echo "\">Create a new entry</a>

";
        
        $__internal_c012ace4cdfff9dd5436bdf1b5de36d1601dd62d9fb1f943e063e62f1fa0fef4->leave($__internal_c012ace4cdfff9dd5436bdf1b5de36d1601dd62d9fb1f943e063e62f1fa0fef4_prof);

    }

    public function getTemplateName()
    {
        return "hotel/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  98 => 32,  87 => 27,  81 => 24,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Hotel list</h1>*/
/* <div class="table-responsive">*/
/*     <table class="table table-hover records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Star_rating</th>*/
/*                 <th>Price_range</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for hotel in hotels %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('hotel_show', { 'id': hotel.id }) }}">{{ hotel.id }}</a></td>*/
/*                 <td>{{ hotel.name }}</td>*/
/*                 <td>{{ hotel.starrating }}</td>*/
/*                 <td>{{ hotel.pricerange }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-info" href="{{ path('hotel_show', { 'id': hotel.id }) }}">*/
/*                         <span class="glyphicon glyphicon-share"></span> Show</a>*/
/* */
/*                     <a class="btn btn-sm btn-default" href="{{ path('hotel_edit', { 'id': hotel.id }) }}">*/
/*                         <span class="glyphicon glyphicon-edit"></span> Edit</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* <a class="btn btn-success" href="{{ path('hotel_new') }}">Create a new entry</a>*/
/* */
/* {% endblock %}*/
/* */
