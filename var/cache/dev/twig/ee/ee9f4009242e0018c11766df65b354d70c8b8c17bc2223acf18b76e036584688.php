<?php

/* touristattraction/new.html.twig */
class __TwigTemplate_bf15c31d2fb350b6cc3f5bdf7e97038673ddd524b21725793e307aae930fec89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "touristattraction/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed90cd86f97b2e9c72d368e11c659a49f6068eaed35edc518870aab22ce093c5 = $this->env->getExtension("native_profiler");
        $__internal_ed90cd86f97b2e9c72d368e11c659a49f6068eaed35edc518870aab22ce093c5->enter($__internal_ed90cd86f97b2e9c72d368e11c659a49f6068eaed35edc518870aab22ce093c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "touristattraction/new.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => ":Form:fields.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed90cd86f97b2e9c72d368e11c659a49f6068eaed35edc518870aab22ce093c5->leave($__internal_ed90cd86f97b2e9c72d368e11c659a49f6068eaed35edc518870aab22ce093c5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f201b32405eccdb85dd9358c389f6f79d885a942e4c36b4268e5154e4e648241 = $this->env->getExtension("native_profiler");
        $__internal_f201b32405eccdb85dd9358c389f6f79d885a942e4c36b4268e5154e4e648241->enter($__internal_f201b32405eccdb85dd9358c389f6f79d885a942e4c36b4268e5154e4e648241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TouristAttraction creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "
    ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <div class=\"form-group\">
                ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "Name"));
        echo "
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>     
            <div class=\"form-group\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "Description"));
        echo "
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>  
            <div class=\"form-group\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_details", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "Contact details"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_details", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "contact_details", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>              
            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "Website"));
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "website", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>              
            <div class=\"form-group\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opening_hours", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "Opening hours"));
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opening_hours", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "opening_hours", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>      
            <div class=\"form-group\">
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'label', array("label_attr" => array("class" => "col-lg-4 control-label"), "label" => "City"));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
                <div class=\"col-lg-6\">
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>   
        </div>   
    </div>
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <div class=\"form-group\">
                <div class=\"wrap-playvideos\">
                    <h3>Tourist Attraction images</h3>
                    <ul style=\"list-style: none\" class=\"images\" data-prototype=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "\">
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 61
            echo "                            <li>";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["image"], 'widget');
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </ul>         
                </div>
            </div>
        </div> 
    </div>
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"form-group\">
                    <div class=\"col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-2\">
                        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget', array("label" => "Create", "attr" => array("class" => "btn btn-success")));
        echo "
                    </div>
                </div>                       
            </div>
       </div>
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "images", array()), 'widget');
        echo "
    ";
        // line 78
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <a class=\"btn btn-info\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("touristattraction_index");
        echo "\">Back to the list</a>
";
        
        $__internal_f201b32405eccdb85dd9358c389f6f79d885a942e4c36b4268e5154e4e648241->leave($__internal_f201b32405eccdb85dd9358c389f6f79d885a942e4c36b4268e5154e4e648241_prof);

    }

    // line 82
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_e7baa8f7098bc89a8af52c546df89478ae08459f461bf324db144df5afd53a87 = $this->env->getExtension("native_profiler");
        $__internal_e7baa8f7098bc89a8af52c546df89478ae08459f461bf324db144df5afd53a87->enter($__internal_e7baa8f7098bc89a8af52c546df89478ae08459f461bf324db144df5afd53a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 83
        echo "     ";
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "
     <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/tourist_attraction.js"), "html", null, true);
        echo "\"></script>    
     
";
        
        $__internal_e7baa8f7098bc89a8af52c546df89478ae08459f461bf324db144df5afd53a87->leave($__internal_e7baa8f7098bc89a8af52c546df89478ae08459f461bf324db144df5afd53a87_prof);

    }

    public function getTemplateName()
    {
        return "touristattraction/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 84,  221 => 83,  215 => 82,  206 => 80,  201 => 78,  197 => 77,  189 => 72,  178 => 63,  169 => 61,  165 => 60,  161 => 59,  148 => 49,  143 => 47,  139 => 46,  132 => 42,  127 => 40,  123 => 39,  116 => 35,  111 => 33,  107 => 32,  100 => 28,  95 => 26,  91 => 25,  84 => 21,  79 => 19,  75 => 18,  68 => 14,  63 => 12,  59 => 11,  52 => 7,  48 => 6,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% form_theme form ':Form:fields.html.twig' %}*/
/* {% block body %}*/
/*     <h1>TouristAttraction creation</h1>*/
/* */
/*     {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/*     {{ form_errors(form) }}*/
/*     <div class="row">*/
/*         <div class="col-lg-6">*/
/*             <div class="form-group">*/
/*                 {{ form_label(form.name, 'Name', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.name) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.name, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>     */
/*             <div class="form-group">*/
/*                 {{ form_label(form.description, 'Description', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.description) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>  */
/*             <div class="form-group">*/
/*                 {{ form_label(form.contact_details, 'Contact details', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.contact_details) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.contact_details, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>              */
/*             <div class="form-group">*/
/*                 {{ form_label(form.website, 'Website', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.website) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.website, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>              */
/*             <div class="form-group">*/
/*                 {{ form_label(form.opening_hours, 'Opening hours', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.opening_hours) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.opening_hours, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>      */
/*             <div class="form-group">*/
/*                 {{ form_label(form.city, 'City', {'label_attr': {'class': 'col-lg-4 control-label'}}) }}*/
/*                 {{ form_errors(form.city) }}*/
/*                 <div class="col-lg-6">*/
/*                     {{ form_widget(form.city, {'attr': {'class': 'form-control'}}) }}*/
/*                 </div>*/
/*             </div>   */
/*         </div>   */
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-lg-12">*/
/*             <div class="form-group">*/
/*                 <div class="wrap-playvideos">*/
/*                     <h3>Tourist Attraction images</h3>*/
/*                     <ul style="list-style: none" class="images" data-prototype="{{ form_widget(form.images.vars.prototype)|e }}">*/
/*                         {% for image in form.images %}*/
/*                             <li>{{ form_widget(image) }}</li>*/
/*                         {% endfor %}*/
/*                     </ul>         */
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*     </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-6">*/
/*                 <div class="form-group">*/
/*                     <div class="col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-2">*/
/*                         {{ form_widget(form.submit, { 'label': 'Create', 'attr': {'class': 'btn btn-success'}}) }}*/
/*                     </div>*/
/*                 </div>                       */
/*             </div>*/
/*        </div>*/
/*         {{ form_widget(form.images) }}*/
/*     {{ form_end(form) }}*/
/* */
/*     <a class="btn btn-info" href="{{ path('touristattraction_index') }}">Back to the list</a>*/
/* {% endblock %}*/
/* {% block javascript %}*/
/*      {{ parent() }}*/
/*      <script type="text/javascript" src="{{ asset('js/tourist_attraction.js') }}"></script>    */
/*      */
/* {% endblock %}*/
