@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Recrutements</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Ajouter Recrutement</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">

                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <form action="{{ route('carriere.store') }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                        @csrf

                                        <div class="row g-gs">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Titre de l'offre d'emploi (FR) :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="text" data-msg="Required" class="form-control required" id="title" name="title_fr" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div style="text-align: right;" class="form-group">
                                                    <label style="direction: rtl;" class="form-label arab" for="fw-last-name">العنوان بالعربية :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="text" data-msg="Required" class="form-control required" id="title" name="title_ar" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div  class="form-group">
                                                    <label  class="form-label" for="fw-last-name">Brève Description</label>
                                                    <div class="form-control-wrap">

                                                        <textarea type="text" data-msg="Required" class="form-control required" id="title" name="short_description_fr"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div style="text-align: right;" class="form-group">
                                                    <label  class="form-label arab" for="fw-last-name">وصف قصير</label>
                                                    <div class="form-control-wrap">

                                                        <textarea style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" name="short_description_ar"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Description En Francais</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_fr"></textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="customFileLabel">المحتوى بالعربية:</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_ar" placeholder="المحتوى"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">Date de creation</label>
                                                    <div class="form-control-wrap">

                                                        <input type="text" class="form-control date-picker" name="date_creation" autocomplete="off" data-date-format="yyyy-mm-dd">
                                                    </div>
                                                    <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Email :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="email" data-msg="Required" class="form-control required" id="title" name="email" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Photo de Coverture :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="file" data-msg="Required" class="required" id="title" name="photo" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Telephone :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="text" data-msg="Required" class="form-control required" id="title" name="tele" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Attachement :</label>
                                                    <div class="form-control-wrap">

                                                        <input type="file" data-msg="Required" class="required" id="title" name="attachement" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label" for="fw-last-name">Lieu :</label>
                                                    <div class="form-control-wrap">
                                                       <input type="text" data-msg="Required" class="form-control required" id="title" name="lieu_fr" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6"></div>

                                            <div class="col-md-6">
                                                <div style="text-align: right;" class="form-group">
                                                    <label style="direction: rtl;" class="form-label arab" for="fw-last-name">مكان :</label>
                                                    <div class="form-control-wrap">
                                                       <input style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" name="lieu_ar" required="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="thumb">Status</label>
                                                    <div class="form-control-wrap">
                                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                                            <li>
                                                                <div class="custom-control custom-radio checked">
                                                                    <input type="radio" class="custom-control-input" checked="" value="public" name="status" id="reg-enable">
                                                                    <label class="custom-control-label" for="reg-enable">Public</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" class="custom-control-input" value="prive" name="status" id="reg-disable">
                                                                    <label class="custom-control-label" for="reg-disable">Privé</label>
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div><!-- .form-group -->
                                            </div>




                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- .nk-block -->

                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function() {
                    $('.summernote').summernote({
                        placeholder: 'Description',
                        tabsize: 2,
                        height: 350,
                        toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'strikethrough', 'clear']], ['font', ['superscript', 'subscript']], ['color', ['color']], ['fontsize', ['fontsize', 'height']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['insert', ['link', 'picture', 'video']], ['view', ['fullscreen', 'codeview', 'help']]]


                    });
                });
            </script>
@endsection
