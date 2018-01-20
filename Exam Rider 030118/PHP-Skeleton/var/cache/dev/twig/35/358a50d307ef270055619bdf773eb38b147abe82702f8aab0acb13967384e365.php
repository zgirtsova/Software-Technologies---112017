<?php

/* :project:create.html.twig */
class __TwigTemplate_554ce2a565e3f40b5aec014ba1dafbebaf1d412fdc82eed325a73c6bf41a5acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
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
        $__internal_7b8645a32e3f181801a6f4748179b9fe6c01cf314e8b8d393274e3aed1a72100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b8645a32e3f181801a6f4748179b9fe6c01cf314e8b8d393274e3aed1a72100->enter($__internal_7b8645a32e3f181801a6f4748179b9fe6c01cf314e8b8d393274e3aed1a72100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_2927ef97ecbc65460b2ee0da3c265d3a4f27c5840a723cdff617c2df6cf1f5f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2927ef97ecbc65460b2ee0da3c265d3a4f27c5840a723cdff617c2df6cf1f5f5->enter($__internal_2927ef97ecbc65460b2ee0da3c265d3a4f27c5840a723cdff617c2df6cf1f5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b8645a32e3f181801a6f4748179b9fe6c01cf314e8b8d393274e3aed1a72100->leave($__internal_7b8645a32e3f181801a6f4748179b9fe6c01cf314e8b8d393274e3aed1a72100_prof);

        
        $__internal_2927ef97ecbc65460b2ee0da3c265d3a4f27c5840a723cdff617c2df6cf1f5f5->leave($__internal_2927ef97ecbc65460b2ee0da3c265d3a4f27c5840a723cdff617c2df6cf1f5f5_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_b238be5ef06e1c3d23443c1c4684f2a81ada22768866e79294dea214705e9f06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b238be5ef06e1c3d23443c1c4684f2a81ada22768866e79294dea214705e9f06->enter($__internal_b238be5ef06e1c3d23443c1c4684f2a81ada22768866e79294dea214705e9f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_464eaa34f7837310fe66635727d245c328b4dcd6c435d51938bf5d214fefae5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464eaa34f7837310fe66635727d245c328b4dcd6c435d51938bf5d214fefae5a->enter($__internal_464eaa34f7837310fe66635727d245c328b4dcd6c435d51938bf5d214fefae5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_464eaa34f7837310fe66635727d245c328b4dcd6c435d51938bf5d214fefae5a->leave($__internal_464eaa34f7837310fe66635727d245c328b4dcd6c435d51938bf5d214fefae5a_prof);

        
        $__internal_b238be5ef06e1c3d23443c1c4684f2a81ada22768866e79294dea214705e9f06->leave($__internal_b238be5ef06e1c3d23443c1c4684f2a81ada22768866e79294dea214705e9f06_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:create.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\app/Resources\\views/project/create.html.twig");
    }
}
