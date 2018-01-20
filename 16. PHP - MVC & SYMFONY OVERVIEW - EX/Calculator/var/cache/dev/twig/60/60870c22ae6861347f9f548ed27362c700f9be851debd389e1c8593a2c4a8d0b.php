<?php

/* form/fields.html.twig */
class __TwigTemplate_fbc334e4141f01fe67599943f0a7b605adff3d00cc04c8cd1879b3459c981722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83d5f09e1f5d1716108e15645d0b4274cc51e161cc80a04e4726fe7d3552c5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d5f09e1f5d1716108e15645d0b4274cc51e161cc80a04e4726fe7d3552c5b1->enter($__internal_83d5f09e1f5d1716108e15645d0b4274cc51e161cc80a04e4726fe7d3552c5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_83d5f09e1f5d1716108e15645d0b4274cc51e161cc80a04e4726fe7d3552c5b1->leave($__internal_83d5f09e1f5d1716108e15645d0b4274cc51e161cc80a04e4726fe7d3552c5b1_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_35d3c1f003e62354de9996d40c1fdb2026d7255c85f5baf6b84954f50fb73ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d3c1f003e62354de9996d40c1fdb2026d7255c85f5baf6b84954f50fb73ff9->enter($__internal_35d3c1f003e62354de9996d40c1fdb2026d7255c85f5baf6b84954f50fb73ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_35d3c1f003e62354de9996d40c1fdb2026d7255c85f5baf6b84954f50fb73ff9->leave($__internal_35d3c1f003e62354de9996d40c1fdb2026d7255c85f5baf6b84954f50fb73ff9_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
