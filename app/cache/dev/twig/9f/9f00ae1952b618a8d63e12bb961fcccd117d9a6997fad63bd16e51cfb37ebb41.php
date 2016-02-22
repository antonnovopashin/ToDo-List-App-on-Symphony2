<?php

/* list/show.html.twig */
class __TwigTemplate_98cc853fe8de4cb4dc14d58756069d74afdc4b38cb269ff73ca992c96bd150b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "list/show.html.twig", 1);
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
        $__internal_8cadc1c60326467212485dc19c509bc767a42f3479ede22ca385490eca5abbef = $this->env->getExtension("native_profiler");
        $__internal_8cadc1c60326467212485dc19c509bc767a42f3479ede22ca385490eca5abbef->enter($__internal_8cadc1c60326467212485dc19c509bc767a42f3479ede22ca385490eca5abbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cadc1c60326467212485dc19c509bc767a42f3479ede22ca385490eca5abbef->leave($__internal_8cadc1c60326467212485dc19c509bc767a42f3479ede22ca385490eca5abbef_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a97f14fd27ecb475ca10b43214fdd8ae80752030334145eba49328bbd5f7b7b2 = $this->env->getExtension("native_profiler");
        $__internal_a97f14fd27ecb475ca10b43214fdd8ae80752030334145eba49328bbd5f7b7b2->enter($__internal_a97f14fd27ecb475ca10b43214fdd8ae80752030334145eba49328bbd5f7b7b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
";
        
        $__internal_a97f14fd27ecb475ca10b43214fdd8ae80752030334145eba49328bbd5f7b7b2->leave($__internal_a97f14fd27ecb475ca10b43214fdd8ae80752030334145eba49328bbd5f7b7b2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3b23b79f71e4cb97c0d443e36dc5d7b758bd5d48844ef704d35d911be8fbf58 = $this->env->getExtension("native_profiler");
        $__internal_d3b23b79f71e4cb97c0d443e36dc5d7b758bd5d48844ef704d35d911be8fbf58->enter($__internal_d3b23b79f71e4cb97c0d443e36dc5d7b758bd5d48844ef704d35d911be8fbf58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
<div class=\"page-header\">
  <h1>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo " ToDo List <small>(";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo ")</small></h1>       
</div>
<table class=\"table\">
        <thead>
            <tr>
                ";
        // line 39
        echo "                <th>Title</th>
                ";
        // line 41
        echo "                <th>Description</th>
                <th>Done</th>
                ";
        // line 43
        echo "  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 49
            echo "            <tr>
                ";
            // line 51
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 53
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            if ($this->getAttribute($context["task"], "done", array())) {
                echo "  <input type=\"checkbox\" name=\"published\" value=\"Yes\" checked> ";
            } else {
                echo " <input type=\"checkbox\" name=\"published\" value=\"No\" >  ";
            }
            echo "</td>
                ";
            // line 56
            echo "                <td>
                   <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("edittask", array("id" => $this->getAttribute($context["task"], "id", array()), "taskid" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">edit</a>
                        </div>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "        </tbody>
</table>

<a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newtask", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">new task</a>
           <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Edit List</a>
    
            ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete List\" class=\"btn btn-default\">
            ";
        // line 71
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
   
            <a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\" class=\"btn btn-default\">Back to the list of todolists</a> 
    
";
        
        $__internal_d3b23b79f71e4cb97c0d443e36dc5d7b758bd5d48844ef704d35d911be8fbf58->leave($__internal_d3b23b79f71e4cb97c0d443e36dc5d7b758bd5d48844ef704d35d911be8fbf58_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b8d5c47006c25e69df4a4b4fbed58d07414671b6e673fc5a5461214da45e42d4 = $this->env->getExtension("native_profiler");
        $__internal_b8d5c47006c25e69df4a4b4fbed58d07414671b6e673fc5a5461214da45e42d4->enter($__internal_b8d5c47006c25e69df4a4b4fbed58d07414671b6e673fc5a5461214da45e42d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_b8d5c47006c25e69df4a4b4fbed58d07414671b6e673fc5a5461214da45e42d4->leave($__internal_b8d5c47006c25e69df4a4b4fbed58d07414671b6e673fc5a5461214da45e42d4_prof);

    }

    public function getTemplateName()
    {
        return "list/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 78,  199 => 77,  189 => 73,  184 => 71,  179 => 69,  174 => 67,  170 => 66,  165 => 63,  154 => 58,  150 => 56,  142 => 54,  137 => 53,  132 => 51,  129 => 49,  125 => 48,  118 => 43,  114 => 41,  111 => 39,  101 => 33,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  68 => 18,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
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
/*         <li><a href="{{ path('admin_list_index') }}">Administration</a></li>  */
/*       </ul>     */
/*     </div><!-- /.navbar-collapse -->*/
/*   </div><!-- /.container-fluid -->*/
/* </nav>*/
/* <div class="page-header">*/
/*   <h1>{{ post.title }} ToDo List <small>({{ post.description }})</small></h1>       */
/* </div>*/
/* <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 {#<th>Id</th>#}*/
/*                 <th>Title</th>*/
/*                 {#<th>Creator</th>#}*/
/*                 <th>Description</th>*/
/*                 <th>Done</th>*/
/*                 {#<th>Created</th>#}  */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for task in tasks %}*/
/*             <tr>*/
/*                 {#<td><a href="{{ path('post_show', { 'id': todolist.id }) }}">{{ todolist.id }}</a></td>#}*/
/*                 <td>{{ task.title }}</td>*/
/*                 {#<td>{{ todolist.creator }}</td>#}*/
/*                 <td>{{ task.description }}</td>*/
/*                 <td>{% if task.done %}  <input type="checkbox" name="published" value="Yes" checked> {% else %} <input type="checkbox" name="published" value="No" >  {% endif %}</td>*/
/*                 {#<td>{% if todolist.created %}{{ todolist.created|date('Y-m-d H:i:s') }}{% endif %}</td>#}*/
/*                 <td>*/
/*                    <div class="btn-group" role="group">*/
/*                             <a href="{{ path('edittask', { 'id': task.id,'taskid': post.id }) }}" class="btn btn-default">edit</a>*/
/*                         </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/* </table>*/
/* */
/* <a href="{{ path('newtask', { 'id': post.id }) }}" class="btn btn-default">new task</a>*/
/*            <a href="{{ path('post_edit', { 'id': post.id }) }}" class="btn btn-default">Edit List</a>*/
/*     */
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete List" class="btn btn-default">*/
/*             {{ form_end(delete_form) }}*/
/*    */
/*             <a href="{{ path('post_index') }}" class="btn btn-default">Back to the list of todolists</a> */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/* {% endblock %}*/
