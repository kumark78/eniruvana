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

/* mod_staff_manage.phtml */
class __TwigTemplate_1ca98aac68fce55cf448f05bf01da959 extends \Twig\Template
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
        return "layout_default.phtml";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_staff_manage.phtml", 2)->unwrap();
        // line 5
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_staff_manage.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Profile");
    }

    // line 8
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 11
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 12
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/staff");
        echo "\">";
        echo gettext("Staff");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "
";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "role", [], "any", false, false, false, 19) == "cron")) {
            // line 20
            echo "<div class=\"nNote nInformation hideit first\">
    <p><strong>";
            // line 21
            echo gettext("INFORMATION");
            echo ": </strong>";
            echo gettext("This staff member is used by BoxBilling to perform system tasks and can not be removed.");
            echo "</p>
</div>
";
        }
        // line 24
        echo "
<!-- Full width tabs --> 
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">";
        // line 28
        echo gettext("Profile");
        echo "</a></li>
        <li><a href=\"#tab-permissions\">";
        // line 29
        echo gettext("Permissions");
        echo "</a></li>
        <li><a href=\"#tab-password\">";
        // line 30
        echo gettext("Password");
        echo "</a></li>
        <li><a href=\"#tab-api\">";
        // line 31
        echo gettext("API");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>";
        // line 38
        echo gettext("Manage staff member details");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/update\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 41
        echo gettext("This staff member updated.");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 44
        echo gettext("Group");
        echo "</label>
                        <div class=\"formRight\">
                            ";
        // line 46
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["admin_group_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_group_get_pairs", [], "any", false, false, false, 46), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "group", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), 1], 46, $context, $this->getSourceContext());
        echo "
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"name\">";
        // line 51
        echo gettext("Name");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"email\">";
        // line 58
        echo gettext("Email");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "email", [], "any", false, false, false, 60), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>  
                    <div class=\"rowElem\">
                        <label>";
        // line 65
        echo gettext("Status");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\"";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "status", [], "any", false, false, false, 67) == "active")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Active</label>
                            <input type=\"radio\" name=\"status\" value=\"inactive\"";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "status", [], "any", false, false, false, 68) == "inactive")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>Inactive</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"signature\">";
        // line 73
        echo gettext("Signature");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "signature", [], "any", false, false, false, 75), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 80
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-permissions\" class=\"tab_content nopadding\">
            <div class=\"help\">
                ";
        // line 87
        $context["member_name"] = twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "name", [], "any", false, false, false, 87);
        // line 88
        echo "                <h3>";
        echo strtr(gettext("%member_name% permissions"), array("%member_name%" => ($context["member_name"] ?? null), ));
        echo "</h3>
            </div>
            
            ";
        // line 91
        if ((twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "role", [], "any", false, false, false, 91) == "admin")) {
            // line 92
            echo "            <div class=\"body\">
                <p>";
            // line 93
            echo gettext("Administrator account is allowed to do everything");
            echo "</p>
            </div>
            ";
        } else {
            // line 96
            echo "            ";
            $context["prms"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "staff_permissions_get", [0 => ["id" => twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 96)]], "method", false, false, false, 96);
            // line 97
            echo "            <form method=\"post\" action=\"admin/staff/permissions_update\" class=\"mainForm api-form\" data-api-msg=\"";
            echo gettext("Permissions updated");
            echo "\">
            <input type=\"hidden\" name=\"permissions[]\" value=\"\">
                
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>";
            // line 106
            echo gettext("Module");
            echo "</td>
                    </tr>
                </thead>
                
                <tbody>
                ";
            // line 111
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["mods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["mod"]) {
                // line 112
                echo "                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"permissions[";
                // line 114
                echo twig_escape_filter($this->env, $context["mod"], "html", null, true);
                echo "]\" value=\"1\" class=\"perm\" ";
                if ((($__internal_compile_0 = ($context["prms"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["mod"]] ?? null) : null)) {
                    echo "checked=\"checked\"";
                }
                echo "/> 
                    </td>
                    <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["mod"]), "html", null, true);
                echo "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo "                </tbody>
                
                <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 124), "html", null, true);
            echo "\">
                        <input type=\"submit\" value=\"";
            // line 125
            echo gettext("Save");
            echo "\" class=\"greyishBtn\" />
                    </td>
                </tr>
                </tfoot>
            </table>
            </form>
            ";
        }
        // line 132
        echo "        </div>
            
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 136
        echo gettext("Change staff member password");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/change_password\" class=\"mainForm api-form\" data-api-msg=\"";
        // line 139
        echo gettext("Staff member password changed");
        echo "\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label for=\"password\">";
        // line 142
        echo gettext("Password");
        echo "</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"password_confirm\">";
        // line 149
        echo gettext("Repeat same password");
        echo "</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password_confirm\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 156), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 157
        echo gettext("Submit");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-api\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 164
        echo gettext("Api key is used to manage system via other interfaces.");
        echo "</h3>
            </div>

            <form method=\"post\" action=\"admin/profile/generate_api_key\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 170
        echo gettext("API key");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" value=\"";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "profile_get", [], "any", false, false, false, 172), "api_token", [], "any", false, false, false, 172), "html", null, true);
        echo "\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["staff"] ?? null), "id", [], "any", false, false, false, 176), "html", null, true);
        echo "\">
                    <input type=\"submit\" value=\"";
        // line 177
        echo gettext("Generate new key");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

