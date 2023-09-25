@extends('admin.layouts.app')
@section('content')
    <div class="nk-content p-0">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div style="padding-left: 0px !important;" class="nk-fmg">

                    <div class="nk-fmg-body">
                        <div style="justify-content: end !important;" class="nk-fmg-body-head d-none d-lg-flex">

                            <div class="nk-fmg-actions">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="dropdown">
                                            <a href="{{ route('audios.create') }}" class="btn btn-light" ><em class="icon ni ni-plus"></em> <span>Ajouter Un Audio</span></a>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-fmg-body-content">

                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between position-relative">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title fw-normal"><i style="top: -9px;position: relative;" class="bi bi-mic"></i> Tous Les Audios</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content">
                                        <ul class="nk-block-tools g-1">
                                            <li class="d-lg-none">
                                                <a href="#" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li>
                                            <li class="d-lg-none">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#file-upload" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em><span>Upload File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-file-plus"></em><span>Create File</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-folder-plus"></em><span>Create Folder</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="d-lg-none mr-n1"><a href="#" class="btn btn-trigger btn-icon toggle" data-target="files-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                        </ul>
                                    </div>
                                    <div class="search-wrap px-2 d-lg-none" data-search="search">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div><!-- .search-wrap -->
                                </div>
                            </div>

                            <div class="nk-fmg-listing nk-block-lg">
                                <div class="nk-block-head-xs">
                                    <div class="nk-block-between g-2">
                                        <div class="nk-block-head-content">
                                            <h6 class="nk-block-title title">Browse Files</h6>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <ul class="nk-block-tools g-3 nav">
                                                <li><a data-toggle="tab" href="#file-grid-view" class="nk-switch-icon active"><em class="icon ni ni-view-grid3-wd"></em></a></li>
                                                <li><a data-toggle="tab" href="#file-group-view" class="nk-switch-icon"><em class="icon ni ni-view-group-wd"></em></a></li>
                                                <li><a data-toggle="tab" href="#file-list-view" class="nk-switch-icon"><em class="icon ni ni-view-row-wd"></em></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="tab-content">
                                    <div class="tab-pane active" id="file-grid-view">
                                        <div class="nk-files nk-files-view-grid">
                                            <div class="nk-files-head">
                                                <div class="nk-file-item">
                                                    <div class="nk-file-info">
                                                        <div class="dropdown">
                                                            <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Last Opened</div>
                                                            <div class="dropdown-menu dropdown-menu-xs">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                    <li><a href="#"><span>Name</span></a></li>
                                                                    <li><a href="#"><span>Size</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="nk-files-list">
                                                <div class="nk-file-item nk-file">
                                                    <div class="nk-file-info">
                                                        <div class="nk-file-title">
                                                            <div class="nk-file-icon">
                                                                <a class="nk-file-icon-link" href="#">
                                                                    <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M46,46.5v-13A3.5042,3.5042,0,0,0,42.5,30h-13A3.5042,3.5042,0,0,0,26,33.5v13A3.5042,3.5042,0,0,0,29.5,50h13A3.5042,3.5042,0,0,0,46,46.5ZM40,45v3H37V45Zm-3-2V37h7v6Zm0-8V32h3v3Zm-2-3v3H32V32Zm0,5v6H28V37Zm0,8v3H32V45Zm7.5,3H42V45h2v1.5A1.5016,1.5016,0,0,1,42.5,48ZM44,33.5V35H42V32h.5A1.5016,1.5016,0,0,1,44,33.5ZM29.5,32H30v3H28V33.5A1.5016,1.5016,0,0,1,29.5,32ZM28,46.5V45h2v3h-.5A1.5016,1.5016,0,0,1,28,46.5Z" style="fill:#f74141"></path>
                                                                                </svg>
                                                                            </span>

                                                                </a>
                                                            </div>
                                                            <div class="nk-file-name">
                                                                <div class="nk-file-name-text">
                                                                    <a href="#" class="title">UI Design</a>
                                                                    <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <ul class="nk-file-desc">
                                                            <li class="date">Today</li>
                                                            <li class="size">4.5 MB</li>
                                                            <li class="members">3 Members</li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-file-actions">
                                                        <div class="dropdown">
                                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-plain no-bdr">
                                                                    <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>

                                                                    <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>

                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-file -->

                                            </div>
                                        </div><!-- .nk-files -->
                                    </div><!-- .tab-pane -->
                                    <div class="tab-pane" id="file-group-view">
                                        <div class="nk-files nk-files-view-group">
                                            <div class="nk-files-head">
                                                <div class="nk-file-item">
                                                    <div class="nk-file-info">
                                                        <div class="dropdown">
                                                            <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Last Opened</div>
                                                            <div class="dropdown-menu dropdown-menu-xs">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                    <li><a href="#"><span>Name</span></a></li>
                                                                    <li><a href="#"><span>Size</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- .nk-files-head -->

                                            <div class="nk-files-group">

                                                <div class="nk-files-list">
                                                    <div class="nk-file-item nk-file">
                                                        <div class="nk-file-info">
                                                            <div class="nk-file-title">
                                                                <div class="nk-file-icon">
                                                                          <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc"></path>
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea"></path>
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2"></path>
                                                                                    <path d="M46,46.5v-13A3.5042,3.5042,0,0,0,42.5,30h-13A3.5042,3.5042,0,0,0,26,33.5v13A3.5042,3.5042,0,0,0,29.5,50h13A3.5042,3.5042,0,0,0,46,46.5ZM40,45v3H37V45Zm-3-2V37h7v6Zm0-8V32h3v3Zm-2-3v3H32V32Zm0,5v6H28V37Zm0,8v3H32V45Zm7.5,3H42V45h2v1.5A1.5016,1.5016,0,0,1,42.5,48ZM44,33.5V35H42V32h.5A1.5016,1.5016,0,0,1,44,33.5ZM29.5,32H30v3H28V33.5A1.5016,1.5016,0,0,1,29.5,32ZM28,46.5V45h2v3h-.5A1.5016,1.5016,0,0,1,28,46.5Z" style="fill:#f74141"></path>
                                                                                </svg>
                                                                            </span>
                                                                </div>
                                                                <div class="nk-file-name">
                                                                    <div class="nk-file-name-text">
                                                                        <a href="#" class="title">Database.xlsx</a>
                                                                        <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="nk-file-desc">
                                                                <li class="date">Today</li>
                                                                <li class="size">235 KB</li>
                                                                <li class="members">3 Members</li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-file-actions">
                                                            <div class="dropdown">
                                                                <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-plain no-bdr">
                                                                        <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>

                                                                        <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>

                                                                        <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-file -->


                                                </div>
                                            </div>
                                        </div><!-- .nk-files -->
                                    </div><!-- .tab-pane -->
                                    <div class="tab-pane" id="file-list-view">
                                        <div class="nk-files nk-files-view-list">
                                            <div class="nk-files-head">
                                                <div class="nk-file-item">
                                                    <div class="nk-file-info">
                                                        <div class="tb-head dropdown-toggle dropdown-indicator-caret" data-toggle="dropdown">Name</div>
                                                        <div class="dropdown-menu dropdown-menu-xs">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li class="opt-head"><span>ORDER BY</span></li>
                                                                <li><a href="#"><span>Descending</span></a></li>
                                                                <li><a href="#"><span>Ascending</span></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="tb-head"></div>
                                                    </div>
                                                    <div class="nk-file-meta">
                                                        <div class="dropdown">
                                                            <div class="tb-head dropdown-toggle dropdown-indicator-down" data-toggle="dropdown">Last Opened</div>
                                                            <div class="dropdown-menu dropdown-menu-xs">
                                                                <ul class="link-list-opt ui-colored no-bdr">
                                                                    <li class="opt-head"><span>ORDER BY</span></li>
                                                                    <li><a class="active" href="#"><span>Descending</span></a></li>
                                                                    <li><a href="#"><span>Ascending</span></a></li>
                                                                    <li class="divider"></li>
                                                                    <li class="opt-head"><span>SHOW</span></li>
                                                                    <li><a class="active" href="#"><span>Last Opened</span></a></li>
                                                                    <li><a href="#"><span>Name</span></a></li>
                                                                    <li><a href="#"><span>Size</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-members">
                                                        <div class="tb-head">Members</div>
                                                    </div>

                                                </div>
                                            </div><!-- .nk-files-head -->
                                            <div class="nk-files-list">

                                                <div class="nk-file-item nk-file">
                                                    <div class="nk-file-info">
                                                        <div class="nk-file-title">

                                                            <div class="nk-file-icon">
                                                                            <span class="nk-file-icon-type">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72">
                                                                                    <path d="M49,61H23a5.0147,5.0147,0,0,1-5-5V16a5.0147,5.0147,0,0,1,5-5H40.9091L54,22.1111V56A5.0147,5.0147,0,0,1,49,61Z" style="fill:#e3edfc" />
                                                                                    <path d="M54,22.1111H44.1818a3.3034,3.3034,0,0,1-3.2727-3.3333V11s1.8409.2083,6.9545,4.5833C52.8409,20.0972,54,22.1111,54,22.1111Z" style="fill:#b7d0ea" />
                                                                                    <path d="M19.03,59A4.9835,4.9835,0,0,0,23,61H49a4.9835,4.9835,0,0,0,3.97-2Z" style="fill:#c4dbf2" />
                                                                                    <path d="M44.1405,46H27.8595A1.86,1.86,0,0,1,26,44.1405V34.8595A1.86,1.86,0,0,1,27.8595,33H44.14A1.86,1.86,0,0,1,46,34.86v9.2808A1.86,1.86,0,0,1,44.1405,46ZM29.1454,44H42.8546A1.1454,1.1454,0,0,0,44,42.8546V36.1454A1.1454,1.1454,0,0,0,42.8546,35H29.1454A1.1454,1.1454,0,0,0,28,36.1454v6.7093A1.1454,1.1454,0,0,0,29.1454,44Z" style="fill:#f25168" />
                                                                                    <path d="M36.4218,34.268a.7112.7112,0,0,1-.5048-.2093l-2.1431-2.1428a.7143.7143,0,0,1,1.01-1.01l2.1428,2.1431a.7142.7142,0,0,1-.5051,1.2192Z" style="fill:#f25168" />
                                                                                    <path d="M36.4218,34.268a.7142.7142,0,0,1-.5048-1.2192L38.06,30.9057a.7141.7141,0,0,1,1.01,1.01l-2.1426,2.1428A.7113.7113,0,0,1,36.4218,34.268Z" style="fill:#f25168" />
                                                                                    <path d="M32.1356,49.268a.7054.7054,0,0,1-.3665-.102.7145.7145,0,0,1-.2451-.98l2.1431-3.5713a.7142.7142,0,0,1,1.2247.735l-2.1426,3.5711A.7144.7144,0,0,1,32.1356,49.268Z" style="fill:#f25168" />
                                                                                    <path d="M40.7083,49.268a.7138.7138,0,0,1-.6129-.3463L37.9526,45.35a.7143.7143,0,0,1,1.225-.735L41.32,48.1866a.7137.7137,0,0,1-.6121,1.0814Z" style="fill:#f25168" />
                                                                                    <path d="M35.12,37H30.9a.5007.5007,0,1,1,0-1h4.22a.5007.5007,0,1,1,0,1Z" style="fill:#f25168" />
                                                                                    <path d="M41.9758,43H37.5471a.5056.5056,0,1,1,0-1.0065h4.4286a.5056.5056,0,1,1,0,1.0065Z" style="fill:#f25168" />
                                                                                    <path d="M38.14,40H33.9775a.5.5,0,1,1,0-1H38.14a.5.5,0,1,1,0,1Z" style="fill:#f25168" />
                                                                                </svg>
                                                                            </span>
                                                            </div>
                                                            <div class="nk-file-name">
                                                                <div class="nk-file-name-text">
                                                                    <a href="#" class="title">2019 Presentation.ppt</a>
                                                                    <div class="nk-file-star asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-file-meta">
                                                        <div class="tb-lead">12 Jan, 04:47 PM</div>
                                                    </div>
                                                    <div class="nk-file-members">
                                                        <div class="tb-lead">Only Me</div>
                                                    </div>
                                                    <div class="nk-file-actions">
                                                        <div class="dropdown">
                                                            <a href="" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-plain no-bdr">
                                                                    <li><a href="#file-details" data-toggle="modal"><em class="icon ni ni-eye"></em><span>Details</span></a></li>

                                                                    <li><a href="#" class="file-dl-toast"><em class="icon ni ni-download"></em><span>Download</span></a></li>

                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-file -->
                                            </div>
                                        </div><!-- .nk-files -->
                                    </div><!-- .tab-pane -->
                                </div><!-- .tab-content -->
                            </div><!-- .nk-block -->
                        </div><!-- .nk-fmg-body-content -->
                    </div><!-- .nk-fmg-body -->
                </div><!-- .nk-fmg -->
            </div>
        </div>
    </div>
@endsection
