@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les carriére</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Ajouter un Carriére</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('recrutement.store') }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                            @csrf

                                            <div class="row g-gs">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Poste :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="post" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Société :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="societe" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Date de début :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="date_de_debut" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Type de contrat :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="type_de_contrat" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Lieu de travail :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="lieu_de_travail" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div  class="form-group">
                                                        <label  class="form-label" for="fw-last-name">Caractéristiques du poste</label>
                                                        <div class="form-control-wrap">

                                                            <textarea type="text"  class="form-control" id="title" name="caractéristiques_du_poste"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div  class="form-group">
                                                        <label  class="form-label" for="fw-last-name">Formation</label>
                                                        <div class="form-control-wrap">

                                                            <textarea type="text" data-msg="Required" class="form-control required" id="title" name="Formation"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Expérience professionnelle :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="Expérience_professionnelle" required="">
                                                        </div>
                                                    </div>
                                                </div>






                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Photo de Coverture :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="file"  id="title" name="photo" />
                                                        </div>
                                                    </div>
                                                </div>








                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Ajouter Un Carriére</button>
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
