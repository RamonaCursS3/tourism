<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b141e78a24ed48a0ec4fa66acb73c064222228faef145b4bc6cd65f7d863ca3f extends Twig_Template
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
        $__internal_b02bc7d4bc60378ebf49172e38d132170a4699d079a25c5c3d7b4db93db33609 = $this->env->getExtension("native_profiler");
        $__internal_b02bc7d4bc60378ebf49172e38d132170a4699d079a25c5c3d7b4db93db33609->enter($__internal_b02bc7d4bc60378ebf49172e38d132170a4699d079a25c5c3d7b4db93db33609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b02bc7d4bc60378ebf49172e38d132170a4699d079a25c5c3d7b4db93db33609->leave($__internal_b02bc7d4bc60378ebf49172e38d132170a4699d079a25c5c3d7b4db93db33609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
