<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_96f8faea6a94ea77d70ac5a501f03a6b025f60877e6043c37d64ff5cd7cba9b0 extends Twig_Template
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
        $__internal_a4baca6fe93b4a0779f4da242db3557228b142ffc649e1ea8cbfb48e02e552e3 = $this->env->getExtension("native_profiler");
        $__internal_a4baca6fe93b4a0779f4da242db3557228b142ffc649e1ea8cbfb48e02e552e3->enter($__internal_a4baca6fe93b4a0779f4da242db3557228b142ffc649e1ea8cbfb48e02e552e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a4baca6fe93b4a0779f4da242db3557228b142ffc649e1ea8cbfb48e02e552e3->leave($__internal_a4baca6fe93b4a0779f4da242db3557228b142ffc649e1ea8cbfb48e02e552e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
