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

/* C:\wamp64\www\bit703\module5\October/themes/philter/pages/account.htm */
class __TwigTemplate_a9dfa956ea4db5b03f0f297681537d6fd8f51ca9a3c3211a914afd4aef9987c5 extends \Twig\Template
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
        echo "<div id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center\">
                ";
        // line 5
        if (($context["user"] ?? null)) {
            // line 6
            echo "                <h2>Account Details</h2>
                ";
        } else {
            // line 8
            echo "                <h2>User Login/Registration</h2>
                ";
        }
        // line 10
        echo "            </div>
        </div>
        <div class=\"row\">
            ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 13
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 14
                echo "                <p><div class=\"alert alert-";
                echo (((($context["type"] ?? null) == "error")) ? ("danger") : ("success"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 14, $this->source), "html", null, true);
                echo "</div></p>
            ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 16
        echo "        </div>
        ";
        // line 17
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 18
        echo "        ";
        if ( !($context["user"] ?? null)) {
            // line 19
            echo "        <div class=\"row\">
            <p><a href=\"";
            // line 20
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("reset-password");
            echo "\">Forgotten your password?</a></p>
        </div>
        ";
        }
        // line 23
        echo "        
    </div><!-- /.container -->
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/account.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 23,  85 => 20,  82 => 19,  79 => 18,  75 => 17,  72 => 16,  63 => 14,  60 => 13,  55 => 10,  51 => 8,  47 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center\">
                {% if user %}
                <h2>Account Details</h2>
                {% else %}
                <h2>User Login/Registration</h2>
                {% endif %}
            </div>
        </div>
        <div class=\"row\">
            {% flash %}
                <p><div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }}\">{{ message }}</div></p>
            {% endflash %}
        </div>
        {% component 'account' %}
        {% if not user %}
        <div class=\"row\">
            <p><a href=\"{{ 'reset-password'|page }}\">Forgotten your password?</a></p>
        </div>
        {% endif %}
        
    </div><!-- /.container -->
</div>", "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/account.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5, "flash" => 13, "component" => 17);
        static $filters = array("escape" => 14, "page" => 20);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'flash', 'component'],
                ['escape', 'page'],
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
