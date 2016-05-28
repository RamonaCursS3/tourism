<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_26f4e1fb1e05d81a44301701068e4f1e5fd42cad355796943913ff3bd2ef4709 extends Twig_Template
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
        $__internal_ba7d8e36e3701931790aa6d1a80c871770bdb76548118cb636df3355b9184130 = $this->env->getExtension("native_profiler");
        $__internal_ba7d8e36e3701931790aa6d1a80c871770bdb76548118cb636df3355b9184130->enter($__internal_ba7d8e36e3701931790aa6d1a80c871770bdb76548118cb636df3355b9184130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ba7d8e36e3701931790aa6d1a80c871770bdb76548118cb636df3355b9184130->leave($__internal_ba7d8e36e3701931790aa6d1a80c871770bdb76548118cb636df3355b9184130_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
