<?php

/* mylist/show.html.twig */
class __TwigTemplate_7b12eeb4fbc59a8cfb2070dd46849756a9d39d47e77e99cb6ddfc5ce91c72156 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "mylist/show.html.twig", 1);
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
        $__internal_781ad8c11b086446c4c59dad8c8ced3b80d98588ff7836753921ab4f2d7c4e9f = $this->env->getExtension("native_profiler");
        $__internal_781ad8c11b086446c4c59dad8c8ced3b80d98588ff7836753921ab4f2d7c4e9f->enter($__internal_781ad8c11b086446c4c59dad8c8ced3b80d98588ff7836753921ab4f2d7c4e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mylist/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_781ad8c11b086446c4c59dad8c8ced3b80d98588ff7836753921ab4f2d7c4e9f->leave($__internal_781ad8c11b086446c4c59dad8c8ced3b80d98588ff7836753921ab4f2d7c4e9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8431729d7a66c8b8de83ac41a158563e990fdee8dfe9fedac327311e8b75f22 = $this->env->getExtension("native_profiler");
        $__internal_c8431729d7a66c8b8de83ac41a158563e990fdee8dfe9fedac327311e8b75f22->enter($__internal_c8431729d7a66c8b8de83ac41a158563e990fdee8dfe9fedac327311e8b75f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MyList</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myList"]) ? $context["myList"] : $this->getContext($context, "myList")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Userid</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myList"]) ? $context["myList"] : $this->getContext($context, "myList")), "userid", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myList"]) ? $context["myList"] : $this->getContext($context, "myList")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["myList"]) ? $context["myList"] : $this->getContext($context, "myList")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("mylist_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mylist_edit", array("id" => $this->getAttribute((isset($context["myList"]) ? $context["myList"] : $this->getContext($context, "myList")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c8431729d7a66c8b8de83ac41a158563e990fdee8dfe9fedac327311e8b75f22->leave($__internal_c8431729d7a66c8b8de83ac41a158563e990fdee8dfe9fedac327311e8b75f22_prof);

    }

    public function getTemplateName()
    {
        return "mylist/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>MyList</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ myList.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Userid</th>*/
/*                 <td>{{ myList.userid }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ myList.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ myList.description }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('mylist_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('mylist_edit', { 'id': myList.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
