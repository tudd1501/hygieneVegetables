<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_de4b1537cbff6a4c0f027a2119892d538f3584ef24b2968634aa49c5b9a97dbf extends Twig_Template
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
        $__internal_0b7c60e490848b15ae491250fdd5dc7d76ed0c9448534a8412be0b5a1d329a9e = $this->env->getExtension("native_profiler");
        $__internal_0b7c60e490848b15ae491250fdd5dc7d76ed0c9448534a8412be0b5a1d329a9e->enter($__internal_0b7c60e490848b15ae491250fdd5dc7d76ed0c9448534a8412be0b5a1d329a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7c60e490848b15ae491250fdd5dc7d76ed0c9448534a8412be0b5a1d329a9e->leave($__internal_0b7c60e490848b15ae491250fdd5dc7d76ed0c9448534a8412be0b5a1d329a9e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_19fc35a4875249fd7a1346a74beebcac7456e81e47f02aec0f880080c4b14133 = $this->env->getExtension("native_profiler");
        $__internal_19fc35a4875249fd7a1346a74beebcac7456e81e47f02aec0f880080c4b14133->enter($__internal_19fc35a4875249fd7a1346a74beebcac7456e81e47f02aec0f880080c4b14133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_19fc35a4875249fd7a1346a74beebcac7456e81e47f02aec0f880080c4b14133->leave($__internal_19fc35a4875249fd7a1346a74beebcac7456e81e47f02aec0f880080c4b14133_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ecbc69c40ae8eaaaf5af36dc3b3178cf738cbc629a46bfea9ecc3d0f2e4c9e4e = $this->env->getExtension("native_profiler");
        $__internal_ecbc69c40ae8eaaaf5af36dc3b3178cf738cbc629a46bfea9ecc3d0f2e4c9e4e->enter($__internal_ecbc69c40ae8eaaaf5af36dc3b3178cf738cbc629a46bfea9ecc3d0f2e4c9e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_ecbc69c40ae8eaaaf5af36dc3b3178cf738cbc629a46bfea9ecc3d0f2e4c9e4e->leave($__internal_ecbc69c40ae8eaaaf5af36dc3b3178cf738cbc629a46bfea9ecc3d0f2e4c9e4e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_604a4b780de32da5fde4502cbcba7ae9e2789c28676d46cd16fd59be7f369191 = $this->env->getExtension("native_profiler");
        $__internal_604a4b780de32da5fde4502cbcba7ae9e2789c28676d46cd16fd59be7f369191->enter($__internal_604a4b780de32da5fde4502cbcba7ae9e2789c28676d46cd16fd59be7f369191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
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
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_604a4b780de32da5fde4502cbcba7ae9e2789c28676d46cd16fd59be7f369191->leave($__internal_604a4b780de32da5fde4502cbcba7ae9e2789c28676d46cd16fd59be7f369191_prof);

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
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
