<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cdedcb2693c49030c851b8908d4a12e8b5dc8578da03e1cca06ae5dbea63dc36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a94d395493a117067cca63b57cfe71dceec90c1a6b85de13863c57eaf007ced = $this->env->getExtension("native_profiler");
        $__internal_0a94d395493a117067cca63b57cfe71dceec90c1a6b85de13863c57eaf007ced->enter($__internal_0a94d395493a117067cca63b57cfe71dceec90c1a6b85de13863c57eaf007ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a94d395493a117067cca63b57cfe71dceec90c1a6b85de13863c57eaf007ced->leave($__internal_0a94d395493a117067cca63b57cfe71dceec90c1a6b85de13863c57eaf007ced_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_57191f613b4251b2b660aa296f436feaed4f98368730b2a952f9fc0832086f92 = $this->env->getExtension("native_profiler");
        $__internal_57191f613b4251b2b660aa296f436feaed4f98368730b2a952f9fc0832086f92->enter($__internal_57191f613b4251b2b660aa296f436feaed4f98368730b2a952f9fc0832086f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_57191f613b4251b2b660aa296f436feaed4f98368730b2a952f9fc0832086f92->leave($__internal_57191f613b4251b2b660aa296f436feaed4f98368730b2a952f9fc0832086f92_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1de459854d48db3293d81b7938cd8eac59fc6ef91e5390538179449080807892 = $this->env->getExtension("native_profiler");
        $__internal_1de459854d48db3293d81b7938cd8eac59fc6ef91e5390538179449080807892->enter($__internal_1de459854d48db3293d81b7938cd8eac59fc6ef91e5390538179449080807892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1de459854d48db3293d81b7938cd8eac59fc6ef91e5390538179449080807892->leave($__internal_1de459854d48db3293d81b7938cd8eac59fc6ef91e5390538179449080807892_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_47888f8903d7c2e2b102449a65c6f9e8e1f4555a46681cbc55f8f1448e02f493 = $this->env->getExtension("native_profiler");
        $__internal_47888f8903d7c2e2b102449a65c6f9e8e1f4555a46681cbc55f8f1448e02f493->enter($__internal_47888f8903d7c2e2b102449a65c6f9e8e1f4555a46681cbc55f8f1448e02f493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_47888f8903d7c2e2b102449a65c6f9e8e1f4555a46681cbc55f8f1448e02f493->leave($__internal_47888f8903d7c2e2b102449a65c6f9e8e1f4555a46681cbc55f8f1448e02f493_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
