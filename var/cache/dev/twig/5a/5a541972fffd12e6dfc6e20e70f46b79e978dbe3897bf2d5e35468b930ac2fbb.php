<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_052131ac0addb0386304760faeb90c513848e8f0e76ccba4d9834141a6ae5ffd extends Twig_Template
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
        $__internal_c6743058a27e9fceb5dddf87dd73738ba1de8b75a6a8753f50c39f5e5b016bdd = $this->env->getExtension("native_profiler");
        $__internal_c6743058a27e9fceb5dddf87dd73738ba1de8b75a6a8753f50c39f5e5b016bdd->enter($__internal_c6743058a27e9fceb5dddf87dd73738ba1de8b75a6a8753f50c39f5e5b016bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c6743058a27e9fceb5dddf87dd73738ba1de8b75a6a8753f50c39f5e5b016bdd->leave($__internal_c6743058a27e9fceb5dddf87dd73738ba1de8b75a6a8753f50c39f5e5b016bdd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
