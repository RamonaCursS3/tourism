<?php

/* city/show.html.twig */
class __TwigTemplate_94d46b88e704cc9953a9a74a7f9acc0aedc53a8120ffa15f4e6b91903ce2dc5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "city/show.html.twig", 1);
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
        $__internal_fe2b47df15de1eac403f0523a86836133946a690f4208e84bfff999136c7a602 = $this->env->getExtension("native_profiler");
        $__internal_fe2b47df15de1eac403f0523a86836133946a690f4208e84bfff999136c7a602->enter($__internal_fe2b47df15de1eac403f0523a86836133946a690f4208e84bfff999136c7a602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "city/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fe2b47df15de1eac403f0523a86836133946a690f4208e84bfff999136c7a602->leave($__internal_fe2b47df15de1eac403f0523a86836133946a690f4208e84bfff999136c7a602_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_90bbb5b9286499a5b6c7a39be99e8f52e223c299438f39de1a3343f679feca7c = $this->env->getExtension("native_profiler");
        $__internal_90bbb5b9286499a5b6c7a39be99e8f52e223c299438f39de1a3343f679feca7c->enter($__internal_90bbb5b9286499a5b6c7a39be99e8f52e223c299438f39de1a3343f679feca7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90bbb5b9286499a5b6c7a39be99e8f52e223c299438f39de1a3343f679feca7c->leave($__internal_90bbb5b9286499a5b6c7a39be99e8f52e223c299438f39de1a3343f679feca7c_prof);

    }

    public function getTemplateName()
    {
        return "city/show.html.twig";
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
