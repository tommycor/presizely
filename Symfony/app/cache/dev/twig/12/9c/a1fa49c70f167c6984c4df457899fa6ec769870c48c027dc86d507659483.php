<?php

/* PresizelyUserBundle:User:dashboard.html.twig */
class __TwigTemplate_129ca1fa49c70f167c6984c4df457899fa6ec769870c48c027dc86d507659483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        try {
            $this->parent = $this->env->loadTemplate("::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(26);

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

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "<body>
    <div id=\"load\"></div><!--[if lt IE 9]>
    <p class=\"browsehappy\">You are using an strong outdated browser. <br>Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class=\"page\">
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
        // line 51
        echo $this->env->getExtension('routing')->getPath("presizely_user_home");
        echo "\" class=\"navbar-brand\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-white.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo-white\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-dark.png"), "html", null, true);
        echo "\" alt=\"\" class=\"logo-dark\"></a>
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right service-nav\">
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
        // line 85
        echo $this->env->getExtension('routing')->getPath("presizely_user_dashboard");
        echo "\" class=\"portrait upper dropdown-toggle\">
                  <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span>
                  <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portrait.png"), "html", null, true);
        echo "\" class=\"img-portrait img-rounded\">
                  <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/portrait-sm.png"), "html", null, true);
        echo "\" class=\"img-portrait-sm img-rounded\">
                </a>
              </li>
            </ul>
            <button type=\"button\" class=\"navbar-toggle\"><i class=\"fa fa-close fa-lg\"></i></button>
            <ul id=\"one-page-menu\" role=\"menu\" class=\"nav yamm navbar-nav navbar-left main-nav\">
                <li><a href=\"#mensurations\" title=\"Mes mensurations\" data-ref=\"mensurations\">Mes mensurations</a></li>
                <li><a href=\"#profil\" title=\"Mon profil\" data-ref=\"profil\">Mon profil</a></li>
                <li><a href=\"#communaute\" title=\"Ma communaut&eacute;\" data-ref=\"communaute\">Ma communauté</a></li>
            </ul>
          </div>
        </div>
      </nav>
      
      <!-- Section Mensurations -->
      <section id=\"mensurations\" class=\"mensurations sep-top-2x\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
            <div class=\"section-title text-center\">
              <div class=\"row\">
                  <div class=\"line col-sm-4 col-xs-2\">
                  </div>
                  <div class=\"icon-box icon-horizontal icon-md col-sm-4 col-xs-8\">
                    <div class=\"icon-content img-circle\">
                      <div class=\"ruban-block\"><img class=\"ruban\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/ruban.svg"), "html", null, true);
        echo "\"  width=\"55\" height=\"55\"></div>
                    </div>
                  </div>
                  <div class=\"line col-sm-4 col-xs-2\">
                  </div>
              </div>
              <h2 class=\"upper\">Mes<span> Mensurations</span></h2>
            </div>
          </div>
        </div>
        <div class=\"steps\">
          <h6>9/10</h6>
        </div>
        <div class=\"progress big-progress center-block\">
          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"9\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 90%;\">
            <span class=\"sr-only\">9/10</span>
          </div>
        </div>
        <div class=\"measures-big-block row\">
          <div class=\"col-md-4 sep-bottom-sm\">
            <h4 class=\"text-center\">Globales</h4>
            <a data-measure=\"1\" class=\"tshirt-block measures-block row active\" href=\"#\">
              <div class=\"col-sm-offset-1 col-sm-2 col-xs-3 svg-icon\">
                <img class=\"gbl-icon svg\" src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/tshirt.svg"), "html", null, true);
        echo "\"  width=\"47\" height=\"47\">
              </div>
              <div class=\"col-xs-8 measures-bar\">
                <p>Mensurations hautes <span>4/10</span></p>
                <div class=\"progress mini-progress\">
                  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"4\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 40%;\">
                    <span class=\"sr-only\">4/10</span>
                  </div>
                </div>
              </div>
            </a>
            <a data-measure=\"2\" class=\"trousers-block measures-block row\" href=\"#\">
              <div class=\"col-sm-offset-1 col-sm-2 col-xs-3 svg-icon\">
                <img class=\"gbl-icon svg\" src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/trousers.svg"), "html", null, true);
        echo "\"  width=\"47\" height=\"47\">
              </div>
              <div class=\"col-xs-8 measures-bar\">
                <p>Mensurations basses <span>6/10</span></p>
                <div class=\"progress mini-progress\">
                  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"6\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 60%;\">
                    <span class=\"sr-only\">6/10</span>
                  </div>
                </div>
              </div>
            </a>
            <a data-measure=\"3\" class=\"hat-block measures-block row\" href=\"#\">
              <div class=\"col-sm-offset-1 col-sm-2 col-xs-3 svg-icon\">
                <img class=\"gbl-icon svg\" src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/hat.svg"), "html", null, true);
        echo "\"  width=\"47\" height=\"47\">
              </div>
              <div class=\"col-xs-8 measures-bar\">
                <p>Mensurations accessoires <span>9/10</span></p>
                <div class=\"progress mini-progress\">
                  <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"9\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: 90%;\">
                    <span class=\"sr-only\">9/10</span>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class=\"col-md-4 sep-bottom-sm\">
            <div class=\"row details-title\">
              <div class=\"col-xs-10\">
                <h4 class=\"text-center\">Détaillées</h4>
              </div>
              <div class=\"col-xs-2\">
                <img class=\"mini-svg center-block\" src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/tshirt.svg"), "html", null, true);
        echo "\"  width=\"28\" height=\"28\">
              </div>
            </div>
            ";
        // line 184
        echo "            ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), 'form_start');
        echo "
                      
                      
                      
                        <div data-measure=\"1\" data-navigation=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"false\" class=\"owl-carousel owl-theme sliders dm1\">
                        <!-- Start Item Slide-->
                        <div class=\"item\">
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">busteepaule</span>
                              ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "busteepaule", array()), 'widget', array("attr" => array("data-youtube" => "VVQzUYuHdN8", "data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "busteepaule", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "busteepaule", array()), "class" => "filter_size s3")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s3\"></span> ";
        // line 197
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "busteepaule", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 200
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "busteepaule", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">bustepoitrine</span>
                              ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "bustepoitrine", array()), 'widget', array("attr" => array("data-youtube" => "oZZAF2CUjrg", "data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "bustepoitrine", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "bustepoitrine", array()), "class" => "filter_size s4")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s4\"></span> ";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "bustepoitrine", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 212
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "bustepoitrine", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          ";
        // line 215
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "Valider", array()), 'widget', array("attr" => array("style" => "margin-bottom: 5px;", "class" => "fakebtn btn btn-primary center-block")));
        echo "
                          <a class=\"fakebtn btn btn-primary center-block search_button\" href=\"javascript:void(0)\" style=\"margin-bottom: 5px;\">Auto-sizing</a>
                        </div>
                        <!-- End Item Slide-->
                      </div>
                      <div data-measure=\"2\" data-navigation=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"false\" class=\"owl-carousel owl-theme sliders dm2 hidden\">
                        <!-- Start Item Slide-->
                        <div class=\"item\">
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">jambehanche</span>
                              ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "jambehanche", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "jambehanche", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "jambehanche", array()), "class" => "filter_size s3")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s3\"></span> ";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "jambehanche", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 232
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "jambehanche", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">jambefesse</span>
                              ";
        // line 238
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "jambefesse", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "jambefesse", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "jambefesse", array()), "class" => "filter_size s4")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s4\"></span> ";
        // line 241
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "jambefesse", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 244
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "jambefesse", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "Valider", array()), 'widget', array("attr" => array("style" => "margin-bottom: 5px;", "class" => "fakebtn btn btn-primary center-block")));
        echo "
                          <a class=\"fakebtn btn btn-primary center-block search_button\" href=\"javascript:void(0)\" style=\"margin-bottom: 5px;\">Auto-sizing</a>
                        </div>
                        <!-- End Item Slide-->
                      </div>
                      <div data-measure=\"3\" data-navigation=\"false\" data-slide-speed=\"300\" data-pagination-speed=\"400\" data-single-item=\"true\" data-auto-height=\"true\" data-auto-play=\"false\" class=\"owl-carousel owl-theme sliders dm3 hidden\">
                        <!-- Start Item Slide-->
                        <div class=\"item\">
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">tetetete</span>
                              <!--input name=\"form_tetetete\" type=\"text\" value=\"\" data-youtube=\"oZZAF2CUjrg\" data-slider-min=\"30\" data-slider-max=\"100\" data-slider-step=\"1\" data-slider-value=\"58\" class=\"filter_size s1\" -->
                              ";
        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "tetetete", array()), 'widget', array("attr" => array("data-youtube" => "oZZAF2CUjrg", "data-slider-min" => "30", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "tetetete", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "tetetete", array()), "class" => "filter_size s1")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s1\"></span> ";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "tetetete", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 265
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "tetetete", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">tetecou</span>
                              <!-- input type=\"text\" value=\"\" data-youtube=\"T3eHbDumUAU\" data-slider-min=\"0\" data-slider-max=\"100\" data-slider-step=\"1\" data-slider-value=\"75\" class=\"filter_size s2\" -->
                              ";
        // line 272
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "tetecou", array()), 'widget', array("attr" => array("data-youtube" => "T3eHbDumUAU", "data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "tetecou", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "tetecou", array()), "class" => "filter_size s2")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s2\"></span> ";
        // line 275
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "tetecou", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 278
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "tetecou", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">mainpoignet</span>
                              ";
        // line 284
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "mainpoignet", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "mainpoignet", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "mainpoignet", array()), "class" => "filter_size s1")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s1\"></span> ";
        // line 287
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "mainpoignet", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 290
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "mainpoignet", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">mainmain</span>
                              ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "mainmain", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "mainmain", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "mainmain", array()), "class" => "filter_size s2")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s2\"></span> ";
        // line 299
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "mainmain", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 302
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "mainmain", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          ";
        // line 305
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "Valider", array()), 'widget', array("attr" => array("style" => "margin-bottom: 5px;", "class" => "fakebtn btn btn-primary center-block")));
        echo "
                          <a class=\"fakebtn btn btn-primary center-block search_button\" href=\"javascript:void(0)\" style=\"margin-bottom: 5px;\">Auto-sizing</a>
                        </div>
                        <!-- End Item Slide-->
                        <!-- Start Item Slide-->
                        <div class=\"item\">
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">piedlongueur</span>
                              ";
        // line 314
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "piedlongueur", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "piedlongueur", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "piedlongueur", array()), "class" => "filter_size s1")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s1\"></span> ";
        // line 317
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "piedlongueur", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 320
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "piedlongueur", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          <div class=\"slider-element row\">
                            <div class=\"slider-bar col-xs-6 col-md-7\">
                              <span class=\"slider-title\">piedlargeur</span>
                              ";
        // line 326
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "piedlargeur", array()), 'widget', array("attr" => array("data-slider-min" => "0", "data-slider-max" => "100", "data-slider-step" => "1", "data-slider-value" => $this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "piedlargeur", array()), "data-slider-predicted" => $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "piedlargeur", array()), "class" => "filter_size to_update s2")));
        echo "
                            </div>
                            <div class=\"col-xs-4 col-md-3 size-text\">
                              <span class=\"size_current s2\"></span> ";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["predicted"]) ? $context["predicted"] : $this->getContext($context, "predicted")), "piedlargeur", array()), "html", null, true);
        echo "&nbsp;cm
                            </div>
                            <div class=\"col-xs-2 col-md-2 svg-icon\">
                              <img class=\"gbl-icon svg center-block\" src=\"";
        // line 332
        if ($this->getAttribute((isset($context["measurement"]) ? $context["measurement"] : $this->getContext($context, "measurement")), "piedlargeur", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/check.svg"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/noset.svg"), "html", null, true);
        }
        echo "\"  width=\"28\" height=\"28\">
                            </div>
                          </div>
                          ";
        // line 335
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), "Valider", array()), 'widget', array("attr" => array("style" => "margin-bottom: 5px;", "class" => "fakebtn btn btn-primary center-block")));
        echo "
                          <a class=\"fakebtn btn btn-primary center-block search_button\" href=\"javascript:void(0)\" style=\"margin-bottom: 5px;\">Auto-sizing</a>
                        </div>
                        <!-- End Item Slide-->
                      </div>
                    </div>


          ";
        // line 343
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formMeasurement"]) ? $context["formMeasurement"] : $this->getContext($context, "formMeasurement")), 'form_end');
        echo "
          <div class=\"col-md-4 sep-bottom-sm\">
            <h4 class=\"text-center\">Vidéo</h4>
            <div id=\"ytplayer\" class=\"youtube_video\"></div>
          </div>
        </div>
      </div>
      </section>
      <!-- Section Profile -->
      <section id=\"profil\" class=\"profile sep-bottom-xs sep-top-2x\">
        <div class=\"container\">
          <div class=\"section-title sep-bottom-xs\">
            <h2 class=\"bordered-left upper\">
            Mon <br/><span>Profil</span>
            </h2>
          </div>
          <div class=\"row\">
            <div class=\"col-md-7\">
              <img class=\"avatar img-responsive\" src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/avatar.png"), "html", null, true);
        echo "\">
            </div>
            <div class=\"col-md-5\">
              <h5 class=\"upper text-center\">Mes informations</h5>
              <img class=\"sep-bottom-xs center-block\" src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/profile.png"), "html", null, true);
        echo "\">
              <table class=\"table table-striped table-bordered table-responsive\">
                <tr><td><a href=\"#_\"><i class=\"fa fa-user fa-lg fa-fw\">&nbsp;</i> ";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-male fa-lg fa-fw\">&nbsp;</i> ";
        // line 368
        if ( !$this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "sexe", array())) {
            echo "Homme";
        } else {
            echo "Femme";
        }
        echo "</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-birthday-cake fa-lg fa-fw\">&nbsp;</i> 26 / 05 / 1988</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-at fa-lg fa-fw\">&nbsp;</i> ";
        // line 370
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-home fa-lg fa-fw\">&nbsp;</i> 3 Rue Ozenne - 31000 Toulouse</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-trophy fa-lg fa-fw\">&nbsp;</i> 7 Succès</a></td></tr>
                <tr><td><a href=\"#_\"><i class=\"fa fa-star fa-lg fa-fw\">&nbsp;</i> 22 points Presizely</a></td></tr>
              </table>
              <div class=\"sep-top-xs\">
                <a href=\"#_\" class=\"btn btn-primary green center-block\"><i class=\"fa fa-pencil-square-o fa-lg\">&nbsp;</i> Modifier mon profil</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Wishlist -->
      <section class=\"wishlist sep-top-lg sep-bottom-xs\">
        <div class=\"container\">
          <div class=\"section-title sep-bottom-xs\">
            <h2 class=\"bordered-left upper\">
            Ma <br/><span>Wishlist</span>
            </h2>
          </div>
          <div class=\"wishlist-container\">
            <a class=\"arrows prev\" href=\"#_\"><i class=\"fa fa-arrow-left fa-3x\"></i></a>
            <a class=\"arrows next\" href=\"#_\"><i class=\"fa fa-arrow-right fa-3x\"></i></a>
            <div id=\"wishlist\" data-pagination=\"false\" data-items=\"7\" data-auto-height=\"true\" class=\"owl-carousel owl-theme\">
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 396
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 400
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
              <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
            </div>
          </div>
        </div>
      </section>
      <section class=\"articles-filters\">
        <div class=\"sep-top-lg sep-bottom-xs\">
          <div class=\"container\">
            <div class=\"section-title sep-bottom-xs\">
              <h2 class=\"text-right bordered-right upper\">
              Historique <br/><span>des achats</span>
              </h2>
            </div>
            <div id=\"filters\" class=\"text-center\">
              <!--<button data-filter=\"*\" class=\"btn btn-xs btn-primary upper\">Tout</button>-->
              <button data-filter=\".janvier\" class=\"btn btn-xs btn-primary upper\">Janvier</button>
              <button data-filter=\".fevrier\" class=\"btn btn-xs upper\">Février</button>
              <button data-filter=\".mars\" class=\"btn btn-xs upper\">Mars</button>
              <button data-filter=\".avril\" class=\"btn btn-xs upper\">Avril</button>
              <button data-filter=\".mai\" class=\"btn btn-xs upper\">Mai</button>
              <button data-filter=\".juin\" class=\"btn btn-xs upper\">Juin</button>
              <button data-filter=\".juillet\" class=\"btn btn-xs upper\">Juillet</button>
              <button data-filter=\".aout\" class=\"btn btn-xs upper\">Août</button>
              <button data-filter=\".septembre\" class=\"btn btn-xs upper\">Septembre</button>
              <button data-filter=\".octobre\" class=\"btn btn-xs upper\">Octobre</button>
              <button data-filter=\".novembre\" class=\"btn btn-xs upper\">Novembre</button>
              <button data-filter=\".decembre\" class=\"btn btn-xs upper\">Décembre</button>
            </div>
          </div>
        </div>
      </section>
      <!-- End header Section-->
      <!-- Start History section-->
      <section id=\"history-gallery\" data-folder=\"/articles\">
        <!-- Start Ajax Section-->
        <div style=\"position:relative;\" class=\"ajax-section section-gray\">
          <div class=\"closeProject\"><a href=\"#loader\"><i class=\"fa fa-times\"></i></a></div>
          <div class=\"loader\"><i class=\"fa fa-circle-o-notch fa-spin fa-2x\"></i></div>
          <div class=\"container\">
            <div class=\"status-message\"></div>
            <div class=\"ajax-content-outer\">
              <div class=\"ajax-content-inner\"></div>
              <div class=\"project-navigation nav-arrows\"><a href=\"#\" class=\"nextProject\"><span class=\"nav-arrow-next\"></span></a><a href=\"#\" class=\"prevProject\"><span class=\"nav-arrow-prev\"></span></a></div>
            </div>
          </div>
        </div>
        <!-- End Ajax Section-->
        <div class=\"scroll-block mCustomScrollbar\" data-mcs-theme=\"dark\">
          <div class=\"article-body-content\">
            <ul id=\"isotope\" class=\"history isotope\">
              <li class=\"item janvier fevrier mars avril mai juin juillet aout septembre octobre novembre decembre\">
                <img src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 457
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item janvier mars mai juillet septembre novembre\">
                <img src=\"";
        // line 464
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 467
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item fevrier avril juin aout octobre decembre\">
                <img src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item janvier mars mai juillet septembre novembre\">
                <img src=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 487
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item janvier fevrier mars avril mai juin juillet aout septembre octobre novembre decembre\">
                <img src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item janvier mars mai juillet septembre novembre\">
                <img src=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item fevrier avril juin aout octobre decembre\">
                <img src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
              <li class=\"item janvier mars mai juillet septembre novembre\">
                <img src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" alt=\"Pull Tommy Hilfiger\" class=\"img-responsive\">
                <div class=\"mask\">
                  <div class=\"mask-content\">
                    <div class=\"mask-wrapper text-center\"><a href=\"#\" class=\"info ajax_load\"><i class=\"fa fa-link fa-border\"></i></a><a href=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/pull-1.jpg"), "html", null, true);
        echo "\" data-rel=\"prettyPhoto[pp_gal]\" title=\"Pull Tommy Hilfiger\" class=\"info\"><i class=\"fa fa-expand fa-border\"></i></a>
                      <h4 class=\"upper\">Pull</h4><span>Tommy Hilfiger</span>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- End History section-->
      <!-- Start Community section-->
      <section id=\"communaute\" class=\"community sep-top-2x sep-bottom-lg\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2\">
              <div class=\"section-title text-center\">
                <div class=\"row\">
                    <div class=\"line col-sm-4 col-xs-2\">
                    </div>
                    <div class=\"icon-box icon-horizontal icon-md col-sm-4 col-xs-8\">
                      <div class=\"icon-content img-circle\">
                        <div class=\"people-block\"><img class=\"people\" src=\"";
        // line 549
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/svg/community.svg"), "html", null, true);
        echo "\"  width=\"55\" height=\"55\"></div>
                      </div>
                    </div>
                    <div class=\"line col-sm-4 col-xs-2\">
                    </div>
                </div>
                <h2 class=\"upper\">Ma<span> Communauté</span></h2>
              </div>
            </div>
          </div>
          <div class=\"community-big-block row\">
            <div class=\"col-md-3 sep-bottom-sm\">
              <h5 class=\"upper text-center\"><span>Inviter des amis</span></h5>
              <ul class=\"social-icon sep-top-xs sep-bottom-xs\">
                <li><a href=\"#_\" class=\"fa fa-facebook fa-2x\"></a></li>
                <li><a href=\"#_\" class=\"fa fa-twitter fa-2x\"></a></li>
                <li><a href=\"#_\" class=\"fa fa-envelope fa-2x\"></a></li>
              </ul>
              <h5 class=\"upper text-center\"><span>Rechercher des amis</span></h5>
              <div class=\"search-block sep-top-xs sep-bottom-xs\">
                <div class=\"input-group search\">
                  <input class=\"form-control\" type=\"text\">
                  <span class=\"input-group-btn\">
                    <button class=\"btn btn-sm\" type=\"submit\">
                      <i class=\"fa fa-search fa-lg\"></i>
                    </button>
                  </span>
                </div>
              </div>
              <button class=\"btn btn-primary btn-all center-block\">Afficher tout</button>
              <h5 class=\"upper text-center sep-top-xs sep-bottom-xs\"><span>Favoris</span></h5>
              <div class=\"favorite-container row sep-bottom-xs\">
                  <a class=\"item col-xs-12\" href=\"#_\">
                    <span class=\"fav-image text-center\"><img src=\"";
        // line 582
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                    <span class=\"fav-name\">Romain Malaunay</span>
                  </a>
                  <a class=\"item col-xs-12\" href=\"#_\">
                    <span class=\"fav-image text-center\"><img src=\"";
        // line 586
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                    <span class=\"fav-name\">Karim Fellah</span>
                  </a>
                  <a class=\"item col-xs-12\" href=\"#_\">
                    <span class=\"fav-image text-center\"><img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                    <span class=\"fav-name\">Simon Jouenne</span>
                  </a>
              </div>
              <button class=\"btn btn-primary btn-tag green center-block\">Créer un tag</button>
              <h5 class=\"upper text-center sep-top-xs sep-bottom-xs\"><span>Groupes</span></h5>
              <div id=\"accordion\" class=\"accordion-group\">
                <div class=\"accordion-item panel\">
                  <div class=\"accordion-heading upper\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse0\" class=\"accordion-toggle\">Famille<i class=\"accordion-icon fa fa-minus\"></i></a></div>
                  <div id=\"collapse0\" class=\"accordion-body panel-collapse in\">
                    <div class=\"scroll-block center-block row sep-top-xs mCustomScrollbar\" data-mcs-theme=\"dark\">
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"img/contacts/friend.png\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Romain Malaunay</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Karim Fellah</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 610
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Simon Jouenne</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Romain Malaunay</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Karim Fellah</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 622
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Simon Jouenne</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div class=\"accordion-item panel\">
                  <div class=\"accordion-heading upper\"><a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse1\" class=\"accordion-toggle\">Amis<i class=\"accordion-icon fa fa-plus\"></i></a></div>
                  <div id=\"collapse1\" class=\"accordion-body panel-collapse collapse\">
                    <div class=\"scroll-block center-block row sep-top-xs mCustomScrollbar\" data-mcs-theme=\"dark\">
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 633
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Karim Fellah</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Simon Jouenne</span>
                      </a>
                      <a class=\"item col-xs-12\" href=\"#_\">
                        <span class=\"fav-image text-center\"><img src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend.png"), "html", null, true);
        echo "\" class=\"img-responsive\" alt=\"\" ></span>
                        <span class=\"fav-name\">Romain Malaunay</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-md-8 col-md-offset-1\">
              <h5 class=\"text-center green sep-bottom-xs\">Martin Durand</h5>
              <h5 class=\"upper text-center\"><span>Sa wishlist</span></h5>
              <div class=\"cw-container\">
                <a class=\"arrows prev-cw\" href=\"#_\"><i class=\"fa fa-arrow-left fa-3x\"></i></a>
                <a class=\"arrows next-cw\" href=\"#_\"><i class=\"fa fa-arrow-right fa-3x\"></i></a>
                <div id=\"cw\" data-items=\"6\" data-pagination=\"false\" data-auto-height=\"true\" class=\"owl-carousel owl-theme\">
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/articles/mini-article.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Chemise bleue<br/>Taille M<br/>H&M</a>
                </div>
              </div>
              <h5 class=\"upper text-center sep-top-md\"><span>Ses évènements</span></h5>
              <h5 class=\"upper text-center\">Anniversaire Martin - JJ/MM/AAA</h5>
              <p class=\"text-center\">Ils y participent :</p>
              <div class=\"ev-container sep-bottom-xs\">
                <a class=\"arrows prev-ev\" href=\"#_\"><i class=\"fa fa-arrow-left fa-3x\"></i></a>
                <a class=\"arrows next-ev\" href=\"#_\"><i class=\"fa fa-arrow-right fa-3x\"></i></a>
                <div id=\"ev\" data-items=\"5\" data-pagination=\"false\" data-auto-height=\"true\" class=\"owl-carousel owl-theme\">
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Romain Malaunay</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 676
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Gaëlle Trousselard</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Mathilde Moulin</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 678
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Sandra Moutoussamy</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Karim Fellah</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 680
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Simon Jouenne</a>
                </div>
              </div>
              <button href=\"#_\" class=\"btn btn-primary btn-participate green center-block\">J'y participe</button>
              <h5 class=\"upper text-center sep-top-md\"><span>Participe à</span></h5>
              <h5 class=\"upper text-center\">Noël Mathilde - JJ/MM/AAAA</h5>
              <p class=\"text-center\">Ils y participent :</p>
              <div class=\"pev-container sep-bottom-xs\">
                <a class=\"arrows prev-pev\" href=\"#_\"><i class=\"fa fa-arrow-left fa-3x\"></i></a>
                <a class=\"arrows next-pev\" href=\"#_\"><i class=\"fa fa-arrow-right fa-3x\"></i></a>
                <div id=\"pev\" data-items=\"5\" data-pagination=\"false\" data-auto-height=\"true\" class=\"owl-carousel owl-theme\">
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Romain Malaunay</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend2.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Gaëlle Trousselard</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend3.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Mathilde Moulin</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend4.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Sandra Moutoussamy</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend5.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Karim Fellah</a>
                  <a class=\"item text-center\" href=\"#_\"><img src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/contacts/friend6.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">Simon Jouenne</a>
                </div>
              </div>
              <button href=\"#_\" class=\"btn btn-primary btn-participate green center-block\">J'y participe</button>
            </div>
          </div>
        </div>
      </section>
      <!-- End Community section-->
      <!-- Start Footer section-->
      <footer id=\"footer\">
        <div class=\"inner sep-bottom-md\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-3 col-sm-6\">
                <div class=\"widget sep-top-lg\"><img src=\"";
        // line 711
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
        // line 746
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image2\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 2\" alt=\"Flickr Image 2\" src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image3\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 3\" alt=\"Flickr Image 3\" src=\"";
        // line 748
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image4\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 4\" alt=\"Flickr Image 4\" src=\"";
        // line 749
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image5\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 5\" alt=\"Flickr Image 5\" src=\"";
        // line 750
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("./img/flickr.png"), "html", null, true);
        echo "\"></a></div>
                    <div id=\"flickr_badge_image6\" class=\"flickr_badge_image\"><a href=\"\"><img width=\"75\" height=\"75\" title=\"Flickr Image 6\" alt=\"Flickr Image 6\" src=\"";
        // line 751
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
    <script>
    \$(document).ready(function(\$) {
      \$('.gogoslide').click(function(){
        \$('.fake.s1').slider('setValue', 35);
        \$('.fake.s2').slider('setValue', 47);
        \$('.fake.s3').slider('setValue', 55);
        \$('.fake.s4').slider('setValue', 73);
        \$('.fake.s1').parent().next().children('.size_current').text('35 cm');
        \$('.fake.s2').parent().next().children('.size_current').text('47 cm');
        \$('.fake.s3').parent().next().children('.size_current').text('55 cm');
        \$('.fake.s4').parent().next().children('.size_current').text('73 cm');
        \$('.fake-svg').attr('src', 'img/svg/check.svg');
        \$('.search_button').trigger('click');
      });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "PresizelyUserBundle:User:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1168 => 751,  1164 => 750,  1160 => 749,  1156 => 748,  1152 => 747,  1148 => 746,  1110 => 711,  1092 => 696,  1088 => 695,  1084 => 694,  1080 => 693,  1076 => 692,  1072 => 691,  1058 => 680,  1054 => 679,  1050 => 678,  1046 => 677,  1042 => 676,  1038 => 675,  1025 => 665,  1021 => 664,  1017 => 663,  1013 => 662,  1009 => 661,  1005 => 660,  1001 => 659,  997 => 658,  993 => 657,  989 => 656,  971 => 641,  964 => 637,  957 => 633,  943 => 622,  936 => 618,  929 => 614,  922 => 610,  915 => 606,  896 => 590,  889 => 586,  882 => 582,  846 => 549,  821 => 527,  815 => 524,  805 => 517,  799 => 514,  789 => 507,  783 => 504,  773 => 497,  767 => 494,  757 => 487,  751 => 484,  741 => 477,  735 => 474,  725 => 467,  719 => 464,  709 => 457,  703 => 454,  649 => 403,  645 => 402,  641 => 401,  637 => 400,  633 => 399,  629 => 398,  625 => 397,  621 => 396,  617 => 395,  613 => 394,  586 => 370,  577 => 368,  573 => 367,  568 => 365,  561 => 361,  540 => 343,  529 => 335,  519 => 332,  513 => 329,  507 => 326,  494 => 320,  488 => 317,  482 => 314,  470 => 305,  460 => 302,  454 => 299,  448 => 296,  435 => 290,  429 => 287,  423 => 284,  410 => 278,  404 => 275,  398 => 272,  384 => 265,  378 => 262,  372 => 259,  357 => 247,  347 => 244,  341 => 241,  335 => 238,  322 => 232,  316 => 229,  310 => 226,  296 => 215,  286 => 212,  280 => 209,  274 => 206,  261 => 200,  255 => 197,  249 => 194,  235 => 184,  229 => 180,  208 => 162,  192 => 149,  176 => 136,  150 => 113,  122 => 88,  118 => 87,  114 => 86,  110 => 85,  69 => 51,  46 => 30,  43 => 29,  37 => 27,  11 => 26,);
    }
}
