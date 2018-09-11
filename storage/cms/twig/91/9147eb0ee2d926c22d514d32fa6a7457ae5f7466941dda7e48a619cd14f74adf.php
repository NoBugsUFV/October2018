<?php

/* /var/www/projetos/october/themes/no-bugs/pages/home.htm */
class __TwigTemplate_e3ca56378145d4243944b6ace73086e44341aef94e2950c95b98e45735ebedec extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class='container-fluid'>
    <p class='display-4'> Teste </p>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/projetos/october/themes/no-bugs/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class='container-fluid'>
    <p class='display-4'> Teste </p>
</div>", "/var/www/projetos/october/themes/no-bugs/pages/home.htm", "");
    }
}
