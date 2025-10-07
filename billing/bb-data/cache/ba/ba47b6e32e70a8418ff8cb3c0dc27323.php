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

/* layout_default.phtml */
class __TwigTemplate_41af64e367144bd35c492f2784026045 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta_title' => [$this, 'block_meta_title'],
            'meta_description' => [$this, 'block_meta_description'],
            'opengraph' => [$this, 'block_opengraph'],
            'head' => [$this, 'block_head'],
            'js' => [$this, 'block_js'],
            'body_class' => [$this, 'block_body_class'],
            'body' => [$this, 'block_body'],
            'breadcrumbs' => [$this, 'block_breadcrumbs'],
            'breadcrumb' => [$this, 'block_breadcrumb'],
            'content_before' => [$this, 'block_content_before'],
            'content' => [$this, 'block_content'],
            'content_after' => [$this, 'block_content_after'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('meta_title', $context, $blocks);
        echo "</title>

    <meta property=\"bb:url\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("BB_URL"), "html", null, true);
        echo "\">
    <meta property=\"bb:client_area\" content=\"";
        // line 8
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">

    <meta name=\"description\" content=\"";
        // line 10
        $this->displayBlock('meta_description', $context, $blocks);
        echo "\">
    <meta name=\"robots\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_robots", [], "any", false, false, false, 11), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_author", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
    <meta name=\"generator\" content=\"BoxBilling ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_version", [], "any", false, false, false, 13), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 16
        $this->displayBlock('opengraph', $context, $blocks);
        // line 17
        echo "
    <link rel='stylesheet' type='text/css' href=\"";
        // line 18
        echo twig_asset_url($this->env, (("css/huraga-" . twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "color_scheme", [], "any", false, false, false, 18)) . ".css"));
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 19
        echo twig_asset_url($this->env, "css/plugins/jquery.jgrowl.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 20
        echo twig_asset_url($this->env, "css/logos.css");
        echo "\">
    <link rel='stylesheet' type='text/css' href=\"";
        // line 21
        echo twig_asset_url($this->env, "css/flags16.css");
        echo "\">

    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo twig_asset_url($this->env, "favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 24
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 25
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 26
        echo twig_asset_url($this->env, "img/icons/apple-touch-icon-57-precomposed.png");
        echo "\">

    <script src=\"";
        // line 28
        echo twig_asset_url($this->env, "js/libs/jquery.js");
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_asset_url($this->env, "js/bb-jquery.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 30
        echo twig_asset_url($this->env, "js/libs/modernizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 31
        echo twig_asset_url($this->env, "js/bootstrap/bootstrap.min.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 32
        echo twig_asset_url($this->env, "js/libs/selectivizr.js");
        echo "\" defer=\"defer\"></script>
    <script src=\"";
        // line 33
        echo twig_asset_url($this->env, "js/plugins/jGrowl/jquery.jgrowl.js");
        echo "\" defer=\"defer\"></script>

    ";
        // line 35
        $this->displayBlock('head', $context, $blocks);
        // line 36
        echo "    ";
        $this->displayBlock('js', $context, $blocks);
        // line 37
        echo "</head>

<body class=\"";
        // line 39
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "cookieconsent"]], "method", false, false, false, 40)) {
            // line 41
            echo "    ";
            $__internal_compile_0 = null;
            try {
                $__internal_compile_0 =                 $this->loadTemplate("mod_cookieconsent_index.phtml", "layout_default.phtml", 41);
            } catch (LoaderError $e) {
                // ignore missing template
            }
            if ($__internal_compile_0) {
                $__internal_compile_0->display($context);
            }
        }
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 269
        echo "
";
        // line 270
        if ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_order", [], "any", false, false, false, 270) || twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "side_menu_order", [], "any", false, false, false, 270))) {
            // line 271
            echo "<script src=\"";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("orderbutton/js", ["options" => "1", "width" => 600, "theme_color" => "green", "background_color" => "black", "background_opacity" => 50, "background_close" => 1, "bind_selector" => ".order-button", "border_radius" => 0, "loader" => 8]);
            echo "\" ></script>
";
        }
        // line 273
        echo "
