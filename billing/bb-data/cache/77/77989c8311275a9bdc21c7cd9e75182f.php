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

/* mod_servicelicense_config.phtml */
class __TwigTemplate_96b770c101181a9dfae2dece7895c7b8 extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_servicelicense_config.phtml", 1)->unwrap();
        // line 2
        echo "<div class=\"help\">
    <h5>";
        // line 3
        echo gettext("License settings");
        echo "</h5>
</div>

<form method=\"post\" action=\"";
        // line 6
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/product/update_config");
        echo "\" class=\"mainForm api-form save\" data-api-msg=\"License settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>";
        // line 9
        echo gettext("Prefix");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"config[prefix]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 11), "prefix", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 16
        echo gettext("Length");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"config[length]\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 18), "length", [], "any", false, false, false, 18), "html", null, true);
        echo "\">
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 23
        echo gettext("Plugin");
        echo ":</label>
        <div class=\"formRight\">
            ";
        // line 25
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["config[plugin]", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicelicense_plugin_get_pairs", [], "any", false, false, false, 25), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 25), "plugin", [], "any", false, false, false, 25), 1], 25, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 30
        echo gettext("Validate IP");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_ip]\" value=\"1\"";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 32), "validate_ip", [], "any", false, false, false, 32)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_ip]\" value=\"0\"";
        // line 33
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 33), "validate_ip", [], "any", false, false, false, 33)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 38
        echo gettext("Validate Hostname");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_host]\" value=\"1\"";
        // line 40
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 40), "validate_host", [], "any", false, false, false, 40)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_host]\" value=\"0\"";
        // line 41
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 41), "validate_host", [], "any", false, false, false, 41)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 46
        echo gettext("Validate Version");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_version]\" value=\"1\"";
        // line 48
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 48), "validate_version", [], "any", false, false, false, 48)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_version]\" value=\"0\"";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 49), "validate_version", [], "any", false, false, false, 49)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>";
        // line 54
        echo gettext("Validate Path");
        echo ":</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_path]\" value=\"1\"";
        // line 56
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 56), "validate_path", [], "any", false, false, false, 56)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_path]\" value=\"0\"";
        // line 57
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "config", [], "any", false, false, false, 57), "validate_path", [], "any", false, false, false, 57)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"";
        // line 62
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 65), "html", null, true);
        echo "\" />
</form>

<div class=\"body\">
    <h1 class=\"pt10\">";
        // line 69
        echo gettext("License plugins");
        echo "</h1>
    <p>";
        // line 70
        echo gettext("BoxBilling gives you ability to provide your own license generation script. Follow instructions bellow to install new license plugin");
        echo "</p>

    <div class=\"pt20 list arrowGrey\">
        <ul>
            <li>";
        // line 74
        echo gettext("License plugin is PHP class \"License_PluginName\" with one method");
        echo " <strong>generate</strong></li>
            <li>";
        // line 75
        echo gettext("Take a look at default plugin at");
        echo " <strong>src/bb-modules/Servicelicense/Plugin/Simple.php</strong></li>
            <li>";
        // line 76
        echo gettext("Create your plugin and place it to");
        echo " <strong>src/bb-modules/Servicelicense/Plugin/PluginName.php</strong></li>
            <li>";
        // line 77
        echo gettext("BoxBilling will automatically detect new plugin");
        echo "</li>
            <li>";
        // line 78
        echo gettext("Read");
        echo " <a href=\"http://docs.boxbilling.com/en/latest/reference/service-license.html#license-plugin\" target=\"_blank\">";
        echo gettext("BoxBilling documentation");
        echo "</a> ";
        echo gettext("for more information.");
        echo "</li>
        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "mod_servicelicense_config.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 78,  213 => 77,  209 => 76,  205 => 75,  201 => 74,  194 => 70,  190 => 69,  183 => 65,  177 => 62,  167 => 57,  161 => 56,  156 => 54,  146 => 49,  140 => 48,  135 => 46,  125 => 41,  119 => 40,  114 => 38,  104 => 33,  98 => 32,  93 => 30,  85 => 25,  80 => 23,  72 => 18,  67 => 16,  59 => 11,  54 => 9,  48 => 6,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macro_functions.phtml\" as mf %}
<div class=\"help\">
    <h5>{% trans 'License settings' %}</h5>
</div>

<form method=\"post\" action=\"{{ 'api/admin/product/update_config'|link }}\" class=\"mainForm api-form save\" data-api-msg=\"License settings updated\">
<fieldset>
    <div class=\"rowElem noborder\">
        <label>{% trans 'Prefix' %}:</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"config[prefix]\" value=\"{{ product.config.prefix }}\">
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Length' %}:</label>
        <div class=\"formRight\">
            <input type=\"text\" name=\"config[length]\" value=\"{{ product.config.length }}\">
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Plugin' %}:</label>
        <div class=\"formRight\">
            {{ mf.selectbox('config[plugin]', admin.servicelicense_plugin_get_pairs, product.config.plugin, 1) }}
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Validate IP' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_ip]\" value=\"1\"{% if product.config.validate_ip %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_ip]\" value=\"0\"{% if not product.config.validate_ip %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Validate Hostname' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_host]\" value=\"1\"{% if product.config.validate_host %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_host]\" value=\"0\"{% if not product.config.validate_host %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Validate Version' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_version]\" value=\"1\"{% if product.config.validate_version %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_version]\" value=\"0\"{% if not product.config.validate_version %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    <div class=\"rowElem\">
        <label>{% trans 'Validate Path' %}:</label>
        <div class=\"formRight\">
            <input type=\"radio\" name=\"config[validate_path]\" value=\"1\"{% if product.config.validate_path %} checked=\"checked\"{% endif %}/><label>Yes</label>
            <input type=\"radio\" name=\"config[validate_path]\" value=\"0\"{% if not product.config.validate_path %} checked=\"checked\"{% endif %} /><label>No</label>
        </div>
        <div class=\"fix\"></div>
    </div>
    
    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
</fieldset>
    
<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
</form>

<div class=\"body\">
    <h1 class=\"pt10\">{% trans 'License plugins' %}</h1>
    <p>{% trans 'BoxBilling gives you ability to provide your own license generation script. Follow instructions bellow to install new license plugin' %}</p>

    <div class=\"pt20 list arrowGrey\">
        <ul>
            <li>{% trans 'License plugin is PHP class \"License_PluginName\" with one method' %} <strong>generate</strong></li>
            <li>{% trans 'Take a look at default plugin at' %} <strong>src/bb-modules/Servicelicense/Plugin/Simple.php</strong></li>
            <li>{% trans 'Create your plugin and place it to' %} <strong>src/bb-modules/Servicelicense/Plugin/PluginName.php</strong></li>
            <li>{% trans 'BoxBilling will automatically detect new plugin' %}</li>
            <li>{% trans 'Read' %} <a href=\"http://docs.boxbilling.com/en/latest/reference/service-license.html#license-plugin\" target=\"_blank\">{% trans 'BoxBilling documentation' %}</a> {% trans 'for more information.' %}</li>
        </ul>
    </div>
</div>", "mod_servicelicense_config.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/mod_servicelicense_config.phtml");
    }
}
