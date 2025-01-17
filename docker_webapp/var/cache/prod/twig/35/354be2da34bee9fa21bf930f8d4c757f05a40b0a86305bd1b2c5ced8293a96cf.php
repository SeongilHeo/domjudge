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

/* team/print_result.html.twig */
class __TwigTemplate_0742c9076d8b21b60887575b056f211d3ddf75cee9f2e509e79b2a6bea7fa3c9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'extrahead' => [$this, 'block_extrahead'],
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
        $this->parent = $this->loadTemplate("team/base.html.twig", "team/print_result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - 출력";
    }

    // line 5
    public function block_extrahead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("extrahead", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
    <div class=\"container pt-5\">
        <h1 class=\"text-center\">출력 파일</h1>

        <pre class=\"output_text m-3\">
";
        // line 15
        echo twig_escape_filter($this->env, ($context["output"] ?? null), "html", null, true);
        echo "
</pre>

        ";
        // line 18
        if (($context["success"] ?? null)) {
            // line 19
            echo "            <div class=\"alert alert-success\">파일이 인쇄되었습니다</div>
        ";
        } else {
            // line 21
            echo "            <div class=\"alert alert-danger\">출력하는 동안 오류가 발생했습니다. 운영진에게 문의하십시오.</div>
        ";
        }
        // line 23
        echo "
        <a href=\"./\" class=\"btn btn-secondary mt-3\">닫기</a>
    </div>

";
    }

    public function getTemplateName()
    {
        return "team/print_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 23,  90 => 21,  86 => 19,  84 => 18,  78 => 15,  71 => 10,  67 => 9,  60 => 6,  56 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/print_result.html.twig", "/opt/domjudge/domserver/webapp/templates/team/print_result.html.twig");
    }
}
