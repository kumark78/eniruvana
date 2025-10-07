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

/* mod_servicedomain_registrar.phtml */
class __TwigTemplate_0187c9dd7a889c0fe03787cbb452d0eb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicedomain_registrar.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicedomain_registrar.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Registrar");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 6
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "\">";
        echo gettext("Domain management");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicedomain");
        echo "#tab-registrars\">";
        echo gettext("Registrars");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 19
        echo gettext("Registrar configuration");
        echo "</h5>
    </div>

    <div class=\"help\">
        <h5>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h5>
        <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "label", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
    </div>

    <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/registrar_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Registrar updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 30
        echo gettext("Enable test mode");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "test_mode", [], "any", false, false, false, 32)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "test_mode", [], "any", false, false, false, 33)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 39
        echo gettext("Registrar title");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 47
        echo "        ";
        echo twig_call_macro($macros["mf"], "macro_build_form", [twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "form", [], "any", false, false, false, 47), twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "config", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
        echo "

        <input type=\"submit\" value=\"";
        // line 49
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["registrar"] ?? null), "id", [], "any", false, false, false, 50), "html", null, true);
        echo "\" />
    </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_registrar.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  166 => 49,  160 => 47,  152 => 41,  147 => 39,  136 => 33,  130 => 32,  125 => 30,  119 => 27,  113 => 24,  109 => 23,  102 => 19,  97 => 16,  93 => 15,  86 => 11,  80 => 10,  74 => 9,  68 => 8,  65 => 7,  61 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Registrar' %} {{ registrar.title }}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'servicedomain'|alink }}\">{% trans 'Domain management' %}</a></li>
    <li><a href=\"{{ 'servicedomain'|alink }}#tab-registrars\">{% trans 'Registrars' %}</a></li>
    <li class=\"lastB\">{{ registrar.title }}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5>{% trans 'Registrar configuration' %}</h5>
    </div>

    <div class=\"help\">
        <h5>{{ registrar.title }}</h5>
        <p>{{ registrar.label }}</p>
    </div>

    <form method=\"post\" action=\"{{ 'api/admin/servicedomain/registrar_update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Registrar updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Enable test mode' %}:</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"{% if registrar.test_mode %} checked=\"checked\"{% endif %}/><label>Yes</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"{% if not registrar.test_mode %} checked=\"checked\"{% endif %} /><label>No</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Registrar title' %}:</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"title\" value=\"{{registrar.title}}\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        {# Build form elements from registrar configuration array #}
        {{ mf.build_form(registrar.form, registrar.config) }}

        <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"{{ registrar.id }}\" />
    </fieldset>
    </form>
</div>

{% endblock %}", "mod_servicedomain_registrar.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/mod_servicedomain_registrar.phtml");
    }
}
