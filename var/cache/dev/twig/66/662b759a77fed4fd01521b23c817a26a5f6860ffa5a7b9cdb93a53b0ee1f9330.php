<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_72e8975ff136907e3e32acd7c72c7c2e247f346c430b48e7fc2c5ff6a208867c extends Twig_Template
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
        $__internal_77ff354b2f794e1772018b60c63362feceab8bc9b49879edaec9ea1fb50dee3c = $this->env->getExtension("native_profiler");
        $__internal_77ff354b2f794e1772018b60c63362feceab8bc9b49879edaec9ea1fb50dee3c->enter($__internal_77ff354b2f794e1772018b60c63362feceab8bc9b49879edaec9ea1fb50dee3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_77ff354b2f794e1772018b60c63362feceab8bc9b49879edaec9ea1fb50dee3c->leave($__internal_77ff354b2f794e1772018b60c63362feceab8bc9b49879edaec9ea1fb50dee3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
