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

/* mod_invoice_print.phtml */
class __TwigTemplate_5a34a9bd4421496fc33b6c59176d75a3 extends \Twig\Template
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
        $context["nr"] = (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "serie", [], "any", false, false, false, 1) . twig_sprintf("%05s", twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "nr", [], "any", false, false, false, 1)));
        // line 2
        $context["seller"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "seller", [], "any", false, false, false, 2);
        // line 3
        $context["buyer"] = twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "buyer", [], "any", false, false, false, 3);
        // line 4
        $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 4);
        // line 5
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 8
        echo twig_asset_url($this->env, "css/bootstrap.css");
        echo "\" media=\"screen\">
        <link rel='stylesheet' type='text/css' href=\"";
        // line 9
        echo twig_asset_url($this->env, "css/bootstrap.css");
        echo "\" media=\"print\">

        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">

        <style>
    @media print {

    html, body{
    margin-right: 75%;
        left: 0px;
    }
    .dl-horizontal dt{
        width: auto;
    }
    .dl-horizontal dd{
        margin-left: 30%;
    }
    .invoice-well dt{
        padding-right: 5px;
    }
    #proforma-invoice{
        width: 650px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    #invoice-title{
        text-align: center;
        padding-bottom: 3%;
    }
}
    html, body{
        margin-right: 9%;
        left: 0px;
    }
    .dl-horizontal dt{
        width: auto;
    }
    .dl-horizontal dd{
        margin-left: 30%;
    }
    .invoice-well dt{
        padding-right: 5px;
    }
    #proforma-invoice{
        width: 650px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    #invoice-title{
        text-align: center;
        padding-bottom: 3%;
    }

