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

/* mod_email_template.phtml */
class __TwigTemplate_21a35574769f89f596fea82b232887ac extends \Twig\Template
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
        // line 3
        $context["active_menu"] = "system";
        // line 1
        $this->parent = $this->loadTemplate("layout_default.phtml", "mod_email_template.phtml", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Email template";
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 7
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 9
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/email");
        echo "\">";
        echo gettext("Email");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "action_code", [], "any", false, false, false, 10), "html", null, true);
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
";
        // line 21
        echo "    
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#template\">";
        // line 24
        echo gettext("Template");
        echo "</a></li>
        <li><a href=\"#vars\">";
        // line 25
        echo gettext("Variables");
        echo "</a></li>
        <li><a href=\"#manage\" >";
        // line 26
        echo gettext("Template Settings");
        echo "</a></li>
        <li><a href=\"#reset\">";
        // line 27
        echo gettext("Reset template");
        echo "</a></li>
        <li><a href=\"#examples\">";
        // line 28
        echo gettext("Examples");
        echo "</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"template\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 34
        echo gettext("Manage email template");
        echo "</h3>
                <p>";
        // line 35
        echo gettext("Most email templates receives parameters from BoxBilling. You can browse them on \"Variables\" tab. Copy variable name to email template and hit preview to see parsed content. Please note that values will be different when actual email is sent.");
        echo "</p>
            </div>
            <div class=\"body\">
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 38
        echo gettext("Template updated");
        echo "\">
                <fieldset>
                <div class=\"formBottom\">
                    <input type=\"text\" name=\"subject\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "subject", [], "any", false, false, false, 41), "html", null, true);
        echo "\" id=\"email-subject\" required=\"required\" placeholder=\"Email subject\"/>
                </div>
                <div class=\"formBottom\">
                    <textarea name=\"content\" cols=\"5\" rows=\"20\" id=\"email-template\" required=\"required\" placeholder=\"Email message\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "content", [], "any", false, false, false, 44), "html", null, true);
        echo "</textarea>
                </div>
                    
                ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "vars", [], "any", false, false, false, 47)) {
            echo "<input type=\"button\" value=\"";
            echo gettext("Preview");
            echo "\" class=\"blueBtn\" id=\"preview-button\"/>";
        } else {
            echo gettext("Preview mode is disabled until first event occurrence");
        }
        // line 48
        echo "                <input type=\"submit\" value=\"";
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" style=\"margin: 0;\"/>
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 49), "html", null, true);
        echo "\"/>
                <div class=\"fix\"></div>
                </fieldset>
            </form>
            
            <div class=\"pt20\" id=\"preview\" style=\"display: none;\">
                <div class=\"body esubject mb20\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
                <div class=\"body econtent\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
            </div>
            </div>
        </div>
        
        <div id=\"manage\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 63
        echo gettext("Template settings");
        echo "</h3>
                <p>";
        // line 64
        echo gettext("Enable or disable this email template.");
        echo "</p>
            </div>
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"";
        // line 66
        echo gettext("Template updated");
        echo "\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>";
        // line 69
        echo gettext("Enabled");
        echo ":</label>
                    <div class=\"formRight noborder\">
                        <input type=\"radio\" name=\"enabled\" value=\"1\"";
        // line 71
        if (twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "enabled", [], "any", false, false, false, 71)) {
            echo " checked=\"checked\"";
        }
        echo "/><label>Yes</label>
                        <input type=\"radio\" name=\"enabled\" value=\"0\"";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "enabled", [], "any", false, false, false, 72)) {
            echo " checked=\"checked\"";
        }
        echo " /><label>No</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>";
        // line 77
        echo gettext("Category");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"category\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "category", [], "any", false, false, false, 79), "html", null, true);
        echo "\" required=\"required\" placeholder=\"General\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"";
        // line 83
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
                <input type=\"hidden\" name=\"id\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 84), "html", null, true);
        echo "\"/>
            </fieldset>
            </form>
        </div>
        
        <div id=\"vars\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 91
        echo gettext("List of variables used in this email");
        echo "</h3>
                <p>";
        // line 92
        echo gettext("These values will change when real email is sent. You can pass these variables to admin or guest API to get additional information from database.");
        echo "</p>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>";
        // line 98
        echo gettext("Variable");
        echo "</th>
                        <th>";
        // line 99
        echo gettext("Example value");
        echo "</th>
                    </tr>
                </thead>
                
                <tbody>
                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "vars", [], "any", false, false, false, 104));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["k"] => $context["var"]) {
            // line 105
            echo "                    ";
            if (twig_test_iterable($context["var"])) {
                // line 106
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["var"]);
                foreach ($context['_seq'] as $context["subkey"] => $context["subvalue"]) {
                    // line 107
                    echo "                            ";
                    if (twig_test_iterable($context["subvalue"])) {
                        // line 108
                        echo "                                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["var"]);
                        foreach ($context['_seq'] as $context["subsubkey"] => $context["subsubvalue"]) {
                            // line 109
                            echo "                                    ";
                            if ( !twig_test_iterable($context["subsubvalue"])) {
                                // line 110
                                echo "                                        <tr>
                                            <td>";
                                // line 111
                                echo "{{";
                                echo " ";
                                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                                echo ".";
                                echo twig_escape_filter($this->env, $context["subkey"], "html", null, true);
                                echo ".";
                                echo twig_escape_filter($this->env, $context["subsubkey"], "html", null, true);
                                echo "}}";
                                echo "</td>
                                            <td>";
                                // line 112
                                echo twig_escape_filter($this->env, $context["subsubvalue"], "html", null, true);
                                echo "</td>
                                        </tr>
                                    ";
                            } else {
                                // line 115
                                echo "                                        <tr>
                                            <td>";
                                // line 116
                                echo "{{";
                                echo " ";
                                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                                echo ".";
                                echo twig_escape_filter($this->env, $context["subkey"], "html", null, true);
                                echo ".";
                                echo twig_escape_filter($this->env, $context["subsubkey"], "html", null, true);
                                echo "}}";
                                echo "</td>
                                            <td>Array [ ]</td>
                                        </tr>
                                    ";
                            }
                            // line 120
                            echo "                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['subsubkey'], $context['subsubvalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 121
                        echo "                            ";
                    } else {
                        // line 122
                        echo "                                <tr>
                                    <td>";
                        // line 123
                        echo "{{";
                        echo " ";
                        echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                        echo ".";
                        echo twig_escape_filter($this->env, $context["subkey"], "html", null, true);
                        echo " ";
                        echo "}}";
                        echo "</td>
                                    <td>";
                        // line 124
                        echo twig_escape_filter($this->env, $context["subvalue"], "html", null, true);
                        echo "</td>
                                </tr>
                            ";
                    }
                    // line 127
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['subkey'], $context['subvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                    ";
            } else {
                // line 129
                echo "                        <tr>
                            <td>";
                // line 130
                echo "{{";
                echo " ";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo " ";
                echo "}}";
                echo "</td>
                            <td>";
                // line 131
                echo twig_escape_filter($this->env, $context["var"], "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            // line 134
            echo "
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 136
            echo "                    <tr>
                        <td colspan=\"2\">";
            // line 137
            echo gettext("This template does not receive any parameters");
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['var'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                </tbody>
            </table>
        </div>
        
        <div id=\"reset\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 146
        echo gettext("Reset email template to default");
        echo "</h3>
            </div>
            
            <div class=\"body mainForm\">
                <form action=\"";
        // line 150
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/template_reset");
        echo "\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"submit\" value=\"";
        // line 151
        echo gettext("Reset to default");
        echo "\" class=\"blackBtn\"/>
                    <input type=\"hidden\" name=\"code\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "action_code", [], "any", false, false, false, 152), "html", null, true);
        echo "\"/>
                </form>
            </div>
        </div>
        
        <div id=\"examples\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 159
        echo gettext("Email templates examples");
        echo "</h3>
                <p>";
        // line 160
        echo gettext("Email template playground. Use this tool to try rendering email templates.");
        echo "</p>
            </div>
            
            <div class=\"body mainForm\">
                <div class=\"formBottom\">
                    <textarea cols=\"5\" rows=\"20\" class=\"example\">";
        // line 165
        echo " ";
        ob_start();
        // line 166
        echo "
This is an example of markdown syntax in email template

*Italic text*    
**Bolded text**   

Lists:

* Red
* Green
* Blue

***

Link to login form: <";
        // line 180
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
        echo ">   

Company signature: ";
        // line 182
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 182), "signature", [], "any", false, false, false, 182);
        echo "   

You can event use IF statements in email templates: ";
        // line 184
        if ((1 == 2)) {
            echo "This will never show";
        } else {
            echo "Of course 1 is not equal 2";
        }
        // line 185
        echo "
***

Accessing Admin API can get information about your BoxBilling, for example how many clients you have:   
";
        // line 189
        $context["stats"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "stats_get_summary", [], "any", false, false, false, 189);
        echo "   
**Total clients:** ";
        // line 190
        echo twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "clients_total", [], "any", false, false, false, 190);
        echo "

";
        // line 194
        echo "
";
        // line 196
        echo "

";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 165
        echo twig_markdown_filter($this->env, $___internal_parse_0_);
        // line 198
        echo "</textarea>
                    <input type=\"button\" value=\"";
        // line 199
        echo gettext("Preview");
        echo "\" class=\"blueBtn mt10 epb\"/>
                    <div class=\"mt20 example-preview\" style=\"padding: 5px; background: white; border: 1px dashed grey; overflow: auto; display: none;\"></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

";
    }

    // line 211
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('.epb').click(function(){
        var r = \$(this).siblings('.example-preview');
        var params = {_tpl:\$(this).siblings('textarea').val(), id:'";
        // line 216
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 216), "html", null, true);
        echo "' };
        bb.post('admin/email/template_render', params, function(result){
            r.html(result).show();
        });
        
    });
    
    \$('#preview-button').click(function(){
        var params = {_tpl:\$('#email-template').val(), id:'";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 224), "html", null, true);
        echo "' };
        bb.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .econtent').html(result);
        });
        
        var params = {_tpl:\$('#email-subject').val(), id:'";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["template"] ?? null), "id", [], "any", false, false, false, 230), "html", null, true);
        echo "' };
        bb.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .esubject').html(result);
        });
        return false;
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_email_template.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 230,  550 => 224,  539 => 216,  533 => 212,  529 => 211,  514 => 199,  511 => 198,  509 => 165,  504 => 196,  501 => 194,  496 => 190,  492 => 189,  486 => 185,  480 => 184,  475 => 182,  470 => 180,  454 => 166,  451 => 165,  443 => 160,  439 => 159,  429 => 152,  425 => 151,  421 => 150,  414 => 146,  406 => 140,  397 => 137,  394 => 136,  388 => 134,  382 => 131,  374 => 130,  371 => 129,  368 => 128,  362 => 127,  356 => 124,  346 => 123,  343 => 122,  340 => 121,  334 => 120,  320 => 116,  317 => 115,  311 => 112,  300 => 111,  297 => 110,  294 => 109,  289 => 108,  286 => 107,  281 => 106,  278 => 105,  273 => 104,  265 => 99,  261 => 98,  252 => 92,  248 => 91,  238 => 84,  234 => 83,  227 => 79,  222 => 77,  212 => 72,  206 => 71,  201 => 69,  195 => 66,  190 => 64,  186 => 63,  169 => 49,  164 => 48,  156 => 47,  150 => 44,  144 => 41,  138 => 38,  132 => 35,  128 => 34,  119 => 28,  115 => 27,  111 => 26,  107 => 25,  103 => 24,  98 => 21,  95 => 15,  91 => 14,  84 => 10,  78 => 9,  72 => 8,  66 => 7,  63 => 6,  59 => 5,  52 => 2,  47 => 1,  45 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"layout_default.phtml\" %}
{% block meta_title %}Email template{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li><a href=\"{{ 'extension/settings/email'|alink }}\">{% trans 'Email' %}</a></li>
    <li class=\"lastB\">{{template.action_code}}</li>
</ul>
{% endblock %}

{% block content %}

{# if template.vars|length == 0 %}
<div class=\"nNote nInformation hideit first\">
    <p><strong>{% trans 'INFORMATION' %}: </strong>{% trans 'This email template is deprecated' %}</p>
</div>
{% endif #}
    
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#template\">{% trans 'Template' %}</a></li>
        <li><a href=\"#vars\">{% trans 'Variables' %}</a></li>
        <li><a href=\"#manage\" >{% trans 'Template Settings' %}</a></li>
        <li><a href=\"#reset\">{% trans 'Reset template' %}</a></li>
        <li><a href=\"#examples\">{% trans 'Examples' %}</a></li>
    </ul>

    <div class=\"tab_container\">
        <div id=\"template\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Manage email template' %}</h3>
                <p>{% trans 'Most email templates receives parameters from BoxBilling. You can browse them on \"Variables\" tab. Copy variable name to email template and hit preview to see parsed content. Please note that values will be different when actual email is sent.' %}</p>
            </div>
            <div class=\"body\">
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"{% trans 'Template updated' %}\">
                <fieldset>
                <div class=\"formBottom\">
                    <input type=\"text\" name=\"subject\" value=\"{{ template.subject }}\" id=\"email-subject\" required=\"required\" placeholder=\"Email subject\"/>
                </div>
                <div class=\"formBottom\">
                    <textarea name=\"content\" cols=\"5\" rows=\"20\" id=\"email-template\" required=\"required\" placeholder=\"Email message\">{{ template.content }}</textarea>
                </div>
                    
                {% if template.vars %}<input type=\"button\" value=\"{% trans 'Preview' %}\" class=\"blueBtn\" id=\"preview-button\"/>{% else %}{% trans 'Preview mode is disabled until first event occurrence' %}{% endif %}
                <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" style=\"margin: 0;\"/>
                <input type=\"hidden\" name=\"id\" value=\"{{ template.id }}\"/>
                <div class=\"fix\"></div>
                </fieldset>
            </form>
            
            <div class=\"pt20\" id=\"preview\" style=\"display: none;\">
                <div class=\"body esubject mb20\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
                <div class=\"body econtent\" style=\"background: white; border: 1px dashed grey; overflow: auto;\"></div>
            </div>
            </div>
        </div>
        
        <div id=\"manage\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Template settings' %}</h3>
                <p>{% trans 'Enable or disable this email template.' %}</p>
            </div>
            <form method=\"post\" action=\"admin/email/template_update\" class=\"mainForm save api-form\" data-api-msg=\"{% trans 'Template updated' %}\">
            <fieldset>
                <div class=\"rowElem noborder\">
                    <label>{% trans 'Enabled' %}:</label>
                    <div class=\"formRight noborder\">
                        <input type=\"radio\" name=\"enabled\" value=\"1\"{% if template.enabled %} checked=\"checked\"{% endif %}/><label>Yes</label>
                        <input type=\"radio\" name=\"enabled\" value=\"0\"{% if not template.enabled %} checked=\"checked\"{% endif %} /><label>No</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label>{% trans 'Category' %}</label>
                    <div class=\"formRight\">
                        <input type=\"text\" name=\"category\" value=\"{{ template.category }}\" required=\"required\" placeholder=\"General\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
                <input type=\"hidden\" name=\"id\" value=\"{{ template.id }}\"/>
            </fieldset>
            </form>
        </div>
        
        <div id=\"vars\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'List of variables used in this email' %}</h3>
                <p>{% trans 'These values will change when real email is sent. You can pass these variables to admin or guest API to get additional information from database.' %}</p>
            </div>
            
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <th>{% trans 'Variable' %}</th>
                        <th>{% trans 'Example value' %}</th>
                    </tr>
                </thead>
                
                <tbody>
                {% for k,var in template.vars %}
                    {% if var is iterable %}
                        {% for subkey,subvalue in var %}
                            {% if subvalue is iterable %}
                                {% for subsubkey,subsubvalue in var %}
                                    {% if subsubvalue is not iterable %}
                                        <tr>
                                            <td>{{ '{{' }} {{ k }}.{{subkey}}.{{subsubkey}}{{ '}}' }}</td>
                                            <td>{{ subsubvalue }}</td>
                                        </tr>
                                    {% else %}
                                        <tr>
                                            <td>{{ '{{' }} {{ k }}.{{subkey}}.{{subsubkey}}{{ '}}' }}</td>
                                            <td>Array [ ]</td>
                                        </tr>
                                    {% endif %}
                                {% endfor %}
                            {% else %}
                                <tr>
                                    <td>{{ '{{' }} {{ k }}.{{subkey}} {{ '}}' }}</td>
                                    <td>{{ subvalue }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    {% else %}
                        <tr>
                            <td>{{ '{{' }} {{ k }} {{ '}}' }}</td>
                            <td>{{ var }}</td>
                        </tr>
                    {% endif %}

                {% else %}
                    <tr>
                        <td colspan=\"2\">{% trans 'This template does not receive any parameters' %}</td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
        
        <div id=\"reset\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Reset email template to default' %}</h3>
            </div>
            
            <div class=\"body mainForm\">
                <form action=\"{{ 'api/admin/email/template_reset'|link }}\" class=\"api-form\" data-api-reload=\"1\">
                    <input type=\"submit\" value=\"{% trans 'Reset to default' %}\" class=\"blackBtn\"/>
                    <input type=\"hidden\" name=\"code\" value=\"{{ template.action_code }}\"/>
                </form>
            </div>
        </div>
        
        <div id=\"examples\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Email templates examples' %}</h3>
                <p>{% trans 'Email template playground. Use this tool to try rendering email templates.' %}</p>
            </div>
            
            <div class=\"body mainForm\">
                <div class=\"formBottom\">
                    <textarea cols=\"5\" rows=\"20\" class=\"example\">{% autoescape false %} {% apply markdown %}

This is an example of markdown syntax in email template

*Italic text*    
**Bolded text**   

Lists:

* Red
* Green
* Blue

***

Link to login form: <{{ 'login'|link }}>   

Company signature: {{ guest.system_company.signature }}   

You can event use IF statements in email templates: {% if 1 == 2 %}This will never show{% else %}Of course 1 is not equal 2{% endif %}

***

Accessing Admin API can get information about your BoxBilling, for example how many clients you have:   
{% set stats =  admin.stats_get_summary %}   
**Total clients:** {{ stats.clients_total }}

{# Comments in email templates. This text is not visible #}
{# Uncomment the line below to see what is the output #}

{#<pre>{% debug stats %}</pre>#}


{% endapply %}{% endautoescape %}</textarea>
                    <input type=\"button\" value=\"{% trans 'Preview' %}\" class=\"blueBtn mt10 epb\"/>
                    <div class=\"mt20 example-preview\" style=\"padding: 5px; background: white; border: 1px dashed grey; overflow: auto; display: none;\"></div>
                </div>
            </div>
            
        </div>
    </div>
    <div class=\"fix\"></div>\t 
</div>

{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
    \$('.epb').click(function(){
        var r = \$(this).siblings('.example-preview');
        var params = {_tpl:\$(this).siblings('textarea').val(), id:'{{template.id}}' };
        bb.post('admin/email/template_render', params, function(result){
            r.html(result).show();
        });
        
    });
    
    \$('#preview-button').click(function(){
        var params = {_tpl:\$('#email-template').val(), id:'{{template.id}}' };
        bb.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .econtent').html(result);
        });
        
        var params = {_tpl:\$('#email-subject').val(), id:'{{template.id}}' };
        bb.post('admin/email/template_render', params, function(result){
            \$('#preview').show();
            \$('#preview .esubject').html(result);
        });
        return false;
    });
});
</script>
{% endblock %}", "mod_email_template.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Email/html_admin/mod_email_template.phtml");
    }
}
