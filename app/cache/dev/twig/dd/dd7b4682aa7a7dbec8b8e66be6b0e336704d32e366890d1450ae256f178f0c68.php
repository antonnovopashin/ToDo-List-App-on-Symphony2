<?php

/* base.html.twig */
class __TwigTemplate_9936efe77a0858fb103b830bf49b911df5391c69e0ca5c9fab97d15d857d013f extends Twig_Template
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
        $__internal_e755dc6ab632c8fcf98fc700a940c2e83eeafd530777d7939600ea896f150dd2 = $this->env->getExtension("native_profiler");
        $__internal_e755dc6ab632c8fcf98fc700a940c2e83eeafd530777d7939600ea896f150dd2->enter($__internal_e755dc6ab632c8fcf98fc700a940c2e83eeafd530777d7939600ea896f150dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e755dc6ab632c8fcf98fc700a940c2e83eeafd530777d7939600ea896f150dd2->leave($__internal_e755dc6ab632c8fcf98fc700a940c2e83eeafd530777d7939600ea896f150dd2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b42061e15c3c5c38e746ff03c34a1fef65bd70260b81414fa33fce709a33f914 = $this->env->getExtension("native_profiler");
        $__internal_b42061e15c3c5c38e746ff03c34a1fef65bd70260b81414fa33fce709a33f914->enter($__internal_b42061e15c3c5c38e746ff03c34a1fef65bd70260b81414fa33fce709a33f914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ToDo List Application!";
        
        $__internal_b42061e15c3c5c38e746ff03c34a1fef65bd70260b81414fa33fce709a33f914->leave($__internal_b42061e15c3c5c38e746ff03c34a1fef65bd70260b81414fa33fce709a33f914_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f9950cb3407a3ec43b89725245e0a7dc61dc881349c94a216033bdfd2ec9c22 = $this->env->getExtension("native_profiler");
        $__internal_2f9950cb3407a3ec43b89725245e0a7dc61dc881349c94a216033bdfd2ec9c22->enter($__internal_2f9950cb3407a3ec43b89725245e0a7dc61dc881349c94a216033bdfd2ec9c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2f9950cb3407a3ec43b89725245e0a7dc61dc881349c94a216033bdfd2ec9c22->leave($__internal_2f9950cb3407a3ec43b89725245e0a7dc61dc881349c94a216033bdfd2ec9c22_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8940b7fb7df0a3b072c32e2975937e82c2ebb702be0b1505258118a711949978 = $this->env->getExtension("native_profiler");
        $__internal_8940b7fb7df0a3b072c32e2975937e82c2ebb702be0b1505258118a711949978->enter($__internal_8940b7fb7df0a3b072c32e2975937e82c2ebb702be0b1505258118a711949978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8940b7fb7df0a3b072c32e2975937e82c2ebb702be0b1505258118a711949978->leave($__internal_8940b7fb7df0a3b072c32e2975937e82c2ebb702be0b1505258118a711949978_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7531758fc31fff6cd2fb2e62e910f8d1ac1452c2613a10740619665e071b1ad3 = $this->env->getExtension("native_profiler");
        $__internal_7531758fc31fff6cd2fb2e62e910f8d1ac1452c2613a10740619665e071b1ad3->enter($__internal_7531758fc31fff6cd2fb2e62e910f8d1ac1452c2613a10740619665e071b1ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7531758fc31fff6cd2fb2e62e910f8d1ac1452c2613a10740619665e071b1ad3->leave($__internal_7531758fc31fff6cd2fb2e62e910f8d1ac1452c2613a10740619665e071b1ad3_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}ToDo List Application!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
