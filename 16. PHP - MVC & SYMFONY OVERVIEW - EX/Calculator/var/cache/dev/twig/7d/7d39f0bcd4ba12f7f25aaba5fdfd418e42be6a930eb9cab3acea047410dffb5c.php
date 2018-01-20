<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e4510383a43658c7056049cdc784d85eb5829ca341e2a1b56ccd8e8b21857e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e67a67447b65b05dd6ce27c603d5cb80c4d0f84ef668ceba3350b83c8993baa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67a67447b65b05dd6ce27c603d5cb80c4d0f84ef668ceba3350b83c8993baa4->enter($__internal_e67a67447b65b05dd6ce27c603d5cb80c4d0f84ef668ceba3350b83c8993baa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67a67447b65b05dd6ce27c603d5cb80c4d0f84ef668ceba3350b83c8993baa4->leave($__internal_e67a67447b65b05dd6ce27c603d5cb80c4d0f84ef668ceba3350b83c8993baa4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e29a821359d8014bf728b22abecb760dd1f8a04cb75fd1c2e2d5ffc312072946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29a821359d8014bf728b22abecb760dd1f8a04cb75fd1c2e2d5ffc312072946->enter($__internal_e29a821359d8014bf728b22abecb760dd1f8a04cb75fd1c2e2d5ffc312072946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e29a821359d8014bf728b22abecb760dd1f8a04cb75fd1c2e2d5ffc312072946->leave($__internal_e29a821359d8014bf728b22abecb760dd1f8a04cb75fd1c2e2d5ffc312072946_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_032e590315f9c0851a6696f2630c3e7c96cde935b5325c45a54c93ba3dd4bc10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_032e590315f9c0851a6696f2630c3e7c96cde935b5325c45a54c93ba3dd4bc10->enter($__internal_032e590315f9c0851a6696f2630c3e7c96cde935b5325c45a54c93ba3dd4bc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_032e590315f9c0851a6696f2630c3e7c96cde935b5325c45a54c93ba3dd4bc10->leave($__internal_032e590315f9c0851a6696f2630c3e7c96cde935b5325c45a54c93ba3dd4bc10_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_51008ccc18964a6bedaf3738d9e3465fb27ed0adc4ba5a3758ae4c78e8ab2f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51008ccc18964a6bedaf3738d9e3465fb27ed0adc4ba5a3758ae4c78e8ab2f55->enter($__internal_51008ccc18964a6bedaf3738d9e3465fb27ed0adc4ba5a3758ae4c78e8ab2f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_51008ccc18964a6bedaf3738d9e3465fb27ed0adc4ba5a3758ae4c78e8ab2f55->leave($__internal_51008ccc18964a6bedaf3738d9e3465fb27ed0adc4ba5a3758ae4c78e8ab2f55_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
