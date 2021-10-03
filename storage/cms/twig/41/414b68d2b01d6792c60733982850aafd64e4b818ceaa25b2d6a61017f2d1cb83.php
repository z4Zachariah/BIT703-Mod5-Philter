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

/* C:\wamp64\www\bit703\module5\October/themes/philter/pages/image.htm */
class __TwigTemplate_3dca81e4ab046fbca917a84a1630414bf379263c96e77a80f6b24c3bcc41d0f8 extends \Twig\Template
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
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("UserImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "
";
        // line 5
        $context['__cms_component_params'] = [];
        $context['__cms_component_params']['show_tags'] = "true"        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("RecentImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 6
        echo "    </div>
</div>

 
<div id = \"image-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\"></div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"main\">
    <div class=\"container\">
{% component 'UserImages' %}

{% component 'RecentImages' show_tags='true'%}
    </div>
</div>

 
<div id = \"image-modal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\"></div>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/image.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 3);
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
