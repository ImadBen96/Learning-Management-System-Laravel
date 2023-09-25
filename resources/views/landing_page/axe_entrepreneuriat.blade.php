@extends('landing_page.layout.layout_app')
<!-- header -->
@section('content')
<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div style="max-width:none;" class="header-page-content">
            <h1 @if( app()->getLocale() == 'ar' ) class="arab" @endif>Axe appui à l&#39;entrepreneuriat des jeunes</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="@if( app()->getLocale() == 'ar' ) arab @endif" style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                    <li class="breadcrumb-item active @if( app()->getLocale() == 'ar' ) arab @endif" aria-current="page">Axe appui à l&#39;entrepreneuriat des jeunes</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- .end header -->
<section class="about-section pt-50 pb-70">
    <div class="container-fluid desk-p-0">
        <div class="row align-items-center desk-mlr-0">
            <div class="col-12 col-lg-7 pb-30 desk-plr-0 order-lg-2 pb-30">

                <div class="desk-mr-auto desk-pad-left-30">
                    <div style="padding-right: 30px;"  class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                        <div class="overlay-text">
                            <h3 class="font-family-3">Axe
                                <br/>appui à <br/>
                                l&#39;entrepr<br/>
                                eneuriat<br/>
                                des jeunes</h3>
                        </div>
                        <h2><span style="color: #06933e;">Axe appui à l&#39;entrepreneuriat des jeunes</span></h2>
                        <p style="text-align: justify;">L’appui à l’entrepreneuriat chez les jeunes vise à promouvoir et développer la culture de l’entrepreneuriat chez les jeunes et encourager les concours d’idées dans les secteurs porteurs et ce à travers :</p>
                        <p style="text-align: justify;">L’appui à la création d’une nouvelle génération de projets générateurs de revenu notamment des petites et très petites entreprises </p>
                        <p style="text-align: justify;">La mise en œuvre d’une offre d’appui couvrant de façon homogène et continue tout le processus d’appui à l’entrepreneuriat (appui pré et post création).</p>
                        <p style="text-align: justify;">L’amélioration de revenu vise à apporter un accompagnement au profit des porteurs de projets issus de l’analyse des chaines de valeur et des coopératives ainsi que les autres organisations professionnelles œuvrant dans le domaine de l’économie sociale et solidaire.</p>
                        <p style="text-align: justify;">L’objectif consiste à développer les perspectives des activités économiques locales issues des résultats des analyses de chaines de valeurs à travers l’accompagnement des porteurs de projets, des structures existantes ayant un fort potentiel de croissance et créant des opportunités d’emploi pour les jeunes ou des structures nouvellement créées répondant aux critères de création de valeur.</p>

                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1 pb-30">
                <div class="text-center">
                    <img style="width: 95%;" src="{{ asset('images/logo_HD.jpg') }}" alt="study">
                </div>
            </div>
        </div>
        <div style="padding-bottom: 25px;" class="about-section   position-relative overflow-hidden">


            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div style="max-width: 100% !important;" class="section-title mt-15">
                            <h2><span>Axe de soutien à l’économie sociale et solidaire</span></h2>
                            <p>Des mesures d’accompagnement spécifiques sont mises en œuvre pour appuyer les coopératives, les groupements d’intérêt économique et les TPMEs existantes et les accompagner dans leur développement à travers : </p>
                        </div>

                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">

                        <div style="background-color: #fbc300;" class="about-item-card about-item-card-thirdcolor">
                            <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                            <div class="about-card-text">
                                <h6 style="background: linear-gradient(90deg, rgba(246,3,3,1) 0%, rgb(255 76 65) 100%);
    padding: 8px;
    border-radius: 8px;"><span style="color: #fefefe;
    font-size: 28px;
    font-weight: bold;" class="">Appui Technique </span></h6>
                                <p style="    color: white;">Concerne l’apport d’aide lors de la création des coopératives ou TPMEs porteurs de projets à fort impact, ou la mobilisation d’une assistance technique pour la labélisation et la certification de qualité, et ce de concerte avec les départements ministériels concernés.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 pb-30">
                        <div style="background-color: #fbc300;" class="about-item-card about-item-card-thirdcolor">
                            <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                            <div class="about-card-text">
                                <h6 style="background: linear-gradient(90deg, rgba(246,3,3,1) 0%, rgb(255 76 65) 100%);
                                    padding: 8px;
                                    border-radius: 8px;"><span style="color: #fefefe;
    font-size: 28px;
    font-weight: bold;"><span style="color: white;" class=""> Appui Financier</span></h6>
                                <p style="color: white;">Destiné à appuyer le processus d'exploitation des coopératives, GIE et TPMEs afin de les inciter à la création de l’emploi et de l’auto-emploi, en particulier pour les jeunes.<br/><br/></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div style="max-width: 100% !important;" class="section-title mt-15">
                            <h2 class="avenir"><span>Axe de soutien aux projets générateurs de revenu </span>  </h2>
                            <p class="avenir">L’axe de soutien aux projets générateurs de revenu prévoit l’organisation d’un concours d’idées inspiré des Hackathons en substitution des appels à projets classiques. 14 (à enlever) Il s'agit en l'occurrence de mobiliser les jeunes dans un esprit de concours d’idées et de faire émerger des projets innovants qui répondent à des problématiques de développement local en relation avec les chaines de valeurs. Le concours d’idées concerne :</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4 col-lg-3 pb-30">
                            <div class="help-card help-card-center">
                                <div style="background-color: #fbc300 !important;" class="help-card-thumb">
                                    <i class="flaticon-resume"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les coopératives et leurs unions (conforme à la loi 112-12) </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 pb-30">
                            <div class="help-card help-card-center">
                                <div style="background-color: #e4332d !important;" class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les GIE (le Groupement d’intérêt économique) </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4 col-lg-3 pb-30">
                            <div class="help-card help-card-center">
                                <div style="background-color: #38a9db !important;" class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les TPMEs (Sociétés de personnes et SARL)</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div class="help-card help-card-center">
                                <div class="help-card-thumb">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <div class="help-card-content">
                                    <h3>Les personnes disposant du statut <br/> «Auto-entrepreneurs» </h3>
                                </div>
                            </div>
                        </div>




                    </div>
                    <div  class="text-details-content  desk-pad-right-40">


                        <p>L’Heure Joyeuse est une association à but non lucratif créée en 1959 ; reconnue d’utilité publique, elle est engagée pour la lutte contre l’exclusion sociale et professionnelle des personnes en situation défavorisée. Elle a pour mission d’œuvrer, à travers l’Education, l’employabilité et l’entrepreneuriat, à l’inclusion socio-économique des jeunes en situation vulnérable, en plaçant l’innovation sociale au cœur de son action. </p>
                        <p>Sa vision est de Donner aux jeunes l’opportunité de s’accomplir et trouver leur voie, et de façonner leur avenir avec dignité. Composée aujourd’hui de 10 centres, au siège - Belvédère, la plateforme - Sidi-Maarouf, Dar Bouazza - la plateforme des jeunes Nouaceur, l’antenne et CFA – Mkanssa, l’antenne et CFA Bouskoura, à l’antenne – Oulad SALAH, la Plateforme des jeunes - BENMSIK, la plateforme des Jeunes - Ain Sbaa et la plateforme des Jeunes - Roches Noires tous situés dans la région du Grand Casablanca.</p>

                    </div>


                    <div style="max-width: 100% !important;" class="section-title mt-50">
                        <h2><span class="avenir">L’Heure Joyeuse est organisée en 4 pôles :</span>  </h2>
                        <p class="avenir">Pour mieux s’aligner à ses nouvelles orientations stratégiques.</p>

                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;background-color: #fff8f9;" class="about-item-card about-item-card-thirdcolor">

                                <div class="about-card-icon">
                                    <img style="width: 50%;" src="{{ asset('images/icon_gestion.svg') }}" alt="icon">

                                </div>
                                <div class="about-card-text">
                                    <h6 style="background: #e52a2e;padding: 5px;border-radius: 8px;font-size: 22px;font-weight: bold;"><span style="color: #fff;" class="">Pôle Education </span></h6>
                                    <p>
                                        Ce pôle a pour objectif d‘assurer un accompagnement éducatif, pédagogique et scolaire adapté aux besoins des enfants peu ou pas scolarisés.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;background-color: #f6fdff;" class="about-item-card about-item-card-thirdcolor">

                                <div class="about-card-icon">
                                    <img style="width: 50%;" src="{{ asset('images/icon_emploibilite.svg') }}" />
                                </div>
                                <div class="about-card-text">
                                    <h6 style="background: #00afe2;padding: 5px;border-radius: 8px;font-size: 22px;font-weight: bold;"><span style="color: #fff;" class="">Pôle Employabilité </span></h6>
                                    <p>Ce pôle a pour objectif de renforcer l’employabilité des jeunes en situation de NEET, peu ou qualifiés. Deux programmes phares sont mis en place au sein de ce pôle, à savoir : La COIP : Cellule d’orientation et d’insertion professionnelle et la Formation Professionnelle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;background-color: #fffaea;" class="about-item-card about-item-card-thirdcolor">

                                <div class="about-card-icon">
                                    <img style="width: 50%;" src="{{ asset('images/icon_Entrepreneuiat.svg') }}" />
                                </div>
                                <div class="about-card-text">
                                    <h6 style="background: #fcc400;padding: 5px;border-radius: 8px;font-size: 22px;font-weight: bold;"><span style="color: #fff;" class="">Pôle Entrepreneuiat </span></h6>
                                    <p>Ce pôle a pour objectif d’accompagner les jeunes porteurs d’idées de projets ou de projets informels dans le lancement et/ou la structuration de leurs projets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-3 pb-30">
                            <div style="height: 100%;background-color: #adffd1;" class="about-item-card about-item-card-thirdcolor">

                                <div class="about-card-icon">
                                    <img style="width: 50%;" src="{{ asset('images/icon_ Citoyen_5.svg') }}" />
                                </div>
                                <div class="about-card-text">
                                    <h6 style="background: #13c461;padding: 5px;border-radius: 8px;font-size: 22px;font-weight: bold;"><span style="color: #ffffff;" class="">Pôle Engagement Citoyen</span></h6>
                                    <p>Ce pôle a été créé avec objectif principal de réaffirmer l’engagement social et sociétal continu de l’Heure Joyeuse, les programmes que met en place ce pôle sont : la sensibilisation aux ODD, l’accompagnement des associations et le plaidoyer.</p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>
