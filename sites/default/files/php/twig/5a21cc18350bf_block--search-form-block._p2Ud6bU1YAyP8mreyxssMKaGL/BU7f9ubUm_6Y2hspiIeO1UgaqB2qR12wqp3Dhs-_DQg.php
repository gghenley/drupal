<?php

/* themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig */
class __TwigTemplate_8bf80e4b75b825a98fd63bea62e17aa81050806ed386ce2a00cccc0544e9f470 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 30, "if" => 43, "block" => 51);
        $filters = array("clean_class" => 33, "clean_id" => 38, "without" => 39);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'clean_id', 'without'),
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

        // line 30
        $context["classes"] = array(0 => "block", 1 => "block-search", 2 => ("block-config-provider--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 33
($context["configuration"] ?? null), "provider", array()))), 3 => ("block-plugin-id--" . \Drupal\Component\Utility\Html::getClass(        // line 34
($context["plugin_id_clean"] ?? null))), 4 => ((        // line 35
($context["label"] ?? null)) ? ("has-title") : ("")));
        // line 38
        $context["heading_id"] = ($this->getAttribute(($context["attributes"] ?? null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 39
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "aria-labelledby"), "html", null, true));
        echo " aria-labelledby=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true));
        echo "\" id=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, \Drupal\Component\Utility\Html::getId(($context["plugin_id"] ?? null)), "html", null, true));
        echo "\">
  <div class=\"block__inner block-search__inner\">

    ";
        // line 43
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", array())) {
            // line 44
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "visually-hidden"), "method");
        }
        // line 47
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      <h2";
        // line 48
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["title_attributes"] ?? null), "addClass", array(0 => "block__title", 1 => "block-search__title"), "method"), "setAttribute", array(0 => "id", 1 => ($context["heading_id"] ?? null)), "method"), "html", null, true));
        echo "><span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["configuration"] ?? null), "label", array()), "html", null, true));
        echo "</span></h2>
    ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "</div>
</div>
";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        // line 52
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "block__content", 1 => "block-search__content"), "method"), "html", null, true));
        echo ">";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        // line 54
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 54,  94 => 53,  90 => 52,  87 => 51,  81 => 57,  79 => 51,  77 => 49,  71 => 48,  67 => 47,  64 => 44,  62 => 43,  51 => 39,  49 => 38,  47 => 35,  46 => 34,  45 => 33,  44 => 30,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig", "/Applications/MAMP/drupal/themes/adaptivetheme/at_core/templates/block/block--search-form-block.html.twig");
    }
}
