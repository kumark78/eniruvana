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

/* __string_template__d255d44f67edffb3d71b2a11dc325756 */
class __TwigTemplate_eb8e5ac1f4f30580f2c848536706b201 extends \Twig\Template
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
        echo "After making payment, kindly send us the screenshot of the payment.";
    }

    public function getTemplateName()
    {
        return "__string_template__d255d44f67edffb3d71b2a11dc325756";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("After making payment, kindly send us the screenshot of the payment.", "__string_template__d255d44f67edffb3d71b2a11dc325756", "");
    }
}