</section>
<section class="about-section">
    <div class="container-fluid desk-p-0">
        <div class="row align-items-center desk-mlr-0">
            <div class="col-12 col-lg-12 pb-30 desk-plr-0 order-lg-2 pb-30">
                <div class="desk-mr-auto desk-pad-left-30">
                    <div class="about-section-title text-center section-title section-title-left section-title-shapeless section-title-lineless section-title-secondcolor position-relative">
                        <div class="overlay-text">
                            <h3 class="font-family-3">Les Indicateurs</h3>
                        </div>
                        <h2><span style="color: #06933e;">Les Indicateurs</span></h2>
                        <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
<div style="background-color: aliceblue;" class="about-section position-relative">


    <div class="container position-relative">
        <div style="padding-top: 30px;" class="record-grid">
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div class="counter">200</div>
                        <span>+</span>
                    </div>
                    <div class="record-item-text">
                        <p>Projects Finished</p>
                    </div>
                </div>
            </div>
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div style="color: #e52a2e !important;" class="counter">199</div>
                        <span style="color: #e52a2e !important;">+</span>
                    </div>
                    <div class="record-item-text">
                        <p style="color: #e52a2e !important;">Satisfied Clients</p>
                    </div>
                </div>
            </div>
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div style="color: #00afe2 !important" class="counter">150</div>
                        <span style="color: #00afe2 !important">+</span>
                    </div>
                    <div class="record-item-text">
                        <p style="color: #00afe2 !important">Online Students</p>
                    </div>
                </div>
            </div>
            <div class="record-grid-item">
                <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                    <div class="record-item-number">
                        <div style="color: #fcc400 !important;" class="counter">20</div>
                        <span style="color: #fcc400 !important;">+</span>
                    </div>
                    <div class="record-item-text">
                        <p style="color: #fcc400 !important;">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="help-section pt-100">
    <div class="container">
        <div class="">
            <div class="section-title">
                <h2>Gallery<span> Photos </span>Axe L'entrepreneuriat :</h2>
            </div>




                <!--Carousel Gallery-->
                <div class="gallery-tab-details popup-gallery">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 element-item photos campus pb-30" style="position: absolute; left: 0px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/_Q7B0604.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/_Q7B0604.jpg') }}" title="Photos"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 400px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/_Q7B0605.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/_Q7B0605.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students photos pb-30" style="position: absolute; left: 800px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/_Q7B0663.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/_Q7B0663.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 0px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/_Q7B0715.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/_Q7B0715.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/_Q7B0750.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/_Q7B0750.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/DSC02747.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/DSC02747.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/DSC02806.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/DSC02806.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/DSC02845.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/DSC02845.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_entrepreneuriat/DSC02899.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_entrepreneuriat/DSC02899.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--#Carousel Gallery-->



                <!-- /.gallery-slider -->


        </div>
    </div>
