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

/* mod_spamchecker_settings.phtml */
class __TwigTemplate_4be06747f3dbae7a9340c85164e10371 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_spamchecker_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_spamchecker_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("SpamChecker settings");
    }

    // line 7
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo gettext("SpamChecker settings");
        echo "</li>
</ul>
";
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        echo "
<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 20
        echo gettext("SpamChecker settings");
        echo "</h5>
    </div>

";
        // line 23
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_spamchecker"]], "method", false, false, false, 23);
        // line 24
        echo "
<form method=\"post\" action=\"";
        // line 25
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 28
        echo gettext("Enable IP blocking");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"block_ips\" value=\"1\" ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "block_ips", [], "any", false, false, false, 30) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"block_ips\" value=\"0\" ";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "block_ips", [], "any", false, false, false, 31) == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">";
        // line 36
        echo gettext("Blocked IPs are not allowed to login, register or open public ticket. One IP per line");
        echo "</label>
            <div class=\"formBottom\">
                <textarea name=\"blocked_ips\" cols=\"5\" rows=\"5\" placeholder=\"127.0.0.1\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "blocked_ips", [], "any", false, false, false, 38), "html", null, true);
        echo "</textarea>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>";
        // line 45
        echo gettext("reCAPTCHA settings");
        echo "</h3>
        <p>";
        // line 46
        echo gettext("Enable captcha for client registration and contact forms");
        echo "</p>
        <p>";
        // line 47
        echo gettext("Sign up for reCAPTCHA key for your domain at");
        echo " <a href=\"https://google.com/recaptcha\" target=\"_blank\">https://google.com/recaptcha/</a></p>
    </div>

    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 52
        echo gettext("Enable reCAPTCHA");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"captcha_enabled\" value=\"1\" ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_enabled", [], "any", false, false, false, 54) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"captcha_enabled\" value=\"0\" ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_enabled", [], "any", false, false, false, 55) == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 61
        echo gettext("reCAPTCHA version");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"captcha_version\" value=\"2\" ";
        // line 63
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_version", [], "any", false, false, false, 63) == "2")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("v2");
        echo "</label>
            </div>
            
            <label>";
        // line 66
        echo gettext("reCAPTCHA Public key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_publickey\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_recaptcha_publickey", [], "any", false, false, false, 68), "html", null, true);
        echo "\"/>
            </div>

            <label>";
        // line 71
        echo gettext("reCAPTCHA Secret key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_privatekey\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "captcha_recaptcha_privatekey", [], "any", false, false, false, 73), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>";
        // line 80
        echo gettext("Akismet settings");
        echo "</h3>
        <p>";
        // line 81
        echo gettext("Enable forum messages checking on the <a href=\"https://akismet.com/\" target=\"_blank\">Akismet</a> database");
        echo "</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 85
        echo gettext("Enable check");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"akismet_enabled\" value=\"1\" ";
        // line 87
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "akismet_enabled", [], "any", false, false, false, 87) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"akismet_enabled\" value=\"0\" ";
        // line 88
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "akismet_enabled", [], "any", false, false, false, 88) == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>";
        // line 94
        echo gettext("Akismet API key");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"akismet_api_key\" value=\"";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "akismet_api_key", [], "any", false, false, false, 96), "html", null, true);
        echo "\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        
    </fieldset>
    
    <div class=\"help\">
        <h3>";
        // line 104
        echo gettext("StopForumSpam.com settings");
        echo "</h3>
        <p>";
        // line 105
        echo gettext("If enabled, client IP will be checked on the <a href=\"http://www.stopforumspam.com/\" target=\"_blank\">Stop Forum Spam</a> database before registration");
        echo "</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>";
        // line 109
        echo gettext("Enable check");
        echo "</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sfs\" value=\"1\" ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sfs", [], "any", false, false, false, 111) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                <input type=\"radio\" name=\"sfs\" value=\"0\" ";
        // line 112
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sfs", [], "any", false, false, false, 112) == "0")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("No");
        echo "</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"";
        // line 117
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_spamchecker\" />
    </fieldset>
