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

/* mod_support_helpdesk.phtml */
class __TwigTemplate_9dff47edb498071a66d4e334e6261dbe extends \Twig\Template
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
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_support_helpdesk.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_support_helpdesk.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
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
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li><a href=\"";
        // line 10
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("extension/settings/support");
        echo "#tab-helpdesks\">";
        echo gettext("Support settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 11
        echo gettext("Helpdesk -");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
</ul>
";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "<div class=\"widget\">
    
    <div class=\"head\">
        <h5 class=\"iFrames\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
    </div>

    <div class=\"help\">
        <h3>";
        // line 23
        echo gettext("Support help desk");
        echo "</h3>
        <p>";
        // line 24
        echo gettext("Help desk name will be visible for clients when submitting new ticket. Define very large number of hours to disable auto close ticket option");
        echo "</p>
    </div>

    <form method=\"post\" action=\"";
        // line 27
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/support/helpdesk_update");
        echo "\" class=\"mainForm save api-form\" data-api-msg=\"Help desk updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>";
        // line 30
        echo gettext("Title");
        echo "</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "name", [], "any", false, false, false, 32), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 37
        echo gettext("Email");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "email", [], "any", false, false, false, 39), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 44
        echo gettext("Signature");
        echo "</label>
                <div class=\"formRight\">
                    <textarea name=\"signature\" cols=\"5\" rows=\"5\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "signature", [], "any", false, false, false, 46), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 51
        echo gettext("Close after");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"close_after\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "close_after", [], "any", false, false, false, 53), "html", null, true);
        echo "\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>";
        // line 58
        echo gettext("Can reopen");
        echo "</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"can_reopen\" value=\"1\"";
        // line 60
        if ((twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "can_reopen", [], "any", false, false, false, 60) == "draft")) {
            echo " checked=\"checked\"";
        }
        echo "/><label>";
        echo gettext("Yes");
        echo "</label>
                    <input type=\"radio\" name=\"can_reopen\" value=\"0\"";
        // line 61
        if (( !twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "can_reopen", [], "any", false, false, false, 61) == "active")) {
            echo " checked=\"checked\"";
        }
        echo " /><label>";
        echo gettext("No");
        echo "</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <input type=\"submit\" value=\"";
        // line 66
        echo gettext("Update");
        echo "\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["helpdesk"] ?? null), "id", [], "any", false, false, false, 67), "html", null, true);
        echo "\"/>
        </fieldset>
    </form>
</div>

";
    }

    public function getTemplateName()
    {
        return "mod_support_helpdesk.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 67,  202 => 66,  190 => 61,  182 => 60,  177 => 58,  169 => 53,  164 => 51,  156 => 46,  151 => 44,  143 => 39,  138 => 37,  130 => 32,  125 => 30,  119 => 27,  113 => 24,  109 => 23,  102 => 19,  97 => 16,  93 => 15,  84 => 11,  78 => 10,  72 => 9,  66 => 8,  63 => 7,  59 => 6,  52 => 3,  48 => 1,  46 => 4,  44 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{{ helpdesk.name }}{% endblock %}
{% set active_menu = 'system' %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li><a href=\"{{ 'extension/settings/support'|alink }}#tab-helpdesks\">{% trans 'Support settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Helpdesk -' %} {{ helpdesk.name }}</li>
</ul>
{% endblock %}

{% block content %}
<div class=\"widget\">
    
    <div class=\"head\">
        <h5 class=\"iFrames\">{{ helpdesk.name }}</h5>
    </div>

    <div class=\"help\">
        <h3>{% trans 'Support help desk' %}</h3>
        <p>{% trans 'Help desk name will be visible for clients when submitting new ticket. Define very large number of hours to disable auto close ticket option' %}</p>
    </div>

    <form method=\"post\" action=\"{{ 'api/admin/support/helpdesk_update'|link }}\" class=\"mainForm save api-form\" data-api-msg=\"Help desk updated\">
        <fieldset>
            <div class=\"rowElem noborder\">
                <label>{% trans 'Title' %}</label>
                <div class=\"formRight noborder\">
                    <input type=\"text\" name=\"name\" value=\"{{ helpdesk.name }}\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Email' %}</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"email\" value=\"{{ helpdesk.email }}\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Signature' %}</label>
                <div class=\"formRight\">
                    <textarea name=\"signature\" cols=\"5\" rows=\"5\">{{ helpdesk.signature }}</textarea>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Close after' %}</label>
                <div class=\"formRight\">
                    <input type=\"text\" name=\"close_after\" value=\"{{ helpdesk.close_after }}\" required=\"required\"/>
                </div>
                <div class=\"fix\"></div>
            </div>
            <div class=\"rowElem\">
                <label>{% trans 'Can reopen' %}</label>
                <div class=\"formRight\">
                    <input type=\"radio\" name=\"can_reopen\" value=\"1\"{% if helpdesk.can_reopen == 'draft' %} checked=\"checked\"{% endif %}/><label>{% trans 'Yes' %}</label>
                    <input type=\"radio\" name=\"can_reopen\" value=\"0\"{% if not helpdesk.can_reopen == 'active' %} checked=\"checked\"{% endif %} /><label>{% trans 'No' %}</label>
                </div>
                <div class=\"fix\"></div>
            </div>
            
            <input type=\"submit\" value=\"{% trans 'Update' %}\" class=\"greyishBtn submitForm\" />
            <input type=\"hidden\" name=\"id\" value=\"{{ helpdesk.id }}\"/>
        </fieldset>
    </form>
</div>

{% endblock %}", "mod_support_helpdesk.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Support/html_admin/mod_support_helpdesk.phtml");
    }
}
