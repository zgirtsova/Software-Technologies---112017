<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4710d195a11886b5db90b89679960fcff53ce708bde8fbc676d95b6f1f3d4970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4710d195a11886b5db90b89679960fcff53ce708bde8fbc676d95b6f1f3d4970->enter($__internal_4710d195a11886b5db90b89679960fcff53ce708bde8fbc676d95b6f1f3d4970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9c8b85bcab565c717bd9346cd8b37352d2a24007a2ae4eff4d17d268f82bc180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8b85bcab565c717bd9346cd8b37352d2a24007a2ae4eff4d17d268f82bc180->enter($__internal_9c8b85bcab565c717bd9346cd8b37352d2a24007a2ae4eff4d17d268f82bc180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_4710d195a11886b5db90b89679960fcff53ce708bde8fbc676d95b6f1f3d4970->leave($__internal_4710d195a11886b5db90b89679960fcff53ce708bde8fbc676d95b6f1f3d4970_prof);

        
        $__internal_9c8b85bcab565c717bd9346cd8b37352d2a24007a2ae4eff4d17d268f82bc180->leave($__internal_9c8b85bcab565c717bd9346cd8b37352d2a24007a2ae4eff4d17d268f82bc180_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad06bd74fc48a4ef3c38f76de638324587c6668df08ddce95bd385eaae816969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad06bd74fc48a4ef3c38f76de638324587c6668df08ddce95bd385eaae816969->enter($__internal_ad06bd74fc48a4ef3c38f76de638324587c6668df08ddce95bd385eaae816969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2fedcadd75df751dc5189091a8605931a5da5626af34c8b539252d4360fe1aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fedcadd75df751dc5189091a8605931a5da5626af34c8b539252d4360fe1aa0->enter($__internal_2fedcadd75df751dc5189091a8605931a5da5626af34c8b539252d4360fe1aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_2fedcadd75df751dc5189091a8605931a5da5626af34c8b539252d4360fe1aa0->leave($__internal_2fedcadd75df751dc5189091a8605931a5da5626af34c8b539252d4360fe1aa0_prof);

        
        $__internal_ad06bd74fc48a4ef3c38f76de638324587c6668df08ddce95bd385eaae816969->leave($__internal_ad06bd74fc48a4ef3c38f76de638324587c6668df08ddce95bd385eaae816969_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e54f09fe2cd0dd025f4bae1415dedc494734b8a0af74bcc0982a69d9435a5a45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54f09fe2cd0dd025f4bae1415dedc494734b8a0af74bcc0982a69d9435a5a45->enter($__internal_e54f09fe2cd0dd025f4bae1415dedc494734b8a0af74bcc0982a69d9435a5a45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6d1f79b04a4481ae0026f6b807d3dcb7039d12af52b7518c456193099393abc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d1f79b04a4481ae0026f6b807d3dcb7039d12af52b7518c456193099393abc->enter($__internal_e6d1f79b04a4481ae0026f6b807d3dcb7039d12af52b7518c456193099393abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_e6d1f79b04a4481ae0026f6b807d3dcb7039d12af52b7518c456193099393abc->leave($__internal_e6d1f79b04a4481ae0026f6b807d3dcb7039d12af52b7518c456193099393abc_prof);

        
        $__internal_e54f09fe2cd0dd025f4bae1415dedc494734b8a0af74bcc0982a69d9435a5a45->leave($__internal_e54f09fe2cd0dd025f4bae1415dedc494734b8a0af74bcc0982a69d9435a5a45_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_ca91573ec40d15da3c69e3aa604e00c7ace63497b5ea25600db21ca4468d0897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca91573ec40d15da3c69e3aa604e00c7ace63497b5ea25600db21ca4468d0897->enter($__internal_ca91573ec40d15da3c69e3aa604e00c7ace63497b5ea25600db21ca4468d0897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_e6bbc408c4d97faced2e6b7d3ae1c91316fc7adba566fd359fbba77820998e3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6bbc408c4d97faced2e6b7d3ae1c91316fc7adba566fd359fbba77820998e3f->enter($__internal_e6bbc408c4d97faced2e6b7d3ae1c91316fc7adba566fd359fbba77820998e3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_e6bbc408c4d97faced2e6b7d3ae1c91316fc7adba566fd359fbba77820998e3f->leave($__internal_e6bbc408c4d97faced2e6b7d3ae1c91316fc7adba566fd359fbba77820998e3f_prof);

        
        $__internal_ca91573ec40d15da3c69e3aa604e00c7ace63497b5ea25600db21ca4468d0897->leave($__internal_ca91573ec40d15da3c69e3aa604e00c7ace63497b5ea25600db21ca4468d0897_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6a87b50f36bf04499ac772d10f9fb0e16e67c2b5b76c22a72938674cb6733a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a87b50f36bf04499ac772d10f9fb0e16e67c2b5b76c22a72938674cb6733a6->enter($__internal_d6a87b50f36bf04499ac772d10f9fb0e16e67c2b5b76c22a72938674cb6733a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_169c409e24c62be5a92b5004fff9db7fc4ff7f1a889e8eb2d0883a2bf73c30c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_169c409e24c62be5a92b5004fff9db7fc4ff7f1a889e8eb2d0883a2bf73c30c9->enter($__internal_169c409e24c62be5a92b5004fff9db7fc4ff7f1a889e8eb2d0883a2bf73c30c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_169c409e24c62be5a92b5004fff9db7fc4ff7f1a889e8eb2d0883a2bf73c30c9->leave($__internal_169c409e24c62be5a92b5004fff9db7fc4ff7f1a889e8eb2d0883a2bf73c30c9_prof);

        
        $__internal_d6a87b50f36bf04499ac772d10f9fb0e16e67c2b5b76c22a72938674cb6733a6->leave($__internal_d6a87b50f36bf04499ac772d10f9fb0e16e67c2b5b76c22a72938674cb6733a6_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_fb04015a33e0fc7bd93e67450a3ee3c3b405ced8f8c66cf9761beba8e40086a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb04015a33e0fc7bd93e67450a3ee3c3b405ced8f8c66cf9761beba8e40086a0->enter($__internal_fb04015a33e0fc7bd93e67450a3ee3c3b405ced8f8c66cf9761beba8e40086a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8fb7e8664db6387254a5778e81bb0919f18dae1df6b5a7aedce886e745c28337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb7e8664db6387254a5778e81bb0919f18dae1df6b5a7aedce886e745c28337->enter($__internal_8fb7e8664db6387254a5778e81bb0919f18dae1df6b5a7aedce886e745c28337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_8fb7e8664db6387254a5778e81bb0919f18dae1df6b5a7aedce886e745c28337->leave($__internal_8fb7e8664db6387254a5778e81bb0919f18dae1df6b5a7aedce886e745c28337_prof);

        
        $__internal_fb04015a33e0fc7bd93e67450a3ee3c3b405ced8f8c66cf9761beba8e40086a0->leave($__internal_fb04015a33e0fc7bd93e67450a3ee3c3b405ced8f8c66cf9761beba8e40086a0_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
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
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
