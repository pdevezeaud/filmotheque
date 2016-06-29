<?php

/* VideoFilmothequeBundle:Default:index.html.twig */
class __TwigTemplate_f178c9d7e0c21403550f3c38a047f056134adb94704f5d7b5c591299a7411970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VideoFilmothequeBundle:Default:index.html.twig", 1);
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
        $__internal_ebb1bb175a9fcaaee06e47b82d2dc441afe30dd7992b527b96fe1fc3fbe0bead = $this->env->getExtension("native_profiler");
        $__internal_ebb1bb175a9fcaaee06e47b82d2dc441afe30dd7992b527b96fe1fc3fbe0bead->enter($__internal_ebb1bb175a9fcaaee06e47b82d2dc441afe30dd7992b527b96fe1fc3fbe0bead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb1bb175a9fcaaee06e47b82d2dc441afe30dd7992b527b96fe1fc3fbe0bead->leave($__internal_ebb1bb175a9fcaaee06e47b82d2dc441afe30dd7992b527b96fe1fc3fbe0bead_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7a7cf6fdb2bb6bf5296c1a94b554739f2726856e0224272833ffd1b6e307ef8 = $this->env->getExtension("native_profiler");
        $__internal_b7a7cf6fdb2bb6bf5296c1a94b554739f2726856e0224272833ffd1b6e307ef8->enter($__internal_b7a7cf6fdb2bb6bf5296c1a94b554739f2726856e0224272833ffd1b6e307ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>FILMOTHEQUE</h1>

";
        
        $__internal_b7a7cf6fdb2bb6bf5296c1a94b554739f2726856e0224272833ffd1b6e307ef8->leave($__internal_b7a7cf6fdb2bb6bf5296c1a94b554739f2726856e0224272833ffd1b6e307ef8_prof);

    }

    public function getTemplateName()
    {
        return "VideoFilmothequeBundle:Default:index.html.twig";
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
/* <h1>FILMOTHEQUE</h1>*/
/* */
/* {% endblock %}*/
/* */
