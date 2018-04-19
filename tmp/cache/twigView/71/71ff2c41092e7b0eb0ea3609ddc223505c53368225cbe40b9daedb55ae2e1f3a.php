<?php

/* G:\github\ibimages\vendor\cakephp\bake\src\Template\Bake\tests\test_case.twig */
class __TwigTemplate_a8eec48c62db52ba05784a57ae620c854bf14027645c84b65378609ee0a30510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->enter($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "G:\\github\\ibimages\\vendor\\cakephp\\bake\\src\\Template\\Bake\\tests\\test_case.twig"));

        // line 18
        $context["isController"] = (twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)) == "controller");
        // line 19
        $context["isShell"] = (twig_lower_filter($this->env, (isset($context["type"]) ? $context["type"] : null)) == "shell");
        // line 20
        if ((isset($context["isController"]) ? $context["isController"] : null)) {
            // line 21
            $context["superClassName"] = "IntegrationTestCase";
        } elseif (        // line 22
(isset($context["isShell"]) ? $context["isShell"] : null)) {
            // line 23
            $context["superClassName"] = "ConsoleIntegrationTestCase";
        } else {
            // line 25
            $context["superClassName"] = "TestCase";
        }
        // line 27
        $context["uses"] = twig_array_merge((isset($context["uses"]) ? $context["uses"] : null), array(0 => ("Cake\\TestSuite\\" . (isset($context["superClassName"]) ? $context["superClassName"] : null))));
        // line 29
        $context["uses"] = twig_sort_filter((isset($context["uses"]) ? $context["uses"] : null));
        // line 30
        echo "<?php
namespace ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["baseNamespace"]) ? $context["baseNamespace"] : null), "html", null, true);
        echo "\\Test\\TestCase\\";
        echo twig_escape_filter($this->env, (isset($context["subNamespace"]) ? $context["subNamespace"] : null), "html", null, true);
        echo ";

";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["uses"]) ? $context["uses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["dependency"]) {
            // line 34
            echo "use ";
            echo twig_escape_filter($this->env, $context["dependency"], "html", null, true);
            echo ";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependency'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
/**
 * ";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["fullClassName"]) ? $context["fullClassName"] : null), "html", null, true);
        echo " Test Case
 */
class ";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : null), "html", null, true);
        echo "Test extends ";
        echo twig_escape_filter($this->env, (isset($context["superClassName"]) ? $context["superClassName"] : null), "html", null, true);
        echo "
{
";
        // line 42
        if ((isset($context["properties"]) ? $context["properties"] : null)) {
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) ? $context["properties"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["propertyInfo"]) {
                // line 44
                echo "
    /**
     * ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "description", array()), "html", null, true);
                echo "
     *
     * @var ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "type", array()), "html", null, true);
                echo "
     */
    public \$";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "name", array()), "html", null, true);
                if (($this->getAttribute($context["propertyInfo"], "value", array(), "any", true, true) && $this->getAttribute($context["propertyInfo"], "value", array()))) {
                    echo " = ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propertyInfo"], "value", array()), "html", null, true);
                }
                echo ";
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propertyInfo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 54
        if ((isset($context["fixtures"]) ? $context["fixtures"] : null)) {
            // line 55
            echo "
    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [";
            // line 61
            echo $this->getAttribute((isset($context["Bake"]) ? $context["Bake"] : null), "stringifyList", array(0 => $this->env->getExtension('Jasny\Twig\ArrayExtension')->values((isset($context["fixtures"]) ? $context["fixtures"] : null))), "method");
            echo "];
";
        }
        // line 64
        if ((isset($context["construction"]) ? $context["construction"] : null)) {
            // line 65
            echo "
    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
";
            // line 74
            if ((isset($context["preConstruct"]) ? $context["preConstruct"] : null)) {
                // line 75
                echo "        ";
                echo (isset($context["preConstruct"]) ? $context["preConstruct"] : null);
                echo "
";
            }
            // line 77
            echo "        \$this->";
            echo (((isset($context["subject"]) ? $context["subject"] : null) . " = ") . (isset($context["construction"]) ? $context["construction"] : null));
            echo "
";
            // line 78
            if ((isset($context["postConstruct"]) ? $context["postConstruct"] : null)) {
                // line 79
                echo "        ";
                echo (isset($context["postConstruct"]) ? $context["postConstruct"] : null);
                echo "
";
            }
            // line 81
            echo "    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["subject"]) ? $context["subject"] : null), "html", null, true);
            echo ");

        parent::tearDown();
    }
";
        }
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["methods"]) ? $context["methods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
            // line 97
            echo "
    /**
     * Test ";
            // line 99
            echo twig_escape_filter($this->env, $context["method"], "html", null, true);
            echo " method
     *
     * @return void
     */
    public function test";
            // line 103
            echo twig_escape_filter($this->env, Cake\Utility\Inflector::camelize($context["method"]), "html", null, true);
            echo "()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        if ( !(isset($context["methods"]) ? $context["methods"] : null)) {
            // line 110
            echo "
    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
";
        }
        // line 121
        echo "}
