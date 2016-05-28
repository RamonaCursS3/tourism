<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_f14319751d2754920d28073444caf5f8fb407ef836c890bea4ba54955437914c extends Twig_Template
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
        $__internal_39cbb616dc2c8681b2c060ca5ca4eeccf23a4d68e12a01f296ba4710c11803be = $this->env->getExtension("native_profiler");
        $__internal_39cbb616dc2c8681b2c060ca5ca4eeccf23a4d68e12a01f296ba4710c11803be->enter($__internal_39cbb616dc2c8681b2c060ca5ca4eeccf23a4d68e12a01f296ba4710c11803be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_39cbb616dc2c8681b2c060ca5ca4eeccf23a4d68e12a01f296ba4710c11803be->leave($__internal_39cbb616dc2c8681b2c060ca5ca4eeccf23a4d68e12a01f296ba4710c11803be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
