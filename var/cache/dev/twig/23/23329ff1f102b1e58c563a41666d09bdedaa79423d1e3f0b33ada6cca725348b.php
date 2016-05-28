<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_39746ab71e20078a7823ced62b233b0dbcba594ab46f0ddc171d3aad6cdcc2de extends Twig_Template
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
        $__internal_2a7d30701e984c69db769c05ae3d2688b5fe32fdfae3125944be643e28d730f8 = $this->env->getExtension("native_profiler");
        $__internal_2a7d30701e984c69db769c05ae3d2688b5fe32fdfae3125944be643e28d730f8->enter($__internal_2a7d30701e984c69db769c05ae3d2688b5fe32fdfae3125944be643e28d730f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_2a7d30701e984c69db769c05ae3d2688b5fe32fdfae3125944be643e28d730f8->leave($__internal_2a7d30701e984c69db769c05ae3d2688b5fe32fdfae3125944be643e28d730f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
