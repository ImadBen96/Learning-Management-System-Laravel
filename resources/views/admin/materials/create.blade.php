@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Matérials</span></a></div>
                                <h2 class="nk-block-title fw-normal"><i style="top: -9px;position: relative;" class="bi bi-file-earmark-arrow-down"></i>  Ajouter Un Matérial</h2>
                                <div class="nk-block-des">
                                </div>
                            </div>
                        </div><!-- .nk-block -->


                        <div class="nk-block nk-block-lg">

                            <div class="card">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Matérial Info</h5>
                                    </div>
                                    <form action="{{ route("materials.store") }}" method="POST" class="gy-3" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Nom</label>
                                                    <span class="form-note">Spécifiez le nom de votre Matérials.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="site-name" name="material_name" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">nom du module</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">

                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-search="on" name="module_id">
                                                            <option value="default_option">Choisir un module</option>
                                                            @foreach(\App\Models\Section::all() as $sec)
                                                                <option value="{{$sec->id}}">{{$sec->title}}</option>

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label">Mettre En Ligne Matérial</label>
                                                    <span class="form-note">Seulement PDF,POWER POINT.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input name="mat" type="file" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Ajouter Matérial</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><!-- card -->
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
