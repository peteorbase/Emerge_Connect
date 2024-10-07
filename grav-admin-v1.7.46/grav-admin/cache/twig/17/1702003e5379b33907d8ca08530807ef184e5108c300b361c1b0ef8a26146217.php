<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* forms/layouts/xhr.html.twig */
class __TwigTemplate_b9c1f7f094f66247aa0b63ac1f24e72eb270c286e6b96ef9a56ae4c132184a81 extends \Twig\Template
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
        if (($this->getAttribute(($context["form"] ?? null), "xhr_submit", []) == true)) {
            // line 2
            echo "  ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "plugin://form/assets/xhr-submitter.js", 1 => ["group" => "bottom", "position" => "before"]], "method");
            // line 3
            echo "  ";
            $this->getAttribute(($context["assets"] ?? null), "addInlineJs", [0 => (("
    document.addEventListener('DOMContentLoaded', () => {
        attachFormSubmitListener('" . $this->getAttribute(            // line 5
($context["form"] ?? null), "id", [])) . "');
    });"), 1 => ["group" => "bottom", "position" => "before"]], "method");
        }
    }

    public function getTemplateName()
    {
        return "forms/layouts/xhr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if form.xhr_submit == true %}
  {% do assets.addJs('plugin://form/assets/xhr-submitter.js', {'group': 'bottom', 'position': 'before'}) %}
  {% do assets.addInlineJs(\"
    document.addEventListener('DOMContentLoaded', () => {
        attachFormSubmitListener('\" ~ form.id ~ \"');
    });\",
    {'group': 'bottom', 'position': 'before'}) %}
{% endif %}", "forms/layouts/xhr.html.twig", "C:\\xampp\\htdocs\\emerge-connect\\grav-admin-v1.7.46\\grav-admin\\user\\plugins\\form\\templates\\forms\\layouts\\xhr.html.twig");
    }
}
