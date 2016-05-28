<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a78d02429809c43015ecc20f3803523e095405de28b915f0b54db6eac67aab06 extends Twig_Template
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
        $__internal_dabe24e1d292e5381570e76b0b022a351a2d95bc77738ad86fdf508b7a8b8f81 = $this->env->getExtension("native_profiler");
        $__internal_dabe24e1d292e5381570e76b0b022a351a2d95bc77738ad86fdf508b7a8b8f81->enter($__internal_dabe24e1d292e5381570e76b0b022a351a2d95bc77738ad86fdf508b7a8b8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dabe24e1d292e5381570e76b0b022a351a2d95bc77738ad86fdf508b7a8b8f81->leave($__internal_dabe24e1d292e5381570e76b0b022a351a2d95bc77738ad86fdf508b7a8b8f81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
