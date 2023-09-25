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
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Ajouter une Offre d'emploi</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('entrepreneurs.store') }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                            @csrf

                                            <div class="row g-gs">
                                                <div class="col-md-12">
                                                    <div class="col-md-12">

                                                        <div class="avatar-upload">
                                                            <div class="avatar-edit">
                                                                <input type="file" name="image_profile" id="imageUpload" accept=".png, .jpg, .jpeg">
                                                                <label for="imageUpload"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                                        <rect x="15" y="5" width="56" height="70" rx="6" ry="6" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                        <path d="M69.88,85H30.12A6.06,6.06,0,0,1,24,79V21a6.06,6.06,0,0,1,6.12-6H59.66L76,30.47V79A6.06,6.06,0,0,1,69.88,85Z" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                                        <polyline points="60 16 60 31 75 31.07" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                                        <rect x="40" y="45" width="23" height="19" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                        <rect x="36" y="49" width="23" height="19" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                                                        <polyline points="37 62.88 45.12 55.94 52.81 63.06 55.99 59.44 59 62.76" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                                        <circle cx="52.11" cy="54.98" r="2.02" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                                                    </svg></label>
                                                            </div>
                                                            <div class="avatar-preview">
                                                                <div id="imagePreview" style="background-image: url(http://localhost:8000/images/man.png);">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Nom & Prénom (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="title_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name"> اسم الكامل  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="title_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Niveau scolaire (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="niveau_scolaire_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">مستوى مدرسي  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="niveau_scolaire_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Formation ou expérience professionnelle (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="formation_professionnelle_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">التدريب أو الخبرة في العمل  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="formation_professionnelle_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">L’âge : </label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="age" required="">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-12">
                                                    <div style="background: #c9ffdf;padding: 8px;border-radius: 9px;color: #FFF;text-align: center;">
                                                        <h3>PROJET</h3>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Nom (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="project_name_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">اسم المشروع  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="project_name_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Logo :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="file"  name="logo"  />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div  class="form-group">
                                                        <label  class="form-label" for="fw-last-name">Bréve Description (FR)</label>
                                                        <div class="form-control-wrap">

                                                            <textarea type="text" data-msg="Required" class="form-control required" id="title" name="short_description_fr"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label  class="form-label arab" for="fw-last-name"> قصير تفصيل</label>
                                                        <div class="form-control-wrap">

                                                            <textarea style="direction: rtl;" type="text" data-msg="Required" class="form-control required" id="title" name="short_description_ar"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Statut juridique (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="statut_juridique_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">الوضع القانوني  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="statut_juridique_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Catégorie (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="category_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">فئة  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="category_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Secteur d’activité (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="secteur_activite_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">منطقة النشاط  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="secteur_activite_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Domiciliation (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="domiciliation_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">التوطين  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="domiciliation_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Canaux de communication (FR) :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="canaux_communication_fr" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">قنوات الاتصال  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="canaux_communication_ar" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="background: #c9ffdf;padding: 8px;border-radius: 9px;color: #FFF;text-align: center;">
                                                        <h3>Gallery</h3>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 1</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_1" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 2</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_2" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 3</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_3" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 4</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_4" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 5</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_5" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label" for="customFileLabel">Photo 6</label>
                                                        <div class="form-control-wrap">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" name="photo_6" id="customFile">
                                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="background: #c9ffdf;padding: 8px;border-radius: 9px;color: #FFF;text-align: center;">
                                                        <h3>Services</h3>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="container">
                                                        <div style="margin-bottom: 8px;" class='element' id='div_1'>
                                                            <button  type="button" class='btn btn-lg btn-success mb-4 add'>Ajouter Un Service</button>
                                                            <input class="form-control required" type='text' name='service_name[]' placeholder='Ajouter Un Service' id='txt_1' >
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div style="background: #c9ffdf;padding: 8px;border-radius: 9px;color: #FFF;text-align: center;">
                                                        <h3>Financement</h3>
                                                    </div>

                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Capitale initiale :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="number" data-msg="Required" class="form-control required" id="title" name="capitale_initiale" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div   class="form-group">
                                                        <label class="form-label " for="fw-last-name">Apport de l’INDH  :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="number" data-msg="Required" class="form-control required" id="title" name="apport_INDH" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div   class="form-group">
                                                        <label   class="form-label " for="fw-last-name">Apport de l’entrepreneur :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="number" data-msg="Required" class="form-control required" id="title" name="apport_entrepreneur" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label   class="form-label " for="fw-last-name">Autre opportunité de financement :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="opportunite_financement" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="background: #c9ffdf;padding: 8px;border-radius: 9px;color: #FFF;text-align: center;">
                                                        <h3>Stories</h3>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label   class="form-label " for="fw-last-name">Une histoire à succès</label>
                                                        <div class="form-control-wrap">

                                                            <textarea class="summernote" name="contenu_fr"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div style="text-align: right;" class="form-group">
                                                        <label style="direction: rtl;" class="form-label arab" for="fw-last-name">قصة نجاح</label>
                                                        <div class="form-control-wrap">

                                                            <textarea class="summernote" name="contenu_ar"></textarea>
                                                        </div>
                                                    </div>
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


                    /*start crop*/
                    function readURL(input) {
                        if (input.files && input.files[0]) {

                            console.log('im here !!');

                            var reader = new FileReader();
                            reader.onload = function(e) {

                                $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                                $('#imagePreview').hide();
                                $('#imagePreview').fadeIn(650);
                            }
                            reader.readAsDataURL(input.files[0]);


                        }
                    }
                    $("#imageUpload").change(function() {

                        readURL(this);
                    });
                    /*end  crop*/

                    $('.summernote').summernote({
                        placeholder: 'Description',
                        tabsize: 2,
                        height: 350,
                        toolbar: [['style', ['style']], ['font', ['bold', 'underline', 'strikethrough', 'clear']], ['font', ['superscript', 'subscript']], ['color', ['color']], ['fontsize', ['fontsize', 'height']], ['para', ['ul', 'ol', 'paragraph']], ['table', ['table']], ['insert', ['link', 'picture', 'video']], ['view', ['fullscreen', 'codeview', 'help']]]


                    });
                });
            </script>
            <script>
                $(document).ready(function(){

                    // Add new element
                    $(".add").click(function(){

                        // Finding total number of elements added
                        var total_element = $(".element").length;

                        // last <div> with element class id
                        var lastid = $(".element:last").attr("id");
                        var split_id = lastid.split("_");
                        var nextindex = Number(split_id[1]) + 1;

                        var max = 5;
                        // Check total number elements
                        if(total_element < max ){
                            // Adding new div container after last occurance of element class
                            $(".element:last").after("<div style='display: flex;margin-bottom: 8px;' class='element' id='div_"+ nextindex +"'></div>");

                            // Adding element to <div>
                            $("#div_" + nextindex).append("<input class='form-control required' name='service_name[]'  type='text' placeholder='Ajouter Un Service' id='txt_"+ nextindex +"'>&nbsp;<span style='background: red;color: #FFF;padding: 8px;padding-top: 7px;border-radius: 8px;' id='remove_" + nextindex + "' class='remove'>X</span>");

                        }

                    });

                    // Remove element
                    $('.container').on('click','.remove',function(){

                        var id = this.id;
                        var split_id = id.split("_");
                        var deleteindex = split_id[1];

                        // Remove <div> with id
                        $("#div_" + deleteindex).remove();

                    });
                });
            </script>
@endsection
