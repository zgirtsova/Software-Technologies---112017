<?php

/* base.html.twig */
class __TwigTemplate_e9d42f1de3ddc6f51a6679cb0f2410f39454249b361b69c2f8c1ec1e816ff861 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78f27b962545353c0a098700bf8ed9b6b9b1097af0ba6193470508c5a0af50bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f27b962545353c0a098700bf8ed9b6b9b1097af0ba6193470508c5a0af50bb->enter($__internal_78f27b962545353c0a098700bf8ed9b6b9b1097af0ba6193470508c5a0af50bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
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
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_78f27b962545353c0a098700bf8ed9b6b9b1097af0ba6193470508c5a0af50bb->leave($__internal_78f27b962545353c0a098700bf8ed9b6b9b1097af0ba6193470508c5a0af50bb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_1732607df625c16de96bd58318da110a0593962dc63bbe3458651cb34794babe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1732607df625c16de96bd58318da110a0593962dc63bbe3458651cb34794babe->enter($__internal_1732607df625c16de96bd58318da110a0593962dc63bbe3458651cb34794babe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_1732607df625c16de96bd58318da110a0593962dc63bbe3458651cb34794babe->leave($__internal_1732607df625c16de96bd58318da110a0593962dc63bbe3458651cb34794babe_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_91f8b0e83ec8be1d2f2fc721005a024aa703bd70bc2a5779126358a0ab4a6259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91f8b0e83ec8be1d2f2fc721005a024aa703bd70bc2a5779126358a0ab4a6259->enter($__internal_91f8b0e83ec8be1d2f2fc721005a024aa703bd70bc2a5779126358a0ab4a6259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_91f8b0e83ec8be1d2f2fc721005a024aa703bd70bc2a5779126358a0ab4a6259->leave($__internal_91f8b0e83ec8be1d2f2fc721005a024aa703bd70bc2a5779126358a0ab4a6259_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_90adf2f6206bdb6420c29bdab0cc6387837af46ebcada1d67afa6956c046d9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90adf2f6206bdb6420c29bdab0cc6387837af46ebcada1d67afa6956c046d9d6->enter($__internal_90adf2f6206bdb6420c29bdab0cc6387837af46ebcada1d67afa6956c046d9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_90adf2f6206bdb6420c29bdab0cc6387837af46ebcada1d67afa6956c046d9d6->leave($__internal_90adf2f6206bdb6420c29bdab0cc6387837af46ebcada1d67afa6956c046d9d6_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_70327b94c4e30e093ca924f258d6e09c69d340490ef43b4f3897c025e03a1a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70327b94c4e30e093ca924f258d6e09c69d340490ef43b4f3897c025e03a1a98->enter($__internal_70327b94c4e30e093ca924f258d6e09c69d340490ef43b4f3897c025e03a1a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_70327b94c4e30e093ca924f258d6e09c69d340490ef43b4f3897c025e03a1a98->leave($__internal_70327b94c4e30e093ca924f258d6e09c69d340490ef43b4f3897c025e03a1a98_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_10fbf10fdb6eec2a92ec10e696b753a1deeb4f1e8ab8c615685e5edc69c17844 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10fbf10fdb6eec2a92ec10e696b753a1deeb4f1e8ab8c615685e5edc69c17844->enter($__internal_10fbf10fdb6eec2a92ec10e696b753a1deeb4f1e8ab8c615685e5edc69c17844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_10fbf10fdb6eec2a92ec10e696b753a1deeb4f1e8ab8c615685e5edc69c17844->leave($__internal_10fbf10fdb6eec2a92ec10e696b753a1deeb4f1e8ab8c615685e5edc69c17844_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_443561fa5d86350710d7bd3a5c7851f6f833eeeed7e3b6779b14769566846792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443561fa5d86350710d7bd3a5c7851f6f833eeeed7e3b6779b14769566846792->enter($__internal_443561fa5d86350710d7bd3a5c7851f6f833eeeed7e3b6779b14769566846792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_443561fa5d86350710d7bd3a5c7851f6f833eeeed7e3b6779b14769566846792->leave($__internal_443561fa5d86350710d7bd3a5c7851f6f833eeeed7e3b6779b14769566846792_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a41cd5ab357a086548513c5e72f63cf0bf9584f6f15b17b8ce0fbe07441f1df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41cd5ab357a086548513c5e72f63cf0bf9584f6f15b17b8ce0fbe07441f1df7->enter($__internal_a41cd5ab357a086548513c5e72f63cf0bf9584f6f15b17b8ce0fbe07441f1df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a41cd5ab357a086548513c5e72f63cf0bf9584f6f15b17b8ce0fbe07441f1df7->leave($__internal_a41cd5ab357a086548513c5e72f63cf0bf9584f6f15b17b8ce0fbe07441f1df7_prof);

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
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