";
    }

    // line 189
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 190
        echo "<script type=\"text/javascript\">

\$(function() {
    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});
    
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_staff_manage.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 190,  421 => 189,  407 => 177,  403 => 176,  396 => 172,  391 => 170,  382 => 164,  372 => 157,  368 => 156,  358 => 149,  348 => 142,  342 => 139,  336 => 136,  330 => 132,  320 => 125,  316 => 124,  309 => 119,  300 => 116,  291 => 114,  287 => 112,  283 => 111,  275 => 106,  262 => 97,  259 => 96,  253 => 93,  250 => 92,  248 => 91,  241 => 88,  239 => 87,  229 => 80,  225 => 79,  218 => 75,  213 => 73,  203 => 68,  197 => 67,  192 => 65,  184 => 60,  179 => 58,  171 => 53,  166 => 51,  158 => 46,  153 => 44,  147 => 41,  141 => 38,  131 => 31,  127 => 30,  123 => 29,  119 => 28,  113 => 24,  105 => 21,  102 => 20,  100 => 19,  97 => 18,  93 => 17,  86 => 13,  80 => 12,  74 => 11,  68 => 10,  65 => 9,  61 => 8,  54 => 4,  49 => 1,  47 => 5,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}

{% block meta_title %}{% trans 'Profile' %}{% endblock %}
{% set active_menu = 'system' %}


