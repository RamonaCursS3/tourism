<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_25bf460d4b08d6dba64ad50fe4e93ed412980e7443251b569154f8e6ebbfb96f extends Twig_Template
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
        $__internal_dd27ab372379993c136483fb1f48dcbf6a922459a3d5fb3f03bb7425409ffb28 = $this->env->getExtension("native_profiler");
        $__internal_dd27ab372379993c136483fb1f48dcbf6a922459a3d5fb3f03bb7425409ffb28->enter($__internal_dd27ab372379993c136483fb1f48dcbf6a922459a3d5fb3f03bb7425409ffb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_dd27ab372379993c136483fb1f48dcbf6a922459a3d5fb3f03bb7425409ffb28->leave($__internal_dd27ab372379993c136483fb1f48dcbf6a922459a3d5fb3f03bb7425409ffb28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
