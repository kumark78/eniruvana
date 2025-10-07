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

/* mod_orderbutton_client.phtml */
class __TwigTemplate_b72b7b925b31663c0160e491e6dfdbd5 extends \Twig\Template
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
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_orderbutton_client.phtml", 1)->unwrap();
        // line 2
        echo "<div class=\"accordion-group\" id=\"register-or-login\">
<div class=\"accordion-heading\">
    <a class=\"accordion-toggle\" href=\"#register\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-user\"></span> ";
        // line 4
        echo gettext("Login or Register");
        echo " </a>
</div>
<div id=\"register\" class=\"accordion-body collapse ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "checkout", [], "any", false, false, false, 6) &&  !($context["client"] ?? null))) {
            echo "in";
        }
        echo "\">


<div class=\"accordion-inner\">
<div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"login-tab\">
        <form method=\"post\" action=\"\" id=\"client-login\">
            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"email\">";
        // line 15
        echo gettext("Email Address");
        echo "</label>
                    <div class=\"controls\">
                        <input id=\"icon\" type=\"email\" class=\"span6\" placeholder=\"";
        // line 17
        echo gettext("Your email address");
        echo "\" name=\"email\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 17), "html", null, true);
        echo "\" required=\"required\" data-validation-required-message=\"";
        echo gettext("You must fill in your email.");
        echo "\">
                        <div class=\"help-block\"></div>
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"password\">";
        // line 22
        echo gettext("Password");
        echo "</label>
                    <div class=\"controls\">
                        <input id=\"password\" type=\"password\" class=\"span6\" placeholder=\"";
        // line 24
        echo gettext("Password");
        echo "\" name=\"password\" required=\"required\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "password", [], "any", false, false, false, 24), "html", null, true);
        echo "\" data-validation-required-message=\"";
        echo gettext("You must fill in your password.");
        echo "\">
                        <label class=\"checkbox\">
                            <input id=\"optionsCheckbox\" type=\"checkbox\" name=\"remember\" value=\"1\"> ";
        // line 26
        echo gettext("Remember me");
        // line 27
        echo "                        </label>
                        <div class=\"help-block\"></div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"controls\">
                        <button class=\"btn btn-large btn-primary btn-alt span5\" type=\"submit\"><span class=\"awe-signin\"></span> ";
        // line 33
        echo gettext("Log in");
        echo "</button>
                        <div class=\"divider\"></div>
                        <button class=\"btn btn-alt btn-inverse offset1\" type=\"button\" style=\"position:relative; top:10px\" onclick=\"\$('#register-tab').show();\$('#login-tab').hide();\"><span class=\"awe-user\"> </span> ";
        // line 35
        echo gettext("Or register");
        echo "</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class=\"tab-pane\" id=\"register-tab\">
        <form action=\"\" method=\"post\" id=\"create-profile\">
            ";
        // line 43
        $context["r"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_required", [], "any", false, false, false, 43);
        // line 44
        echo "            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"reg-email\">";
        // line 46
        echo gettext("Email Address");
        echo "</label>
                    <div class=\"controls\">
                        <input type=\"email\" name=\"email\" class=\"span6\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "\" required=\"required\" id=\"reg-email\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"first-name\">";
        // line 54
        echo gettext("First Name");
        echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"first_name\" class=\"span6\" id=\"first-name\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "first_name", [], "any", false, false, false, 56), "html", null, true);
        echo "\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                ";
        // line 61
        if (twig_in_filter("last_name", ($context["r"] ?? null))) {
            // line 62
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"last_name\">";
            // line 63
            echo gettext("Last Name");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"last_name\" class=\"span6\" id=\"last_name\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "last_name", [], "any", false, false, false, 65), "html", null, true);
            echo "\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 70
        echo "

                ";
        // line 72
        if (twig_in_filter("company", ($context["r"] ?? null))) {
            // line 73
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"company\">";
            // line 74
            echo gettext("Company");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"company\" class=\"span6\" id=\"company\" value=\"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "company", [], "any", false, false, false, 76), "html", null, true);
            echo "\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 81
        echo "
                ";
        // line 82
        if (twig_in_filter("birthday", ($context["r"] ?? null))) {
            // line 83
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"birthday\">";
            // line 84
            echo gettext("Birthday");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\"  class=\"span6\" name=\"birthday\" id=\"birthday\" value=\"\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 91
        echo "
                ";
        // line 92
        if (twig_in_filter("gender", ($context["r"] ?? null))) {
            // line 93
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"gender\">";
            // line 94
            echo gettext("You are");
            echo "</label>
                    <div class=\"controls\">
                        <select name=\"gender\"  class=\"span6\" id=\"gender\">
                            <option value=\"male\">Male</option>
                            <option value=\"female\">Female</option>
                        </select>
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 104
        echo "
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"reg-password\">";
        // line 106
        echo gettext("Password");
        echo "</label>
                    <div class=\"controls\">
                        <input type=\"password\" name=\"password\" class=\"span6\" value=\"\" required=\"required\" id=\"reg-password\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"password-confirm\">";
        // line 114
        echo gettext("Password confirm");
        echo "</label>
                    <div class=\"controls\">
                        <input type=\"password\" name=\"password_confirm\" class=\"span6\" name=\"password-confirm\" value=\"\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>



                ";
        // line 123
        if (twig_in_filter("address_1", ($context["r"] ?? null))) {
            // line 124
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"address_1\">";
            // line 125
            echo gettext("Address");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"address_1\" class=\"span6\" id=\"address_1\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_1", [], "any", false, false, false, 127), "html", null, true);
            echo "\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 132
        echo "
                ";
        // line 133
        if (twig_in_filter("address_2", ($context["r"] ?? null))) {
            // line 134
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"address_2\">";
            // line 135
            echo gettext("Address 2");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"address_2\" class=\"span6\" id=\"address_2\" value=\"";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "address_2", [], "any", false, false, false, 137), "html", null, true);
            echo "\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 142
        echo "
                ";
        // line 143
        if (twig_in_filter("city", ($context["r"] ?? null))) {
            // line 144
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"city\">";
            // line 145
            echo gettext("City");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"city\" class=\"span6\" id=\"city\" value=\"";
            // line 147
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "city", [], "any", false, false, false, 147), "html", null, true);
            echo "\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 152
        echo "
                ";
        // line 153
        if (twig_in_filter("country", ($context["r"] ?? null))) {
            // line 154
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"country\">";
            // line 155
            echo gettext("Country");
            echo "</label>
                    <div class=\"controls\">
                        <select name=\"country\" class=\"span6\" required=\"required\">
                            <option value=\"\">";
            // line 158
            echo gettext("-- Select country --");
            echo "</option>
                            ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["val"] => $context["label"]) {
                // line 160
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, $context["label"]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["label"]);
                echo "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['val'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                        </select>
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 167
        echo "
                ";
        // line 168
        if (twig_in_filter("state", ($context["r"] ?? null))) {
            // line 169
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"state\">";
            // line 170
            echo gettext("State");
            echo "</label>
                    <div class=\"controls\">
                        ";
            // line 173
            echo "                        <input type=\"text\" name=\"state\" class=\"span6\" id=\"state\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "state", [], "any", false, false, false, 173), "html", null, true);
            echo "\" />
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 178
        echo "
                ";
        // line 179
        if (twig_in_filter("postcode", ($context["r"] ?? null))) {
            // line 180
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"postcode\">";
            // line 181
            echo gettext("Zip/Postal Code");
            echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"postcode\" class=\"span6\" id=\"postcode\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "postcode", [], "any", false, false, false, 183), "html", null, true);
            echo "\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 188
        echo "
                ";
        // line 189
        if (twig_in_filter("phone", ($context["r"] ?? null))) {
            // line 190
            echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"phone_cc\">";
            // line 191
            echo gettext("Phone Number");
            echo "</label>
                    <div class=\"controls controls-row\">
                        <input type=\"text\" name=\"phone_cc\" value=\"";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone_cc", [], "any", false, false, false, 193), "html", null, true);
            echo "\" style=\"width:20%\">
                        <input type=\"text\" name=\"phone\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "phone", [], "any", false, false, false, 194), "html", null, true);
            echo "\" style=\"width: 70%\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
        }
        // line 199
        echo "
                ";
        // line 200
        $context["custom_fields"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "client_custom_fields", [], "any", false, false, false, 200);
        // line 201
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["field_name"] => $context["field"]) {
            // line 202
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["field"], "active", [], "any", false, false, false, 202)) {
                // line 203
                echo "                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"";
                // line 204
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\">";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 204))) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 204), "html", null, true);
                } else {
                    echo " ";
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["field_name"]), "html", null, true);
                    echo " ";
                }
                echo "</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"";
                // line 206
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["field_name"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), $context["field_name"], [], "any", false, false, false, 206), "html", null, true);
                echo "\" ";
                if (twig_get_attribute($this->env, $this->source, $context["field"], "required", [], "any", false, false, false, 206)) {
                    echo "required=\"required\"";
                }
                echo ">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                ";
            }
            // line 211
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field_name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        echo "
                ";
        // line 213
        echo twig_call_macro($macros["mf"], "macro_recaptcha", [], 213, $context, $this->getSourceContext());
        echo "

                <div class=\"form-actions\">

                    <div class=\"controls\">
                        <button class=\"btn btn-large btn-primary btn-alt span5\" type=\"submit\"><span class=\"awe-user\"></span> ";
        // line 218
        echo gettext("Register");
        echo "</button>
                        <div class=\"divider\"></div>
                        <button class=\"btn btn-alt btn-inverse offset1\" type=\"button\" style=\"position:relative; top:10px\" onclick=\"\$('#register-tab').hide();\$('#login-tab').show();\">
                            <span class=\"awe-signin\"> </span> ";
        // line 221
        echo gettext("Or Login");
        // line 222
        echo "                        </button>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
