@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>Recrutement</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="{{ route('index') }}">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active @if( app()->getLocale() == "ar" ) arab @endif" aria-current="page">Recrutement</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
<!-- .end header -->
<section class="career-section pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <h2><span @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;">{{ trans('messages.Obtenez_votre_emploi') }}</span></h2>
        </div>
        <div class="row">
            @isset($Recrutements)
                @foreach($Recrutements as $Recrutement)
                  <div class="col-12 col-md-6 col-lg-4 pb-30">
                <div class="career-card">
                    <div class="career-card-title">
                        <h5 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Recrutement->{'title_'.app()->getLocale() }  }}</h5>
                        <h6 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $Recrutement->{'lieu_'.app()->getLocale() }  }}</h6>

                    </div>
                    <div class="career-card-brief">
                        <div  class="pb-30 @if( app()->getLocale() == "ar" ) arab @endif" >
                           {{  \Illuminate\Support\Str::limit($Recrutement->{'short_description_'.app()->getLocale() }, 120) }}

                        </div>
                    </div>
                    <a href="{{ route('single.carriere',$Recrutement->id) }}" class="btn main-btn @if( app()->getLocale() == "ar" ) arab @endif">{{ trans('messages.postulez_maintenant') }}</a>
                </div>
            </div>
                @endforeach
            @endisset
        </div>
    </div>
</section>

<!-- .end become-section -->
@endsection()

