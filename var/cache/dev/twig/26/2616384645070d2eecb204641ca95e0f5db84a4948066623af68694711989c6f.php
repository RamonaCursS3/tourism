<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_27b14716dd15ccb1669fb30926d6a83fcf40c52def738cd4dd356536f2bff5b1 extends Twig_Template
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
        $__internal_723a545e700f8906919b1cf9a8e6dedb2f9da24a67dcc70a3f875f6aba536140 = $this->env->getExtension("native_profiler");
        $__internal_723a545e700f8906919b1cf9a8e6dedb2f9da24a67dcc70a3f875f6aba536140->enter($__internal_723a545e700f8906919b1cf9a8e6dedb2f9da24a67dcc70a3f875f6aba536140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_723a545e700f8906919b1cf9a8e6dedb2f9da24a67dcc70a3f875f6aba536140->leave($__internal_723a545e700f8906919b1cf9a8e6dedb2f9da24a67dcc70a3f875f6aba536140_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
