<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* template.twig */
class __TwigTemplate_49a4c79759f8f18b48b8a96237750dfe335c495b4c2e5f1e727fe3d9b518713a extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["css_classes_flag"] = \WPML\Core\twig_trim_filter(("wpml-ls-flag " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_flag", [])));
        // line 2
        $context["css_classes_native"] = \WPML\Core\twig_trim_filter(("wpml-ls-native " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_native", [])));
        // line 3
        $context["css_classes_display"] = \WPML\Core\twig_trim_filter(("wpml-ls-display " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_display", [])));
        // line 4
        $context["css_classes_bracket"] = \WPML\Core\twig_trim_filter(("wpml-ls-bracket " . $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_classes_bracket", [])));
        // line 5
        $context["css_classes_link"] = \WPML\Core\twig_trim_filter(("wpml-ls-link " . $this->getAttribute($this->getAttribute((isset($context["language"]) ? $context["language"] : null), "backward_compatibility", []), "css_classes_a", [])));
        // line 6
        echo "
<div class=\"";
        // line 7
        echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes"]) ? $context["css_classes"] : null), "html", null, true);
        echo " wpml-ls-legacy-list-horizontal\"";
        if ($this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", [])) {
            echo " id=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute((isset($context["backward_compatibility"]) ? $context["backward_compatibility"] : null), "css_id", []), "html", null, true);
            echo "\"";
        }
        echo ">
\t<ul>";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["code"] => $context["language"]) {
            // line 11
            echo "<li class=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "css_classes", []), "html", null, true);
            echo " wpml-ls-item-legacy-list-horizontal\">
\t\t\t\t<a href=\"";
            // line 12
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "url", []), "html", null, true);
            echo "\" class=\"";
            echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_link"]) ? $context["css_classes_link"] : null), "html", null, true);
            echo "\">";
            // line 13
            if ($this->getAttribute($context["language"], "flag_url", [])) {
                // line 14
                echo "<img class=\"";
                echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_flag"]) ? $context["css_classes_flag"] : null), "html", null, true);
                echo "\" src=\"";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_url", []), "html", null, true);
                echo "\" alt=\"";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "flag_alt", []), "html", null, true);
                echo "\">";
            }
            // line 17
            if (($this->getAttribute($context["language"], "is_current", []) && ($this->getAttribute($context["language"], "native_name", []) || $this->getAttribute($context["language"], "display_name", [])))) {
                // line 19
                $context["current_language_name"] = (($this->getAttribute($context["language"], "native_name", [], "any", true, true)) ? (\WPML\Core\_twig_default_filter($this->getAttribute($context["language"], "native_name", []), $this->getAttribute($context["language"], "display_name", []))) : ($this->getAttribute($context["language"], "display_name", [])));
                // line 20
                echo "<span class=\"";
                echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                echo "\">";
                echo \WPML\Core\twig_escape_filter($this->env, (isset($context["current_language_name"]) ? $context["current_language_name"] : null), "html", null, true);
                echo "</span>";
            } else {
                // line 24
                if ($this->getAttribute($context["language"], "native_name", [])) {
                    // line 25
                    echo "<span class=\"";
                    echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_native"]) ? $context["css_classes_native"] : null), "html", null, true);
                    echo "\" lang=\"";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "code", []), "html", null, true);
                    echo "\">";
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "native_name", []), "html", null, true);
                    echo "</span>";
                }
                // line 28
                if ($this->getAttribute($context["language"], "display_name", [])) {
                    // line 29
                    echo "<span class=\"";
                    echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_display"]) ? $context["css_classes_display"] : null), "html", null, true);
                    echo "\">";
                    // line 30
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\"> (</span>";
                    }
                    // line 31
                    echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["language"], "display_name", []), "html", null, true);
                    // line 32
                    if ($this->getAttribute($context["language"], "native_name", [])) {
                        echo "<span class=\"";
                        echo \WPML\Core\twig_escape_filter($this->env, (isset($context["css_classes_bracket"]) ? $context["css_classes_bracket"] : null), "html", null, true);
                        echo "\">)</span>";
                    }
                    // line 33
                    echo "</span>";
                }
            }
            // line 37
            echo "</a>
\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 41,  126 => 37,  122 => 33,  116 => 32,  114 => 31,  108 => 30,  104 => 29,  102 => 28,  93 => 25,  91 => 24,  84 => 20,  82 => 19,  80 => 17,  71 => 14,  69 => 13,  64 => 12,  59 => 11,  55 => 10,  45 => 7,  42 => 6,  40 => 5,  38 => 4,  36 => 3,  34 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "template.twig", "/home/yachtvis/public_html/test/wp-content/plugins/sitepress-multilingual-cms/templates/language-switchers/legacy-list-horizontal/template.twig");
    }
}
