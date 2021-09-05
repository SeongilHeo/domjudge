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

/* team/partials/submission.html.twig */
class __TwigTemplate_6c957bc43da75b7cd947acc215246febe22c275f0596d53e1aef0528c2b2d182 extends \Twig\Template
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
        if (((twig_test_empty(($context["judging"] ?? null)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 1), "submittime", [], "any", false, false, false, 1) >= twig_get_attribute($this->env, $this->source, ($context["current_team_contest"] ?? null), "endtime", [], "any", false, false, false, 1))) || (($context["verificationRequired"] ?? null) &&  !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "verified", [], "any", false, false, false, 1)))) {
            // line 2
            echo "    <div class=\"alert alert-danger\">제출기록이 없거나 아직 심사되지 않았습니다.</div>
";
        } else {
            // line 4
            echo "    <div class=\"container\">
        ";
            // line 5
            if ( !twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "valid", [], "any", false, false, false, 5)) {
                // line 6
                echo "            <div class=\"alert alert-warning\">이 제출은 무시됩니다. 점수에 반영되지 않습니다.
            </div>
        ";
            }
            // line 9
            echo "
        <div class=\"d-flex flex-row\">
            <div class=\"p-2\">
                Problem:
                <b>
                        <span class=\"probid\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 15), "contestProblem", [], "any", false, false, false, 15), "shortname", [], "any", false, false, false, 15), "html", null, true);
            echo "</span> -
                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 16), "contestProblem", [], "any", false, false, false, 16), "problem", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
                </b>
            </div>
            <div class=\"p-2\">
                제출시간:
                <b>";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\TwigExtension']->printtime(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 21), "submittime", [], "any", false, false, false, 21), null, ($context["current_team_contest"] ?? null)), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                언어:
                <b>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 25), "language", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
            echo "</b>
            </div>
            <div class=\"p-2\">
                컴파일:
                ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 29) == "compiler-error")) {
                // line 30
                echo "                    <span class=\"badge badge-danger\">failed</span>
                ";
            } else {
                // line 32
                echo "                    <span class=\"badge badge-success\">successful</span>
                ";
            }
            // line 34
            echo "            </div>
        </div>

        ";
            // line 37
            if ((twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 37) != "compiler-error")) {
                // line 38
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    제출 결과: ";
                // line 40
                echo $this->extensions['App\Twig\TwigExtension']->printResult(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 40));
                echo "
                </div>
            </div>
        ";
            }
            // line 44
            echo "
        ";
            // line 45
            if (($context["allowDownload"] ?? null)) {
                // line 46
                echo "            <div class=\"d-flex flex-row\">
                <div class=\"p-2\">
                    <a class=\"btn btn-primary\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("team_submission_download", ["submitId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "submission", [], "any", false, false, false, 48), "submitid", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\">
                        <i class=\"fa fa-download\"></i> 제출코드 다운로드
                    </a>
                </div>
            </div>
        ";
            }
            // line 54
            echo "
        ";
            // line 55
            if (((($context["showCompile"] ?? null) == 2) || ((($context["showCompile"] ?? null) == 1) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 55) == "compiler-error")))) {
                // line 56
                echo "            <hr/>
            <h4 class=\"text-center\">컴파일 출력</h4>
            ";
                // line 58
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 58))) {
                    // line 59
                    echo "                <pre class=\"output_text pre-scrollable\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "outputCompile", [0 => true], "method", false, false, false, 59), "html", null, true);
                    echo "</pre>
            ";
                } else {
                    // line 61
                    echo "                <p class=\"nodata\">컴파일러 오류나 경고가 없었습니다.</p>
            ";
                }
                // line 63
                echo "        ";
            }
            // line 64
            echo "
        ";
            // line 65
            if ((($context["showSampleOutput"] ?? null) && (twig_get_attribute($this->env, $this->source, ($context["judging"] ?? null), "result", [], "any", false, false, false, 65) != "compiler-error"))) {
                // line 66
                echo "            <hr/>
            <h4 class=\"text-center\">제공된 샘플 데이터에서 실행</h4>

            ";
                // line 69
                if (twig_test_empty(($context["runs"] ?? null))) {
                    // line 70
                    echo "                <p class=\"nodata\">사용 가능한 샘플 케이스가 없습니다.</p>
            ";
                } else {
                    // line 72
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["runs"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["run"]) {
                        // line 73
                        echo "                    <h5 id=\"run-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 73), "rank", [], "any", false, false, false, 73), "html", null, true);
                        echo "\" class=\"text-center mt-4\">Run ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 73), "rank", [], "any", false, false, false, 73), "html", null, true);
                        echo "</h5>

                    ";
                        // line 75
                        $context["judgingRun"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 75), "judgingRuns", [], "any", false, false, false, 75), "first", [], "any", false, false, false, 75);
                        // line 76
                        echo "                    ";
                        if (((($context["judgingRun"] ?? null) == null) || (twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 76) == null))) {
                            // line 77
                            echo "                        <p class=\"nodata\">아직 실행이 끝나지 않았습니다.</p>
                    ";
                        } else {
                            // line 79
                            echo "                        <div class=\"row\">
                            <div class=\"col-md-";
                            // line 80
                            echo twig_escape_filter($this->env, (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter(($context["size"] ?? null), 4)) : (4)), "html", null, true);
                            echo "\">
                                <table class=\"table table-sm table-striped\">
                                    <tr>
                                        <th>설명</th>
                                        <td>";
                            // line 84
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["run"], 0, [], "any", false, false, false, 84), "description", [0 => true], "method", false, false, false, 84), "html", null, true);
                            echo "</td>
                                    </tr>
                                    <tr>
                                        <th>실행시간</th>
                                        <td>";
                            // line 88
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runtime", [], "any", false, false, false, 88), "html", null, true);
                            echo " sec</td>
                                    </tr>
                                    <tr>
                                        <th>결과</th>
                                        <td>
                                                <span class=\"sol sol_";
                            // line 93
                            if ((twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 93) != "correct")) {
                                echo " in";
                            }
                            echo "correct\">
                                                    ";
                            // line 94
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["judgingRun"] ?? null), "runresult", [], "any", false, false, false, 94), "html", null, true);
                            echo "
                                                </span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h6 class=\"text-center\">출력결과</h6>
                        ";
                            // line 103
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 103))) {
                                // line 104
                                echo "                            <pre class=\"output_text\">
";
                                // line 105
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_run", [], "any", false, false, false, 105), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 107
                                echo "                            <p class=\"nodata\">출력 결과가 없습니다.</p>
                        ";
                            }
                            // line 109
                            echo "
                        <h6 class=\"text-center\">출력 결과 차이</h6>
                        ";
                            // line 111
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 111))) {
                                // line 112
                                echo "                            <pre class=\"output_text\">
";
                                // line 113
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_diff", [], "any", false, false, false, 113), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 115
                                echo "                            <p class=\"nodata\">출력 결과 변동 없음.</p>
                        ";
                            }
                            // line 117
                            echo "
                        <h6 class=\"text-center\">Error 출력 (info/debug/errors)</h6>
                        ";
                            // line 119
                            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 119))) {
                                // line 120
                                echo "                            <pre class=\"output_text\">
";
                                // line 121
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["run"], "output_error", [], "any", false, false, false, 121), "html", null, true);
                                echo "</pre>
                        ";
                            } else {
                                // line 123
                                echo "                            <p class=\"nodata\">stderr 출력이 없습니다.</p>
                        ";
                            }
                            // line 125
                            echo "                    ";
                        }
                        // line 126
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['run'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 127
                    echo "            ";
                }
                echo " ";
                // line 128
                echo "        ";
            }
            echo " ";
            // line 129
            echo "    </div>