";
        // line 274
        if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 274)) {
            // line 275
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "inject_javascript", [], "any", false, false, false, 275);
            echo "
";
        }
        // line 277
        $__internal_compile_1 = null;
        try {
            $__internal_compile_1 =             $this->loadTemplate("partial_pending_messages.phtml", "layout_default.phtml", 277);
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_1) {
            $__internal_compile_1->display($context);
        }
        // line 278
        echo "</body>
</html>
";
    }

    // line 5
    public function block_meta_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_title", [], "any", false, false, false, 5), "html", null, true);
    }

    // line 10
    public function block_meta_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "meta_description", [], "any", false, false, false, 10), "html", null, true);
    }

    // line 16
    public function block_opengraph($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 35
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 36
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 39
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        if ( !($context["client"] ?? null)) {
            // line 46
            echo "<script type=\"text/javascript\">\$(function(){bb.redirect('";
            echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("login");
            echo "');});</script>
";
        } else {
            // line 48
            $context["profile"] = twig_get_attribute($this->env, $this->source, ($context["client"] ?? null), "client_get", [], "any", false, false, false, 48);
            // line 49
            $context["company"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_company", [], "any", false, false, false, 49);
            // line 50
            echo "
<div id=\"wrapper\">
    <header class=\"container\" id=\"header\">
            ";
            // line 53
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_page_header", [], "any", false, false, false, 53)) {
                // line 54
                echo "                <nav>
                <ul class=\"f16\">
                    ";
                // line 56
                $context["languages"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_languages", [], "any", false, false, false, 56);
                // line 57
                echo "                    ";
                if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
                    // line 58
                    echo "                    ";
                    $context["currentLang"] = twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "system_locale", [], "any", false, false, false, 58);
                    // line 59
                    echo "                    ";
                    $context["countryCode"] = twig_slice($this->env, ($context["currentLang"] ?? null), 3, 2);
                    // line 60
                    echo "                        <li>
                            <div class=\"btn-group\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"flag  ";
                    // line 63
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
                    echo "\"></span>
                                    ";
                    // line 64
                    echo twig_escape_filter($this->env, ($context["countryCode"] ?? null), "html", null, true);
                    echo "
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    ";
                    // line 68
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
                        // line 69
                        echo "                                    ";
                        $context["countryCode"] = twig_slice($this->env, $context["lang"], 3, 2);
                        // line 70
                        echo "                                    ";
                        if (($context["lang"] != ($context["currentLang"] ?? null))) {
                            // line 71
                            echo "                                            <li class=\"language_selector\" data-language-code=\"";
                            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
                            echo "\"><a href=\"javascript:;\"> <span class=\"flag ";
                            echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["countryCode"] ?? null)), "html", null, true);
                            echo "\"></span> ";
                            echo twig_escape_filter($this->env, gettext($context["lang"]), "html", null, true);
                            echo "</a></li>
                                        ";
                        }
                        // line 73
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "                                </ul>
                            </div>
                        </li>

                    ";
                }
                // line 79
                echo "
                    ";
                // line 80
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_dashboard", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                    <li>
                        <a href=\"";
                    // line 82
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Dashboard");
                    echo "\">";
                    echo gettext("Dashboard");
                    echo "</a>
                    </li>
                    ";
                }
                // line 85
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_order", [], "any", false, false, false, 85)) {
                    // line 86
                    echo "                    <li class=\"order-button\">
                        <a href=\"#\" class=\"show-tip\" title=\"";
                    // line 87
                    echo gettext("Order");
                    echo "\">";
                    echo gettext("Order services");
                    echo "</a>
                    </li>
                    ";
                }
                // line 90
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_profile", [], "any", false, false, false, 90)) {
                    // line 91
                    echo "                    <li>
                        <a href=\"";
                    // line 92
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/me");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Profile");
                    echo "\">";
                    echo gettext("Profile");
                    echo "</a>
                    </li>
                    ";
                }
                // line 95
                echo "
                    ";
                // line 96
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "top_menu_signout", [], "any", false, false, false, 96)) {
                    // line 97
                    echo "                    <li>
                        <a href=\"";
                    // line 98
                    echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
                    echo "\" class=\"show-tip\" title=\"";
                    echo gettext("Sign out");
                    echo "\">";
                    echo gettext("Sign out");
                    echo "</a>
                    </li>
                    ";
                }
                // line 101
                echo "                </ul>
            </nav>

            ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_logo", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 105)) {
                        // line 106
                        echo "                    <h1>
                        <a href=\"";
                        // line 107
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
                        echo "\">
                            <img src=\"";
                        // line 108
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "logo_url", [], "any", false, false, false, 108), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 108), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 108), "html", null, true);
                        echo "\" style=\"max-height: 75px\"/>
                        </a>
                        <p></p>
                    </h1>
                ";
                    }
                    // line 113
                    echo "            ";
                }
                // line 114
                echo "
            ";
                // line 115
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_company_name", [], "any", false, false, false, 115)) {
                    // line 116
                    echo "            <p>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "name", [], "any", false, false, false, 116), "html", null, true);
                    echo "</p>
            ";
                }
                // line 118
                echo "        ";
            }
            // line 119
            echo "    </header>
    <section class=\"container\" role=\"main\">
        <div class=\"navigation-block\">

            <div class=\"navbar\">
                <a class=\"btn btn-navbar btn-block btn-large\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"awe-user\"></span> ";
            // line 124
            echo gettext("User profile");
            echo "</a>
            </div>

            <nav class=\"main-navigation nav-collapse collapse\" role=\"navigation\">
                ";
            // line 128
            $this->loadTemplate("partial_menu.phtml", "layout_default.phtml", 128)->display($context);
            // line 129
            echo "            </nav>

            ";
            // line 131
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_client_details", [], "any", false, false, false, 131)) {
                // line 132
                echo "            <section class=\"user-profile\">
                <figure>
                    <img alt=\"";
                // line 134
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 134), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 134), "html", null, true);
                echo " gravatar\" src=\"";
                echo twig_escape_filter($this->env, twig_gravatar_filter(twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "email", [], "any", false, false, false, 134), 60), "html", null, true);
                echo "\">
                    <figcaption>
                        <strong><a href=\"";
                // line 136
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
                echo "\" class=\"\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "first_name", [], "any", false, false, false, 136), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "last_name", [], "any", false, false, false, 136), "html", null, true);
                echo "</a></strong>
                        <em>";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "company", [], "any", false, false, false, 137), "html", null, true);
                echo "</em>
                        <ul>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 139
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/profile");
                echo "\">";
                echo gettext("profile");
                echo "</a></li>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"";
                // line 140
                echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("client/logout");
                echo "\">";
                echo gettext("sign out");
                echo "</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </section>
            ";
            }
            // line 146
            echo "
            ";
            // line 147
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_balance_enabled", [], "any", false, false, false, 147)) {
                // line 148
                echo "            <section class=\"balance\">
                <h2>";
                // line 149
                echo gettext("Account balance");
                echo "</h2>
                <strong>";
                // line 150
                echo twig_money($this->env, twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "balance", [], "any", false, false, false, 150), twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "currency", [], "any", false, false, false, 150));
                echo "</strong>
            </section>
            ";
            }
            // line 153
            echo "
            ";
            // line 154
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_enabled", [], "any", false, false, false, 154)) {
                // line 155
                echo "            <section class=\"side-note\">
                <div class=\"side-note-container\">
                    <h2>";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_title", [], "any", false, false, false, 157), "html", null, true);
                echo "</h2>
                    <p>";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "sidebar_note_content", [], "any", false, false, false, 158), "html", null, true);
                echo "</p>
                </div>
                <div class=\"side-note-bottom\"></div>
            </section>
            ";
            }
            // line 163
            echo "        </div>

        <div class=\"content-block\" role=\"main\">

            ";
            // line 167
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_breadcrumb", [], "any", false, false, false, 167)) {
                // line 168
                echo "            ";
                $this->displayBlock('breadcrumbs', $context, $blocks);
                // line 176
                echo "            ";
            }
            // line 177
            echo "
            ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "show_page_header", [], "any", false, false, false, 178)) {
                // line 179
                echo "            ";
                // line 185
                echo "            ";
            }
            // line 186
            echo "
            ";
            // line 187
            $this->loadTemplate("partial_message.phtml", "layout_default.phtml", 187)->display($context);
            // line 188
            echo "
            ";
            // line 189
            $this->displayBlock('content_before', $context, $blocks);
            // line 190
            echo "            ";
            $this->displayBlock('content', $context, $blocks);
            // line 191
            echo "            ";
            $this->displayBlock('content_after', $context, $blocks);
            // line 192
            echo "        </div>
    </section>
    <div id=\"push\"></div>
