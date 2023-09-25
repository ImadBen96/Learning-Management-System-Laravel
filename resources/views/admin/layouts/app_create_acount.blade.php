<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Default Dashboard | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/dashlite.css?ver=2.8.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('backend_assets/css/theme.css?ver=2.8.0') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/css/libs/fontawesome-icons.css?ver=2.8.0') }}">
    <link rel="stylesheet" href="{{ asset('backend_assets/css/libs/themify-icons.css?ver=2.8.0') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/libs/bootstrap-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend_assets/css/libs/fontawesome-icons.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@460&display=swap" rel="stylesheet">

    <link href="http://fonts.cdnfonts.com/css/avenir" rel="stylesheet">
    <style>
        body h1{
            font-family: 'Avenir', sans-serif !important;
        }
        * h1{
            font-family: 'Avenir', sans-serif !important;
        }
        .logo-img {
            max-height: 220px !important;
            max-width: 220px !important;;
        }
        .nk-wizard-simple .steps ul li h5{
            font-size: 10px !important;
        }
        /*start with upload*/
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }
        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            top: 10px;
        }
        .avatar-upload .avatar-edit input {
            display: none;
        }
        .avatar-upload .avatar-edit input + label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }
        .avatar-upload .avatar-edit input + label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }
        .avatar-upload .avatar-edit input + label:after {
            content: "\f040";
            font-family: 'FontAwesome';
            color: #757575;
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }
        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }
        .avatar-upload .avatar-preview > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }



        .arab{
            font-family: 'Cairo', sans-serif;
        }
        .nk-wizard-simple .steps ul li.done h5, .nk-wizard-simple .steps ul li.done .number, .nk-wizard-simple .steps ul li.current h5, .nk-wizard-simple .steps ul li.current .number{
            color: #545454 !important;
        }
        .actions ul li a{
            background: #fcc400 !important;
            width: 140px !important;
            text-align: center !important;
        }

        .nk-wizard-simple .steps ul li.done:after, .nk-wizard-simple .steps ul li.current:after{
            background: #fcc400 !important;
        }
        .alert-pro.alert-primary {
            border-color: #00782d !important;
        }
        .custom-control-pro.no-control .custom-control-input:checked ~ .custom-control-label{
            border-color: #00782d !important;
        }
        .custom-control-input:checked ~ .custom-control-label::before{
            border-color: #00782d !important;
            background-color: #00782d !important;
        }

        element.style {
        }
        .btn:not(:disabled):not(.disabled), .dual-listbox .dual-listbox__button:not(:disabled):not(.disabled) {
            cursor: pointer;
        }
        .btn, .dual-listbox .dual-listbox__button {
            position: relative;
            letter-spacing: 0.02em;
            display: inline-flex;
            align-items: center;
        }
        .btn-success {
            background-color: #00782d !important;
            border-color: #00782d !important;
        }

        .first,

        .nk-wizard-simple .steps ul li{
            text-align: center !important;

            border-bottom: none;
            border-radius: 13px 13px 0px 0px;
        }
        li.current{
            background: #f9f8f8!important;
        }

        /*start with videos*/
        .videio .card {

            height: calc(9/16 * 30vw);
            max-width: calc(16/9 * 70vh);
            max-height: 70vh;
            display: flex;
            position: relative;
            border-radius: 6px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
            background: url({{ asset('images/back_photo.png') }}) center center/cover;
            overflow: hidden;
        }

        .videio .card-play {
            width: 48px;
            height: 48px;
            position: relative;
            z-index: 1;
            margin: auto;
            opacity: 0;
            background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/1613479/play.svg") center center/cover;
            cursor: pointer;
            transition: opacity 0.3s ease-out;
        }

        .videio .card-play:after {
            content: "";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            background: #000;
            transition: all 0.5s ease-out;
        }

        .videio .card-video {
            display: none;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            z-index: 2;
            background: #000;
        }
        .videio .card-video iframe {
            width: 100%;
            height: 100%;
        }

        .videio .card:after {
            content: "";
            width: 250%;
            height: 250%;
            position: absolute;
            top: var(--y);
            left: var(--x);
            transform: translate(-50%, -50%);
            opacity: 0;
            background: radial-gradient(circle closest-side, rgba(255, 255, 255, 0.3), transparent);
            transition: opacity 0.5s ease-out;
        }

        /* ------------ STATES ------------ */
        .videio .card:hover:after,
        .videio .card:hover .card-play {
            opacity: 1;
        }

        .videio .video-is-open:after {
            display: none;
        }

        .video-is-open .card-play {
            opacity: 1;
        }
        .videio .video-is-open .card-play:after {
            width: 2vh;
            height: 2vh;
            transform: translate(-50%, -50%) scale(88.8888888889);
            transition: transform 0.5s ease-out;
        }

        .nk-wizard-simple .steps ul li h5{
            text-transform: none !important;
            font-weight: bold !important;
        }
        .section-title h2{
            font-family: 'Avenir', sans-serif !important;
        }
    </style>
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->

    <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div style="text-align: center;" class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div style="width: 83%;" class="nk-header-brand">
                            <a href="#" class="logo-link">

                                <img style="position: absolute;top: -39px;" class="logo-dark logo-img" src="{{ asset('images/logo_landing.png') }}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->

                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">
                                <a href="{{ route('index') }}" class="btn btn-success">Retour à l'accueil</a>
                            </ul>
                        </div>
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
        @yield('content_create_account')
        <!-- content @e -->
            <!-- footer @s -->
            <div class="nk-footer">
                <div class="container-fluid">
                    <div class="nk-footer-wrap">
                        <div style="width: 100%;text-align: center;" class="nk-footer-copyright"> &copy; 2022 LMS. Template by <a href="#" >AOBC</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="{{ asset('backend_assets/js/bundle.js?ver=2.8.0') }}"></script>
<script src="{{ asset('backend_assets/js/scripts.js?ver=2.8.0') }}"></script>
<script src="{{ asset('backend_assets/js/charts/chart-ecommerce.js?ver=2.8.0') }}"></script>
<link rel="stylesheet" href="{{ asset('backend_assets/css/editors/quill.css?ver=2.8.0') }}">
<script src="{{ asset('backend_assets/js/libs/editors/quill.js?ver=2.8.0') }}"></script>
<link rel="stylesheet" href="{{ asset('backend_assets/css/editors/summernote.css?ver=2.8.0') }}">
<script src="{{ asset('backend_assets/js/libs/editors/summernote.js?ver=2.8.0') }}"></script>
<script src="{{ asset('backend_assets/js/editors.js?ver=2.8.0') }}"></script>
@yield('scripts')
</body>

</html>
