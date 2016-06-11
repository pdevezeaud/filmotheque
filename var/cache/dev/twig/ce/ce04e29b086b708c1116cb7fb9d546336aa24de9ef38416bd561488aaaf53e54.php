<?php

/* base.html.twig */
class __TwigTemplate_01c177d2055caba540ae6ef86247d4e85a70f3a821c48788acdf01b4693a78cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ff142a7ad33d9c248612d27e45d550c56bf2b91a20269d8af537ecf024b2e1 = $this->env->getExtension("native_profiler");
        $__internal_d1ff142a7ad33d9c248612d27e45d550c56bf2b91a20269d8af537ecf024b2e1->enter($__internal_d1ff142a7ad33d9c248612d27e45d550c56bf2b91a20269d8af537ecf024b2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_d1ff142a7ad33d9c248612d27e45d550c56bf2b91a20269d8af537ecf024b2e1->leave($__internal_d1ff142a7ad33d9c248612d27e45d550c56bf2b91a20269d8af537ecf024b2e1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_16fe2352082ebd60bc93283165e84abf7d1a4765d344a7e3fb06fb2cab7f41e4 = $this->env->getExtension("native_profiler");
        $__internal_16fe2352082ebd60bc93283165e84abf7d1a4765d344a7e3fb06fb2cab7f41e4->enter($__internal_16fe2352082ebd60bc93283165e84abf7d1a4765d344a7e3fb06fb2cab7f41e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_16fe2352082ebd60bc93283165e84abf7d1a4765d344a7e3fb06fb2cab7f41e4->leave($__internal_16fe2352082ebd60bc93283165e84abf7d1a4765d344a7e3fb06fb2cab7f41e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f3861d0af59e35956977b9b6f61dc6f6b706bc36f9eb2612ebf4992aa5c5982 = $this->env->getExtension("native_profiler");
        $__internal_4f3861d0af59e35956977b9b6f61dc6f6b706bc36f9eb2612ebf4992aa5c5982->enter($__internal_4f3861d0af59e35956977b9b6f61dc6f6b706bc36f9eb2612ebf4992aa5c5982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css\">
        ";
        
        $__internal_4f3861d0af59e35956977b9b6f61dc6f6b706bc36f9eb2612ebf4992aa5c5982->leave($__internal_4f3861d0af59e35956977b9b6f61dc6f6b706bc36f9eb2612ebf4992aa5c5982_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b1fae9be5ac61cf46ed5fe875cc1720382a22d9990a7bb0cfc42493b23af084 = $this->env->getExtension("native_profiler");
        $__internal_9b1fae9be5ac61cf46ed5fe875cc1720382a22d9990a7bb0cfc42493b23af084->enter($__internal_9b1fae9be5ac61cf46ed5fe875cc1720382a22d9990a7bb0cfc42493b23af084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9b1fae9be5ac61cf46ed5fe875cc1720382a22d9990a7bb0cfc42493b23af084->leave($__internal_9b1fae9be5ac61cf46ed5fe875cc1720382a22d9990a7bb0cfc42493b23af084_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f78b396b07bc90c97ca54cebe4c0f809d83947899093bd2df8a2bad349e3cce = $this->env->getExtension("native_profiler");
        $__internal_7f78b396b07bc90c97ca54cebe4c0f809d83947899093bd2df8a2bad349e3cce->enter($__internal_7f78b396b07bc90c97ca54cebe4c0f809d83947899093bd2df8a2bad349e3cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

        ";
        
        $__internal_7f78b396b07bc90c97ca54cebe4c0f809d83947899093bd2df8a2bad349e3cce->leave($__internal_7f78b396b07bc90c97ca54cebe4c0f809d83947899093bd2df8a2bad349e3cce_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 15,  97 => 14,  86 => 13,  77 => 7,  71 => 6,  59 => 5,  50 => 18,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
