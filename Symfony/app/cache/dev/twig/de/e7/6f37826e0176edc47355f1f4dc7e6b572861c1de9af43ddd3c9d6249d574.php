<?php

/* PresizelyUserBundle:User:Index.html.twig */
class __TwigTemplate_dee76f37826e0176edc47355f1f4dc7e6b572861c1de9af43ddd3c9d6249d574 extends Twig_Template
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
            'styles' => array($this, 'block_styles'),
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
        echo " Home";
    }

    // line 3
    public function block_styles($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("styles/home.css"), "html", null, true);
        echo "\">";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"load\"></div><!--[if lt IE 9]>
    <p class=\"browsehappy\">You are using an strong outdated browser. <br>Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class=\"home page\">
      <!-- Start Nav Section-->
      <nav id=\"main-navigation\" role=\"navigation\" class=\"navbar navbar-fixed-top navbar-standard\">
        <a href=\"javascript:void(0)\" class=\"search_button\"><i class=\"fa fa-search\"></i></a>
        <form action=\"search.html\" method=\"get\" role=\"search\" class=\"h_search_form\">
          <div class=\"container\">
            <div class=\"h_search_form_wrapper\">
              <div class=\"input-group\"><span class=\"input-group-btn\">
                  <button type=\"submit\" class=\"btn btn-sm\"><i class=\"fa fa-search fa-lg\"></i></button></span>
                <input type=\"text\" placeholder=\"Rechercher...\" class=\"form-control\">
              </div>
              <div class=\"h_search_close\"><a href=\"#\"><i class=\"fa fa-times\"></i></a></div>
            </div>
          </div>
        </form>
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\"><i class=\"fa fa-align-justify fa-lg\"></i></button><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("presizely_user_home");
        echo "\" class=\"navbar-brand\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-white.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo-white\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-dark.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo-dark\"></a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right service-nav\">

                ";
        // line 31
        if ( !(isset($context["logged"]) ? $context["logged"] : $this->getContext($context, "logged"))) {
            // line 32
            echo "                  <li><a id=\"dropdownMenuLogin\" href=\"#\" data-toggle=\"dropdown\" class=\"upper dropdown-toggle\"><span class=\"btn btn-primary btn-xs\">Se connecter</span></a>

                    <div aria-labelledby=\"dropdownMenuLogin\" class=\"dropdown-menu widget-box\">                
                      <form action=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
                          <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 36
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />

                          <div class=\"form-group\">
                            <label class=\"sr-only\">Nom d'utilisateur ou Email</label>
                            <input type=\"text\" name=\"_username\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\" required=\"required\"  class=\"form-control\" id=\"login\" placeholder=\"Nom d'utilisateur ou Email\" class=\"form-control input-lg\"/>
                          </div>

                          <div class=\"form-group\">
                            <label class=\"sr-only\">Mot de passe</label>
                            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"  class=\"form-control input-lg\" placeholder=\"Mot de passe\"/>
                          </div>

                          <div class=\"form-inline form-group\">
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
            echo "\"  class=\"btn btn-primary btn-xs\">Connexion</button>
                          </div>

                          <div class=\"checkbox\">
                            <label>
                              <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" ><small>Se souvenir de moi</small>
                            </label>
                          </div>
                          <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("presizely_user_test_register");
            echo "\"><small>Créer un compte</small></a>
                      </form>


                    </div>
                  </li>

              ";
        } else {
            // line 65
            echo "
                <li class=\"nav-icon\">
                  <a id=\"history\" href=\"#\" class=\"upper\">
                  <p class=\"text-center\"><span class=\"fa-stack fa-lg fa-fw\">
                      <i class=\"fa fa-history fa-2x fa-fw\"></i>
                    </span>&nbsp;
                    <span class=\"badge badge-lg-red\">2</span>
                  </p>
                  </a>
                </li>
                <li class=\"nav-icon\">
                  <a id=\"notification\" href=\"#\" class=\"upper\">
                    <p class=\"text-center\"><span class=\"fa-stack fa-lg fa-fw\">
                        <i class=\"fa fa-circle-o fa-stack-2x fa-fw\"></i>
                        <i class=\"fa fa-exclamation fa-stack-1x fa-fw\"></i>
                      </span>&nbsp;
                      <span class=\"badge badge-lg-red\">5</span>
                    </p>
                  </a>
                </li>
                <li class=\"nav-icon\">
                  <a id=\"community\" href=\"#\" class=\"upper\">
                    <p class=\"text-center\"><span class=\"fa-stack fa-lg fa-fw\">
                      <i class=\"fa fa-circle-o fa-stack-2x fa-fw\"></i>
                      <i class=\"fa fa-share-alt fa-stack-1x fa-fw\"></i>
                    </span>&nbsp;
                    <span class=\"badge badge-lg-red\">7</span>
                    </p>
                  </a>
                </li>
                <li class=\"portrait-icon\">
                  <a id=\"dropdownMenuLogin\" href=\"";
            // line 96
            echo $this->env->getExtension('routing')->getPath("presizely_user_dashboard");
            echo "\" class=\"portrait upper dropdown-toggle\">
                    <span>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
            echo "</span>
                    <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portrait.png"), "html", null, true);
            echo "\" class=\"img-portrait img-rounded\">
                    <img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portrait-sm.png"), "html", null, true);
            echo "\" class=\"img-portrait-sm img-rounded\">
                  </a>
                </li>

              ";
        }
        // line 104
        echo "
            </ul>
            <button type=\"button\" class=\"navbar-toggle\"><i class=\"fa fa-close fa-lg\"></i></button>
            <ul id=\"one-page-menu\" role=\"menu\" class=\"nav navbar-nav navbar-left\">
              <li><a href=\"#home\" title=\"Accueil\" data-ref=\"home\">Accueil</a></li>
              <li><a href=\"#services\" title=\"Services\" data-ref=\"services\">Services</a></li>
              <li><a href=\"#application\" title=\"Application\" data-ref=\"application\">Application</a></li>
              <li><a href=\"#blog\" title=\"Blog\" data-ref=\"blog\">Actualités</a></li>
              <li><a href=\"#team\" title=\"Equipe\" data-ref=\"team\">Equipe</a></li>
              <li><a href=\"#contacts\" title=\"Contact\" data-ref=\"contacts\">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Start Home Section-->
      <section id=\"home\" class=\"demo-1\">
        <!--     Codrops top bar-->
        <div id=\"slider\" style=\"display:none;\" class=\"sl-slider-wrapper\">
          <div class=\"sl-slider\">
            <!-- start slide-->
            <div data-orientation=\"horizontal\" data-slice1-rotation=\"-25\" data-slice2-rotation=\"-25\" data-slice1-scale=\"2\" data-slice2-scale=\"2\" class=\"sl-slide\">
              <div style=\"background: url(";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/intro-home.jpg"), "html", null, true);
        echo ");\" class=\"sl-slide-inner\">
                <div class=\"slide-container\">
                  <div class=\"slide-content text-center\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/logo.svg"), "html", null, true);
        echo "\" alt=\"Presizely\" class=\"deco\" width=\"200\">
                    <h2 class=\"main-title\" id=\"titre-slide\">Votre  solution  de  taille</h2>
                    <blockquote>
                      <p>Avec Presizely, trouvez la bonne taille en un instant !</p>
                      <a href=\"http://www.youtube.com/watch?v=y9n_VG4FAv4\" title=\"Vidéo de présentation de l'équipe Presizely\" class=\"btn btn-light btn-bordered btn-lg lightbox\">Vidéo de l'équipe</a>
                      <a id=\"teaser\" href=\"http://www.youtube.com/watch?v=oZZAF2CUjrg\" title=\"Vidéo de présentation du concept Presizely\" class=\"btn btn-primary btn-lg lightbox\">Vidéo du concept</a>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
            <!-- end slide-->
          </div>
        </div>
        <!--     /slider-wrapper-->
      </section>
      <!-- End Home Section-->
      <!-- Start Client section-->
      <div class=\"container\">
        <div class=\"sep-top-sm\"></div>
        <div data-navigation=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"false\" class=\"owl-carousel owl-theme center-block\">
          <!-- Start Item Slide-->
          <div class=\"item\">
            <center>
            <img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/sarenza.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/brandalley.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/laboutiqueofficielle.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/showroomprive.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/zalando.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            </center>
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/sarenza.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/brandalley.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/laboutiqueofficielle.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/showroomprive.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/zalando.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
          </div>
          <div class=\"item\">
            <img src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/sarenza.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/brandalley.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/laboutiqueofficielle.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/showroomprive.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
            <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/zalando.png"), "html", null, true);
        echo "\" class=\"img-responsive partenaire\">
          </div>   
          <!-- End Item Slide-->
        </div>
        <div class=\"sep-bottom-sm\"></div>
      </div>
      <!-- End Client section-->
      <!-- Start Parallax section-->
      <section id=\"parallax1\" style=\"background-image: url(";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/parallax1.jpg"), "html", null, true);
        echo ");\" class=\"parallax\">
        <div class=\"section-shade sep-top-md sep-bottom-md\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-10 col-md-offset-1 text-center\">
                <div class=\"section-title\">
                  <h3 class=\"upper light small-space\">Vous souhaitez devenir partenaire de<br /><span>Presizely</span> ?</h3>
                  <p class=\"lead light lighter\">Pour devenir partenaire et profiter de notre service sur votre site de vente de vêtements en ligne, cliquez sur le bouton ci-dessous !</p>
                </div>
                <div class=\"row\">
                  <div class=\"col-md-8 col-md-offset-2 sep-top-md\">
                    <a class=\"btn btn-primary\">En savoir plus</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Parallax section-->
      <!-- Start About section-->
      <section id=\"services\" class=\"sep-top-xs sep-bottom-3x\">
        <div class=\"container\">
          <div class=\"row\">
            <div>
              <center>
              <div class=\"section-title\">
                <h2 class=\"upper\" id=\"nos-services\">Nos <span>services</span></h2>
              </div>
            </div>
            <div class=\"col-md-3 sep-top-2x icon-gradient\">
              <div class=\"icon-box icon-horizontal icon-lg\">
                <div data-wow-delay=\".5s\" class=\"icon-content img-circle wow bounceInUp\"><img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/icn-mensuration.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                <div class=\"icon-box-content\">
                  <h5 class=\"upper\">Renseignez vos<br/> mensurations</h5>
                  <p>En quelques clics, inscrivez vos mensurations. Avec une vidéo explicative associée à chaque mensure demandée, mesurez-vous comme un pro !</p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3 sep-top-2x icon-gradient\">
              <div class=\"icon-box icon-horizontal icon-lg\">
                <div data-wow-delay=\".7s\" class=\"icon-content img-circle wow bounceInUp\"><img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/icn-articles.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                <div class=\"icon-box-content\">
                  <h5 class=\"upper\">Choisissez vos<br/> articles</h5>
                  <p>Libre à vous de sélectionner vos articles préférés ! Rendez-vous sur votre boutique en ligne favorite, activez votre compte Presizely, choisissez le produit que voulez !</p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3 sep-top-2x icon-gradient\">
              <div class=\"icon-box icon-horizontal icon-lg\">
                <div data-wow-delay=\".9s\" class=\"icon-content img-circle wow bounceInUp\"><img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/icn-bonnetaille.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                <div class=\"icon-box-content\">
                  <h5 class=\"upper\">Commandez<br/> la bonne taille</h5>
                  <p>Plus de doute sur les tailles, avec Presizely, vos choix vous iront à la perfection ! Vos mensurations sont automatiquement comparées aux tailles des vêtements que vous consultez !</p>
                </div>
              </div>
            </div>
            <div class=\"col-md-3 sep-top-2x icon-gradient\">
              <div class=\"icon-box icon-horizontal icon-lg\">
                <div data-wow-delay=\"1.1s\" class=\"icon-content img-circle wow bounceInUp\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/home/icn-cadeaux.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                <div class=\"icon-box-content\">
                  <h5 class=\"upper\">Offrez des<br/> cadeaux</h5>
                  <p>Sélectionnez un ami, filtrez les produits selon ses mensurations, acheter et offrez ! Presizely, la certitude d’un cadeau réussi !</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End About section-->
      <!-- Start Parallax section-->
      <section id=\"parallax0\" style=\"background-image: url(";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/parallax1.jpg"), "html", null, true);
        echo ");\" class=\"parallax\">
        <div class=\"section-shade sep-top-2x sep-bottom-2x\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-6 text-right\">
                <div class=\"section-title\">
                  <div class=\"bordered-right light\">
                    <h2 class=\"upper small-space\">Avec <span>Presizely</span>, trouvez votre taille en quelques clics !</h2>
                    <p class=\"lead x2\">Ou presque...</p>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"icon-box icon-horizontal icon-lg sep-top-md\">
                  <div data-wow-delay=\".5s\" class=\"icon-content img-circle wow bounceInRight pic\"><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/votre_taille/pic1.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                  <div data-wow-delay=\".7s\" class=\"icon-content img-circle wow bounceInRight pic\" style=\"margin-left: 35px;\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/votre_taille/pic2.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                  <div data-wow-delay=\".9s\" class=\"icon-content img-circle wow bounceInRight pic\" style=\"margin-left: 35px;\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/votre_taille/pic3.png"), "html", null, true);
        echo "\" class=\"icn-services\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Parallax section-->
      <!-- Start Application section-->
      <section id=\"application\" class=\"sep-top-3x\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"section-title\">
                <h2 class=\"bordered-left upper wow flipInX\">Notre<br><span>Application</span></h2>
                <p class=\"lead wow flipInX\">Restez connectés où que vous soyez ! En voyage, entre deux cours, durant une pause, n’attendez plus ! Ordinateur, tablette, Smartphone, vivez et revivez l’expérience Presizely ! Ne loupez pas les bons plan, les promos, le super top que vous venez de voir : téléchargez l’application Presizely !</p>
                <div class=\"sep-top-xs\"></div>
                <div data-wow-delay=\"0.5s\" class=\"row checklist sep-top-xs wow bounceInLeft\">
                  <div class=\"icon-box icon-xs pull-left\">
                    <div class=\"icon-content img-circle\">
                      <i class=\"fa fa-check\"></i>
                    </div>
                  </div>
                  <h3 class=\"pull-left\">Rapide</h3>
                </div>
                <div data-wow-delay=\"0.7s\" class=\"row checklist sep-top-xs wow bounceInLeft\">
                  <div class=\"icon-box icon-xs pull-left\">
                    <div class=\"icon-content img-circle\">
                      <i class=\"fa fa-check\"></i>
                    </div>
                  </div>
                  <h3 class=\"pull-left\">Pratique</h3>
                </div>
                <div data-wow-delay=\"0.9s\" class=\"row checklist sep-top-xs wow bounceInLeft\">
                  <div class=\"icon-box icon-xs pull-left\">
                    <div class=\"icon-content img-circle\">
                      <i class=\"fa fa-check\"></i>
                    </div>
                  </div>
                  <h3 class=\"pull-left\">Gratuite</h3>
                </div>
              </div>
            </div>
            <div class=\"col-md-1\">
            </div>
            <div class=\"col-xs-12 col-md-5\">
              <div class=\"device-content\">
                <div data-device=\"iphone5\" data-orientation=\"portrait\" data-color=\"white\" class=\"device-mockup\" width=\"300\">
                  <div class=\"device\">
                    <div class=\"screen\">
                      <div data-navigation=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"true\" class=\"owl-carousel owl-theme\">
                        <!-- Start Item Slide-->
                        <div class=\"item\"><img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide7.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide8.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <div class=\"item\"><img src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/app/slide9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\"></div>
                        <!-- End Item Slide-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"bg-primary sep-top-md sep-bottom-md\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-4\">
                <p class=\"lead x2 light wow bounceInLeft\">Les meilleurs fonctionnalités de Presizely sur tous vos terminaux !</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio section-->
      <!-- Start Blog preview Section-->
      <section id=\"blog\" class=\"sep-top-2x\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
              <div class=\"section-title text-center\">
                <div data-wow-delay=\".5s\" class=\"icon-box icon-horizontal icon-md wow bounceInDown\">
                  <div class=\"icon-content img-circle\"><i class=\"fa fa-cloud\"></i></div>
                </div>
                <h2 class=\"upper\">Nos <span>actualités</span></h2>
                <p class=\"lead\">Suivez toute l’actualité Presizely ! Nouveautés, bons plans, Presizely vous facilité la vie ! Alors, restez connecté !</p>
              </div>
            </div>
          </div>
        </div>
        <div class=\"container\">
        <div class=\"blog-preview swiper-container\">
          <div class=\"swiper-wrapper sep-top-2x\">
            <!--       Article-->
            <article class=\"swiper-slide\">
              <div class=\"post-info text-center\"><span class=\"info-text pull-left text-right\">4 Février 2015<small>18:36</small></span><a href=\"\"><img src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/author1.jpg"), "html", null, true);
        echo "\" alt=\"Farah Merakchi\" style=\"width:99px; height:99px;\" class=\"img-circle user-thumb\"></a><span class=\"info-text pull-right text-left\">Farah Merakchi<small><a href=\"\">0 Commentaires</a></small></span></div><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/photo1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
              <div class=\"post-content\">
                <h5>Fin des soldes 2015</h5>
                <p>Les soldes sont terminées et vous avez été plus de 340 000 Presizers à utiliser notre service ! Vos dressings se sont bien remplis, toute l’équipe vous remercie et vous prépare de nombreuses surprises à venir tout au long de l’année.</p>
              </div>
            </article>
            <!--       Article end-->
            <!--       Article-->
            <article class=\"swiper-slide\">
              <div class=\"post-info text-center\"><span class=\"info-text pull-left text-right\">2 Février 2015<small>12:48</small></span><a href=\"\"><img src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/author2.jpg"), "html", null, true);
        echo "\" alt=\"Mathilde Moulin\" style=\"width:99px; height:99px;\" class=\"img-circle user-thumb\"></a><span class=\"info-text pull-right text-left\">Mathilde Moulin<small><a href=\"\">0 Commentaires</a></small></span></div><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/photo4.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
              <div class=\"post-content\">
                <h5>Rendez-vous chez Zara le 7 Mars !</h5>
                <p>Opération street marketing, la parole vous est donnée : rendez vous chez ZARA le mercredi 7 mars, dès 9h ! Cliquez et découvrez !</p>
              </div>
            </article>
            <!--       Article end-->
            <!--       Article-->
            <article class=\"swiper-slide\">
              <div class=\"post-info text-center\"><span class=\"info-text pull-left text-right\">2 Février 2015<small>19:35</small></span><a href=\"\"><img src=\"";
        // line 384
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/author3.jpg"), "html", null, true);
        echo "\" alt=\"Sandra Moutoussamy\" style=\"width:99px; height:99px;\" class=\"img-circle user-thumb\"></a><span class=\"info-text pull-right text-left\">Sandra Moutoussamy<small><a href=\"\">0 Commentaires</a></small></span></div><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/photo5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
              <div class=\"post-content\">
                <h5>Kenza recommande Presizely ;) !</h5>
                <p>Rencontre avec Kenza, bloggeuse renommée : venez découvrir en avant première notre dernière entrevue avec Kenza. La revue de Kenza, blog à forte renommée, vous parle de Presizely.</p>
              </div>
            </article>
            <!--       Article end-->
            <!--       Article-->
            <article class=\"swiper-slide\">
              <div class=\"post-info text-center\"><span class=\"info-text pull-left text-right\">2 Février 2015<small>19:35</small></span><a href=\"\"><img src=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/author3.jpg"), "html", null, true);
        echo "\" alt=\"Sandra Moutoussamy\" style=\"width:99px; height:99px;\" class=\"img-circle user-thumb\"></a><span class=\"info-text pull-right text-left\">Sandra Moutoussamy<small><a href=\"\">0 Commentaires</a></small></span></div><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/actu/photo3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
              <div class=\"post-content\">
                <h5>Zara est arrivé !</h5>
                <p>Découvrez notre nouveau partenariat avec ZARA : tout nouveau, tout beau, venez vite découvrir notre nouveau partenariat avec la fameuse marque ZARA ! Cliquez, entrez : venez découvrir les nouveaux avantages !</p>
              </div>
            </article>
            <!--       Article end-->
          </div>
        </div>
        </div>
      </section>
      <!-- End Blog preview Section-->
      <!-- Start Social-link section-->
      <section id=\"social-link\" class=\"bg-primary sep-top-lg sep-bottom-lg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-7\">
              <div class=\"section-title\">
                <div class=\"light\">
                  <h3 class=\"upper small-space\">Suivez-nous !</h3>
                  <p class=\"lead lighter\">N'hésitez-pas à nous suivre sur les réseaux sociaux afin de rester informé des dernières actualités concernant Presizely !</p>
                </div>
              </div>
            </div>
            <div class=\"col-md-5\">
              <div class=\"row\">
                <!--           Start icon box-->
                <div class=\"col-md-3 sep-top-sm\">
                  <div data-wow-delay=\"0.5s\" class=\"icon-box icon-horizontal icon-sm wow bounceInRight\"><a href=\"\" class=\"icon-content inverter img-circle\"><i class=\"fa fa-facebook\"></i></a></div>
                </div>
                <!--           End icon box-->
                <!--           Start icon box-->
                <div class=\"col-md-3 sep-top-sm\">
                  <div data-wow-delay=\"0.7s\" class=\"icon-box icon-horizontal icon-sm wow bounceInRight\"><a href=\"\" class=\"icon-content inverter img-circle\"><i class=\"fa fa-twitter\"></i></a></div>
                </div>
                <!--           End icon box-->
                <!--           Start icon box-->
                <div class=\"col-md-3 sep-top-sm\">
                  <div data-wow-delay=\"0.9s\" class=\"icon-box icon-horizontal icon-sm wow bounceInRight\"><a href=\"\" class=\"icon-content inverter img-circle\"><i class=\"fa fa-google-plus\"></i></a></div>
                </div>
                <!--           End icon box-->
                <!--           Start icon box-->
                <div class=\"col-md-3 sep-top-sm\">
                  <div data-wow-delay=\"1.1s\" class=\"icon-box icon-horizontal icon-sm wow bounceInRight\"><a href=\"\" class=\"icon-content inverter img-circle\"><i class=\"fa fa-youtube\"></i></a></div>
                </div>
                <!--           End icon box-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Social-link section-->
      <!-- Start Team section-->
      <section id=\"team\" class=\"sep-top-3x sep-bottom-3x\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">
              <div class=\"section-title\">
                <h2 class=\"bordered-left upper wow bounceInLeft\">Notre<br/><span>Equipe</span></h2>
                <p class=\"lead wow bounceInRight\">Mais qui se cache derrière Presizely ? Presizely, c’est aussi une équipe à votre écoute ! Jeune et dynamique, c’est une équipe qui vous ressemble !  Découvrez nos membres, leur parcours. Une question ? Besoin d’un conseil ? N’hésitez pas à les contacter !</p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div data-navitagion=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"true\" class=\"owl-carousel owl-theme\">
                
                <div class=\"item\">

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/malaunay.jpg"), "html", null, true);
        echo "\" alt=\"Romain Malaunay\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Romain Malaunay</h5><span>Chef de projet</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Ch'ti biloute dans l'âme et anciennement voleur (commercial) dans l'automobile et la banque, le monde du numérique m'a toujours attiré c'est pourquoi j'ai ouvert les portes d'Ingémedia.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 488
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/trousselard.jpg"), "html", null, true);
        echo "\" alt=\"Gaëlle Trousselard\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Gaëlle Trousselard</h5><span>Chef de projet</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Issue du monde de la mode et du textile à la base, j'ai pu apporter mon expertise dans ce domaine à l'équipe de Presizely. En tant que Chef de Projet, j'ai su m'adapter au milieu de la communication tout en apportant ma vision du stylisme, ce qui a permis d'orienter divers aspects du concept dans la bonne direction.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/loco.jpg"), "html", null, true);
        echo "\" alt=\"Jonas Loco\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Jonas Loco</h5><span>Directeur Marketing & Communication</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Un jeune aventurier qui a trouvé le courage de quitter sa petite île paradisiaque, la Guadeloupe, pour un pays froid (pourquoi j’ai fait ça ?). Esprit tranquille et toujours le sourire. J’aime prendre le temps (voir trop) de faire les choses bien. J’adore les musiques et danses latines, j’aime rigoler et discuter de sujets profonds (si ça intéresse des gens de parler de réincarnation ou des lois de l’Univers..). #TeamDOMTOM</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/lorion.jpg"), "html", null, true);
        echo "\" alt=\"Benjamin Lorion\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Benjamin Lorion</h5><span>Directeur Technique</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Un Toulousain qui a pris la mauvaise sortie d’autoroute en revenant de Chamonix. Contraint de devoir rester sur place, et soumis à l’effroyable torture de devoir réaliser / superviser la création de contenus print, video et web, je planifie méticuleusement mon évasion sur 10 ans (oui, je suis optimiste). Éternel insatisfait, mon boulot de maton du multimédia, c’est toute ma vie !</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"item\">

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 564
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/jouenne.jpg"), "html", null, true);
        echo "\" alt=\"Simon Jouenne\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Simon Jouenne</h5><span>Directeur Artistique</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Normand grand blond aux yeux bleus, il aura fallu attendre 21 ans de ma vie pour voir le sud, de l’eau bleue et des palmiers… Après avoir effectué un DUT SRC et une licence CIAN, j'arrive à Ingémédia pour en apprendre toujours plus sur le monde passionnant du numérique. J’aime étendre mon domaine de compétences et apprendre plus de choses sur le multimédia.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 588
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/fellah.jpg"), "html", null, true);
        echo "\" alt=\"Karim Fellah\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Karim Fellah</h5><span>Designer Graphique</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Troll 5ème Dan originaire du Golfe de Saint-Tropez, je suis un ex-actuel et peut être encore futur Ingémédian (espérant poursuivre en M2). Ainsi,  j'ai eu (la chance ?) l'opportunité d'être diplômé de  la feue \"Licence Pro TAIS CIAN\" dans les anciens locaux d'Ingémédia de La Garde (où ils n'y avaient pas encore besoin de ces maudits détrompeurs !).</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/cornilleau.jpg"), "html", null, true);
        echo "\" alt=\"Tommy Cornilleau\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Tommy Cornilleau</h5><span>Développeur Web</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Directement importé de ma chère région parisienne, mon incroyable habilité à créer des bug m’a directement propulsé au rôle de développeur web hyper-caféiné.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/azzara.jpg"), "html", null, true);
        echo "\" alt=\"Claudia Azzarà\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Claudia Azzarà</h5><span>Community Manager</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Demoiselle de 21 ans en provenance de Dijon (oui, je sais le pays de la moutarde !). Fraîchement débarquée à Toulon (enfin la chaleur !), étudiante en M1 à Ingémédia, grande gueule avec une pointe de folie, le plus important reste l’humour et les nombreux fous rires.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"item\">

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/moutoussamy.jpg"), "html", null, true);
        echo "\" alt=\"Sandra Moutoussamy\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Sandra Moutoussamy</h5><span>Marketing & Communication</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Une demoiselle en provenance directe de cette belle île qu’est La Réunion. Je suis étudiante en M1 à Ingémédia, la seule fac qui a bien voulu de moi. J’adore la cuisine, le jazz, le reggae et par dessus tout les fous rires ! En plus, chose fondamentale, je connais la tirade du scribe, dans Asterix et Obelix mission cléopâtre, par coeur. #TeamDOMTOM</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 688
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/moulin.jpg"), "html", null, true);
        echo "\" alt=\"Mathilde Moulin\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Mathilde Moulin</h5><span>Marketing & Communication</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Mon surnom : madame Pourquoi. Curieuse, j’aime découvrir et apprendre. Originaire du Var, je me suis promenée entre Lyon et Madrid, avant de revenir à mes racines. Salsa, bachata, lecture, écriture : autant de possibilités pour voyager, s’évader, apprendre et s’exprimer.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 712
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/vincent.jpg"), "html", null, true);
        echo "\" alt=\"Jodie Vincent\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Jodie Vincent</h5><span>Community Manager</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Petit être farfelu, plein d’humour (pas toujours compris), végétarien (mais ne mangeant pas que des buissons), je suis une Marseillaise fière de l’être qui défend ses convictions envers et contre tout. Joie, rire, bonheur, nature, écologie, voyage, théâtre…..et lapin tels sont mes maîtres mots.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/merakchi.jpg"), "html", null, true);
        echo "\" alt=\"Farah Merakchi\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Farah Merakchi</h5><span>Community Manager</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Jeune demoiselle de 22ans, toujours souriante, étudiante en M1 Ingémédia à la fac de Toulon (Parce que Toulon !!) J’aime le sport (footballeuse et supportrice de l’Olympique de Marseille : à jamais les premiers !), la musique, mais par-dessus tout rigoler, parce que l’humour est indispensable à l’être humain.</p>
                      </div>
                    </div>
                  </div>

                </div>

                <div class=\"item\">

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/picazor.jpg"), "html", null, true);
        echo "\" alt=\"Alexandre Picazo\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Alexandre Picazo</h5><span>Marketing & Communication</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Je suis un mec avec des lunettes qui vient du milieu de la vente et du marketing et comme j’adore parler, j’ai fini par faire de la communication.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 788
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/roipalu.jpg"), "html", null, true);
        echo "\" alt=\"Gautier Palau\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Gautier Palau</h5><span>Audiovisuel</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Jeune homme de 23 ans, originaire de Nancy, je suis arrivé bien trop tôt dans la région Toulonnaise et n’ai jamais réussi à m’enfuir malgré mes nombreuses tentatives. Actuellement étudiant en M1, j’ai l’espoir d’obtenir un jour mon Master afin de pouvoir me moquer de mes camarades moins bien scolarisé. Naturellement étourdit, je suis quelqu’un qui est toujours de bonne humeur et qui aime rigoler.</p>
                      </div>
                    </div>
                  </div>

                  <div class=\"col-md-6 sep-top-2x\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"team-photo\"><img src=\"";
        // line 812
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/team/olive.jpg"), "html", null, true);
        echo "\" alt=\"Josias Kassi\" class=\"img-responsive\">
                          <div class=\"team-connection\">
                            <div class=\"team-connection-list text-center\">
                              <ul>
                                <li><a href=\"#\"><i class=\"fa fa-facebook fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-twitter fa-2x\"></i></a></li>
                                <li><a href=\"#\"><i class=\"fa fa-google-plus fa-2x\"></i></a></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"team-name\">
                          <h5 class=\"upper\">Josias Kassi</h5><span>Audiovisuel</span>
                        </div>
                        <p><span>Qui suis-je ? </span><br/><br/>Je ne sais pas, même mon père a oublié de me donner un nom de famille à ma naissance. Mais apparemment il faut que je dise quelque chose, je suis la « sagesse africaine », dixit mes amis d’Ingémédia, je suis le roi josias d’après moi-même, bref je suis ce jeune homme venu tout droit du berceau de l’humanité qui aime passionnément l’écriture et la lecture.</p>
                      </div>
                    </div>
                  </div>

                </div>

          </div>
        </div>
      </section>
      <!-- End Team section-->
      <!-- Start call to action section-->
      <section class=\"call-to-action bg-primary-red sep-top-lg sep-bottom-lg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-7\">
              <div class=\"section-title sep-bottom-xs\">
                <div class=\"light\">
                  <h3 class=\"upper small-space\">Keep Calm and use Presizely !</h3>
                  <p class=\"lead lighter\">N'hésitez-plus lors du choix de la taille de vos vêtements en ligne ! Utilisez Presizely lors de vos achats !</p>
                </div>
              </div>
            </div>
            <div class=\"col-md-5\">
              <div class=\"row\">
                <!--  Start icon box-->
                <div class=\"col-md-12\">
                  <div data-wow-delay=\"0.5s\" class=\"icon-box icon-horizontal icon-lg wow bounceInRight\"><a href=\"\" class=\"icon-red icon-content inverter img-circle\"><i class=\"fa fa-thumbs-up\"></i></a></div>
                </div>
                <!-- End icon box-->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End call to action section-->
      <!-- Start Contact section-->
      <section id=\"contacts\" class=\"sep-top-3x sep-bottom-3x\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
              <div class=\"section-title text-center\">
                <div class=\"icon-box icon-horizontal icon-md\">
                  <div class=\"icon-content img-circle\"><i class=\"fa fa-pencil\"></i></div>
                </div>
                <h2 class=\"upper\">Contactez-nous</h2>
                <p class=\"lead\">Des questions ? Contactez l'équipe de Presizely</p>
              </div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-6 sep-top-lg\">
              <div class=\"contact-form\">
                <div id=\"successMessage\" style=\"display:none\" class=\"alert alert-success text-center\">
                  <p><i class=\"fa fa-check-circle fa-2x\"></i></p>
                  <p>Merci d'avoir envoyé votre message ! Nous vous répondrons très prochainement.</p>
                </div>
                <div id=\"failureMessage\" style=\"display:none\" class=\"alert alert-danger text-center\">
                  <p><i class=\"fa fa-times-circle fa-2x\"></i></p>
                  <p>Il y a une erreur dans l'envoi de votre message. Veuillez réessayer.</p>
                </div>
                <div id=\"incompleteMessage\" style=\"display:none\" class=\"alert alert-warning text-center\">
                  <p><i class=\"fa fa-exclamation-triangle fa-2x\"></i></p>
                  <p>Veuillez remplir tous les champs avant d'envoyer votre message.</p>
                </div>
                <form id=\"contactForm\" action=\"php/contact.php\" method=\"post\" class=\"validate\">
                  <div class=\"form-group\">
                    <label for=\"contactFormName\" class=\"upper\">Nom</label>
                    <input id=\"contactFormName\" type=\"text\" placeholder=\"Votre nom\" name=\"name\" class=\"form-control input-lg required\">
                  </div>
                  <div class=\"form-group sep-top-xs\">
                    <label for=\"contactFormEmail\" class=\"upper\">E-mail</label>
                    <input id=\"contactFormEmail\" type=\"email\" placeholder=\"Votre e-mail\" name=\"email\" class=\"form-control input-lg required email\">
                  </div>
                  <div class=\"form-group sep-top-xs\">
                    <label for=\"contactFormComment\" class=\"upper\">Message</label>
                    <textarea id=\"contactFormComment\" placeholder=\"Votre message\" rows=\"9\" name=\"comment\" class=\"form-control input-lg required\"></textarea>
                  </div>
                  <div class=\"form-group sep-top-xs\">
                    <button type=\"submit\" data-wow-delay=\".5s\" class=\"btn btn-primary btn-lg wow bounceInRight center-block\"><i class=\"fa fa-paper-plane\"></i> Envoyer</button>
                  </div>
                  <!--input#subject.form-control.input-lg.required(type='text', placeholder='Subject of your message', name='subject')
                  -->
                </form>
                <div class=\"hidden\"></div>
              </div>
            </div>
            <div class=\"col-md-6 sep-top-lg\">
              <!--Start icon box-->
              <div class=\"icon-box icon-xs sep-bottom-xs icon-gradient\">
                <div data-wow-delay=\".5s\" class=\"icon-content img-circle wow flipInX\"><i class=\"fa fa-map-marker\"></i></div>
                <div class=\"icon-box-content\">
                  <h6 class=\"upper info-title\">Adresse</h6>
                  <p>3 Rue du Haut Meslier, 83000 Toulon</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class=\"icon-box icon-xs sep-bottom-xs icon-gradient\">
                <div data-wow-delay=\".7s\" class=\"icon-content img-circle wow flipInX\"><i class=\"fa fa-phone\"></i></div>
                <div class=\"icon-box-content\">
                  <h6 class=\"upper info-title\">Téléphone</h6>
                  <p>06 11 20 33 04</p>
                </div>
              </div>
              <!--End icon box-->
              <!--Start icon box-->
              <div class=\"icon-box icon-xs sep-bottom-xs icon-gradient\">
                <div data-wow-delay=\".9s\" class=\"icon-content img-circle wow flipInX\"><i class=\"fa fa-envelope\"></i></div>
                <div class=\"icon-box-content\">
                  <h6 class=\"upper info-title\">Email</h6>
                  <p>contact@presizely.com</p>
                </div>
              </div>
              <!--End icon box-->
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact section-->
      <!-- Start map section-->
      <section>
        <div id=\"map-canvas\" style=\"height:500px\">
          <script>
            var
              lat = 43.1214134,
              lon = 5.9399586,
              infoText = [
                '<div style=\"white-space:nowrap\">',
                  '<h5>PRESIZELY</h5>',
                  'UFR Ingémedia<br>',
                  'Université du Sud Toulon-Var<br>',
                  '83000, Toulon',
                '</div>'
              ],
              mapOptions = {
                scrollwheel: false,
                markers: [
                  { latitude: lat, longitude: lon, html: infoText.join('') }
                ],
                icon: {
                  image: 'img/marker.png',
                  iconsize: [72, 65],
                  iconanchor: [12, 65],
                },
                latitude: lat,
                longitude: lon,
                zoom: 17
              };
          </script>
        </div>
      </section>
      <!-- Start call to action section-->
      <section class=\"call-to-action bg-primary sep-top-md sep-bottom-md\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-9\">
              <h5 class=\"action-title upper light\">Toujours intéressé par l'aventure Presizely ? Rejoignez-nous !</h5>
            </div>
            <div class=\"col-md-3 text-right\"><a href=\"#\" class=\"btn btn-light btn-bordered btn-lg\">En savoir plus</a></div>
          </div>
        </div>
      </section>
      <!-- End call to action section-->
      <!-- Start Footer section-->
      <footer id=\"footer\">
        <div class=\"inner sep-bottom-md\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget sep-top-lg\"><img src=\"";
        // line 998
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-footer.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo\"><small class=\"sep-top-xs sep-bottom-md\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fermentum risus id ex rutrum scelerisque.</small>
                  <h6 class=\"upper widget-title\">Restés connectés</h6>
                  <ul class=\"social-icon sep-top-xs\">
                    <li><a href=\"#\" class=\"fa fa-youtube fa-lg\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-twitter fa-lg\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-facebook fa-lg\"></a></li>
                    <li><a href=\"#\" class=\"fa fa-google-plus fa-lg\"></a></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget sep-top-lg\">
                  <h6 class=\"upper widget-title\">Notre Actualité</h6>
                  <ul class=\"widget-post sep-top-xs\">
                    <li><span class=\"date-post\">17<small class=\"upper\">déc</small></span><a href=\"\" class=\"title-post\">Presizely sera présent au salon de l'innovation</a><small><a href=\"\">5 commentaires</a></small></li>
                    <li><span class=\"date-post\">11<small class=\"upper\">oct</small></span><a href=\"\" class=\"title-post\">Presizely, une start-up pour changer l'avenir</a><small><a href=\"\">7 commentaires</a></small></li>
                    <li><span class=\"date-post\">26<small class=\"upper\">sep</small></span><a href=\"\" class=\"title-post\">Les comandes de mètres ruban sont...</a><small><a href=\"\">4 commentaires</a></small></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget sep-top-lg\">
                  <h6 class=\"upper widget-title\">Contactez-nous</h6>
                  <ul class=\"widget-address sep-top-xs\">
                    <li><i class=\"fa fa-map-marker fa-lg\"></i><small>3 Rue du Haut Meslier<br>83000 Toulon</small></li>
                    <li><i class=\"fa fa-phone fa-lg\"></i><small>06 11 20 33 04<br>06 67 28 78 50</small></li>
                    <li><i class=\"fa fa-envelope fa-lg\"></i><small><a href=\"#\">contact@presizely.fr /</a><br><a href=\"#\">contact@presizely.fr</a></small></li>
                    <li><i class=\"fa fa-clock-o fa-lg\"></i><small>Lundi / Vendredi<br>09:00 - 13.00 / 14:00 - 18:00</small></li>
                  </ul>
                </div>
              </div>
              <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget sep-top-lg\">
                  <h6 class=\"upper widget-title\">Flickr</h6>
                  <div class=\"flickr_container sep-top-xs\">
                    <div id=\"flickr_badge_image1\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 1\" alt=\"Flickr Image 1\" src=\"";
        // line 1033
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image2\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 2\" alt=\"Flickr Image 2\" src=\"";
        // line 1034
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image3\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 3\" alt=\"Flickr Image 3\" src=\"";
        // line 1035
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image4\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 4\" alt=\"Flickr Image 4\" src=\"";
        // line 1036
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image5\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 5\" alt=\"Flickr Image 5\" src=\"";
        // line 1037
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image6\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 6\" alt=\"Flickr Image 6\" src=\"";
        // line 1038
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                  </div>
                  <div class=\"instagram_container\">
                    <a href=\"#\" class=\"pull-left col-sm-2\"><i class=\"fa fa-instagram fa-3x\"></i></a>
                    <a href=\"#\" class=\"pull-left col-sm-10\">&nbsp;<small class=\"instagram-text\">Retrouvez-nous sur Instagram</small></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"copyright sep-top-xs sep-bottom-xs\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12\">
                <small class=\"text-center text-uppercase\">
                  <a href=\"#\">Accueil</a>
                  <a href=\"#\">Partenaires</a>
                  <a href=\"#\">Clients</a>
                  <a href=\"#\">Blog</a>
                </small>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer section-->
      <div id=\"back_to_top\"><a href=\"#\" class=\"fa fa-arrow-up fa-lg\"></a></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PresizelyUserBundle:User:Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1318 => 1038,  1314 => 1037,  1310 => 1036,  1306 => 1035,  1302 => 1034,  1298 => 1033,  1260 => 998,  1071 => 812,  1044 => 788,  1017 => 764,  986 => 736,  959 => 712,  932 => 688,  905 => 664,  874 => 636,  847 => 612,  820 => 588,  793 => 564,  762 => 536,  735 => 512,  708 => 488,  681 => 464,  605 => 393,  591 => 384,  577 => 375,  563 => 366,  519 => 325,  515 => 324,  511 => 323,  507 => 322,  503 => 321,  499 => 320,  495 => 319,  491 => 318,  487 => 317,  432 => 265,  428 => 264,  424 => 263,  407 => 249,  392 => 237,  380 => 228,  368 => 219,  356 => 210,  321 => 178,  310 => 170,  306 => 169,  302 => 168,  298 => 167,  294 => 166,  288 => 163,  284 => 162,  280 => 161,  276 => 160,  272 => 159,  265 => 155,  261 => 154,  257 => 153,  253 => 152,  249 => 151,  222 => 127,  217 => 125,  194 => 104,  186 => 99,  182 => 98,  178 => 97,  174 => 96,  141 => 65,  130 => 57,  119 => 49,  107 => 40,  100 => 36,  96 => 35,  91 => 32,  89 => 31,  77 => 26,  55 => 6,  52 => 5,  44 => 3,  38 => 2,  11 => 1,);
    }
}
