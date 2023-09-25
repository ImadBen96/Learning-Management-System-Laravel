
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
{{--    <link rel="shortcut icon" href="./images/favicon.png">--}}
    <!-- Page Title  -->
    <title>Login</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./backend_assets/css/dashlite.css?ver=2.8.0">
    <link id="skin-default" rel="stylesheet" href="./backend_assets/css/theme.css?ver=2.8.0">
</head>

<body class="nk-body bg-white npc-default pg-auth">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">

        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                            <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                        </div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="#" class="logo-link">
                                    <img style="max-height: 92px !important;" class="logo-light logo-img logo-img-lg" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" alt="logo">
                                    <img style="max-height: 92px !important;" class="logo-dark logo-img logo-img-lg" src="{{ asset('images/logo.png') }}" srcset="{{ asset('images/logo.png') }}" alt="logo-dark">
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Sign-In</h5>
                                    <div class="nk-block-des">
                                        <p>Access the DashLite panel using your email and passcode.</p>
                                    </div>
                                </div>
                                @if ($errors->any())

                                        <p style="color: red;">
                                            <strong>Whoops!</strong> There were some problems with your input.
                                        </p>


                                 @endif
                                <!-- Session Status -->


                                <!-- Validation Errors -->


                            </div><!-- .nk-block-head -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Email</label>

                                    </div>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control form-control-lg" name="email" id="default-01" placeholder="email">
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div><!-- .form-group -->
                                <div class="form-group">

                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Mot de passe">
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div><!-- .form-group -->
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <label for="remember_me" class="inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">Souviens-toi de moi</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-lg btn-primary btn-block">Se connecter</button>
                                </div>
                            </form><!-- form -->


                        </div><!-- .nk-block -->
                        <div class="nk-block nk-auth-footer">

                            <div class="mt-3">
                                <p>&copy; AOBC 2022. Tous les droits sont réservés.</p>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .nk-split-content -->
                    <div style="background-image: url({{ asset('images/_Q7B0043.jpg') }}) !important;background-size: cover;" class="nk-split-content nk-split-stretch bg-abstract">

                    </div><!-- .nk-split-content -->
                </div><!-- .nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="./backend_assets/js/bundle.js?ver=2.8.0"></script>
<script src="./backend_assets/js/scripts.js?ver=2.8.0"></script>

</html>

