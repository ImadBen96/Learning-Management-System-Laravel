@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Audios</span></a></div>
                                <h2 class="nk-block-title fw-normal"><i style="top: -9px;position: relative;" class="bi bi-mic"></i>  Ajouter Un Audio</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block -->


                        <div class="nk-block nk-block-lg">

                            <div class="card">
                                <div class="card-inner">
                                    <div class="card-head">
                                        <h5 class="card-title">Audio Info</h5>
                                    </div>
                                    <form action="#" class="gy-3">
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Nom</label>
                                                    <span class="form-note">Spécifiez le nom de votre Audio.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="site-name" name="audio_name" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Choisir une catégorie</label>
                                                    <span class="form-note">Spécifiez la catégorie de votre Audio.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">

                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-search="on">
                                                            <option value="default_option">Choisir une catégorie</option>
                                                            <option value="option_select_name">catégorie 1</option>
                                                            <option value="option_select_name">catégorie 2</option>
                                                            <option value="option_select_name">catégorie 3</option>
                                                            <option value="option_select_name">catégorie 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label" for="site-name">Choisir cours</label>
                                                    <span class="form-note">Spécifiez la cours de votre Audio.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">

                                                    <div class="form-control-wrap">
                                                        <select class="form-select" data-search="on">
                                                            <option value="default_option">Choisir Cours</option>
                                                            <option value="option_select_name">Cours 1</option>
                                                            <option value="option_select_name">Cours 2</option>
                                                            <option value="option_select_name">Cours 3</option>
                                                            <option value="option_select_name">Cours 4</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label">Brève Description</label>
                                                    <span class="form-note">Spécifiez votre courte description.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <textarea cols="9" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label"> Description</label>
                                                    <span class="form-note">Spécifiez votre  Description.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <textarea cols="9" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label">statut</label>
                                                    <span class="form-note">Activé or Désactiver L'Audio.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <ul class="custom-control-group g-3 align-center flex-wrap">
                                                    <li>
                                                        <div class="custom-control custom-radio checked">
                                                            <input type="radio" class="custom-control-input" checked="" name="reg-public" id="reg-enable">
                                                            <label class="custom-control-label" for="reg-enable">Activé</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                            <label class="custom-control-label" for="reg-disable">Désactiver</label>
                                                        </div>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row g-3 align-center">
                                            <div class="col-lg-5">
                                                <div class="form-group">
                                                    <label class="form-label">Mettre En Ligne L'Audio</label>
                                                    <span class="form-note">Seulement mp3.</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-7">
                                                <div class="form-group">
                                                    <div class="form-control-wrap">
                                                        <input  type="file" class="form-control"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Ajouter L'Audio</button>
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
