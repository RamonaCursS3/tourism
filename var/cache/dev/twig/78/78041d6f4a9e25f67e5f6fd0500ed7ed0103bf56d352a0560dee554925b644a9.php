<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_8369263b345ad35993c5afee6c6d080fedc240b9e399356c5b9b62e955148260 extends Twig_Template
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
        $__internal_944ac9f765acbc8a15aa07de4ffb02c57dc4f7b2c4d71dff4ca93ca4f52075b9 = $this->env->getExtension("native_profiler");
        $__internal_944ac9f765acbc8a15aa07de4ffb02c57dc4f7b2c4d71dff4ca93ca4f52075b9->enter($__internal_944ac9f765acbc8a15aa07de4ffb02c57dc4f7b2c4d71dff4ca93ca4f52075b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_944ac9f765acbc8a15aa07de4ffb02c57dc4f7b2c4d71dff4ca93ca4f52075b9->leave($__internal_944ac9f765acbc8a15aa07de4ffb02c57dc4f7b2c4d71dff4ca93ca4f52075b9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
