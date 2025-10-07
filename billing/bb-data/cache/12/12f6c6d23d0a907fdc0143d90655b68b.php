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

/* layout_public.phtml */
class __TwigTemplate_52651f292989beafc4d1c7f4f45a60f8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 10), "html", null, true);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel='stylesheet' type='text/css' href=\"";
        // line 16
        echo twig_asset_url($this->env, (("css/huraga-" . twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "color_scheme", [], "any", false, false, false, 16)) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 17
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 19
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 20
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 21
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 22
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 24
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 25
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\"></script>

    ";
        // line 31
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 33
        echo "</head>
<body>
    ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "    ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             $this->loadTemplate("partial_pending_messages.phtml", "layout_public.phtml", 36);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 37
        echo "</body>
</html>";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 31
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 32
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout_public.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 35,  171 => 32,  165 => 31,  159 => 5,  154 => 37,  143 => 36,  141 => 35,  137 => 33,  134 => 32,  132 => 31,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  111 => 25,  107 => 24,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  85 => 17,  81 => 16,  75 => 13,  71 => 12,  67 => 11,  63 => 10,  58 => 8,  54 => 7,  47 => 5,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block meta_title %}{% endblock %} {{ settings.meta_title }}</title>

    <meta property=\"bb:url\" content=\"{{ constant('BB_URL') }}\">
    <meta property=\"bb:client_area\" content=\"{{ '/'|link }}\">

    <meta name=\"description\" content=\"{{ settings.meta_description }}\">
    <meta name=\"robots\" content=\"{{ settings.meta_robots }}\">
    <meta name=\"author\" content=\"{{ settings.meta_author }}\">
    <meta name=\"generator\" content=\"BoxBilling {{ guest.system_version }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <link rel='stylesheet' type='text/css' href=\"{{ ('css/huraga-' ~ settings.color_scheme ~ '.css') | asset_url }}\">
    <link rel='stylesheet' type='text/css' href=\"{{ 'css/plugins/jquery.jgrowl.css' | asset_url }}\">

    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'img/icons/apple-touch-icon-114-precomposed.png' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'img/icons/apple-touch-icon-72-precomposed.png' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'img/icons/apple-touch-icon-57-precomposed.png' | asset_url }}\">

    <script src=\"{{ 'js/libs/jquery.js' | asset_url }}\"></script>
    <script src=\"{{ 'js/bb-jquery.js' | asset_url }}\"></script>
    <script src=\"{{ 'js/libs/modernizr.js' | asset_url }}\"></script>
    <script src=\"{{ 'js/bootstrap/bootstrap.min.js' | asset_url}}\"></script>
    <script src=\"{{ 'js/libs/selectivizr.js' | asset_url }}\"></script>
    <script src=\"{{ 'js/plugins/jGrowl/jquery.jgrowl.js' | asset_url }}\"></script>

    {% block head %}{% endblock %}
    {% block js %}{% endblock %}
</head>
<body>
    {% block body %}{% endblock %}
    {% include 'partial_pending_messages.phtml' ignore missing %}
</body>
</html>", "layout_public.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/huraga/html/layout_public.phtml");
    }
}
