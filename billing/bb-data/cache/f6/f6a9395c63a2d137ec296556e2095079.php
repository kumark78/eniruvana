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

/* mod_orderbutton_settings.phtml */
class __TwigTemplate_45b527e2fcea1c4a6d9ec5045a95a926 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'head' => [$this, 'block_head'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "ajax", [], "any", false, false, false, 1)) ? ("layout_blank.phtml") : ("layout_default.phtml")), "mod_orderbutton_settings.phtml", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $macros["mf"] = $this->macros["mf"] = $this->loadTemplate("macro_functions.phtml", "mod_orderbutton_settings.phtml", 2)->unwrap();
        // line 4
        $context["active_menu"] = "system";
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo gettext("Order Button settings");
    }

    // line 6
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "<script src='js/jquery.spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css' />
";
    }

    // line 11
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<ul>
    <li class=\"firstB\"><a href=\"";
        // line 13
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a></li>
    <li><a href=\"";
        // line 14
        echo $this->extensions['Box_TwigExtensions']->twig_bb_admin_link_filter("system");
        echo "\">";
        echo gettext("Settings");
        echo "</a></li>
    <li class=\"lastB\">";
        // line 15
        echo gettext("Order Button settings");
        echo "</li>
</ul>
";
    }

    // line 19
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 21
        $context["params"] = twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "extension_config_get", [0 => ["ext" => "mod_orderbutton"]], "method", false, false, false, 21);
        // line 22
        echo "