{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li><a href=\"{{ 'extension/settings/staff'|alink }}\">{% trans 'Staff' %}</a></li>
    <li class=\"lastB\">{{staff.name}}</li>
</ul>
{% endblock %}

{% block content %}

{% if staff.role == 'cron' %}
<div class=\"nNote nInformation hideit first\">
    <p><strong>{% trans 'INFORMATION' %}: </strong>{% trans 'This staff member is used by BoxBilling to perform system tasks and can not be removed.' %}</p>
</div>
{% endif %}

<!-- Full width tabs --> 
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-profile\">{% trans 'Profile' %}</a></li>
        <li><a href=\"#tab-permissions\">{% trans 'Permissions' %}</a></li>
        <li><a href=\"#tab-password\">{% trans 'Password' %}</a></li>
        <li><a href=\"#tab-api\">{% trans 'API' %}</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"tab-profile\" class=\"tab_content nopadding\">
            
            <div class=\"help\">
                <h3>{% trans 'Manage staff member details' %}</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/update\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'This staff member updated.' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Group' %}</label>
                        <div class=\"formRight\">
                            {{ mf.selectbox('admin_group_id', admin.staff_group_get_pairs, staff.group.id, 1) }}
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"name\">{% trans 'Name' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"name\" value=\"{{staff.name}}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"email\">{% trans 'Email' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"email\" value=\"{{staff.email}}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>  
                    <div class=\"rowElem\">
                        <label>{% trans 'Status' %}</label>
                        <div class=\"formRight\">
                            <input type=\"radio\" name=\"status\" value=\"active\"{% if staff.status == 'active' %} checked=\"checked\"{% endif %}/><label>Active</label>
                            <input type=\"radio\" name=\"status\" value=\"inactive\"{% if staff.status == 'inactive' %} checked=\"checked\"{% endif %} /><label>Inactive</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"signature\">{% trans 'Signature' %}</label>
                        <div class=\"formRight\">
                            <textarea name=\"signature\" cols=\"5\" rows=\"2\">{{staff.signature}}</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"{{ staff.id }}\">
                    <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-permissions\" class=\"tab_content nopadding\">
            <div class=\"help\">
                {% set member_name = staff.name %}
                <h3>{% trans %}{{ member_name }} permissions{% endtrans %}</h3>
            </div>
            
            {% if staff.role == 'admin' %}
            <div class=\"body\">
                <p>{% trans 'Administrator account is allowed to do everything' %}</p>
            </div>
            {% else %}
            {% set prms = admin.staff_permissions_get({\"id\":staff.id}) %}
            <form method=\"post\" action=\"admin/staff/permissions_update\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Permissions updated' %}\">
            <input type=\"hidden\" name=\"permissions[]\" value=\"\">
                
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 5%\">
                            <input type=\"checkbox\" id=\"perm-check\" /> 
                        </td>
                        <td>{% trans 'Module' %}</td>
                    </tr>
                </thead>
                
                <tbody>
                {% for mod in mods %}
                <tr>
                    <td>
                        <input type=\"checkbox\" name=\"permissions[{{mod}}]\" value=\"1\" class=\"perm\" {% if prms[mod] %}checked=\"checked\"{% endif %}/> 
                    </td>
                    <td>{{mod|title}}</td>
                </tr>
                {% endfor %}
                </tbody>
                
                <tfoot>
                <tr>
                    <td colspan=\"2\">
                        <input type=\"hidden\" name=\"id\" value=\"{{ staff.id }}\">
                        <input type=\"submit\" value=\"{% trans 'Save' %}\" class=\"greyishBtn\" />
                    </td>
                </tr>
                </tfoot>
            </table>
            </form>
            {% endif %}
        </div>
            
        <div id=\"tab-password\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Change staff member password' %}</h3>
            </div>

            <form method=\"post\" action=\"admin/staff/change_password\" class=\"mainForm api-form\" data-api-msg=\"{% trans 'Staff member password changed' %}\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label for=\"password\">{% trans 'Password' %}</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label for=\"password_confirm\">{% trans 'Repeat same password' %}</label>
                        <div class=\"formRight\">
                        <input type=\"password\" name=\"password_confirm\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    
                    <input type=\"hidden\" name=\"id\" value=\"{{ staff.id }}\">
                    <input type=\"submit\" value=\"{% trans 'Submit' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
        
        <div id=\"tab-api\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Api key is used to manage system via other interfaces.' %}</h3>
            </div>

            <form method=\"post\" action=\"admin/profile/generate_api_key\" class=\"mainForm api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'API key' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" value=\"{{ admin.profile_get.api_token }}\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <input type=\"hidden\" name=\"id\" value=\"{{ staff.id }}\">
                    <input type=\"submit\" value=\"{% trans 'Generate new key' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>

        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

{% endblock %}


{% block js%}
<script type=\"text/javascript\">

\$(function() {
    \$('#perm-check').click(function(){
        if(\$('#perm-check').is(':checked')) {
            \$('.perm').prop('checked', true);
        } else {
            \$('.perm').prop('checked', false);
        }
        \$.uniform.update(\".perm\");
    });
});
    
</script>
{% endblock %}", "mod_staff_manage.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/mod_staff_manage.phtml");
    }
}
