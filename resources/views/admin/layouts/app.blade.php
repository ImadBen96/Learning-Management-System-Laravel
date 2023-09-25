<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <!-- Page Title  -->
    <title>Dashboard</title>
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

    <!-- tagify -->



    <style>
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

        .bootstrap-tagsinput{
            padding: 10px 6px !important;
        }
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: #ffffff;
            background: #854fff;
            padding: 7px;
            border-radius: 3px;
        }
        .bootstrap-tagsinput {
            width: 100%;
        }
        .arab p font{
            font-family: 'Cairo', sans-serif !important;
        }
        .btn-primary{
            color: #fff;
            background-color: #06933e;
            border-color: #06933e;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #4a9d3a;
            border-color: #06933e;
        }
        .btn-primary:focus, .btn-primary.focus {
            color: #fff;
            background-color: #06933e;
            border-color: #06933e;

        }
        .nk-menu-sub .active > .nk-menu-link {
            color: #06933e;
        }
        .is-light .nk-menu-link:hover, .is-light .active > .nk-menu-link {
            color: #06933e;
        }
        .nk-menu-link:hover .nk-menu-icon, .nk-menu-item.active > .nk-menu-link .nk-menu-icon, .nk-menu-item.current-menu > .nk-menu-link .nk-menu-icon {
            color: #06933e;
        }

        element.style {
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #06933e;
            border-color: #06933e;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
       @include('admin.layouts.sidebar')
        <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <div class="nk-header nk-header-fixed is-light">
                <div class="container-fluid">
                    <div class="nk-header-wrap">
                        <div class="nk-menu-trigger d-xl-none ml-n1">
                            <a href="{{route('admin.index')}}" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                        </div>
                        <div class="nk-header-brand d-xl-none">
                            <a href="{{route('admin.index')}}" class="logo-link">
                                <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div><!-- .nk-header-brand -->

                        <div class="nk-header-tools">
                            <ul class="nk-quick-nav">


                                <li class="dropdown user-dropdown">
                                    <a href="#" class="dropdown-toggle mr-n1" data-toggle="dropdown">
                                        <div class="user-toggle">
                                            <div class="user-avatar sm">
                                                <img src="{{ asset('images/woman.png') }}" />
                                            </div>
                                            <div class="user-info d-none d-xl-block">
                                                <div class="user-status user-status-unverified">Admin</div>
                                                <div class="user-name dropdown-indicator">{{auth()->user()->full_name}}</div>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">


                                        <div class="dropdown-inner">
                                            <ul class="link-list">
                                                <li>

                                                        <span>
                                                       <form method="POST" action="{{ route('logout') }}">
                                                            @csrf

                                                            <a href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                                this.closest('form').submit();">
                                                                <em class="icon ni ni-signout"></em>
                                                               Sign Out
                                                            </a>
                                                        </form>
                                                        </span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div><!-- .nk-header-wrap -->
                </div><!-- .container-fliud -->
            </div>
            <!-- main header @e -->
            <!-- content @s -->
            @yield('content')
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

<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
<script src="{{asset('js/app.js')}}" defer></script>
@yield('scripts')
</body>

</html>
