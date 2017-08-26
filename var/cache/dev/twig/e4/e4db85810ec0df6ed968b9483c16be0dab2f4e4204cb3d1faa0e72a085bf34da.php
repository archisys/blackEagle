<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a4a6e37587f790fa77bff5af918fc4d22299769037b1fff8663ac23544938d88 extends Twig_Template
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
        $__internal_fc51bc61f6e7936e10d4d6432e63eed76770fa401dc905619825f4e3304377b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc51bc61f6e7936e10d4d6432e63eed76770fa401dc905619825f4e3304377b6->enter($__internal_fc51bc61f6e7936e10d4d6432e63eed76770fa401dc905619825f4e3304377b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9d4a5aefca2228924331455c8053bfac8ba659d192c08dc7ea520caf7e1f1428 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4a5aefca2228924331455c8053bfac8ba659d192c08dc7ea520caf7e1f1428->enter($__internal_9d4a5aefca2228924331455c8053bfac8ba659d192c08dc7ea520caf7e1f1428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc51bc61f6e7936e10d4d6432e63eed76770fa401dc905619825f4e3304377b6->leave($__internal_fc51bc61f6e7936e10d4d6432e63eed76770fa401dc905619825f4e3304377b6_prof);

        
        $__internal_9d4a5aefca2228924331455c8053bfac8ba659d192c08dc7ea520caf7e1f1428->leave($__internal_9d4a5aefca2228924331455c8053bfac8ba659d192c08dc7ea520caf7e1f1428_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c13929b37253a705dad6e3bca05f8f01b72142f23a8e2958445161050d63573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c13929b37253a705dad6e3bca05f8f01b72142f23a8e2958445161050d63573->enter($__internal_7c13929b37253a705dad6e3bca05f8f01b72142f23a8e2958445161050d63573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e7b169b9ce1572ae223d9f3f4b6fb34ff42d54b5cf94e85497ee80566801021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7b169b9ce1572ae223d9f3f4b6fb34ff42d54b5cf94e85497ee80566801021->enter($__internal_4e7b169b9ce1572ae223d9f3f4b6fb34ff42d54b5cf94e85497ee80566801021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e7b169b9ce1572ae223d9f3f4b6fb34ff42d54b5cf94e85497ee80566801021->leave($__internal_4e7b169b9ce1572ae223d9f3f4b6fb34ff42d54b5cf94e85497ee80566801021_prof);

        
        $__internal_7c13929b37253a705dad6e3bca05f8f01b72142f23a8e2958445161050d63573->leave($__internal_7c13929b37253a705dad6e3bca05f8f01b72142f23a8e2958445161050d63573_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_524ceaddd9725b13f8232f22f9ea3e76b4d261757af82e96b9e68c2067edddcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524ceaddd9725b13f8232f22f9ea3e76b4d261757af82e96b9e68c2067edddcd->enter($__internal_524ceaddd9725b13f8232f22f9ea3e76b4d261757af82e96b9e68c2067edddcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cc4af6d3e96446f799c9549ca76e3c6688175197c072c4e094c71fc0b4d89f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4af6d3e96446f799c9549ca76e3c6688175197c072c4e094c71fc0b4d89f62->enter($__internal_cc4af6d3e96446f799c9549ca76e3c6688175197c072c4e094c71fc0b4d89f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cc4af6d3e96446f799c9549ca76e3c6688175197c072c4e094c71fc0b4d89f62->leave($__internal_cc4af6d3e96446f799c9549ca76e3c6688175197c072c4e094c71fc0b4d89f62_prof);

        
        $__internal_524ceaddd9725b13f8232f22f9ea3e76b4d261757af82e96b9e68c2067edddcd->leave($__internal_524ceaddd9725b13f8232f22f9ea3e76b4d261757af82e96b9e68c2067edddcd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac59f8a64e583c472ef962d15658c60611a5af72a4e5865814538f1284a00e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac59f8a64e583c472ef962d15658c60611a5af72a4e5865814538f1284a00e19->enter($__internal_ac59f8a64e583c472ef962d15658c60611a5af72a4e5865814538f1284a00e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_dc1a84fb6f512c710dce1e0c4db45f0431c13ad0c842fa3224483153289d957a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1a84fb6f512c710dce1e0c4db45f0431c13ad0c842fa3224483153289d957a->enter($__internal_dc1a84fb6f512c710dce1e0c4db45f0431c13ad0c842fa3224483153289d957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_dc1a84fb6f512c710dce1e0c4db45f0431c13ad0c842fa3224483153289d957a->leave($__internal_dc1a84fb6f512c710dce1e0c4db45f0431c13ad0c842fa3224483153289d957a_prof);

        
        $__internal_ac59f8a64e583c472ef962d15658c60611a5af72a4e5865814538f1284a00e19->leave($__internal_ac59f8a64e583c472ef962d15658c60611a5af72a4e5865814538f1284a00e19_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/home/chintan/blackEagle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
