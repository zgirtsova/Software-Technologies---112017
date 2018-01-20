<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
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
        $__internal_849148b85dce650e61ff27d82552577a983874a301ca618d968b94e6c56ad931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849148b85dce650e61ff27d82552577a983874a301ca618d968b94e6c56ad931->enter($__internal_849148b85dce650e61ff27d82552577a983874a301ca618d968b94e6c56ad931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_03b91d7961149e235ecfdb09b4c0eabdce530a5f00e156219d79d32d91764dc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b91d7961149e235ecfdb09b4c0eabdce530a5f00e156219d79d32d91764dc6->enter($__internal_03b91d7961149e235ecfdb09b4c0eabdce530a5f00e156219d79d32d91764dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_849148b85dce650e61ff27d82552577a983874a301ca618d968b94e6c56ad931->leave($__internal_849148b85dce650e61ff27d82552577a983874a301ca618d968b94e6c56ad931_prof);

        
        $__internal_03b91d7961149e235ecfdb09b4c0eabdce530a5f00e156219d79d32d91764dc6->leave($__internal_03b91d7961149e235ecfdb09b4c0eabdce530a5f00e156219d79d32d91764dc6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f16f61dc736917f46610f8e6efd92870065154b7f4afb4ae4522092536f5b10a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16f61dc736917f46610f8e6efd92870065154b7f4afb4ae4522092536f5b10a->enter($__internal_f16f61dc736917f46610f8e6efd92870065154b7f4afb4ae4522092536f5b10a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fac654937122e91e78636bd46e84674a8c208a21bb4bf09715bb486c40ba6c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac654937122e91e78636bd46e84674a8c208a21bb4bf09715bb486c40ba6c16->enter($__internal_fac654937122e91e78636bd46e84674a8c208a21bb4bf09715bb486c40ba6c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fac654937122e91e78636bd46e84674a8c208a21bb4bf09715bb486c40ba6c16->leave($__internal_fac654937122e91e78636bd46e84674a8c208a21bb4bf09715bb486c40ba6c16_prof);

        
        $__internal_f16f61dc736917f46610f8e6efd92870065154b7f4afb4ae4522092536f5b10a->leave($__internal_f16f61dc736917f46610f8e6efd92870065154b7f4afb4ae4522092536f5b10a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bb612928df64ab1163a58e34f1666dbc0691d0a1a18fe695333d9abd183218f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb612928df64ab1163a58e34f1666dbc0691d0a1a18fe695333d9abd183218f4->enter($__internal_bb612928df64ab1163a58e34f1666dbc0691d0a1a18fe695333d9abd183218f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a0f10605679f3eef13865eac5a99fd7011a2b2482f1f0a9717afef536b660e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0f10605679f3eef13865eac5a99fd7011a2b2482f1f0a9717afef536b660e49->enter($__internal_a0f10605679f3eef13865eac5a99fd7011a2b2482f1f0a9717afef536b660e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a0f10605679f3eef13865eac5a99fd7011a2b2482f1f0a9717afef536b660e49->leave($__internal_a0f10605679f3eef13865eac5a99fd7011a2b2482f1f0a9717afef536b660e49_prof);

        
        $__internal_bb612928df64ab1163a58e34f1666dbc0691d0a1a18fe695333d9abd183218f4->leave($__internal_bb612928df64ab1163a58e34f1666dbc0691d0a1a18fe695333d9abd183218f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a74431f05a15c3fcefd964ab86c59c2b5f3fba8750174c6a4c4fc6e17d1eafa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74431f05a15c3fcefd964ab86c59c2b5f3fba8750174c6a4c4fc6e17d1eafa8->enter($__internal_a74431f05a15c3fcefd964ab86c59c2b5f3fba8750174c6a4c4fc6e17d1eafa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3ce3aace192ea0c9d5b2bb6f6a8bc733ee41159d6662644925bb6042dc871ab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce3aace192ea0c9d5b2bb6f6a8bc733ee41159d6662644925bb6042dc871ab5->enter($__internal_3ce3aace192ea0c9d5b2bb6f6a8bc733ee41159d6662644925bb6042dc871ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ce3aace192ea0c9d5b2bb6f6a8bc733ee41159d6662644925bb6042dc871ab5->leave($__internal_3ce3aace192ea0c9d5b2bb6f6a8bc733ee41159d6662644925bb6042dc871ab5_prof);

        
        $__internal_a74431f05a15c3fcefd964ab86c59c2b5f3fba8750174c6a4c4fc6e17d1eafa8->leave($__internal_a74431f05a15c3fcefd964ab86c59c2b5f3fba8750174c6a4c4fc6e17d1eafa8_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
", "@WebProfiler/Collector/router.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
