@extends('landing_page.layout.layout_app')
@section('content')
    <header class="header-page">
        <div style="width: 60% !important;" class="header-page-shape header-page-shape-bottom">
            <img src="{{ asset('assets/images/jakhrafa.svg') }}" alt="shape">
        </div>
        <div class="container">
            <div style="max-width: 100% !important;" class="header-page-content">
                <h1 @if( app()->getLocale() == "ar" ) class="arab" @endif>{{ $concours->{'title_'.app()->getLocale() }  }}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a @if( app()->getLocale() == "ar" ) class="arab" @endif style="color: #06933e;" href="#">{{ trans('messages.accueil') }}</a></li>
                        <li class="breadcrumb-item active  @if( app()->getLocale() == "ar" ) arab @endif " aria-current="page">{{ $concours->{'title_'.app()->getLocale() }  }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>


    <section class="event-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-12 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <div class="summery-info-details">
                            <div class="summery-info-details-inner">
                                <div class="contact-form-box">
                                    <div class="sub-section-title text-center">
                                        <h3 class="sub-section-title-heading">Poster Maintenant</h3>
                                        <p>Votre  nom , Prénom , Cart National , CV , Certificat , Demande  ne sera pas publiée. Les champs requis sont indiqués *</p>
                                    </div>
                                    <form action="{{ route('poster.concours.store') }}" method="POST" enctype="multipart/form-data">

                                        @csrf
                                        <input type="hidden" name="id" value="{{ $concours->id }}" />
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-4">
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span style="color: #06933e;font-size: 18px;
    font-weight: bold;" class="input-group-text">Photo</span>
                                                        </div>
                                                        <input type="file" name="photo" id="name" class="form-control" placeholder="photo*" required="" data-error="S'il vous plaît entrez votre Photo">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4"></div>

                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                        </div>
                                                        <input type="text" name="nom" id="name" class="form-control" placeholder="Nom*" required="" data-error="S'il vous plaît entrez votre nom">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                        </div>
                                                        <input type="text" name="prenom" id="email" class="form-control" placeholder="Prénom*" required="" data-error="Veuillez saisir votre prenom">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-12 col-lg-12">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">

                                                        <textarea placeholder="Description Du Projet*" cols="10" rows="10" name="short_description" class="form-control"></textarea>
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-phone-call"></i></span>
                                                        </div>
                                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="télephone*" required="" data-error="Veuillez entrer votre numéro de téléphone">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                        </div>
                                                        <input type="text" name="email" id="phone" class="form-control" placeholder="Email*" required="" data-error="Veuillez entrer votre email">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span style="color: #06933e;font-size: 18px;font-weight: bold;" class="input-group-text">Cart National</span>
                                                        </div>
                                                        <input type="file" name="carte_national"  class="form-control" placeholder="carte_national*" required="" data-error="Veuillez entrer carte national">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span style="color: #06933e;font-size: 18px;font-weight: bold;" class="input-group-text">CV</span>
                                                        </div>
                                                        <input type="file" name="cv"  class="form-control" placeholder="CV*" required="" data-error="Veuillez entrer votre CV">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span style="color: #06933e;font-size: 18px;
    font-weight: bold;" class="input-group-text">Certificat</span>
                                                        </div>
                                                        <input type="file" name="certificat"  class="form-control" placeholder="certificat*" required="" data-error="Veuillez entrer Certificat">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-4"></div>
                                            <div class="col-12 col-md-6 col-lg-4">
                                                <div class="form-group mb-20">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span style="color: #06933e;font-size: 18px;
    font-weight: bold;" class="input-group-text">Demande</span>
                                                        </div>
                                                        <input type="file" name="demande"  class="form-control" placeholder="carte_national*" required="" data-error="Veuillez entrer votre numéro de téléphone">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>



                                            <div class="col-12 col-md-12 col-lg-12 text-center">
                                                <button class="btn main-btn" type="submit" style="pointer-events: all; cursor: pointer;">ENVOYER UN MESSAGE</button>
                                                <div id="msgSubmit"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </form>
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


