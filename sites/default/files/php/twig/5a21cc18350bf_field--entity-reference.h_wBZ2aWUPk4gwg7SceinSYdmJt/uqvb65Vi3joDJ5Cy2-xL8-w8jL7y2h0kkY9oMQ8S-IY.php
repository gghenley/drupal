<?php

/* themes/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig */
class __TwigTemplate_6d1b40cbb20df9e705fab24f4b21a4abd49948ea6184b8f62912712b543b2ab9 extends Twig_Template
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
        $tags = array("set" => 40, "if" => 60, "for" => 64);
        $filters = array("clean_class" => 40);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class'),
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

        // line 40
        $context["field_name_class"] = \Drupal\Component\Utility\Html::getClass(($context["field_name"] ?? null));
        // line 42
        $context["classes"] = array(0 => "field", 1 => ((("field-" . \Drupal\Component\Utility\Html::getClass(        // line 44
($context["entity_type"] ?? null))) . "-") . ($context["field_name_class"] ?? null)), 2 => ((        // line 45
($context["field_entity_type"] ?? null)) ? (("field-entity-reference-type-" . \Drupal\Component\Utility\Html::getClass(($context["field_entity_type"] ?? null)))) : ("")), 3 => ((        // line 46
($context["field_formatter"] ?? null)) ? (("field-formatter-" . \Drupal\Component\Utility\Html::getClass(($context["field_formatter"] ?? null)))) : ("")), 4 => ("field-name-" .         // line 47
($context["field_name_class"] ?? null)), 5 => ("field-type-" . \Drupal\Component\Utility\Html::getClass(        // line 48
($context["field_type"] ?? null))), 6 => ("field-label-" .         // line 49
($context["label_display"] ?? null)), 7 => (((        // line 50
($context["label_display"] ?? null) == "inline")) ? ("clearfix") : ("")));
        // line 54
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 56
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 59
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">";
        // line 60
        if ( !($context["label_hidden"] ?? null)) {
            // line 61
            echo "<h3";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</h3>";
        }
        // line 63
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "field__items"), "method"), "html", null, true));
        echo ">";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 66
            $context["item_classes"] = array(0 => "field__item", 1 => (($this->getAttribute($this->getAttribute(            // line 68
$context["item"], "content", array()), "#title", array(), "array")) ? (("field__item--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute($context["item"], "content", array()), "#title", array(), "array")))) : ("")));
            // line 71
            echo "<div";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
            echo ">
        <span class=\"field__item-wrapper\">";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "</span>
      </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 75,  86 => 72,  81 => 71,  79 => 68,  78 => 66,  74 => 64,  70 => 63,  63 => 61,  61 => 60,  57 => 59,  55 => 56,  54 => 54,  52 => 50,  51 => 49,  50 => 48,  49 => 47,  48 => 46,  47 => 45,  46 => 44,  45 => 42,  43 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig", "/Applications/MAMP/drupal/themes/adaptivetheme/at_core/templates/field/field--entity-reference.html.twig");
    }
}
