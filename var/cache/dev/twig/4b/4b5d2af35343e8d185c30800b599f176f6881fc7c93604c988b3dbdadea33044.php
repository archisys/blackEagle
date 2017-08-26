<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b2dcc25782919c673c591183009effac821ddcbf244228cc2124c03d91ab46c8 extends Twig_Template
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
        $__internal_c6ca46a58b2e5cad1f775a885892609b926fd2e432a2c9a7a3953361ece0988d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ca46a58b2e5cad1f775a885892609b926fd2e432a2c9a7a3953361ece0988d->enter($__internal_c6ca46a58b2e5cad1f775a885892609b926fd2e432a2c9a7a3953361ece0988d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_90533e3772afe4d8138770458df1afdd95885974016f641596c87b8cb8a14a94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90533e3772afe4d8138770458df1afdd95885974016f641596c87b8cb8a14a94->enter($__internal_90533e3772afe4d8138770458df1afdd95885974016f641596c87b8cb8a14a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ca46a58b2e5cad1f775a885892609b926fd2e432a2c9a7a3953361ece0988d->leave($__internal_c6ca46a58b2e5cad1f775a885892609b926fd2e432a2c9a7a3953361ece0988d_prof);

        
        $__internal_90533e3772afe4d8138770458df1afdd95885974016f641596c87b8cb8a14a94->leave($__internal_90533e3772afe4d8138770458df1afdd95885974016f641596c87b8cb8a14a94_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fc9394926f79aafae226fe43dc3841e59dbbb6e322737c1be3c3ff14639c4fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9394926f79aafae226fe43dc3841e59dbbb6e322737c1be3c3ff14639c4fe8->enter($__internal_fc9394926f79aafae226fe43dc3841e59dbbb6e322737c1be3c3ff14639c4fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_8405d276c3eb1ab523fcf9c72d7687c5ea62cfee6256ac161a6cbe2c9c787a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8405d276c3eb1ab523fcf9c72d7687c5ea62cfee6256ac161a6cbe2c9c787a87->enter($__internal_8405d276c3eb1ab523fcf9c72d7687c5ea62cfee6256ac161a6cbe2c9c787a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8405d276c3eb1ab523fcf9c72d7687c5ea62cfee6256ac161a6cbe2c9c787a87->leave($__internal_8405d276c3eb1ab523fcf9c72d7687c5ea62cfee6256ac161a6cbe2c9c787a87_prof);

        
        $__internal_fc9394926f79aafae226fe43dc3841e59dbbb6e322737c1be3c3ff14639c4fe8->leave($__internal_fc9394926f79aafae226fe43dc3841e59dbbb6e322737c1be3c3ff14639c4fe8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_555e4dfe26af3c3403aa3a7819eb71585d83f0da4ba682f4d9fc2a8a21a37e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555e4dfe26af3c3403aa3a7819eb71585d83f0da4ba682f4d9fc2a8a21a37e3d->enter($__internal_555e4dfe26af3c3403aa3a7819eb71585d83f0da4ba682f4d9fc2a8a21a37e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_47ce782af6b24697afa08890ba4e337c12db3b0ca81edef0a734ea13b8692239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47ce782af6b24697afa08890ba4e337c12db3b0ca81edef0a734ea13b8692239->enter($__internal_47ce782af6b24697afa08890ba4e337c12db3b0ca81edef0a734ea13b8692239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47ce782af6b24697afa08890ba4e337c12db3b0ca81edef0a734ea13b8692239->leave($__internal_47ce782af6b24697afa08890ba4e337c12db3b0ca81edef0a734ea13b8692239_prof);

        
        $__internal_555e4dfe26af3c3403aa3a7819eb71585d83f0da4ba682f4d9fc2a8a21a37e3d->leave($__internal_555e4dfe26af3c3403aa3a7819eb71585d83f0da4ba682f4d9fc2a8a21a37e3d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_125d417e2df0d68c54ad855f23c313c0a21b7c55304d70d221590dddffede28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_125d417e2df0d68c54ad855f23c313c0a21b7c55304d70d221590dddffede28b->enter($__internal_125d417e2df0d68c54ad855f23c313c0a21b7c55304d70d221590dddffede28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7417d3c1f8726649602a80d2fe6ba815f124b8e59958cd49f5961d4e59819bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7417d3c1f8726649602a80d2fe6ba815f124b8e59958cd49f5961d4e59819bcf->enter($__internal_7417d3c1f8726649602a80d2fe6ba815f124b8e59958cd49f5961d4e59819bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_7417d3c1f8726649602a80d2fe6ba815f124b8e59958cd49f5961d4e59819bcf->leave($__internal_7417d3c1f8726649602a80d2fe6ba815f124b8e59958cd49f5961d4e59819bcf_prof);

        
        $__internal_125d417e2df0d68c54ad855f23c313c0a21b7c55304d70d221590dddffede28b->leave($__internal_125d417e2df0d68c54ad855f23c313c0a21b7c55304d70d221590dddffede28b_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/chintan/blackEagle/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
