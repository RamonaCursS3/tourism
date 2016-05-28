<?php

/* :country:show.html.twig */
class __TwigTemplate_23a370e28dc8e7886fd44398d86898eaae922589a3f32910d02666722c68d5d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":country:show.html.twig", 1);
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
        $__internal_f40f66fdb9ed1eb342ec94a2dccee6c9493eb875e337151f58e6447c67c21a75 = $this->env->getExtension("native_profiler");
        $__internal_f40f66fdb9ed1eb342ec94a2dccee6c9493eb875e337151f58e6447c67c21a75->enter($__internal_f40f66fdb9ed1eb342ec94a2dccee6c9493eb875e337151f58e6447c67c21a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":country:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f40f66fdb9ed1eb342ec94a2dccee6c9493eb875e337151f58e6447c67c21a75->leave($__internal_f40f66fdb9ed1eb342ec94a2dccee6c9493eb875e337151f58e6447c67c21a75_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_671c32cf0700e7a57ae63c3ed1fd7072cc84c0a4aecf76f8a9fcf2b7bf2df92b = $this->env->getExtension("native_profiler");
        $__internal_671c32cf0700e7a57ae63c3ed1fd7072cc84c0a4aecf76f8a9fcf2b7bf2df92b->enter($__internal_671c32cf0700e7a57ae63c3ed1fd7072cc84c0a4aecf76f8a9fcf2b7bf2df92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1>Country</h1>
<div class=\"col-lg-4\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Language</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "language", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Religion</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "religion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-info\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("country_index");
        echo "\">Back to the list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("country_edit", array("id" => $this->getAttribute((isset($context["country"]) ? $context["country"] : $this->getContext($context, "country")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\"  type=\"submit\" value=\"Delete\">
    ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_671c32cf0700e7a57ae63c3ed1fd7072cc84c0a4aecf76f8a9fcf2b7bf2df92b->leave($__internal_671c32cf0700e7a57ae63c3ed1fd7072cc84c0a4aecf76f8a9fcf2b7bf2df92b_prof);

    }

    public function getTemplateName()
    {
        return ":country:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  88 => 33,  83 => 31,  78 => 29,  70 => 24,  63 => 20,  56 => 16,  49 => 12,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/*     <h1>Country</h1>*/
/* <div class="col-lg-4">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ country.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ country.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Language</th>*/
/*                 <td>{{ country.language }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Religion</th>*/
/*                 <td>{{ country.religion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <a class="btn btn-info" href="{{ path('country_index') }}">Back to the list</a>*/
/* */
/*     <a class="btn btn-warning" href="{{ path('country_edit', { 'id': country.id }) }}">Edit</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger"  type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
