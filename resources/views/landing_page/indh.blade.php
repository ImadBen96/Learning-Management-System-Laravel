@extends('landing_page.layout.layout_app')
@section('content')
<!-- .end navbar -->
<!-- header -->
<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div class="header-page-content">
            <h1>INDH</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a style="color: #06933e;" href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">L’Initiative Nationale pour le Développement Humain</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- .end header -->


<section class="about-section pt-50 pb-70">
    <div class="container-fluid desk-p-0">
        <div class="row align-items-center desk-mlr-0">
            <div class="col-12 col-lg-7 pb-30 desk-plr-0 order-lg-2 ">
                <div class="desk-mr-auto desk-pad-left-30">
                    <div style="padding-right: 30px;"  class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                        <div class="overlay-text">
                            <h3 class="font-family-3">L’Initiative<br/> Nationale pour<br/> le Développ<br/>ement<br/> Humain
                                </h3>
                        </div>
                        <h2><span style="color: #06933e;">L’Initiative Nationale pour le Développement Humain</span></h2>
                        <p style="text-align: justify;">L’Initiative Nationale pour le Développement Humain (INDH) est un programme de développement, lancé par Sa Majesté le Roi Mohammed VI   le 18 Mai 2005. C’est un programme axé sur la lutte contre la pauvreté, la précarité et l’exclusion sociale. La dignité, la confiance des citoyens en eux et en l’avenir de leur pays, leur participation effective au diagnostic de leurs besoins et leur déclinaison en projets, la bonne gouvernance et la pérennité sont autant de valeurs qui animent cette initiative.</p>
                        <p style="text-align: justify;">La première phase de l’INDH, (2005/2010), s’est articulée autour de quatre programmes qui ont ciblé différentes catégories sociales concernées. La lutte contre la pauvreté en milieu rural, l’exclusion sociale en milieu urbain et la précarité constituent les principaux objectifs assignés à ces programmes.</p>
                        <p style="text-align: justify;">Par ailleurs, cette phase a compté aussi un programme transversal adressé à des communes non cibles sur la base d’appel à projets.</p>
                        <p style="text-align: justify;">Quant à la deuxième phase, (2011-2015), elle a donné une forte impulsion à l’INDH dans la mesure où l’enveloppe financière qui lui est allouée a été augmentée. Lors de cette phase, des communes rurales et les quartiers urbains pauvres ont été ciblés, ainsi qu’un million de bénéficiaires dans 3300 villages appartenant à 22 régions montagneuses et isolées.</p>

                    </div>


                </div>

            </div>

            <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1">
                <div class="text-center">
                    <img style="width: 79%;" src="{{ asset('assets/images/SM_Le_Roi_.jpg') }}" alt="study">
                </div>
            </div>

        </div>


        <div style="padding-bottom: 10px !important;" class="about-section  position-relative overflow-hidden">


            <div class="container">
                <div class="section-title">
                    <h2><span style="color: #06933e !important;">Le capital humain</span></h2>
                    <p>Au cœur des 4 programmes phares de l’INDH</p>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-6 col-lg-3 pb-30">
                        <img src="{{ asset('images/indh01.png') }}" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pb-30">
                        <img src="{{ asset('images/indh02.png') }}" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pb-30">
                        <img src="{{ asset('images/indh03.png') }}" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3 pb-30">
                        <img src="{{ asset('images/indh04.png') }}" />
                    </div>
                    <div class="text-details-content  desk-pad-right-40">


                        <p>La 3ème phase de l’Initiative Nationale pour le Développement Humain (INDH), (2019-2023), lancée le 19 septembre 2018 sous la présidence de Sa Majesté le Roi Mohammed VI, vient consolider les acquis enregistrés au cours des précédentes phases. Elle repose sur quatre programmes axés sur la réduction du déficit en termes d’infrastructures et de services de base dans les zones sous équipées, l’accompagnement des personnes en situation de précarité, l’amélioration du revenu et l’intégration économique des jeunes, ainsi que le soutien du développement humain en faveur des générations montantes à travers l’investissement dans le capital humain.</p>
                        <div class="section-title">
                            <h2 style="font-size: 35px;font-weight: bold;">Programme 3 de <span style="color: #06933e;"> l’INDH</span></h2>
                            <p class="avenir">« Amélioration du revenu et inclusion économique des jeunes »</p>
                            <p style="margin: 0px;" class="avenir">Le chômage des jeunes et les inégalités de revenu constituent les principaux freins au développement humain.</p>
                            <p style="margin: 0px;" class="avenir">Pour atteindre ses objectifs, l’INDH intervient sur les leviers suivants :</p>

                        </div>
                       </div>
                    <div class="row">

                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div style="height: 100%;background: linear-gradient(90deg, rgba(84,221,33,0.2413340336134454) 0%, rgba(5,172,80,0.05926120448179273) 100%);padding: 34px;border-radius: 8px;" class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-resume"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3 class="avenir">LES HOMMES</h3>
                                    <p class="avenir">Contribuer à développer l’employabilité des jeunes à travers une meilleure adéquation entre les qualifications et les besoins du marché du travail</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div style="height: 100%;background: linear-gradient(90deg, rgba(84,221,33,0.2413340336134454) 0%, rgba(5,172,80,0.05926120448179273) 100%);padding: 34px;border-radius: 8px;" class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3 class="avenir">LE SYSTÈME</h3>
                                    <p class="avenir">Mettre en place un cadre favorisant la coordination entre les différents intervenants, notamment au niveau provincial</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-4 pb-30">
                            <div style="height: 100%;background: linear-gradient(90deg, rgba(84,221,33,0.2413340336134454) 0%, rgba(5,172,80,0.05926120448179273) 100%);padding: 34px;border-radius: 8px;" class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3 class="avenir">LES PROJETS</h3>
                                    <p class="avenir">Accompagner le développement de projets innovants et contribuer à leur financement</p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
            <div class="container">
                <div style="margin-top: 13px;" class="section-title">
                    <h2 style="font-size: 35px;font-weight: bold;">Remobiliser les jeunes sur  <span style="color: #06933e;"> la route du progrès</span></h2>
{{--                    <p>« Amélioration du revenu et inclusion économique des jeunes »</p>--}}
                </div>
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">
                        <div class="help-card help-card-center">

                            <div class="help-card-content">

                                <p style="text-align: justify;">Depuis son lancement par Sa Majesté le Roi Mohammed VI Que Dieu l’Assiste, le 18 mai 2005, l’INDH a permis de dresser un bilan de réalisations positif qui s’est répercuté sur les conditions de vie des populations cibles. En témoigne l’impact sur les bénéficiaires, le nombre de projets réalisés et la reconnaissance nationale et internationale dont elle jouit en tant que démarche intégrée et inclusive pour le développement humain. C’est dans cette dynamique que la 3ème phase de l’INDH (2019-2023), lancée le 19 septembre 2018 par Sa Majesté le Roi Mohammed VI que Dieu l’Assiste, vient pour marquer un point d’inflexion et recentrer ses interventions sur les aspects immatériels du développement humain. La mise en œuvre de cette phase est fondée sur quatre programmes dont le Programme 3 : « Amélioration du revenu et inclusion économique des jeunes » qui vise à contribuer à l’amélioration de la situation économique et sociale des populations défavorisées, notamment les jeunes, par l’accompagnement à l’emploi, à l’entrepreneuriat ainsi qu’à l’appui aux projets s’inscrivant dans l’économie sociale et solidaire (ESS). Le programme 3 de l’INDH trouve son fondement, entre autres, à apporter sa contribution au développement économique local et aux problématiques liées au chômage et l’inactivité des jeunes qui restent relativement élevés au Maroc. En effet, le Royaume compte environ 1.2 million de chômeurs (10.2% de la population en âge de</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">
                        <div class="help-card help-card-center">

                            <div class="help-card-content">

                                <p style="text-align: justify;"> travailler). Le taux de chômage des jeunes est de 26.5% chez les 15-24 ans dont 29.3% de NEET (jeunes ne fréquentant pas d’école, ne sont pas en formation et qui n’ont pas un emploi) et 15.4% chez la tranche d’âge 25-34 ans. Par ailleurs, le programme 3 occupe une part importante dans le cadre de la budgétisation de l’INDH, alloué au titre de la période 2019 à 2023, qui accorde une enveloppe budgétaire de 4 milliards de dirhams. Ce budget témoigne de l’engagement de l’INDH en faveur de l’inclusion économique des jeunes. Aujourd’hui et malgré les opportunités qu’offrent les différents organismes et institutions nationaux, en termes d’employabilité et d’accès à l’entrepreneuriat, certaines faiblesses persistent encore limitant l’accessibilité à ces offres. C’est ainsi que l’INDH, à travers le programme 3, essaye de répondre dans son périmètre d’action à cette problématique, à travers l’écoute, l’orientation et l’accompagnement des jeunes en fédérant l’ensemble des parties prenantes concernées selon une démarche fédératrice. Force est de souligner que les projets et actions qui seront mis en œuvre dans le cadre du programme 3 doivent cibler en priorité les jeunes en situation d’inactivité en privilégiant l’approche genre tout en s’inscrivant dans le respect des termes du manuel environnemental et social de l’INDH.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
</section>

@endsection

<!-- .end about-section -->
<!-- course-section -->

<!-- .end course-section -->
<!-- help-section -->

<!-- .end help-section -->
<!-- video-section -->

<!-- .end video-section -->

<!-- course-section -->

