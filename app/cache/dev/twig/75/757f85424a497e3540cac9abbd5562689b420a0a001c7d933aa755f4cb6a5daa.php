<?php

/* security/denied.html.twig */
class __TwigTemplate_d3830f850d8929cdc8987549a78cc95b16b3e45e9ea4750be105c51b4f556856 extends Twig_Template
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
        $__internal_59f6e3b72dd73b3bef58c8de97c709bbaac99fbacd0ea0314ab6cd9e6976f174 = $this->env->getExtension("native_profiler");
        $__internal_59f6e3b72dd73b3bef58c8de97c709bbaac99fbacd0ea0314ab6cd9e6976f174->enter($__internal_59f6e3b72dd73b3bef58c8de97c709bbaac99fbacd0ea0314ab6cd9e6976f174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/denied.html.twig"));

        // line 1
        echo "



";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "

 ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_59f6e3b72dd73b3bef58c8de97c709bbaac99fbacd0ea0314ab6cd9e6976f174->leave($__internal_59f6e3b72dd73b3bef58c8de97c709bbaac99fbacd0ea0314ab6cd9e6976f174_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8ae6f09d6a7f5a64d2fc20ec2cf7011eb4076fe86bddee97548ecffc104f1bb = $this->env->getExtension("native_profiler");
        $__internal_f8ae6f09d6a7f5a64d2fc20ec2cf7011eb4076fe86bddee97548ecffc104f1bb->enter($__internal_f8ae6f09d6a7f5a64d2fc20ec2cf7011eb4076fe86bddee97548ecffc104f1bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

";
        
        $__internal_f8ae6f09d6a7f5a64d2fc20ec2cf7011eb4076fe86bddee97548ecffc104f1bb->leave($__internal_f8ae6f09d6a7f5a64d2fc20ec2cf7011eb4076fe86bddee97548ecffc104f1bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aed8d0e57f7a225440f0f82532f3dc125a1cc4fa12801836a016271717b2d2a9 = $this->env->getExtension("native_profiler");
        $__internal_aed8d0e57f7a225440f0f82532f3dc125a1cc4fa12801836a016271717b2d2a9->enter($__internal_aed8d0e57f7a225440f0f82532f3dc125a1cc4fa12801836a016271717b2d2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
You are not administrator

";
        
        $__internal_aed8d0e57f7a225440f0f82532f3dc125a1cc4fa12801836a016271717b2d2a9->leave($__internal_aed8d0e57f7a225440f0f82532f3dc125a1cc4fa12801836a016271717b2d2a9_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9b6eda020e606b6bc17e5511fc48a02732d44f2858aaec8c168b21a4e65dcda = $this->env->getExtension("native_profiler");
        $__internal_b9b6eda020e606b6bc17e5511fc48a02732d44f2858aaec8c168b21a4e65dcda->enter($__internal_b9b6eda020e606b6bc17e5511fc48a02732d44f2858aaec8c168b21a4e65dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_b9b6eda020e606b6bc17e5511fc48a02732d44f2858aaec8c168b21a4e65dcda->leave($__internal_b9b6eda020e606b6bc17e5511fc48a02732d44f2858aaec8c168b21a4e65dcda_prof);

    }

    public function getTemplateName()
    {
        return "security/denied.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  124 => 45,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  81 => 22,  67 => 10,  61 => 9,  52 => 6,  46 => 5,  39 => 45,  35 => 43,  33 => 9,  31 => 5,  25 => 1,);
    }
}
/* */
/* */
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
/*     */
/* You are not administrator*/
/* */
/* {% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/* */
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
