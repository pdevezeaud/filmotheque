<?php

/* VideoFilmothequeBundle:Default\Acteur:ajout.html.twig */
class __TwigTemplate_1f9320c1fc39fc20d102a1165691282d9c1483b297c1e58b7fc7e301227d45fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VideoFilmothequeBundle:Default\\Acteur:ajout.html.twig", 1);
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
        $__internal_9843b79906742e126b2ea9ddd62e51c2afbdf594b036db2b89a6d4d701943b6f = $this->env->getExtension("native_profiler");
        $__internal_9843b79906742e126b2ea9ddd62e51c2afbdf594b036db2b89a6d4d701943b6f->enter($__internal_9843b79906742e126b2ea9ddd62e51c2afbdf594b036db2b89a6d4d701943b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:Default\\Acteur:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9843b79906742e126b2ea9ddd62e51c2afbdf594b036db2b89a6d4d701943b6f->leave($__internal_9843b79906742e126b2ea9ddd62e51c2afbdf594b036db2b89a6d4d701943b6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4de4ddb9bb7b2cbbb0e12f4f0994ca5da85af9ddaa3dac4bbd0b7dd1583d224 = $this->env->getExtension("native_profiler");
        $__internal_f4de4ddb9bb7b2cbbb0e12f4f0994ca5da85af9ddaa3dac4bbd0b7dd1583d224->enter($__internal_f4de4ddb9bb7b2cbbb0e12f4f0994ca5da85af9ddaa3dac4bbd0b7dd1583d224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1> Ajout d'un Acteur   </h1>


";
        
        $__internal_f4de4ddb9bb7b2cbbb0e12f4f0994ca5da85af9ddaa3dac4bbd0b7dd1583d224->leave($__internal_f4de4ddb9bb7b2cbbb0e12f4f0994ca5da85af9ddaa3dac4bbd0b7dd1583d224_prof);

    }

    public function getTemplateName()
    {
        return "VideoFilmothequeBundle:Default\\Acteur:ajout.html.twig";
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
/* {% endblock %}*/
/* */
/* */
/* */
/* */
