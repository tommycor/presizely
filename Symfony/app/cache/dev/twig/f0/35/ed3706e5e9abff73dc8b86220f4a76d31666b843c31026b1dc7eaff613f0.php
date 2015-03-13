<?php

/* PresizelyAPIBundle:Default:index.html.twig */
class __TwigTemplate_f035ed3706e5e9abff73dc8b86220f4a76d31666b843c31026b1dc7eaff613f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "API";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
    <!-- Modal -->
    <div class=\"modal fade\" id=\"api\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ApiPresizely\" aria-hidden=\"true\">
      <div class=\"modal-dialog\">
        
        ";
        // line 10
        if ( !(isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged"))) {
            // line 11
            echo "\t        <div class=\"modal-content login\">
\t          <div class=\"modal-header\">
\t            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>



\t\t\t\t<form action=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\" class=\"form-inline\">
\t\t\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
\t\t\t\t    <input type=\"text\" name=\"_username\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\"  class=\"form-control\" id=\"login\" placeholder=\"Login\"/>

\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control\" placeholder=\"•••••••\"/>

\t\t\t\t    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />

\t\t\t\t    <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
            echo "\"  class=\"btn btn-primary btn-xs green\">Connexion</button>
\t\t\t\t</form>




\t          </div>
\t          <div class=\"modal-body\">
\t           <h4>Avec <span>Presizely</span>, faites du prêt-à-porter votre sur-mesure.</h4>
\t           <p><i class=\"itlc\">Renseignez simplement vos mensurations sur les sites partenaires et Presizely se chargera de vous trouver l’article à votre taille.</i></p>
\t            <img class=\"img-responsive\" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/api/steps.png"), "html", null, true);
            echo "\"/>
\t            <div class=\"sep-top-xs\"></div>
\t            <h4>Pour cela, <span>deux possibilités</span> :</h4>
\t            <ul>
\t              <li>Prenez vous même <span>vos mensurations</span> (mètre ruban).</li>
\t              <li>Référencez <span>un vêtement</span> qui vous va parfaitement.</li>
\t            </ul>
\t          </div>
\t          <div class=\"modal-footer\">
\t            <p>Pas encore inscrit ? <a href=\"#\">Rejoignez la communauté Presizely</a></p>
\t          </div>
\t        </div>

\t\t";
        } else {
            // line 49
            echo "\t        <div class=\"modal-content logged\">
\t          <div class=\"modal-header\">
\t            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t            <ul class=\"nav nav-tabs\" role=\"tablist\">
\t              <li role=\"presentation\" class=\"active\"><a href=\"#taille\" aria-controls=\"taille\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-user fa-2x\">&nbsp;</i> Ma taille</a></li>
\t              <li role=\"presentation\"><a href=\"#proches\" aria-controls=\"proches\" role=\"tab\" data-toggle=\"tab\"><i class=\"fa fa-users fa-2x\">&nbsp;</i> Mes proches</a></li>
\t              <li class=\"pull-right\">
\t                <a id=\"dropdownMenuLogin\" href=\"#\" data-toggle=\"dropdown\" class=\"dropdown-toggle\">
\t                  <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portrait-sm-j.png"), "html", null, true);
            echo "\" class=\"img-portrait-xs img-circle\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "<span class=\"caret\"></span>
\t                </a>
\t                <ul aria-labelledby=\"dropdownMenuLogin\" class=\"dropdown-menu widget-box\">
\t                  <li role=\"presentation\">
\t                    <a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Menu profil 1</a>
\t                  </li>
\t                  <li role=\"presentation\">
\t                    <a href=\"#\" tabindex=\"-1\" role=\"menuitem\">Menu profil 2</a>
\t                  </li>
\t                </ul>
\t              </li>
\t            </ul>
\t          </div>
          ";
        }
        // line 71
        echo "
          <div class=\"modal-body\">
          <div class=\"tab-content\">
            <div role=\"tabpanel\" class=\"tab-pane active\" id=\"taille\">
            \t";
        // line 75
        if ((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article"))) {
            // line 76
            echo "\t              <img class=\"logo-p pull-left\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/api/logo.png"), "html", null, true);
            echo "\"/><h4><span>Presizely</span> vous recommande la taille suivante :</h4>
\t              <div class=\"clearfix\"></div>
\t              <div class=\"row\">
\t                <div class=\"col-md-3\">
\t                  <img class=\"center-block\" src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article2.png"), "html", null, true);
            echo "\"/>
\t                </div>
\t                <div class=\"col-md-2\">
\t                  <div class=\"center-block size-circle\"><span>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sizeFrLetter", array()), "html", null, true);
            echo "</span></div>
\t                </div>
\t                <div class=\"col-md-7\">
\t                  <p>Au niveau de la poitrine, la chemise est ample. <span>(+5cm)</span><br/>
\t                    La chemise est ajustée à la taille.<br/>
\t                    Au niveau des bras, la chemise est courte. <span>(-2cm)</span>
\t                  </p>
\t                  <button type=\"button\" class=\"btn btn-primary btn-sm green center-block\">Voir d'autres tailles disponibles</button>
\t                </div>
\t              </div>
\t\t\t\t
\t\t\t\t";
        } else {
            // line 95
            echo "
\t              <img class=\"logo-p pull-left\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/api/logo.png"), "html", null, true);
            echo "\"/><h4>Désolé, <span>Presizely</span> ne connais pas encore cet article!</h4>
\t              <div class=\"clearfix\"></div>\t\t\t

\t        \t";
        }
        // line 100
        echo "
            </div>
            <div role=\"tabpanel\" class=\"tab-pane\" id=\"proches\">
              <img class=\"logo-p pull-left\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/api/logo.png"), "html", null, true);
        echo "\"/><h4>Ce service <span>Presizely</span> arrive bientôt!</h4>
              
            </div>
          </div>
          </div>
          <div class=\"modal-footer\">
            <p>Pas encore inscrit ? <a href=\"#\">Rejoignez la communauté Presizely</a></p>
          </div>
        </div>

      </div>
    </div>
    <script>
\t\t\$(document).ready(function() {
\t\t\t\$('#api').modal('show');
\t\t\t\$('#api').on('hidden.bs.modal', function (e) {
\t\t\t\twindow.close();
\t\t\t});
\t\t\t});
    </script>
";
    }

    public function getTemplateName()
    {
        return "PresizelyAPIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 103,  186 => 100,  179 => 96,  176 => 95,  161 => 83,  155 => 80,  147 => 76,  145 => 75,  139 => 71,  120 => 57,  110 => 49,  93 => 35,  80 => 25,  71 => 19,  67 => 18,  63 => 17,  55 => 11,  53 => 10,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
