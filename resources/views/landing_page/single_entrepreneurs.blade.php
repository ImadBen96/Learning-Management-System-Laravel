
@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div style="width: 60% !important;" class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div style="max-width: 100% !important;" class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Entrepreneurs->{'title_'.app()->getLocale() }  }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active  @if( app()->getLocale() == "ar" ) arab @endif " aria-current="page">Tous Les Entrepreneurs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="event-details-section pt-100 pb-70">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item">
                        <div style="border-radius: 8px;" class="summery-box mb-30">
                            <div style="background: #00afe2;"  class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif "> Nom & Prénom</div>
                                        <div style="color: #FFF;"  class="summery-option">{{ $Entrepreneurs->{'title_'.app()->getLocale() }  }}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label  @if( app()->getLocale() == "ar" ) arab @endif"> Age</div>
                                        <div style="color: #FFF;" class="summery-option"><a @if( app()->getLocale() == "ar" ) class="arab" @endif> {{ $Entrepreneurs->age }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif "> Niveau scolaire</div>
                                        <div style="color: #FFF;" class="summery-option">{{ $Entrepreneurs->{'niveau_scolaire_'.app()->getLocale() }  }}</div>
                                    </div>




                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"> Statut Juridique</div>
                                        <div class="summery-option"><a style="color: #FFF;" @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $Entrepreneurs->{'statut_juridique_'.app()->getLocale() }  }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"> Domiciliation </div>
                                        <div class="summery-option"><a style="color: #FFF;" @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $Entrepreneurs->{'domiciliation_'.app()->getLocale() }  }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"> Nom du projet </div>
                                        <div class="summery-option"><a style="color: #FFF;" @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $Entrepreneurs->{'project_name_'.app()->getLocale() }  }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div style="color: #FFF;font-size: 17px;
    font-weight: bold;" class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"> Logo du projet </div>
                                        <div class="summery-option">
                                            <img src="{{ asset('images/entrepreneurs/logo/'.$Entrepreneurs->logo) }}" />
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-12 col-lg-3 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <div   class="summery-info-details">
                            <div style="display: block;" class="summery-info-details-inner">
                                <div style="width: 100%;" class="mb-4">
                                    <img style="border-radius: 10px;" src="{{ asset('images/entrepreneurs/'.$Entrepreneurs->image_profile) }}" />
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 pb-30 order-lg-3">
                    <div  class="summery-info-details-inner">
                        <h2 style="    text-align: center;
    background: #e52a2e;
    padding: 8px;
    border-radius: 8px;
    color: #FFF;" @if( app()->getLocale() == 'fr' ) class="avenir"  @endif  @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Entrepreneurs->{'title_'.app()->getLocale() }  }}</h2>
                        <p style="color: #520000  !important;" @if( app()->getLocale() == "ar" ) class="arab" @elseif(app()->getLocale() == "fr") class="avenir" @endif>
                            {{ $Entrepreneurs->{'short_description_'.app()->getLocale() }  }}
                        </p>
                        <h2 style="background: #fcc400;
    padding: 8px;
    border-radius: 8px;
    color: #FFF;text-align: center" @if( app()->getLocale() == "fr" ) class="avenir"  @endif @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Overview') }}</h2>
                        <div class="entrens">

                            {!! $Entrepreneurs->{'contenu_'.app()->getLocale()} !!}

                        </div>
                        <h2 style="    background: #00782d;
    padding: 8px;
    border-radius: 8px;
    color: #FFF;
    text-align: center;" class="avenir">Tous Les Services</h2>
                        <ul>
                            @foreach(explode(",",$Entrepreneurs->service_name) as $item)
                                <li><i class="flaticon-check"></i> {{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">

                    <div class="gallery-section pt-100 pb-70">
                        <div class="container">
                            <div class="section-title">
                                <h2><span>Produits Ou Services</span></h2>
                            </div>
                            <div class="gallery-section-inner">

                                <div class="gallery-tab-details popup-gallery">
                                    <div class="row">

                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_1/'.$Entrepreneurs->photo_1) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_1/'.$Entrepreneurs->photo_1) }}" title="Photos"><i class="flaticon-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_2/'.$Entrepreneurs->photo_2) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_2/'.$Entrepreneurs->photo_2) }}" title="Photos"><i class="flaticon-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_3/'.$Entrepreneurs->photo_3) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_3/'.$Entrepreneurs->photo_3) }}" title="Photos"><i class="flaticon-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_4/'.$Entrepreneurs->photo_4) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_4/'.$Entrepreneurs->photo_4) }}" title="Photos"><i class="flaticon-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_5/'.$Entrepreneurs->photo_5) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_5/'.$Entrepreneurs->photo_5) }}" title="Photos"><i class="flaticon-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4 element-item photos campus pb-30">
                                            <div class="gallery-card">
                                                <div class="gallery-card-thumb">
                                                    <img src="{{ asset('images/entrepreneurs/photo_6/'.$Entrepreneurs->photo_6) }}" alt="gallery">
                                                </div>
                                                <div class="gallery-zoom">
                                                    <a href="{{ asset('images/entrepreneurs/photo_6/'.$Entrepreneurs->photo_6) }}" title="Photos"><i class="flaticon-plus"></i></a>
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


@endsection()
@section('scripts')
    <!-- .end become-section -->
    @if( app()->getLocale() == "ar" )
        <script>

            $(document).ready(function (){

                $('.entrens p').addClass('arab');
                $('.entrens span').addClass('arab');
                $('.actualite_content font').addClass('arab');
            });

        </script>
    @endif

    @if( app()->getLocale() == "fr" )
        <script>

            $(document).ready(function (){

                $('.entrens p').addClass('avenir');
                $('.entrens span').addClass('avenir');
                $('.actualite_content font').addClass('avenir');
            });
        </script>
    @endif
@endsection

