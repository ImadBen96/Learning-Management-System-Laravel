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
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Mise à jour D'Offre d'emploi</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('carriere.update',$carriere->id) }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                            @csrf

                                            <div class="row g-gs">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Titre de l'offre d'emploi (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $carriere->title_fr }}" name="title_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">العنوان بالعربية :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $carriere->title_fr }}" name="title_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div  class="form-group">
                                                        <label  class="form-label" for="fw-last-name">Brève Description</label>
                                                        <div class="form-control-wrap">

                                                            <textarea type="text" data-msg="Required" class="form-control required" id="title" name="short_description_fr">{{ $carriere->short_description_fr }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label  class="form-label arab" for="fw-last-name">وصف قصير</label>
                                                        <div class="form-control-wrap">

                                                            <textarea style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" name="short_description_ar">{{ $carriere->short_description_ar }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Description En Francais</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_fr">{{ $carriere->content_fr }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="customFileLabel">المحتوى بالعربية:</label>
                                                        <div class="form-control-wrap">
                                                            <textarea class="summernote" name="contenu_ar" placeholder="المحتوى">{{ $carriere->content_ar }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date de creation</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" class="form-control date-picker" name="date_creation" autocomplete="off" value="{{ $carriere->date_creation }}" data-date-format="yyyy-mm-dd">
                                                        </div>
                                                        <div class="form-note">Date format <code>yyyy-mm-dd</code></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Email :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="email" data-msg="Required" class="form-control required" id="title" name="email" value="{{ $carriere->email }}" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Photo de Coverture :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="file" data-msg="Required"  id="title" name="photo" />
                                                        </div>
                                                    </div>
                                                    @if ($errors->has('photo'))
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    @endif
                                                    <div class="form-group">
                                                        <img src="{{ asset('images/carriere/'. $carriere->photo ) }}" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Telephone :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $carriere->tele }}" name="tele" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Attachement :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="file" data-msg="Required" id="title" name="attachement" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Lieu :</label>
                                                        <div class="form-control-wrap">
                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $carriere->lieu_fr }}" name="lieu_fr" required="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="width: 100px;" class="form-group">
                                                        <a target="_blank" href="{{ asset('images/carriere/attachment/'.$carriere->attachement ) }}">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                <path d="M42,31H30a3.0033,3.0033,0,0,0-3,3V45a3.0033,3.0033,0,0,0,3,3H42a3.0033,3.0033,0,0,0,3-3V34A3.0033,3.0033,0,0,0,42,31ZM29,38h6v3H29Zm8,0h6v3H37Zm6-4v2H37V33h5A1.001,1.001,0,0,1,43,34ZM30,33h5v3H29V34A1.001,1.001,0,0,1,30,33ZM29,45V43h6v3H30A1.001,1.001,0,0,1,29,45Zm13,1H37V43h6v2A1.001,1.001,0,0,1,42,46Z" style="fill:#36c684"></path>
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">مكان :</label>
                                                        <div class="form-control-wrap">
                                                            <input style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" value="{{ $carriere->lieu_ar }}" name="lieu_ar" required="" />
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
                                                                        <input type="radio" class="custom-control-input"  value="public"  @if( $carriere->status == "public" ) checked  @endif name="status" id="reg-enable">
                                                                        <label class="custom-control-label" for="reg-enable">Public</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" value="prive" @if( $carriere->status == "prive" ) checked  @endif name="status" id="reg-disable">
                                                                        <label class="custom-control-label" for="reg-disable">Privé</label>
                                                                    </div>
                                                                </li>

                                                            </ul>
                                                        </div>
                                                    </div><!-- .form-group -->
                                                </div>




                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Mise à jour D'Offre d'emploi</button>
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