</style>
    </head>
    <body>
    <div class=\"row\" id=\"proforma-invoice\">
        <article class=\"span10 data-block\" style=\"margin-left: 0px\">
            <div class=\"data-container\">
                <header>
                    <h2 id=\"invoice-title\">";
        // line 73
        echo gettext("Invoice");
        echo " ";
        echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
        echo "</h2>
                </header>
                <section>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">

                            <div class=\"well small invoice-well\">
                                ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 80)) {
            // line 81
            echo "                                <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 81), "html", null, true);
            echo "\" alt=\"Logo\">
                                ";
        }
        // line 83
        echo "                                <dl class=\"dl-horizontal\">
                                    <dt>";
        // line 84
        echo gettext("Invoice number");
        echo ":</dt>
                                    <dd>";
        // line 85
        echo twig_escape_filter($this->env, ($context["nr"] ?? null), "html", null, true);
        echo "</dd>
                                    <dt>";
        // line 86
        echo gettext("Invoice date");
        echo ":</dt>
                                    <dd>";
        // line 87
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 87)) {
            // line 88
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "created_at", [], "any", false, false, false, 88)), "html", null, true);
            echo "
                                        ";
        } else {
            // line 90
            echo "                                        -----
                                        ";
        }
        // line 92
        echo "                                    </dd>
                                    <dt>";
        // line 93
        echo gettext("Due date");
        echo ":</dt>
                                    <dd>";
        // line 94
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 94)) {
            // line 95
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->extensions['Box_TwigExtensions']->twig_bb_date(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "due_at", [], "any", false, false, false, 95)), "html", null, true);
            echo "
                                        ";
        } else {
            // line 97
            echo "                                        -----
                                        ";
        }
        // line 99
        echo "                                    </dd>
                                    <dt>";
        // line 100
        echo gettext("Invoice status");
        echo ":</dt>
                                    <dd>
                                    <span class=\"label ";
        // line 102
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 102) == "paid")) {
            echo " label-success";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 102) == "unpaid")) {
            echo "label-warning";
        }
        echo "\">
                                          <span class=\"";
        // line 103
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 103) == "paid")) {
            echo "awe-ok-sign";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 103) == "unpaid")) {
            echo "awe-exclamation-sign";
        }
        echo "\"></span>
                                          ";
        // line 104
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "status", [], "any", false, false, false, 104)), "html", null, true);
        echo "
                                    </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class=\"span4\">
                            <div class=\"well small\">
                                <h4>";
        // line 112
        echo gettext("Company");
        echo "</h4>
                                <dl class=\"dl-horizontal\">
                                    ";
        // line 114
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 114)) {
            // line 115
            echo "                                    <dt>";
            echo gettext("Name");
            echo ":</dt>
                                    <dd>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company", [], "any", false, false, false, 116), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 118
        echo "
                                    ";
        // line 119
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_vat", [], "any", false, false, false, 119)) {
            // line 120
            echo "                                    <dt>";
            echo gettext("VAT");
            echo ":</dt>
                                    <dd>";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "company_vat", [], "any", false, false, false, 121), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 123
        echo "
                                    ";
        // line 124
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 124)) {
            // line 125
            echo "                                    <dt>";
            echo gettext("Address");
            echo ":</dt>
                                    <dd>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "address", [], "any", false, false, false, 126), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 128
        echo "
                                    ";
        // line 129
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 129)) {
            // line 130
            echo "                                    <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                    <dd>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "phone", [], "any", false, false, false, 131), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 133
        echo "
                                    ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 134)) {
            // line 135
            echo "                                    <dt>";
            echo gettext("Email");
            echo ":</dt>
                                    <dd>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "email", [], "any", false, false, false, 136), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 138
        echo "
                                    ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "account_number", [], "any", false, false, false, 139)) {
            // line 140
            echo "                                    <dt>";
            echo gettext("Account");
            echo ":</dt>
                                    <dd>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "account_number", [], "any", false, false, false, 141), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 143
        echo "
                                    ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "note", [], "any", false, false, false, 144)) {
            // line 145
            echo "                                    <dt>";
            echo gettext("Note");
            echo ":</dt>
                                    <dd>";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seller"] ?? null), "note", [], "any", false, false, false, 146), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 148
        echo "                                </dl>
                            </div>
                        </div>


                        <div class=\"span4\">
                            <div class=\"well small\">
                                <h4>";
        // line 155
        echo gettext("Billing & Delivery address");
        echo "</h4>
                                <dl class=\"dl-horizontal\">
                                    ";
        // line 157
        if ((twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 157) || twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 157))) {
            // line 158
            echo "                                    <dt>";
            echo gettext("Name");
            echo ":</dt>
                                    <dd>";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "first_name", [], "any", false, false, false, 159), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "last_name", [], "any", false, false, false, 159), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 161
        echo "
                                    ";
        // line 162
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 162)) {
            // line 163
            echo "                                    <dt>";
            echo gettext("Company");
            echo ":</dt>
                                    <dd>";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company", [], "any", false, false, false, 164), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 166
        echo "
                                    ";
        // line 167
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_number", [], "any", false, false, false, 167)) {
            // line 168
            echo "                                    <dt>";
            echo gettext("Company number");
            echo ":</dt>
                                    <dd>";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_number", [], "any", false, false, false, 169), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 171
        echo "
                                    ";
        // line 172
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_vat", [], "any", false, false, false, 172)) {
            // line 173
            echo "                                    <dt>";
            echo gettext("Company VAT");
            echo ":</dt>
                                    <dd>";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "company_vat", [], "any", false, false, false, 174), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 176
        echo "
                                    ";
        // line 177
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 177)) {
            // line 178
            echo "                                    <dt>";
            echo gettext("Address");
            echo ":</dt>
                                    <dd>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "address", [], "any", false, false, false, 179), "html", null, true);
            echo "</dd>
                                    <dd>";
            // line 180
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "city", [], "any", false, false, false, 180), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "state", [], "any", false, false, false, 180), "html", null, true);
            echo "</dd>
                                    <dd>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "zip", [], "any", false, false, false, 181), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_countries", [], "any", false, false, false, 181)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "country", [], "any", false, false, false, 181)] ?? null) : null), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 183
        echo "
                                    ";
        // line 184
        if (twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 184)) {
            // line 185
            echo "                                    <dt>";
            echo gettext("Phone");
            echo ":</dt>
                                    <dd>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["buyer"] ?? null), "phone", [], "any", false, false, false, 186), "html", null, true);
            echo "</dd>
                                    ";
        }
        // line 188
        echo "                                </dl>
                            </div>
                        </div>
                    </div>

                    ";
        // line 193
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 193)) {
            // line 194
            echo "                    <div class=\"well\">
                        ";
            // line 195
            echo twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_1", [], "any", false, false, false, 195));
            echo "
                    </div>
                    ";
        }
        // line 198
        echo "
                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>";
        // line 202
        echo gettext("#");
        echo "</th>
                            <th>";
        // line 203
        echo gettext("Title");
        echo "</th>
                            <th>";
        // line 204
        echo gettext("Price");
        echo "</th>
                            <th>";
        // line 205
        echo gettext("Total");
        echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "lines", [], "any", false, false, false, 209));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 210
            echo "                        <tr>
                            <td>";
            // line 211
            echo twig_escape_filter($this->env, ($context["i"] + 1), "html", null, true);
            echo ".</td>
                            <td>
                                ";
            // line 213
            if (twig_get_attribute($this->env, $this->source, $context["item"], "order_id", [], "any", false, false, false, 213)) {
                // line 214
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 214), "html", null, true);
                echo "
                                ";
            } else {
                // line 216
                echo "                                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 216), "html", null, true);
                echo "
                                ";
            }
            // line 218
            echo "                            </td>
                            <td>
                                ";
            // line 220
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 220), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 220));
            echo "
                                ";
            // line 221
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 221) > 1)) {
                // line 222
                echo "                                x ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 222), "html", null, true);
                echo " ";
                // line 223
                echo "                                ";
            }
            // line 224
            echo "                            </td>
                            <td >";
            // line 225
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 225), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 225));
            echo "</td>
                        </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                        </tbody>

                    </table>
                    <hr/>
                    <div class=\"row-fluid\">
                        <div class=\"span4 offset8\">
                            <table class=\"table\">
                                ";
        // line 236
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 236) > 0)) {
            // line 237
            echo "                                <tr>
                                    <td>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxname", [], "any", false, false, false, 238), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "taxrate", [], "any", false, false, false, 238), "html", null, true);
            echo "%</td>
                                    <td>";
            // line 239
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "tax", [], "any", false, false, false, 239), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 239));
            echo "</td>
                                </tr>
                                ";
        }
        // line 242
        echo "                                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 242) > 0)) {
            // line 243
            echo "                                <tr>
                                    <td>";
            // line 244
            echo gettext("Discount");
            echo "</td>
                                    <td>";
            // line 245
            echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "discount", [], "any", false, false, false, 245), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 245));
            echo "</td>
                                </tr>
                                ";
        }
        // line 248
        echo "
                                <tr>
                                    <td><strong>";
        // line 250
        echo gettext("Total");
        echo "</strong></td>
                                    <td><strong>";
        // line 251
        echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "total", [], "any", false, false, false, 251), twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "currency", [], "any", false, false, false, 251));
        echo "</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    ";
        // line 257
        if (twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 257)) {
            // line 258
            echo "                    <div class=\"well\">
                        ";
            // line 259
            echo twig_markdown_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["invoice"] ?? null), "text_2", [], "any", false, false, false, 259));
            echo "
                    </div>
                    ";
        }
        // line 262
        echo "                </section>
            </div>
        </article>
    </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "mod_invoice_print.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 262,  610 => 259,  607 => 258,  605 => 257,  596 => 251,  592 => 250,  588 => 248,  582 => 245,  578 => 244,  575 => 243,  572 => 242,  566 => 239,  560 => 238,  557 => 237,  555 => 236,  546 => 229,  536 => 225,  533 => 224,  530 => 223,  526 => 222,  524 => 221,  520 => 220,  516 => 218,  510 => 216,  504 => 214,  502 => 213,  497 => 211,  494 => 210,  490 => 209,  483 => 205,  479 => 204,  475 => 203,  471 => 202,  465 => 198,  459 => 195,  456 => 194,  454 => 193,  447 => 188,  442 => 186,  437 => 185,  435 => 184,  432 => 183,  425 => 181,  419 => 180,  415 => 179,  410 => 178,  408 => 177,  405 => 176,  400 => 174,  395 => 173,  393 => 172,  390 => 171,  385 => 169,  380 => 168,  378 => 167,  375 => 166,  370 => 164,  365 => 163,  363 => 162,  360 => 161,  353 => 159,  348 => 158,  346 => 157,  341 => 155,  332 => 148,  327 => 146,  322 => 145,  320 => 144,  317 => 143,  312 => 141,  307 => 140,  305 => 139,  302 => 138,  297 => 136,  292 => 135,  290 => 134,  287 => 133,  282 => 131,  277 => 130,  275 => 129,  272 => 128,  267 => 126,  262 => 125,  260 => 124,  257 => 123,  252 => 121,  247 => 120,  245 => 119,  242 => 118,  237 => 116,  232 => 115,  230 => 114,  225 => 112,  214 => 104,  206 => 103,  198 => 102,  193 => 100,  190 => 99,  186 => 97,  180 => 95,  178 => 94,  174 => 93,  171 => 92,  167 => 90,  161 => 88,  159 => 87,  155 => 86,  151 => 85,  147 => 84,  144 => 83,  138 => 81,  136 => 80,  124 => 73,  59 => 11,  54 => 9,  50 => 8,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set nr = invoice.serie ~ \"%05s\"|format(invoice.nr) %}
{% set seller = invoice.seller %}
{% set buyer = invoice.buyer %}
{% set company  = guest.system_company %}
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <link rel='stylesheet' type='text/css' href=\"{{ ('css/bootstrap.css') | asset_url }}\" media=\"screen\">
        <link rel='stylesheet' type='text/css' href=\"{{ ('css/bootstrap.css') | asset_url }}\" media=\"print\">

        <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | asset_url }}\">

        <style>
    @media print {

    html, body{
    margin-right: 75%;
        left: 0px;
    }
    .dl-horizontal dt{
        width: auto;
    }
    .dl-horizontal dd{
        margin-left: 30%;
    }
    .invoice-well dt{
        padding-right: 5px;
    }
    #proforma-invoice{
        width: 650px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    #invoice-title{
        text-align: center;
        padding-bottom: 3%;
    }
}
    html, body{
        margin-right: 9%;
        left: 0px;
    }
    .dl-horizontal dt{
        width: auto;
    }
    .dl-horizontal dd{
        margin-left: 30%;
    }
    .invoice-well dt{
        padding-right: 5px;
    }
    #proforma-invoice{
        width: 650px;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }

    #invoice-title{
        text-align: center;
        padding-bottom: 3%;
    }