</div>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_client.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 222,  496 => 221,  490 => 218,  482 => 213,  479 => 212,  473 => 211,  457 => 206,  444 => 204,  441 => 203,  438 => 202,  433 => 201,  431 => 200,  428 => 199,  420 => 194,  416 => 193,  411 => 191,  408 => 190,  406 => 189,  403 => 188,  395 => 183,  390 => 181,  387 => 180,  385 => 179,  382 => 178,  373 => 173,  368 => 170,  365 => 169,  363 => 168,  360 => 167,  353 => 162,  340 => 160,  336 => 159,  332 => 158,  326 => 155,  323 => 154,  321 => 153,  318 => 152,  310 => 147,  305 => 145,  302 => 144,  300 => 143,  297 => 142,  289 => 137,  284 => 135,  281 => 134,  279 => 133,  276 => 132,  268 => 127,  263 => 125,  260 => 124,  258 => 123,  246 => 114,  235 => 106,  231 => 104,  218 => 94,  215 => 93,  213 => 92,  210 => 91,  200 => 84,  197 => 83,  195 => 82,  192 => 81,  184 => 76,  179 => 74,  176 => 73,  174 => 72,  170 => 70,  162 => 65,  157 => 63,  154 => 62,  152 => 61,  144 => 56,  139 => 54,  130 => 48,  125 => 46,  121 => 44,  119 => 43,  108 => 35,  103 => 33,  95 => 27,  93 => 26,  84 => 24,  79 => 22,  67 => 17,  62 => 15,  48 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import \"macro_functions.phtml\" as mf %}
<div class=\"accordion-group\" id=\"register-or-login\">
<div class=\"accordion-heading\">
    <a class=\"accordion-toggle\" href=\"#register\" data-parent=\"#accordion1\" data-toggle=\"collapse\"><span class=\"awe-user\"></span> {% trans 'Login or Register' %} </a>
