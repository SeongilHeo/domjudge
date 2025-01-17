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

/* team/submit_modal.html.twig */
class __TwigTemplate_f04c91f2943d8bce685e3fed1bed7c1815737fd35077b9e2034d53fe29854a56 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">
                    제출
                </h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            ";
        // line 12
        if ((twig_test_empty(($context["current_team_contest"] ?? null)) || ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JURY") &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "freezeData", [], "any", false, false, false, 12), "started", [], "any", false, false, false, 12)))) {
            // line 13
            echo "                <div class=\"modal-body\">
                    <div class=\"alert alert-danger\" role=\"alert\">대회가 아직 시작되지 않았으므로 제출할 수 없습니다.</div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                </div>
            ";
        } else {
            // line 20
            echo "                ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                <div class=\"modal-body\">
                    ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "code", [], "any", false, false, false, 22), 'row');
            echo "
                    ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "problem", [], "any", false, false, false, 23), 'row');
            echo "
                    ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "language", [], "any", false, false, false, 24), 'row');
            echo "
                    <div class=\"form-group\" data-entry-point>
                        ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 26), 'label');
            echo "
                        ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 27), 'widget');
            echo "
                        ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "entry_point", [], "any", false, false, false, 28), 'help');
            echo "
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">취소</button>
                    <button type=\"submit\" class=\"btn-success btn\">
                        <i class=\"fas fa-cloud-upload-alt\"></i> 제출
                    </button>
                </div>
                ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
            ";
        }
        // line 39
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "team/submit_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 39,  100 => 37,  88 => 28,  84 => 27,  80 => 26,  75 => 24,  71 => 23,  67 => 22,  61 => 20,  52 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/submit_modal.html.twig", "/opt/domjudge/domserver/webapp/templates/team/submit_modal.html.twig");
    }
}
