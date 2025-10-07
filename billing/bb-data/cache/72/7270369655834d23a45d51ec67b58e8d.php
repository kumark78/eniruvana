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

/* partial_pricing.phtml */
class __TwigTemplate_d404cace4b84bddf3487f1090d98da1d extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "type", [], "any", false, false, false, 1) != "domain")) {
            // line 2
            echo "<div class=\"rowElem\">
    <label>";
            // line 3
            echo gettext("Payment type");
            echo ":</label>
    <div class=\"formRight pp_type\">
        <input type=\"radio\" name=\"pricing[type]\" value=\"free\"";
            // line 5
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 5), "type", [], "any", false, false, false, 5) == "free")) {
                echo " checked=\"checked\"";
            }
            echo " id=\"pricing-free\"/><label for=\"pricing-free\">";
            echo gettext("Free");
            echo "</label>
        <input type=\"radio\" name=\"pricing[type]\" value=\"once\"";
            // line 6
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 6), "type", [], "any", false, false, false, 6) == "once")) {
                echo " checked=\"checked\"";
            }
            echo " id=\"pricing-once\"/><label for=\"pricing-once\">";
            echo gettext("One time");
            echo "</label>
        <input type=\"radio\" name=\"pricing[type]\" value=\"recurrent\"";
            // line 7
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 7), "type", [], "any", false, false, false, 7) == "recurrent")) {
                echo " checked=\"checked\"";
            }
            echo " id=\"pricing-recurrent\"/><label for=\"pricing-recurrent\">";
            echo gettext("Recurrent");
            echo "</label>
    </div>
    <div class=\"fix\"></div>
</div>

<table class=\"pp wide\">
    <tbody class=\"once\" ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 13), "type", [], "any", false, false, false, 13) != "once")) {
                echo "style=\"display:none;\"";
            }
            echo ">
        <tr>
            <th>&nbsp;</th>
            <th>";
            // line 16
            echo gettext("Setup price");
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 16), "code", [], "any", false, false, false, 16), "html", null, true);
            echo ")</th>
            <th>";
            // line 17
            echo gettext("Price");
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 17), "code", [], "any", false, false, false, 17), "html", null, true);
            echo ")</th>
            <th>";
            // line 18
            echo gettext("Total");
            echo "</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td><label for=\"\">";
            // line 22
            echo gettext("One time");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[once][setup]\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 23), "once", [], "any", false, false, false, 23), "setup", [], "any", false, false, false, 23), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[once][price]\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 24), "once", [], "any", false, false, false, 24), "price", [], "any", false, false, false, 24), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>

    <tbody class=\"recurrent\" ";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 30), "type", [], "any", false, false, false, 30) != "recurrent")) {
                echo "style=\"display:none;\"";
            }
            echo ">
        <tr>
            <th style=\"width: 5%;\">&nbsp;</th>
            <th>";
            // line 33
            echo gettext("Setup price");
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 33), "code", [], "any", false, false, false, 33), "html", null, true);
            echo ")</th>
            <th>";
            // line 34
            echo gettext("Price for period");
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "currency_get_default", [], "any", false, false, false, 34), "code", [], "any", false, false, false, 34), "html", null, true);
            echo ")</th>
            <th>";
            // line 35
            echo gettext("First payment sum");
            echo "</th>
            <th>";
            // line 36
            echo gettext("On");
            echo "</th>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 40
            echo gettext("Weekly");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1W][setup]\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 41), "recurrent", [], "any", false, false, false, 41)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["1W"] ?? null) : null), "setup", [], "any", false, false, false, 41), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1W][price]\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 42), "recurrent", [], "any", false, false, false, 42)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["1W"] ?? null) : null), "price", [], "any", false, false, false, 42), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1W][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1W][enabled]\" value=\"1\" ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 44), "recurrent", [], "any", false, false, false, 44)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["1W"] ?? null) : null), "enabled", [], "any", false, false, false, 44)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>
        
        <tr>
            <td><label for=\"\">";
            // line 48
            echo gettext("Monthly");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1M][setup]\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 49), "recurrent", [], "any", false, false, false, 49)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["1M"] ?? null) : null), "setup", [], "any", false, false, false, 49), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1M][price]\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 50), "recurrent", [], "any", false, false, false, 50)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["1M"] ?? null) : null), "price", [], "any", false, false, false, 50), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1M][enabled]\" value=\"1\" ";
            // line 52
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 52), "recurrent", [], "any", false, false, false, 52)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["1M"] ?? null) : null), "enabled", [], "any", false, false, false, 52)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 56
            echo gettext("Every 3 months");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][3M][setup]\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 57), "recurrent", [], "any", false, false, false, 57)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["3M"] ?? null) : null), "setup", [], "any", false, false, false, 57), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][3M][price]\" value=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 58), "recurrent", [], "any", false, false, false, 58)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["3M"] ?? null) : null), "price", [], "any", false, false, false, 58), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][3M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][3M][enabled]\" value=\"1\" ";
            // line 60
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 60), "recurrent", [], "any", false, false, false, 60)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["3M"] ?? null) : null), "enabled", [], "any", false, false, false, 60)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 64
            echo gettext("Every 6 months");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][6M][setup]\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 65), "recurrent", [], "any", false, false, false, 65)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["6M"] ?? null) : null), "setup", [], "any", false, false, false, 65), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][6M][price]\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 66), "recurrent", [], "any", false, false, false, 66)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["6M"] ?? null) : null), "price", [], "any", false, false, false, 66), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][6M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][6M][enabled]\" value=\"1\" ";
            // line 68
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 68), "recurrent", [], "any", false, false, false, 68)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["6M"] ?? null) : null), "enabled", [], "any", false, false, false, 68)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 72
            echo gettext("Every year");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1Y][setup]\" value=\"";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 73), "recurrent", [], "any", false, false, false, 73)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["1Y"] ?? null) : null), "setup", [], "any", false, false, false, 73), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1Y][price]\" value=\"";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 74), "recurrent", [], "any", false, false, false, 74)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["1Y"] ?? null) : null), "price", [], "any", false, false, false, 74), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1Y][enabled]\" value=\"1\" ";
            // line 76
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 76), "recurrent", [], "any", false, false, false, 76)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["1Y"] ?? null) : null), "enabled", [], "any", false, false, false, 76)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 80
            echo gettext("Every 2 years");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][2Y][setup]\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 81), "recurrent", [], "any", false, false, false, 81)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["2Y"] ?? null) : null), "setup", [], "any", false, false, false, 81), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][2Y][price]\" value=\"";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 82), "recurrent", [], "any", false, false, false, 82)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["2Y"] ?? null) : null), "price", [], "any", false, false, false, 82), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][2Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][2Y][enabled]\" value=\"1\" ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 84), "recurrent", [], "any", false, false, false, 84)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["2Y"] ?? null) : null), "enabled", [], "any", false, false, false, 84)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>

        <tr>
            <td><label for=\"\">";
            // line 88
            echo gettext("Every 3 years");
            echo "</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][3Y][setup]\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 89), "recurrent", [], "any", false, false, false, 89)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["3Y"] ?? null) : null), "setup", [], "any", false, false, false, 89), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][3Y][price]\" value=\"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 90), "recurrent", [], "any", false, false, false, 90)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["3Y"] ?? null) : null), "price", [], "any", false, false, false, 90), "html", null, true);
            echo "\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][3Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][3Y][enabled]\" value=\"1\" ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pricing", [], "any", false, false, false, 92), "recurrent", [], "any", false, false, false, 92)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["3Y"] ?? null) : null), "enabled", [], "any", false, false, false, 92)) {
                echo "checked=\"checked\"";
            }
            echo "/></td>
        </tr>
    </tbody>
