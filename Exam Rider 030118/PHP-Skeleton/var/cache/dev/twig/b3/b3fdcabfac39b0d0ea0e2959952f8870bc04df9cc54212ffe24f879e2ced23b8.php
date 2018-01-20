<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b724729345c10f9d1a330042894bb2505ed1e24186d1df49c5a79b4e54057f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b724729345c10f9d1a330042894bb2505ed1e24186d1df49c5a79b4e54057f8->enter($__internal_7b724729345c10f9d1a330042894bb2505ed1e24186d1df49c5a79b4e54057f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_66f9df973eb3094368fe1e6f8c0b8f9fef5c776475633af21ff10c7263acc9e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f9df973eb3094368fe1e6f8c0b8f9fef5c776475633af21ff10c7263acc9e4->enter($__internal_66f9df973eb3094368fe1e6f8c0b8f9fef5c776475633af21ff10c7263acc9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7b724729345c10f9d1a330042894bb2505ed1e24186d1df49c5a79b4e54057f8->leave($__internal_7b724729345c10f9d1a330042894bb2505ed1e24186d1df49c5a79b4e54057f8_prof);

        
        $__internal_66f9df973eb3094368fe1e6f8c0b8f9fef5c776475633af21ff10c7263acc9e4->leave($__internal_66f9df973eb3094368fe1e6f8c0b8f9fef5c776475633af21ff10c7263acc9e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fda39999697aa9d8c27561739974298f3c293ec86028c2c6064be5ecc3b1d3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda39999697aa9d8c27561739974298f3c293ec86028c2c6064be5ecc3b1d3aa->enter($__internal_fda39999697aa9d8c27561739974298f3c293ec86028c2c6064be5ecc3b1d3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0aeb576be89248dbf6a80b8c66d2bfbd00dea0080391257b47cdf6cdfa305afe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aeb576be89248dbf6a80b8c66d2bfbd00dea0080391257b47cdf6cdfa305afe->enter($__internal_0aeb576be89248dbf6a80b8c66d2bfbd00dea0080391257b47cdf6cdfa305afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0aeb576be89248dbf6a80b8c66d2bfbd00dea0080391257b47cdf6cdfa305afe->leave($__internal_0aeb576be89248dbf6a80b8c66d2bfbd00dea0080391257b47cdf6cdfa305afe_prof);

        
        $__internal_fda39999697aa9d8c27561739974298f3c293ec86028c2c6064be5ecc3b1d3aa->leave($__internal_fda39999697aa9d8c27561739974298f3c293ec86028c2c6064be5ecc3b1d3aa_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ca8b54e0877c9b4f7a87fea7867c2c7fcd678275eb60b8de66a16abb3a10503b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8b54e0877c9b4f7a87fea7867c2c7fcd678275eb60b8de66a16abb3a10503b->enter($__internal_ca8b54e0877c9b4f7a87fea7867c2c7fcd678275eb60b8de66a16abb3a10503b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d74053942abe93d6b36374596e77d21f8822465b9afdc591bd4bd674b8bc9fac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74053942abe93d6b36374596e77d21f8822465b9afdc591bd4bd674b8bc9fac->enter($__internal_d74053942abe93d6b36374596e77d21f8822465b9afdc591bd4bd674b8bc9fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d74053942abe93d6b36374596e77d21f8822465b9afdc591bd4bd674b8bc9fac->leave($__internal_d74053942abe93d6b36374596e77d21f8822465b9afdc591bd4bd674b8bc9fac_prof);

        
        $__internal_ca8b54e0877c9b4f7a87fea7867c2c7fcd678275eb60b8de66a16abb3a10503b->leave($__internal_ca8b54e0877c9b4f7a87fea7867c2c7fcd678275eb60b8de66a16abb3a10503b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c04cde16d2efcb7e765e947fdfb88ce3609c2f3dd1f0d3d80140fbf7ea601c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04cde16d2efcb7e765e947fdfb88ce3609c2f3dd1f0d3d80140fbf7ea601c06->enter($__internal_c04cde16d2efcb7e765e947fdfb88ce3609c2f3dd1f0d3d80140fbf7ea601c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c5259c79fda43560262a0c9339ef6002b02a858802a74ba6edd84513d976898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c5259c79fda43560262a0c9339ef6002b02a858802a74ba6edd84513d976898->enter($__internal_4c5259c79fda43560262a0c9339ef6002b02a858802a74ba6edd84513d976898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c5259c79fda43560262a0c9339ef6002b02a858802a74ba6edd84513d976898->leave($__internal_4c5259c79fda43560262a0c9339ef6002b02a858802a74ba6edd84513d976898_prof);

        
        $__internal_c04cde16d2efcb7e765e947fdfb88ce3609c2f3dd1f0d3d80140fbf7ea601c06->leave($__internal_c04cde16d2efcb7e765e947fdfb88ce3609c2f3dd1f0d3d80140fbf7ea601c06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Projects\\Exam_Rider\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
