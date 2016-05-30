<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_307ff621ebc2a0be86473c2beb80f218570d53b10533d730b328dbfda91e1da6 extends Twig_Template
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
        $__internal_9becfd577c19aef760adec8dcfff119c20a3f52486e459bad1e778670c49ba19 = $this->env->getExtension("native_profiler");
        $__internal_9becfd577c19aef760adec8dcfff119c20a3f52486e459bad1e778670c49ba19->enter($__internal_9becfd577c19aef760adec8dcfff119c20a3f52486e459bad1e778670c49ba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9becfd577c19aef760adec8dcfff119c20a3f52486e459bad1e778670c49ba19->leave($__internal_9becfd577c19aef760adec8dcfff119c20a3f52486e459bad1e778670c49ba19_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b0b32b72e22f0d66f8507300e11997da3b409ac95de663852740d94e70e1ed95 = $this->env->getExtension("native_profiler");
        $__internal_b0b32b72e22f0d66f8507300e11997da3b409ac95de663852740d94e70e1ed95->enter($__internal_b0b32b72e22f0d66f8507300e11997da3b409ac95de663852740d94e70e1ed95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b0b32b72e22f0d66f8507300e11997da3b409ac95de663852740d94e70e1ed95->leave($__internal_b0b32b72e22f0d66f8507300e11997da3b409ac95de663852740d94e70e1ed95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18737502de9750b75a151aadb6b4fbd5e97d933a201a29f7b53696504193f512 = $this->env->getExtension("native_profiler");
        $__internal_18737502de9750b75a151aadb6b4fbd5e97d933a201a29f7b53696504193f512->enter($__internal_18737502de9750b75a151aadb6b4fbd5e97d933a201a29f7b53696504193f512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18737502de9750b75a151aadb6b4fbd5e97d933a201a29f7b53696504193f512->leave($__internal_18737502de9750b75a151aadb6b4fbd5e97d933a201a29f7b53696504193f512_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d001a852a9aba34b850855248f446a4dd6a70bdcb60382f48b85bc4c9f8a4ed0 = $this->env->getExtension("native_profiler");
        $__internal_d001a852a9aba34b850855248f446a4dd6a70bdcb60382f48b85bc4c9f8a4ed0->enter($__internal_d001a852a9aba34b850855248f446a4dd6a70bdcb60382f48b85bc4c9f8a4ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d001a852a9aba34b850855248f446a4dd6a70bdcb60382f48b85bc4c9f8a4ed0->leave($__internal_d001a852a9aba34b850855248f446a4dd6a70bdcb60382f48b85bc4c9f8a4ed0_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