</div>

";
            // line 197
            if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_enabled", [], "any", false, false, false, 197)) {
                // line 198
                echo "<footer id=\"footer\" class=\"container\">
    <p>&copy; ";
                // line 199
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y"), "html", null, true);
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", true, true, false, 199)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_signature", [], "any", false, false, false, 199), twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 199))) : (twig_get_attribute($this->env, $this->source, ($context["company"] ?? null), "signature", [], "any", false, false, false, 199)));
                echo "</p>
    <ul>
        ";
                // line 201
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_enabled", [], "any", false, false, false, 201)) {
                    // line 202
                    echo "        <li>
            ";
                    // line 203
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 203)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 203)))) {
                        // line 204
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 204), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 204), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 206
                        echo "            <a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_page", [], "any", false, false, false, 206));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_1_title", [], "any", false, false, false, 206), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 208
                    echo "        </li>
        ";
                }
                // line 210
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_enabled", [], "any", false, false, false, 210)) {
                    // line 211
                    echo "        <li>
            ";
                    // line 212
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 212)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 212)))) {
                        // line 213
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 213), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 213), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 215
                        echo "            <a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_page", [], "any", false, false, false, 215));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_2_title", [], "any", false, false, false, 215), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 217
                    echo "        </li>
        ";
                }
                // line 219
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_enabled", [], "any", false, false, false, 219)) {
                    // line 220
                    echo "        <li>
            ";
                    // line 221
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 221)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 221)))) {
                        // line 222
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 222), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 222), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 224
                        echo "            <a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_page", [], "any", false, false, false, 224));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_3_title", [], "any", false, false, false, 224), "html", null, true);
                        echo "</a>

            ";
                    }
                    // line 227
                    echo "        </li>
        ";
                }
                // line 229
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_enabled", [], "any", false, false, false, 229)) {
                    // line 230
                    echo "        <li>
            ";
                    // line 231
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 231)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 231)))) {
                        // line 232
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 232), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 232), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 234
                        echo "            <a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_page", [], "any", false, false, false, 234));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_4_title", [], "any", false, false, false, 234), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 236
                    echo "        </li>
        ";
                }
                // line 238
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_enabled", [], "any", false, false, false, 238)) {
                    // line 239
                    echo "        <li>
            ";
                    // line 240
                    if ((twig_in_filter("http://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_page", [], "any", false, false, false, 240)) || twig_in_filter("https://", twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_page", [], "any", false, false, false, 240)))) {
                        // line 241
                        echo "            <a href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_page", [], "any", false, false, false, 241), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_title", [], "any", false, false, false, 241), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 243
                        echo "            <a href=\"";
                        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter(twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_page", [], "any", false, false, false, 243));
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_link_5_title", [], "any", false, false, false, 243), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 245
                    echo "        </li>
        ";
                }
                // line 247
                echo "
        ";
                // line 248
                if (twig_get_attribute($this->env, $this->source, ($context["guest"] ?? null), "extension_is_on", [0 => ["mod" => "branding"]], "method", false, false, false, 248)) {
                    // line 249
                    echo "        <li>
            <a href=\"https://github.com/boxbilling/boxbilling\" title=\"Billing Software\" target=\"_blank\">";
                    // line 250
                    echo gettext("Powered by the BoxBilling Community");
                    echo "</a>
        </li>
        ";
                }
                // line 253
                echo "    </ul>
    ";
                // line 254
                if (twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "footer_to_top_enabled", [], "any", false, false, false, 254)) {
                    // line 255
                    echo "    <a href=\"#top\" class=\"btn btn-primary btn-flat pull-right\"><span class=\"awe-arrow-up\"></span> ";
                    echo gettext("Top");
                    echo "</a>
    ";
                }
                // line 257
                echo "</footer>
