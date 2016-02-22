<?php

/* admin/index.html.twig */
class __TwigTemplate_bc98c4491ac93ab126ff949b413bd53c0691ee563f431d605dfa25ea7076247f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_481f56eb5f1382e27cb52c4b943d0931258b1fb6009dc7fbbc0db05cdefaf732 = $this->env->getExtension("native_profiler");
        $__internal_481f56eb5f1382e27cb52c4b943d0931258b1fb6009dc7fbbc0db05cdefaf732->enter($__internal_481f56eb5f1382e27cb52c4b943d0931258b1fb6009dc7fbbc0db05cdefaf732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_481f56eb5f1382e27cb52c4b943d0931258b1fb6009dc7fbbc0db05cdefaf732->leave($__internal_481f56eb5f1382e27cb52c4b943d0931258b1fb6009dc7fbbc0db05cdefaf732_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a763137ab27cc16f264f9b8cfc845c9ee0235aac615d6746787587b7881b5395 = $this->env->getExtension("native_profiler");
        $__internal_a763137ab27cc16f264f9b8cfc845c9ee0235aac615d6746787587b7881b5395->enter($__internal_a763137ab27cc16f264f9b8cfc845c9ee0235aac615d6746787587b7881b5395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
<style>
th{
padding: 0px 10px ; 
}
td{
padding: 0px 10px ; 
}
h1{
    padding-left: 20px;
}
</style>
";
        
        $__internal_a763137ab27cc16f264f9b8cfc845c9ee0235aac615d6746787587b7881b5395->leave($__internal_a763137ab27cc16f264f9b8cfc845c9ee0235aac615d6746787587b7881b5395_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_94ebfded59ae3afc936608d0355c133dbadd3be7897dbd18d62e27d590fd97c4 = $this->env->getExtension("native_profiler");
        $__internal_94ebfded59ae3afc936608d0355c133dbadd3be7897dbd18d62e27d590fd97c4->enter($__internal_94ebfded59ae3afc936608d0355c133dbadd3be7897dbd18d62e27d590fd97c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "<nav class=\"navbar navbar-default\">
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
        // line 29
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Administration</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class=\"page-header\">
  <h1>List of todolists</h1>
  </div>
<table class=\"table\">
        <thead>
            <tr>
                ";
        // line 50
        echo "                <th>Title</th>
                <th>Creator</th>
                <th>Description</th>
                ";
        // line 54
        echo "                <th>Created</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todolists"]) ? $context["todolists"] : $this->getContext($context, "todolists")));
        foreach ($context['_seq'] as $context["_key"] => $context["todolist"]) {
            // line 60
            echo "            <tr>
                ";
            // line 62
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["todolist"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["todolist"], "creator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["todolist"], "description", array()), "html", null, true);
            echo "</td>
                ";
            // line 66
            echo "                <td>";
            if ($this->getAttribute($context["todolist"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todolist"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                   <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_list_show", array("id" => $this->getAttribute($context["todolist"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">show</a>
                            <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_list_edit", array("id" => $this->getAttribute($context["todolist"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">edit</a>
                            <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newtask", array("id" => $this->getAttribute($context["todolist"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">new task</a>
                        </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todolist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "        </tbody>
</table>
<ul>
    <li>
        <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("admin_list_new");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> New ToDo List </a>
    </li>
</ul>   
";
        
        $__internal_94ebfded59ae3afc936608d0355c133dbadd3be7897dbd18d62e27d590fd97c4->leave($__internal_94ebfded59ae3afc936608d0355c133dbadd3be7897dbd18d62e27d590fd97c4_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2091067ea2e1714d6d5cbc183a67f05325ec727abe70240d2b76bae02b621c52 = $this->env->getExtension("native_profiler");
        $__internal_2091067ea2e1714d6d5cbc183a67f05325ec727abe70240d2b76bae02b621c52->enter($__internal_2091067ea2e1714d6d5cbc183a67f05325ec727abe70240d2b76bae02b621c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_2091067ea2e1714d6d5cbc183a67f05325ec727abe70240d2b76bae02b621c52->leave($__internal_2091067ea2e1714d6d5cbc183a67f05325ec727abe70240d2b76bae02b621c52_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 86,  194 => 85,  183 => 80,  177 => 76,  166 => 71,  162 => 70,  158 => 69,  149 => 66,  145 => 64,  141 => 63,  136 => 62,  133 => 60,  129 => 59,  122 => 54,  117 => 50,  103 => 38,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  79 => 29,  67 => 19,  61 => 18,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* <style>*/
/* th{*/
/* padding: 0px 10px ; */
/* }*/
/* td{*/
/* padding: 0px 10px ; */
/* }*/
/* h1{*/
/*     padding-left: 20px;*/
/* }*/
/* </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <nav class="navbar navbar-default">*/
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
/* <div class="page-header">*/
/*   <h1>List of todolists</h1>*/
/*   </div>*/
/* <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 {#<th>Id</th>#}*/
/*                 <th>Title</th>*/
/*                 <th>Creator</th>*/
/*                 <th>Description</th>*/
/*                 {#<th>Published</th>#}*/
/*                 <th>Created</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for todolist in todolists %}*/
/*             <tr>*/
/*                 {#<td><a href="{{ path('admin_list_show', { 'id': todolist.id }) }}">{{ todolist.id }}</a></td>#}*/
/*                 <td>{{ todolist.title }}</td>*/
/*                 <td>{{ todolist.creator }}</td>*/
/*                 <td>{{ todolist.description }}</td>*/
/*                 {#<td>{% if todolist.published %}  <input type="checkbox" name="published" value="Yes" checked> {% else %} <input type="checkbox" name="published" value="No" >  {% endif %}</td>#}*/
/*                 <td>{% if todolist.created %}{{ todolist.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                    <div class="btn-group" role="group">*/
/*                             <a href="{{ path('admin_list_show', { 'id': todolist.id }) }}" class="btn btn-default">show</a>*/
/*                             <a href="{{ path('admin_list_edit', { 'id': todolist.id }) }}" class="btn btn-default">edit</a>*/
/*                             <a href="{{ path('newtask', { 'id': todolist.id }) }}" class="btn btn-default">new task</a>*/
/*                         </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/* </table>*/
/* <ul>*/
/*     <li>*/
/*         <a href="{{ path('admin_list_new') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New ToDo List </a>*/
/*     </li>*/
/* </ul>   */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* {% endblock %}*/
