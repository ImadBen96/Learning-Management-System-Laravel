
@extends('landing_page.layout.layout_app')

@section('content')
    <header style=" background-image: url( {{ asset('images/header_last1.png') }} ) !important;background-size:auto; padding-top: 80px !important;" class="header-bg-three">
        <div class="container-fluid">
            <div  class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div style="margin-left: 39px;text-align: center;" class="header-content  desk-pad-right-30">
                        <div class="header-content-text">
                            <h1 style="color: #fcc400;font-size: 58px; font-family: 'Avenir', sans-serif !important;">Plateforme des jeunes Nouaceur</h1>
                            <p style="margin-bottom: 15px;">Jeunes sans emploi ou ayant un emploi précaire, diplômés sans emploi, ou acteurs locaux et jeunes porteurs de projets, âgés de 18 à 45 ans et issus de la province de Nouaceur, vous êtes tous les bienvenus au sein de la plateforme des jeunes Nouaceur!</p>
                        </div>

                    </div>
                </div>
                <div style="display: flex;justify-content: center;" class="col-sm-12 col-md-12 col-lg-12 videio">
                    <div>
                        <div style="margin-top: 0px !important;" class="video-content">
                            <img src="{{ asset('images/back_photo.png') }}" alt="vide">
                            <div class="video-button video-button-thirdcolor">
                                <a href="https://www.youtube.com/watch?v=NtGAQJXlCok" id="video-popup"><i class="flaticon-play-button"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- .end header -->
    <section class="about-section  pb-70">
        <div class="container-fluid desk-p-0">
            <div class="row align-items-center desk-mlr-0">
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-2 pb-30">
                    <div class="max-600 desk-mr-auto desk-pad-left-30">
                        <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-secondcolor position-relative">

                            <h2>La Plateforme des <span style="color:#06933e !important;">jeunes de Nouaceur</span></h2>
                            <p style="text-align: justify;">Un projet royal, réalisé dans le cadre du programme III de l’INDH : Amélioration du revenu et inclusion économique des jeunes qui vise à contribuer à l’amélioration de la situation économique et sociale des populations défavorisées de la Province de Nouaceur,notamment les jeunes, par l’accompagnement à l’emploi, à l’entrepreneuriat ainsi qu’à l’appui aux projets s’inscrivant dans l’économie sociale et solidaire.</p>
                        </div>
                        <div class="section-button-group">
                            <div class="section-button-item">
                                <a href="#" type="button" class="btn btn-success btn-radius">Voir Plus <i class="flaticon-edit"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="text-center">
                        <img style="width: 60% !important;position: relative;top: 13px;" src="{{ asset('images/logo_landing.png') }}" alt="cook">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section -->

    <!-- .end about-section -->
    <section class="help-section  pb-70">
        <div class="container">
            <div class="section-title">
                <h2>La Plateforme joue aujourd’hui un <span>rôle</span> de : </h2>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div style="background: #ffe9e9;padding: 15px;height: 100%;border-radius: 8px;" class="help-card help-card-center">
                        <div style="background-color: #e52a2e !important;" class="help-card-thumb">
                            <img width="40" src="{{ asset('images/espaces_daccueil.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Espaces d’accueil, d’écoute &amp; d’orientation</h3>
                            <p>Accueil des visiteurs, écoute et recueil des besoins, conseil et orientation</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div style="background: #d7f6ff;padding: 15px;height: 100%;border-radius: 8px;" class="help-card help-card-center">
                        <div style="background-color: #00afe2 !important;" class="help-card-thumb">
                           <img width="40" src="{{ asset('images/espace_de_formation.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Espace de formation en employabilité</h3>
                            <p>Soft Skills, placement ,Suivi</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div style="background: #fff6d5;padding: 15px;height: 100%;border-radius: 8px;" class="help-card help-card-center">
                        <div style="background-color: #fcc400 !important;" class="help-card-thumb">
                            <img width="40" src="{{ asset('images/accompagnement.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>espace de formation et accompagnement en entrepreneuriat/économie sociale et solidaire.</h3>
                            <p>Sourcing terrain,conseil et accompagnement,suivi des porteurs de projets</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-3 col-lg-3 pb-30">
                    <div style="background: #c3ffda;padding: 15px;height: 100%;border-radius: 8px;" class="help-card help-card-center">
                        <div style="background-color: #00782d !important;" class="help-card-thumb">
                            <img width="40" src="{{ asset('images/rencontre.png') }}" />
                        </div>
                        <div class="help-card-content">
                            <h3>Hub de rencontre et d’échange</h3>
                            <p>Renforcement des acteurs locaux , développement de partenariat ,organisation des événements</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="course-section   position-relative">
        <div class="section-title section-title-shapeless section-title-lineless section-title-secondcolor">
{{--            <small class="font-family-3">Online Indicateurs</small>--}}
            <h2>Les <span>Indicateurs</span> des réalisations</h2>
        </div>
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
    </section>


    <!-- about-section -->
    <section class="about-section pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12 pb-30">
                    <div class="section-title section-title-left text-center">
                        <h2> <span style="color: #06933e;"> Nos partenaires</span> </h2>
                        <p style="margin: 0;" class="avenir">La création de la plateforme des jeunes Nouaceur est le fruit d'un partenariat initié en 2014, entre la province de Nouaceur et l’association l’Heure Joyeuse.</p>
                          <p class="avenir">D’autres partenaires, privés et publics, sont aussi impliqués dans les activités de la plateforme.</p>
                    </div>
                    <div class="partner-section position-relative">

                        <div class="container">
                            <div class="partner-carousel-two swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/1.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img  src="{{ asset('images/partenaires/2.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/3.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/4.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/5.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/6.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/7.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/8.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/9.png') }}" alt="partner"></a>
                                    </div>
                                    <div class="partner-item swiper-slide">
                                        <a href="#"><img src="{{ asset('images/partenaires/10.png') }}" alt="partner"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="faq-accordion text-center mt-4">
                        <div class="header-button-item">
                            <a href="#" class="btn btn-success btn-radius">Voir toutes les partenaires </a>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="course-section   pb-70">
        <div class="container">
            <div class="section-title-group">
                <div class="section-title section-title-shapeless">
                    <h2>Nos dernières <span>actualités</span></h2>
                </div>
                <a href="{{ route('all_actualite') }}" class="btn btn-success btn-radius">Voir toutes les actualités </a>

            </div>
            <div class="row">
                @foreach($actualites as $actualite)
                <div class="col-12 col-md-6 col-lg-4 pb-30">
                    <div class="course-flat-card">
                        <div class="course-card-thumb">
                            <a href="{{ route('single.actualite',$actualite->id) }}"><img src="images/actualite/{{ $actualite->photo }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <ul class="course-location">
                                <li><i class="flaticon-placeholder"></i> Plateforme des Jeunes Nouaceur </li>
                            </ul>
                            <h3 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ $actualite->{'title_'.app()->getLocale()} }}</h3>
                            <p><a href="{{ route('single.actualite',$actualite->id) }}" class="redirect-link @if( app()->getLocale() == 'ar' ) arab  @endif">Plus de détails<i class="flaticon-right-arrow"></i></a></p>
                        </div>
                        <ul class="course-filter-list">
                            <li class="course-filter-danger">{{ $actualite->created_at }}</li>
                        </ul>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- .end course-section -->
    <!-- partner-section -->

    <section style="background: aliceblue;padding: 40px;" class="about-section  ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">

                        <h2 style="text-align: center;"><span style="color: #00afe2 !important">Plateforme des Jeunes Nouaceur</span></h2>
                    </div>

                </div>
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-feedback">
                        <p class="about-feedback-paragraph">Une plateforme provinciale physique dédiée aux jeunes : </p>
                        <p style="text-align: justify;" class="about-feedback-paragraph">« Plateformes des jeunes / Carrefour des jeunes » créée au niveau de Dar Bouazza avec 4 antennes d’accueil, d’écoute et d’orientation au niveau de Mkanssa, Bouskoura et Ouled Saleh; pour accueillir les jeunes en quête d’opportunités. Répartie en trois axes :</p>
                    </div>
                </div>
                <div class="col-12 col-lg-12 pb-30">
                    <div class="about-section  position-relative overflow-hidden">


                        <div class="">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%;    background: #ffeeef !important;"  class="about-item-card about-item-card-thirdcolor">

                                        <div class="about-card-icon">
                                            <img style="width: 53% !important;" src="{{ asset('images/gestion_1.svg') }}"  alt="icon">
                                        </div>
                                        <div class="about-card-text">
                                            <a style="width: 100%;font-size: 18px;font-weight: bold;" href="{{ route('axe_gestion') }}" class="btn btn-danger btn-radius">Axe gestion </a>

                                       </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%;background: #fff9e7 !important;"  class="about-item-card about-item-card-thirdcolor">


                                        <div class="about-card-icon">
                                            <img style="width: 53% !important;" src="{{ asset('images/Entrepreneuriat.svg') }}" />
                                        </div>
                                        <div class="about-card-text">
                                            <a style="width: 100%;font-size: 18px;font-weight: bold;background-color: #f5c53d !important;" href="{{ route('axe-entrepreneuriat') }}" class="btn btn-warning  btn-radius">Axe appui à l’Entrepreneuriat</a>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-lg-4 pb-30">
                                    <div style="height: 100%; background: #b8f9d5 !important" class="about-item-card about-item-card-thirdcolor">

                                        <div class="about-card-icon">
                                           <img style="width: 53% !important;" src="{{ asset('images/icon_l.svg') }}" />
                                        </div>
                                        <div class="about-card-text">
                                            <a style="width: 100%;font-size: 18px;font-weight: bold;background-color: #b8f9d5 !important" href="{{ route('axe_employabilite') }}" class="btn btn-success  btn-radius">Axe appui à l’Employabilité  </a>


                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-12 pb-30">

                                    <div class="about-feedback">
                                        <p class="about-feedback-paragraph">
                                        <p style="margin-bottom: 38px !important;" class="about-feedback-paragraph">Elle joue le rôle d’un hub qui interconnecte les différents intervenants de l’écosystème mis en place pour assurer l’intégration des jeunes. <br>Une structure dédiée principalement à l’écoute, l’orientation et l’accompagnement est dotée des espaces de travail en commun (coworking spaces), offrant ainsi aux jeunes l’accès à l’information et le réseautage, des opportunités en matière d’employabilité ainsi que le soutien à l’entrepreneuriat. <br></p>
{{--                                        <div class="section-title mt-15">--}}
{{--                                            <h2><span>A savoir</span>  </h2>--}}
{{--                                        </div>--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">--}}
{{--                                                <div class="help-card help-card-center">--}}
{{--                                                    <div class="help-card-thumb">--}}
{{--                                                        <i class="flaticon-resume"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="help-card-content">--}}
{{--                                                        <h3>Un espace d’accueil</h3>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">--}}
{{--                                                <div class="help-card help-card-center">--}}
{{--                                                    <div class="help-card-thumb">--}}
{{--                                                        <i class="flaticon-satisfaction"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="help-card-content">--}}
{{--                                                        <h3>Un espace d’écoute et orientation </h3>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">--}}
{{--                                                <div class="help-card help-card-center">--}}
{{--                                                    <div class="help-card-thumb">--}}
{{--                                                        <i class="flaticon-satisfaction"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="help-card-content">--}}
{{--                                                        <h3>Un espace d’accompagnement</h3>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                        </div>--}}
                                        <div class="section-title mt-15">
                                            <h2><span style="    color: #00afe2 !important;">Population cible Résidant dans la province de Nouaceur</span>  </h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div style="background-color: #e52a2e !important;" class="help-card-thumb">
                                                        <i class="flaticon-resume"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Jeunes âgés de 18 à 45 ans</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div style="background-color: #00afe2 !important;" class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>En recherche active d’emploi</h3>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-4 col-lg-4 pb-30">
                                                <div class="help-card help-card-center">
                                                    <div style="background-color: #fcc400 !important" class="help-card-thumb">
                                                        <i class="flaticon-satisfaction"></i>
                                                    </div>
                                                    <div class="help-card-content">
                                                        <h3>Résidant dans la Préfecture de Nouaceur</h3>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('script')
@endsection



