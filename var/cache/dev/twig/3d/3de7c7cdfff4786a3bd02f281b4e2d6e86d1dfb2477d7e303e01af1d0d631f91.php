<?php

/* VideoFilmothequeBundle:default/Categorie:affiche.html.twig */
class __TwigTemplate_21d73a9d842e901ee68ab0f4242ffdc980a29e84bc583af6b8c6e25502746b2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VideoFilmothequeBundle:default/Categorie:affiche.html.twig", 1);
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
        $__internal_6e2e5c95311b911a1ff126580c69422d64a6e46c4a79d64707477e61769b4b94 = $this->env->getExtension("native_profiler");
        $__internal_6e2e5c95311b911a1ff126580c69422d64a6e46c4a79d64707477e61769b4b94->enter($__internal_6e2e5c95311b911a1ff126580c69422d64a6e46c4a79d64707477e61769b4b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:default/Categorie:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e2e5c95311b911a1ff126580c69422d64a6e46c4a79d64707477e61769b4b94->leave($__internal_6e2e5c95311b911a1ff126580c69422d64a6e46c4a79d64707477e61769b4b94_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c5e2787272ad4c6f305ae61d0ee61f54a3ff77d3b653dc838628a6af0ef2299 = $this->env->getExtension("native_profiler");
        $__internal_1c5e2787272ad4c6f305ae61d0ee61f54a3ff77d3b653dc838628a6af0ef2299->enter($__internal_1c5e2787272ad4c6f305ae61d0ee61f54a3ff77d3b653dc838628a6af0ef2299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Lites des categories</h1>

     ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categ"]) ? $context["categ"] : $this->getContext($context, "categ")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 7
            echo "
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo " <br />

     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        
        $__internal_1c5e2787272ad4c6f305ae61d0ee61f54a3ff77d3b653dc838628a6af0ef2299->leave($__internal_1c5e2787272ad4c6f305ae61d0ee61f54a3ff77d3b653dc838628a6af0ef2299_prof);

    }

    public function getTemplateName()
    {
        return "VideoFilmothequeBundle:default/Categorie:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 11,  51 => 8,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h1>Lites des categories</h1>*/
/* */
/*      {% for c in categ %}*/
/* */
/*         {{ c.nom }} <br />*/
/* */
/*      {% endfor %}*/
/* */
/* {% endblock %}*/
