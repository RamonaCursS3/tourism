<?php

/* city/index.html.twig */
class __TwigTemplate_5f62fba3b65c3ecfc5136ab5e69fac65b5058246176f41bab873b82794e4150a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "city/index.html.twig", 1);
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
        $__internal_98b78d81485d05af3b0e338febc012087ed51adcbf5cbbd80b77f5e04224144a = $this->env->getExtension("native_profiler");
        $__internal_98b78d81485d05af3b0e338febc012087ed51adcbf5cbbd80b77f5e04224144a->enter($__internal_98b78d81485d05af3b0e338febc012087ed51adcbf5cbbd80b77f5e04224144a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "city/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98b78d81485d05af3b0e338febc012087ed51adcbf5cbbd80b77f5e04224144a->leave($__internal_98b78d81485d05af3b0e338febc012087ed51adcbf5cbbd80b77f5e04224144a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb08e9165446dcbfff8b57bfce2339e93118f6aa537329d7f7d6c73223df96dc = $this->env->getExtension("native_profiler");
        $__internal_bb08e9165446dcbfff8b57bfce2339e93118f6aa537329d7f7d6c73223df96dc->enter($__internal_bb08e9165446dcbfff8b57bfce2339e93118f6aa537329d7f7d6c73223df96dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>City list</h1>
<div class=\"table-responsive\">
    <table class=\"table table-hover records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cities"]) ? $context["cities"] : $this->getContext($context, "cities")));
        foreach ($context['_seq'] as $context["_key"] => $context["city"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_show", array("id" => $this->getAttribute($context["city"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["city"], "location", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_show", array("id" => $this->getAttribute($context["city"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-share\"></span> Show</a>

                    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_edit", array("id" => $this->getAttribute($context["city"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-edit\"></span> Edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['city'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </tbody>
    </table>
</div>

    <a class=\"btn btn-success\" href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("city_new");
        echo "\">Create a new entry</a>

";
        
        $__internal_bb08e9165446dcbfff8b57bfce2339e93118f6aa537329d7f7d6c73223df96dc->leave($__internal_bb08e9165446dcbfff8b57bfce2339e93118f6aa537329d7f7d6c73223df96dc_prof);

    }

    public function getTemplateName()
    {
        return "city/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  93 => 30,  82 => 25,  76 => 22,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>City list</h1>*/
/* <div class="table-responsive">*/
/*     <table class="table table-hover records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Location</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for city in cities %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('city_show', { 'id': city.id }) }}">{{ city.id }}</a></td>*/
/*                 <td>{{ city.name }}</td>*/
/*                 <td>{{ city.location }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-info" href="{{ path('city_show', { 'id': city.id }) }}">*/
/*                         <span class="glyphicon glyphicon-share"></span> Show</a>*/
/* */
/*                     <a class="btn btn-sm btn-default" href="{{ path('city_edit', { 'id': city.id }) }}">*/
/*                         <span class="glyphicon glyphicon-edit"></span> Edit</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* */
/*     <a class="btn btn-success" href="{{ path('city_new') }}">Create a new entry</a>*/
/* */
/* {% endblock %}*/
/* */
