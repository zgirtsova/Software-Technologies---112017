<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
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
        $__internal_2cae4b3bab49c1d9a0762bf82b714d5b67f97c2bff304c4a403fabe2bf38a2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cae4b3bab49c1d9a0762bf82b714d5b67f97c2bff304c4a403fabe2bf38a2d0->enter($__internal_2cae4b3bab49c1d9a0762bf82b714d5b67f97c2bff304c4a403fabe2bf38a2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_151106d014cd08e6619547a41993c8bb7561dc195fc095dad14072fae430df8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151106d014cd08e6619547a41993c8bb7561dc195fc095dad14072fae430df8f->enter($__internal_151106d014cd08e6619547a41993c8bb7561dc195fc095dad14072fae430df8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cae4b3bab49c1d9a0762bf82b714d5b67f97c2bff304c4a403fabe2bf38a2d0->leave($__internal_2cae4b3bab49c1d9a0762bf82b714d5b67f97c2bff304c4a403fabe2bf38a2d0_prof);

        
        $__internal_151106d014cd08e6619547a41993c8bb7561dc195fc095dad14072fae430df8f->leave($__internal_151106d014cd08e6619547a41993c8bb7561dc195fc095dad14072fae430df8f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4ca747fd43b9e0366e223fa93246c72e4ef64b40161c60933666e83732f3ea04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ca747fd43b9e0366e223fa93246c72e4ef64b40161c60933666e83732f3ea04->enter($__internal_4ca747fd43b9e0366e223fa93246c72e4ef64b40161c60933666e83732f3ea04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf427cdd8199caa789e86ff3cbf74ab1f40925de0c758d59336fb844b86e95eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf427cdd8199caa789e86ff3cbf74ab1f40925de0c758d59336fb844b86e95eb->enter($__internal_bf427cdd8199caa789e86ff3cbf74ab1f40925de0c758d59336fb844b86e95eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bf427cdd8199caa789e86ff3cbf74ab1f40925de0c758d59336fb844b86e95eb->leave($__internal_bf427cdd8199caa789e86ff3cbf74ab1f40925de0c758d59336fb844b86e95eb_prof);

        
        $__internal_4ca747fd43b9e0366e223fa93246c72e4ef64b40161c60933666e83732f3ea04->leave($__internal_4ca747fd43b9e0366e223fa93246c72e4ef64b40161c60933666e83732f3ea04_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2009a4666cc61ac402643343a9664b0447f4a8ede8ee381f90736af9ad31ca9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2009a4666cc61ac402643343a9664b0447f4a8ede8ee381f90736af9ad31ca9f->enter($__internal_2009a4666cc61ac402643343a9664b0447f4a8ede8ee381f90736af9ad31ca9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_29ecd42e9a6284ff12ce4519c9d621b4fbc41d90e2c74f6acad573fa2d13e07a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ecd42e9a6284ff12ce4519c9d621b4fbc41d90e2c74f6acad573fa2d13e07a->enter($__internal_29ecd42e9a6284ff12ce4519c9d621b4fbc41d90e2c74f6acad573fa2d13e07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_29ecd42e9a6284ff12ce4519c9d621b4fbc41d90e2c74f6acad573fa2d13e07a->leave($__internal_29ecd42e9a6284ff12ce4519c9d621b4fbc41d90e2c74f6acad573fa2d13e07a_prof);

        
        $__internal_2009a4666cc61ac402643343a9664b0447f4a8ede8ee381f90736af9ad31ca9f->leave($__internal_2009a4666cc61ac402643343a9664b0447f4a8ede8ee381f90736af9ad31ca9f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eae9db9edbc409250c6c42f1ada3c67e7fabafc94a2587a0be89beb054cdeff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae9db9edbc409250c6c42f1ada3c67e7fabafc94a2587a0be89beb054cdeff9->enter($__internal_eae9db9edbc409250c6c42f1ada3c67e7fabafc94a2587a0be89beb054cdeff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f9ccb6bb28e60b2edb0923fe9ef56f6464ffcb83b80b74111bfec3cc5de8ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f9ccb6bb28e60b2edb0923fe9ef56f6464ffcb83b80b74111bfec3cc5de8ea3->enter($__internal_6f9ccb6bb28e60b2edb0923fe9ef56f6464ffcb83b80b74111bfec3cc5de8ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6f9ccb6bb28e60b2edb0923fe9ef56f6464ffcb83b80b74111bfec3cc5de8ea3->leave($__internal_6f9ccb6bb28e60b2edb0923fe9ef56f6464ffcb83b80b74111bfec3cc5de8ea3_prof);

        
        $__internal_eae9db9edbc409250c6c42f1ada3c67e7fabafc94a2587a0be89beb054cdeff9->leave($__internal_eae9db9edbc409250c6c42f1ada3c67e7fabafc94a2587a0be89beb054cdeff9_prof);

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
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