";
        
        $__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa->leave($__internal_770edd655cdeb606afc443e4edb1f19b4248a91788cb82e88bf8b9495a7c5cfa_prof);

    }

    public function getTemplateName()
    {
        return "G:\\github\\ibimages\\vendor\\cakephp\\bake\\src\\Template\\Bake\\tests\\test_case.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 121,  210 => 110,  208 => 109,  197 => 103,  190 => 99,  186 => 97,  182 => 96,  174 => 90,  163 => 81,  157 => 79,  155 => 78,  150 => 77,  144 => 75,  142 => 74,  131 => 65,  129 => 64,  124 => 61,  116 => 55,  114 => 54,  101 => 50,  96 => 48,  91 => 46,  87 => 44,  83 => 43,  81 => 42,  74 => 40,  69 => 38,  65 => 36,  56 => 34,  52 => 33,  45 => 31,  42 => 30,  40 => 29,  38 => 27,  35 => 25,  32 => 23,  30 => 22,  28 => 21,  26 => 20,  24 => 19,  22 => 18,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * Test Case bake template
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set isController = type|lower == 'controller' %}
{% set isShell = type|lower == 'shell' %}
{% if isController %}
    {%- set superClassName = 'IntegrationTestCase' %}
{% elseif isShell %}
    {%- set superClassName = 'ConsoleIntegrationTestCase' %}
{% else %}
    {%- set superClassName = 'TestCase' %}
{% endif %}
{%- set uses = uses|merge([\"Cake\\\\TestSuite\\\\#{superClassName}\"]) %}

{%- set uses = uses|sort %}
<?php
namespace {{ baseNamespace }}\\Test\\TestCase\\{{ subNamespace }};

{% for dependency in uses %}
use {{ dependency }};
{% endfor %}

/**
 * {{ fullClassName }} Test Case
 */
class {{ className }}Test extends {{ superClassName }}
{
{% if properties %}
{% for propertyInfo in properties %}

    /**
     * {{ propertyInfo.description }}
     *
     * @var {{ propertyInfo.type }}
     */
    public \${{ propertyInfo.name }}{% if propertyInfo.value is defined and propertyInfo.value %} = {{ propertyInfo.value }}{% endif %};
{% endfor %}
{% endif %}

{%- if fixtures %}

    /**
     * Fixtures
     *
     * @var array
     */
    public \$fixtures = [{{ Bake.stringifyList(fixtures|values)|raw }}];
{% endif %}

{%- if construction %}

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
{% if preConstruct %}
        {{ preConstruct|raw }}
{% endif %}
        \$this->{{ (subject ~ ' = ' ~ construction)|raw }}
{% if postConstruct %}
        {{ postConstruct|raw }}
{% endif %}
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset(\$this->{{ subject }});

        parent::tearDown();
    }
{% endif %}

{%- for method in methods %}

    /**
     * Test {{ method }} method
     *
     * @return void
     */
    public function test{{ method|camelize }}()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endfor %}

{%- if not methods %}

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        \$this->markTestIncomplete('Not implemented yet.');
    }
{% endif %}
}
", "G:\\github\\ibimages\\vendor\\cakephp\\bake\\src\\Template\\Bake\\tests\\test_case.twig", "G:\\github\\ibimages\\vendor\\cakephp\\bake\\src\\Template\\Bake\\tests\\test_case.twig");
    }
}
