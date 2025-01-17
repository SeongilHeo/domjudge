<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* team/clarification.html.twig */
class __TwigTemplate_90c757b852fa4ef84b4b16f1488810437025aee4988617e1bf7144822b82d1ac extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "team/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/clarification.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "질문 보기 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <h1 class=\"text-center mt-4\">질문
    ";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, ($context["clarification"] ?? null), "senderId", [], "any", false, false, false, 7) == twig_get_attribute($this->env, $this->source, ($context["team"] ?? null), "teamid", [], "any", false, false, false, 7))) {
            echo "답변";
        }
        echo "</h1>

    ";
        // line 9
        $this->loadTemplate("team/partials/clarification_content.html.twig", "team/clarification.html.twig", 9)->display($context);
        // line 10
        echo "
    <div class=\"container clarificationform mt-3\">
    <button class=\"btn btn-secondary btn-sm\" data-toggle=\"collapse\" data-target=\"#collapsereplyform\"
            aria-expanded=\"false\" aria-controls=\"collapsereplyform\">
        <i class=\"fa fa-reply\"></i> 질문에 대해 답변하기
    </button>
    </div>

";
    }

    public function getTemplateName()
    {
        return "team/clarification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  69 => 9,  62 => 7,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/clarification.html.twig", "/opt/domjudge/domserver/webapp/templates/team/clarification.html.twig");
    }
}