</table>

<script type=\"text/javascript\">
\$(function() {

    \$('input.price:not(:disabled)').keyup(function(){
        var row = \$(this).parents('tr:first');
        var s = row.find('input.setup_price').val();
        var p = row.find('input.bill_price').val();
        var total = countTotal(p, s);
        var elem = row.find('input.total');
        elem.val(total);
    }).trigger('keyup');

    \$('.pp_type input').click(function(){
        \$('table.pp tbody').hide();
        \$('table.pp tbody.' + \$(this).val()).show();
    });
});

function countTotal(p, s)
{
    p = parseFloat(p);
    s = parseFloat(s);
    var num = new Number(p + s);
    if (!isNaN(num))
        return num.toFixed(2);
    return (0).toFixed(2);
}

</script>
";
        }
        // line 127
        echo "
";
    }

    public function getTemplateName()
    {
        return "partial_pricing.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 127,  296 => 92,  291 => 90,  287 => 89,  283 => 88,  274 => 84,  269 => 82,  265 => 81,  261 => 80,  252 => 76,  247 => 74,  243 => 73,  239 => 72,  230 => 68,  225 => 66,  221 => 65,  217 => 64,  208 => 60,  203 => 58,  199 => 57,  195 => 56,  186 => 52,  181 => 50,  177 => 49,  173 => 48,  164 => 44,  159 => 42,  155 => 41,  151 => 40,  144 => 36,  140 => 35,  134 => 34,  128 => 33,  120 => 30,  111 => 24,  107 => 23,  103 => 22,  96 => 18,  90 => 17,  84 => 16,  76 => 13,  63 => 7,  55 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if product.type != 'domain' %}
<div class=\"rowElem\">
    <label>{% trans 'Payment type' %}:</label>
    <div class=\"formRight pp_type\">
        <input type=\"radio\" name=\"pricing[type]\" value=\"free\"{% if product.pricing.type == 'free' %} checked=\"checked\"{% endif %} id=\"pricing-free\"/><label for=\"pricing-free\">{% trans 'Free' %}</label>
        <input type=\"radio\" name=\"pricing[type]\" value=\"once\"{% if product.pricing.type == 'once' %} checked=\"checked\"{% endif %} id=\"pricing-once\"/><label for=\"pricing-once\">{% trans 'One time' %}</label>
        <input type=\"radio\" name=\"pricing[type]\" value=\"recurrent\"{% if product.pricing.type == 'recurrent' %} checked=\"checked\"{% endif %} id=\"pricing-recurrent\"/><label for=\"pricing-recurrent\">{% trans 'Recurrent' %}</label>
    </div>
    <div class=\"fix\"></div>
</div>

<table class=\"pp wide\">
    <tbody class=\"once\" {% if product.pricing.type != 'once' %}style=\"display:none;\"{% endif %}>
        <tr>
            <th>&nbsp;</th>
            <th>{% trans 'Setup price' %} ({{ admin.currency_get_default.code }})</th>
            <th>{% trans 'Price' %} ({{ admin.currency_get_default.code }})</th>
            <th>{% trans 'Total' %}</th>
            <th>&nbsp;</th>
        </tr>
        <tr>
            <td><label for=\"\">{% trans 'One time' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[once][setup]\" value=\"{{ product.pricing.once.setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[once][price]\" value=\"{{ product.pricing.once.price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>

    <tbody class=\"recurrent\" {% if product.pricing.type != 'recurrent' %}style=\"display:none;\"{% endif %}>
        <tr>
            <th style=\"width: 5%;\">&nbsp;</th>
            <th>{% trans 'Setup price' %} ({{ admin.currency_get_default.code }})</th>
            <th>{% trans 'Price for period' %} ({{ admin.currency_get_default.code }})</th>
            <th>{% trans 'First payment sum' %}</th>
            <th>{% trans 'On' %}</th>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Weekly' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1W][setup]\" value=\"{{ product.pricing.recurrent['1W'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1W][price]\" value=\"{{ product.pricing.recurrent['1W'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1W][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1W][enabled]\" value=\"1\" {% if product.pricing.recurrent['1W'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>
        
        <tr>
            <td><label for=\"\">{% trans 'Monthly' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1M][setup]\" value=\"{{ product.pricing.recurrent['1M'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1M][price]\" value=\"{{ product.pricing.recurrent['1M'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1M][enabled]\" value=\"1\" {% if product.pricing.recurrent['1M'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Every 3 months' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][3M][setup]\" value=\"{{ product.pricing.recurrent['3M'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][3M][price]\" value=\"{{ product.pricing.recurrent['3M'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][3M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][3M][enabled]\" value=\"1\" {% if product.pricing.recurrent['3M'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Every 6 months' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][6M][setup]\" value=\"{{ product.pricing.recurrent['6M'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][6M][price]\" value=\"{{ product.pricing.recurrent['6M'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][6M][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][6M][enabled]\" value=\"1\" {% if product.pricing.recurrent['6M'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Every year' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][1Y][setup]\" value=\"{{ product.pricing.recurrent['1Y'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][1Y][price]\" value=\"{{ product.pricing.recurrent['1Y'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][1Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][1Y][enabled]\" value=\"1\" {% if product.pricing.recurrent['1Y'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Every 2 years' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][2Y][setup]\" value=\"{{ product.pricing.recurrent['2Y'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][2Y][price]\" value=\"{{ product.pricing.recurrent['2Y'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][2Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][2Y][enabled]\" value=\"1\" {% if product.pricing.recurrent['2Y'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>

        <tr>
            <td><label for=\"\">{% trans 'Every 3 years' %}</label></td>
            <td><input type=\"text\" class=\"price setup_price\" name=\"pricing[recurrent][3Y][setup]\" value=\"{{ product.pricing.recurrent['3Y'].setup }}\"></td>
            <td><input type=\"text\" class=\"price bill_price\" name=\"pricing[recurrent][3Y][price]\" value=\"{{ product.pricing.recurrent['3Y'].price }}\"></td>
            <td><input type=\"text\" class=\"total price\" readonly=\"readonly\" disabled=\"disabled\"/></td>
            <td><input type=\"hidden\" name=\"pricing[recurrent][3Y][enabled]\" value=\"0\" /><input type=\"checkbox\" name=\"pricing[recurrent][3Y][enabled]\" value=\"1\" {% if product.pricing.recurrent['3Y'].enabled %}checked=\"checked\"{% endif %}/></td>
        </tr>
    </tbody>
</table>

<script type=\"text/javascript\">
\$(function() {

    \$('input.price:not(:disabled)').keyup(function(){
        var row = \$(this).parents('tr:first');
        var s = row.find('input.setup_price').val();
        var p = row.find('input.bill_price').val();
        var total = countTotal(p, s);
        var elem = row.find('input.total');
        elem.val(total);
    }).trigger('keyup');

    \$('.pp_type input').click(function(){
        \$('table.pp tbody').hide();
        \$('table.pp tbody.' + \$(this).val()).show();
    });
});

function countTotal(p, s)
{
    p = parseFloat(p);
    s = parseFloat(s);
    var num = new Number(p + s);
    if (!isNaN(num))
        return num.toFixed(2);
    return (0).toFixed(2);
}

</script>
{% endif %}

", "partial_pricing.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/admin_default/html/partial_pricing.phtml");
    }
}
