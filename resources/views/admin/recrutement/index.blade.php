@extends('admin.layouts.app')

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">



                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Carrieres</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Tous Les Carriéres !!!</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>

                        </div>
                        @if(session()->has('success'))
                            <div class="example-alert mb-4">
                                <div class="alert alert-fill alert-success alert-icon">
                                    <em class="icon ni ni-check-circle"></em> <strong>{{ session()->get('success') }}</strong>
                                </div>
                            </div>
                        @endif
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                    <thead>
                                    <tr class="nk-tb-item nk-tb-head">
                                        <th class="nk-tb-col"><span class="sub-text">Post</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Société</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Type de contrat</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Lieu de travail</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date de creation</span></th>

                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($recretements)
                                        @foreach($recretements as $recretement)
                                            <tr class="nk-tb-item">

                                                <td class="nk-tb-col tb-col-lg">
                                                   {{ $recretement->post }}

                                                </td>
                                                <td class="nk-tb-col tb-col-lg" data-order="35040.34">

                                                     {{ $recretement->societe }}

                                                </td>

                                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                    {{ $recretement->type_de_contrat }}
                                                </td>
                                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                    {{ $recretement->lieu_de_travail }}
                                                </td>
                                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                    {{ $recretement->created_at }}
                                                </td>


                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul>

                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{ route('recrutement.edit',$recretement->id) }}"><em class="icon ni ni-focus"></em><span>Éditer Carriére</span></a></li>

                                                                        <li class="divider"></li>

                                                                        <li><a href="{{ route('recrutement.delete',$recretement->id) }}"><em class="icon ni ni-na"></em><span>Supprimer Carriére</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr><!-- .nk-tb-item  -->
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
