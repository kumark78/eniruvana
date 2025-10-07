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

/* mod_invoice_gateway.phtml */
class __TwigTemplate_73522f63c6b5a90cf1ffbdd536a172c5 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_invoice_gateway.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_invoice_gateway.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Gateway");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 3), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("invoice/gateways");
        echo "\">";
        echo gettext("Payment gateways");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 14
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5>";
        // line 18
        echo gettext("Payment gateway configuration");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
    </div>

    <div class=\"help\">
        <h5>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h5>
        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "description", [], "any", false, false, false, 23);
        echo "
    </div>

    <form method=\"post\" action=\"";
        // line 26
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/invoice/gateway_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Gateway updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">";
        // line 29
        echo gettext("Payment gateway title");
        echo ":</label>
            <div class=\"formBottom\">
                <input type=\"text\" name=\"title\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 37
        echo "        ";
        echo twig_call_macro($macros["mf"], "macro_build_form", [twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "form", [], "any", false, false, false, 37), twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "config", [], "any", false, false, false, 37)], 37, $context, $this->getSourceContext());
        echo "

        <div class=\"rowElem\">
            <label class=\"topLabel\">";
        // line 40
        echo gettext("Select which currencies can accept this payment gateway (Select none to allow all currencies)");
        echo "</label>
            <div class=\"formBottom\">
                ";
        // line 42
        $context["currencies"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "currency_get_pairs", [], "any", false, false, false, 42);
        // line 43
        echo "                <select name=\"accepted_currencies[]\" multiple=\"multiple\" class=\"multiple\" size=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["currencies"] ?? null)), "html", null, true);
        echo "\">
                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currencies"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["currency"]) {
            // line 45
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (twig_in_filter($context["id"], twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "accepted_currencies", [], "any", false, false, false, 45))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["currency"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['currency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </select>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 53
        echo gettext("Enabled");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 55
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "enabled", [], "any", false, false, false, 55)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "enabled", [], "any", false, false, false, 56)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        ";
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "supports_one_time_payments", [], "any", false, false, false, 61)) {
            // line 62
            echo "        <div class=\"rowElem\">
            <label>";
            // line 63
            echo gettext("Allow one time payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_single\" value=\"1\"";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_single", [], "any", false, false, false, 65)) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_single\" value=\"0\"";
            // line 66
            if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_single", [], "any", false, false, false, 66)) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 71
            echo "        <input type=\"hidden\" name=\"allow_single\" value=\"0\" />
        ";
        }
        // line 73
        echo "        
        ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "supports_subscriptions", [], "any", false, false, false, 74)) {
            // line 75
            echo "        <div class=\"rowElem\">
            <label>";
            // line 76
            echo gettext("Allow subscription payments");
            echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_recurrent\" value=\"1\"";
            // line 78
            if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_recurrent", [], "any", false, false, false, 78)) {
                echo " checked=\"checked\"";
            }
            echo "/><label>";
            echo gettext("Yes");
            echo "</label>
                <input type=\"radio\" name=\"allow_recurrent\" value=\"0\"";
            // line 79
            if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "allow_recurrent", [], "any", false, false, false, 79)) {
                echo " checked=\"checked\"";
            }
            echo " /><label>";
            echo gettext("No");
            echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        ";
        } else {
            // line 84
            echo "        <input type=\"hidden\" name=\"allow_recurrent\" value=\"0\" />
        ";
        }
        // line 86
        echo "
        <div class=\"rowElem\">
            <label>";
        // line 88
        echo gettext("Enable test mode");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "test_mode", [], "any", false, false, false, 90)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"";
        // line 91
        if ( !twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "test_mode", [], "any", false, false, false, 91)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 97
        echo gettext("IPN Callback URL");
        echo ":</label>
            <div class=\"formRight\">
                <input type=\"text\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "callback", [], "any", false, false, false, 99), "html", null, true);
        echo "\" readonly=\"readonly\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 104
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["gateway"] ?? null), "id", [], "any", false, false, false, 105), "html", null, true);
        echo "\" />
    </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_invoice_gateway.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 105,  319 => 104,  311 => 99,  306 => 97,  293 => 91,  285 => 90,  280 => 88,  276 => 86,  272 => 84,  260 => 79,  252 => 78,  247 => 76,  244 => 75,  242 => 74,  239 => 73,  235 => 71,  223 => 66,  215 => 65,  210 => 63,  207 => 62,  205 => 61,  193 => 56,  185 => 55,  180 => 53,  172 => 47,  157 => 45,  153 => 44,  148 => 43,  146 => 42,  141 => 40,  134 => 37,  126 => 31,  121 => 29,  115 => 26,  109 => 23,  105 => 22,  96 => 18,  91 => 15,  87 => 14,  80 => 10,  74 => 9,  68 => 8,  65 => 7,  61 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Gateway' %} {{ gateway.title }}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'invoice/gateways'|alink }}\">{% trans 'Payment gateways' %}</a></li>
    <li class=\"lastB\">{{ gateway.title }}</li>
