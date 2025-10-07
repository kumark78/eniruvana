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

/* mod_servicedomain_order_form.phtml */
class __TwigTemplate_b3b79ed77bc3d7c29bdb3a25d91ecc97 extends \Twig\Template
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
        $context["periods"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_periods", [], "any", false, false, false, 1);
        // line 2
        $context["pricing"] = twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 2);
        // line 3
        $context["transfer_tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_transfer" => 1]], "method", false, false, false, 3);
        // line 4
        echo "
<div class=\"tab-pane active\">
    <div class=\"tabbable tabs-left\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active domain-tab\"><a href=\"#register\" rel=\"register\" data-toggle=\"tab\">Register</a></li>
            ";
        // line 9
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 10
            echo "            <li class=\"domain-tab\"><a href=\"#transfer\" rel=\"transfer\" data-toggle=\"tab\">Transfer</a></li>
            ";
        }
        // line 12
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"register\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>";
        // line 18
        echo gettext("Register a new domain");
        echo "</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"register_sld\" style=\"width: 55%\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "register_sld", [], "any", false, false, false, 20), "html", null, true);
        echo "\" placeholder=\"";
        echo gettext("Enter new domain name to register");
        echo "\">
                                ";
        // line 21
        $context["tlds"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "serviceDomain_tlds", [0 => ["allow_register" => 1]], "method", false, false, false, 21);
        // line 22
        echo "                                <select name=\"register_tld\" style=\"width: 20%\">
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tlds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
            // line 24
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 24), "html", null, true);
            echo "\" label=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 24), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"domain-check\">";
        // line 27
        echo gettext("Check");
        echo "</button>
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                                <label>
                                    <select name=\"register_years\" id=\"registration-years\"></select>
                                </label>
                                <br/>
                                <label class=\"checkbox\"><input type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">";
        // line 36
        echo gettext("I want to use my nameservers");
        echo "</label>
                                <div id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"";
        // line 39
        echo gettext("Nameserver 1");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"";
        // line 42
        echo gettext("Nameserver 2");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"";
        // line 45
        echo gettext("Nameserver 3");
        echo "\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"";
        // line 48
        echo gettext("Nameserver 4");
        echo "\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </section>
            </div>

            ";
        // line 57
        if ( !twig_test_empty(($context["transfer_tlds"] ?? null))) {
            // line 58
            echo "            <div class=\"tab-pane\" id=\"transfer\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>";
            // line 62
            echo gettext("Transfer a new domain");
            echo "</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"transfer_sld\" style=\"width: 55%\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_sld", [], "any", false, false, false, 64), "html", null, true);
            echo "\" placeholder=\"";
            echo gettext("Enter your domain name to transfer");
            echo "\">
                                <select name=\"transfer_tld\" style=\"width: 20%\">
                                    ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["transfer_tlds"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tld"]) {
                // line 67
                echo "                                    <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 67), "html", null, true);
                echo "\" label=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 67), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tld"], "tld", [], "any", false, false, false, 67), "html", null, true);
                echo "</option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tld'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"transfer-check\">";
            // line 70
            echo gettext("Check");
            echo "</button>
                            </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"form-horizontal\">
                                    <div id=\"domain-transfer-config\" style=\"display:none;\">
                                        <p>";
            // line 76
            echo gettext("Transfer price");
            echo ": <span id=\"transfer-price\"></span></p>
                                        <input type=\"text\" name=\"transfer_code\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "transfer_code", [], "any", false, false, false, 77), "html", null, true);
            echo "\" style=\"width: 200px\" placeholder=\"";
            echo gettext("Enter domain transfer code");
            echo "\">
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </section>
            </div>
            ";
        }
        // line 85
        echo "        </div>
    </div>
    <!-- Second level tabs -->
</div>

<input type=\"hidden\" name=\"id\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 90), "html", null, true);
        echo "\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>

";
        // line 93
        $context["currency"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "cart_get_currency", [], "any", false, false, false, 93);
        // line 94
        echo "<script type=\"text/javascript\">
