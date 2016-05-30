<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d42007633ae1bff86af2be16fbed8e91cc656b43d3749ee60709d36ac4ba6943 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3039eceab25444a9bba0cd67bbcf7b06787ccb2a9b73092f347cc81cca81be1a = $this->env->getExtension("native_profiler");
        $__internal_3039eceab25444a9bba0cd67bbcf7b06787ccb2a9b73092f347cc81cca81be1a->enter($__internal_3039eceab25444a9bba0cd67bbcf7b06787ccb2a9b73092f347cc81cca81be1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3039eceab25444a9bba0cd67bbcf7b06787ccb2a9b73092f347cc81cca81be1a->leave($__internal_3039eceab25444a9bba0cd67bbcf7b06787ccb2a9b73092f347cc81cca81be1a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e184591fbe72d78104c14e0449320731d9f475b6731a45bf90801d7c5c6b035 = $this->env->getExtension("native_profiler");
        $__internal_9e184591fbe72d78104c14e0449320731d9f475b6731a45bf90801d7c5c6b035->enter($__internal_9e184591fbe72d78104c14e0449320731d9f475b6731a45bf90801d7c5c6b035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9e184591fbe72d78104c14e0449320731d9f475b6731a45bf90801d7c5c6b035->leave($__internal_9e184591fbe72d78104c14e0449320731d9f475b6731a45bf90801d7c5c6b035_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e6be995010920aaf86e7dafbb42c27c96f9583d43fcf7f7ab23cf77189936bd = $this->env->getExtension("native_profiler");
        $__internal_9e6be995010920aaf86e7dafbb42c27c96f9583d43fcf7f7ab23cf77189936bd->enter($__internal_9e6be995010920aaf86e7dafbb42c27c96f9583d43fcf7f7ab23cf77189936bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9e6be995010920aaf86e7dafbb42c27c96f9583d43fcf7f7ab23cf77189936bd->leave($__internal_9e6be995010920aaf86e7dafbb42c27c96f9583d43fcf7f7ab23cf77189936bd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d456c1a0260aa44aea209b52308e4228919e0754e43f3768c84a9d0149a5789 = $this->env->getExtension("native_profiler");
        $__internal_9d456c1a0260aa44aea209b52308e4228919e0754e43f3768c84a9d0149a5789->enter($__internal_9d456c1a0260aa44aea209b52308e4228919e0754e43f3768c84a9d0149a5789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d456c1a0260aa44aea209b52308e4228919e0754e43f3768c84a9d0149a5789->leave($__internal_9d456c1a0260aa44aea209b52308e4228919e0754e43f3768c84a9d0149a5789_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
