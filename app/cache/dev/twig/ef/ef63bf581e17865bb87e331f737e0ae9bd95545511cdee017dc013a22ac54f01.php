<?php

/* homepage/index.html.twig */
class __TwigTemplate_5cd89fb1157376107440f7761255655c74d43d7cd53d4658fee31d90b2c02348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "homepage/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4708ab8d5762fdfce0d2f9be58b0027a914488374f0079aabb3b093284529ee = $this->env->getExtension("native_profiler");
        $__internal_a4708ab8d5762fdfce0d2f9be58b0027a914488374f0079aabb3b093284529ee->enter($__internal_a4708ab8d5762fdfce0d2f9be58b0027a914488374f0079aabb3b093284529ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4708ab8d5762fdfce0d2f9be58b0027a914488374f0079aabb3b093284529ee->leave($__internal_a4708ab8d5762fdfce0d2f9be58b0027a914488374f0079aabb3b093284529ee_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b931a6474ce04fb0a5e094d9b3402225fb70eba5275c4f4737b9432ecb3b94f = $this->env->getExtension("native_profiler");
        $__internal_4b931a6474ce04fb0a5e094d9b3402225fb70eba5275c4f4737b9432ecb3b94f->enter($__internal_4b931a6474ce04fb0a5e094d9b3402225fb70eba5275c4f4737b9432ecb3b94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

";
        
        $__internal_4b931a6474ce04fb0a5e094d9b3402225fb70eba5275c4f4737b9432ecb3b94f->leave($__internal_4b931a6474ce04fb0a5e094d9b3402225fb70eba5275c4f4737b9432ecb3b94f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a3fab97c261e2345aa2cba4b06a412f1fc57ea6b4cc5aaa00d7d6490f17f1ab = $this->env->getExtension("native_profiler");
        $__internal_9a3fab97c261e2345aa2cba4b06a412f1fc57ea6b4cc5aaa00d7d6490f17f1ab->enter($__internal_9a3fab97c261e2345aa2cba4b06a412f1fc57ea6b4cc5aaa00d7d6490f17f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
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
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
        
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    ";
        // line 40
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == "anon.")) {
            echo " Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "html", null, true);
            echo " ";
        } else {
            echo " Hello ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), "html", null, true);
            echo "   ";
        }
        // line 41
        echo "  </div>
</div>
    

";
        
        $__internal_9a3fab97c261e2345aa2cba4b06a412f1fc57ea6b4cc5aaa00d7d6490f17f1ab->leave($__internal_9a3fab97c261e2345aa2cba4b06a412f1fc57ea6b4cc5aaa00d7d6490f17f1ab_prof);

    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ffbac33c60f3681109d04f66c210e0d6c90da36b8c0d46db51c80adb397a02c4 = $this->env->getExtension("native_profiler");
        $__internal_ffbac33c60f3681109d04f66c210e0d6c90da36b8c0d46db51c80adb397a02c4->enter($__internal_ffbac33c60f3681109d04f66c210e0d6c90da36b8c0d46db51c80adb397a02c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 48
        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_ffbac33c60f3681109d04f66c210e0d6c90da36b8c0d46db51c80adb397a02c4->leave($__internal_ffbac33c60f3681109d04f66c210e0d6c90da36b8c0d46db51c80adb397a02c4_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 48,  131 => 47,  120 => 41,  110 => 40,  96 => 29,  92 => 28,  88 => 27,  84 => 26,  80 => 25,  71 => 19,  57 => 7,  51 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
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
/*         */
/*       </ul>*/
/*       */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*     {% if app.security.getToken().getUser() == "anon." %} Hello {{ app.security.getToken().getUser() }} {% else %} Hello {{ app.security.getToken().getUser().getUsername() }}   {% endif %}*/
/*   </div>*/
/* </div>*/
/*     */
/* */
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
