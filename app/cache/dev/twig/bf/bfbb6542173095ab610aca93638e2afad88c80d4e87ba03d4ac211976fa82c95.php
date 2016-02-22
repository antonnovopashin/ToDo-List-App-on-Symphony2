<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_daed07295dde1fb8d0f3d442f25f078fd68be1042da9a66652ddd51d0f97185b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2640c6fbbfb8c6ad558de5a58aebd8fe32454417bbd219007f48a16ce6dac13f = $this->env->getExtension("native_profiler");
        $__internal_2640c6fbbfb8c6ad558de5a58aebd8fe32454417bbd219007f48a16ce6dac13f->enter($__internal_2640c6fbbfb8c6ad558de5a58aebd8fe32454417bbd219007f48a16ce6dac13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2640c6fbbfb8c6ad558de5a58aebd8fe32454417bbd219007f48a16ce6dac13f->leave($__internal_2640c6fbbfb8c6ad558de5a58aebd8fe32454417bbd219007f48a16ce6dac13f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2de7c0cb905151fada3a92b3f60c87e74d575569764fef6e39fbd4590eef2a16 = $this->env->getExtension("native_profiler");
        $__internal_2de7c0cb905151fada3a92b3f60c87e74d575569764fef6e39fbd4590eef2a16->enter($__internal_2de7c0cb905151fada3a92b3f60c87e74d575569764fef6e39fbd4590eef2a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2de7c0cb905151fada3a92b3f60c87e74d575569764fef6e39fbd4590eef2a16->leave($__internal_2de7c0cb905151fada3a92b3f60c87e74d575569764fef6e39fbd4590eef2a16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ac926dd12d597ba853bf23aac9106ba4d65ed538083f0c88b77cb3ccecd7511 = $this->env->getExtension("native_profiler");
        $__internal_6ac926dd12d597ba853bf23aac9106ba4d65ed538083f0c88b77cb3ccecd7511->enter($__internal_6ac926dd12d597ba853bf23aac9106ba4d65ed538083f0c88b77cb3ccecd7511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ac926dd12d597ba853bf23aac9106ba4d65ed538083f0c88b77cb3ccecd7511->leave($__internal_6ac926dd12d597ba853bf23aac9106ba4d65ed538083f0c88b77cb3ccecd7511_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e6b66f0e24dff99ac3488663f1879b53f3cd342cccfc2438c3a8c39e0e98c4 = $this->env->getExtension("native_profiler");
        $__internal_f7e6b66f0e24dff99ac3488663f1879b53f3cd342cccfc2438c3a8c39e0e98c4->enter($__internal_f7e6b66f0e24dff99ac3488663f1879b53f3cd342cccfc2438c3a8c39e0e98c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f7e6b66f0e24dff99ac3488663f1879b53f3cd342cccfc2438c3a8c39e0e98c4->leave($__internal_f7e6b66f0e24dff99ac3488663f1879b53f3cd342cccfc2438c3a8c39e0e98c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
