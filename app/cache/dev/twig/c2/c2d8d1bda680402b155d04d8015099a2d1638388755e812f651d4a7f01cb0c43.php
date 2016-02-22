<?php

/* post/index.html.twig */
class __TwigTemplate_bb55890529246977ca70b2499a3dce58aac25bd949c89bcb82cb43d80b74383d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_7cb15539ceb23a3713d7ab435377ec597d65d1ecfab7293a0418a4693eae58ee = $this->env->getExtension("native_profiler");
        $__internal_7cb15539ceb23a3713d7ab435377ec597d65d1ecfab7293a0418a4693eae58ee->enter($__internal_7cb15539ceb23a3713d7ab435377ec597d65d1ecfab7293a0418a4693eae58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb15539ceb23a3713d7ab435377ec597d65d1ecfab7293a0418a4693eae58ee->leave($__internal_7cb15539ceb23a3713d7ab435377ec597d65d1ecfab7293a0418a4693eae58ee_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e189bce33a4491f026c40ca0744501f54963f63b4b0f82c922ba134dc8229ec = $this->env->getExtension("native_profiler");
        $__internal_2e189bce33a4491f026c40ca0744501f54963f63b4b0f82c922ba134dc8229ec->enter($__internal_2e189bce33a4491f026c40ca0744501f54963f63b4b0f82c922ba134dc8229ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<style>
table {
   padding: 10px 20px ; 
   border-collapse: initial;
}
th{
padding: 0px 10px ; 
}
td{
padding: 0px 10px ; 
}

</style>

";
        
        $__internal_2e189bce33a4491f026c40ca0744501f54963f63b4b0f82c922ba134dc8229ec->leave($__internal_2e189bce33a4491f026c40ca0744501f54963f63b4b0f82c922ba134dc8229ec_prof);

    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        $__internal_72cff86768be5f746a70a7ead69700d452dbcfd2d84a667ec6654289708e5cf5 = $this->env->getExtension("native_profiler");
        $__internal_72cff86768be5f746a70a7ead69700d452dbcfd2d84a667ec6654289708e5cf5->enter($__internal_72cff86768be5f746a70a7ead69700d452dbcfd2d84a667ec6654289708e5cf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 22
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
        // line 34
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <h1>List of todolists</h1>

    <table >
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Creator</th>
                <th>Description</th>
                <th>Text</th>
                <th>Published</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 69
            echo "            <tr>
                <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "creator", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "text", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 75
            if ($this->getAttribute($context["post"], "published", array())) {
                echo "  <input type=\"checkbox\" name=\"published\" value=\"Yes\" checked> ";
            } else {
                echo " <input type=\"checkbox\" name=\"published\" value=\"No\" >  ";
            }
            echo "</td>
                <td>";
            // line 76
            if ($this->getAttribute($context["post"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 77
            if ($this->getAttribute($context["post"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newtask", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">new task</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "        </tbody>
    </table>

    <ul>
        <li>

            <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\" class=\"btn btn-default\">Create new ToDo List</a>
        </li>
    </ul> 
  

";
        
        $__internal_72cff86768be5f746a70a7ead69700d452dbcfd2d84a667ec6654289708e5cf5->leave($__internal_72cff86768be5f746a70a7ead69700d452dbcfd2d84a667ec6654289708e5cf5_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9b1c9800de478fe5b7cd1c0de3f9a72f3c42ed1363a0c0c9cc8ec16d1afb93f = $this->env->getExtension("native_profiler");
        $__internal_b9b1c9800de478fe5b7cd1c0de3f9a72f3c42ed1363a0c0c9cc8ec16d1afb93f->enter($__internal_b9b1c9800de478fe5b7cd1c0de3f9a72f3c42ed1363a0c0c9cc8ec16d1afb93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_b9b1c9800de478fe5b7cd1c0de3f9a72f3c42ed1363a0c0c9cc8ec16d1afb93f->leave($__internal_b9b1c9800de478fe5b7cd1c0de3f9a72f3c42ed1363a0c0c9cc8ec16d1afb93f_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 108,  231 => 107,  218 => 99,  210 => 93,  198 => 87,  192 => 84,  186 => 81,  177 => 77,  171 => 76,  163 => 75,  159 => 74,  155 => 73,  151 => 72,  147 => 71,  141 => 70,  138 => 69,  134 => 68,  106 => 43,  102 => 42,  98 => 41,  94 => 40,  85 => 34,  71 => 22,  65 => 21,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <style>*/
/* table {*/
/*    padding: 10px 20px ; */
/*    border-collapse: initial;*/
/* }*/
/* th{*/
/* padding: 0px 10px ; */
/* }*/
/* td{*/
/* padding: 0px 10px ; */
/* }*/
/* */
/* </style>*/
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
/*         */
/*       </ul>*/
/*       */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/*     <h1>List of todolists</h1>*/
/* */
/*     <table >*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Title</th>*/
/*                 <th>Creator</th>*/
/*                 <th>Description</th>*/
/*                 <th>Text</th>*/
/*                 <th>Published</th>*/
/*                 <th>Created</th>*/
/*                 <th>Updated</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for post in posts %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('post_show', { 'id': post.id }) }}">{{ post.id }}</a></td>*/
/*                 <td>{{ post.title }}</td>*/
/*                 <td>{{ post.creator }}</td>*/
/*                 <td>{{ post.description }}</td>*/
/*                 <td>{{ post.text }}</td>*/
/*                 <td>{% if post.published %}  <input type="checkbox" name="published" value="Yes" checked> {% else %} <input type="checkbox" name="published" value="No" >  {% endif %}</td>*/
/*                 <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('post_show', { 'id': post.id }) }}" class="btn btn-default">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('post_edit', { 'id': post.id }) }}" class="btn btn-default">edit</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('newtask', { 'id': post.id }) }}" class="btn btn-default">new task</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/* */
/*             <a href="{{ path('post_new') }}" class="btn btn-default">Create new ToDo List</a>*/
/*         </li>*/
/*     </ul> */
/*   */
/* */
/* {% endblock %}*/
/* */
/* */
/*  {% block javascripts %}*/
/* */
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
