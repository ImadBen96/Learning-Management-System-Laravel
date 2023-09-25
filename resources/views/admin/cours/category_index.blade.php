@extends('admin.layouts.app')

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Tous Les Catégories</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Tous Les Catégories</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">

                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate"><em class="icon ni ni-plus"></em><span>Add Category</span></a></li>
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
                        <div class="row g-gs">
                            @isset($categories)

                                @foreach($categories as $categorie)
                                      <div class="col-sm-6 col-lg-4 col-xxl-3">

                                          <div class="card h-100">
                                              <img src="{{ asset('images/categories/'.$categorie->photo) }}" class="card-img-top" alt="">
                                              <div class="card-inner">
                                                  <a>
                                                      <h5 class="card-title mb-5">{{ $categorie->category_name }}</h5>
                                                  </a>


                                                  <p class="card-text">{{ $categorie->description }}</p>

                                              </div>
                                          </div>

                            </div>
                                @endforeach
                            @endisset()

                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modalCreate" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Ajouter Une Catégorie</h5>
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="pt-2">
                        @csrf
                        <div class="form-group">
                            <label class="form-label" for="full-name">Nom de catégorie</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="category_name" id="full-name" placeholder="Nom de catégorie">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="description">Description</label>
                            <div class="form-control-wrap">
                                <textarea class="form-control" name="description" id="description" placeholder="Write Category Description"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="thumb">Vignette de la catégorie</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" name="photo" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="thumb">Choisir le fichier</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sous-catégorie</label>
                            <div class="d-flex gx-3 mb-3">
                                <div class="g w-100">
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="sous_category" placeholder="Sous-catégorie">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <button   type="submit" class="btn btn-primary">Enregistrer les informations</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
