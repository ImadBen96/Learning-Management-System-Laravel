@extends('admin.layouts.app')
@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub"><a class="back-to" href="#"><em class="icon ni ni-arrow-left"></em><span>Editer Postilation</span></a></div>
                                <h2 class="nk-block-title fw-normal"><em class="bi bi-bounding-box"></em> Editer Postilation</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                </div>
                            </div>
                        </div>

                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head">

                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <form action="{{ route('ConcourIdee.poster.complete',$post->id) }}" method="POST" enctype="multipart/form-data" class="form-validate is-alter" novalidate="novalidate">
                                            @csrf

                                            <div class="row g-gs">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-4">
                                                    <div style="text-align: center" class="form-group">
                                                        <label class="form-label mb-4" for="fw-last-name">Photo :</label>

                                                        <div class="form-group">
                                                            <label class="form-label" for="customFileLabel">Default File Upload</label>
                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="photo" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <img src="{{ asset('images/concours/posts/'.$post->photo) }}" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Nom :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="first_name" value="{{ $post->first_name }}" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="form-label arab" for="fw-last-name">Prénom :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $post->last_name }}" name="last_name" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div  class="form-group">
                                                        <label  class="form-label" for="fw-last-name">Description</label>
                                                        <div class="form-control-wrap">

                                                            <textarea type="text" data-msg="Required" class="form-control required" id="title"  name="description">{{ $post->description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Téléphone :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" name="tele" value="{{ $post->tele }}" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="form-label arab" for="fw-last-name">Email :</label>
                                                        <div class="form-control-wrap">

                                                            <input type="text" data-msg="Required" class="form-control required" id="title" value="{{ $post->email }}" name="email" required="">
                                                        </div>
                                                    </div>
                                                </div>





                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">carte National :</label>

                                                        <div class="form-group">

                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="carte_national" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  style="width: 100%" class="mb-4">
                                                            @if( Illuminate\Support\Str::contains($post->cart_national, 'png') || Illuminate\Support\Str::contains($post->cart_national, 'jpg') )
                                                               <a  style="width: 100%" href="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" target="_blank">
                                                                   <img class="mt-4" style="width: 100%;border-radius: 8px;" src="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" />
                                                               </a>

                                                            @endif
                                                            @if( Illuminate\Support\Str::contains($post->cart_national, 'pdf') )
                                                                <a href="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" target="_blank">
                                                                    <span style="width: 50%;" class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                </svg>
                                                                    </span>
                                                                </a>
                                                            @endif

                                                        </div>
{{--                                                        <img src="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">CV :</label>

                                                        <div class="form-group">

                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="cv" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div  style="width: 100%" class="mb-4">
                                                            @if( Illuminate\Support\Str::contains($post->cv, 'png') || Illuminate\Support\Str::contains($post->cv, 'jpg') )
                                                              <a  style="width: 100%" href="{{ asset('images/concours/posts/cv/'.$post->cv) }} " target="_blank">
                                                               <img class="mt-4" style="width: 100%;border-radius: 8px;" src="{{ asset('images/concours/posts/cv/'.$post->cv) }}" />
                                                              </a>
                                                            @endif
                                                            @if( Illuminate\Support\Str::contains($post->cv, 'pdf') )
                                                                <a href="{{ asset('images/concours/posts/cv/'.$post->cv) }}" target="_blank">
                                                                    <span style="width: 50%;" class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                </svg>
                                                                    </span>
                                                                </a>
                                                            @endif

                                                        </div>
{{--                                                        <img src="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Certificat :</label>

                                                        <div class="form-group">

                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="certificat" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div  style="width: 100%" class="mb-4">
                                                            @if( Illuminate\Support\Str::contains($post->certificat, 'png') || Illuminate\Support\Str::contains($post->certificat, 'jpg') )
                                                               <a  style="width: 100%" href="{{ asset('images/concours/posts/certificat/'.$post->certificat) }}" target="_blank">
                                                                  <img class="mt-4" style="width: 100%;border-radius: 8px;" src="{{ asset('images/concours/posts/certificat/'.$post->certificat) }}" />
                                                               </a>
                                                            @endif
                                                            @if( Illuminate\Support\Str::contains($post->certificat, 'pdf') )
                                                                <a href="{{ asset('images/concours/posts/certificat/'.$post->certificat) }}" target="_blank">
                                                                    <span style="width: 50%;" class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                </svg>
                                                                    </span>
                                                                </a>
                                                            @endif

                                                        </div>
{{--                                                        <img src="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label" for="fw-last-name">Demande :</label>

                                                        <div class="form-group">

                                                            <div class="form-control-wrap">
                                                                <div class="custom-file">
                                                                    <input type="file" class="custom-file-input" name="demande" id="customFile">
                                                                    <label class="custom-file-label" for="customFile">Choisir le fichier</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div style="width: 100%" class="mb-4">
                                                            @if( Illuminate\Support\Str::contains($post->Demande, 'png') || Illuminate\Support\Str::contains($post->Demande, 'jpg') )
                                                               <a style="width: 100%" href="{{ asset('images/concours/posts/demande/'.$post->Demande) }}" target="_blank">
                                                                  <img class="mt-4" style="width: 100%;border-radius: 8px;" src="{{ asset('images/concours/posts/demande/'.$post->Demande) }}" />
                                                               </a>
                                                            @endif
                                                            @if( Illuminate\Support\Str::contains($post->Demande, 'pdf') )
                                                                <a href="{{ asset('images/concours/posts/demande/'.$post->Demande) }}" target="_blank">
                                                                    <span style="width: 50%;" class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168"></path>
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168"></path>
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168"></path>
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168"></path>
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168"></path>
                                                                                </svg>
                                                                    </span>
                                                                </a>
                                                            @endif

                                                        </div>
{{--                                                        <img src="{{ asset('images/concours/posts/carte_national/'.$post->cart_national) }}" />--}}
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div  class="form-group">
                                                        <label class="form-label " for="fw-last-name">Concours associe :</label>
                                                        <div class="form-control-wrap">



                                                            <select class="form-control" name="post_id">
                                                                @foreach($all_concours as $all_concour)
                                                                      <option @if( $all_concour->id == $concours->id )  selected @endif value="{{$all_concour->id}}">{{ $all_concour->title_fr }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>







                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-lg btn-primary">Completer Postulation</button>
                                                        <a href="{{ route('ConcourIdee.poster.rejeter',$concours->id) }}" class="btn btn-lg btn-danger">Rejeter</a>
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

