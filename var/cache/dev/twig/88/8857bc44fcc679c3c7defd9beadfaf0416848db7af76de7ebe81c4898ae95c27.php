<?php

/* tour/index.html.twig */
class __TwigTemplate_2196f482462e57e90e07e0864d3ee3b8599b17ba75d7fab7cb9b13e0cb86d4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tour/index.html.twig", 1);
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
        $__internal_ff207526a20a4189a20107f90f3e80d0223b154c952170ed824c1f5e1be691ff = $this->env->getExtension("native_profiler");
        $__internal_ff207526a20a4189a20107f90f3e80d0223b154c952170ed824c1f5e1be691ff->enter($__internal_ff207526a20a4189a20107f90f3e80d0223b154c952170ed824c1f5e1be691ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff207526a20a4189a20107f90f3e80d0223b154c952170ed824c1f5e1be691ff->leave($__internal_ff207526a20a4189a20107f90f3e80d0223b154c952170ed824c1f5e1be691ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7904536d654e5d71aa23192c48ae2b4605165bda8cdbe1acdccc1be0f6e068c7 = $this->env->getExtension("native_profiler");
        $__internal_7904536d654e5d71aa23192c48ae2b4605165bda8cdbe1acdccc1be0f6e068c7->enter($__internal_7904536d654e5d71aa23192c48ae2b4605165bda8cdbe1acdccc1be0f6e068c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tour list</h1>
<div class=\"table-responsive\">
    <table class=\"table table-hover records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Length</th>
                <th>Travel_type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : $this->getContext($context, "tours")));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tour_show", array("id" => $this->getAttribute($context["tour"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "length", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "traveltype", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tour_show", array("id" => $this->getAttribute($context["tour"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-share\"></span> Show</a>

                    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tour_edit", array("id" => $this->getAttribute($context["tour"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-edit\"></span> Edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
</div>
<a class=\"btn btn-success\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("tour_new");
        echo "\">Create a new entry</a>

";
        
        $__internal_7904536d654e5d71aa23192c48ae2b4605165bda8cdbe1acdccc1be0f6e068c7->leave($__internal_7904536d654e5d71aa23192c48ae2b4605165bda8cdbe1acdccc1be0f6e068c7_prof);

    }

    public function getTemplateName()
    {
        return "tour/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 37,  103 => 34,  92 => 29,  86 => 26,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tour list</h1>*/
/* <div class="table-responsive">*/
/*     <table class="table table-hover records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Length</th>*/
/*                 <th>Travel_type</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tour in tours %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tour_show', { 'id': tour.id }) }}">{{ tour.id }}</a></td>*/
/*                 <td>{{ tour.name }}</td>*/
/*                 <td>{{ tour.description }}</td>*/
/*                 <td>{{ tour.length }}</td>*/
/*                 <td>{{ tour.traveltype }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-info" href="{{ path('tour_show', { 'id': tour.id }) }}">*/
/*                         <span class="glyphicon glyphicon-share"></span> Show</a>*/
/* */
/*                     <a class="btn btn-sm btn-default" href="{{ path('tour_edit', { 'id': tour.id }) }}">*/
/*                         <span class="glyphicon glyphicon-edit"></span> Edit</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* <a class="btn btn-success" href="{{ path('tour_new') }}">Create a new entry</a>*/
/* */
/* {% endblock %}*/
/* */
