<?php

/* admin/task/edit.html.twig */
class __TwigTemplate_e7bbd4b5918bd540f0d8d88f9d4ec3d9b2a289f2de004d9139d970e4fb2f566d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/task/edit.html.twig", 1);
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
        $__internal_6f6611450e8741c3751a397d9b98962d77b64174c8fc4376b022887d1a80c7dd = $this->env->getExtension("native_profiler");
        $__internal_6f6611450e8741c3751a397d9b98962d77b64174c8fc4376b022887d1a80c7dd->enter($__internal_6f6611450e8741c3751a397d9b98962d77b64174c8fc4376b022887d1a80c7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/task/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f6611450e8741c3751a397d9b98962d77b64174c8fc4376b022887d1a80c7dd->leave($__internal_6f6611450e8741c3751a397d9b98962d77b64174c8fc4376b022887d1a80c7dd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb02d57183a7610b4ca772201b3477fefca1219b4457b555ca1c85b2196c123d = $this->env->getExtension("native_profiler");
        $__internal_eb02d57183a7610b4ca772201b3477fefca1219b4457b555ca1c85b2196c123d->enter($__internal_eb02d57183a7610b4ca772201b3477fefca1219b4457b555ca1c85b2196c123d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
";
        
        $__internal_eb02d57183a7610b4ca772201b3477fefca1219b4457b555ca1c85b2196c123d->leave($__internal_eb02d57183a7610b4ca772201b3477fefca1219b4457b555ca1c85b2196c123d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_daf7f9dd87453f7a1bbcdf7f0717ea15eb670109c65d88fb416ab4dfdb41f78f = $this->env->getExtension("native_profiler");
        $__internal_daf7f9dd87453f7a1bbcdf7f0717ea15eb670109c65d88fb416ab4dfdb41f78f->enter($__internal_daf7f9dd87453f7a1bbcdf7f0717ea15eb670109c65d88fb416ab4dfdb41f78f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <nav class=\"navbar navbar-default\">
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

<h1>Task Edit</h1>
  ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
    <input type=\"submit\" value=\"Edit\" />
  ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

<ul>
  <li>
    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_list_show", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">Back to the list</a>
  </li>
  <li>
    ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
    <input type=\"submit\" value=\"Delete\">
    ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
  </li>
</ul>
";
        
        $__internal_daf7f9dd87453f7a1bbcdf7f0717ea15eb670109c65d88fb416ab4dfdb41f78f->leave($__internal_daf7f9dd87453f7a1bbcdf7f0717ea15eb670109c65d88fb416ab4dfdb41f78f_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_55b0c2a7077e082e8bb5e47de776b02e1aa00c1fadb9793cdcf4fe90c26e6913 = $this->env->getExtension("native_profiler");
        $__internal_55b0c2a7077e082e8bb5e47de776b02e1aa00c1fadb9793cdcf4fe90c26e6913->enter($__internal_55b0c2a7077e082e8bb5e47de776b02e1aa00c1fadb9793cdcf4fe90c26e6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_55b0c2a7077e082e8bb5e47de776b02e1aa00c1fadb9793cdcf4fe90c26e6913->leave($__internal_55b0c2a7077e082e8bb5e47de776b02e1aa00c1fadb9793cdcf4fe90c26e6913_prof);

    }

    public function getTemplateName()
    {
        return "admin/task/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 52,  140 => 51,  129 => 46,  124 => 44,  118 => 41,  111 => 37,  106 => 35,  102 => 34,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  68 => 18,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <nav class="navbar navbar-default">*/
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
/*     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*       <ul class="nav navbar-nav">*/
/*         <li class="active"><a href="{{ path('login') }}">Login <span class="sr-only">(current)</span></a></li>*/
/*         <li><a href="{{ path('logout') }}">Logout</a></li>*/
/*         <li><a href="{{ path('user_registration') }}">Register</a></li>*/
/*         <li><a href="{{ path('post_index') }}">Your ToDo Lists</a></li>*/
/*         <li><a href="{{ path('admin_list_index') }}">Administration</a></li>*/
/*       </ul>*/
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <h1>Task Edit</h1>*/
/*   {{ form_start(edit_form) }}*/
/*     {{ form_widget(edit_form) }}*/
/*     <input type="submit" value="Edit" />*/
/*   {{ form_end(edit_form) }}*/
/* */
/* <ul>*/
/*   <li>*/
/*     <a href="{{ path('admin_list_show', { 'id': id }) }}">Back to the list</a>*/
/*   </li>*/
/*   <li>*/
/*     {{ form_start(delete_form) }}*/
/*     <input type="submit" value="Delete">*/
/*     {{ form_end(delete_form) }}*/
/*   </li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* {% endblock %}*/
