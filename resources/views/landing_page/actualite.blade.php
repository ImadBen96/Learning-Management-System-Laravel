@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Actualite_index') }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="{{ route('index') }}">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active @if( app()->getLocale() == "ar" ) arab @endif " aria-current="page">{{ trans('messages.Actualite_index') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <!-- .end header -->
    <section class="blog-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                @isset($actualites)
                    @foreach($actualites as $actualite)
                        <div class="col-12 col-md-6 col-lg-4 pb-30">
                    <div class="course-flat-card course-flat-card">
                        <div class="course-card-thumb">
                            <a href="{{ route('single.actualite',$actualite->id) }}"><img src="{{ asset('images/actualite/'.$actualite->photo) }}" alt="course"></a>
                        </div>
                        <div class="course-card-content">
                            <ul class="course-entry-list">
                                <li @if( app()->getLocale() == 'ar' ) class="arab" @endif><i class="flaticon-open-book"></i> {{ $actualite->created_at }}</li>
                                <li @if( app()->getLocale() == 'ar' ) class="arab" @endif><i class="flaticon-man"></i> {{ trans('messages.Administrateur') }}</li>
                            </ul>
                            <h3 @if( app()->getLocale() == 'ar' ) class="arab" @endif>{{ $actualite->{'title_'.app()->getLocale() }  }}</h3>
                            <p><a  href="{{ route('single.actualite',$actualite->id) }}" class="redirect-link @if( app()->getLocale() == 'ar' ) arab @endif">{{ trans('messages.Apprendre_encore_plus') }} <i class="flaticon-right-arrow"></i></a></p>
                        </div>
                        <ul class="course-filter-list">
                            <li class="course-filter course-filter-focus @if( app()->getLocale() == 'ar' ) arab @endif">{{ $actualite->created_at }}</li>
                        </ul>
                    </div>
                </div>
                    @endforeach
                @endisset
            </div>

            {{ $actualites->links('landing_page.pagination') }}



        </div>
    </section>
@endsection

