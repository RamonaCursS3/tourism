<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_2162fd15c241a9da6e4bcd67b8913aeb5b27b6057e9b100622f581fc8890762c extends Twig_Template
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
        $__internal_db7d440f9510a3d648b20d88bfa20712870bcadf7f27a0605fe54877d3e78b0a = $this->env->getExtension("native_profiler");
        $__internal_db7d440f9510a3d648b20d88bfa20712870bcadf7f27a0605fe54877d3e78b0a->enter($__internal_db7d440f9510a3d648b20d88bfa20712870bcadf7f27a0605fe54877d3e78b0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_db7d440f9510a3d648b20d88bfa20712870bcadf7f27a0605fe54877d3e78b0a->leave($__internal_db7d440f9510a3d648b20d88bfa20712870bcadf7f27a0605fe54877d3e78b0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
