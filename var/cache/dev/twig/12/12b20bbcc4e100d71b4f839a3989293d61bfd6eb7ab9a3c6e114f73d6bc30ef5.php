<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6db1788117f965f0cc54c1184c89eace325e95510d8df8467990e7260b8ac4ee extends Twig_Template
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
        $__internal_d23e1a981180c14341de9708ba80ce397dd0d9cc07bbfb94c3acd90d5c95b247 = $this->env->getExtension("native_profiler");
        $__internal_d23e1a981180c14341de9708ba80ce397dd0d9cc07bbfb94c3acd90d5c95b247->enter($__internal_d23e1a981180c14341de9708ba80ce397dd0d9cc07bbfb94c3acd90d5c95b247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23e1a981180c14341de9708ba80ce397dd0d9cc07bbfb94c3acd90d5c95b247->leave($__internal_d23e1a981180c14341de9708ba80ce397dd0d9cc07bbfb94c3acd90d5c95b247_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dd09f928fb88caa1c657f30b4c434aaa4caa5bbe385a422cf2165473ae415d1d = $this->env->getExtension("native_profiler");
        $__internal_dd09f928fb88caa1c657f30b4c434aaa4caa5bbe385a422cf2165473ae415d1d->enter($__internal_dd09f928fb88caa1c657f30b4c434aaa4caa5bbe385a422cf2165473ae415d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dd09f928fb88caa1c657f30b4c434aaa4caa5bbe385a422cf2165473ae415d1d->leave($__internal_dd09f928fb88caa1c657f30b4c434aaa4caa5bbe385a422cf2165473ae415d1d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_127aebdf7590e006ace9a34faad8ed08c47e7ac3f797c24a56cfa43b0e23c496 = $this->env->getExtension("native_profiler");
        $__internal_127aebdf7590e006ace9a34faad8ed08c47e7ac3f797c24a56cfa43b0e23c496->enter($__internal_127aebdf7590e006ace9a34faad8ed08c47e7ac3f797c24a56cfa43b0e23c496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_127aebdf7590e006ace9a34faad8ed08c47e7ac3f797c24a56cfa43b0e23c496->leave($__internal_127aebdf7590e006ace9a34faad8ed08c47e7ac3f797c24a56cfa43b0e23c496_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9d4ef17a2941f8962c5061d1000ca3504c336e99818cd20c6276ea3319048634 = $this->env->getExtension("native_profiler");
        $__internal_9d4ef17a2941f8962c5061d1000ca3504c336e99818cd20c6276ea3319048634->enter($__internal_9d4ef17a2941f8962c5061d1000ca3504c336e99818cd20c6276ea3319048634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9d4ef17a2941f8962c5061d1000ca3504c336e99818cd20c6276ea3319048634->leave($__internal_9d4ef17a2941f8962c5061d1000ca3504c336e99818cd20c6276ea3319048634_prof);

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
