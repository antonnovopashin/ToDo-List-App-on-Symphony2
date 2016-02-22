<?php

/* list/index.html.twig */
class __TwigTemplate_18e77adfa9497c702b3b01eeb84fed3afc0ad6f4c746bfb300d88f343b5a9843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "list/index.html.twig", 1);
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
        $__internal_47771a5c899d3951680bec17e4906e92c4d4662feb7b768086e77243d8ba47fe = $this->env->getExtension("native_profiler");
        $__internal_47771a5c899d3951680bec17e4906e92c4d4662feb7b768086e77243d8ba47fe->enter($__internal_47771a5c899d3951680bec17e4906e92c4d4662feb7b768086e77243d8ba47fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "list/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47771a5c899d3951680bec17e4906e92c4d4662feb7b768086e77243d8ba47fe->leave($__internal_47771a5c899d3951680bec17e4906e92c4d4662feb7b768086e77243d8ba47fe_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6066f478bd9df585e2495e6b75d0ab278a2fd0183d0530c7bf0dbca443a9b708 = $this->env->getExtension("native_profiler");
        $__internal_6066f478bd9df585e2495e6b75d0ab278a2fd0183d0530c7bf0dbca443a9b708->enter($__internal_6066f478bd9df585e2495e6b75d0ab278a2fd0183d0530c7bf0dbca443a9b708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

<style>
";
        // line 12
        echo "th{
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
        
        $__internal_6066f478bd9df585e2495e6b75d0ab278a2fd0183d0530c7bf0dbca443a9b708->leave($__internal_6066f478bd9df585e2495e6b75d0ab278a2fd0183d0530c7bf0dbca443a9b708_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c0a71fea4d04ea0b6e732c6de5a6277c313874ff53cdd1e6b690b8102ef2007 = $this->env->getExtension("native_profiler");
        $__internal_7c0a71fea4d04ea0b6e732c6de5a6277c313874ff53cdd1e6b690b8102ef2007->enter($__internal_7c0a71fea4d04ea0b6e732c6de5a6277c313874ff53cdd1e6b690b8102ef2007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
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
        // line 39
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Homepage</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li class=\"active\"><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Login <span class=\"sr-only\">(current)</span></a></li>
        <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></li>
        <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("user_registration");
        echo "\">Register</a></li>
        <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Your ToDo Lists</a></li>
        <li><a href=\"";
        // line 49
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
        // line 64
        echo "                <th>Title</th>
                ";
        // line 66
        echo "                <th>Description</th>
                
                ";
        // line 69
        echo "                <th>Created</th>
                
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todolists"]) ? $context["todolists"] : $this->getContext($context, "todolists")));
        foreach ($context['_seq'] as $context["_key"] => $context["todolist"]) {
            // line 76
            echo "            <tr>
                ";
            // line 78
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["todolist"], "title", array()), "html", null, true);
            echo "</td>
                ";
            // line 80
            echo "                <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["todolist"], "description", array()), "html", null, true);
            echo "</td>
                
                ";
            // line 83
            echo "                <td>";
            if ($this->getAttribute($context["todolist"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todolist"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                
                <td>
                   <div class=\"btn-group\" role=\"group\">
                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_show", array("id" => $this->getAttribute($context["todolist"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">show</a>
                       
                            <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute($context["todolist"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">edit</a>
                        
                            <a href=\"";
            // line 91
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
        // line 98
        echo "        </tbody>
    </table>

    <ul>
        <li>

            <a href=\"";
        // line 104
        echo $this->env->getExtension('routing')->getPath("post_new");
        echo "\" class=\"btn btn-default\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span> New ToDo List </a>
        </li>
    </ul> 
  

";
        
        $__internal_7c0a71fea4d04ea0b6e732c6de5a6277c313874ff53cdd1e6b690b8102ef2007->leave($__internal_7c0a71fea4d04ea0b6e732c6de5a6277c313874ff53cdd1e6b690b8102ef2007_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_044067f57b05558ba2d95d21cd4c6f2f933ba1c1c96f53e9beddb15578337ca8 = $this->env->getExtension("native_profiler");
        $__internal_044067f57b05558ba2d95d21cd4c6f2f933ba1c1c96f53e9beddb15578337ca8->enter($__internal_044067f57b05558ba2d95d21cd4c6f2f933ba1c1c96f53e9beddb15578337ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        echo "
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_044067f57b05558ba2d95d21cd4c6f2f933ba1c1c96f53e9beddb15578337ca8->leave($__internal_044067f57b05558ba2d95d21cd4c6f2f933ba1c1c96f53e9beddb15578337ca8_prof);

    }

    public function getTemplateName()
    {
        return "list/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 113,  216 => 112,  203 => 104,  195 => 98,  182 => 91,  177 => 89,  172 => 87,  162 => 83,  156 => 80,  151 => 78,  148 => 76,  144 => 75,  136 => 69,  132 => 66,  129 => 64,  112 => 49,  108 => 48,  104 => 47,  100 => 46,  96 => 45,  87 => 39,  73 => 27,  67 => 26,  47 => 12,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/* <style>*/
/* {#table {*/
/*    padding: 10px 20px ; */
/*    border-collapse: initial;*/
/*    border-spacing: 5px;*/
/* }#}*/
/* th{*/
/* padding: 0px 10px ; */
/* }*/
/* td{*/
/* padding: 0px 10px ; */
/* }*/
/* h1{*/
/*     padding-left: 20px;*/
/* }*/
/* */
/* */
/* </style>*/
/* */
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* */
/*          <nav class="navbar navbar-default">*/
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
/* <div class="page-header">*/
/*     <h1>List of todolists</h1>*/
/*   </div>*/
/*     <table class="table">*/
/*         <thead>*/
/*             <tr>*/
/*                 {#<th>Id</th>#}*/
/*                 <th>Title</th>*/
/*                 {#<th>Creator</th>#}*/
/*                 <th>Description</th>*/
/*                 */
/*                 {#<th>Published</th>#}*/
/*                 <th>Created</th>*/
/*                 */
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for todolist in todolists %}*/
/*             <tr>*/
/*                 {#<td><a href="{{ path('post_show', { 'id': todolist.id }) }}">{{ todolist.id }}</a></td>#}*/
/*                 <td>{{ todolist.title }}</td>*/
/*                 {#<td>{{ todolist.creator }}</td>#}*/
/*                 <td>{{ todolist.description }}</td>*/
/*                 */
/*                 {#<td>{% if todolist.published %}  <input type="checkbox" name="published" value="Yes" checked> {% else %} <input type="checkbox" name="published" value="No" >  {% endif %}</td>#}*/
/*                 <td>{% if todolist.created %}{{ todolist.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 */
/*                 <td>*/
/*                    <div class="btn-group" role="group">*/
/*                             <a href="{{ path('post_show', { 'id': todolist.id }) }}" class="btn btn-default">show</a>*/
/*                        */
/*                             <a href="{{ path('post_edit', { 'id': todolist.id }) }}" class="btn btn-default">edit</a>*/
/*                         */
/*                             <a href="{{ path('newtask', { 'id': todolist.id }) }}" class="btn btn-default">new task</a>*/
/*                            */
/*                             */
/*                         </div>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/* */
/*             <a href="{{ path('post_new') }}" class="btn btn-default"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> New ToDo List </a>*/
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
