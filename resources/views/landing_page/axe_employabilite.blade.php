@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ trans('messages.Axe_employabilité') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == 'ar' ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active @if( app()->getLocale() == 'ar' ) arab @endif" aria-current="page">{{ trans('messages.Axe_employabilité') }}</li>
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
                                <h3 class="font-family-3">Axe<br/> Employa<br/>bili
                                    té</h3>
                            </div>
                            <h2><span style="color: #06933e;">Axe Employabilité</span></h2>
                            <p style="text-align: justify;">L’élaboration des programmes de formation adaptés aux profils des candidats, aux besoins et aux spécificités locales représente une étape déterminante dans le processus d’accompagnement. Le programme doit comprendre des formations axées sur les besoins du marché du travail au niveau Préfectoral et Provincial, principalement pour bénéficier aux jeunes peu qualifiés.</p>
                            <p style="text-align: justify;">A l’issue de la phase d’élaboration des programmes de formation, deux types de parcours peuvent être proposés en fonction du profil des candidats, le parcours de « Formation-Employabilité » et le parcours « Formation-Insertion ».</p>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1 pb-30">
                    <div class="text-center">
                        <img style="width: 70%;" src="{{ asset('images/logo_al_jisr.png') }}" alt="study">
                    </div>
                </div>
            </div>
            <div class="about-section pb-70 position-relative overflow-hidden">


                <div class="container">
                    <div class="section-title">
                        <h2><span style="color: #06933e;">L'Employabilité, un défi à relever </span></h2>
                        <p class="avenir">Améliorer la qualité des formations et doter les jeunes des compétences nécessaires pour optimiser leur employabilité</p>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="background: #0498e4;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="color: #fff;background: #7bdf02;padding: 11px;border-radius: 8px;"><span style="color: #ffffff;font-size: 22px;font-weight: bold;" class="">Formation-Employabilité </span></h6>
                                    <p style="color: #fefefe;">Consiste à proposer une panoplie de formations en Soft Skills destinées à renforcer les compétences des jeunes en techniques de recherche d’emploi à travers des ateliers de rédaction de CV et lettre de motivation, des sessions de préparation aux entretiens d’embauche et réseautage.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-6 pb-30">
                            <div style="    background: #fcc400;" class="about-item-card about-item-card-thirdcolor">
                                <img src="assets/images/shapes/about-grid-icon.png" class="about-card-image" alt="icon">

                                <div class="about-card-text">
                                    <h6 style="background: #74dc00;padding: 11px;border-radius: 8px;"><span style="color: #fefefe;font-size: 22px;font-weight: bold;" class="">Formation-Insertion</span></h6>
                                    <p style="color: #fff;">En plus des formations en compétences techniques, comportementales et linguistiques demandées sur le marché du travail, les jeunes chercheurs d’emploi bénéficieront d’une formation dans des métiers en croissance demandés par le marché de l’emploi.<br/><br/></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-details-content  desk-pad-right-40">


                            <p>Les jeunes ayant suivi des formations de type « Formation-Insertion » bénéficieront d’une insertion en emploi formel, tout en étant déclaré par un organisme employeur affilié à la Caisse Nationale de Sécurité Sociale (CNSS). Cela vise à assurer le maintien en emploi formel pour les bénéficiaires ayant été insérés.<p>
                            <p>« Créée en 1999, l’association Al Jisr a l’insigne privilège d’être placée sous la Présidence d’honneur de Sa Majesté le Roi Mohammed VI et bénéficie de la Reconnaissance d’Utilité Publique depuis 2007. Al Jisr s’est donné pour mission de construire des projets de formation et d’insertion, de consolider des ponts entre l’école et l’entreprise, afin de permettre à chaque jeune de devenir pleinement acteur de sa vie, pour préparer ensemble le Maroc de demain.>></p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="about-section ">
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
    <div style="background-color: aliceblue;" class="about-section  position-relative">


        <div class="container position-relative">
            <div style="padding-top: 30px;" class="record-grid">
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div class="counter">783</div>
                            <span>+</span>
                        </div>
                        <div class="record-item-text">
                            <p>Nombre d'appels effectués</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #e52a2e !important;" class="counter">65</div>
                            <span style="color: #e52a2e !important;">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #e52a2e !important;">Nombre de jeunes accueillis</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #00afe2 !important" class="counter">28</div>
                            <span style="color: #00afe2 !important">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #00afe2 !important">Nombre des diplomés formés</p>
                        </div>
                    </div>
                </div>
                <div class="record-grid-item">
                    <div class="record-grid-item-inner record-grid-item-inner-secondcolor">
                        <div class="record-item-number">
                            <div style="color: #fcc400 !important;" class="counter">15</div>
                            <span style="color: #fcc400 !important;">+</span>
                        </div>
                        <div class="record-item-text">
                            <p style="color: #fcc400 !important;">nombre des non diplomés formés</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="help-section pt-100">
        <div class="container">
            <div class="pb-70 border-bottom">
                <div class="section-title">
                    <h2>Gallery<span> Photos </span>Axe Employabilité :</h2>
{{--                    <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>--}}
                </div>



                <!--Carousel Gallery-->
                <div class="gallery-tab-details popup-gallery">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 element-item photos campus pb-30" style="position: absolute; left: 0px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/IMG_0164.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/IMG_0164.jpg') }}" title="Photos"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 400px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/IMG_0235.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/IMG_0235.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students photos pb-30" style="position: absolute; left: 800px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/IMG_0264.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/IMG_0264.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 0px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/IMG_0304.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/IMG_0304.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/IMG_0226.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/IMG_0226.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/8b82e2e4-8376-43bc-a426-97b91d171ee7.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/8b82e2e4-8376-43bc-a426-97b91d171ee7.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/42a5e18f-2b91-41c4-b610-992ef85918ca.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/42a5e18f-2b91-41c4-b610-992ef85918ca.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/544d9b73-5c1b-448e-8a41-b577009f9aa0.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/544d9b73-5c1b-448e-8a41-b577009f9aa0.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/be9f8e96-a381-4a68-949a-1f88d8d34141.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/be9f8e96-a381-4a68-949a-1f88d8d34141.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/d118f164-0ffc-46fc-b9f0-9540d30d7731.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/d118f164-0ffc-46fc-b9f0-9540d30d7731.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_employabilite/f7ec619e-01e5-4b7a-9822-e6575313bcc8.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_employabilite/f7ec619e-01e5-4b7a-9822-e6575313bcc8.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
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
    <section  style="background: #f5feff;" class="course-section p-tb-100 position-relative">
        <div class="container">
            <div style="max-width: none;" class="section-title section-title-shapeless section-title-lineless section-title-thirdcolor">

                <h2><span>Opportunités d'Emploi</span></h2>
                <p>Notre équipe mobilise les acteurs du secteur économique, vos futurs employeurs, et vous présente les opportunités d'emploi qui correspondent à votre projet socio-professionnel L'équipe de l'axe "Appui à l'Employabilité" vous contactera pour plus d'informations</p>
            </div>
            <div class="row">

                @isset($recrutements)
                    @foreach($recrutements as $recrutement)

                        <div class="col-12 col-lg-6 pb-30">
                            <div style="background: #f0fffb;" class="course-card course-card-list course-card-thirdcolor">
                                <div class="course-card-thumb ">
                                    <a style="height: 100%;" href="#"><img src="{{ asset('images/recrutement/'.$recrutement->photo) }}" alt="course"></a>
                                </div>
                                <div class="course-card-content">
                                    <h3><a href="#">{{ $recrutement->post }}</a></h3>
                                    <ul class="course-info-list">
                                        <li><b>Societe : </b> <span>{{ $recrutement->societe }}</span></li>
                                        <li><b>Date de debut : </b> <span>{{ $recrutement->date_de_debut }}</span></li>
                                        <li><b>Lieu de travail : </b> <span> {{ $recrutement->lieu_de_travail }}</span></li>
                                        <li><b>Type de contrat : </b> <span>{{ $recrutement->type_de_contrat }}</span></li>
                                        <li style="display: block;"><b>Formation : </b> <span>{!! $recrutement->Formation !!}</span></li>
                                    </ul>
                                    <ul class="course-filter-list">

                                        <li>
                                            <a style="   display: inline-block;
                                    font-weight: 700;
                                    color: #526484;
                                    text-align: center;
                                    vertical-align: middle;
                                    user-select: none;
                                    background-color: transparent;
                                    border: 1px solid transparent;
                                    padding: 0.4375rem 1.125rem;
                                    font-size: 0.8125rem;
                                    line-height: 1.25rem;
                                    border-radius: 4px;
                                    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;color: #fff;
    background-color: #89019b;
    border-color: #89019b; width: 120px;" href="#" class="btn btn-success">Postuler</a>


                                        </li>
                                    </ul>


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

    @if( app()->getLocale() == "ar" )
        <script>
            $(document).ready(function (){
                $('.entren p').addClass('arab');
                $('.entren span').addClass('arab');
            });
        </script>
    @endif

    @if( app()->getLocale() == "fr" )
        <script>
            $(document).ready(function (){
                $('.entren p').addClass('avenir');
                $('.entren span').addClass('avenir');
            });
        </script>
    @endif
@endsection