<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">";
        // line 25
        echo gettext("Order window settings");
        echo "</a></li>
        <li><a href=\"#tab-popup\">";
        // line 26
        echo gettext("Advanced settings");
        echo "</a></li>
    </ul>

    <form method=\"post\" action=\"";
        // line 29
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("api/admin/extension/config_save");
        echo "\" class=\"mainForm api-form\" data-api-reload=\"Settings updated\">
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

         <div class=\"tab_content nopadding\" id=\"tab-index\">
             <div class=\"help\">
                 <h3>";
        // line 35
        echo gettext("Order popup settings");
        echo "</h3>
                 <p>";
        // line 36
        echo gettext("Configure how your popup window will look like");
        echo "</p>
             </div>

             <fieldset>
                 <div class=\"rowElem noborder\">
                     <label>";
        // line 41
        echo gettext("Theme color");
        echo "</label>
                     <div class=\"formRight moreFields\">
                         <select name=\"theme_color\" id=\"theme_color\">
                             <option value=\"green\"";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 44) == "green")) {
            echo "selected";
        }
        echo ">";
        echo gettext("Green");
        echo "</option>
                             <option value=\"red\"";
        // line 45
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 45) == "red")) {
            echo "selected";
        }
        echo ">";
        echo gettext("Red");
        echo "</option>
                             <option value=\"blue\"";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 46) == "blue")) {
            echo "selected";
        }
        echo ">";
        echo gettext("Blue");
        echo "</option>
                             <option value=\"dark\"";
        // line 47
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "theme_color", [], "any", false, false, false, 47) == "dark")) {
            echo "selected";
        }
        echo ">";
        echo gettext("Dark");
        echo "</option>
                         </select>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 <input type=\"submit\" value=\"";
        // line 53
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" onclick=\"window.onbeforeunload = null;\"/>

             </fieldset>

         </div>

         <div class=\"tab_content nopadding\" id=\"tab-popup\">
             <div class=\"help\">
                 <h3>";
        // line 61
        echo gettext("Advanced settings");
        echo "</h3>
                 <p>";
        // line 62
        echo gettext("Configure how your popup window will look like");
        echo "</p>
             </div>

             <fieldset>
                <div class=\"rowElem noborder\">
                     <label>";
        // line 67
        echo gettext("Border radius");
        echo "</label>
                     <div class=\"formRight\">
                         <input type=\"text\" name=\"border_radius\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "border_radius", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "border_radius", [], "any", false, false, false, 69), "0")) : ("0")), "html", null, true);
        echo "\" size=\"3\" id=\"border-radius\" style=\"width: 50px\"/>
                     </div>
                     <div class=\"fix\"></div>
                 </div>


                 <div class=\"rowElem\">
                     <label>";
        // line 76
        echo gettext("Background");
        echo "</label>
                     <div class=\"formRight moreFields\">
                         <ul>
                             <li class=\"sep\">";
        // line 79
        echo gettext("Color");
        echo "</li>
                             <li>
                                 <input type=\"hidden\" class=\"colorpick\" id=\"background-color\" name=\"background_color\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_color", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_color", [], "any", false, false, false, 81), "#000000")) : ("#000000")), "html", null, true);
        echo "\" />
                             </li>
                             <li class=\"sep\">";
        // line 83
        echo gettext("Opacity");
        echo "</li>
                             <li>
                                 <input type=\"text\" id=\"background-opacity\" name=\"background_opacity\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_opacity", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_opacity", [], "any", false, false, false, 85), 50)) : (50)), "html", null, true);
        echo "\" />
                             </li>
                             <li class=\"sep\">%</li>
                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>



                 <div class=\"rowElem\">
                     <label>";
        // line 96
        echo gettext("Loader (while content of popup is being loaded)");
        echo "</label>
                     <div class=\"formRight moreFields\">
                         <ul>

                             ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            echo "                             ";
            $context["loader_link"] = (("img/assets/loaders/loader" . $context["i"]) . ".gif");
            // line 102
            echo "                             <input type=\"radio\" id=\"loader";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" name=\"loader\" value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "loader", [], "any", false, false, false, 102) == $context["i"])) {
                echo "checked";
            }
            echo "></radio>
                             <label for=\"loader";
            // line 103
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">
                                 <img src=\"";
            // line 104
            echo twig_escape_filter($this->env, twig_mod_asset_url(($context["loader_link"] ?? null), "orderbutton"), "html", null, true);
            echo "\"/>
                             </label>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 <div class=\"rowElem\">
                     <label>";
        // line 113
        echo gettext("Width");
        echo "</label>
                     <div class=\"formRight moreFields\">
                         <ul>
                             <li class=\"sep\">";
        // line 116
        echo gettext("Width");
        echo ":</li>
                             <li style=\"width: 100px\"><input type=\"text\" name=\"popup_width\" id=\"popup_width\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "popup_width", [], "any", true, true, false, 117)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "popup_width", [], "any", false, false, false, 117), 600)) : (600)), "html", null, true);
        echo "\" placeholder=\"600\"></li>
                             <li class=\"sep\">px</li>
                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>


                 <div class=\"rowElem\" id=\"position\">
                     <label>";
        // line 126
        echo gettext("Close (ESC key by default)");
        echo "</label>
                     <div class=\"formRight moreFields\">
                         <input type=\"checkbox\" name=\"background_close\" value=\"1\" id=\"background-close\"  ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "background_close", [], "any", false, false, false, 128)) {
            echo "checked";
        }
        echo "/>
                         <label for=\"background-close\">";
        // line 129
        echo gettext("Click on background closes popup");
        echo "</label>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 ";
        // line 134
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "formbuilder"]], "method", false, false, false, 134)) {
            // line 135
            echo "                 <div class=\"rowElem\">
                     <label>";
            // line 136
            echo gettext("Show values of custom form before checkout");
            echo "</label>
                     <div class=\"formRight moreFields\">
                         <input type=\"checkbox\" name=\"show_custom_form_values\" value=\"1\" id=\"show-custom-form-values\"  ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "show_custom_form_values", [], "any", false, false, false, 138)) {
                echo "checked";
            }
            echo "/>
                         <label for=\"show-custom-form-values\">";
            // line 139
            echo gettext("User input will be shown before checkout for custom form");
            echo "</label>
                     </div>
                     <div class=\"fix\"></div>
                 </div>
                 ";
        }
        // line 144
        echo "
                 <input type=\"submit\" value=\"";
        // line 145
        echo gettext("Update settings");
        echo "\" class=\"greyishBtn submitForm\" onclick=\"window.onbeforeunload = null;\"/>
             </fieldset>
        </div>
    </div>
    <input type=\"hidden\" name=\"ext\" value=\"mod_orderbutton\" />
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">";
        // line 155
        echo gettext("Order Button code");
        echo "</h5>
    </div>

    <form class=\"mainForm\">
        <fieldset>
            <div class=\"rowElem\">
                <div class=\"formBottom moreFields\">
                    <ul>
                        <li class=\"sep txt\">";
        // line 163
        echo gettext("Clicking on html element with classname or ID");
        echo " </li>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"bind_selector\" id=\"bind_selector\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "bind_selector", [], "any", true, true, false, 164)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "bind_selector", [], "any", false, false, false, 164), ".order-button")) : (".order-button")), "html", null, true);
        echo "\" placeholder=\".order-button\"/></li>
                        <li class=\"sep txt\">";
        // line 165
        echo gettext("will open popup window for");
        echo " </li>
                        <li style=\"width: 100px\">
                            ";
        // line 167
        echo twig_call_macro($macros["mf"], "macro_selectbox", ["product_id", twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "product_get_pairs", [], "any", false, false, false, 167), twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "product_id", [], "any", false, false, false, 167), 0, "All products"], 167, $context, $this->getSourceContext());
        echo "
                        </li>
                        <li class=\"sep txt\">";
        // line 169
        echo gettext("symbols");
        echo "</li>
                    </ul>
                    <br/>
                    <div class=\"nNote nInformation \">
                        <p><strong>";
        // line 173
        echo gettext("IMPORTANT");
        echo ": </strong>";
        echo gettext("You need to add ID (if you want to use it for one html element) or class (if you want to use it for multiple elements) in order for it to work");
        echo "</p>
                        <p id=\"button-info\">
                            ";
        // line 175
        echo gettext("Add order-button class to your elements which must call popup. For example: ");
        echo "<strong>&lt;button type=&quot;button&quot;<span class=\"red\">&nbsp;class=&quot;order-button</span>&quot; &gt;Order Now&lt;/button&gt;</strong>
                            <p>";
        // line 176
        echo gettext("Add data-product attribute to your element to open specific product. For example:<br/>");
        echo "<strong>&lt;button type=&quot;button&quot; class=&quot;order-button\" <span class=\"red\">data-product=\"2\"</span> &gt;Order Product#2 Now &lt;/button&gt;</strong></p>
                            <p>";
        // line 177
        echo gettext("data-product attribute value will be overiden if popup's product is selected from select-box above");
        echo "</p>
                        </p>
                    </div>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label class=\"topLabel\">";
        // line 185
        echo gettext("Copy this code to your website");
        echo "</label>
                <div class=\"formBottom\">
                    <textarea cols=\"5\" rows=\"3\" id=\"script-code\" onclick=\"\$(this).select()\" readonly=\"readonly\"></textarea>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"aligncenter\" style=\"margin-bottom: 20px\">
                <button type=\"button\" class=\"greenBtn aligncenter\" id=\"load\"><span>";
        // line 193
        echo gettext("Try your popup");
        echo "</span></button>
            </div>
        </fieldset>
    </form>
