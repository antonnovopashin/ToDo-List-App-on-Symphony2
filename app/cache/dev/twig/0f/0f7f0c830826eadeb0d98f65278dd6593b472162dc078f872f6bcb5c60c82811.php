<?php

/* mylist/new.html.twig */
class __TwigTemplate_a62d0303730e0d63c60ddc5a3281da33995cb5ce69b6263d1cd08780f91e640e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mylist/new.html.twig", 1);
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
        $__internal_f1b0ec307543b8b6f8835df3f4aad14c3a7129fb645a0c0dec4b52ab03b38d2e = $this->env->getExtension("native_profiler");
        $__internal_f1b0ec307543b8b6f8835df3f4aad14c3a7129fb645a0c0dec4b52ab03b38d2e->enter($__internal_f1b0ec307543b8b6f8835df3f4aad14c3a7129fb645a0c0dec4b52ab03b38d2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mylist/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1b0ec307543b8b6f8835df3f4aad14c3a7129fb645a0c0dec4b52ab03b38d2e->leave($__internal_f1b0ec307543b8b6f8835df3f4aad14c3a7129fb645a0c0dec4b52ab03b38d2e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c876a2a085e7385d5cc598241790c7f234538dd833dc9306f127a08978c55a59 = $this->env->getExtension("native_profiler");
        $__internal_c876a2a085e7385d5cc598241790c7f234538dd833dc9306f127a08978c55a59->enter($__internal_c876a2a085e7385d5cc598241790c7f234538dd833dc9306f127a08978c55a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MyList creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("mylist_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c876a2a085e7385d5cc598241790c7f234538dd833dc9306f127a08978c55a59->leave($__internal_c876a2a085e7385d5cc598241790c7f234538dd833dc9306f127a08978c55a59_prof);

    }

    public function getTemplateName()
    {
        return "mylist/new.html.twig";
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
/*     <h1>MyList creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mylist_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