</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_spamchecker_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 117,  313 => 112,  305 => 111,  300 => 109,  293 => 105,  289 => 104,  278 => 96,  273 => 94,  260 => 88,  252 => 87,  247 => 85,  240 => 81,  236 => 80,  226 => 73,  221 => 71,  215 => 68,  210 => 66,  200 => 63,  195 => 61,  182 => 55,  174 => 54,  169 => 52,  161 => 47,  157 => 46,  153 => 45,  143 => 38,  138 => 36,  126 => 31,  118 => 30,  113 => 28,  105 => 25,  102 => 24,  100 => 23,  94 => 20,  89 => 17,  85 => 16,  78 => 11,  72 => 10,  66 => 9,  63 => 8,  59 => 7,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'SpamChecker settings' %}{% endblock %}
{% set active_menu = 'system' %}


{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'SpamChecker settings' %}</li>
</ul>
{% endblock %}


{% block content %}

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'SpamChecker settings' %}</h5>
    </div>

{% set params = admin.extension_config_get({\"ext\":\"mod_spamchecker\"}) %}

<form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Enable IP blocking' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"block_ips\" value=\"1\" {% if params.block_ips == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"block_ips\" value=\"0\" {% if params.block_ips == \"0\" %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>
        <div class=\"rowElem noborder\">
            <label class=\"topLabel\">{% trans 'Blocked IPs are not allowed to login, register or open public ticket. One IP per line' %}</label>
            <div class=\"formBottom\">
                <textarea name=\"blocked_ips\" cols=\"5\" rows=\"5\" placeholder=\"127.0.0.1\">{{ params.blocked_ips }}</textarea>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>{% trans 'reCAPTCHA settings' %}</h3>
        <p>{% trans 'Enable captcha for client registration and contact forms' %}</p>
        <p>{% trans 'Sign up for reCAPTCHA key for your domain at' %} <a href=\"https://google.com/recaptcha\" target=\"_blank\">https://google.com/recaptcha/</a></p>
    </div>

    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Enable reCAPTCHA' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"captcha_enabled\" value=\"1\" {% if params.captcha_enabled == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"captcha_enabled\" value=\"0\" {% if params.captcha_enabled == \"0\" %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'reCAPTCHA version' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"captcha_version\" value=\"2\" {% if params.captcha_version == \"2\" %}checked=\"checked\"{% endif %}/><label>{% trans 'v2' %}</label>
            </div>
            
            <label>{% trans 'reCAPTCHA Public key' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_publickey\" value=\"{{params.captcha_recaptcha_publickey}}\"/>
            </div>

            <label>{% trans 'reCAPTCHA Secret key' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"captcha_recaptcha_privatekey\" value=\"{{params.captcha_recaptcha_privatekey}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
    </fieldset>

    <div class=\"help\">
        <h3>{% trans 'Akismet settings' %}</h3>
        <p>{% trans %} Enable forum messages checking on the <a href=\"https://akismet.com/\" target=\"_blank\">Akismet</a> database{% endtrans %}</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Enable check' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"akismet_enabled\" value=\"1\" {% if params.akismet_enabled == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"akismet_enabled\" value=\"0\" {% if params.akismet_enabled == \"0\" %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <div class=\"rowElem\">
            <label>{% trans 'Akismet API key' %}</label>
            <div class=\"formRight\">
                <input type=\"text\" name=\"akismet_api_key\" value=\"{{params.akismet_api_key}}\"/>
            </div>
            <div class=\"fix\"></div>
        </div>
        
    </fieldset>
    
    <div class=\"help\">
        <h3>{% trans 'StopForumSpam.com settings' %}</h3>
        <p>{% trans %} If enabled, client IP will be checked on the <a href=\"http://www.stopforumspam.com/\" target=\"_blank\">Stop Forum Spam</a> database before registration{% endtrans %}</p>
    </div>
    <fieldset>
        <div class=\"rowElem noborder\">
            <label>{% trans 'Enable check' %}</label>
            <div class=\"formRight\">
                <input type=\"radio\" name=\"sfs\" value=\"1\" {% if params.sfs == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                <input type=\"radio\" name=\"sfs\" value=\"0\" {% if params.sfs == \"0\" %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
            </div>
            <div class=\"fix\"></div>
        </div>

        <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
        <input type=\"hidden\" name=\"ext\" value=\"mod_spamchecker\" />
    </fieldset>
</form>
</div>

{% endblock %}", "mod_spamchecker_settings.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Spamchecker/html_admin/mod_spamchecker_settings.phtml");
    }
}
