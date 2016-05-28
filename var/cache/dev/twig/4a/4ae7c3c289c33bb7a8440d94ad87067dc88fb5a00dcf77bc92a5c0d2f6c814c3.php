<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_f4cc8298eb6a817b840c308c12bd3afd98c3aacf8b1ff625af2ebdcc61745a52 extends Twig_Template
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
        $__internal_585b536266cbc13aac0ffe7af394a6b5a1227475461b7bf82263a73fe937e037 = $this->env->getExtension("native_profiler");
        $__internal_585b536266cbc13aac0ffe7af394a6b5a1227475461b7bf82263a73fe937e037->enter($__internal_585b536266cbc13aac0ffe7af394a6b5a1227475461b7bf82263a73fe937e037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_585b536266cbc13aac0ffe7af394a6b5a1227475461b7bf82263a73fe937e037->leave($__internal_585b536266cbc13aac0ffe7af394a6b5a1227475461b7bf82263a73fe937e037_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
