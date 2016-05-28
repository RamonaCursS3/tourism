<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5816f0e0d2d70bba7c7c64398db8608a3567c54cf3b14effb2d24a806bd3ea42 extends Twig_Template
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
        $__internal_c124bb8587380622d1db24908243a550861a371db11222e198b4a76a57c15d39 = $this->env->getExtension("native_profiler");
        $__internal_c124bb8587380622d1db24908243a550861a371db11222e198b4a76a57c15d39->enter($__internal_c124bb8587380622d1db24908243a550861a371db11222e198b4a76a57c15d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c124bb8587380622d1db24908243a550861a371db11222e198b4a76a57c15d39->leave($__internal_c124bb8587380622d1db24908243a550861a371db11222e198b4a76a57c15d39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
