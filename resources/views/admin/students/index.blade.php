@extends('admin.layouts.app')

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">



                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between position-relative">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title fw-normal"><img style="width: 9%;" src="{{ asset('images/pre_registration.svg') }}"> Tous les Bénéficiaires</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools g-1">
                                            <li class="d-lg-none">
                                                <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li>
                                            <li class="d-lg-none">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#file-upload" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-lg-none mr-n1"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="files-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                        </ul>
                                    </div>
                                    <div class="search-wrap px-2 d-lg-none" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div><!-- .search-wrap -->
                                </div>
                            </div>
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head">


                                            <th class="nk-tb-col"><span class="sub-text">Nom et Prénom</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Genre</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Territoire</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date de naissance</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">N° cin</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Téléphone 1</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @isset($acceuils)
                                            @foreach($acceuils as $acceuil)
                                               <tr class="nk-tb-item">

                                            <td class="nk-tb-col">
                                                <div class="user-card">

                                                        @if($acceuil->image_profile)
                                                            <img style="width: 18%;margin-right: 6px;border-radius: 14px; " src="{{ asset('images/acceuil/'.$acceuil->image_profile) }}" />
                                                        @else
                                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                <span>{{ substr($acceuil->first_name, 0, 1) }}{{ substr($acceuil->last_name, 0, 1) }}</span>
                                                            </div>
                                                        @endif


                                                    <div class="user-info">
                                                        <span class="tb-lead">{{ $acceuil->first_name }} {{ $acceuil->last_name }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{ $acceuil->user[0]->email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                <span class="tb-amount">{{ $acceuil->genre }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>
                                                    @if( $acceuil->territoire== 'autre_province')
                                                        {{ $acceuil->autre_province }}
                                                    @else
                                                        {{ $acceuil->territoire }}

                                                    @endif

                                                </span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                              <span>{{ $acceuil->date_naissance }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg">
                                                <span>{{ $acceuil->cin }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{ $acceuil->tel1 }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">

                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">

                                                                    <li><a href="{{ route('student.edit',$acceuil->id) }}"><em class="icon ni ni-repeat"></em><span>Modifier l'élève</span></a></li>

                                                                    <li class="divider"></li>

                                                                    <li><a href="{{ route('student.delete',$acceuil->id) }}"><em class="icon ni ni-na"></em><span>Suspendre l'élève</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                            @endforeach
                                        @endisset
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->
                        </div> <!-- nk-block -->

                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>



@endsection
