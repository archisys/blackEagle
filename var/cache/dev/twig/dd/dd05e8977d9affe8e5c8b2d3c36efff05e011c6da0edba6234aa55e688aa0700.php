<?php

/* base.html.twig */
class __TwigTemplate_33be6c8e5f7a4389dca3ebff338ccae7177f681b991500a44cfde90a719ce42a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d3e45501001433965c66a645302bc618ff878522ebbad8a71f9e98ac67a9440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d3e45501001433965c66a645302bc618ff878522ebbad8a71f9e98ac67a9440->enter($__internal_9d3e45501001433965c66a645302bc618ff878522ebbad8a71f9e98ac67a9440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6862d7ebf522d5eddab1f2d9d537c22d5e17080a8a043dcac90412d64087a857 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6862d7ebf522d5eddab1f2d9d537c22d5e17080a8a043dcac90412d64087a857->enter($__internal_6862d7ebf522d5eddab1f2d9d537c22d5e17080a8a043dcac90412d64087a857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_9d3e45501001433965c66a645302bc618ff878522ebbad8a71f9e98ac67a9440->leave($__internal_9d3e45501001433965c66a645302bc618ff878522ebbad8a71f9e98ac67a9440_prof);

        
        $__internal_6862d7ebf522d5eddab1f2d9d537c22d5e17080a8a043dcac90412d64087a857->leave($__internal_6862d7ebf522d5eddab1f2d9d537c22d5e17080a8a043dcac90412d64087a857_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_350ec72d2af19a1517770a4439f26cba52353f46ea82e0106a336641fdf12479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350ec72d2af19a1517770a4439f26cba52353f46ea82e0106a336641fdf12479->enter($__internal_350ec72d2af19a1517770a4439f26cba52353f46ea82e0106a336641fdf12479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e149f086dfd944dc56c8313647b67748e618bd5abca9b066d47176efb4efe92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e149f086dfd944dc56c8313647b67748e618bd5abca9b066d47176efb4efe92f->enter($__internal_e149f086dfd944dc56c8313647b67748e618bd5abca9b066d47176efb4efe92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e149f086dfd944dc56c8313647b67748e618bd5abca9b066d47176efb4efe92f->leave($__internal_e149f086dfd944dc56c8313647b67748e618bd5abca9b066d47176efb4efe92f_prof);

        
        $__internal_350ec72d2af19a1517770a4439f26cba52353f46ea82e0106a336641fdf12479->leave($__internal_350ec72d2af19a1517770a4439f26cba52353f46ea82e0106a336641fdf12479_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_18942b5570842e25ae3614b07a1d33a3c563790cda8790630c3bba3da89bf1c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18942b5570842e25ae3614b07a1d33a3c563790cda8790630c3bba3da89bf1c6->enter($__internal_18942b5570842e25ae3614b07a1d33a3c563790cda8790630c3bba3da89bf1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_78a5149002bafb241eb0bfb5bc829e217b51af3da018f2a43ce8eda772634a01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78a5149002bafb241eb0bfb5bc829e217b51af3da018f2a43ce8eda772634a01->enter($__internal_78a5149002bafb241eb0bfb5bc829e217b51af3da018f2a43ce8eda772634a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_78a5149002bafb241eb0bfb5bc829e217b51af3da018f2a43ce8eda772634a01->leave($__internal_78a5149002bafb241eb0bfb5bc829e217b51af3da018f2a43ce8eda772634a01_prof);

        
        $__internal_18942b5570842e25ae3614b07a1d33a3c563790cda8790630c3bba3da89bf1c6->leave($__internal_18942b5570842e25ae3614b07a1d33a3c563790cda8790630c3bba3da89bf1c6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f40eb2c754f3488d357d82dc8059c1b2c10f9953fb154bc6087d266bc2060584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f40eb2c754f3488d357d82dc8059c1b2c10f9953fb154bc6087d266bc2060584->enter($__internal_f40eb2c754f3488d357d82dc8059c1b2c10f9953fb154bc6087d266bc2060584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3dc10d7475f1327d32a147d620ef30ab1390743c6be54440364ef4097e07fd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc10d7475f1327d32a147d620ef30ab1390743c6be54440364ef4097e07fd1d->enter($__internal_3dc10d7475f1327d32a147d620ef30ab1390743c6be54440364ef4097e07fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3dc10d7475f1327d32a147d620ef30ab1390743c6be54440364ef4097e07fd1d->leave($__internal_3dc10d7475f1327d32a147d620ef30ab1390743c6be54440364ef4097e07fd1d_prof);

        
        $__internal_f40eb2c754f3488d357d82dc8059c1b2c10f9953fb154bc6087d266bc2060584->leave($__internal_f40eb2c754f3488d357d82dc8059c1b2c10f9953fb154bc6087d266bc2060584_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_23be50a2c4024d087002b043e8f8b3c6177e923bf54a0acd774e07d1f95f7dca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23be50a2c4024d087002b043e8f8b3c6177e923bf54a0acd774e07d1f95f7dca->enter($__internal_23be50a2c4024d087002b043e8f8b3c6177e923bf54a0acd774e07d1f95f7dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_239af8d63393a30b5f89aa2ec1aa2acd22a4c0da461857e43f6462dc86cfc4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_239af8d63393a30b5f89aa2ec1aa2acd22a4c0da461857e43f6462dc86cfc4fa->enter($__internal_239af8d63393a30b5f89aa2ec1aa2acd22a4c0da461857e43f6462dc86cfc4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_239af8d63393a30b5f89aa2ec1aa2acd22a4c0da461857e43f6462dc86cfc4fa->leave($__internal_239af8d63393a30b5f89aa2ec1aa2acd22a4c0da461857e43f6462dc86cfc4fa_prof);

        
        $__internal_23be50a2c4024d087002b043e8f8b3c6177e923bf54a0acd774e07d1f95f7dca->leave($__internal_23be50a2c4024d087002b043e8f8b3c6177e923bf54a0acd774e07d1f95f7dca_prof);

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
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/chintan/blackEagle/app/Resources/views/base.html.twig");
    }
}
