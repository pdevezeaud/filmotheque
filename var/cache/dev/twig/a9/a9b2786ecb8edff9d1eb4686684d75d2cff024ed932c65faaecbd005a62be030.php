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
        $__internal_9fcf4566fb6ac2e5523cb8f2ee629cd873770a9b74b10948e9d921d101ca8376 = $this->env->getExtension("native_profiler");
        $__internal_9fcf4566fb6ac2e5523cb8f2ee629cd873770a9b74b10948e9d921d101ca8376->enter($__internal_9fcf4566fb6ac2e5523cb8f2ee629cd873770a9b74b10948e9d921d101ca8376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VideoFilmothequeBundle:Default/Acteur:ajout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fcf4566fb6ac2e5523cb8f2ee629cd873770a9b74b10948e9d921d101ca8376->leave($__internal_9fcf4566fb6ac2e5523cb8f2ee629cd873770a9b74b10948e9d921d101ca8376_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b941217544ecc70b2353a44480309685a3cccb399fe2875402638a04d75849a7 = $this->env->getExtension("native_profiler");
        $__internal_b941217544ecc70b2353a44480309685a3cccb399fe2875402638a04d75849a7->enter($__internal_b941217544ecc70b2353a44480309685a3cccb399fe2875402638a04d75849a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    <form method=\"POST\">

            <caption><h1>";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : $this->getContext($context, "msg")), "html", null, true);
        echo "</h1></caption>

        <table>
            <thead>
            <tr>
                <td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom:"));
        echo "</td>
                <td>
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
                 ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                </td>
            </tr>

            <tr>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prenom:"));
        echo " </td>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                </td>
            </tr>


            <tr>
            <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'label', array("label" => "Birthday:"));
        echo "</td>
            <td>
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'widget');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datenaissance", array()), 'errors');
        echo "
            </td>
            </tr>

            <tr>
            <td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'label', array("label" => "Sexe:"));
        echo "</td>
            <td>
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'widget');
        echo "
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sexe", array()), 'errors');
        echo "
            </td>
            </tr>

            </thead>
        </table>
    </form>


    ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_b941217544ecc70b2353a44480309685a3cccb399fe2875402638a04d75849a7->leave($__internal_b941217544ecc70b2353a44480309685a3cccb399fe2875402638a04d75849a7_prof);

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
        return array (  132 => 52,  120 => 43,  116 => 42,  111 => 40,  103 => 35,  99 => 34,  94 => 32,  85 => 26,  81 => 25,  76 => 23,  68 => 18,  64 => 17,  59 => 15,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* */
/*     {{ form_start(form) }}*/
/* */
/*     <form method="POST">*/
/* */
/*             <caption><h1>{{ msg }}</h1></caption>*/
/* */
/*         <table>*/
/*             <thead>*/
/*             <tr>*/
/*                 <td>{{ form_label(form.nom, 'Nom:') }}</td>*/
/*                 <td>*/
/*                     {{ form_widget(form.nom) }}*/
/*                  {{ form_errors(form.nom) }}*/
/*                 </td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <td>{{ form_label(form.prenom, 'Prenom:') }} </td>*/
/*                 <td>*/
/*                     {{ form_widget(form.prenom) }}*/
/*                     {{ form_errors(form.prenom) }}*/
/*                 </td>*/
/*             </tr>*/
/* */
/* */
/*             <tr>*/
/*             <td>{{ form_label(form.datenaissance, 'Birthday:') }}</td>*/
/*             <td>*/
/*                 {{ form_widget(form.datenaissance) }}*/
/*                 {{ form_errors(form.datenaissance) }}*/
/*             </td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*             <td>{{ form_label(form.sexe, 'Sexe:') }}</td>*/
/*             <td>*/
/*                 {{ form_widget(form.sexe) }}*/
/*                 {{ form_errors(form.sexe) }}*/
/*             </td>*/
/*             </tr>*/
/* */
/*             </thead>*/
/*         </table>*/
/*     </form>*/
/* */
/* */
/*     {{ form_end(form) }}*/
/* */
/* {% endblock %}*/
/* */
/*       {#  {{ form_start(form) }}*/
/*         {{ form_errors(form) }}*/
/*         {{ form_label(form.nom, 'Nom :') }} {{ form_widget(form.nom) }}*/
/*         {{ form_label(form.prenom, 'Prenom :') }} {{ form_widget(form.prenom) }}*/
/*         {{ form_label(form.datenaissance, 'Birthday :') }} {{ form_widget(form.datenaissance) }}*/
/*         {{ form_label(form.sexe, 'Sexe') }} {{ form_widget(form.sexe) }}*/
/*         {{ form_end(form) }}*/
/* */
/* */
/*         {{ form_rest(form) }}#}*/
/* */
/* */
/* */
/* */
/* */
/* */
