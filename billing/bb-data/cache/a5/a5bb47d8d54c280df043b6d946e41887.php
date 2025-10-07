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

/* mod_email_settings.phtml */
class __TwigTemplate_54c921e6d9cec6f0d803ed68645be749 extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_email_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_email_settings.phtml", 2)->unwrap();
        // line 14
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Email");
    }

    // line 5
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <ul>
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
        <li class=\"lastB\">";
        // line 9
        echo gettext("Email");
        echo "</li>
    </ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 19
        echo gettext("Email templates");
        echo "</a></li>
        <li><a href=\"#tab-new\">";
        // line 20
        echo gettext("New template");
        echo "</a></li>
        <li><a href=\"#tab-email\">";
        // line 21
        echo gettext("Email settings");
        echo "</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            ";
        // line 28
        echo twig_call_macro($macros["mf"], "macro_table_search", [], 28, $context, $this->getSourceContext());
        echo "
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 50%\">";
        // line 32
        echo gettext("Title");
        echo "</td>
                        <td>";
        // line 33
        echo gettext("Extension");
        echo "</td>
                        <td>";
        // line 34
        echo gettext("Code");
        echo "</td>
                        <td>";
        // line 35
        echo gettext("Enabled");
        echo "</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 41
        $context["templates"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "email_template_get_list", [0 => twig_array_merge(["per_page" => 100, "page" => twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "page", [], "any", false, false, false, 41)], ($context["request"] ?? null))], "method", false, false, false, 41);
        // line 42
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["templates"] ?? null), "list", [], "any", false, false, false, 42));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["i"] => $context["template"]) {
            // line 43
            echo "                <tr>
                    <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "subject", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                    <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "category", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "action_code", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_call_macro($macros["mf"], "macro_q", [twig_get_attribute($this->env, $this->source, $context["template"], "enabled", [], "any", false, false, false, 47)], 47, $context, $this->getSourceContext());
            echo "</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"";
            // line 49
            echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/email/template");
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 49), "html", null, true);
            echo "\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"";
            // line 50
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/template_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["template"], "id", [], "any", false, false, false, 50)]);
            echo "\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                    
                </tr>

                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tr>
                    <td colspan=\"5\">
                        ";
            // line 58
            echo gettext("The list is empty. Depending on modules enabled email templates will be inserted after first event occurrence.");
            // line 59
            echo "                    </td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"";
        // line 67
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_generate");
        echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/power.png\" alt=\"\"><span>Generate templates</span></a>
                                <a href=\"";
        // line 68
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_enable");
        echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates enabled\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Enable all</span></a>
                                <a href=\"";
        // line 69
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/batch_template_disable");
        echo "\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates disabled\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Disable all</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        ";
        // line 77
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_email"]], "method", false, false, false, 77);
        // line 78
        echo "        <div id=\"tab-email\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>";
        // line 80
        echo gettext("Configure email options");
        echo "</h3>
                <p>";
        // line 81
        echo gettext("BoxBilling sends emails using <em>sendmail</em> by default or you can configure your own SMTP server");
        echo "</p>
            </div>

            <form method=\"post\" action=\"";
        // line 84
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-msg=\"Email settings updated\">
                <fieldset>
                
                <div class=\"rowElem noborder\">
                    <label class=\"topLabel\">Queue options</label>
                    <div class=\"formBottom\" id=\"mailer\">
                        <label>";
        // line 90
        echo gettext("Send emails per cron run (0 = unlimited)");
        echo "</label><input type=\"text\" name=\"queue_once\" placeholder=\"0\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "queue_once", [], "any", false, false, false, 90), "html", null, true);
        echo "\"/>
                        <label>";
        // line 91
        echo gettext("Max email sending time in minutes (0 = unlimited, default 5 min.)");
        echo "</label><input type=\"text\" name=\"time_limit\" placeholder=\"5\" value=\"";
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "time_limit", [], "any", false, false, false, 91)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "time_limit", [], "any", false, false, false, 91), "html", null, true);
        } else {
            echo "5";
        }
        echo "\"/>
                        <label>";
        // line 92
        echo gettext("Cancel sending email after unsuccessful tries (0 = do not cancel)");
        echo "</label><input type=\"text\" name=\"cancel_after\" placeholder=\"0\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "cancel_after", [], "any", false, false, false, 92), "html", null, true);
        echo "\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem noborder\">
                    <label class=\"\">";
        // line 98
        echo gettext("Log sent emails to database");
        echo "</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"log_enabled\" value=\"1\" ";
        // line 100
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "log_enabled", [], "any", false, false, false, 100)) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                        <input type=\"radio\" name=\"log_enabled\" value=\"0\" ";
        // line 101
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "log_enabled", [], "any", false, false, false, 101)) {
            echo "checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"\">";
        // line 107
        echo gettext("Email transport");
        echo "</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"mailer\" value=\"sendmail\" ";
        // line 109
        if (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 109) == "sendmail") ||  !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 109))) {
            echo "checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("SendMail");
        echo "</label>
                        <input type=\"radio\" name=\"mailer\" value=\"smtp\" ";
        // line 110
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 110) == "smtp")) {
            echo "checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("SMTP");
        echo "</label>
                        <input type=\"radio\" name=\"mailer\" value=\"sendgrid\" ";
        // line 111
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 111) == "sendgrid")) {
            echo "checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("SendGrid");
        echo "</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                
                <fieldset class=\"sendgrid\" ";
        // line 117
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 117) != "sendgrid")) {
            echo "style=\"display:none;\"";
        }
        echo " >
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 119
        echo gettext("SendGrid Username");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"sendgrid_username\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sendgrid_username", [], "any", false, false, false, 121), "html", null, true);
        echo "\" placeholder=\"username\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 126
        echo gettext("SendGrid Password");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"sendgrid_password\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "sendgrid_password", [], "any", false, false, false, 128), "html", null, true);
        echo "\" placeholder=\"password\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                
                <fieldset class=\"smtp\" ";
        // line 134
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "mailer", [], "any", false, false, false, 134) != "smtp")) {
            echo "style=\"display:none;\"";
        }
        echo " >
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 136
        echo gettext("SMTP Hostname");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_host\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_host", [], "any", false, false, false, 138), "html", null, true);
        echo "\" placeholder=\"smtp.gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 144
        echo gettext("SMTP Port");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_port\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_port", [], "any", false, false, false, 146), "html", null, true);
        echo "\" placeholder=\"587\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 152
        echo gettext("SMTP Username");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_username\" value=\"";
        // line 154
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_username", [], "any", false, false, false, 154), "html", null, true);
        echo "\" placeholder=\"my.email@gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">";
        // line 160
        echo gettext("SMTP Password");
        echo "</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"smtp_password\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_password", [], "any", false, false, false, 162), "html", null, true);
        echo "\" placeholder=\"******\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"\">";
        // line 168
        echo gettext("SMTP Security");
        echo "</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"smtp_security\" value=\"\"";
        // line 170
        if ( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_security", [], "any", false, false, false, 170)) {
            echo "checked=\"checked\"";
        }
        echo "/><label>None</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"ssl\"";
        // line 171
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_security", [], "any", false, false, false, 171) == "ssl")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>SSL</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"tls\"";
        // line 172
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "smtp_security", [], "any", false, false, false, 172) == "tls")) {
            echo "checked=\"checked\"";
        }
        echo "/><label>TLS</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                    
                <fieldset>
                    <input type=\"submit\" value=\"";
        // line 179
        echo gettext("Update email settings");
        echo "\" class=\"greyishBtn submitForm\" />
                    <input type=\"button\" value=\"";
        // line 180
        echo gettext("Send test email to staff members");
        echo "\" class=\"blackBtn leftBtn\" id=\"emailTest\"/>
                    <input type=\"hidden\" name=\"ext\" value=\"mod_email\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>";
        // line 188
        echo gettext("Where I can use new email template?");
        echo "</h3>
                <p>";
        // line 189
        echo gettext("Newly created email templates can be used in custom event hooks.");
        echo "</p>
            </div>

            <form method=\"post\" action=\"";
        // line 192
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/email/template_create");
        echo "\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>";
        // line 195
        echo gettext("Enabled");
        echo ":</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"enabled\" value=\"1\"/><label>";
        // line 197
        echo gettext("Yes");
        echo "</label>
                            <input type=\"radio\" name=\"enabled\" value=\"0\" checked=\"checked\"/><label>";
        // line 198
        echo gettext("No");
        echo "</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 203
        echo gettext("Category");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"category\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "category", [], "any", false, false, false, 205), "html", null, true);
        echo "\" required=\"required\" placeholder=\"General\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 210
        echo gettext("Action code");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"action_code\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "action_code", [], "any", false, false, false, 212), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 217
        echo gettext("Subject");
        echo "</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"";
        // line 219
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "subject", [], "any", false, false, false, 219), "html", null, true);
        echo "\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>";
        // line 224
        echo gettext("Content");
        echo "</label>
                        <div class=\"formRight\">
                            <textarea name=\"content\" cols=\"5\" rows=\"10\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["requests"] ?? null), "content", [], "any", false, false, false, 226), "html", null, true);
        echo "</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"";
        // line 231
        echo gettext("Create");
        echo "\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
