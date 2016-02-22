<?php

/* admin/new.html.twig */
class __TwigTemplate_1808718bc704f63a5b1836d16ec033586dff9b39cd68942798f4c50116a69904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/new.html.twig", 1);
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
        $__internal_85b9dc1664527005ba1288aa37f9c758db0332f7dbfc2c1a0f200372423e52ed = $this->env->getExtension("native_profiler");
        $__internal_85b9dc1664527005ba1288aa37f9c758db0332f7dbfc2c1a0f200372423e52ed->enter($__internal_85b9dc1664527005ba1288aa37f9c758db0332f7dbfc2c1a0f200372423e52ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85b9dc1664527005ba1288aa37f9c758db0332f7dbfc2c1a0f200372423e52ed->leave($__internal_85b9dc1664527005ba1288aa37f9c758db0332f7dbfc2c1a0f200372423e52ed_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db8efcf208673bc78cb71b31179772e048478aeed46615dc912ec64eb9768c2e = $this->env->getExtension("native_profiler");
        $__internal_db8efcf208673bc78cb71b31179772e048478aeed46615dc912ec64eb9768c2e->enter($__internal_db8efcf208673bc78cb71b31179772e048478aeed46615dc912ec64eb9768c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
";
        
        $__internal_db8efcf208673bc78cb71b31179772e048478aeed46615dc912ec64eb9768c2e->leave($__internal_db8efcf208673bc78cb71b31179772e048478aeed46615dc912ec64eb9768c2e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6077039d5bc888f13c4be68dda36dcbd9d84dbad930c0c76ed682d6a5582fef0 = $this->env->getExtension("native_profiler");
        $__internal_6077039d5bc888f13c4be68dda36dcbd9d84dbad930c0c76ed682d6a5582fef0->enter($__internal_6077039d5bc888f13c4be68dda36dcbd9d84dbad930c0c76ed682d6a5582fef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "      <nav class=\"navbar navbar-default\">
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
        // line 17
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
        
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    <h1>ToDo List Creation</h1>

    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6077039d5bc888f13c4be68dda36dcbd9d84dbad930c0c76ed682d6a5582fef0->leave($__internal_6077039d5bc888f13c4be68dda36dcbd9d84dbad930c0c76ed682d6a5582fef0_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fa9e67deeed5051ef7030ee576ab82811cc3467571430912ec694f744d31596 = $this->env->getExtension("native_profiler");
        $__internal_7fa9e67deeed5051ef7030ee576ab82811cc3467571430912ec694f744d31596->enter($__internal_7fa9e67deeed5051ef7030ee576ab82811cc3467571430912ec694f744d31596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_7fa9e67deeed5051ef7030ee576ab82811cc3467571430912ec694f744d31596->leave($__internal_7fa9e67deeed5051ef7030ee576ab82811cc3467571430912ec694f744d31596_prof);

    }

    public function getTemplateName()
    {
        return "admin/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  134 => 50,  123 => 45,  116 => 41,  111 => 39,  107 => 38,  93 => 27,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  68 => 17,  56 => 7,  50 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*       <nav class="navbar navbar-default">*/
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
/*     */
/*     <h1>ToDo List Creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_list_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
