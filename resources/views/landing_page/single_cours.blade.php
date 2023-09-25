@extends('landing_page.layout.layout_course')


@section("content")


    <header style="background-image: url({{ asset('images/header_last1.png') }}) !important;background-size: inherit;" class="header-page">
        <div class="container">
            <div class="header-page-content desk-pad-right-30">


                <h1 class="arab"> {{$title}}</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="arab" href="#">لوحة التحكم</a></li>
                        <li class="breadcrumb-item active arab" aria-current="page">{{$title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </header>
    <section class="course-details-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 pb-30 order-lg-2">
                    <div class="summery-details-item sidebar-to-header">
                        <div class="summery-box">

                            <div class="summery-inner">
                                <div class="summery-list">
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-instructor"></i>مسير الدرس</div>
                                        <div class="summery-option arab">{{ $animateur }}</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-online-learning-1"></i>عدد الوحدات</div>
                                        <div class="summery-option">10</div>
                                    </div>
                                    <div class="summery-list-item">
                                        <div class="summery-label arab"><i class="flaticon-reading-book-1"></i>التلميد المسجل</div>
                                        <div class="summery-option arab">{{auth()->user()->full_name}}</div>
                                    </div>

                                </div>
                                <div class="summery-material-list">
                                    <h4 class="arab"> المواد المرفقة</h4>
                                    <ul>
                                        <li class="arab"><span>-</span> شريط فيديو</li>
                                        <li class="arab"><span>-</span> ملفات PDF</li>
                                    </ul>
                                </div>
                                <div class="summery-buttons">
                                  @if(\Illuminate\Support\Facades\Auth::check())
                                        <a href="{{route("student")}}" class="btn main-btn arab">الذهاب إلى لوحة التحكم</a>
                                      @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: -58px;" class="col-12 col-lg-8 pb-30 order-lg-1">
                    <div class="summery-details-item desk-pad-right-30">
                        <ul class="product-tab-list">
                            <li class="active arab" data-product-tab="1">نظرة عامة</li>
                            <li class="arab" data-product-tab="2">مواد الدرس</li>
                            <li class="arab" data-product-tab="3">مسير الدرس</li>

                        </ul>
                        <div class="summery-info-details">
                            <div class="summery-info-details-item summery-info-details-item-active" data-summery-info-details="1">
                                <div class="summery-info-details-inner">
                                    {!! $desc !!}
                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="2">
                                <div class="summery-info-details-inner">
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">فيديوهات الدرس</h4>
                                    <ul class="summery-lesson-list">
                                        @foreach($video as $vid)
                                        <li>
                                            <a href="#" class="linkVid" data-toggle="modal" data-target="#modalLarge{{$vid["id"]}}">
                                                <span class="summery-lesson-name arab"> {{ $vid["title"] }} </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                    <h4 style="background: aliceblue;
    padding: 10px;
    border-radius: 8px;" class="arab">ملفات الدرس</h4>
                                    <ul class="summery-lesson-list">
                                        @foreach($mats as $m)
                                        <li>
                                            <a href="#" data-toggle="modal" data-target="#modalLargeMat{{$m["id"]}}">
                                                <span class="summery-lesson-name arab">{{ $m["title"] }} </span>
                                            </a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="summery-info-details-item" data-summery-info-details="3">
                                <div class="summery-info-details-inner">
                                    <div class="summery-info-instructor">
                                        <div class="summery-info-instructor-thumb">
                                            <img src="{{asset('images/cours/'.$animateur_pic)}}" alt="instructor">
                                        </div>
                                        <div class="summery-info-instructor-details">
                                            <h3 class="arab"> {{ $animateur }}</h3>
                                            <p class="arab">{{$animateur_descriptor}} </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach($video as $vid)
            <div class="modal fade" tabindex="-1" id="modalLarge{{$vid["id"]}}">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{ $vid["title"] }}</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <video controls style="width: 100%; height: 500px !important;">

                                <source  src="{{url( str_replace('public','storage',$vid["url"]) )}}"
                                        type="video/mp4">

                                Sorry, your browser doesn't support embedded videos.
                            </video>
                        </div>
                        <div class="modal-footer bg-light">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($mats as $vid)
            <div class="modal fade" tabindex="-1" id="modalLargeMat{{$vid["id"]}}">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">{{$vid["title"]}}</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <iframe style="width: 100% ; height: 80vh"
                                    src="//docs.google.com/gview?url={{ url( str_replace('public','storage',$vid["url"]) )  }}&embedded=true"  frameborder="0"></iframe>
                        </div>
                        <div class="modal-footer bg-light">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>
    <!-- .end course-details-section -->
    <!-- course-section -->


<script>
    $("[data-toggle='modal']").on("click" , function (e) {
        console.log("holla ")
        const id = $(this).attr("data-target")
        $(id).modal("show")
    })
</script>
@endsection
