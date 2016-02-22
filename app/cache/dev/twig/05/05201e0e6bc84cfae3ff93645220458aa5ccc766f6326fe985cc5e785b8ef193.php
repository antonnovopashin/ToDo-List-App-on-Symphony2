<?php

/* post/new.html.twig */
class __TwigTemplate_efe6cfd3463fa46159a61aaf88f4bb87c79b468797dfb7383c2cc362e622473a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/new.html.twig", 1);
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
        $__internal_a935b8a6a47132e9b439df7aaa5547a2fe98c842f6648f56695a8c5b4595f3a9 = $this->env->getExtension("native_profiler");
        $__internal_a935b8a6a47132e9b439df7aaa5547a2fe98c842f6648f56695a8c5b4595f3a9->enter($__internal_a935b8a6a47132e9b439df7aaa5547a2fe98c842f6648f56695a8c5b4595f3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a935b8a6a47132e9b439df7aaa5547a2fe98c842f6648f56695a8c5b4595f3a9->leave($__internal_a935b8a6a47132e9b439df7aaa5547a2fe98c842f6648f56695a8c5b4595f3a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5580e33d92fc6387509d2fe6782606049938cb5bce11fb9e1c304b59a23cd33e = $this->env->getExtension("native_profiler");
        $__internal_5580e33d92fc6387509d2fe6782606049938cb5bce11fb9e1c304b59a23cd33e->enter($__internal_5580e33d92fc6387509d2fe6782606049938cb5bce11fb9e1c304b59a23cd33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_5580e33d92fc6387509d2fe6782606049938cb5bce11fb9e1c304b59a23cd33e->leave($__internal_5580e33d92fc6387509d2fe6782606049938cb5bce11fb9e1c304b59a23cd33e_prof);

    }

    public function getTemplateName()
    {
        return "post/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