</div>
<div id=\"register\" class=\"accordion-body collapse {% if request.checkout and not client %}in{%endif%}\">


<div class=\"accordion-inner\">
<div class=\"tab-content\">
    <div class=\"tab-pane active\" id=\"login-tab\">
        <form method=\"post\" action=\"\" id=\"client-login\">
            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"email\">{% trans 'Email Address' %}</label>
                    <div class=\"controls\">
                        <input id=\"icon\" type=\"email\" class=\"span6\" placeholder=\"{% trans 'Your email address' %}\" name=\"email\" value=\"{{ request.email }}\" required=\"required\" data-validation-required-message=\"{% trans 'You must fill in your email.' %}\">
                        <div class=\"help-block\"></div>
                    </div>
                </div>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"password\">{% trans 'Password' %}</label>
                    <div class=\"controls\">
                        <input id=\"password\" type=\"password\" class=\"span6\" placeholder=\"{% trans 'Password' %}\" name=\"password\" required=\"required\" value=\"{{ request.password }}\" data-validation-required-message=\"{% trans 'You must fill in your password.' %}\">
                        <label class=\"checkbox\">
                            <input id=\"optionsCheckbox\" type=\"checkbox\" name=\"remember\" value=\"1\"> {% trans 'Remember me' %}
                        </label>
                        <div class=\"help-block\"></div>
                    </div>
                </div>
                <div class=\"form-actions\">
                    <div class=\"controls\">
                        <button class=\"btn btn-large btn-primary btn-alt span5\" type=\"submit\"><span class=\"awe-signin\"></span> {% trans 'Log in' %}</button>
                        <div class=\"divider\"></div>
                        <button class=\"btn btn-alt btn-inverse offset1\" type=\"button\" style=\"position:relative; top:10px\" onclick=\"\$('#register-tab').show();\$('#login-tab').hide();\"><span class=\"awe-user\"> </span> {% trans 'Or register' %}</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class=\"tab-pane\" id=\"register-tab\">
        <form action=\"\" method=\"post\" id=\"create-profile\">
            {% set r = guest.client_required %}
            <fieldset>
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"reg-email\">{% trans 'Email Address' %}</label>
                    <div class=\"controls\">
                        <input type=\"email\" name=\"email\" class=\"span6\" value=\"{{ request.email }}\" required=\"required\" id=\"reg-email\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"first-name\">{% trans 'First Name' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"first_name\" class=\"span6\" id=\"first-name\" value=\"{{ request.first_name }}\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                {% if 'last_name' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"last_name\">{% trans 'Last Name' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"last_name\" class=\"span6\" id=\"last_name\" value=\"{{ request.last_name }}\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}


                {% if 'company' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"company\">{% trans 'Company' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"company\" class=\"span6\" id=\"company\" value=\"{{ request.company }}\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'birthday' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"birthday\">{% trans 'Birthday' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\"  class=\"span6\" name=\"birthday\" id=\"birthday\" value=\"\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'gender' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"gender\">{% trans 'You are' %}</label>
                    <div class=\"controls\">
                        <select name=\"gender\"  class=\"span6\" id=\"gender\">
                            <option value=\"male\">Male</option>
                            <option value=\"female\">Female</option>
                        </select>
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"reg-password\">{% trans 'Password' %}</label>
                    <div class=\"controls\">
                        <input type=\"password\" name=\"password\" class=\"span6\" value=\"\" required=\"required\" id=\"reg-password\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>

                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"password-confirm\">{% trans 'Password confirm' %}</label>
                    <div class=\"controls\">
                        <input type=\"password\" name=\"password_confirm\" class=\"span6\" name=\"password-confirm\" value=\"\" required=\"required\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>



                {% if 'address_1' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"address_1\">{% trans 'Address' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"address_1\" class=\"span6\" id=\"address_1\" value=\"{{ request.address_1 }}\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'address_2' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"address_2\">{% trans 'Address 2' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"address_2\" class=\"span6\" id=\"address_2\" value=\"{{ request.address_2 }}\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'city' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"city\">{% trans 'City' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"city\" class=\"span6\" id=\"city\" value=\"{{ request.city }}\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'country' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"country\">{% trans 'Country' %}</label>
                    <div class=\"controls\">
                        <select name=\"country\" class=\"span6\" required=\"required\">
                            <option value=\"\">{% trans '-- Select country --' %}</option>
                            {% for val,label in guest.system_countries %}
                            <option value=\"{{ val }}\" label=\"{{ label|e }}\">{{ label|e }}</option>
                            {% endfor %}
                        </select>
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'state' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"state\">{% trans 'State' %}</label>
                    <div class=\"controls\">
                        {# mf.selectbox('state', guest.system_states, request.state, 0, 'Select state') #}
                        <input type=\"text\" name=\"state\" class=\"span6\" id=\"state\" value=\"{{ request.state }}\" />
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'postcode' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"postcode\">{% trans 'Zip/Postal Code' %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"postcode\" class=\"span6\" id=\"postcode\" value=\"{{ request.postcode }}\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% if 'phone' in r %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"phone_cc\">{% trans 'Phone Number' %}</label>
                    <div class=\"controls controls-row\">
                        <input type=\"text\" name=\"phone_cc\" value=\"{{ request.phone_cc }}\" style=\"width:20%\">
                        <input type=\"text\" name=\"phone\" value=\"{{ request.phone }}\" style=\"width: 70%\">
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}

                {% set custom_fields = guest.client_custom_fields %}
                {% for field_name, field in custom_fields %}
                {% if field.active %}
                <div class=\"control-group\">
                    <label class=\"control-label\" for=\"{{ field_name }}\">{% if field.title is not empty %}{{ field.title }}{% else %} {{ field_name | capitalize }} {% endif %}</label>
                    <div class=\"controls\">
                        <input type=\"text\" name=\"{{ field_name }}\" id=\"{{ field_name }}\" value=\"{{ attribute(request, field_name) }}\" {% if field.required %}required=\"required\"{% endif %}>
                        <p class=\"help-block\"></p>
                    </div>
                </div>
                {% endif %}
                {% endfor %}

                {{ mf.recaptcha }}

                <div class=\"form-actions\">

                    <div class=\"controls\">
                        <button class=\"btn btn-large btn-primary btn-alt span5\" type=\"submit\"><span class=\"awe-user\"></span> {% trans 'Register' %}</button>
                        <div class=\"divider\"></div>
                        <button class=\"btn btn-alt btn-inverse offset1\" type=\"button\" style=\"position:relative; top:10px\" onclick=\"\$('#register-tab').hide();\$('#login-tab').show();\">
                            <span class=\"awe-signin\"> </span> {% trans 'Or Login' %}
                        </button>
                    </div>
                </div>
            </fieldset>

        </form>
    </div>
</div>
</div>
</div>
</div>
", "mod_orderbutton_client.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Orderbutton/html_client/mod_orderbutton_client.phtml");
    }
}
