<?php

/* themes/adaptivetheme/at_core/templates/content/taxonomy-term.html.twig */
class __TwigTemplate_2000319826434dbb18cabffb7cc39db4a64b701b41ad89cb23a90edeb7493ed8 extends Twig_Template
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
        $tags = array("set" => 27, "if" => 33);
        $filters = array("clean_class" => 29, "trim" => 49);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'trim'),
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

        // line 27
        $context["classes"] = array(0 => "taxonomy-term", 1 => ((        // line 29
($context["view_mode"] ?? null)) ? (("taxonomy-term--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 2 => ("vocabulary-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 30
($context["term"] ?? null), "bundle", array()))));
        // line 33
        if ((($context["view_mode"] ?? null) == "default")) {
            // line 34
            echo "  ";
            $context["html_element"] = "article";
        } else {
            // line 36
            echo "  ";
            $context["html_element"] = "section";
        }
        // line 38
        echo "<";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_element"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "setAttribute", array(0 => "id", 1 => ("taxonomy-term-" . $this->getAttribute(($context["term"] ?? null), "id", array()))), "method"), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">

  ";
        // line 40
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 41
        if ( !($context["page"] ?? null)) {
            // line 42
            echo "    <h2 class=\"taxonomy-term__title\"><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["name"] ?? null), "html", null, true));
            echo "</a></h2>
  ";
        }
        // line 44
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "

  ";
        // line 46
        ob_start();
        // line 47
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        $context["content_rendered"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "  ";
        if ( !twig_test_empty(twig_trim_filter(($context["content_rendered"] ?? null)))) {
            // line 50
            echo "    <div class=\"taxonomy-term__content\">
      ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content_rendered"] ?? null), "html", null, true));
            echo "
    </div>
  ";
        }
        // line 54
        echo "
</";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["html_element"] ?? null), "html", null, true));
        echo ">
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/content/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  104 => 54,  98 => 51,  95 => 50,  92 => 49,  86 => 47,  84 => 46,  78 => 44,  70 => 42,  68 => 41,  64 => 40,  57 => 38,  53 => 36,  49 => 34,  47 => 33,  45 => 30,  44 => 29,  43 => 27,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/content/taxonomy-term.html.twig", "/Applications/MAMP/drupal/themes/adaptivetheme/at_core/templates/content/taxonomy-term.html.twig");
    }
}
