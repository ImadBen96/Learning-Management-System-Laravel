@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div style="width: 60% !important;" class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div style="max-width: 100% !important;" class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Carrieres->post  }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active  @if( app()->getLocale() == "ar" ) arab @endif " aria-current="page">{{ $Carrieres->post  }}</li>
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
                        <div class="summery-box mb-30">
                            <div  class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif "><i class="flaticon-calendar"></i>{{ trans('messages.date_de_publication') }}</div>
                                        <div class="summery-option">{{ $Carrieres->created_at }}</div>
                                    </div>

                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-placeholder"></i>societe</div>
                                        <div class="summery-option  @if( app()->getLocale() == "ar" ) arab @endif">{{ $Carrieres->societe  }}</div>
                                    </div>

                                    <div class="summery-list-item">
                                        <div class="summery-label  @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-envelope"></i>Date de debut</div>
                                        <div class="summery-option"><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $Carrieres->date_de_debut  }}</a></div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label @if( app()->getLocale() == "ar" ) arab @endif"><i class="flaticon-envelope"></i>Type de contrat</div>
                                        <div class="summery-option"><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="#">{{ $Carrieres->type_de_contrat  }}</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="summery-box">
                            <div class="summery-inner">
                                <div class="sidebar-title">
                                    <h3 @if( app()->getLocale() == "ar" ) class="arab"  @endif>Nouveau Recrutement</h3>
                                </div>
                                <!-- this "blog-recent-content" class with inner classes will be use for the recent job as well. -->
                                <div class="blog-recent-content">
                                    @isset($carriere_autres)
                                        @foreach($carriere_autres as $carriere_autr)
                                            <div class="blog-recent-content-item">
                                                <div class="blog-recent-content-details">
                                                    <ul class="course-entry-list">
                                                        <li @if( app()->getLocale() == "ar" ) class="arab" @endif><i class="flaticon-online-learning-1"></i> {{ $carriere_autr->created_at }}</li>
                                                    </ul>
                                                    <h3><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="{{ route('single_recrutement',$carriere_autr->id) }}">{{ $carriere_autr->post  }}</a></h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <div class="summery-info-details">
                            <div style="margin-bottom: 16px;" class="summery-info-details-inner">
                                <div style="display: flex;justify-content: center;">
                                    <img style="width: 42%;" src="{{ asset('images/recrutement/'.$Carrieres->photo) }}" />
                                </div>
                            </div>
                            <div class="summery-info-details-inner">
                                <h3  @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Carrieres->{'title_'.app()->getLocale() }  }}</h3>
                                <p @if( app()->getLocale() == "ar" ) class="arab" @endif>
                                    {{ $Carrieres->{'short_description_'.app()->getLocale() }  }}
                                </p>
                                <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>Formation</h3>
                                <div class="carriere_content @if( app()->getLocale() == "ar" ) arab @endif" >

                                    {!! $Carrieres->Formation !!}

                                </div>
                                <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>Expérience professionnelle</h3>
                                <div class="carriere_content @if( app()->getLocale() == "ar" ) arab @endif" >

                                    {!! $Carrieres->Expérience_professionnelle !!}

                                </div>
                                <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>lieu  de travail</h3>
                                <div class="carriere_content @if( app()->getLocale() == "ar" ) arab @endif" >

                                    {!! $Carrieres->lieu_de_travail !!}

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- .end become-section -->
@endsection()
@section('scripts')
    <!-- .end become-section -->
    @if( app()->getLocale() == "ar" )
        <script>

            $(document).ready(function (){

                $('.carriere_content p').addClass('arab');
                $('.carriere_content span').addClass('arab');
                $('.carriere_content font').addClass('arab');

            });

        </script>
    @endif

    @if( app()->getLocale() == "fr" )
        <script>

            $(document).ready(function (){

                $('.carriere_content p').addClass('avenir');
                $('.carriere_content span').addClass('avenir');
                $('.carriere_content font').addClass('avenir');
            });
        </script>
    @endif
@endsection
