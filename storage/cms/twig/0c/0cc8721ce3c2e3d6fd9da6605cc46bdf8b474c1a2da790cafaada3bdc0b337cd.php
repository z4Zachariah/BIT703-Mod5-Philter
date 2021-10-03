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

/* C:\wamp64\www\bit703\module5\October/plugins/zach/philter/components/addimages/default.htm */
class __TwigTemplate_355ed02010680c59244d44037336a0e5396839d356228d18ff3895e16538ebc4 extends \Twig\Template
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
        echo "<div class=\"row\">
    ";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 2
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 3
                echo "        <p><div class=\"alert alert-";
                echo (((($context["type"] ?? null) == "error")) ? ("danger") : ("success"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["message"] ?? null), 3, $this->source), "html", null, true);
                echo "</div></p>
    ";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 5
        echo "</div>
<div class=\"row\">
    <form id=\"image-form\" data-request=\"addImage\" method=\"post\" action=\"";
        // line 7
        echo url("image/add");
        echo "\" accept-charset=\"UTF8\" class=\"col col-sm-8 col-md-6\" enctype=\"multipart/form-data\">
        
        ";
        // line 9
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), ["token"]);
        echo "
        ";
        // line 10
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), ["sessionKey"]);
        echo "
        
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Description</label>
            <input type=\"text\" name=\"description\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Tags - add a comma after each tag.</label>
            <input type=\"text\" name=\"tags\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Filter</label>
            <select name=\"filter\" class=\"custom-select\">
                <option value=\"_1977\">1977</option>
                <option value=\"aden\">Aden</option>
                <option value=\"brannan\">Brannan</option>
                <option value=\"brooklyn\">Brooklyn</option>
                <option value=\"clarendon\">Clarendon</option>
                <option value=\"earlybird\">Earlybird</option>
                <option value=\"gingham\">Gingham</option>
                <option value=\"hudson\">Hudson</option>
                <option value=\"inkwell\">Inkwell</option>
                <option value=\"kelvin\">Kelvin</option>
                <option value=\"lark\">Lark</option>
                <option value=\"lofi\">Lo-Fi</option>
                <option value=\"maven\">Maven</option>
                <option value=\"mayfair\">Mayfair</option>
                <option value=\"moon\">Moon</option>
                <option value=\"nashville\">Nashville</option>
                <option value=\"perpetua\">Perpetua</option>
                <option value=\"reyes\">Reyes</option>
                <option value=\"rise\">Rise</option>
                <option value=\"slumber\">Slumber</option>
                <option value=\"stinson\">Stinson</option>
                <option value=\"toaster\">Toaster</option>
                <option value=\"valencia\">Valencia</option>
                <option value=\"walden\">Walden</option>
                <option value=\"willow\">Willow</option>
                <option value=\"xpro2\">X-pro II</option>
            </select>
        </div>
        <div id=\"image-upload\" class=\"form-group\">
            <label>Image</label>
            <input type=\"file\" class=\"form-control-file\" name=\"file\" />
        </div>
        <input class=\"btn btn-primary\" name=\"submit\" type=\"submit\" value=\"Submit\" />
        <input type=\"hidden\" name=\"_handler\" value=\"addImage\">
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/addimages/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 10,  63 => 9,  58 => 7,  54 => 5,  45 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    {% flash %}
        <p><div class=\"alert alert-{{ type == 'error' ? 'danger' : 'success' }}\">{{ message }}</div></p>
    {% endflash %}
</div>
<div class=\"row\">
    <form id=\"image-form\" data-request=\"addImage\" method=\"post\" action=\"{{ url('image/add') }}\" accept-charset=\"UTF8\" class=\"col col-sm-8 col-md-6\" enctype=\"multipart/form-data\">
        
        {{ form_token() }}
        {{ form_sessionKey() }}
        
        <div class=\"form-group\">
            <label>Name</label>
            <input type=\"text\" name=\"name\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Description</label>
            <input type=\"text\" name=\"description\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Tags - add a comma after each tag.</label>
            <input type=\"text\" name=\"tags\" class=\"form-control\" />
        </div>
        <div class=\"form-group\">
            <label>Filter</label>
            <select name=\"filter\" class=\"custom-select\">
                <option value=\"_1977\">1977</option>
                <option value=\"aden\">Aden</option>
                <option value=\"brannan\">Brannan</option>
                <option value=\"brooklyn\">Brooklyn</option>
                <option value=\"clarendon\">Clarendon</option>
                <option value=\"earlybird\">Earlybird</option>
                <option value=\"gingham\">Gingham</option>
                <option value=\"hudson\">Hudson</option>
                <option value=\"inkwell\">Inkwell</option>
                <option value=\"kelvin\">Kelvin</option>
                <option value=\"lark\">Lark</option>
                <option value=\"lofi\">Lo-Fi</option>
                <option value=\"maven\">Maven</option>
                <option value=\"mayfair\">Mayfair</option>
                <option value=\"moon\">Moon</option>
                <option value=\"nashville\">Nashville</option>
                <option value=\"perpetua\">Perpetua</option>
                <option value=\"reyes\">Reyes</option>
                <option value=\"rise\">Rise</option>
                <option value=\"slumber\">Slumber</option>
                <option value=\"stinson\">Stinson</option>
                <option value=\"toaster\">Toaster</option>
                <option value=\"valencia\">Valencia</option>
                <option value=\"walden\">Walden</option>
                <option value=\"willow\">Willow</option>
                <option value=\"xpro2\">X-pro II</option>
            </select>
        </div>
        <div id=\"image-upload\" class=\"form-group\">
            <label>Image</label>
            <input type=\"file\" class=\"form-control-file\" name=\"file\" />
        </div>
        <input class=\"btn btn-primary\" name=\"submit\" type=\"submit\" value=\"Submit\" />
        <input type=\"hidden\" name=\"_handler\" value=\"addImage\">
    </form>
</div>", "C:\\wamp64\\www\\bit703\\module5\\October/plugins/zach/philter/components/addimages/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("flash" => 2);
        static $filters = array("escape" => 3);
        static $functions = array("url" => 7, "form_token" => 9, "form_sessionKey" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['flash'],
                ['escape'],
                ['url', 'form_token', 'form_sessionKey']
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
