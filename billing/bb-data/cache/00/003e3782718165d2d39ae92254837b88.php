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

/* __string_template__ca35bde92626140c7f6c0b9245f23b4e */
class __TwigTemplate_a59d7c7f3ed500f0234813ff43313434 extends \Twig\Template
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
        echo "Bank Name: Bank of India
Branch: Kanchipuram
Payee Name: eniruvana
Account Number: 822020110000303
IFSC Code: BKID0008220
MICR Code: 600013033";
    }

    public function getTemplateName()
    {
        return "__string_template__ca35bde92626140c7f6c0b9245f23b4e";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Bank Name: Bank of India
Branch: Kanchipuram
Payee Name: eniruvana
Account Number: 822020110000303
IFSC Code: BKID0008220
MICR Code: 600013033", "__string_template__ca35bde92626140c7f6c0b9245f23b4e", "");
    }
}
