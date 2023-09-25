<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{route('admin.index')}}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}" srcset="./images/logo2x.png 2x" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/logo.png') }}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo.png') }}" srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger mr-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Main</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ route('admin.index') }}" class="nk-menu-link" data-original-title="" title="">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ route('pre-inscription') }}" class="nk-menu-link" data-original-title="" title="">
                             <span class="nk-menu-icon">
                                <img src="{{ asset('images/pre_registration.svg') }}" />
                            </span>
                            <span class="nk-menu-text">pre-registration</span>
                        </a>
                    </li>


                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon">
                                <img src="{{ asset('images/pre_registration.svg') }}" />
                            </span>
                            <span class="nk-menu-text">Bénéficiaire</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('student.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Bénéficiaires</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('student.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Un Bénéficiaire</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon">
                                <i style="font-size: 24px;letter-spacing: normal;vertical-align: middle;color: currentColor;transition: color .4s, background-color .4s;" class="bi bi-people"></i>
                            </span>
                            <span class="nk-menu-text">Cours</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('category.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">catégories</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('cours.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Cours</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('models.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Modules</span></a>
                            </li>

                        </ul><!-- .nk-menu-sub -->

                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><i class="bi bi-camera-reels"></i></span>
                            <span class="nk-menu-text">Videos</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('videos.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Videos</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('videos.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Un Video</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><i class="bi bi-file-earmark-arrow-down"></i></span>
                            <span class="nk-menu-text">Materials</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('materials.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Materials</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('materials.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Un Material</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><i class="bi bi-file-earmark-arrow-down"></i></span>
                            <span class="nk-menu-text">Les Entrepreneurs</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('entrepreneurs.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Entrepreneurs</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('entrepreneurs.instance') }}" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Ajouter Un Entrepreneur</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><i class="bi bi-file-earmark-arrow-down"></i></span>
                            <span class="nk-menu-text">Les Concours D'ideé</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('ConcourIdee.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Concours D'idées</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('ConcourIdee.poster.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les postilation</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('ConcourIdee.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter  Concours D'ideé</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><em  class="fs-20px bi bi-bounding-box"></em></span>
                            <span class="nk-menu-text">Recrutement</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('carriere.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Recrutements</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('carriere.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Un Recrutements</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><em  class="fs-20px bi bi-bounding-box"></em></span>
                            <span class="nk-menu-text">Carriére</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('recrutement.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Carriéres</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('recrutement.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Un Carriére</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-icon"><em class="fs-20px bi bi-chat-right-dots"></em></span>
                            <span class="nk-menu-text">Actualité</span>
                        </a>
                        <ul class="nk-menu-sub" style="display: none;">
                            <li class="nk-menu-item">
                                <a href="{{ route('actualite.index') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Tous les Actualité</span></a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('actualite.create') }}" class="nk-menu-link" data-original-title="" title=""><span class="nk-menu-text">Ajouter Une Actualité</span></a>
                            </li>
                        </ul><!-- .nk-menu-sub -->

                    </li>




                </ul>
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
