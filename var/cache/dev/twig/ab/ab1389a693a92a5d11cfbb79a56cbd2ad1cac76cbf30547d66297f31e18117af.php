<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3d3f10a70f392f152d3fb1d15d2e1119ce91d67101b16c7e9d19cfcc7d44c1bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da3d005552b13d675bff4e06ff52276952331fc556a0794c3a14c8f4a1665fdf = $this->env->getExtension("native_profiler");
        $__internal_da3d005552b13d675bff4e06ff52276952331fc556a0794c3a14c8f4a1665fdf->enter($__internal_da3d005552b13d675bff4e06ff52276952331fc556a0794c3a14c8f4a1665fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_da3d005552b13d675bff4e06ff52276952331fc556a0794c3a14c8f4a1665fdf->leave($__internal_da3d005552b13d675bff4e06ff52276952331fc556a0794c3a14c8f4a1665fdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