</ul>
{% endblock %}

{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5>{% trans 'Payment gateway configuration' %} {{ gateway.title }}</h5>
    </div>

    <div class=\"help\">
        <h5>{{ gateway.title }}</h5>
        {{ gateway.description|raw }}
    </div>

    <form method=\"post\" action=\"{{ 'api/admin/invoice/gateway_update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Gateway updated\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">{% trans 'Payment gateway title' %}:</label>
            <div class=\"formBottom\">
                <input type=\"text\" name=\"title\" value=\"{{ gateway.title }}\" />
            </div>
            <div class=\"fix\"></div>
        </div>

        {# Build form elements from registrar configuration array #}
        {{ mf.build_form(gateway.form, gateway.config) }}

        <div class=\"rowElem\">
            <label class=\"topLabel\">{% trans 'Select which currencies can accept this payment gateway (Select none to allow all currencies)' %}</label>
            <div class=\"formBottom\">
                {% set currencies = guest.currency_get_pairs %}
                <select name=\"accepted_currencies[]\" multiple=\"multiple\" class=\"multiple\" size=\"{{currencies|length}}\">
                    {% for id,currency in currencies %}
                    <option value=\"{{id}}\" {% if id in gateway.accepted_currencies %}selected=\"selected\"{% endif %}>{{ currency }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Enabled' %}:</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"enabled\" value=\"1\"{% if gateway.enabled %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"enabled\" value=\"0\"{% if not gateway.enabled %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        {% if gateway.supports_one_time_payments %}
        <div class=\"rowElem\">
            <label>{% trans 'Allow one time payments' %}:</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_single\" value=\"1\"{% if gateway.allow_single %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"allow_single\" value=\"0\"{% if not gateway.allow_single %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        {% else %}
        <input type=\"hidden\" name=\"allow_single\" value=\"0\" />
        {% endif %}
        
        {% if gateway.supports_subscriptions %}
        <div class=\"rowElem\">
            <label>{% trans 'Allow subscription payments' %}:</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"allow_recurrent\" value=\"1\"{% if gateway.allow_recurrent %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"allow_recurrent\" value=\"0\"{% if not gateway.allow_recurrent %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        {% else %}
        <input type=\"hidden\" name=\"allow_recurrent\" value=\"0\" />
        {% endif %}

        <div class=\"rowElem\">
            <label>{% trans 'Enable test mode' %}:</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"test_mode\" value=\"1\"{% if gateway.test_mode %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"test_mode\" value=\"0\"{% if not gateway.test_mode %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'IPN Callback URL' %}:</label>
            <div class=\"formRight\">
                <input type=\"text\" value=\"{{ gateway.callback }}\" readonly=\"readonly\"/>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"id\" value=\"{{ gateway.id }}\" />
    </fieldset>
    </form>
</div>

{% endblock %}", "mod_invoice_gateway.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/mod_invoice_gateway.phtml");
    }
}
