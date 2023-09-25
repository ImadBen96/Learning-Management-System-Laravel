@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Videos</span></a></div>
                                <h2 class="nk-block-title fw-normal"><i style="top: -9px;position: relative;" class="bi bi-camera-reels"></i> Ajouter Un Video</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block -->


                        <div class="nk-block nk-block-lg">

                            <div class="card">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Video Info</h5>
                                    </div>
                                    <form action="{{ route("videos.stock") }}" class="gy-3" method="post">
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Nom</label>
                                                    <span class="form-note">Spécifiez le nom de votre vidéo.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input  type="text" class="form-control" id="input1" name="video_name" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Choisir Module</label>
                                                    <span class="form-note">Spécifiez le module de votre vidéo.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">

                                                    <div class="form-control-wrap">
                                                        <select class="form-select" name="course_name" id="input2" data-search="on">
                                                            <option value="default_option">Choisir Cours</option>
                                                            @foreach(\App\Models\Section::all() as $sec)
                                                                <option value="{{ $sec->id }}">{{ $sec->title }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label">Mettre En Ligne La Vidéo</label>
                                                    <span class="form-note">Seulement mp4.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="file"
                                                               class="filepond"
                                                               name="video"
                                                               data-max-file-size="500MB"
                                                               data-max-files="1">
                                                        <input type="text" id="videoUrl" name="video_url" hidden>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button  id="submitVideo" class="btn btn-lg btn-primary" hidden>Ajouté</button>
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
    <style>
        #input2{
            position: absolute !important;
        }
    </style>
@endsection
