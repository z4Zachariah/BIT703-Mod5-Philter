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

/* C:\wamp64\www\bit703\module5\October/plugins/zach/philter/components/userimages/default.htm */
class __TwigTemplate_8261a7f3b0f19f1d57676578f4a5e42f6aac79c09634b6a34ca8e03edbeeba7b extends \Twig\Template
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
        $context["images"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "images", [], "any", false, false, true, 1);
        // line 2
        echo "<div class=\"row\">
    <h2>Your Images</h2>
    <p><a class=\"btn btn-primary text-center float-right\" href=\"/image/add\">Upload an Image Now</a></p>
</div>
<div class=\"row\">
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 7
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 8
                echo "        <p><div class=\"alert alert-";
                echo (((($context["type"] ?? null) == "error")) ? ("danger") : ("success"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 8, $this->source), "html", null, true);
                echo "</div></p>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 10
        echo "</div>
";
        // line 11
        if (($context["images"] ?? null)) {
            // line 12
            echo "<div class=\"row\">
    ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "tags", [], "any", false, false, true, 13)) {
                // line 14
                echo "    <p class=\"tags\"> Tags: 
        ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["images"] ?? null), "tags", [], "any", false, false, true, 15));
                foreach ($context['_seq'] as $context["tag"] => $context["count"]) {
                    // line 16
                    echo "        <a href=\"/image/tag/";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["tag"], 16, $this->source), "html", null, true);
                    echo "\" class=\"btn btn-primary btn-sm\">";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["tag"], 16, $this->source), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["count"], 16, $this->source), "html", null, true);
                    echo ")</a>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tag'], $context['count'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    </p>
    ";
            }
            // line 20
            echo "    <div id=\"my-images\" class=\"grid\">
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 22
                echo "        <div class=\"grid-item user\">
            <picture id=\"image";
                // line 23
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "\">
                <img src=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, true, 24), "getPath", [], "method", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "filter", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\">
            </picture>
            <h5>";
                // line 26
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "name", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</h5>
            <p>";
                // line 27
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "description", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</p>
            <p><a href=\"/image?delete_image=";
                // line 28
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
                echo "\" class=\"btn btn-primary btn-sm\">Delete</a></p>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "        <div class=\"clearfix\"></div>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/userimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 31,  125 => 28,  121 => 27,  117 => 26,  108 => 24,  104 => 23,  101 => 22,  97 => 21,  94 => 20,  90 => 18,  77 => 16,  73 => 15,  70 => 14,  68 => 13,  65 => 12,  63 => 11,  60 => 10,  51 => 8,  48 => 7,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set images = __SELF__.images %}
<div class=\"row\">
    <h2>Your Images</h2>
    <p><a class=\"btn btn-primary text-center float-right\" href=\"/image/add\">Upload an Image Now</a></p>
</div>
<div class=\"row\">
    {% flash %}
        <p><div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }}\">{{ message }}</div></p>
    {% endflash %}
</div>
{% if images %}
<div class=\"row\">
    {% if images.tags %}
    <p class=\"tags\"> Tags: 
        {% for tag, count in images.tags %}
        <a href=\"/image/tag/{{ tag }}\" class=\"btn btn-primary btn-sm\">{{ tag }} ({{ count }})</a>
        {% endfor %}
    </p>
    {% endif %}
    <div id=\"my-images\" class=\"grid\">
        {% for image in images %}
        <div class=\"grid-item user\">
            <picture id=\"image{{ image.id }}\">
                <img src=\"{{ image.image.getPath() }}\" class=\"{{ image.filter }}\" alt=\"{{ image.description }}\">
            </picture>
            <h5>{{ image.name }}</h5>
            <p>{{ image.description }}</p>
            <p><a href=\"/image?delete_image={{ image.id }}\" class=\"btn btn-primary btn-sm\">Delete</a></p>
        </div>
        {% endfor %}
        <div class=\"clearfix\"></div>
    </div>
</div>
{% endif %}", "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/userimages/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "flash" => 7, "if" => 11, "for" => 15);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'flash', 'if', 'for'],
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