</section>
<div style="padding-top: 7px !important;" class="terms-policy-section p-tb-100">
    <div class="container">
        <div class="section-title">
            <h2><span class="avenir">Concours d’idées de projets</span></h2>
            <p class="avenir">Vous avez une idée de projet et avez besoin de conseils ou de soutien, nos équipes sont à votre écoute.</p>
        </div>

        <div class="row">
            @isset($concours)
                @foreach($concours as $concour)
                     <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="course-flat-card course-flat-card">
                    <div class="course-card-thumb">
                        <a href="{{ route('concours-single',$concour->id) }}"><img src="{{ asset('images/concours/'.$concour->photo) }}" alt="course"></a>
                    </div>
                    <div class="course-card-content">
                        <ul class="course-entry-list">
                            <li><i class="flaticon-open-book"></i> {{ $concour->{'lieu_'.app()->getLocale() }  }}</li>
                            <li><i class="flaticon-man"></i>{{ $concour->email }}</li>
                        </ul>
                        <h3 @if( app()->getLocale() == "fr" ) class="avenir"  @endif style="text-align: justify; ">{{ $concour->{'title_'.app()->getLocale() }  }} </h3>
                        <p style="    background: #f6fdff;
    padding: 8px;
    /* text-align: center; */
    font-size: 18px;
    font-weight: bold;
    border-radius: 8px;
    text-align: start;
    padding-left: 24px;"><a style="color: #00afe2 !important;" href="{{ route('concours-single',$concour->id) }}" class="redirect-link">Apprendre encore plus <i class="flaticon-right-arrow"></i></a></p>
                    </div>
                    <ul class="course-filter-list">
                        <li style="background-color: #e4332d !important;" class="course-filter course-filter-focus">{{ $concour->limite_date }}</li>
                    </ul>
                </div>
            </div>
                @endforeach
          @endisset


        </div>

    </div>
