<?php

/* mylist/index.html.twig */
class __TwigTemplate_6822587bd280b100dced6977d3e13d3da236c30a61e4594a0b8cfd9fed593821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mylist/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f95b8a16d33f1caffc14148cb77a58113d7581ab551d036a8a8026b99447e25f = $this->env->getExtension("native_profiler");
        $__internal_f95b8a16d33f1caffc14148cb77a58113d7581ab551d036a8a8026b99447e25f->enter($__internal_f95b8a16d33f1caffc14148cb77a58113d7581ab551d036a8a8026b99447e25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mylist/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f95b8a16d33f1caffc14148cb77a58113d7581ab551d036a8a8026b99447e25f->leave($__internal_f95b8a16d33f1caffc14148cb77a58113d7581ab551d036a8a8026b99447e25f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e191f6781f8d2fad44e9477f84416b79467d67aaeeef6b9153fa0f6adcf26a4f = $this->env->getExtension("native_profiler");
        $__internal_e191f6781f8d2fad44e9477f84416b79467d67aaeeef6b9153fa0f6adcf26a4f->enter($__internal_e191f6781f8d2fad44e9477f84416b79467d67aaeeef6b9153fa0f6adcf26a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MyList list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Userid</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["myLists"]) ? $context["myLists"] : $this->getContext($context, "myLists")));
        foreach ($context['_seq'] as $context["_key"] => $context["myList"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylist_show", array("id" => $this->getAttribute($context["myList"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["myList"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["myList"], "userid", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["myList"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["myList"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylist_show", array("id" => $this->getAttribute($context["myList"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylist_edit", array("id" => $this->getAttribute($context["myList"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['myList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("mylist_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_e191f6781f8d2fad44e9477f84416b79467d67aaeeef6b9153fa0f6adcf26a4f->leave($__internal_e191f6781f8d2fad44e9477f84416b79467d67aaeeef6b9153fa0f6adcf26a4f_prof);

    }

    public function getTemplateName()
    {
        return "mylist/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>MyList list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Userid</th>*/
/*                 <th>Name</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for myList in myLists %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('mylist_show', { 'id': myList.id }) }}">{{ myList.id }}</a></td>*/
/*                 <td>{{ myList.userid }}</td>*/
/*                 <td>{{ myList.name }}</td>*/
/*                 <td>{{ myList.description }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('mylist_show', { 'id': myList.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('mylist_edit', { 'id': myList.id }) }}">edit</a>*/
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
/*             <a href="{{ path('mylist_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
