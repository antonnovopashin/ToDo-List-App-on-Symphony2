<?php

/* security/login.html.twig */
class __TwigTemplate_c2c238fd689f9a385aeac470b02c9874f31e9f6097bcd08075c7b49963dc531b extends Twig_Template
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
        $__internal_76df3169e74d8aa81d71dee2a16615974c25dccf42567f62a9c61161e1cbee96 = $this->env->getExtension("native_profiler");
        $__internal_76df3169e74d8aa81d71dee2a16615974c25dccf42567f62a9c61161e1cbee96->enter($__internal_76df3169e74d8aa81d71dee2a16615974c25dccf42567f62a9c61161e1cbee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "

 ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_76df3169e74d8aa81d71dee2a16615974c25dccf42567f62a9c61161e1cbee96->leave($__internal_76df3169e74d8aa81d71dee2a16615974c25dccf42567f62a9c61161e1cbee96_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_57126a6de8a9c5c701ae737ea812e18ac817f0569e4767936e7c068618601565 = $this->env->getExtension("native_profiler");
        $__internal_57126a6de8a9c5c701ae737ea812e18ac817f0569e4767936e7c068618601565->enter($__internal_57126a6de8a9c5c701ae737ea812e18ac817f0569e4767936e7c068618601565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

";
        
        $__internal_57126a6de8a9c5c701ae737ea812e18ac817f0569e4767936e7c068618601565->leave($__internal_57126a6de8a9c5c701ae737ea812e18ac817f0569e4767936e7c068618601565_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f02f9800b32bd159b77f9158143681a0f395c31c739bae13f6eb5f151f21e704 = $this->env->getExtension("native_profiler");
        $__internal_f02f9800b32bd159b77f9158143681a0f395c31c739bae13f6eb5f151f21e704->enter($__internal_f02f9800b32bd159b77f9158143681a0f395c31c739bae13f6eb5f151f21e704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
    
";
        // line 37
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 38
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    
";
        }
        // line 41
        echo "
<form action=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\" method=\"post\">
    <label for=\"username\">Uzername:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

    ";
        // line 54
        echo "
    <button type=\"submit\">login</button>
</form>  

";
        
        $__internal_f02f9800b32bd159b77f9158143681a0f395c31c739bae13f6eb5f151f21e704->leave($__internal_f02f9800b32bd159b77f9158143681a0f395c31c739bae13f6eb5f151f21e704_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4566eb4e9128b9514baa442636364811924026326f3b1d45cb087e19d5f2017a = $this->env->getExtension("native_profiler");
        $__internal_4566eb4e9128b9514baa442636364811924026326f3b1d45cb087e19d5f2017a->enter($__internal_4566eb4e9128b9514baa442636364811924026326f3b1d45cb087e19d5f2017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_4566eb4e9128b9514baa442636364811924026326f3b1d45cb087e19d5f2017a->leave($__internal_4566eb4e9128b9514baa442636364811924026326f3b1d45cb087e19d5f2017a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  156 => 62,  150 => 61,  139 => 54,  131 => 44,  126 => 42,  123 => 41,  116 => 38,  114 => 37,  103 => 29,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  78 => 19,  64 => 7,  58 => 6,  49 => 3,  43 => 2,  36 => 61,  32 => 59,  30 => 6,  28 => 2,  25 => 1,);
    }
}
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
/*     */
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     */
/* {% endif %}*/
/* */
/* <form action="{{ path('login') }}" method="post">*/
/*     <label for="username">Uzername:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*     {#*/
/*         If you want to control the URL the user*/
/*         is redirected to on success (more details below)*/
/*         <input type="hidden" name="_target_path" value="/account" />*/
/*     #}*/
/* */
/*     <button type="submit">login</button>*/
/* </form>  */
/* */
/* {% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/* */
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