</div>

<section style="background-color: #f6fdff !important;padding-top: 35px !important;" class="offer-section pt-100 pb-70">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-12 col-lg-5">
                <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">

                    <h2>Voir Tous Les  <span style="color: #00afe2 !important;">Entrepreneurs</span></h2>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                <div class="about-feedback">
                    <p class="about-feedback-paragraph">Minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in magnam aliquam quaerat voluptatem</p>
                </div>
            </div>
        </div>
        <div class="row">
            @isset($Entrepreneurs)
                @foreach($Entrepreneurs as $Entrepreneur)
                   <div class="col-12 col-md-6 col-lg-3 pb-30">
                <div class="instructor-card">
                    <div class="instructor-card-thumb">
                        <a href="{{ route('axe-entrepreneuriat-single',$Entrepreneur->id) }}"><img src="{{ asset('images/entrepreneurs/'.$Entrepreneur->image_profile) }}" alt="instructor"></a>
                        <ul class="instructor-social-list">
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                            <li><a href="#"><i class="bx bxl-instagram-alt"></i></a></li>
                        </ul>
                    </div>
                    <div class="instructor-card-content">
                        <h3 style="font-size: 29px !important;"><a  @if( app()->getLocale() == "ar" )  class="arab" @endif style="color: #00afe2 !important;" href="{{ route('axe-entrepreneuriat-single',$Entrepreneur->id) }}">{{ $Entrepreneur->{'title_'.app()->getLocale() }  }}</a></h3>
                        <h4 @if( app()->getLocale() == "ar" )  class="arab" @endif >{{ $Entrepreneur->{'statut_juridique_'.app()->getLocale() }  }} </h4>
                        <p style="text-align: justify;" @if( app()->getLocale() == "ar" )  class="arab"  @endif >{{ $Entrepreneur->{'short_description_'.app()->getLocale() }  }}</p>
                    </div>
                </div>
            </div>
                @endforeach
            @endisset


        </div>


    </div>
