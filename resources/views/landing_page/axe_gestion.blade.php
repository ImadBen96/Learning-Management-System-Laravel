@extends('landing_page.layout.layout_app')
@section('content')
<!-- header -->
<header class="header-page">
    <div class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div class="header-page-content">
            <h1 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ trans('messages.axe_gestion') }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a @if( app()->getLocale() == 'ar' ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                    <li class="breadcrumb-item active @if( app()->getLocale() == 'ar' ) arab @endif" aria-current="page">{{ trans('messages.axe_gestion') }}</li>
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
                    <div style="padding-right: 30px;" class="about-section-title section-title section-title-left section-title-shapeless position-relative">
                        <div class="overlay-text">
                            <h3 class="font-family-3">Axe Gestion</h3>
                        </div>
                        <h2><span style="color: #06933e;">Axe Gestion</span></h2>
                        <p style="text-align: justify;">Accueil, écoute et orientation des jeunes pour mieux répondre à leurs besoins et leurs attentes en information, et pour assurer leur employabilité et leur accès à l’entrepreneuriat. Les jeunes sont reçus par des professionnels spécialisés dans leurs domaines d’activités, afin de les orienter vers des offres de formation adaptées à leur profil (OFPPT, ANAPEC) et aux opportunités correspondantes à leurs aspirations et leurs projets professionnels.</p>
                        <p style="text-align: justify;">L’Heure Joyeuse est une association à but non lucratif créée en 1959 ; reconnue d’utilité publique, elle est engagée pour la lutte contre l’exclusion sociale et professionnelle des personnes en situation défavorisée. Elle a pour mission d’œuvrer, à travers l’Education, l’Employabilité et l’Entrepreneuriat, à l’inclusion socio-économique des jeunes en situation vulnérable, en plaçant l’innovation sociale au cœur de son action. Sa vision est de donner aux jeunes l’opportunité de s’accomplir et trouver leur voie, et de façonner leur avenir avec dignité.</p>
                        <p style="text-align: justify;">Composée aujourd’hui de 10 centres, au siège - Belvédère, la plateforme - Sidi-Maarouf, Dar Bouazza - la plateforme des jeunes Nouaceur, l’antenne et CFA – Mkanssa, l’antenne et CFA Bouskoura, à l’antenne – Ouled Saleh, la Plateforme des jeunes – Ben M’sick, la plateforme des Jeunes - Ain Sebaa et la plateforme des jeunes - Roches Noires, tous situés dans la région du Grand Casablanca.</p>

                    </div>

                </div>
            </div>
            <div class="col-12 col-lg-5 pb-30 desk-plr-0 order-lg-1 pb-30">
                <div class="text-center">
                    <img style="width: 100% !important;" src="{{ asset('images/logo_HD.jpg') }}" alt="study">
                </div>
            </div>
        </div>
        <div class="about-section pb-70 position-relative overflow-hidden">


            <div class="container">
                <div class="section-title">
                    <h2>L’Heure Joyeuse est organisée en <span>4 pôles :</span></h2>
                    <p>L’association s’est organisée ainsi pour être en adéquation avec ses nouvelles orientations stratégiques.</p>
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
                        <div style="height: 100%;background-color: #daffeb;" class="about-item-card about-item-card-thirdcolor">

                            <div class="about-card-icon">
                              <img style="width: 50%;" src="{{ asset('images/icon_ Citoyen_5.svg') }}" />
                            </div>
                            <div class="about-card-text">
                                <h6 style="background: #05ac50;padding: 5px;border-radius: 8px;font-size: 22px;font-weight: bold;"><span style="color: #ffffff;" class="">Pôle Engagement Citoyen</span></h6>
                                <p>Ce pôle a été créé avec objectif principal de réaffirmer l’engagement social et sociétal continu de l’Heure Joyeuse. Les programmes mis en place par ce pôle sont : la sensibilisation aux ODD, l’accompagnement des associations et le plaidoyer.</p>
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
                        <p>Les Indicateurs - Axe Gestion</p>
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
                <h2 class="avenir"><span>63 ans dans l’action sociale</span></h2>
{{--                <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>--}}
            </div>
        </div>
            <div class="row">
                <div id="chartContainer" style="height: 500px; width: 100%;"></div>
            </div>

        </div>
    </section>
<section class="help-section pt-100">
    <div class="container">
        <div class="pb-70 border-bottom">
            <div class="section-title">
                <h2>Gallery <span>Photos : </span>Axe Gestion</h2>
{{--                <p>We believe everyone has the capacity to be creative. Tuition is a place where people develop their own potential.</p>--}}
            </div>



                    <!--Carousel Gallery-->
                <div class="gallery-tab-details popup-gallery">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3 element-item photos campus pb-30" style="position: absolute; left: 0px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_gestion/IMG_0164.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_gestion/IMG_0164.jpg') }}" title="Photos"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 400px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_gestion/IMG_0226.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_gestion/IMG_0226.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students photos pb-30" style="position: absolute; left: 800px; top: 0px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_gestion/IMG_0235.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_gestion/IMG_0235.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item campus pb-30" style="position: absolute; left: 0px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_gestion/IMG_0264.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_gestion/IMG_0264.jpg') }}" title="Campus"><i class="flaticon-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 element-item students pb-30" style="position: absolute; left: 400px; top: 400px;">
                            <div class="gallery-card">
                                <div class="gallery-card-thumb">
                                    <img src="{{ asset('images/axe_gestion/IMG_0304.jpg') }}" alt="gallery">
                                </div>
                                <div class="gallery-zoom">
                                    <a href="{{ asset('images/axe_gestion/IMG_0304.jpg') }}" title="Students"><i class="flaticon-plus"></i></a>
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
@endsection
@section('scripts')
    <script type="text/javascript">

        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer",
                {
                    title:{
                        text: ""
                    },
                    legend: {
                        maxWidth: 350,
                        itemWidth: 120
                    },
                    data: [
                        {
                            type: "pie",
                            showInLegend: true,
                            legendText: "{indexLabel}",
                            dataPoints: [
                                { y: 4181563, indexLabel: "sector1" },
                                { y: 2175498, indexLabel: "sector2" },
                                { y: 3125844, indexLabel: "sector3" },

                            ]
                        }
                    ]
                });
            chart.render();
        }

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