\$(function() {

    \$('ul.nav.nav-tabs > li.domain-tab a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));
    });

    if(\$(\".addons\").length) {
        \$('.order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"transfer_sld\"]').val();
        var tld = \$('select[name=\"transfer_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-name').text(domain);
                \$('#domain-transfer-config').fadeIn('fast');
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#transfer-check').hide();
                \$('#transfer .order-button').show();
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"register_sld\"]').val();
\t\tsld= sld.toLowerCase();
        var tld = \$('select[name=\"register_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setPricing(tld);
                \$('#domain-name').text(domain);
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#domain-check').hide();
                \$('#register .order-button').show();
            }
        );
        return false;
    });

    function setPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"#registration-years\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, ";
        // line 162
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 162), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 162), "html", null, true);
        echo "\", i);
                    s.append(new Option(i + \"";
        // line 163
        echo gettext(" Year/s @ ");
        echo "\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "conversion_rate", [], "any", false, false, false, 175), "html", null, true);
        echo ", \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currency"] ?? null), "code", [], "any", false, false, false, 175), "html", null, true);
        echo "\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "mod_servicedomain_order_form.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 175,  305 => 163,  299 => 162,  229 => 94,  227 => 93,  221 => 90,  214 => 85,  201 => 77,  197 => 76,  188 => 70,  185 => 69,  172 => 67,  168 => 66,  161 => 64,  156 => 62,  150 => 58,  148 => 57,  136 => 48,  130 => 45,  124 => 42,  118 => 39,  112 => 36,  100 => 27,  97 => 26,  84 => 24,  80 => 23,  77 => 22,  75 => 21,  69 => 20,  64 => 18,  56 => 12,  52 => 10,  50 => 9,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set periods = guest.system_periods %}
{% set pricing = product.pricing %}
{% set transfer_tlds = guest.serviceDomain_tlds({\"allow_transfer\":1})%}

<div class=\"tab-pane active\">
    <div class=\"tabbable tabs-left\">
        <ul class=\"nav nav-tabs\">
            <li class=\"active domain-tab\"><a href=\"#register\" rel=\"register\" data-toggle=\"tab\">Register</a></li>
            {% if transfer_tlds is not empty %}
            <li class=\"domain-tab\"><a href=\"#transfer\" rel=\"transfer\" data-toggle=\"tab\">Transfer</a></li>
            {% endif %}
        </ul>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"register\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>{% trans 'Register a new domain' %}</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"register_sld\" style=\"width: 55%\" value=\"{{ request.register_sld }}\" placeholder=\"{% trans 'Enter new domain name to register' %}\">
                                {% set tlds = guest.serviceDomain_tlds({\"allow_register\":1})%}
                                <select name=\"register_tld\" style=\"width: 20%\">
                                    {% for tld in tlds%}
                                    <option value=\"{{ tld.tld}}\" label=\"{{ tld.tld}}\">{{ tld.tld}}</option>
                                    {% endfor %}
                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"domain-check\">{% trans 'Check' %}</button>
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <div class=\"onAfterDomainCheck\" style=\"display:none;\">
                                <label>
                                    <select name=\"register_years\" id=\"registration-years\"></select>
                                </label>
                                <br/>
                                <label class=\"checkbox\"><input type=\"checkbox\" onclick=\"\$('#nameservers').slideToggle();\">{% trans 'I want to use my nameservers' %}</label>
                                <div id=\"nameservers\" style=\"display:none; margin: 10px 0;\">
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns1\" value=\"\" placeholder=\"{% trans 'Nameserver 1' %}\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns2\" value=\"\" placeholder=\"{% trans 'Nameserver 2' %}\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns3\" value=\"\" placeholder=\"{% trans 'Nameserver 3' %}\"/>
                                    </div>
                                    <div class=\"row-fluid\">
                                        <input type=\"text\" name=\"ns4\" value=\"\" placeholder=\"{% trans 'Nameserver 4' %}\"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </section>
            </div>

            {% if transfer_tlds is not empty %}
            <div class=\"tab-pane\" id=\"transfer\">
                <section>
                    <fieldset>
                        <div class=\"control-group\">
                            <label>{% trans 'Transfer a new domain' %}</label>
                            <div class=\"form-horizontal\">
                                <input type=\"text\" name=\"transfer_sld\" style=\"width: 55%\" value=\"{{ request.transfer_sld }}\" placeholder=\"{% trans 'Enter your domain name to transfer' %}\">
                                <select name=\"transfer_tld\" style=\"width: 20%\">
                                    {% for tld in transfer_tlds%}
                                    <option value=\"{{ tld.tld}}\" label=\"{{ tld.tld}}\">{{ tld.tld}}</option>
                                    {% endfor %}
                                </select>
                                <button class=\"btn btn-inverse\" type=\"button\" id=\"transfer-check\">{% trans 'Check' %}</button>
                            </div>
                            </div>
                            <div class=\"control-group\">
                                <div class=\"form-horizontal\">
                                    <div id=\"domain-transfer-config\" style=\"display:none;\">
                                        <p>{% trans 'Transfer price'%}: <span id=\"transfer-price\"></span></p>
                                        <input type=\"text\" name=\"transfer_code\" value=\"{{ request.transfer_code }}\" style=\"width: 200px\" placeholder=\"{% trans 'Enter domain transfer code' %}\">
                                    </div>
                                </div>
                            </div>
                    </fieldset>
                </section>
            </div>
            {% endif %}
        </div>
    </div>
    <!-- Second level tabs -->
</div>

<input type=\"hidden\" name=\"id\" value=\"{{ product.id }}\" />
<input type=\"hidden\" name=\"action\" value=\"register\" id=\"domain-action\"/>

{% set currency = guest.cart_get_currency %}
<script type=\"text/javascript\">
\$(function() {

    \$('ul.nav.nav-tabs > li.domain-tab a').bind('click', function (){
        \$('#domain-action').val(\$(this).attr('rel'));
    });

    if(\$(\".addons\").length) {
        \$('.order-button').one('click', function(){
            \$(this).hide();
            \$('.addons').slideDown('fast');
            return false;
        });
    }

    \$('.addon-period-selector').change(function(){
        var r = \$(this).attr('rel');
        \$('#' + r + ' span').hide();
        \$('#' + r + ' span.' + \$(this).val()).fadeIn();
    }).trigger('change');

    \$('#transfer-check').bind('click',function(event){
        var sld = \$('input[name=\"transfer_sld\"]').val();
        var tld = \$('select[name=\"transfer_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/can_be_transferred',
            { sld: sld, tld: tld },
            function(result) {
                setTransferPricing(tld);
                \$('#domain-name').text(domain);
                \$('#domain-transfer-config').fadeIn('fast');
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#transfer-check').hide();
                \$('#transfer .order-button').show();
            }
        );
        return false;
    });

    \$('#domain-check').bind('click',function(event){
        var sld = \$('input[name=\"register_sld\"]').val();
\t\tsld= sld.toLowerCase();
        var tld = \$('select[name=\"register_tld\"]').val();
        var domain = sld + tld;
        bb.post(
            'guest/servicedomain/check',
            { sld: sld, tld: tld },
            function(result) {
                setPricing(tld);
                \$('#domain-name').text(domain);
                \$('.onAfterDomainCheck').fadeIn('fast');
                \$('#domain-check').hide();
                \$('#register .order-button').show();
            }
        );
        return false;
    });

    function setPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var s = \$(\"#registration-years\");
                s.find('option').remove();
                for (i=1;i<6;i++) {
                    var price = bb.currency(result.price_registration, {{ currency.conversion_rate }}, \"{{ currency.code }}\", i);
                    s.append(new Option(i + \"{% trans ' Year/s @ ' %}\" + price, i));
                }
            }
        );
    }

    function setTransferPricing(tld)
    {
        bb.post(
            'guest/servicedomain/pricing',
            { tld: tld },
            function(result) {
                var price = bb.currency(result.price_transfer, {{ currency.conversion_rate }}, \"{{ currency.code }}\");
                \$('#transfer-price').text(price);
            }
        );
    }
});
</script>
", "mod_servicedomain_order_form.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Servicedomain/html_client/mod_servicedomain_order_form.phtml");
    }
}
