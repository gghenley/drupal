<?php

/* themes/adaptivetheme/at_core/templates/misc/feed-icon.html.twig */
class __TwigTemplate_2b97f99b5926fbcb9a53c34ae913b7b9c27d964fa949cfa92fcfe85e72bb15a4 extends Twig_Template
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
        $tags = array("set" => 28, "if" => 29);
        $filters = array("t" => 29);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 20
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "feed-icon"), "method"), "html", null, true));
        echo ">
  <svg version=\"1.1\" class=\"feed-icon-rss\" xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 20 20\">
    <g>
      <path class=\"feed-icon-rss__path\" d=\"M2.7,14.5c-0.8,0-1.4,0.3-1.9,0.8C0.3,15.9,0,16.5,0,17.3c0,0.8,0.3,1.4,0.8,1.9 C1.3,19.7,2,20,2.7,20s1.4-0.3,1.9-0.8c0.5-0.5,0.8-1.2,0.8-1.9c0-0.8-0.3-1.4-0.8-1.9C4.1,14.8,3.5,14.5,2.7,14.5z\"/>
      <path class=\"feed-icon-rss__path\" d=\"M9,11C7.9,9.9,6.7,9.1,5.3,8.4C3.9,7.8,2.5,7.4,1,7.3H0.9c-0.2,0-0.4,0.1-0.6,0.2 C0.1,7.7,0,7.9,0,8.2v1.9c0,0.2,0.1,0.4,0.2,0.6C0.4,10.9,0.6,11,0.8,11c2.2,0.2,4,1.1,5.6,2.6C7.9,15.2,8.8,17,9,19.2 c0,0.2,0.1,0.4,0.3,0.6C9.5,19.9,9.7,20,9.9,20h1.9c0.3,0,0.5-0.1,0.7-0.3c0.2-0.2,0.3-0.4,0.2-0.7c-0.1-1.5-0.5-3-1.1-4.3 C10.9,13.3,10.1,12.1,9,11z\"/>
      <path class=\"feed-icon-rss__path\" d=\"M18.3,11.9c-1-2.3-2.4-4.3-4.2-6c-1.8-1.8-3.8-3.2-6-4.2C5.8,0.7,3.4,0.1,1,0h0 C0.7,0,0.5,0.1,0.3,0.3C0.1,0.4,0,0.6,0,0.9v2c0,0.2,0.1,0.4,0.2,0.6s0.4,0.3,0.6,0.3c2,0.1,4,0.6,5.8,1.4s3.4,1.9,4.8,3.3 c1.3,1.3,2.4,2.9,3.3,4.8c0.8,1.8,1.3,3.8,1.4,5.8c0,0.2,0.1,0.4,0.3,0.6c0.2,0.2,0.4,0.2,0.6,0.2h2c0.3,0,0.5-0.1,0.7-0.3 c0.2-0.2,0.3-0.4,0.3-0.7C19.9,16.6,19.3,14.2,18.3,11.9z\"/>
    </g>
  </svg>";
        // line 28
        $context["feed_title"] = ((($context["title"] ?? null)) ? (($context["title"] ?? null)) : (""));
        // line 29
        echo "<span class=\"visually-hidden\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar("Subscribe"));
        if (($context["feed_title"] ?? null)) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Subscribe to @title", array("@title" => ($context["feed_title"] ?? null)))));
        }
        echo "</span>
</a>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/misc/feed-icon.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 29,  56 => 28,  43 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/misc/feed-icon.html.twig", "/Applications/MAMP/drupal/themes/adaptivetheme/at_core/templates/misc/feed-icon.html.twig");
    }
}
