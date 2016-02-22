<?php

/* list/edit.html.twig */
class __TwigTemplate_e16b4e647cbd2641caaac5ed0061514c8cbdbde3ef7bfcbc1ad992d7ffda924d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "list/edit.html.twig", 1);
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
        $__internal_0aa72f6adeaf2b4482e9dd0bc316fec5861ff7c18616ab6720722ab7b4bb8cfa = $this->env->getExtension("native_profiler");
        $__internal_0aa72f6adeaf2b4482e9dd0bc316fec5861ff7c18616ab6720722ab7b4bb8cfa->enter($__internal_0aa72f6adeaf2b4482e9dd0bc316fec5861ff7c18616ab6720722ab7b4bb8cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aa72f6adeaf2b4482e9dd0bc316fec5861ff7c18616ab6720722ab7b4bb8cfa->leave($__internal_0aa72f6adeaf2b4482e9dd0bc316fec5861ff7c18616ab6720722ab7b4bb8cfa_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6fa6135f3b88750af4afe7c2a1932ffbcb3a75722044b42b02acecadd6355e1a = $this->env->getExtension("native_profiler");
        $__internal_6fa6135f3b88750af4afe7c2a1932ffbcb3a75722044b42b02acecadd6355e1a->enter($__internal_6fa6135f3b88750af4afe7c2a1932ffbcb3a75722044b42b02acecadd6355e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
";
        
        $__internal_6fa6135f3b88750af4afe7c2a1932ffbcb3a75722044b42b02acecadd6355e1a->leave($__internal_6fa6135f3b88750af4afe7c2a1932ffbcb3a75722044b42b02acecadd6355e1a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e02492ee0ba1d2ceb5eefada47f5e7677e6978f826bf1282d3e69dedd37bfd7 = $this->env->getExtension("native_profiler");
        $__internal_2e02492ee0ba1d2ceb5eefada47f5e7677e6978f826bf1282d3e69dedd37bfd7->enter($__internal_2e02492ee0ba1d2ceb5eefada47f5e7677e6978f826bf1282d3e69dedd37bfd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "           <nav class=\"navbar navbar-default\">
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
        // line 18
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
        
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <h1>ToDo List Edit</h1>

    ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 48
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2e02492ee0ba1d2ceb5eefada47f5e7677e6978f826bf1282d3e69dedd37bfd7->leave($__internal_2e02492ee0ba1d2ceb5eefada47f5e7677e6978f826bf1282d3e69dedd37bfd7_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf1256a8cca65cc94add6b71061bd2916a3e4be50060a4cc17e5c193ba91b865 = $this->env->getExtension("native_profiler");
        $__internal_cf1256a8cca65cc94add6b71061bd2916a3e4be50060a4cc17e5c193ba91b865->enter($__internal_cf1256a8cca65cc94add6b71061bd2916a3e4be50060a4cc17e5c193ba91b865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_cf1256a8cca65cc94add6b71061bd2916a3e4be50060a4cc17e5c193ba91b865->leave($__internal_cf1256a8cca65cc94add6b71061bd2916a3e4be50060a4cc17e5c193ba91b865_prof);

    }

    public function getTemplateName()
    {
        return "list/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 56,  144 => 55,  133 => 50,  128 => 48,  122 => 45,  115 => 41,  110 => 39,  106 => 38,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  68 => 18,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*            <nav class="navbar navbar-default">*/
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
/*     <h1>ToDo List Edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* {% endblock %}*/
/* */
