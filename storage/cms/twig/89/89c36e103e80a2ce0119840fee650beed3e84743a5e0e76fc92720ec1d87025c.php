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

/* C:\wamp64\www\bit703\module5\October/themes/philter/layouts/default.htm */
class __TwigTemplate_4eed5d53ab24bce83f898dcb640f4f1837a433539ac6fb81045b152583b7465b extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Philter - ";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "title", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_description", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "meta_title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <link href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor/cssgram.min.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/styles.css");
        echo "\" rel=\"stylesheet\">

        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/october.png");
        echo "\">

        <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/vendor.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/theme.css");
        echo "\" rel=\"stylesheet\">

        ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 21
        echo "        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-
mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    </head>
    <body>

        <div class=\"loader\">
            <div class=\"spinner\">
            <div class=\"double-bounce1\"></div>
            <div class=\"double-bounce2\"></div>
            </div>
            </div>

            <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a
           href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->
           

        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 44
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header.html"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 45
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 49
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 50
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 54
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer.html"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 55
        echo "        </footer>

        <!-- Scripts -->

        <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/modernizr-3.6.0.min.js");
        echo "\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
       crossorigin=\"anonymous\"></script>
        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-3.3.1.min.js\"><\\/script>')</script>

        <script src=\"";
        // line 64
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
        <script src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/masonry.min.js");
        echo "\"></script>
        <script src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
        <!--end scripts-->
        ";
        // line 68
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 69
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 70
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 70,  172 => 69,  161 => 68,  156 => 66,  152 => 65,  148 => 64,  140 => 59,  134 => 55,  130 => 54,  124 => 50,  122 => 49,  116 => 45,  112 => 44,  87 => 21,  84 => 20,  79 => 18,  75 => 17,  70 => 15,  65 => 13,  61 => 12,  53 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>Philter - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"OctoberCMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"OctoberCMS\">

        <link href=\"{{ 'assets/css/vendor/cssgram.min.css' |theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/styles.css' |theme }}\" rel=\"stylesheet\">

        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\">

        <link href=\"{{ 'assets/css/vendor.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/theme.css'|theme }}\" rel=\"stylesheet\">

        {% styles %}
        <link href=\"https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,700\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-
mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">

    </head>
    <body>

        <div class=\"loader\">
            <div class=\"spinner\">
            <div class=\"double-bounce1\"></div>
            <div class=\"double-bounce2\"></div>
            </div>
            </div>

            <!--[if lte IE 9]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a
           href=\"https://browsehappy.com/\">upgrade your browser</a> to improve your experience and security.</p>
            <![endif]-->
           

        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'header.html' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'footer.html' %}
        </footer>

        <!-- Scripts -->

        <script src=\"{{ 'assets/js/vendor/modernizr-3.6.0.min.js' |theme }}\"></script>
        <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
       crossorigin=\"anonymous\"></script>
        <script>window.jQuery || document.write('<script src=\"js/vendor/jquery-3.3.1.min.js\"><\\/script>')</script>

        <script src=\"{{ 'assets/js/vendor/bootstrap.min.js' |theme }}\"></script>
        <script src=\"{{ 'assets/js/vendor/masonry.min.js' |theme }}\"></script>
        <script src=\"{{ 'assets/js/main.js' |theme }}\"></script>
        <!--end scripts-->
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\wamp64\\www\\bit703\\module5\\October/themes/philter/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("styles" => 20, "partial" => 44, "page" => 49, "framework" => 68, "scripts" => 69);
        static $filters = array("escape" => 5, "theme" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['styles', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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
