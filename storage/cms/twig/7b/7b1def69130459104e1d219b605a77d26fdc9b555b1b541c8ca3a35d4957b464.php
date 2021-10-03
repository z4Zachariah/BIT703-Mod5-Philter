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

/* C:\wamp64\www\bit703\module5\October/themes/philter/pages/add-image.htm */
class __TwigTemplate_abf3cf36095c1f3588e8949bc8c40700bc45469855105cc099be3bc5840ad681 extends \Twig\Template
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
                <h2>Add an Image</h2>
                
            </div>
        </div>

       ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("AddImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/add-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  50 => 10,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"text-center\">
                <h2>Add an Image</h2>
                
            </div>
        </div>

       {% component 'AddImages' %}

    </div>
</div>", "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/add-image.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 10);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
                [],
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
