<?php

/* registration/register.html.twig */
class __TwigTemplate_c613c7064a45df6f34d3a18e2e4c55e0e4f0317eacfdbf1314b0dbaf3008b697 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c25c5b0d82a88a04534b902bcba98aeb6ac1e5a6cd63218b8fbad25621dfc13 = $this->env->getExtension("native_profiler");
        $__internal_3c25c5b0d82a88a04534b902bcba98aeb6ac1e5a6cd63218b8fbad25621dfc13->enter($__internal_3c25c5b0d82a88a04534b902bcba98aeb6ac1e5a6cd63218b8fbad25621dfc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "

 ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_3c25c5b0d82a88a04534b902bcba98aeb6ac1e5a6cd63218b8fbad25621dfc13->leave($__internal_3c25c5b0d82a88a04534b902bcba98aeb6ac1e5a6cd63218b8fbad25621dfc13_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cf764857aa54b9eccc6e8bc14eb28c8b5819fed014b4e9a95d54e3dc1970554 = $this->env->getExtension("native_profiler");
        $__internal_6cf764857aa54b9eccc6e8bc14eb28c8b5819fed014b4e9a95d54e3dc1970554->enter($__internal_6cf764857aa54b9eccc6e8bc14eb28c8b5819fed014b4e9a95d54e3dc1970554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

";
        
        $__internal_6cf764857aa54b9eccc6e8bc14eb28c8b5819fed014b4e9a95d54e3dc1970554->leave($__internal_6cf764857aa54b9eccc6e8bc14eb28c8b5819fed014b4e9a95d54e3dc1970554_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_9e7977f1fe88365e1f54e4060e3e2a808dd6a25a745b540f0df6d1d8cff7f58b = $this->env->getExtension("native_profiler");
        $__internal_9e7977f1fe88365e1f54e4060e3e2a808dd6a25a745b540f0df6d1d8cff7f58b->enter($__internal_9e7977f1fe88365e1f54e4060e3e2a808dd6a25a745b540f0df6d1d8cff7f58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "

    <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
<div class=\"container\">
    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
    ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'row');
        echo "
    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'row');
        echo "
    

    <button type=\"submit\">Register!</button>
";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "    
</div>
";
        
        $__internal_9e7977f1fe88365e1f54e4060e3e2a808dd6a25a745b540f0df6d1d8cff7f58b->leave($__internal_9e7977f1fe88365e1f54e4060e3e2a808dd6a25a745b540f0df6d1d8cff7f58b_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8950596cb05d757968299d2b12a35c3c604b1219428f3e29334dd925c61db3f5 = $this->env->getExtension("native_profiler");
        $__internal_8950596cb05d757968299d2b12a35c3c604b1219428f3e29334dd925c61db3f5->enter($__internal_8950596cb05d757968299d2b12a35c3c604b1219428f3e29334dd925c61db3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_8950596cb05d757968299d2b12a35c3c604b1219428f3e29334dd925c61db3f5->leave($__internal_8950596cb05d757968299d2b12a35c3c604b1219428f3e29334dd925c61db3f5_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  155 => 53,  149 => 52,  139 => 47,  132 => 43,  128 => 42,  124 => 41,  120 => 40,  115 => 38,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  79 => 20,  65 => 8,  59 => 7,  50 => 4,  44 => 3,  37 => 52,  33 => 50,  31 => 7,  29 => 3,  25 => 1,);
    }
}
/* */
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*     <nav class="navbar navbar-default">*/
/*   <div class="container-fluid">*/
/*     <!-- Brand and toggle get grouped for better mobile display -->*/
/*     <div class="navbar-header">*/
/*       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*         <span class="sr-only">Toggle navigation</span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*         <span class="icon-bar"></span>*/
/*       </button>*/
/*       <a class="navbar-brand" href="{{ path('homepage') }}">Homepage</a>*/
/*     </div>*/
/* */
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="{{ path('login') }}">Login <span class="sr-only">(current)</span></a></li>*/
/*         <li><a href="{{ path('logout') }}">Logout</a></li>*/
/*         <li><a href="{{ path('user_registration') }}">Register</a></li>*/
/*         <li><a href="{{ path('post_index') }}">Your ToDo Lists</a></li>*/
/*         <li><a href="{{ path('admin_list_index') }}">Administration</a></li>*/
/*         */
/*       </ul>*/
/*       */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* {{ form_start(form) }}*/
/* <div class="container">*/
/*     {{ form_row(form.username) }}*/
/*     {{ form_row(form.email) }}*/
/*     {{ form_row(form.plainPassword.first) }}*/
/*     {{ form_row(form.plainPassword.second) }}*/
/*     */
/* */
/*     <button type="submit">Register!</button>*/
/* {{ form_end(form) }}    */
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/* */
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
