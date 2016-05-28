<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6a02523be1460e12443076a982c8f13d98a11796ff08d420dd1fcdcee2bc6260 extends Twig_Template
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
        $__internal_b377d1f69d5b4809b312b5a08d6e8b65fc6c39c9bf2b5d7cee1c8c22dea696c8 = $this->env->getExtension("native_profiler");
        $__internal_b377d1f69d5b4809b312b5a08d6e8b65fc6c39c9bf2b5d7cee1c8c22dea696c8->enter($__internal_b377d1f69d5b4809b312b5a08d6e8b65fc6c39c9bf2b5d7cee1c8c22dea696c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b377d1f69d5b4809b312b5a08d6e8b65fc6c39c9bf2b5d7cee1c8c22dea696c8->leave($__internal_b377d1f69d5b4809b312b5a08d6e8b65fc6c39c9bf2b5d7cee1c8c22dea696c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
