<?php

/* post/edit.html.twig */
class __TwigTemplate_ee6b2039757f3ee0d7395a490f21b24673b1e447659569adc82ad6553c6dc919 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/edit.html.twig", 1);
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
        $__internal_a5e7a73ef27566784a864b0ee0110eec77f0342f1e1cb0bc3442d1fe71fc6ed9 = $this->env->getExtension("native_profiler");
        $__internal_a5e7a73ef27566784a864b0ee0110eec77f0342f1e1cb0bc3442d1fe71fc6ed9->enter($__internal_a5e7a73ef27566784a864b0ee0110eec77f0342f1e1cb0bc3442d1fe71fc6ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a5e7a73ef27566784a864b0ee0110eec77f0342f1e1cb0bc3442d1fe71fc6ed9->leave($__internal_a5e7a73ef27566784a864b0ee0110eec77f0342f1e1cb0bc3442d1fe71fc6ed9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e88c31d76baaec7a462e4145026cf7f7101d51f12f0d5101a729ceb8d0460de5 = $this->env->getExtension("native_profiler");
        $__internal_e88c31d76baaec7a462e4145026cf7f7101d51f12f0d5101a729ceb8d0460de5->enter($__internal_e88c31d76baaec7a462e4145026cf7f7101d51f12f0d5101a729ceb8d0460de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e88c31d76baaec7a462e4145026cf7f7101d51f12f0d5101a729ceb8d0460de5->leave($__internal_e88c31d76baaec7a462e4145026cf7f7101d51f12f0d5101a729ceb8d0460de5_prof);

    }

    public function getTemplateName()
    {
        return "post/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