";
            }
            // line 259
            echo "
<div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
    <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
        <img src=\"";
            // line 262
            echo twig_asset_url($this->env, "img/loader.gif");
            echo "\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
    </div>
</div>
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

";
        }
    }

    // line 168
    public function block_breadcrumbs($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 169
        echo "            <ul class=\"breadcrumb\">
                <li><a href=\"";
        // line 170
        echo $this->extensions['Box_TwigExtensions']->twig_bb_client_link_filter("/");
        echo "\">";
        echo gettext("Home");
        echo "</a> <span class=\"divider\">/</span></li>
                ";
        // line 171
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 174
        echo "            </ul>
            ";
    }

    // line 171
    public function block_breadcrumb($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "                <li class=\"active\">";
        echo gettext("Dashboard");
        echo "</li>
                ";
    }

    // line 189
    public function block_content_before($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 190
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 191
    public function block_content_after($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "layout_default.phtml";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  849 => 191,  843 => 190,  837 => 189,  830 => 172,  826 => 171,  821 => 174,  819 => 171,  813 => 170,  810 => 169,  806 => 168,  795 => 262,  790 => 259,  786 => 257,  780 => 255,  778 => 254,  775 => 253,  769 => 250,  766 => 249,  764 => 248,  761 => 247,  757 => 245,  749 => 243,  741 => 241,  739 => 240,  736 => 239,  733 => 238,  729 => 236,  721 => 234,  713 => 232,  711 => 231,  708 => 230,  705 => 229,  701 => 227,  692 => 224,  684 => 222,  682 => 221,  679 => 220,  676 => 219,  672 => 217,  664 => 215,  656 => 213,  654 => 212,  651 => 211,  648 => 210,  644 => 208,  636 => 206,  628 => 204,  626 => 203,  623 => 202,  621 => 201,  614 => 199,  611 => 198,  609 => 197,  602 => 192,  599 => 191,  596 => 190,  594 => 189,  591 => 188,  589 => 187,  586 => 186,  583 => 185,  581 => 179,  579 => 178,  576 => 177,  573 => 176,  570 => 168,  568 => 167,  562 => 163,  554 => 158,  550 => 157,  546 => 155,  544 => 154,  541 => 153,  535 => 150,  531 => 149,  528 => 148,  526 => 147,  523 => 146,  512 => 140,  506 => 139,  501 => 137,  493 => 136,  484 => 134,  480 => 132,  478 => 131,  474 => 129,  472 => 128,  465 => 124,  458 => 119,  455 => 118,  449 => 116,  447 => 115,  444 => 114,  441 => 113,  429 => 108,  425 => 107,  422 => 106,  419 => 105,  417 => 104,  412 => 101,  402 => 98,  399 => 97,  397 => 96,  394 => 95,  384 => 92,  381 => 91,  378 => 90,  370 => 87,  367 => 86,  364 => 85,  354 => 82,  351 => 81,  349 => 80,  346 => 79,  339 => 74,  333 => 73,  323 => 71,  320 => 70,  317 => 69,  313 => 68,  306 => 64,  302 => 63,  297 => 60,  294 => 59,  291 => 58,  288 => 57,  286 => 56,  282 => 54,  280 => 53,  275 => 50,  273 => 49,  271 => 48,  265 => 46,  263 => 45,  259 => 44,  253 => 39,  247 => 36,  241 => 35,  235 => 16,  228 => 10,  221 => 5,  215 => 278,  205 => 277,  199 => 275,  197 => 274,  194 => 273,  188 => 271,  186 => 270,  183 => 269,  181 => 44,  178 => 43,  166 => 41,  164 => 40,  160 => 39,  156 => 37,  153 => 36,  151 => 35,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  121 => 26,  117 => 25,  113 => 24,  109 => 23,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  89 => 17,  87 => 16,  81 => 13,  77 => 12,  73 => 11,  69 => 10,  64 => 8,  60 => 7,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html class=\"no-js\" lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>{% block meta_title %}{{ settings.meta_title }}{% endblock %}</title>

    <meta property=\"bb:url\" content=\"{{ constant('BB_URL') }}\">
    <meta property=\"bb:client_area\" content=\"{{ '/'|link }}\">

    <meta name=\"description\" content=\"{% block meta_description %}{{ settings.meta_description }}{% endblock %}\">
    <meta name=\"robots\" content=\"{{ settings.meta_robots }}\">
    <meta name=\"author\" content=\"{{ settings.meta_author }}\">
    <meta name=\"generator\" content=\"BoxBilling {{ guest.system_version }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    {% block opengraph %}{% endblock %}

    <link rel='stylesheet' type='text/css' href=\"{{ ('css/huraga-' ~ settings.color_scheme ~ '.css') | asset_url }}\">
    <link rel='stylesheet' type='text/css' href=\"{{ 'css/plugins/jquery.jgrowl.css' | asset_url }}\">
    <link rel='stylesheet' type='text/css' href=\"{{ 'css/logos.css' | asset_url }}\">
    <link rel='stylesheet' type='text/css' href=\"{{ 'css/flags16.css' | asset_url }}\">

    <link rel=\"shortcut icon\" href=\"{{ 'favicon.ico' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'img/icons/apple-touch-icon-114-precomposed.png' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'img/icons/apple-touch-icon-72-precomposed.png' | asset_url }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'img/icons/apple-touch-icon-57-precomposed.png' | asset_url }}\">

    <script src=\"{{ 'js/libs/jquery.js' | asset_url }}\"></script>
    <script src=\"{{ 'js/bb-jquery.js' | asset_url }}\" defer=\"defer\"></script>
    <script src=\"{{ 'js/libs/modernizr.js' | asset_url }}\" defer=\"defer\"></script>
    <script src=\"{{ 'js/bootstrap/bootstrap.min.js' | asset_url}}\" defer=\"defer\"></script>
    <script src=\"{{ 'js/libs/selectivizr.js' | asset_url }}\" defer=\"defer\"></script>
    <script src=\"{{ 'js/plugins/jGrowl/jquery.jgrowl.js' | asset_url }}\" defer=\"defer\"></script>

    {% block head %}{% endblock %}
    {% block js %}{% endblock %}
</head>

<body class=\"{% block body_class %}{% endblock %}\">
{% if guest.extension_is_on({\"mod\":\"cookieconsent\"}) %}
    {% include 'mod_cookieconsent_index.phtml' ignore missing%}
{% endif %}

{% block body %}
{% if not client %}
<script type=\"text/javascript\">\$(function(){bb.redirect('{{ \"login\"|link }}');});</script>
{% else %}
{% set profile = client.client_get %}
{% set company = guest.system_company %}

<div id=\"wrapper\">
    <header class=\"container\" id=\"header\">
            {% if settings.show_page_header %}
                <nav>
                <ul class=\"f16\">
                    {% set languages = guest.extension_languages %}
                    {% if languages|length > 1 %}
                    {% set currentLang = guest.system_locale %}
                    {% set countryCode = currentLang | slice(3, 2) %}
                        <li>
                            <div class=\"btn-group\">
                                <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                    <span class=\"flag  {{ countryCode | lower }}\"></span>
                                    {{ countryCode }}
                                    <span class=\"caret\"></span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    {% for lang in languages %}
                                    {% set countryCode = lang | slice(3, 2) %}
                                    {% if lang != currentLang %}
                                            <li class=\"language_selector\" data-language-code=\"{{ lang }}\"><a href=\"javascript:;\"> <span class=\"flag {{ countryCode | lower }}\"></span> {{ lang | trans }}</a></li>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>
                        </li>

                    {% endif %}

                    {% if settings.top_menu_dashboard %}
                    <li>
                        <a href=\"{{ ''|link }}\" class=\"show-tip\" title=\"{% trans 'Dashboard' %}\">{% trans 'Dashboard' %}</a>
                    </li>
                    {% endif %}
                    {% if settings.top_menu_order %}
                    <li class=\"order-button\">
                        <a href=\"#\" class=\"show-tip\" title=\"{% trans 'Order' %}\">{% trans 'Order services' %}</a>
                    </li>
                    {% endif %}
                    {% if settings.top_menu_profile %}
                    <li>
                        <a href=\"{{ 'client/me'|link }}\" class=\"show-tip\" title=\"{% trans 'Profile' %}\">{% trans 'Profile' %}</a>
                    </li>
                    {% endif %}

                    {% if settings.top_menu_signout %}
                    <li>
                        <a href=\"{{ 'client/logout' | link }}\" class=\"show-tip\" title=\"{% trans 'Sign out' %}\">{% trans 'Sign out' %}</a>
                    </li>
                    {% endif %}
                </ul>
            </nav>

            {% if settings.show_company_logo %}
                {% if company.logo_url %}
                    <h1>
                        <a href=\"{{'/'|link }}\">
                            <img src=\"{{company.logo_url}}\" alt=\"{{company.name}}\" title=\"{{company.name}}\" style=\"max-height: 75px\"/>
                        </a>
                        <p></p>
                    </h1>
                {% endif %}
            {% endif %}

            {% if settings.show_company_name %}
            <p>{{company.name}}</p>
            {% endif %}
        {% endif %}
    </header>
    <section class=\"container\" role=\"main\">
        <div class=\"navigation-block\">

            <div class=\"navbar\">
                <a class=\"btn btn-navbar btn-block btn-large\" data-toggle=\"collapse\" data-target=\".nav-collapse\"><span class=\"awe-user\"></span> {% trans 'User profile' %}</a>
            </div>

            <nav class=\"main-navigation nav-collapse collapse\" role=\"navigation\">
                {% include 'partial_menu.phtml' %}
            </nav>

            {% if settings.show_client_details %}
            <section class=\"user-profile\">
                <figure>
                    <img alt=\"{{profile.first_name}} {{profile.last_name}} gravatar\" src=\"{{ profile.email|gravatar(60) }}\">
                    <figcaption>
                        <strong><a href=\"{{ 'client/profile' | link}}\" class=\"\">{{profile.first_name}} {{profile.last_name}}</a></strong>
                        <em>{{ profile.company }}</em>
                        <ul>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"{{ 'client/profile' | link}}\">{% trans 'profile' %}</a></li>
                            <li><a class=\"btn btn-primary btn-flat\" href=\"{{ 'client/logout' | link}}\">{% trans 'sign out' %}</a></li>
                        </ul>
                    </figcaption>
                </figure>
            </section>
            {% endif %}

            {% if settings.sidebar_balance_enabled %}
            <section class=\"balance\">
                <h2>{% trans 'Account balance' %}</h2>
                <strong>{{ profile.balance | money(profile.currency) }}</strong>
            </section>
            {% endif %}

            {% if settings.sidebar_note_enabled %}
            <section class=\"side-note\">
                <div class=\"side-note-container\">
                    <h2>{{ settings.sidebar_note_title }}</h2>
                    <p>{{ settings.sidebar_note_content }}</p>
                </div>
                <div class=\"side-note-bottom\"></div>
            </section>
            {% endif %}
        </div>

        <div class=\"content-block\" role=\"main\">

            {% if settings.show_breadcrumb %}
            {% block breadcrumbs %}
            <ul class=\"breadcrumb\">
                <li><a href=\"{{ '/'|link }}\">{% trans 'Home' %}</a> <span class=\"divider\">/</span></li>
                {% block breadcrumb %}
                <li class=\"active\">{% trans 'Dashboard' %}</li>
                {% endblock %}
            </ul>
            {% endblock %}
            {% endif %}

            {% if settings.show_page_header %}
            {# block page_header %}
                <article class=\"page-header\">
                    <h1>{{ block('meta_title') }}</h1>
                    <p>{{ block('meta_description') }}</p>
                </article>
            {% endblock #}
            {% endif %}

            {% include \"partial_message.phtml\" %}

            {% block content_before %}{% endblock %}
            {% block content %}{% endblock %}
            {% block content_after %}{% endblock %}
        </div>
    </section>
    <div id=\"push\"></div>
</div>

{% if settings.footer_enabled %}
<footer id=\"footer\" class=\"container\">
    <p>&copy; {{ now|date('Y') }} {{ settings.footer_signature | default(company.signature) | raw }}</p>
    <ul>
        {% if settings.footer_link_1_enabled %}
        <li>
            {% if 'http://' in settings.footer_link_1_page or  'https://' in settings.footer_link_1_page%}
            <a href=\"{{ settings.footer_link_1_page }}\">{{ settings.footer_link_1_title }}</a>
            {% else %}
            <a href=\"{{ settings.footer_link_1_page | link }}\">{{ settings.footer_link_1_title }}</a>
            {% endif %}
        </li>
        {% endif %}
        {% if settings.footer_link_2_enabled %}
        <li>
            {% if 'http://' in settings.footer_link_2_page or  'https://' in settings.footer_link_2_page%}
            <a href=\"{{ settings.footer_link_2_page }}\">{{ settings.footer_link_2_title }}</a>
            {% else %}
            <a href=\"{{ settings.footer_link_2_page | link}}\">{{ settings.footer_link_2_title }}</a>
            {% endif %}
        </li>
        {% endif %}
        {% if settings.footer_link_3_enabled %}
        <li>
            {% if 'http://' in settings.footer_link_3_page or  'https://' in settings.footer_link_3_page%}
            <a href=\"{{ settings.footer_link_3_page }}\">{{ settings.footer_link_3_title }}</a>
            {% else %}
            <a href=\"{{ settings.footer_link_3_page | link }}\">{{ settings.footer_link_3_title }}</a>

            {%endif %}
        </li>
        {% endif %}
        {% if settings.footer_link_4_enabled %}
        <li>
            {% if 'http://' in settings.footer_link_4_page or  'https://' in settings.footer_link_4_page%}
            <a href=\"{{ settings.footer_link_4_page }}\">{{ settings.footer_link_4_title }}</a>
            {% else %}
            <a href=\"{{ settings.footer_link_4_page | link }}\">{{ settings.footer_link_4_title }}</a>
            {% endif %}
        </li>
        {% endif %}
        {% if settings.footer_link_5_enabled %}
        <li>
            {% if 'http://' in settings.footer_link_5_page or  'https://' in settings.footer_link_5_page%}
            <a href=\"{{ settings.footer_link_5_page }}\">{{ settings.footer_link_5_title }}</a>
            {% else %}
            <a href=\"{{ settings.footer_link_5_page | link }}\">{{ settings.footer_link_5_title }}</a>
            {% endif %}
        </li>
        {% endif %}

        {% if guest.extension_is_on({\"mod\":'branding'}) %}
        <li>
            <a href=\"https://github.com/boxbilling/boxbilling\" title=\"Billing Software\" target=\"_blank\">{% trans 'Powered by the BoxBilling Community' %}</a>
        </li>
        {% endif %}
    </ul>
    {% if settings.footer_to_top_enabled %}
    <a href=\"#top\" class=\"btn btn-primary btn-flat pull-right\"><span class=\"awe-arrow-up\"></span> {% trans 'Top' %}</a>
    {% endif %}
</footer>
{% endif %}

<div class=\"wait\" style=\"display:none\" onclick=\"\$(this).hide();\">
    <div class=\"popup_block\" style=\"position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: black; opacity: 0.5; -webkit-opacity: 0.5; -moz-opacity: 0.5; filter :  alpha(opacity=50); z-index: 2000\">
        <img src=\"{{ 'img/loader.gif' | asset_url}}\" style=\"position: absolute; display: block; margin-left: auto; margin-right: auto; position: relative; top: 50%; opacity: 1; filter: alpha(opacity=100); z-index: 1003\">
    </div>
</div>
<noscript>NOTE: Many features on BoxBilling require Javascript and cookies. You can enable both via your browser's preference settings.</noscript>

{% endif %}
{% endblock %}

{% if settings.top_menu_order or settings.side_menu_order %}
<script src=\"{{'orderbutton/js'| link({'options' : '1', 'width' : 600, 'theme_color' : 'green', 'background_color' : 'black', 'background_opacity' : 50, 'background_close' : 1, 'bind_selector' : '.order-button', 'border_radius' : 0, 'loader' : 8}) }}\" ></script>
{% endif %}

{% if settings.inject_javascript %}
    {{ settings.inject_javascript | raw}}
{% endif %}
{% include 'partial_pending_messages.phtml' ignore missing %}
</body>
</html>
", "layout_default.phtml", "/var/www/vhosts/eniruvana.com/httpdocs/billing/bb-themes/huraga/html/layout_default.phtml");
    }
}
