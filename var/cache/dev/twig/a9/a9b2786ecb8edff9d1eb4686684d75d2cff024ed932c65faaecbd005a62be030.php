<?php

/* VideoFilmothequeBundle:Default/Acteur:ajout.html.twig */
class __TwigTemplate_1f9320c1fc39fc20d102a1165691282d9c1483b297c1e58b7fc7e301227d45fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VideoFilmothequeBundle:Default/Acteur:ajout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6abb4994d786ec89e5b3092eaf9e01982614d8fe57968c8c35049b581b956664 = $this->env->getExtension("native_profiler");
        $__internal_6abb4994d786ec89e5b3092eaf9e01982614d8fe57968c8c35049b581b956664->enter($__internal_6abb4994d786ec89e5b3092eaf9e01982614d8fe57968c8c35049b581b956664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:Default/Acteur:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6abb4994d786ec89e5b3092eaf9e01982614d8fe57968c8c35049b581b956664->leave($__internal_6abb4994d786ec89e5b3092eaf9e01982614d8fe57968c8c35049b581b956664_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2d23b75c38f493890a0ccddfb014f54bfa558fbae0a0f37d90f1c37e6cf6e9b = $this->env->getExtension("native_profiler");
        $__internal_a2d23b75c38f493890a0ccddfb014f54bfa558fbae0a0f37d90f1c37e6cf6e9b->enter($__internal_a2d23b75c38f493890a0ccddfb014f54bfa558fbae0a0f37d90f1c37e6cf6e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Ajout d'un Acteur   </h1>




";
        
        $__internal_a2d23b75c38f493890a0ccddfb014f54bfa558fbae0a0f37d90f1c37e6cf6e9b->leave($__internal_a2d23b75c38f493890a0ccddfb014f54bfa558fbae0a0f37d90f1c37e6cf6e9b_prof);

    }

    public function getTemplateName()
    {
        return "VideoFilmothequeBundle:Default/Acteur:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* <h1> Ajout d'un Acteur   </h1>*/
/* */
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
