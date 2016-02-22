<?php

/* admin/edit.html.twig */
class __TwigTemplate_9da20231a20a5cb8448d9d936521845e6f37b41bec4c55d672345c8e75826c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/edit.html.twig", 1);
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
        $__internal_a874030490b287e1521ebb46c6c7215db0bf3fa99af7180ddc43f6b99d92c660 = $this->env->getExtension("native_profiler");
        $__internal_a874030490b287e1521ebb46c6c7215db0bf3fa99af7180ddc43f6b99d92c660->enter($__internal_a874030490b287e1521ebb46c6c7215db0bf3fa99af7180ddc43f6b99d92c660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a874030490b287e1521ebb46c6c7215db0bf3fa99af7180ddc43f6b99d92c660->leave($__internal_a874030490b287e1521ebb46c6c7215db0bf3fa99af7180ddc43f6b99d92c660_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3d18de159250b68d0796e6d4899d5b174a9b052e2c0a8686955ae859be721afd = $this->env->getExtension("native_profiler");
        $__internal_3d18de159250b68d0796e6d4899d5b174a9b052e2c0a8686955ae859be721afd->enter($__internal_3d18de159250b68d0796e6d4899d5b174a9b052e2c0a8686955ae859be721afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">
";
        
        $__internal_3d18de159250b68d0796e6d4899d5b174a9b052e2c0a8686955ae859be721afd->leave($__internal_3d18de159250b68d0796e6d4899d5b174a9b052e2c0a8686955ae859be721afd_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3b3cd62dee673c764cf8cb7bd6c27d61c5c8beb0c6fd2126da18881ac17ab66 = $this->env->getExtension("native_profiler");
        $__internal_d3b3cd62dee673c764cf8cb7bd6c27d61c5c8beb0c6fd2126da18881ac17ab66->enter($__internal_d3b3cd62dee673c764cf8cb7bd6c27d61c5c8beb0c6fd2126da18881ac17ab66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
    
    <h1>ToDo List Edit</h1>

    ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("admin_list_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d3b3cd62dee673c764cf8cb7bd6c27d61c5c8beb0c6fd2126da18881ac17ab66->leave($__internal_d3b3cd62dee673c764cf8cb7bd6c27d61c5c8beb0c6fd2126da18881ac17ab66_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_704293e1d4a75d9458280c405d1618eaabed95d75e9b5da490fda48aab7cf31e = $this->env->getExtension("native_profiler");
        $__internal_704293e1d4a75d9458280c405d1618eaabed95d75e9b5da490fda48aab7cf31e->enter($__internal_704293e1d4a75d9458280c405d1618eaabed95d75e9b5da490fda48aab7cf31e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 58
        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_704293e1d4a75d9458280c405d1618eaabed95d75e9b5da490fda48aab7cf31e->leave($__internal_704293e1d4a75d9458280c405d1618eaabed95d75e9b5da490fda48aab7cf31e_prof);

    }

    public function getTemplateName()
    {
        return "admin/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 58,  146 => 57,  135 => 52,  130 => 50,  124 => 47,  117 => 43,  112 => 41,  108 => 40,  94 => 29,  90 => 28,  86 => 27,  82 => 26,  78 => 25,  69 => 19,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  <nav class="navbar navbar-default">*/
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
/*     <h1>ToDo List Edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_list_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
/*  {% block javascripts %}*/
/* <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*  {% endblock %}*/
