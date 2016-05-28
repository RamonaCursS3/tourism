<?php

/* :touristattraction:index.html.twig */
class __TwigTemplate_802663d0b25e3a2fe615d235608ff60222ceb37683445978b40baa64fb209eab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":touristattraction:index.html.twig", 1);
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
        $__internal_dd37bfbcf8621abc267d40020d8eb5e2796b04d3371fe87b381d87abdd821337 = $this->env->getExtension("native_profiler");
        $__internal_dd37bfbcf8621abc267d40020d8eb5e2796b04d3371fe87b381d87abdd821337->enter($__internal_dd37bfbcf8621abc267d40020d8eb5e2796b04d3371fe87b381d87abdd821337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":touristattraction:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd37bfbcf8621abc267d40020d8eb5e2796b04d3371fe87b381d87abdd821337->leave($__internal_dd37bfbcf8621abc267d40020d8eb5e2796b04d3371fe87b381d87abdd821337_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_991fe804e54ef3204a8b9887316d15153c3b3aa0d2436c5aab6329d49f223bbf = $this->env->getExtension("native_profiler");
        $__internal_991fe804e54ef3204a8b9887316d15153c3b3aa0d2436c5aab6329d49f223bbf->enter($__internal_991fe804e54ef3204a8b9887316d15153c3b3aa0d2436c5aab6329d49f223bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TouristAttraction list</h1>
<div class=\"table-responsive\">
    <table class=\"table table-hover records_list\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Contact_details</th>
                <th>Website</th>
                <th>Opening_hours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["touristAttractions"]) ? $context["touristAttractions"] : $this->getContext($context, "touristAttractions")));
        foreach ($context['_seq'] as $context["_key"] => $context["touristAttraction"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("touristattraction_show", array("id" => $this->getAttribute($context["touristAttraction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "contactdetails", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "website", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["touristAttraction"], "openinghours", array()), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-sm btn-info\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("touristAttraction_show", array("id" => $this->getAttribute($context["touristAttraction"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-share\"></span> Show</a>

                    <a class=\"btn btn-sm btn-default\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("touristAttraction_edit", array("id" => $this->getAttribute($context["touristAttraction"], "id", array()))), "html", null, true);
            echo "\">
                        <span class=\"glyphicon glyphicon-edit\"></span> Edit</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['touristAttraction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </tbody>
    </table>
</div>
<a class=\"btn btn-success\" href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("touristattraction_new");
        echo "\">Create a new entry</a>

";
        
        $__internal_991fe804e54ef3204a8b9887316d15153c3b3aa0d2436c5aab6329d49f223bbf->leave($__internal_991fe804e54ef3204a8b9887316d15153c3b3aa0d2436c5aab6329d49f223bbf_prof);

    }

    public function getTemplateName()
    {
        return ":touristattraction:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 39,  108 => 36,  97 => 31,  91 => 28,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TouristAttraction list</h1>*/
/* <div class="table-responsive">*/
/*     <table class="table table-hover records_list">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Contact_details</th>*/
/*                 <th>Website</th>*/
/*                 <th>Opening_hours</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for touristAttraction in touristAttractions %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('touristattraction_show', { 'id': touristAttraction.id }) }}">{{ touristAttraction.id }}</a></td>*/
/*                 <td>{{ touristAttraction.name }}</td>*/
/*                 <td>{{ touristAttraction.description }}</td>*/
/*                 <td>{{ touristAttraction.contactdetails }}</td>*/
/*                 <td>{{ touristAttraction.website }}</td>*/
/*                 <td>{{ touristAttraction.openinghours }}</td>*/
/*                 <td>*/
/*                     <a class="btn btn-sm btn-info" href="{{ path('touristAttraction_show', { 'id': touristAttraction.id }) }}">*/
/*                         <span class="glyphicon glyphicon-share"></span> Show</a>*/
/* */
/*                     <a class="btn btn-sm btn-default" href="{{ path('touristAttraction_edit', { 'id': touristAttraction.id }) }}">*/
/*                         <span class="glyphicon glyphicon-edit"></span> Edit</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/* <a class="btn btn-success" href="{{ path('touristattraction_new') }}">Create a new entry</a>*/
/* */
/* {% endblock %}*/
/* */