</style>
    </head>
    <body>
    <div class=\"row\" id=\"proforma-invoice\">
        <article class=\"span10 data-block\" style=\"margin-left: 0px\">
            <div class=\"data-container\">
                <header>
                    <h2 id=\"invoice-title\">{% trans 'Invoice' %} {{nr}}</h2>
                </header>
                <section>
                    <div class=\"row-fluid\">
                        <div class=\"span4\">

                            <div class=\"well small invoice-well\">
                                {% if company.logo_url %}
                                <img src=\"{{ company.logo_url }}\" alt=\"Logo\">
                                {% endif %}
                                <dl class=\"dl-horizontal\">
                                    <dt>{% trans 'Invoice number' %}:</dt>
                                    <dd>{{ nr }}</dd>
                                    <dt>{% trans 'Invoice date' %}:</dt>
                                    <dd>{% if invoice.created_at %}
                                        {{ invoice.created_at | bb_date }}
                                        {% else %}
                                        -----
                                        {% endif %}
                                    </dd>
                                    <dt>{% trans 'Due date' %}:</dt>
                                    <dd>{% if invoice.due_at %}
                                        {{ invoice.due_at | bb_date }}
                                        {% else %}
                                        -----
                                        {% endif %}
                                    </dd>
                                    <dt>{% trans 'Invoice status' %}:</dt>
                                    <dd>
                                    <span class=\"label {% if invoice.status == 'paid' %} label-success{% elseif invoice.status == 'unpaid'%}label-warning{% endif %}\">
                                          <span class=\"{% if invoice.status == 'paid' %}awe-ok-sign{% elseif invoice.status == 'unpaid'%}awe-exclamation-sign{% endif %}\"></span>
                                          {{ invoice.status | capitalize }}
                                    </span>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class=\"span4\">
                            <div class=\"well small\">
                                <h4>{% trans 'Company' %}</h4>
                                <dl class=\"dl-horizontal\">
                                    {% if seller.company %}
                                    <dt>{% trans 'Name' %}:</dt>
                                    <dd>{{seller.company}}</dd>
                                    {% endif %}

                                    {% if seller.company_vat%}
                                    <dt>{% trans 'VAT' %}:</dt>
                                    <dd>{{seller.company_vat}}</dd>
                                    {% endif %}

                                    {% if seller.address%}
                                    <dt>{% trans 'Address' %}:</dt>
                                    <dd>{{seller.address}}</dd>
                                    {% endif %}

                                    {% if seller.phone %}
                                    <dt>{% trans 'Phone' %}:</dt>
                                    <dd>{{seller.phone}}</dd>
                                    {% endif %}

                                    {% if seller.email %}
                                    <dt>{% trans 'Email' %}:</dt>
                                    <dd>{{seller.email}}</dd>
                                    {% endif %}

                                    {% if seller.account_number %}
                                    <dt>{% trans 'Account' %}:</dt>
                                    <dd>{{seller.account_number}}</dd>
                                    {% endif %}

                                    {% if seller.note %}
                                    <dt>{% trans 'Note' %}:</dt>
                                    <dd>{{seller.note}}</dd>
                                    {% endif %}
                                </dl>
                            </div>
                        </div>


                        <div class=\"span4\">
                            <div class=\"well small\">
                                <h4>{% trans 'Billing & Delivery address' %}</h4>
                                <dl class=\"dl-horizontal\">
                                    {% if buyer.first_name or buyer.last_name %}
                                    <dt>{% trans 'Name' %}:</dt>
                                    <dd>{{buyer.first_name}} {{buyer.last_name}}</dd>
                                    {% endif %}

                                    {% if buyer.company %}
                                    <dt>{% trans 'Company' %}:</dt>
                                    <dd>{{buyer.company}}</dd>
                                    {% endif %}

                                    {% if buyer.company_number %}
                                    <dt>{% trans 'Company number' %}:</dt>
                                    <dd>{{buyer.company_number}}</dd>
                                    {% endif %}

                                    {% if buyer.company_vat %}
                                    <dt>{% trans 'Company VAT' %}:</dt>
                                    <dd>{{buyer.company_vat}}</dd>
                                    {% endif %}

                                    {% if buyer.address %}
                                    <dt>{% trans 'Address' %}:</dt>
                                    <dd>{{buyer.address}}</dd>
                                    <dd>{{buyer.city}}, {{buyer.state}}</dd>
                                    <dd>{{buyer.zip}}, {{guest.system_countries[buyer.country]}}</dd>
                                    {% endif %}

                                    {% if buyer.phone %}
                                    <dt>{% trans 'Phone' %}:</dt>
                                    <dd>{{buyer.phone}}</dd>
                                    {% endif %}
                                </dl>
                            </div>
                        </div>
                    </div>

                    {% if invoice.text_1 %}
                    <div class=\"well\">
                        {{ invoice.text_1|markdown }}
                    </div>
                    {% endif %}

                    <table class=\"table\">
                        <thead>
                        <tr>
                            <th>{% trans '#' %}</th>
                            <th>{% trans 'Title' %}</th>
                            <th>{% trans 'Price' %}</th>
                            <th>{% trans 'Total' %}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for i, item in invoice.lines %}
                        <tr>
                            <td>{{ i+1 }}.</td>
                            <td>
                                {% if item.order_id%}
                                {{ item.title }}
                                {% else %}
                                {{ item.title }}
                                {% endif %}
                            </td>
                            <td>
                                {{ item.price | money(invoice.currency) }}
                                {% if item.quantity > 1 %}
                                x {{ item.quantity }} {# item.unit #}
                                {% endif %}
                            </td>
                            <td >{{ item.total | money(invoice.currency) }}</td>
                        </tr>

                        {% endfor %}
                        </tbody>

                    </table>
                    <hr/>
                    <div class=\"row-fluid\">
                        <div class=\"span4 offset8\">
                            <table class=\"table\">
                                {% if invoice.tax > 0 %}
                                <tr>
                                    <td>{{ invoice.taxname }} {{ invoice.taxrate }}%</td>
                                    <td>{{ invoice.tax | money(invoice.currency) }}</td>
                                </tr>
                                {% endif %}
                                {% if invoice.discount > 0 %}
                                <tr>
                                    <td>{% trans 'Discount' %}</td>
                                    <td>{{ invoice.discount | money(invoice.currency) }}</td>
                                </tr>
                                {% endif %}

                                <tr>
                                    <td><strong>{% trans 'Total' %}</strong></td>
                                    <td><strong>{{ invoice.total | money(invoice.currency) }}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    {% if invoice.text_2 %}
                    <div class=\"well\">
                        {{ invoice.text_2|markdown }}
                    </div>
                    {% endif %}
                </section>
            </div>
        </article>
    </div>
    </body>
</html>", "mod_invoice_print.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Invoice/html_client/mod_invoice_print.phtml");
    }
}
