<?php

/* :country:index.html.twig */
class __TwigTemplate_b5ba2b4eb90bdd880bf85f11cca1e4310d8b7a89a9268dae2af8992d06282215 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":country:index.html.twig", 1);
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
        $__internal_c35653d967d7b608283f7c77dee0d8e5744bcb724c071a45d1fe933e74017dec = $this->env->getExtension("native_profiler");
        $__internal_c35653d967d7b608283f7c77dee0d8e5744bcb724c071a45d1fe933e74017dec->enter($__internal_c35653d967d7b608283f7c77dee0d8e5744bcb724c071a45d1fe933e74017dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":country:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c35653d967d7b608283f7c77dee0d8e5744bcb724c071a45d1fe933e74017dec->leave($__internal_c35653d967d7b608283f7c77dee0d8e5744bcb724c071a45d1fe933e74017dec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_818ab5289cbc4bd8545ef171221c5df7f84fe93486fcf7b43146fd8e94ee1b91 = $this->env->getExtension("native_profiler");
        $__internal_818ab5289cbc4bd8545ef171221c5df7f84fe93486fcf7b43146fd8e94ee1b91->enter($__internal_818ab5289cbc4bd8545ef171221c5df7f84fe93486fcf7b43146fd8e94ee1b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Country list</h1>
<div class=\"table-responsive\">
    <table class=\"table table-hover records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Language</th>
                <th>Religion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : $this->getContext($context, "countries")));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("country_show", array("id" => $this->getAttribute($context["country"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "language", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "religion", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("country_show", array("id" => $this->getAttribute($context["country"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-share\"></span> Show</a>

                    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("country_edit", array("id" => $this->getAttribute($context["country"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-edit\"></span> Edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
</div>
<a class=\"btn btn-success\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("country_new");
        echo "\">Create a new entry</a>

";
        
        $__internal_818ab5289cbc4bd8545ef171221c5df7f84fe93486fcf7b43146fd8e94ee1b91->leave($__internal_818ab5289cbc4bd8545ef171221c5df7f84fe93486fcf7b43146fd8e94ee1b91_prof);

    }

    public function getTemplateName()
    {
        return ":country:index.html.twig";
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
/*     <h1>Country list</h1>*/
/* <div class="table-responsive">*/
/*     <table class="table table-hover records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Language</th>*/
/*                 <th>Religion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for country in countries %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('country_show', { 'id': country.id }) }}">{{ country.id }}</a></td>*/
/*                 <td>{{ country.name }}</td>*/
/*                 <td>{{ country.language }}</td>*/
/*                 <td>{{ country.religion }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-info" href="{{ path('country_show', { 'id': country.id }) }}">*/
/*                         <span class="glyphicon glyphicon-share"></span> Show</a>*/
/* */
/*                     <a class="btn btn-sm btn-default" href="{{ path('country_edit', { 'id': country.id }) }}">*/
/*                         <span class="glyphicon glyphicon-edit"></span> Edit</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* <a class="btn btn-success" href="{{ path('country_new') }}">Create a new entry</a>*/
/* */
/* {% endblock %}*/
/* */
