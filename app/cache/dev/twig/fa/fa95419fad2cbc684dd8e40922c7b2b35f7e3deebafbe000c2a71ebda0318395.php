<?php

/* task/new.html.twig */
class __TwigTemplate_130a69b3fef58351f06ce73be3676639bfd6960b3b070c3427c97ac3515d78ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
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
        $__internal_26dd837671b7aa132e6c8a0d4653a4d3103dc63f2f6d1920960e1538ba559b2b = $this->env->getExtension("native_profiler");
        $__internal_26dd837671b7aa132e6c8a0d4653a4d3103dc63f2f6d1920960e1538ba559b2b->enter($__internal_26dd837671b7aa132e6c8a0d4653a4d3103dc63f2f6d1920960e1538ba559b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26dd837671b7aa132e6c8a0d4653a4d3103dc63f2f6d1920960e1538ba559b2b->leave($__internal_26dd837671b7aa132e6c8a0d4653a4d3103dc63f2f6d1920960e1538ba559b2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68042fee58ed74a829343cb6c3bfe34686d5fbb0786c534fed8b0ef30eacbcb2 = $this->env->getExtension("native_profiler");
        $__internal_68042fee58ed74a829343cb6c3bfe34686d5fbb0786c534fed8b0ef30eacbcb2->enter($__internal_68042fee58ed74a829343cb6c3bfe34686d5fbb0786c534fed8b0ef30eacbcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Task Creation</h1>

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
        
        $__internal_68042fee58ed74a829343cb6c3bfe34686d5fbb0786c534fed8b0ef30eacbcb2->leave($__internal_68042fee58ed74a829343cb6c3bfe34686d5fbb0786c534fed8b0ef30eacbcb2_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
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
/*     <h1>Task Creation</h1>*/
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
