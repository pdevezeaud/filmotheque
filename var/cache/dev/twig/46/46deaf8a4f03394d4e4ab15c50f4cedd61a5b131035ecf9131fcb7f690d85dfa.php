<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14c69c2a951cdb34acc98e49a738f47dababa2080537ad8afacd79505416420d extends Twig_Template
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
        $__internal_67fa855518b5441409289b86309427c55ed0c2fc8da106624d45c5f0647da451 = $this->env->getExtension("native_profiler");
        $__internal_67fa855518b5441409289b86309427c55ed0c2fc8da106624d45c5f0647da451->enter($__internal_67fa855518b5441409289b86309427c55ed0c2fc8da106624d45c5f0647da451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67fa855518b5441409289b86309427c55ed0c2fc8da106624d45c5f0647da451->leave($__internal_67fa855518b5441409289b86309427c55ed0c2fc8da106624d45c5f0647da451_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c8ec1b676ef1b3dafeace22f0b4db695f1b7d6b3246f080c94e67779037aa0e2 = $this->env->getExtension("native_profiler");
        $__internal_c8ec1b676ef1b3dafeace22f0b4db695f1b7d6b3246f080c94e67779037aa0e2->enter($__internal_c8ec1b676ef1b3dafeace22f0b4db695f1b7d6b3246f080c94e67779037aa0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c8ec1b676ef1b3dafeace22f0b4db695f1b7d6b3246f080c94e67779037aa0e2->leave($__internal_c8ec1b676ef1b3dafeace22f0b4db695f1b7d6b3246f080c94e67779037aa0e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af2006df24203bbd36af418bd72b753f05e256923ae83d03a7b7077155dfbe19 = $this->env->getExtension("native_profiler");
        $__internal_af2006df24203bbd36af418bd72b753f05e256923ae83d03a7b7077155dfbe19->enter($__internal_af2006df24203bbd36af418bd72b753f05e256923ae83d03a7b7077155dfbe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_af2006df24203bbd36af418bd72b753f05e256923ae83d03a7b7077155dfbe19->leave($__internal_af2006df24203bbd36af418bd72b753f05e256923ae83d03a7b7077155dfbe19_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_070272575f502cdb00bb1e3b9fa8f474c481d55c64f38d8b13d3098795498126 = $this->env->getExtension("native_profiler");
        $__internal_070272575f502cdb00bb1e3b9fa8f474c481d55c64f38d8b13d3098795498126->enter($__internal_070272575f502cdb00bb1e3b9fa8f474c481d55c64f38d8b13d3098795498126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_070272575f502cdb00bb1e3b9fa8f474c481d55c64f38d8b13d3098795498126->leave($__internal_070272575f502cdb00bb1e3b9fa8f474c481d55c64f38d8b13d3098795498126_prof);

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
