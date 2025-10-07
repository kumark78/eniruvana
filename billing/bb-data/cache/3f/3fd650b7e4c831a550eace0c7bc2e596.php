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

/* mod_servicesolusvm_settings.phtml */
class __TwigTemplate_4c31ff9c2d9b44617af7d7f703a9f46a extends \Twig\Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_servicesolusvm_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("SolusVM");
    }

    // line 4
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <ul>
        <li class=\"firstB\"><a href=\"";
        // line 6
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
        <li class=\"lastB\">";
        // line 8
        echo gettext("SolusVM");
        echo "</li>
    </ul>
";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "servicesolusvm_cluster_config", [], "any", false, false, false, 13);
        // line 14
        echo "
";
        // line 15
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ipaddress", [], "any", false, false, false, 15)) {
            // line 16
            echo "    ";
            $context["master_url"] = (((("http://" . twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ipaddress", [], "any", false, false, false, 16)) . ":") . ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "port", [], "any", true, true, false, 16)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "port", [], "any", false, false, false, 16), 5353)) : (5353))) . "/admincp");
        }
        // line 18
        echo "
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-start\">";
        // line 22
        echo gettext("SolusVM");
        echo "</a></li>
        <li><a href=\"#tab-index\" id=\"open-index-tab\">";
        // line 23
        echo gettext("API configuration");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        
        <div class=\"tab_content nopadding\" id=\"tab-start\">
            <div class=\"help\">
                <img src=\"/bb-modules/Servicesolusvm/icon.png\" alt=\"SolusVM logo\" class=\"\" style=\"width: 150px; float: right; margin: 0 5px 0 10px;\"/>
                <h5>";
        // line 32
        echo gettext("Getting started with SolusVM");
        echo "</h5>
                <p>";
        // line 33
        echo gettext("This guide will help you to get started selling SolusVM virtual servers with BoxBilling.");
        echo "</p>
            </div>
            
            <div class=\"body\">    
                <h2>";
        // line 37
        echo gettext("1. Configure your SolusVM server");
        echo "</h2>
                <p>Make sure that your SolusVM master server is properly configured - has defined nodes, plans, free ip addresses, operating system templates.</p>
                ";
        // line 39
        if (($context["master_url"] ?? null)) {
            // line 40
            echo "                <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["master_url"] ?? null), "html", null, true);
            echo "\" class=\"btnIconLeft mr10 mt10\" target=\"_blank\"><span>Open SolusVm admin panel</span></a></p>
                ";
        }
        // line 42
        echo "            </div>
            
            <div class=\"body\">
                <h2>";
        // line 45
        echo gettext("2. Configure API");
        echo "</h2>
                <p><a href=\"\" onclick=\"\$('#open-index-tab').click(); return false;\">Configure SolusVM API</a> and test if BoxBilling can connect successfully. To create an API user login to SolusVM admin area and click Configuration > API Access from the top menu then select Add API User.</p>
            </div>
            
            <div class=\"body\">    
                <h2>";
        // line 50
        echo gettext("3. Create new product category");
        echo "</h2>
                <p>Create <a href=\"";
        // line 51
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product", ["cat_title" => "VPS", "cat_description" => "Virtual private servers"]);
        echo "#tab-new-category\" target=\"_blank\">new product category</a> for VPS products. Category must contain only solusvm products otherwise order form might not work as expected.</p>
            </div>
            
            <div class=\"body list arrowBlue\">
                <h2>";
        // line 55
        echo gettext("4. Create SolusVM products");
        echo "</h2>
                <p>Imagine that product on BoxBilling is SolusVM plan.</p>
                <p><a href=\"";
        // line 57
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("product", ["type" => "solusvm", "title" => "VPS-1"]);
        echo "#tab-new\" target=\"_blank\">Create products</a> in newly created category by selecting product type <strong>Solusvm</strong>.</p>
                <p>Define product prices and switch to \"Configuration\" tab:</p>
                <ul>
                    <li>Select virtualization type</li>
                    <li>Select node on which VPS will be created</li>
                    <li>Select plan</li>
                    <li>Define IPs amount for VPS server</li>
                    <li>Provide information about plan to BoxBilling so it can show these values to your clients. (SolusVM API does not provide this information)</li>
                    <li>Provide slider information to be displayed on order form</li>
                </ul>
                <p><a href=\"";
        // line 67
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("order");
        echo "\" target=\"_blank\">Check order page</a> while creating products to see slider changes</p>
            </div>
            
            <div class=\"body\">
                <h2>";
        // line 71
        echo gettext("5. Import data from SolusVM server");
        echo "</h2>
                <p>If you already have successfully connected to master server and have existing clients and server then you can import them using these tools:</p>
                ";
        // line 73
        if (($context["master_url"] ?? null)) {
            // line 74
            echo "                    <a href=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicesolusvm/import/clients");
            echo "\" title=\"\" class=\"btnIconLeft mr10 mt10\"><span>5.1 Import clients</span></a>
                    <a href=\"";
            // line 75
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("servicesolusvm/import/servers", ["node_id" => 1]);
            echo "\" title=\"\" class=\"btnIconLeft mr10 mt10\"><span>5.2 Import servers</span></a>
                ";
        } else {
            // line 77
            echo "                    <p>Configure API before importing data. Refresh this page if you already confugured API.</p>
                ";
        }
        // line 79
        echo "            </div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h5>";
        // line 84
        echo gettext("Connect to SolusVM master server via API");
        echo "</h5>
                <p>";
        // line 85
        echo gettext("To create an API user login to SolusVM admin area and click Configuration > API Access from the top menu then select Add API User.");
        echo "</p>
            </div>
            
            <div class=\"body\">
                <div class=\"nNote nInformation first\">
                    <p><strong>";
        // line 90
        echo gettext("INFORMATION");
        echo ": </strong>You need to specify IP <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "system_env", [], "any", false, false, false, 90), "ip", [], "any", false, false, false, 90), "html", null, true);
        echo "</strong> in the SolusVM API user.</p>
                </div>
            </div>
            
            <form method=\"post\" action=\"";
        // line 94
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/servicesolusvm/cluster_config_update");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"";
        echo gettext("Configuration updated");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 97
        echo gettext("ID");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"id\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "id", [], "any", false, false, false, 99), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Example: t5kGu4EZqAyRqh0ZlN2O\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 105
        echo gettext("Key");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"key\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "key", [], "any", false, false, false, 107), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Example: XzTftPQTxEwRxHmTARIS\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 113
        echo gettext("Master server IP");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ipaddress\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "ipaddress", [], "any", false, false, false, 115), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Example: 123.123.123.123\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>";
        // line 121
        echo gettext("Secure connection");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"secure\" value=\"1\" ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "secure", [], "any", false, false, false, 123) == "1")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"secure\" value=\"0\" ";
        // line 124
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "secure", [], "any", false, false, false, 124)) {
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
        // line 130
        echo gettext("Custom port");
        echo ":</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"port\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "port", [], "any", false, false, false, 132), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Leave blank to use default port 5353 and 5656 for secure connection");
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"cluster_id\" value=\"1\" />
                    <input type=\"button\" value=\"2. ";
        // line 138
        echo gettext("Test connection");
        echo "\" class=\"greyishBtn submitForm\" id=\"testconnection\"/>
                    <input type=\"submit\" value=\"1. ";
        // line 139
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                    
                </fieldset>
            </form>

            <div class=\"fix\"></div>

        </div>

    </div>
