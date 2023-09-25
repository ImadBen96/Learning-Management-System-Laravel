@extends('admin.layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" ><em class="icon ni ni-arrow-left"></em><span>Tous Les Carrieres</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Tous Les Cours</h2>
                                <div class="nk-block-des">
                                </div>
                            </div>

                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a  class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><button  class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Course</span></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    @if(session()->has('success'))
                        <div class="example-alert mb-4">
                            <div class="alert alert-fill alert-success alert-icon">
                                <em class="icon ni ni-check-circle"></em> <strong>{{ session()->get('success') }}</strong>
                            </div>
                        </div>
                    @endif
                    <div class="nk-block">
                        <div class="card card-stretch">
                            <div class="card-inner-group">

                                <div class="card card-preview">
                                    <div class="card-inner">

                                        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                            <thead>
                                            <tr class="nk-tb-item nk-tb-head">

                                                <th class="nk-tb-col"><span class="sub-text">Nom Du coure</span></th>

                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Catégorie</span></th>

                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Statut</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($coures)
                                                @foreach($coures as $coure)
                                                    <tr class="nk-tb-item">

                                                        <td class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div style="width: 98px;margin-right: 5px;"
                                                                     class="d-none d-sm-flex">
                                                                    <img style="border-radius: 10px;" src="{{ asset('images/cours/'. $coure->photo  ) }}" />
                                                                </div>
                                                                <div class="user-info">
                                                                    <span class="tb-lead">{{ $coure->cours_name }}<span class="dot dot-success d-md-none ml-1"></span></span>

                                                                </div>
                                                            </div>
                                                        </td>



                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-pill badge-warning">{{ \App\Models\Category::find($coure->category_id)->category_name }}</span>

                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="tb-status text-success">Active</span>
                                                        </td>
                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul>

                                                                <li>
                                                                    <div class="drodown">
                                                                        <a  class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{ route('cours.edit',$coure->id) }}"><em class="icon ni ni-focus"></em><span>Édit Cours</span></a></li>


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
                            </div>
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalCreate">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a  class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Créer Un Cours</h5>
                    <form action="{{ route('cours.store') }}" method="POST" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Nom du cours</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="course-name" name="cours_name" placeholder="Nom du cours">
                                    </div>
                                </div><!-- .form-group -->
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Animateur nom et prenom</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="animateurname" name="animateur_name" placeholder="Nom et Prenom de l'animateur">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-category">Catégorie de cours</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="course-category" name="category_id">
                                            @isset($categories)
                                                @foreach($categories as $categorie)
                                                    <option value="{{ $categorie->id }}">{{ $categorie->category_name }}</option>

                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div><!-- .form-group -->
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Vignette Du Cours</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="photo" class="custom-file-input" id="customFile-create">
                                            <label class="custom-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Course Description</label>
                                    <div class="form-control-wrap">
                                        <textarea class="summernote" name="description"></textarea>
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Animateur Description</label>
                                    <div class="form-control-wrap">
                                        <textarea class="form-control" name="animateur_desc"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Vignette Du Animateur</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="photo_animateur" class="custom-file-input" id="customFile-create1">
                                            <label class="custom-file-label" for="customFile-create">Choose file</label>
                                        </div>
                                    </div>
                                </div><!-- .form-group -->
                            </div>


                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Status</label>
                                    <div class="form-control-wrap">
                                        <ul class="custom-control-group g-3 align-center flex-wrap">
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" checked value="active" name="status" id="reg-enable">
                                                    <label class="custom-control-label" for="reg-enable">Active</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" value="en_attente" name="status" id="reg-disable">
                                                    <label class="custom-control-label" for="reg-disable">En attente</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" value="rejetee" name="status" id="reg-request">
                                                    <label class="custom-control-label" for="reg-request">Rejetée</label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .form-group -->
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Créer Un Cours</button>
                                </div><!-- .form-group -->
                            </div>
                        </div>
                    </form>
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
