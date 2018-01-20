<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e4937f05056222e2cd1389659f16c535a6a47b21138187165703af61cfafa5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_018a793dd6dee4f76a85912abe447a4a6fb3e1f7de879ce6d674ccf60a9e428a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018a793dd6dee4f76a85912abe447a4a6fb3e1f7de879ce6d674ccf60a9e428a->enter($__internal_018a793dd6dee4f76a85912abe447a4a6fb3e1f7de879ce6d674ccf60a9e428a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_018a793dd6dee4f76a85912abe447a4a6fb3e1f7de879ce6d674ccf60a9e428a->leave($__internal_018a793dd6dee4f76a85912abe447a4a6fb3e1f7de879ce6d674ccf60a9e428a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88bf7ddbb18b5b8ba17be761d5e2a636a2125eadbb7fd3699aed7b09226331b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88bf7ddbb18b5b8ba17be761d5e2a636a2125eadbb7fd3699aed7b09226331b6->enter($__internal_88bf7ddbb18b5b8ba17be761d5e2a636a2125eadbb7fd3699aed7b09226331b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_88bf7ddbb18b5b8ba17be761d5e2a636a2125eadbb7fd3699aed7b09226331b6->leave($__internal_88bf7ddbb18b5b8ba17be761d5e2a636a2125eadbb7fd3699aed7b09226331b6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9e12af19648102b698827c61b882e26eb5a2c20487ae3cff5bf02a1d61704247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e12af19648102b698827c61b882e26eb5a2c20487ae3cff5bf02a1d61704247->enter($__internal_9e12af19648102b698827c61b882e26eb5a2c20487ae3cff5bf02a1d61704247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9e12af19648102b698827c61b882e26eb5a2c20487ae3cff5bf02a1d61704247->leave($__internal_9e12af19648102b698827c61b882e26eb5a2c20487ae3cff5bf02a1d61704247_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7e667742df0826b8408bcd7f0e81477ca4b57c4740bb4a2893d151feb9fc8b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e667742df0826b8408bcd7f0e81477ca4b57c4740bb4a2893d151feb9fc8b0c->enter($__internal_7e667742df0826b8408bcd7f0e81477ca4b57c4740bb4a2893d151feb9fc8b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7e667742df0826b8408bcd7f0e81477ca4b57c4740bb4a2893d151feb9fc8b0c->leave($__internal_7e667742df0826b8408bcd7f0e81477ca4b57c4740bb4a2893d151feb9fc8b0c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
