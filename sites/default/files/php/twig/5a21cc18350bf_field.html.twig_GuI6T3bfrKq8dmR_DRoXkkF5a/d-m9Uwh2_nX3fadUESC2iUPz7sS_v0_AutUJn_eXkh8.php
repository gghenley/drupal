<?php

/* field.html.twig */
class __TwigTemplate_b80451acfe7fd44d2debf117609fda05d71ff74ee6db96e1c904bef9212196ee extends Twig_Template
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
        $tags = array("set" => 8, "if" => 21, "for" => 27);
        $filters = array("clean_class" => 10, "default" => 22);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array('clean_class', 'default'),
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

        // line 8
        $context["classes"] = array(0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass(        // line 10
($context["field_name"] ?? null))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass(        // line 11
($context["field_type"] ?? null))), 3 => ("field--label-" .         // line 12
($context["label_display"] ?? null)));
        // line 16
        $context["title_classes"] = array(0 => "field__label", 1 => (((        // line 18
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : ("")));
        // line 21
        if (($context["display_field_tag"] ?? null)) {
            // line 22
            echo "    <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("field_tag", $context)) ? (_twig_default_filter(($context["field_tag"] ?? null), "div")) : ("div")), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null), 1 => "field__items"), "method"), "html", null, true));
            echo ">
";
        }
        // line 24
        echo "  ";
        if (( !($context["label_hidden"] ?? null) && ($context["display_label_tag"] ?? null))) {
            // line 25
            echo "    <";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter(($context["label_tag"] ?? null), "div")) : ("div")), "html", null, true));
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => ($context["title_classes"] ?? null)), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true));
            echo "</";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("label_tag", $context)) ? (_twig_default_filter(($context["label_tag"] ?? null), "div")) : ("div")), "html", null, true));
            echo ">
  ";
        }
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "    ";
            if (($context["display_item_tag"] ?? null)) {
                // line 29
                echo "        <";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("field_item_tag", $context)) ? (_twig_default_filter(($context["field_item_tag"] ?? null), "div")) : ("div")), "html", null, true));
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => "field__item"), "method"), "html", null, true));
                echo ">
    ";
            }
            // line 31
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "content", array()), "html", null, true));
            echo "
    ";
            // line 32
            if (($context["display_item_tag"] ?? null)) {
                // line 33
                echo "        </";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("field_item_tag", $context)) ? (_twig_default_filter(($context["field_item_tag"] ?? null), "div")) : ("div")), "html", null, true));
                echo ">
    ";
            }
            // line 35
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        if (($context["display_field_tag"] ?? null)) {
            // line 37
            echo "    </";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ((array_key_exists("field_tag", $context)) ? (_twig_default_filter(($context["field_tag"] ?? null), "div")) : ("div")), "html", null, true));
            echo ">
";
        }
    }

    public function getTemplateName()
    {
        return "field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 37,  108 => 36,  102 => 35,  96 => 33,  94 => 32,  89 => 31,  82 => 29,  79 => 28,  74 => 27,  63 => 25,  60 => 24,  53 => 22,  51 => 21,  49 => 18,  48 => 16,  46 => 12,  45 => 11,  44 => 10,  43 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "field.html.twig", "modules/fences/field.html.twig");
    }
}
