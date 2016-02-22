<?php

/* post/show.html.twig */
class __TwigTemplate_cfa0091b3194f6ae49602af50d6e3fd6f50e9d8f576651c33d63c1ba03125286 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_ce7dcaae6d7da2d2225881066503e97033b2b7467a8c7988ce7446f656c2eca1 = $this->env->getExtension("native_profiler");
        $__internal_ce7dcaae6d7da2d2225881066503e97033b2b7467a8c7988ce7446f656c2eca1->enter($__internal_ce7dcaae6d7da2d2225881066503e97033b2b7467a8c7988ce7446f656c2eca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce7dcaae6d7da2d2225881066503e97033b2b7467a8c7988ce7446f656c2eca1->leave($__internal_ce7dcaae6d7da2d2225881066503e97033b2b7467a8c7988ce7446f656c2eca1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_db3510a6da99fcc10db60a330491aa317e6bd80aa861ab009e2f1eb93b65c213 = $this->env->getExtension("native_profiler");
        $__internal_db3510a6da99fcc10db60a330491aa317e6bd80aa861ab009e2f1eb93b65c213->enter($__internal_db3510a6da99fcc10db60a330491aa317e6bd80aa861ab009e2f1eb93b65c213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Post</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creator</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "creator", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Text</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "text", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Published</th>
                <td>";
        // line 30
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "published", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "created", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "updated", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_db3510a6da99fcc10db60a330491aa317e6bd80aa861ab009e2f1eb93b65c213->leave($__internal_db3510a6da99fcc10db60a330491aa317e6bd80aa861ab009e2f1eb93b65c213_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  127 => 51,  121 => 48,  115 => 45,  103 => 38,  94 => 34,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Post</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ post.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Title</th>*/
/*                 <td>{{ post.title }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Creator</th>*/
/*                 <td>{{ post.creator }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ post.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Text</th>*/
/*                 <td>{{ post.text }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Published</th>*/
/*                 <td>{% if post.published %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created</th>*/
/*                 <td>{% if post.created %}{{ post.created|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated</th>*/
/*                 <td>{% if post.updated %}{{ post.updated|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('post_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('post_edit', { 'id': post.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
