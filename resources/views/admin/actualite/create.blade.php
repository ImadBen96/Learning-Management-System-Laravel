@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Actualité</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class=" bi bi-chat-right-dots"></em> Ajouter Actualité</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('actualite.store') }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                            @csrf
                                            <div class="row g-gs">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Title En Francais</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="title_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">العنوان بالعربية :</label>
                                                        <div class="form-control-wrap">

                                                            <input style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" name="title_ar" required="">
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
                                                        <label class="form-label" for="customFileLabel">Vignette D'Actualité</label>
                                                        <div class="form-control-wrap">
                                                           <input type="file" name="photo" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Contenu En Francais</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_fr"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="customFileLabel">المحتوى بالعربية :</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_ar"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Mots clés</label>
                                                        <div class="form-control-wrap">
                                                            <input class="form-control" type="text" data-role="tagsinput" name="tags_fr" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="text-align: initial;direction: rtl;" class="form-group">
                                                        <label class="form-label arab" for="customFileLabel">الكلمات الدالة</label>
                                                        <div class="form-control-wrap">
                                                            <input  style="direction: rtl;" class="form-control arab" type="text" data-role="tagsinput" name="tags_ar" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Lieu En Francais</label>
                                                        <div class="form-control-wrap">
                                                            <input class="form-control" type="text" name="lieu_fr" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right" class="form-group">
                                                        <label class="form-label arab" for="customFileLabel">الموقع باللغة العربية</label>
                                                        <div class="form-control-wrap">
                                                            <input style="direction: rtl;" class="form-control" type="text" name="lieu_ar" />
                                                        </div>
                                                    </div>

                                                </div>








                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Ajouter Actualité</button>
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
                        placeholder: 'Contenu',
                        tabsize: 2,
                        height: 350,
                        toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'strikethrough', 'clear']], ['font', ['superscript', 'subscript']], ['color', ['color']], ['fontsize', ['fontsize', 'height']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['insert', ['link', 'picture', 'video']], ['view', ['fullscreen', 'codeview', 'help']]]


                    });
                });
            </script>

@endsection
