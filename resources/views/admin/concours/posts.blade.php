@extends('admin.layouts.app')

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">



                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous les postilation</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Tous les postilation</h2>
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

                                        <th class="nk-tb-col"><span class="sub-text">Concour D'ideé associé</span></th>

                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Nom & Prénom</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Date de postulation</span></th>
                                        <th class="nk-tb-col tb-col-lg"><span class="sub-text">Téléphone</span></th>
                                        <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($posts)
                                        @foreach($posts as $post)
                                            <tr class="nk-tb-item">
                                                <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                    <div style="text-align: center;" class="user-info">
                                                        <span class="tb-lead">{{ $post->consours[0]->title_fr }}<span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span style="direction: rtl;text-align: center;" class="tb-lead arab">{{ $post->consours[0]->title_ar }}<span class="dot dot-success d-md-none ml-1"></span></span>

                                                    </div>
                                                </td>

                                                <td class="nk-tb-col">
                                                    <div class="user-card">
                                                        <div style="width: 98px;margin-right: 5px;"
                                                             class="d-none d-sm-flex">
                                                            <img style="border-radius: 10px;" src="{{ asset('images/concours/posts/'. $post->photo  ) }}" />
                                                        </div>
                                                        <div style="text-align: center" class="user-info">
                                                            <span class="tb-lead">{{ $post->first_name }}</span>
                                                            <span class="tb-lead">{{ $post->last_name }}</span>

                                                        </div>
                                                    </div>
                                                </td>


                                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                    {{ $post->created_at }}
                                                </td>
                                                <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">
                                                    {{ $post->tele }}
                                                </td>


                                                <td class="nk-tb-col tb-col-md">
                                                    <span class="tb-status text-success">
                                                        @if( $post->status == "inactive" )
                                                            <span class="badge badge-warning">Pas Encore</span>
                                                        @elseif($post->status == "active")
                                                            <span class="badge badge-success">Comfermer</span>
                                                        @elseif($post->status == "reject")
                                                            <span class="badge badge-danger">Rejeter</span>
                                                        @endif
                                                    </span>
                                                </td>
                                                <td class="nk-tb-col nk-tb-col-tools">
                                                    <ul>

                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="{{ route('post.edit',$post->id) }}"><em class="icon ni ni-focus"></em><span>Plus Details && Édit Postulat </span></a></li>

                                                                        <li class="divider"></li>

                                                                        <li>
                                                                            <form method="POST" action="#">
                                                                                  <a href="#"><em class="icon ni ni-na"></em><span>Supprimer Actualité</span></a>
                                                                            </form>
                                                                        </li>
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
