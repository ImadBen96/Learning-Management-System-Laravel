@extends('admin.layouts.app')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Models</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Tous Les Models</h2>

                            </div>

                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt" data-toggle="modal" data-target="#modalCreate"><button  class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Model</span></button>
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

                                                <th class="nk-tb-col"><span class="sub-text">Title Du Model</span></th>

                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Title Du Coure</span></th>


                                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @isset($models)
                                                @foreach($models as $model)
                                                    <tr class="nk-tb-item">





                                                        <td class="nk-tb-col tb-col-md">
                                                            {{ $model->title }}

                                                        </td>
                                                        <td class="nk-tb-col tb-col-md">
                                                            <span class="badge badge-pill badge-warning">{{ \App\Models\Cours::find($model->coure_id)->cours_name }}</span>

                                                        </td>


                                                        <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul>

                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{ route('models.edit',$model->id) }}"><em class="icon ni ni-focus"></em><span>Édit Moduls</span></a></li>


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
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="modal-title">Créer Un Model</h5>
                    <form action="{{ route('model.store') }}" method="POST" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <div class="row gy-3 gx-gs">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="form-label" for="course-name">Title du Model</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="course-name" name="model_name" placeholder="Nom du cours">
                                    </div>
                                </div><!-- .form-group -->
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="form-label" for="course-category">Models Cours</label>
                                    <div class="form-control-wrap">
                                        <select class="form-select" id="course-category" name="coure_id">
                                            @isset($coures)
                                                @foreach($coures as $coure)
                                                    <option value="{{ $coure->id }}">{{ $coure->cours_name }}</option>

                                                @endforeach
                                            @endisset
                                        </select>
                                    </div>
                                </div><!-- .form-group -->
                            </div>



                            <div class="col-12">
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Créer Un Model</button>
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

