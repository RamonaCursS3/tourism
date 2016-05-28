<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_08eb1aae664f8f2370314207e81c0e34edeafd8e74292debe813568b3094deae extends Twig_Template
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
        $__internal_6830d926e5fa4591fb57f0c6e5d0cedd8e1a17573eb84b3d227021141f43fbfb = $this->env->getExtension("native_profiler");
        $__internal_6830d926e5fa4591fb57f0c6e5d0cedd8e1a17573eb84b3d227021141f43fbfb->enter($__internal_6830d926e5fa4591fb57f0c6e5d0cedd8e1a17573eb84b3d227021141f43fbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6830d926e5fa4591fb57f0c6e5d0cedd8e1a17573eb84b3d227021141f43fbfb->leave($__internal_6830d926e5fa4591fb57f0c6e5d0cedd8e1a17573eb84b3d227021141f43fbfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
