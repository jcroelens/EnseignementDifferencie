<?php

/* EDiffAdminBundle:Competence:new.html.twig */
class __TwigTemplate_bad0e4611180fb0b9c3c02adbb05f1f0 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h1>Competence creation</h1>

<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Create</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("competence"), "html", null, true);
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EDiffAdminBundle:Competence:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
