<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0186635689967dffee43f4891857e60ecf0310cd6ff466a4a9821f3f6ad5473c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c106ba267fa947f071e43d75b954a4dd4ba2624a836d91994d3bfa37cbd5a19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c106ba267fa947f071e43d75b954a4dd4ba2624a836d91994d3bfa37cbd5a19d->enter($__internal_c106ba267fa947f071e43d75b954a4dd4ba2624a836d91994d3bfa37cbd5a19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c106ba267fa947f071e43d75b954a4dd4ba2624a836d91994d3bfa37cbd5a19d->leave($__internal_c106ba267fa947f071e43d75b954a4dd4ba2624a836d91994d3bfa37cbd5a19d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e0fdd3fd021807d5abca709ca6a16ded7b3957e12e119a4ec16baa0cd35ed6bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fdd3fd021807d5abca709ca6a16ded7b3957e12e119a4ec16baa0cd35ed6bd->enter($__internal_e0fdd3fd021807d5abca709ca6a16ded7b3957e12e119a4ec16baa0cd35ed6bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e0fdd3fd021807d5abca709ca6a16ded7b3957e12e119a4ec16baa0cd35ed6bd->leave($__internal_e0fdd3fd021807d5abca709ca6a16ded7b3957e12e119a4ec16baa0cd35ed6bd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc06cb0ec6f7380af64b7f022ad5757b46cdb5e91a728aeeaac98eb90493e99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc06cb0ec6f7380af64b7f022ad5757b46cdb5e91a728aeeaac98eb90493e99f->enter($__internal_cc06cb0ec6f7380af64b7f022ad5757b46cdb5e91a728aeeaac98eb90493e99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc06cb0ec6f7380af64b7f022ad5757b46cdb5e91a728aeeaac98eb90493e99f->leave($__internal_cc06cb0ec6f7380af64b7f022ad5757b46cdb5e91a728aeeaac98eb90493e99f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_85112cb2ff4aea61874818a2804b07de29c7236e56f25ad54e628f5ea5586470 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85112cb2ff4aea61874818a2804b07de29c7236e56f25ad54e628f5ea5586470->enter($__internal_85112cb2ff4aea61874818a2804b07de29c7236e56f25ad54e628f5ea5586470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_85112cb2ff4aea61874818a2804b07de29c7236e56f25ad54e628f5ea5586470->leave($__internal_85112cb2ff4aea61874818a2804b07de29c7236e56f25ad54e628f5ea5586470_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
