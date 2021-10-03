<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\bit703\module5\October/plugins/zach/philter/components/recentimages/default.htm */
class __TwigTemplate_1fe476d6a798609d9f22bf142d79949a7356794b7a3efdb2e02b14456567f834 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "images", [], "any", false, false, true, 2);
        // line 3
        if (($context["images"] ?? null)) {
            // line 4
            echo "<div class=\"row\">
    <h2>Latest Images</h2>
</div>
<div class=\"row\">
    <div id=\"others-images\" class=\"grid\">
        ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 10
                echo "            <div class=\"grid-item other\">
                <picture id=\"image";
                // line 11
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, true, 12), "path", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\">
                </picture>
                <h5>";
                // line 14
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</h5>
                <p>";
                // line 15
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        <div class=\"clearfix\"></div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/recentimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  75 => 15,  71 => 14,  64 => 12,  60 => 11,  57 => 10,  53 => 9,  46 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set images =  __SELF__.images %}
{% if images %}
<div class=\"row\">
    <h2>Latest Images</h2>
</div>
<div class=\"row\">
    <div id=\"others-images\" class=\"grid\">
        {% for image in images %}
            <div class=\"grid-item other\">
                <picture id=\"image{{ image.id }}\">
                    <img src=\"{{ image.image.path }}\" alt=\"{{ image.description }}\">
                </picture>
                <h5>{{ image.name }}</h5>
                <p>{{ image.description }}</p>
            </div>
        {% endfor %}
        <div class=\"clearfix\"></div>
    </div>
</div>
{% endif %}
", "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/recentimages/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "if" => 3, "for" => 9);
        static $filters = array("escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
