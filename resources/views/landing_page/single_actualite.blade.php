@extends("landing_page.layout.layout_app")
<!-- .end preloader -->
<!-- navbar -->
@section('content')
<!-- .end navbar -->
<!-- header -->
<header class="header-page">
    <div style="width: 60% !important;" class="header-page-shape header-page-shape-bottom">
        <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
    </div>
    <div class="container">
        <div style="max-width: 100% !important;" class="header-page-content">
            <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif> {{ $actualite->{'title_'.app()->getLocale() }  }}</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a @if( app()->getLocale() == 'ar' ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                    <li class="breadcrumb-item active @if( app()->getLocale() == "ar" ) arab @endif" aria-current="page">{{ $actualite->{'title_'.app()->getLocale() }  }}</li>
                </ol>
            </nav>
        </div>
    </div>
</header>
<!-- .end header -->
<div class="blog-details-section pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 pb-30 order-lg-2">
                <div class="blog-details-item desk-pad-left-20">
                    <article class="blog-details-box mb-30">
                        <div class="blog-post-image">
                            <img src="{{ asset('images/actualite/' . $actualite->photo) }}" alt="blog">
                            <div class="blog-post-category">Plateforme des jeunes Nouaceur</div>
                        </div>
                        <div class="blog-post-details">
                            <ul class="course-entry-list">
                                <li><img src="{{ asset('assets/images/blog-details/admin.jpg') }}" alt="admin"> Admin</li>
                                <li><i class="flaticon-online-learning-1"></i> {{ $actualite->created_at  }}</li>
                            </ul>
                            <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $actualite->{'title_'.app()->getLocale()} }}</h3>

                                <div class="actualite_content @if( app()->getLocale() == "ar" ) arab @endif ">

                                    {!! $actualite->{'contenu_'.app()->getLocale()} !!}

                                </div>




                        <ul class="blog-details-counter">

                            <li  @if( app()->getLocale()  == 'ar' ) class="arab" @endif>{{ trans('messages.commentaires') }} : <span>{{  \App\Models\Comment::where('type',app()->getLocale())->count() }}</span></li>
                        </ul>
                        <div class="blog-action">
                            <p class="blog-action-tag @if( app()->getLocale()  == 'ar' ) arab @endif"><i class="flaticon-tag"></i> Étudiant, Apprenants?</p>
                            <div class="blog-share">
                                <p @if( app()->getLocale()  == 'ar' ) class="arab" @endif>{{ trans('messages.Partager_article') }}:</p>
                                <ul class="social-list">
                                    <li><a href="#"><img src="{{ asset('/images/facebook.png') }}" alt="social"></a></li>
                                    <li><a href="#"><img src="{{ asset('/images/twitter.png') }}" alt="social"></a></li>
                                    <li><a href="#"><img src="{{ asset('/images/linkedin.png') }}" alt="social"></a></li>
                                    <li><a href="#"><img src="{{ asset('/images/instagram.png') }}" alt="social"></a></li>
                                </ul>
                            </div>
                        </div>
                    </article>

                    <div class="blog-comment-area">
                        <div class="blog-comment-reply">
                            <h3 @if( app()->getLocale() == "ar" ) class="arab"  @endif>{{ trans('messages.commentaires') }} (0{{  \App\Models\Comment::where('type',app()->getLocale())->count() }})</h3>
                            <div class="blog-people-comment">
                                <!-- individual comment with reply -->
                                <div class="blog-people-comment-item">



                                     @isset($comments)
                                    <!-- main comment holder -->
                                    @foreach($comments as $comment)

                                            <div class="blog-people-reply blog-people-comment-main">

                                                <div class="blog-people-comment-content">
                                                    <div class="blog-people-comment-info">
                                                        <h3 class="blog-post-name @if( app()->getLocale() == "ar" ) arab @endif ">{{ $comment->{'name_'.app()->getLocale()} }}</h3>
                                                        <h4 class="blog-post-date  @if( app()->getLocale() == "ar" ) arab @endif">{{ $comment->created_at }}</h4>
                                                        <p @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $comment->{'comment_'.app()->getLocale()} }}</p>

                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                     @endisset
                                    <!-- reply of the comment. you can use this block as an item -->

                                </div>
                                <!-- individual comment with reply -->

                            </div>
                        </div>
                    </div>
                    <div class="blog-input-area">
                        <div class="comment-area">
                            <div class="sub-section-title">
                                <h3 class="sub-section-title-heading @if( app()->getLocale()  == 'ar' ) arab @endif">{{ trans('messages.Laissez_un_commentaire') }}</h3>
                                <p @if( app()->getLocale()  == 'ar' ) class="arab" @endif>{{ trans('messages.votre_commentaire') }}</p>
                            </div>
                            <div class="comment-input-area mt-30">
                                <form action="{{ route('comments.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $actualite->id }}" />
                                    <input type="hidden" name="type" value="{{ app()->getLocale() }}" />
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" name="name_{{ app()->getLocale() }}" class="form-control @if( app()->getLocale()  == 'ar' ) arab @endif" placeholder="{{ trans('messages.nom')  }}*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-book"></i></span>
                                                    </div>
                                                    <input type="text" name="subject_{{ app()->getLocale() }}" id="url" class="form-control @if( app()->getLocale()  == 'ar' ) arab @endif" placeholder="{{ trans('messages.sujet')  }}*">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                    </div>
                                                    <textarea name="message_{{ app()->getLocale() }}" class="form-control @if( app()->getLocale()  == 'ar' ) arab @endif" id="message" rows="6" placeholder="{{trans('messages.votre_commentaire_a')}}*"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-checkbox mb-20">
                                                <input type="checkbox" id="contact1">
                                                <label @if( app()->getLocale()  == 'ar' ) class="arab"  @endif  for="contact1">{{ trans('messages.Enregistrez') }}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn main-btn @if( app()->getLocale()  == 'ar' ) arab @endif">{{ trans('messages.envoyer_un_commentaire') }}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 pb-30 order-lg-1">
                <div class="sidebar-item sidebar-search mb-40">
                    <div class="sidebar-title">
                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.Recherche') }}</h3>
                    </div>
                    <form>
                        <div @if( app()->getLocale() == "ar" ) style="direction: initial;" @endif class="form-group">
                            <input @if( app()->getLocale() == "ar" ) style="direction: rtl;" @endif type="email" class="form-control @if( app()->getLocale() == "ar" ) arab @endif" placeholder="{{ trans('messages.Recherche') }}...">
                            <button class="btn main-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="sidebar-item mb-40">
                    <div class="sidebar-title">
                        <h3 @if( app()->getLocale() == 'ar' ) class="arab" @endif>Actualité récente</h3>
                    </div>
                    <div class="blog-recent-content">
                        @foreach($all_latest_actualites as $all_latest_actualite)
                           <div class="blog-recent-content-item">
                            <div class="blog-recent-content-image">
                                <a href="{{ route('single.actualite',$all_latest_actualite->id) }}">
                                    <img src="{{ asset('images/actualite/'. $all_latest_actualite->photo) }}" alt="recent">
                                </a>
                            </div>
                            <div class="blog-recent-content-details">
                                <ul class="course-entry-list">
                                    <li><i class="flaticon-online-learning-1"></i> {{ $all_latest_actualite->created_at }}</li>
                                </ul>
                                <h3><a @if( app()->getLocale() == "ar" ) class="arab" @endif href="{{ route('single.actualite',$all_latest_actualite->id) }}">{{ $all_latest_actualite->{'title_'.app()->getLocale() }  }}</a></h3>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="sidebar-item">
                    <div class="sidebar-title">
                        <h3 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ trans('messages.actulite.tags') }}</h3>
                    </div>
                    <div class="sidebar-content">
                        <ul class="sidebar-tag">

                            @foreach(explode(',', $actualite->{'tags_'.app()->getLocale()} ) as $item)
                                <li><a href="#">{{ $item }}</a></li>

                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- .end become-section -->
<!-- footer -->
@endsection
@section('scripts')
    <!-- .end become-section -->
    @if( app()->getLocale() == "ar" )
        <script>

            $(document).ready(function (){

                $('.actualite_content p').addClass('arab');
                $('.actualite_content span').addClass('arab');
                $('.actualite_content font').addClass('arab');
            });

        </script>
    @endif

    @if( app()->getLocale() == "fr" )
        <script>

            $(document).ready(function (){

                $('.actualite_content p').addClass('avenir');
                $('.actualite_content span').addClass('avenir');
                $('.actualite_content font').addClass('avenir');
            });
        </script>
    @endif
@endsection
