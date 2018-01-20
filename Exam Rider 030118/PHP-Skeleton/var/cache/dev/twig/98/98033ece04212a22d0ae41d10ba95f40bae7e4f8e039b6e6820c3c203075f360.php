<?php

/* :project:edit.html.twig */
class __TwigTemplate_472af7ecc306755c4e2c7e7cfa39a6fdd2712b7425ef7a3a903b98a8685897c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:edit.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_239ffcf578c2ace7a3976da409c4b5c7ae8354df22c5cf7d275639b761f968b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239ffcf578c2ace7a3976da409c4b5c7ae8354df22c5cf7d275639b761f968b7->enter($__internal_239ffcf578c2ace7a3976da409c4b5c7ae8354df22c5cf7d275639b761f968b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $__internal_9092e9e864935dc16c9e93dc5be0ebc845b33debeb919ca3917e27690546c1c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9092e9e864935dc16c9e93dc5be0ebc845b33debeb919ca3917e27690546c1c4->enter($__internal_9092e9e864935dc16c9e93dc5be0ebc845b33debeb919ca3917e27690546c1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_239ffcf578c2ace7a3976da409c4b5c7ae8354df22c5cf7d275639b761f968b7->leave($__internal_239ffcf578c2ace7a3976da409c4b5c7ae8354df22c5cf7d275639b761f968b7_prof);

        
        $__internal_9092e9e864935dc16c9e93dc5be0ebc845b33debeb919ca3917e27690546c1c4->leave($__internal_9092e9e864935dc16c9e93dc5be0ebc845b33debeb919ca3917e27690546c1c4_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_885f58d23c068d59a0990dd7522c9eb4067204b1488b48f2db82404024807cb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_885f58d23c068d59a0990dd7522c9eb4067204b1488b48f2db82404024807cb6->enter($__internal_885f58d23c068d59a0990dd7522c9eb4067204b1488b48f2db82404024807cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_269de971af34870424a3f57299e344f49d9a3374f36549cb03007ed17922d0e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269de971af34870424a3f57299e344f49d9a3374f36549cb03007ed17922d0e7->enter($__internal_269de971af34870424a3f57299e344f49d9a3374f36549cb03007ed17922d0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_269de971af34870424a3f57299e344f49d9a3374f36549cb03007ed17922d0e7->leave($__internal_269de971af34870424a3f57299e344f49d9a3374f36549cb03007ed17922d0e7_prof);

        
        $__internal_885f58d23c068d59a0990dd7522c9eb4067204b1488b48f2db82404024807cb6->leave($__internal_885f58d23c068d59a0990dd7522c9eb4067204b1488b48f2db82404024807cb6_prof);

    }

    public function getTemplateName()
    {
        return ":project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", ":project:edit.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\app/Resources\\views/project/edit.html.twig");
    }
}
