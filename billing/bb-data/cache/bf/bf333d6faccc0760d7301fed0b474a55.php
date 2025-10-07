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

/* __string_template__c002087eac9bdc0877f8bb25047c4b29 */
class __TwigTemplate_7258a2c44b874f620705d4a0ff433082 extends \Twig\Template
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
        echo " <p>This is an example of markdown syntax in email template</p>

<p><em>Italic text</em><br />
<strong>Bolded text</strong></p>

<p>Lists:</p>

<ul>
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ul>

<hr />

<p>Link to login form: <https://eniruvana.com/billing/login></p>

<p>Company signature: eniruvana</p>

<p>You can event use IF statements in email templates: Of course 1 is not equal 2</p>

<hr />

<p>Accessing Admin API can get information about your BoxBilling, for example how many clients you have:</p>

<p><strong>Total clients:</strong> 0</p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__c002087eac9bdc0877f8bb25047c4b29";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <p>This is an example of markdown syntax in email template</p>

<p><em>Italic text</em><br />
<strong>Bolded text</strong></p>

<p>Lists:</p>

<ul>
<li>Red</li>
<li>Green</li>
<li>Blue</li>
</ul>

<hr />

<p>Link to login form: <https://eniruvana.com/billing/login></p>

<p>Company signature: eniruvana</p>

<p>You can event use IF statements in email templates: Of course 1 is not equal 2</p>

<hr />

<p>Accessing Admin API can get information about your BoxBilling, for example how many clients you have:</p>

<p><strong>Total clients:</strong> 0</p>
", "__string_template__c002087eac9bdc0877f8bb25047c4b29", "");
    }
}
