<?php

/* VideoFilmothequeBundle:Default/Acteur:affiche.html.twig */
class __TwigTemplate_44bf1b5275ce8d716081dbc50b67f9e5db18acfcec1c6da3edbf7c811d20f941 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "VideoFilmothequeBundle:Default/Acteur:affiche.html.twig", 1);
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
        $__internal_18006adaa99ea46311219ee6cfb6bbffc5972a11ad439ef8a2f691f5db536003 = $this->env->getExtension("native_profiler");
        $__internal_18006adaa99ea46311219ee6cfb6bbffc5972a11ad439ef8a2f691f5db536003->enter($__internal_18006adaa99ea46311219ee6cfb6bbffc5972a11ad439ef8a2f691f5db536003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:Default/Acteur:affiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18006adaa99ea46311219ee6cfb6bbffc5972a11ad439ef8a2f691f5db536003->leave($__internal_18006adaa99ea46311219ee6cfb6bbffc5972a11ad439ef8a2f691f5db536003_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_63fff1cbfcc219df6b954c901bdddc4713511cbd58fa9c128e646b32440bfd67 = $this->env->getExtension("native_profiler");
        $__internal_63fff1cbfcc219df6b954c901bdddc4713511cbd58fa9c128e646b32440bfd67->enter($__internal_63fff1cbfcc219df6b954c901bdddc4713511cbd58fa9c128e646b32440bfd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "




    <table>
        <caption><h1>Affiche la liste des acteurs</h1></caption>

        <thead>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date naissance</th>
            <th>Sexe</th>
        </tr>
        </thead>
        </tbody>


        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["acteurs"]) ? $context["acteurs"] : $this->getContext($context, "acteurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["acteur"]) {
            // line 28
            echo "
            <tr>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "prenom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["acteur"], "datenaissance", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            if (($this->getAttribute($context["acteur"], "sexe", array()) == "h")) {
                // line 34
                echo "                        Home
                    ";
            } else {
                // line 36
                echo "                        Femme
                    ";
            }
            // line 38
            echo "                </td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
        </tbody>
    </table>

";
        
        $__internal_63fff1cbfcc219df6b954c901bdddc4713511cbd58fa9c128e646b32440bfd67->leave($__internal_63fff1cbfcc219df6b954c901bdddc4713511cbd58fa9c128e646b32440bfd67_prof);

    }

    public function getTemplateName()
    {
        return "VideoFilmothequeBundle:Default/Acteur:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  91 => 38,  87 => 36,  83 => 34,  81 => 33,  77 => 32,  73 => 31,  69 => 30,  65 => 28,  61 => 27,  40 => 8,  34 => 7,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* */
/* */
/* */
/* {% block body %}*/
/* */
/* */
/* */
/* */
/* */
/*     <table>*/
/*         <caption><h1>Affiche la liste des acteurs</h1></caption>*/
/* */
/*         <thead>*/
/*         <tr>*/
/*             <th>Nom</th>*/
/*             <th>Prenom</th>*/
/*             <th>Date naissance</th>*/
/*             <th>Sexe</th>*/
/*         </tr>*/
/*         </thead>*/
/*         </tbody>*/
/* */
/* */
/*         {% for acteur in acteurs %}*/
/* */
/*             <tr>*/
/*                 <td>{{ acteur.nom }}</td>*/
/*                 <td>{{ acteur.prenom }}</td>*/
/*                 <td>{{ acteur.datenaissance }}</td>*/
/*                 <td>{% if acteur.sexe=="h" %}*/
/*                         Home*/
/*                     {% else %}*/
/*                         Femme*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/* */
/*         {% endfor %}*/
/* */
/*         </tbody>*/
/*     </table>*/
/* */
/* {% endblock %}*/
