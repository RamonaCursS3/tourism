<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_06d3dfebc75c113ff171a969b44e11554d5b80c952e753c4eecc6ceb826371e3 extends Twig_Template
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
        $__internal_46607d24b9174d6869800c2af7a0679c05b28fccca376fd7f70d1b69a14f3035 = $this->env->getExtension("native_profiler");
        $__internal_46607d24b9174d6869800c2af7a0679c05b28fccca376fd7f70d1b69a14f3035->enter($__internal_46607d24b9174d6869800c2af7a0679c05b28fccca376fd7f70d1b69a14f3035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_46607d24b9174d6869800c2af7a0679c05b28fccca376fd7f70d1b69a14f3035->leave($__internal_46607d24b9174d6869800c2af7a0679c05b28fccca376fd7f70d1b69a14f3035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
