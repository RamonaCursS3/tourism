<?php

/* :city:show.html.twig */
class __TwigTemplate_ab0ed7910bf215b8847fa8a56b635f400da6eb1806fe66e89e0d7a4e1da9a504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":city:show.html.twig", 1);
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
        $__internal_dea341172468e6838c86a7c815e9b7b7478352171ed8141a013747c30376f716 = $this->env->getExtension("native_profiler");
        $__internal_dea341172468e6838c86a7c815e9b7b7478352171ed8141a013747c30376f716->enter($__internal_dea341172468e6838c86a7c815e9b7b7478352171ed8141a013747c30376f716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":city:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dea341172468e6838c86a7c815e9b7b7478352171ed8141a013747c30376f716->leave($__internal_dea341172468e6838c86a7c815e9b7b7478352171ed8141a013747c30376f716_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_505d9428fbf9d74a64269b5ce0f1469064850889c3957d8097dab06d78d5f353 = $this->env->getExtension("native_profiler");
        $__internal_505d9428fbf9d74a64269b5ce0f1469064850889c3957d8097dab06d78d5f353->enter($__internal_505d9428fbf9d74a64269b5ce0f1469064850889c3957d8097dab06d78d5f353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>City</h1>
<div class=\"col-lg-4\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-info\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("city_index");
        echo "\">Back to the list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("city_edit", array("id" => $this->getAttribute((isset($context["city"]) ? $context["city"] : $this->getContext($context, "city")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    ";
        // line 30
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_505d9428fbf9d74a64269b5ce0f1469064850889c3957d8097dab06d78d5f353->leave($__internal_505d9428fbf9d74a64269b5ce0f1469064850889c3957d8097dab06d78d5f353_prof);

    }

    public function getTemplateName()
    {
        return ":city:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  81 => 28,  76 => 26,  71 => 24,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>City</h1>*/
/* <div class="col-lg-4">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ city.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ city.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ city.location }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <a class="btn btn-info" href="{{ path('city_index') }}">Back to the list</a>*/
/* */
/*     <a class="btn btn-warning" href="{{ path('city_edit', { 'id': city.id }) }}">Edit</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