";
    }

    // line 239
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 240
        echo "<script type=\"text/javascript\">
\$(function() {
    \$('#emailTest').click(function(){
        bb.post('admin/email/send_test', null, function(result){
            bb.msg('Email was successfully sent');
        });
        return false;
    });
\t\$(\"#mailer input\").click( function() {
        if(\$(this).val() == 'smtp') {
            \$('fieldset.smtp').slideDown();
        } else {
            \$('fieldset.smtp').slideUp();
        }
\t});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_email_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 240,  575 => 239,  564 => 231,  556 => 226,  551 => 224,  543 => 219,  538 => 217,  530 => 212,  525 => 210,  517 => 205,  512 => 203,  504 => 198,  500 => 197,  495 => 195,  489 => 192,  483 => 189,  479 => 188,  468 => 180,  464 => 179,  452 => 172,  446 => 171,  440 => 170,  435 => 168,  426 => 162,  421 => 160,  412 => 154,  407 => 152,  398 => 146,  393 => 144,  384 => 138,  379 => 136,  372 => 134,  363 => 128,  358 => 126,  350 => 121,  345 => 119,  338 => 117,  325 => 111,  317 => 110,  309 => 109,  304 => 107,  291 => 101,  283 => 100,  278 => 98,  267 => 92,  257 => 91,  251 => 90,  242 => 84,  236 => 81,  232 => 80,  228 => 78,  226 => 77,  215 => 69,  211 => 68,  207 => 67,  200 => 62,  192 => 59,  190 => 58,  186 => 56,  175 => 50,  169 => 49,  164 => 47,  160 => 46,  156 => 45,  152 => 44,  149 => 43,  143 => 42,  141 => 41,  132 => 35,  128 => 34,  124 => 33,  120 => 32,  113 => 28,  103 => 21,  99 => 20,  95 => 19,  90 => 16,  86 => 15,  79 => 9,  73 => 8,  67 => 7,  64 => 6,  60 => 5,  53 => 3,  49 => 1,  47 => 14,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Email' %}{% endblock %}

{% block breadcrumbs %}
    <ul>
        <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
        <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
        <li class=\"lastB\">{% trans 'Email' %}</li>
    </ul>
{% endblock %}


{% set active_menu = 'system' %}
{% block content %}
<div class=\"widget simpleTabs\">

    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Email templates' %}</a></li>
        <li><a href=\"#tab-new\">{% trans 'New template' %}</a></li>
        <li><a href=\"#tab-email\">{% trans 'Email settings' %}</a></li>
    </ul>

    <div class=\"tabs_container\">
        <div class=\"fix\"></div>
        <div class=\"tab_content nopadding\" id=\"tab-index\">

            {{ mf.table_search }}
            <table class=\"tableStatic wide\">
                <thead>
                    <tr>
                        <td style=\"width: 50%\">{% trans 'Title' %}</td>
                        <td>{% trans 'Extension' %}</td>
                        <td>{% trans 'Code' %}</td>
                        <td>{% trans 'Enabled' %}</td>
                        <td width=\"13%\">&nbsp;</td>
                    </tr>
                </thead>

                <tbody>
                {% set templates = admin.email_template_get_list({\"per_page\":100, \"page\":request.page}|merge(request)) %}
                {% for i, template in templates.list %}
                <tr>
                    <td>{{ template.subject }}</td>
                    <td>{{ template.category }}</td>
                    <td>{{ template.action_code }}</td>
                    <td>{{ mf.q(template.enabled) }}</td>
                    <td class=\"actions\">
                        <a class=\"bb-button btn14\" href=\"{{ '/email/template'|alink }}/{{template.id}}\"><img src=\"images/icons/dark/pencil.png\" alt=\"\"></a>
                        <a class=\"btn14 bb-rm-tr api-link\" href=\"{{ 'api/admin/email/template_delete'|link({'id' : template.id}) }}\" data-api-confirm=\"Are you sure?\" data-api-reload=\"1\"><img src=\"images/icons/dark/trash.png\" alt=\"\"></a>
                    </td>
                    
                </tr>

                {% else %}
                <tr>
                    <td colspan=\"5\">
                        {% trans 'The list is empty. Depending on modules enabled email templates will be inserted after first event occurrence.' %}
                    </td>
                </tr>
                {% endfor %}
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan=\"5\">
                            <div class=\"aligncenter\">
                                <a href=\"{{ 'api/admin/email/batch_template_generate'|link}}\" title=\"\" class=\"btn55 mr10 api-link\" data-api-reload=\"1\"><img src=\"images/icons/middlenav/power.png\" alt=\"\"><span>Generate templates</span></a>
                                <a href=\"{{ 'api/admin/email/batch_template_enable'|link}}\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates enabled\"><img src=\"images/icons/middlenav/play2.png\" alt=\"\"><span>Enable all</span></a>
                                <a href=\"{{ 'api/admin/email/batch_template_disable'|link}}\" title=\"\" class=\"btn55 mr10 api-link\" data-api-msg=\"All email templates disabled\"><img src=\"images/icons/middlenav/stop.png\" alt=\"\"><span>Disable all</span></a>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
        {% set params = admin.extension_config_get({\"ext\":\"mod_email\"}) %}
        <div id=\"tab-email\" class=\"tab_content nopadding\">
            <div class=\"help\">
                <h3>{% trans 'Configure email options' %}</h3>
                <p>{% trans 'BoxBilling sends emails using <em>sendmail</em> by default or you can configure your own SMTP server' %}</p>
            </div>

            <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-msg=\"Email settings updated\">
                <fieldset>
                
                <div class=\"rowElem noborder\">
                    <label class=\"topLabel\">Queue options</label>
                    <div class=\"formBottom\" id=\"mailer\">
                        <label>{% trans %}Send emails per cron run (0 = unlimited){% endtrans %}</label><input type=\"text\" name=\"queue_once\" placeholder=\"0\" value=\"{{ params.queue_once }}\"/>
                        <label>{% trans %}Max email sending time in minutes (0 = unlimited, default 5 min.){% endtrans %}</label><input type=\"text\" name=\"time_limit\" placeholder=\"5\" value=\"{% if params.time_limit %}{{ params.time_limit }}{% else %}5{% endif %}\"/>
                        <label>{% trans %}Cancel sending email after unsuccessful tries (0 = do not cancel){% endtrans %}</label><input type=\"text\" name=\"cancel_after\" placeholder=\"0\" value=\"{{ params.cancel_after }}\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem noborder\">
                    <label class=\"\">{% trans %}Log sent emails to database{% endtrans %}</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"log_enabled\" value=\"1\" {% if params.log_enabled %}checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                        <input type=\"radio\" name=\"log_enabled\" value=\"0\" {% if not params.log_enabled %}checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>

                <div class=\"rowElem\">
                    <label class=\"\">{% trans %}Email transport{% endtrans %}</label>
                    <div class=\"formRight\" id=\"mailer\">
                        <input type=\"radio\" name=\"mailer\" value=\"sendmail\" {% if params.mailer == 'sendmail' or not params.mailer %}checked=\"checked\"{% endif %}/><label>{% trans 'SendMail' %}</label>
                        <input type=\"radio\" name=\"mailer\" value=\"smtp\" {% if params.mailer == 'smtp'%}checked=\"checked\"{% endif %} /><label>{% trans 'SMTP' %}</label>
                        <input type=\"radio\" name=\"mailer\" value=\"sendgrid\" {% if params.mailer == 'sendgrid'%}checked=\"checked\"{% endif %} /><label>{% trans 'SendGrid' %}</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                
                <fieldset class=\"sendgrid\" {% if params.mailer != 'sendgrid'%}style=\"display:none;\"{% endif %} >
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SendGrid Username{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"sendgrid_username\" value=\"{{params.sendgrid_username}}\" placeholder=\"username\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SendGrid Password{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"sendgrid_password\" value=\"{{params.sendgrid_password}}\" placeholder=\"password\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                
                <fieldset class=\"smtp\" {% if params.mailer != 'smtp'%}style=\"display:none;\"{% endif %} >
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SMTP Hostname{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_host\" value=\"{{params.smtp_host}}\" placeholder=\"smtp.gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SMTP Port{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_port\" value=\"{{params.smtp_port}}\" placeholder=\"587\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SMTP Username{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"text\" name=\"smtp_username\" value=\"{{params.smtp_username}}\" placeholder=\"my.email@gmail.com\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"topLabel\">{% trans %}SMTP Password{% endtrans %}</label>
                    <div class=\"formBottom\">
                        <input type=\"password\" name=\"smtp_password\" value=\"{{params.smtp_password}}\" placeholder=\"******\"/>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                    
                <div class=\"rowElem\">
                    <label class=\"\">{% trans %}SMTP Security{% endtrans %}</label>
                    <div class=\"formRight\">
                        <input type=\"radio\" name=\"smtp_security\" value=\"\"{% if not params.smtp_security %}checked=\"checked\"{% endif %}/><label>None</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"ssl\"{% if params.smtp_security == 'ssl' %}checked=\"checked\"{% endif %}/><label>SSL</label>
                        <input type=\"radio\" name=\"smtp_security\" value=\"tls\"{% if params.smtp_security == 'tls' %}checked=\"checked\"{% endif %}/><label>TLS</label>
                    </div>
                    <div class=\"fix\"></div>
                </div>
                </fieldset>
                    
                <fieldset>
                    <input type=\"submit\" value=\"{% trans 'Update email settings' %}\" class=\"greyishBtn submitForm\" />
                    <input type=\"button\" value=\"{% trans 'Send test email to staff members' %}\" class=\"blackBtn leftBtn\" id=\"emailTest\"/>
                    <input type=\"hidden\" name=\"ext\" value=\"mod_email\"/>
                </fieldset>
            </form>
        </div>

        <div class=\"tab_content nopadding\" id=\"tab-new\">
            <div class=\"help\">
                <h3>{% trans 'Where I can use new email template?' %}</h3>
                <p>{% trans 'Newly created email templates can be used in custom event hooks.' %}</p>
            </div>

            <form method=\"post\" action=\"{{ 'api/admin/email/template_create'|link }}\" class=\"mainForm save api-form\" data-api-reload=\"1\">
                <fieldset>
                    <div class=\"rowElem noborder\">
                        <label>{% trans 'Enabled' %}:</label>
                        <div class=\"formRight noborder\">
                            <input type=\"radio\" name=\"enabled\" value=\"1\"/><label>{% trans 'Yes' %}</label>
                            <input type=\"radio\" name=\"enabled\" value=\"0\" checked=\"checked\"/><label>{% trans 'No' %}</label>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Category' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"category\" value=\"{{ requests.category }}\" required=\"required\" placeholder=\"General\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Action code' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"action_code\" value=\"{{ requests.action_code }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Subject' %}</label>
                        <div class=\"formRight\">
                            <input type=\"text\" name=\"subject\" value=\"{{ requests.subject }}\" required=\"required\"/>
                        </div>
                        <div class=\"fix\"></div>
                    </div>
                    <div class=\"rowElem\">
                        <label>{% trans 'Content' %}</label>
                        <div class=\"formRight\">
                            <textarea name=\"content\" cols=\"5\" rows=\"10\">{{ requests.content }}</textarea>
                        </div>
                        <div class=\"fix\"></div>
                    </div>

                    <input type=\"submit\" value=\"{% trans 'Create' %}\" class=\"greyishBtn submitForm\" />
                </fieldset>
            </form>
        </div>
    </div>
</div>
{% endblock %}

{% block js %}
<script type=\"text/javascript\">
\$(function() {
    \$('#emailTest').click(function(){
        bb.post('admin/email/send_test', null, function(result){
            bb.msg('Email was successfully sent');
        });
        return false;
    });
\t\$(\"#mailer input\").click( function() {
        if(\$(this).val() == 'smtp') {
            \$('fieldset.smtp').slideDown();
        } else {
            \$('fieldset.smtp').slideUp();
        }
\t});
});
</script>
{% endblock %}
", "mod_email_settings.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Email/html_admin/mod_email_settings.phtml");
    }
}
