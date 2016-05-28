<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f165a12788c8368c74253f9461f76c393a3f7264e2f5d14d7b1ac2d6985cd87e extends Twig_Template
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
        $__internal_b02930162cb92e254e15b100a1941f55c3ddc5e6ba80c2bed35f2f3d491fe5ed = $this->env->getExtension("native_profiler");
        $__internal_b02930162cb92e254e15b100a1941f55c3ddc5e6ba80c2bed35f2f3d491fe5ed->enter($__internal_b02930162cb92e254e15b100a1941f55c3ddc5e6ba80c2bed35f2f3d491fe5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b02930162cb92e254e15b100a1941f55c3ddc5e6ba80c2bed35f2f3d491fe5ed->leave($__internal_b02930162cb92e254e15b100a1941f55c3ddc5e6ba80c2bed35f2f3d491fe5ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