</section>
<section class="offer-section pt-100 pb-70">
    <div class="container">
        <div style="margin-bottom: 24px;" class="row align-items-end">
            <div class="col-12 col-lg-5">
                <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">

                    <h2>Voir toutes les <span>success stories</span></h2>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 pb-30">
                <div class="about-feedback">
                    <p class="about-feedback-paragraph">Découvrez les histoires de jeunes entrepreneurs qui, grâce à leur parcours au sein de la plateforme des jeunes Nouaceur, sont allés jusqu’au bout de leurs rêves.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @isset($Entrepreneurs)
                @foreach($Entrepreneurs as $Entrepreneur)
                    <div class="col-12 col-sm-6 col-lg-3 pb-30">
                        <div class="offer-card offer-card-thirdcolor">
                            <div class="offer-card-inner">
                                <div style="background-color: #0098e6;" class="offer-card-thumb">
                                    <img src="{{ asset('images/entrepreneurs/'.$Entrepreneur->image_profile) }}" alt="course">
                                </div>
                                <div class="offer-card-content">
                                    <h3>{{ $Entrepreneur->{'title_'.app()->getLocale() }  }}</h3>
                                    <div class="entren">{!! $Entrepreneur->{'short_description_'.app()->getLocale()} !!}</div>
                                </div>
                                <a href="{{ route('axe-entrepreneuriat-single',$Entrepreneur->id) }}" class="offer-redirect-link"><i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endisset


        </div>
    </div>
</section>
@endsection
@section('scripts')
    <script type="text/javascript">



        /*start gellery*/
        $(function(){

            var swiper = new Swiper('.carousel-gallery .swiper-container', {
                effect: 'slide',
                speed: 900,
                slidesPerView: 4,
                spaceBetween: 20,
                simulateTouch: true,
                autoplay: {
                    delay: 5000,
                    stopOnLastSlide: false,
                    disableOnInteraction: false
                },
                pagination: {
                    el: '.carousel-gallery .swiper-pagination',
                    clickable: true
                },
                breakpoints: {
                    // when window width is <= 320px
                    320: {
                        slidesPerView: 1,
                        spaceBetween: 5
                    },
                    // when window width is <= 480px
                    425: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    },
                    // when window width is <= 640px
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20
                    }
                }
            });



        });

    </script>
@endsection



