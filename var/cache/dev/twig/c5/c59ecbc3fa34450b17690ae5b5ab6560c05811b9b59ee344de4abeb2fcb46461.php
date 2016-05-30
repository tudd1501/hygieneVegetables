<?php

/* base.html.twig */
class __TwigTemplate_11ccd10a3c0d1f222f0f3df0c45ea4a452a571d120b2a13c70c7ab5ef7d68eb9 extends Twig_Template
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
        $__internal_c1da5810d90e099dd3742463c6a1956027e0724900ed9edf706b4e3d0b80cbb0 = $this->env->getExtension("native_profiler");
        $__internal_c1da5810d90e099dd3742463c6a1956027e0724900ed9edf706b4e3d0b80cbb0->enter($__internal_c1da5810d90e099dd3742463c6a1956027e0724900ed9edf706b4e3d0b80cbb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_c1da5810d90e099dd3742463c6a1956027e0724900ed9edf706b4e3d0b80cbb0->leave($__internal_c1da5810d90e099dd3742463c6a1956027e0724900ed9edf706b4e3d0b80cbb0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39c39b4d11b936c65554f7c0c8f5a9694d7353ea8a78c1263a2b1bd6cbf85b50 = $this->env->getExtension("native_profiler");
        $__internal_39c39b4d11b936c65554f7c0c8f5a9694d7353ea8a78c1263a2b1bd6cbf85b50->enter($__internal_39c39b4d11b936c65554f7c0c8f5a9694d7353ea8a78c1263a2b1bd6cbf85b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_39c39b4d11b936c65554f7c0c8f5a9694d7353ea8a78c1263a2b1bd6cbf85b50->leave($__internal_39c39b4d11b936c65554f7c0c8f5a9694d7353ea8a78c1263a2b1bd6cbf85b50_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4d9c1f10053362634d0a303b26be41563fb3f3fa042a201755f27d044c446431 = $this->env->getExtension("native_profiler");
        $__internal_4d9c1f10053362634d0a303b26be41563fb3f3fa042a201755f27d044c446431->enter($__internal_4d9c1f10053362634d0a303b26be41563fb3f3fa042a201755f27d044c446431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4d9c1f10053362634d0a303b26be41563fb3f3fa042a201755f27d044c446431->leave($__internal_4d9c1f10053362634d0a303b26be41563fb3f3fa042a201755f27d044c446431_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_64e376038dcad1405b1b5fb54ea359df26fc3ce7451a83ba02caf6e13d328021 = $this->env->getExtension("native_profiler");
        $__internal_64e376038dcad1405b1b5fb54ea359df26fc3ce7451a83ba02caf6e13d328021->enter($__internal_64e376038dcad1405b1b5fb54ea359df26fc3ce7451a83ba02caf6e13d328021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_64e376038dcad1405b1b5fb54ea359df26fc3ce7451a83ba02caf6e13d328021->leave($__internal_64e376038dcad1405b1b5fb54ea359df26fc3ce7451a83ba02caf6e13d328021_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_635cedd66118d1da7fa935edcad80de85f9228f54e38c3c3a3a3cc6437aec2dc = $this->env->getExtension("native_profiler");
        $__internal_635cedd66118d1da7fa935edcad80de85f9228f54e38c3c3a3a3cc6437aec2dc->enter($__internal_635cedd66118d1da7fa935edcad80de85f9228f54e38c3c3a3a3cc6437aec2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_635cedd66118d1da7fa935edcad80de85f9228f54e38c3c3a3a3cc6437aec2dc->leave($__internal_635cedd66118d1da7fa935edcad80de85f9228f54e38c3c3a3a3cc6437aec2dc_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
