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

/* preview.twig */
class __TwigTemplate_db4a54d3c64b29d9c15d62c14d7a0fd2943ef85fde9ca20f4cea093f21d747c9 extends \WPML\Core\Twig\Template
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
        echo "<div class=\"js-wpml-ls-preview-wrapper wpml-ls-preview-wrapper";
        if ((isset($context["class"]) ? $context["class"] : null)) {
            echo " ";
            echo \WPML\Core\twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
    <strong class=\"wpml-ls-preview-label\">";
        // line 2
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["strings"]) ? $context["strings"] : null), "misc", []), "label_preview", []), "html", null, true);
        echo "</strong>
    <span class=\"spinner\"></span>
    <div class=\"js-wpml-ls-preview\">";
        // line 4
        echo $this->getAttribute((isset($context["preview"]) ? $context["preview"] : null), "html", []);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "preview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  40 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "preview.twig", "/home/yachtvis/public_html/test/wp-content/plugins/sitepress-multilingual-cms/templates/language-switcher-admin-ui/preview.twig");
    }
}
