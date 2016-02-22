<?php

/* task/edit.html.twig */
class __TwigTemplate_a0a4da5387a694aa25ee93ecf7db27c194a4d0f724d347d435ba35cdcc89f13f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/edit.html.twig", 1);
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
        $__internal_1c72a1539646d240e398c5686846e367ea773ab04cfe7499e43e003e9ae79a40 = $this->env->getExtension("native_profiler");
        $__internal_1c72a1539646d240e398c5686846e367ea773ab04cfe7499e43e003e9ae79a40->enter($__internal_1c72a1539646d240e398c5686846e367ea773ab04cfe7499e43e003e9ae79a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c72a1539646d240e398c5686846e367ea773ab04cfe7499e43e003e9ae79a40->leave($__internal_1c72a1539646d240e398c5686846e367ea773ab04cfe7499e43e003e9ae79a40_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e61eadf1bfc52c7b94480f0253391d1a142dc0b994f4ad9ba6465a465739338 = $this->env->getExtension("native_profiler");
        $__internal_8e61eadf1bfc52c7b94480f0253391d1a142dc0b994f4ad9ba6465a465739338->enter($__internal_8e61eadf1bfc52c7b94480f0253391d1a142dc0b994f4ad9ba6465a465739338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task Edit</h1>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Back to the list</a>

        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_8e61eadf1bfc52c7b94480f0253391d1a142dc0b994f4ad9ba6465a465739338->leave($__internal_8e61eadf1bfc52c7b94480f0253391d1a142dc0b994f4ad9ba6465a465739338_prof);

    }

    public function getTemplateName()
    {
        return "task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Task Edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_show', { 'id': id }) }}">Back to the list</a>*/
/* */
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