</div>
";
    }

    // line 152
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#testconnection').click(function(){
        bb.post('admin/servicesolusvm/test_connection', null, function(result){
            bb.msg('Successfully connected to SolusVM server');
        });
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicesolusvm_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 154,  355 => 152,  339 => 139,  335 => 138,  324 => 132,  319 => 130,  306 => 124,  298 => 123,  293 => 121,  284 => 115,  279 => 113,  270 => 107,  265 => 105,  256 => 99,  251 => 97,  243 => 94,  234 => 90,  226 => 85,  222 => 84,  215 => 79,  211 => 77,  206 => 75,  201 => 74,  199 => 73,  194 => 71,  187 => 67,  174 => 57,  169 => 55,  162 => 51,  158 => 50,  150 => 45,  145 => 42,  139 => 40,  137 => 39,  132 => 37,  125 => 33,  121 => 32,  109 => 23,  105 => 22,  99 => 18,  95 => 16,  93 => 15,  90 => 14,  88 => 13,  84 => 12,  77 => 8,  71 => 7,  65 => 6,  62 => 5,  58 => 4,  51 => 3,  47 => 1,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% set active_menu = 'system' %}
{% block meta_title %}{% trans 'SolusVM' %}{% endblock %}
{% block breadcrumbs %}
    <ul>
        <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
        <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
        <li class=\"lastB\">{% trans 'SolusVM' %}</li>
    </ul>
{% endblock %}