";
        }
        // line 130
        echo " ";
    }

    public function getTemplateName()
    {
        return "team/partials/submission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 130,  305 => 129,  301 => 128,  297 => 127,  291 => 126,  288 => 125,  284 => 123,  279 => 121,  276 => 120,  274 => 119,  270 => 117,  266 => 115,  261 => 113,  258 => 112,  256 => 111,  252 => 109,  248 => 107,  243 => 105,  240 => 104,  238 => 103,  226 => 94,  220 => 93,  212 => 88,  205 => 84,  198 => 80,  195 => 79,  191 => 77,  188 => 76,  186 => 75,  178 => 73,  173 => 72,  169 => 70,  167 => 69,  162 => 66,  160 => 65,  157 => 64,  154 => 63,  150 => 61,  144 => 59,  142 => 58,  138 => 56,  136 => 55,  133 => 54,  124 => 48,  120 => 46,  118 => 45,  115 => 44,  108 => 40,  104 => 38,  102 => 37,  97 => 34,  93 => 32,  89 => 30,  87 => 29,  80 => 25,  73 => 21,  65 => 16,  61 => 15,  53 => 9,  48 => 6,  46 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "team/partials/submission.html.twig", "/opt/domjudge/domserver/webapp/templates/team/partials/submission.html.twig");
    }
}
