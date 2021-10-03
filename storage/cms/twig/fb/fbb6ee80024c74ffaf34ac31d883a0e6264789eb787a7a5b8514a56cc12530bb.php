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

/* C:\wamp64\www\bit703\module5\October/themes/philter/pages/Philter.htm */
class __TwigTemplate_4fda1e9b7f3cedfb8329c09eeaed001c3767e9f28460820b8cb1e8ab05d16fd4 extends \Twig\Template
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
        echo "<div id=\"hero_wrapper\">
\t\t<div id=\"hero\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h1>Welcome To Philter</h1>
\t\t\t\t\t<p>Find something cool? Share it with our community.<br/> Look at other images as well</p>
\t\t\t\t\t<?php if(isset(\$_SESSION['is_logged_in'])) { ?>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary text-center\" href=\"/image/add\">Upload an Image Now</a></p>
\t\t\t\t\t<?php } else { ?>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary text-center\" href=\"/user/login\">Login Now</a></p>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


<div id=\"others-images-home\" class=\"container-fluid\">

";
        // line 20
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("RecentImages"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 21
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/Philter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  60 => 20,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"hero_wrapper\">
\t\t<div id=\"hero\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<h1>Welcome To Philter</h1>
\t\t\t\t\t<p>Find something cool? Share it with our community.<br/> Look at other images as well</p>
\t\t\t\t\t<?php if(isset(\$_SESSION['is_logged_in'])) { ?>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary text-center\" href=\"/image/add\">Upload an Image Now</a></p>
\t\t\t\t\t<?php } else { ?>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary text-center\" href=\"/user/login\">Login Now</a></p>
\t\t\t\t\t<?php } ?>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


<div id=\"others-images-home\" class=\"container-fluid\">

{% component 'RecentImages' %}

</div>", "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/pages/Philter.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("component" => 20);
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
