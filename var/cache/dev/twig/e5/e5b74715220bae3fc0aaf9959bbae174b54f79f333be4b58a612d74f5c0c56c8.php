<?php

/* :touristattraction:show.html.twig */
class __TwigTemplate_10a3d81cec82afaf734945f2b26ce5637e165a49f5a31ba5b3322684e42cb1fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":touristattraction:show.html.twig", 1);
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
        $__internal_4a28c5eed066b2ac12dd82a4397151c20bed39a5c811160bca1af57937a02e77 = $this->env->getExtension("native_profiler");
        $__internal_4a28c5eed066b2ac12dd82a4397151c20bed39a5c811160bca1af57937a02e77->enter($__internal_4a28c5eed066b2ac12dd82a4397151c20bed39a5c811160bca1af57937a02e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":touristattraction:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a28c5eed066b2ac12dd82a4397151c20bed39a5c811160bca1af57937a02e77->leave($__internal_4a28c5eed066b2ac12dd82a4397151c20bed39a5c811160bca1af57937a02e77_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94eebc9593cddb15d0f7b55868a95b42b98bb0253b6a5d12ab4aa1d523103539 = $this->env->getExtension("native_profiler");
        $__internal_94eebc9593cddb15d0f7b55868a95b42b98bb0253b6a5d12ab4aa1d523103539->enter($__internal_94eebc9593cddb15d0f7b55868a95b42b98bb0253b6a5d12ab4aa1d523103539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TouristAttraction</h1>
<div class=\"col-lg-4\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered table-hover record_properties\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contact_details</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "contactdetails", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Website</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "website", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Opening_hours</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "openinghours", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
</div>
    <a class=\"btn btn-info\" href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("touristattraction_index");
        echo "\">Back to the list</a>

    <a class=\"btn btn-warning\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("touristattraction_edit", array("id" => $this->getAttribute((isset($context["touristAttraction"]) ? $context["touristAttraction"] : $this->getContext($context, "touristAttraction")), "id", array()))), "html", null, true);
        echo "\">Edit</a>

    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <input class=\"btn btn-danger\" type=\"submit\" value=\"Delete\">
    ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
</div>
";
        
        $__internal_94eebc9593cddb15d0f7b55868a95b42b98bb0253b6a5d12ab4aa1d523103539->leave($__internal_94eebc9593cddb15d0f7b55868a95b42b98bb0253b6a5d12ab4aa1d523103539_prof);

    }

    public function getTemplateName()
    {
        return ":touristattraction:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 42,  102 => 40,  97 => 38,  92 => 36,  84 => 31,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TouristAttraction</h1>*/
/* <div class="col-lg-4">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered table-hover record_properties">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ touristAttraction.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ touristAttraction.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ touristAttraction.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contact_details</th>*/
/*                 <td>{{ touristAttraction.contactdetails }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Website</th>*/
/*                 <td>{{ touristAttraction.website }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Opening_hours</th>*/
/*                 <td>{{ touristAttraction.openinghours }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <a class="btn btn-info" href="{{ path('touristattraction_index') }}">Back to the list</a>*/
/* */
/*     <a class="btn btn-warning" href="{{ path('touristattraction_edit', { 'id': touristAttraction.id }) }}">Edit</a>*/
/* */
/*     {{ form_start(delete_form) }}*/
/*         <input class="btn btn-danger" type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/* </div>*/
/* {% endblock %}*/
/* */
