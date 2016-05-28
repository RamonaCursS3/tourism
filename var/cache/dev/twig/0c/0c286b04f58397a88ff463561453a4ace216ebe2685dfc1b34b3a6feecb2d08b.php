<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_782cd0b0e4489424238fb592f4c964d509fbd8d8ac24f84e96c817bc3de9d4b5 extends Twig_Template
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
        $__internal_b905011c88b487cff6fb7c95939252a816c0af6744d9dc23740c1e000fd90d5d = $this->env->getExtension("native_profiler");
        $__internal_b905011c88b487cff6fb7c95939252a816c0af6744d9dc23740c1e000fd90d5d->enter($__internal_b905011c88b487cff6fb7c95939252a816c0af6744d9dc23740c1e000fd90d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b905011c88b487cff6fb7c95939252a816c0af6744d9dc23740c1e000fd90d5d->leave($__internal_b905011c88b487cff6fb7c95939252a816c0af6744d9dc23740c1e000fd90d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
