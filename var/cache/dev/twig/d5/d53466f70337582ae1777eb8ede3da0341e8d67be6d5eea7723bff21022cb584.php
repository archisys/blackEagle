<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_088e3193ef70bb6bafbdb5b67faf1b58e27d448c89ca0ff9004d8adcb50a3518 extends Twig_Template
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
        $__internal_126a7115b59654bbaddcce237612285b5343fc4f77c6b2ac58ad868ca4067721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_126a7115b59654bbaddcce237612285b5343fc4f77c6b2ac58ad868ca4067721->enter($__internal_126a7115b59654bbaddcce237612285b5343fc4f77c6b2ac58ad868ca4067721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e4bd060a34af8469c226ff0461ef841e9a40f37bf8ae1d626242b8dc78741237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bd060a34af8469c226ff0461ef841e9a40f37bf8ae1d626242b8dc78741237->enter($__internal_e4bd060a34af8469c226ff0461ef841e9a40f37bf8ae1d626242b8dc78741237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_126a7115b59654bbaddcce237612285b5343fc4f77c6b2ac58ad868ca4067721->leave($__internal_126a7115b59654bbaddcce237612285b5343fc4f77c6b2ac58ad868ca4067721_prof);

        
        $__internal_e4bd060a34af8469c226ff0461ef841e9a40f37bf8ae1d626242b8dc78741237->leave($__internal_e4bd060a34af8469c226ff0461ef841e9a40f37bf8ae1d626242b8dc78741237_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_25f992fc7bd7b381ae0200ee85ba8060f9aea173adf82bcac5e282d7134e9c90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25f992fc7bd7b381ae0200ee85ba8060f9aea173adf82bcac5e282d7134e9c90->enter($__internal_25f992fc7bd7b381ae0200ee85ba8060f9aea173adf82bcac5e282d7134e9c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_863b93884053c14eaeea4c716b7221178d66c79d2d35add3714f20c72a14b119 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_863b93884053c14eaeea4c716b7221178d66c79d2d35add3714f20c72a14b119->enter($__internal_863b93884053c14eaeea4c716b7221178d66c79d2d35add3714f20c72a14b119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_863b93884053c14eaeea4c716b7221178d66c79d2d35add3714f20c72a14b119->leave($__internal_863b93884053c14eaeea4c716b7221178d66c79d2d35add3714f20c72a14b119_prof);

        
        $__internal_25f992fc7bd7b381ae0200ee85ba8060f9aea173adf82bcac5e282d7134e9c90->leave($__internal_25f992fc7bd7b381ae0200ee85ba8060f9aea173adf82bcac5e282d7134e9c90_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0abaaed699589112c83185ba3b4eb17d73422a9d6fd85948744d7703d72fd1a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0abaaed699589112c83185ba3b4eb17d73422a9d6fd85948744d7703d72fd1a3->enter($__internal_0abaaed699589112c83185ba3b4eb17d73422a9d6fd85948744d7703d72fd1a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7d104db3ac45ffa2ee95aaab240e5febee85644b344884d0b745724349b1cb8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d104db3ac45ffa2ee95aaab240e5febee85644b344884d0b745724349b1cb8d->enter($__internal_7d104db3ac45ffa2ee95aaab240e5febee85644b344884d0b745724349b1cb8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7d104db3ac45ffa2ee95aaab240e5febee85644b344884d0b745724349b1cb8d->leave($__internal_7d104db3ac45ffa2ee95aaab240e5febee85644b344884d0b745724349b1cb8d_prof);

        
        $__internal_0abaaed699589112c83185ba3b4eb17d73422a9d6fd85948744d7703d72fd1a3->leave($__internal_0abaaed699589112c83185ba3b4eb17d73422a9d6fd85948744d7703d72fd1a3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_955d222ee221735b886b28364fbf34f75ef030007ec535c0d1b09d8e466670cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955d222ee221735b886b28364fbf34f75ef030007ec535c0d1b09d8e466670cd->enter($__internal_955d222ee221735b886b28364fbf34f75ef030007ec535c0d1b09d8e466670cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe51a1586b726aa1b581cea287ce3b6d3d5add3f91de8c2f3a7910142177a502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe51a1586b726aa1b581cea287ce3b6d3d5add3f91de8c2f3a7910142177a502->enter($__internal_fe51a1586b726aa1b581cea287ce3b6d3d5add3f91de8c2f3a7910142177a502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fe51a1586b726aa1b581cea287ce3b6d3d5add3f91de8c2f3a7910142177a502->leave($__internal_fe51a1586b726aa1b581cea287ce3b6d3d5add3f91de8c2f3a7910142177a502_prof);

        
        $__internal_955d222ee221735b886b28364fbf34f75ef030007ec535c0d1b09d8e466670cd->leave($__internal_955d222ee221735b886b28364fbf34f75ef030007ec535c0d1b09d8e466670cd_prof);

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
", "@Twig/layout.html.twig", "/home/chintan/blackEagle/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
