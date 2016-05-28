<?php

/* tour/show.html.twig */
class __TwigTemplate_52a4be9827e606400945c5905361f5780eda0c63f21bc1d64c14b88293873cfc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "tour/show.html.twig", 1);
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
        $__internal_298aefcfe19fd028312ba0a0f6785815245e95c49455acb10472b17c3ccbc26d = $this->env->getExtension("native_profiler");
        $__internal_298aefcfe19fd028312ba0a0f6785815245e95c49455acb10472b17c3ccbc26d->enter($__internal_298aefcfe19fd028312ba0a0f6785815245e95c49455acb10472b17c3ccbc26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tour/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_298aefcfe19fd028312ba0a0f6785815245e95c49455acb10472b17c3ccbc26d->leave($__internal_298aefcfe19fd028312ba0a0f6785815245e95c49455acb10472b17c3ccbc26d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0926ee4942c1e4e6540b3af1bc2faf99b299eaaf2bc36c757dc4c30c6d84c09f = $this->env->getExtension("native_profiler");
        $__internal_0926ee4942c1e4e6540b3af1bc2faf99b299eaaf2bc36c757dc4c30c6d84c09f->enter($__internal_0926ee4942c1e4e6540b3af1bc2faf99b299eaaf2bc36c757dc4c30c6d84c09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Tour</h1>
<div class=\"col-lg-4\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Length</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "length", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Travel_type</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "traveltype", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-info\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("tour_index");
        echo "\">Back to the list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tour_edit", array("id" => $this->getAttribute((isset($context["tour"]) ? $context["tour"] : $this->getContext($context, "tour")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_0926ee4942c1e4e6540b3af1bc2faf99b299eaaf2bc36c757dc4c30c6d84c09f->leave($__internal_0926ee4942c1e4e6540b3af1bc2faf99b299eaaf2bc36c757dc4c30c6d84c09f_prof);

    }

    public function getTemplateName()
    {
        return "tour/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 38,  95 => 36,  90 => 34,  85 => 32,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Tour</h1>*/
/* <div class="col-lg-4">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ tour.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ tour.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ tour.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Length</th>*/
/*                 <td>{{ tour.length }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Travel_type</th>*/
/*                 <td>{{ tour.traveltype }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <a class="btn btn-info" href="{{ path('tour_index') }}">Back to the list</a>*/
/* */
/*     <a class="btn btn-warning" href="{{ path('tour_edit', { 'id': tour.id }) }}">Edit</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
