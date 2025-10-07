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

/* mod_servicedomain_tld.phtml */
class __TwigTemplate_f4c3131d891e3beec09647db2aafbb9d extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicedomain_tld.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicedomain_tld.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 3), "html", null, true);
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
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 10), "html", null, true);
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
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 20), "html", null, true);
        echo " ";
        echo gettext("Top level domain management");
        echo "</h5>
    </div>

    <form method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicedomain/tld_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Top level domain settings updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 26
        echo gettext("Registrar");
        echo ":</label>
                <div class=\"formRight\">
                    <select name=\"tld_registrar_id\">
                        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicedomain_registrar_get_pairs", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["id"] => $context["title"]) {
            // line 30
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (($context["id"] == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "registrar", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                    </select>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 38
        echo gettext("Registration price");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_registration\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_registration", [], "any", false, false, false, 40), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 46
        echo gettext("Renewal price");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_renew\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_renew", [], "any", false, false, false, 48), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 54
        echo gettext("Transfer price");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_transfer\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "price_transfer", [], "any", false, false, false, 56), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 62
        echo gettext("Minimum years of registration");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"min_years\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "min_years", [], "any", false, false, false, 64), "html", null, true);
        echo "\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 70
        echo gettext("Allow registration");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"allow_register\" value=\"1\"";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_register", [], "any", false, false, false, 72)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                    <input type=\"radio\" name=\"allow_register\" value=\"0\"";
        // line 73
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_register", [], "any", false, false, false, 73)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 79
        echo gettext("Allow transfer");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"allow_transfer\" value=\"1\"";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_transfer", [], "any", false, false, false, 81)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                    <input type=\"radio\" name=\"allow_transfer\" value=\"0\"";
        // line 82
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "allow_transfer", [], "any", false, false, false, 82)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>";
        // line 88
        echo gettext("Active");
        echo ":</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"active\" value=\"1\"";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "active", [], "any", false, false, false, 90)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                    <input type=\"radio\" name=\"active\" value=\"0\"";
        // line 91
        if ( !twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "active", [], "any", false, false, false, 91)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>


            <input type=\"hidden\" name=\"tld\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tld"] ?? null), "tld", [], "any", false, false, false, 97), "html", null, true);
        echo "\" />
            <input type=\"submit\" value=\"";
        // line 98
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_tld.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 98,  264 => 97,  253 => 91,  247 => 90,  242 => 88,  231 => 82,  225 => 81,  220 => 79,  209 => 73,  203 => 72,  198 => 70,  189 => 64,  184 => 62,  175 => 56,  170 => 54,  161 => 48,  156 => 46,  147 => 40,  142 => 38,  134 => 32,  119 => 30,  115 => 29,  109 => 26,  103 => 23,  95 => 20,  89 => 16,  85 => 15,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{ tld.tld }}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'servicedomain'|alink }}\">{% trans 'Domain management' %}</a></li>
    <li class=\"lastB\">{{ tld.tld }}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget\">

    <div class=\"head\">
        <h5>{{ tld.tld }} {% trans 'Top level domain management' %}</h5>
    </div>

    <form method=\"post\" action=\"{{ 'api/admin/servicedomain/tld_update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Top level domain settings updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Registrar' %}:</label>
                <div class=\"formRight\">
                    <select name=\"tld_registrar_id\">
                        {% for id, title in admin.servicedomain_registrar_get_pairs %}
                        <option value=\"{{id}}\" {% if id == tld.registrar.id %}selected=\"selected\"{% endif %}>{{ title }}</option>
                        {% endfor %}
                    </select>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Registration price' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_registration\" value=\"{{ tld.price_registration }}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Renewal price' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_renew\" value=\"{{ tld.price_renew }}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Transfer price' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"price_transfer\" value=\"{{ tld.price_transfer }}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Minimum years of registration' %}:</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"min_years\" value=\"{{ tld.min_years }}\" required=\"required\">
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Allow registration' %}:</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"allow_register\" value=\"1\"{% if tld.allow_register %} checked=\"checked\"{% endif %}/><label>Yes</label>
                    <input type=\"radio\" name=\"allow_register\" value=\"0\"{% if not tld.allow_register %} checked=\"checked\"{% endif %} /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Allow transfer' %}:</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"allow_transfer\" value=\"1\"{% if tld.allow_transfer %} checked=\"checked\"{% endif %}/><label>Yes</label>
                    <input type=\"radio\" name=\"allow_transfer\" value=\"0\"{% if not tld.allow_transfer %} checked=\"checked\"{% endif %} /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label>{% trans 'Active' %}:</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"active\" value=\"1\"{% if tld.active %} checked=\"checked\"{% endif %}/><label>Yes</label>
                    <input type=\"radio\" name=\"active\" value=\"0\"{% if not tld.active %} checked=\"checked\"{% endif %} /><label>No</label>
                </div>
                <div class=\"fix\"></div>
            </div>


            <input type=\"hidden\" name=\"tld\" value=\"{{ tld.tld }}\" />
            <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
        </fieldset>
    </form>
</div>

{% endblock %}", "mod_servicedomain_tld.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/mod_servicedomain_tld.phtml");
    }
}