{% block content %}
{% set params = admin.servicesolusvm_cluster_config %}

{% if params.ipaddress %}
    {% set master_url = 'http://'~params.ipaddress~':'~params.port|default(5353)~'/admincp' %}
{% endif %}

<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-start\">{% trans 'SolusVM' %}</a></li>
        <li><a href=\"#tab-index\" id=\"open-index-tab\">{% trans 'API configuration' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        
        <div class=\"tab_content nopadding\" id=\"tab-start\">
            <div class=\"help\">
                <img src=\"/bb-modules/Servicesolusvm/icon.png\" alt=\"SolusVM logo\" class=\"\" style=\"width: 150px; float: right; margin: 0 5px 0 10px;\"/>
                <h5>{% trans 'Getting started with SolusVM' %}</h5>
                <p>{% trans 'This guide will help you to get started selling SolusVM virtual servers with BoxBilling.' %}</p>
            </div>
            
            <div class=\"body\">    
                <h2>{% trans '1. Configure your SolusVM server' %}</h2>
                <p>Make sure that your SolusVM master server is properly configured - has defined nodes, plans, free ip addresses, operating system templates.</p>
                {% if master_url %}
                <p><a href=\"{{master_url}}\" class=\"btnIconLeft mr10 mt10\" target=\"_blank\"><span>Open SolusVm admin panel</span></a></p>
                {% endif %}
            </div>
            
            <div class=\"body\">
                <h2>{% trans '2. Configure API' %}</h2>
                <p><a href=\"\" onclick=\"\$('#open-index-tab').click(); return false;\">Configure SolusVM API</a> and test if BoxBilling can connect successfully. To create an API user login to SolusVM admin area and click Configuration > API Access from the top menu then select Add API User.</p>
            </div>
            
            <div class=\"body\">    
                <h2>{% trans '3. Create new product category' %}</h2>
                <p>Create <a href=\"{{'product'|alink({'cat_title' : 'VPS', 'cat_description' : 'Virtual private servers'})}}#tab-new-category\" target=\"_blank\">new product category</a> for VPS products. Category must contain only solusvm products otherwise order form might not work as expected.</p>
            </div>
            
            <div class=\"body list arrowBlue\">
                <h2>{% trans '4. Create SolusVM products' %}</h2>
                <p>Imagine that product on BoxBilling is SolusVM plan.</p>
                <p><a href=\"{{'product'|alink({'type' : 'solusvm', 'title' : 'VPS-1'})}}#tab-new\" target=\"_blank\">Create products</a> in newly created category by selecting product type <strong>Solusvm</strong>.</p>
                <p>Define product prices and switch to \"Configuration\" tab:</p>
                <ul>
                    <li>Select virtualization type</li>
                    <li>Select node on which VPS will be created</li>
                    <li>Select plan</li>
                    <li>Define IPs amount for VPS server</li>
                    <li>Provide information about plan to BoxBilling so it can show these values to your clients. (SolusVM API does not provide this information)</li>
                    <li>Provide slider information to be displayed on order form</li>
                </ul>
                <p><a href=\"{{ 'order'|link }}\" target=\"_blank\">Check order page</a> while creating products to see slider changes</p>
            </div>
            
            <div class=\"body\">
                <h2>{% trans '5. Import data from SolusVM server' %}</h2>
                <p>If you already have successfully connected to master server and have existing clients and server then you can import them using these tools:</p>
                {% if master_url %}
                    <a href=\"{{ 'servicesolusvm/import/clients'|alink }}\" title=\"\" class=\"btnIconLeft mr10 mt10\"><span>5.1 Import clients</span></a>
                    <a href=\"{{ 'servicesolusvm/import/servers'|alink({'node_id' : 1}) }}\" title=\"\" class=\"btnIconLeft mr10 mt10\"><span>5.2 Import servers</span></a>
                {% else %}
                    <p>Configure API before importing data. Refresh this page if you already confugured API.</p>
                {% endif %}
            </div>
        </div>
        
        <div class=\"tab_content nopadding\" id=\"tab-index\">
            <div class=\"help\">
                <h5>{% trans 'Connect to SolusVM master server via API' %}</h5>
                <p>{% trans 'To create an API user login to SolusVM admin area and click Configuration > API Access from the top menu then select Add API User.' %}</p>
            </div>
            
            <div class=\"body\">
                <div class=\"nNote nInformation first\">
                    <p><strong>{% trans 'INFORMATION' %}: </strong>You need to specify IP <strong>{{ admin.system_env.ip }}</strong> in the SolusVM API user.</p>
                </div>
            </div>
            
            <form method=\"post\" action=\"{{ 'api/admin/servicesolusvm/cluster_config_update'|link }}\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Configuration updated' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'ID' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"id\" value=\"{{params.id}}\" required=\"required\" placeholder=\"Example: t5kGu4EZqAyRqh0ZlN2O\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>{% trans 'Key' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"password\" name=\"key\" value=\"{{params.key}}\" required=\"required\" placeholder=\"Example: XzTftPQTxEwRxHmTARIS\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>{% trans 'Master server IP' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"ipaddress\" value=\"{{params.ipaddress}}\" required=\"required\" placeholder=\"Example: 123.123.123.123\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>{% trans 'Secure connection' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"secure\" value=\"1\" {% if params.secure == \"1\" %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                            <input type=\"radio\" name=\"secure\" value=\"0\" {% if not params.secure %}checked=\"checked\"{% endif %}/><label>{% trans 'No' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <div class=\"rowElem\">
                        <label>{% trans 'Custom port' %}:</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"port\" value=\"{{params.port}}\" placeholder=\"{% trans 'Leave blank to use default port 5353 and 5656 for secure connection' %}\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"cluster_id\" value=\"1\" />
                    <input type=\"button\" value=\"2. {% trans 'Test connection' %}\" class=\"greyishBtn submitForm\" id=\"testconnection\"/>
                    <input type=\"submit\" value=\"1. {% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                    
                </fieldset>
            </form>

            <div class=\"fix\"></div>

        </div>

    </div>
</div>
{% endblock %}

{% block js %}
{% autoescape \"js\" %}
<script type=\"text/javascript\">
\$(function() {
    \$('#testconnection').click(function(){
        bb.post('admin/servicesolusvm/test_connection', null, function(result){
            bb.msg('Successfully connected to SolusVM server');
        });
        return false;
    });
});
</script>
{% endautoescape %}
{% endblock %}", "mod_servicesolusvm_settings.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Servicesolusvm/html_admin/mod_servicesolusvm_settings.phtml");
    }
}