</div>
";
    }

    // line 200
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 201
        echo "    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#background-color\").spectrum({
                showInput: true,
                showButtons: true,
                showAlpha: false,
                clickoutFiresChange: true,
                theme: \"sp-boxbilling\",
                showInitial: true,
                preferredFormat: \"hex\"
            });
            var changed = false;
            window.onbeforeunload = confirmExit;
            function confirmExit()
            {
                if (changed === true){
                    return \"There are unsaved changes! If you will exit this page they will be lost. You can save them by clicking on UPDATE SETTINGS button.\";
                }
            }

            var generate_link = function(selector){
                selector = (typeof selector === \"undefined\") ? \$('#bind_selector').val() : selector;
                var initial_link = \"";
        // line 223
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton/js", ["options" => 1]);
        echo "\";
                var options = {
                    'width' : \$('#popup_width').val(),
                    'theme_color': \$('#theme_color').val(),
                    'background_color':\$('#background-color').val(),
                    'popup_top':\$('#popup-top').val(),
                    'popup_left':\$('#popup-left').val(),
                    'background_opacity':\$('#background-opacity').val(),
                    'background_close':\$('#background-close:checked').val(),
                    'show_custom_form_values':\$('#show-custom-form-values:checked').val(),
                    'bind_selector':selector,
                    'border_radius':\$('#border-radius').val(),
                    'product_id':\$('#product_id').val(),
                    'loader': \$('[name=loader]:checked').val()
                }
                var options_url = \"\";
                \$.each(options,function(k,v){
                    if (v !== \"\" &&  typeof v !== \"undefined\" ){
                        options_url += \"&\" + k + \"=\" + encodeURIComponent(v);
                    }
                });
                var link = initial_link + options_url;
            return link;
            };

            var show_link = function(){
                \$('#script-code').text('\\<script type=\"text/javascript\" src=\"' + generate_link() + '\"\\>\\<\\/script\\>')
             };
            show_link();


            \$('#background-close, #show-custom-form-values').click(function(){
                changed = true;
                show_link();
            });
            \$('input').bind('input',function(){
                changed = true;
                show_link();
            });
            \$('select, #background-color, input:radio').change(function(){
                changed = true;
                show_link();
            });
            \$('#bind_selector').bind('input', function(){
                var selector = \$(this).val();
                if (selector[0]!=\".\" || selector[0]!=\"#\"){
                    \$('#button-info').parent().removeClass('nInformation').addClass('nFailure');
                    \$('#button-info').text('";
        // line 270
        echo gettext("It must start with dot(.) if it is classname or with a hashtag(#)");
        echo "');
                }
                if (selector[0]==\".\"){
                    \$('#button-info').parent().removeClass('nFailure').removeClass('nInformation').addClass('nInformation');
                    \$('#button-info').html(\"";
        // line 274
        echo gettext("Add \"+selector+\" class to your elements which must call popup. For example: ");
        echo "\" + '<strong>&lt;button type=&quot;button&quot;'+'<span class=\"red\">'+ ' class=&quot;'+selector.substring(1)+'</span>'+'&quot; &gt;Order Now&lt;/button&gt;</strong>');

                }
                if (selector[0]==\"#\"){
                    \$('#button-info').parent().removeClass('nFailure').removeClass('nInformation').addClass('nInformation');
                    \$('#button-info').html(\"";
        // line 279
        echo gettext("Add \"+selector+\" ID to your element which must call popup. For example: ");
        echo "\" + '<strong>&lt;button type=&quot;button&quot;'+'<span class=\"red\">'+ ' id=&quot;'+selector.substring(1)+'</span>'+'&quot; &gt;Order Now&lt;/button&gt;</strong>');
                }
            });

            \$('#load').click(function(){
                var s = \$('#bind_selector').val() + new Date().getTime();
                \$('body>button').remove()
                \$.getScript(generate_link(s), function() {
                    var test_button = \$('<button/>').css({\"display\": \"none\"}).appendTo('body');
                    if (s.charAt(0) == '.') {
                        test_button.attr('class', s.substring(1));
                    } else {
                        test_button.attr('id', s.substring(1));
                    }

                });
                document.addEventListener('OrderButtonEventsReady', function (e) {
                    \$(s).click();
                }, false);
            });
        });

    </script>
";
    }

    public function getTemplateName()
    {
        return "mod_orderbutton_settings.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 279,  553 => 274,  546 => 270,  496 => 223,  472 => 201,  468 => 200,  458 => 193,  447 => 185,  436 => 177,  432 => 176,  428 => 175,  421 => 173,  414 => 169,  409 => 167,  404 => 165,  400 => 164,  396 => 163,  385 => 155,  372 => 145,  369 => 144,  361 => 139,  355 => 138,  350 => 136,  347 => 135,  345 => 134,  337 => 129,  331 => 128,  326 => 126,  314 => 117,  310 => 116,  304 => 113,  296 => 107,  287 => 104,  283 => 103,  272 => 102,  269 => 101,  265 => 100,  258 => 96,  244 => 85,  239 => 83,  234 => 81,  229 => 79,  223 => 76,  213 => 69,  208 => 67,  200 => 62,  196 => 61,  185 => 53,  172 => 47,  164 => 46,  156 => 45,  148 => 44,  142 => 41,  134 => 36,  130 => 35,  121 => 29,  115 => 26,  111 => 25,  106 => 22,  104 => 21,  101 => 20,  97 => 19,  90 => 15,  84 => 14,  78 => 13,  75 => 12,  71 => 11,  65 => 7,  61 => 6,  54 => 3,  50 => 1,  48 => 4,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends request.ajax ? \"layout_blank.phtml\" : \"layout_default.phtml\" %}
{% import \"macro_functions.phtml\" as mf %}
{% block meta_title %}{% trans 'Order Button settings' %}{% endblock %}
{% set active_menu = 'system' %}

{% block head%}
<script src='js/jquery.spectrum.js'></script>
<link rel='stylesheet' href='css/spectrum.css' />
{% endblock %}

{% block breadcrumbs %}
<ul>
    <li class=\"firstB\"><a href=\"{{ '/'|alink }}\">{% trans 'Home' %}</a></li>
    <li><a href=\"{{ 'system'|alink }}\">{% trans 'Settings' %}</a></li>
    <li class=\"lastB\">{% trans 'Order Button settings' %}</li>
</ul>
{% endblock %}

{% block content %}

{% set params = admin.extension_config_get({\"ext\":\"mod_orderbutton\"}) %}

<div class=\"widget simpleTabs\">
    <ul class=\"tabs\">
        <li><a href=\"#tab-index\">{% trans 'Order window settings' %}</a></li>
        <li><a href=\"#tab-popup\">{% trans 'Advanced settings' %}</a></li>
    </ul>

    <form method=\"post\" action=\"{{ 'api/admin/extension/config_save'|link }}\" class=\"mainForm api-form\" data-api-reload=\"Settings updated\">
    <div class=\"tabs_container\">
        <div class=\"fix\"></div>

         <div class=\"tab_content nopadding\" id=\"tab-index\">
             <div class=\"help\">
                 <h3>{% trans 'Order popup settings' %}</h3>
                 <p>{% trans 'Configure how your popup window will look like' %}</p>
             </div>

             <fieldset>
                 <div class=\"rowElem noborder\">
                     <label>{% trans 'Theme color' %}</label>
                     <div class=\"formRight moreFields\">
                         <select name=\"theme_color\" id=\"theme_color\">
                             <option value=\"green\"{% if params.theme_color == 'green' %}selected{% endif %}>{% trans 'Green' %}</option>
                             <option value=\"red\"{% if params.theme_color == 'red' %}selected{% endif %}>{% trans 'Red' %}</option>
                             <option value=\"blue\"{% if params.theme_color == 'blue' %}selected{% endif %}>{% trans 'Blue' %}</option>
                             <option value=\"dark\"{% if params.theme_color == 'dark' %}selected{% endif %}>{% trans 'Dark' %}</option>
                         </select>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 <input type=\"submit\" value=\"{% trans 'Update settings' %}\" class=\"greyishBtn submitForm\" onclick=\"window.onbeforeunload = null;\"/>

             </fieldset>

         </div>

         <div class=\"tab_content nopadding\" id=\"tab-popup\">
             <div class=\"help\">
                 <h3>{% trans 'Advanced settings' %}</h3>
                 <p>{% trans 'Configure how your popup window will look like' %}</p>
             </div>

             <fieldset>
                <div class=\"rowElem noborder\">
                     <label>{% trans 'Border radius' %}</label>
                     <div class=\"formRight\">
                         <input type=\"text\" name=\"border_radius\" value=\"{{params.border_radius | default('0') }}\" size=\"3\" id=\"border-radius\" style=\"width: 50px\"/>
                     </div>
                     <div class=\"fix\"></div>
                 </div>


                 <div class=\"rowElem\">
                     <label>{% trans 'Background' %}</label>
                     <div class=\"formRight moreFields\">
                         <ul>
                             <li class=\"sep\">{% trans 'Color' %}</li>
                             <li>
                                 <input type=\"hidden\" class=\"colorpick\" id=\"background-color\" name=\"background_color\" value=\"{{params.background_color | default('#000000') }}\" />
                             </li>
                             <li class=\"sep\">{% trans 'Opacity' %}</li>
                             <li>
                                 <input type=\"text\" id=\"background-opacity\" name=\"background_opacity\" value=\"{{params.background_opacity | default(50) }}\" />
                             </li>
                             <li class=\"sep\">%</li>
                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>



                 <div class=\"rowElem\">
                     <label>{% trans 'Loader (while content of popup is being loaded)' %}</label>
                     <div class=\"formRight moreFields\">
                         <ul>

                             {% for i in range(1, 9) %}
                             {% set loader_link = 'img/assets/loaders/loader'~i~'.gif'%}
                             <input type=\"radio\" id=\"loader{{i}}\" name=\"loader\" value=\"{{i}}\" {% if params.loader == i%}checked{% endif %}></radio>
                             <label for=\"loader{{i}}\">
                                 <img src=\"{{ loader_link | mod_asset_url('orderbutton')}}\"/>
                             </label>
                             {% endfor %}
                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 <div class=\"rowElem\">
                     <label>{% trans 'Width' %}</label>
                     <div class=\"formRight moreFields\">
                         <ul>
                             <li class=\"sep\">{% trans 'Width' %}:</li>
                             <li style=\"width: 100px\"><input type=\"text\" name=\"popup_width\" id=\"popup_width\" value=\"{{ params.popup_width | default(600) }}\" placeholder=\"600\"></li>
                             <li class=\"sep\">px</li>
                         </ul>
                     </div>
                     <div class=\"fix\"></div>
                 </div>


                 <div class=\"rowElem\" id=\"position\">
                     <label>{% trans 'Close (ESC key by default)' %}</label>
                     <div class=\"formRight moreFields\">
                         <input type=\"checkbox\" name=\"background_close\" value=\"1\" id=\"background-close\"  {% if params.background_close %}checked{% endif %}/>
                         <label for=\"background-close\">{% trans 'Click on background closes popup' %}</label>
                     </div>
                     <div class=\"fix\"></div>
                 </div>

                 {% if guest.extension_is_on({\"mod\":\"formbuilder\"}) %}
                 <div class=\"rowElem\">
                     <label>{% trans 'Show values of custom form before checkout' %}</label>
                     <div class=\"formRight moreFields\">
                         <input type=\"checkbox\" name=\"show_custom_form_values\" value=\"1\" id=\"show-custom-form-values\"  {% if params.show_custom_form_values %}checked{% endif %}/>
                         <label for=\"show-custom-form-values\">{% trans 'User input will be shown before checkout for custom form' %}</label>
                     </div>
                     <div class=\"fix\"></div>
                 </div>
                 {% endif %}

                 <input type=\"submit\" value=\"{% trans 'Update settings' %}\" class=\"greyishBtn submitForm\" onclick=\"window.onbeforeunload = null;\"/>
             </fieldset>
        </div>
    </div>
    <input type=\"hidden\" name=\"ext\" value=\"mod_orderbutton\" />
    </form>
</div>

<div class=\"widget\">
    <div class=\"head\">
        <h5 class=\"iCog\">{% trans 'Order Button code' %}</h5>
    </div>

    <form class=\"mainForm\">
        <fieldset>
            <div class=\"rowElem\">
                <div class=\"formBottom moreFields\">
                    <ul>
                        <li class=\"sep txt\">{% trans 'Clicking on html element with classname or ID' %} </li>
                        <li style=\"width: 100px\"><input type=\"text\" name=\"bind_selector\" id=\"bind_selector\" value=\"{{ params.bind_selector | default('.order-button') }}\" placeholder=\".order-button\"/></li>
                        <li class=\"sep txt\">{% trans 'will open popup window for' %} </li>
                        <li style=\"width: 100px\">
                            {{ mf.selectbox('product_id', admin.product_get_pairs, request.product_id, 0, 'All products') }}
                        </li>
                        <li class=\"sep txt\">{% trans 'symbols' %}</li>
                    </ul>
                    <br/>
                    <div class=\"nNote nInformation \">
                        <p><strong>{% trans 'IMPORTANT' %}: </strong>{% trans 'You need to add ID (if you want to use it for one html element) or class (if you want to use it for multiple elements) in order for it to work' %}</p>
                        <p id=\"button-info\">
                            {% trans 'Add order-button class to your elements which must call popup. For example: ' %}<strong>&lt;button type=&quot;button&quot;<span class=\"red\">&nbsp;class=&quot;order-button</span>&quot; &gt;Order Now&lt;/button&gt;</strong>
                            <p>{% trans 'Add data-product attribute to your element to open specific product. For example:<br/>' %}<strong>&lt;button type=&quot;button&quot; class=&quot;order-button\" <span class=\"red\">data-product=\"2\"</span> &gt;Order Product#2 Now &lt;/button&gt;</strong></p>
                            <p>{% trans 'data-product attribute value will be overiden if popup\\'s product is selected from select-box above' %}</p>
                        </p>
                    </div>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"rowElem\">
                <label class=\"topLabel\">{% trans 'Copy this code to your website' %}</label>
                <div class=\"formBottom\">
                    <textarea cols=\"5\" rows=\"3\" id=\"script-code\" onclick=\"\$(this).select()\" readonly=\"readonly\"></textarea>
                </div>
                <div class=\"fix\"></div>
            </div>

            <div class=\"aligncenter\" style=\"margin-bottom: 20px\">
                <button type=\"button\" class=\"greenBtn aligncenter\" id=\"load\"><span>{% trans 'Try your popup' %}</span></button>
            </div>
        </fieldset>
    </form>
</div>
{% endblock %}

{% block js %}
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#background-color\").spectrum({
                showInput: true,
                showButtons: true,
                showAlpha: false,
                clickoutFiresChange: true,
                theme: \"sp-boxbilling\",
                showInitial: true,
                preferredFormat: \"hex\"
            });
            var changed = false;
            window.onbeforeunload = confirmExit;
            function confirmExit()
            {
                if (changed === true){
                    return \"There are unsaved changes! If you will exit this page they will be lost. You can save them by clicking on UPDATE SETTINGS button.\";
                }
            }

            var generate_link = function(selector){
                selector = (typeof selector === \"undefined\") ? \$('#bind_selector').val() : selector;
                var initial_link = \"{{'orderbutton/js' | link({'options' : 1})}}\";
                var options = {
                    'width' : \$('#popup_width').val(),
                    'theme_color': \$('#theme_color').val(),
                    'background_color':\$('#background-color').val(),
                    'popup_top':\$('#popup-top').val(),
                    'popup_left':\$('#popup-left').val(),
                    'background_opacity':\$('#background-opacity').val(),
                    'background_close':\$('#background-close:checked').val(),
                    'show_custom_form_values':\$('#show-custom-form-values:checked').val(),
                    'bind_selector':selector,
                    'border_radius':\$('#border-radius').val(),
                    'product_id':\$('#product_id').val(),
                    'loader': \$('[name=loader]:checked').val()
                }
                var options_url = \"\";
                \$.each(options,function(k,v){
                    if (v !== \"\" &&  typeof v !== \"undefined\" ){
                        options_url += \"&\" + k + \"=\" + encodeURIComponent(v);
                    }
                });
                var link = initial_link + options_url;
            return link;
            };

            var show_link = function(){
                \$('#script-code').text('\\<script type=\"text/javascript\" src=\"' + generate_link() + '\"\\>\\<\\/script\\>')
             };
            show_link();


            \$('#background-close, #show-custom-form-values').click(function(){
                changed = true;
                show_link();
            });
            \$('input').bind('input',function(){
                changed = true;
                show_link();
            });
            \$('select, #background-color, input:radio').change(function(){
                changed = true;
                show_link();
            });
            \$('#bind_selector').bind('input', function(){
                var selector = \$(this).val();
                if (selector[0]!=\".\" || selector[0]!=\"#\"){
                    \$('#button-info').parent().removeClass('nInformation').addClass('nFailure');
                    \$('#button-info').text('{% trans 'It must start with dot(.) if it is classname or with a hashtag(#)' %}');
                }
                if (selector[0]==\".\"){
                    \$('#button-info').parent().removeClass('nFailure').removeClass('nInformation').addClass('nInformation');
                    \$('#button-info').html(\"{% trans 'Add \"+selector+\" class to your elements which must call popup. For example: ' %}\" + '<strong>&lt;button type=&quot;button&quot;'+'<span class=\"red\">'+ ' class=&quot;'+selector.substring(1)+'</span>'+'&quot; &gt;Order Now&lt;/button&gt;</strong>');

                }
                if (selector[0]==\"#\"){
                    \$('#button-info').parent().removeClass('nFailure').removeClass('nInformation').addClass('nInformation');
                    \$('#button-info').html(\"{% trans 'Add \"+selector+\" ID to your element which must call popup. For example: ' %}\" + '<strong>&lt;button type=&quot;button&quot;'+'<span class=\"red\">'+ ' id=&quot;'+selector.substring(1)+'</span>'+'&quot; &gt;Order Now&lt;/button&gt;</strong>');
                }
            });

            \$('#load').click(function(){
                var s = \$('#bind_selector').val() + new Date().getTime();
                \$('body>button').remove()
                \$.getScript(generate_link(s), function() {
                    var test_button = \$('<button/>').css({\"display\": \"none\"}).appendTo('body');
                    if (s.charAt(0) == '.') {
                        test_button.attr('class', s.substring(1));
                    } else {
                        test_button.attr('id', s.substring(1));
                    }

                });
                document.addEventListener('OrderButtonEventsReady', function (e) {
                    \$(s).click();
                }, false);
            });
        });

    </script>
{% endblock %}", "mod_orderbutton_settings.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-modules/Orderbutton/html_admin/mod_orderbutton_settings.phtml");
    }
}
