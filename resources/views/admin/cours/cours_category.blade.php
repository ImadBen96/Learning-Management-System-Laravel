@extends('admin.layouts.app')

@section('content')

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-md mx-auto">



                        <div class="nk-block nk-block-lg">
                            <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title">Courses</h3>
                                        <div class="nk-block-des text-soft">
                                            <p>You have total 20 Courses.</p>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                    <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">

                                                    <li class="nk-block-tools-opt" ><a href="{{ route('category.index') }}" class="btn btn-primary"><span>Categories</span></a>
                                                    </li>
                                                    <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalLarge"><em class="icon ni ni-plus"></em><span>Add Cours</span></a></li>

                                                </ul>
                                            </div>
                                        </div><!-- .toggle-wrap -->
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->
                            </div>
                            <div class="card card-preview">
                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Balance</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Verified</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Last Login</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
{{--                                        <tr class="nk-tb-item">--}}
{{--                                            <td class="nk-tb-col nk-tb-col-check">--}}
{{--                                                <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                                                    <input type="checkbox" class="custom-control-input" id="uid1">--}}
{{--                                                    <label class="custom-control-label" for="uid1"></label>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col">--}}
{{--                                                <div class="user-card">--}}
{{--                                                    <div class="user-avatar bg-dim-primary d-none d-sm-flex">--}}
{{--                                                        <span>AB</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="user-info">--}}
{{--                                                        <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ml-1"></span></span>--}}
{{--                                                        <span>info@softnio.com</span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">--}}
{{--                                                <span class="tb-amount">35040.34 <span class="currency">USD</span></span>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col tb-col-md">--}}
{{--                                                <span>+811 847-4958</span>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col tb-col-lg" data-order="Email Verified - Kyc Unverified">--}}
{{--                                                <ul class="list-status">--}}
{{--                                                    <li><em class="icon text-success ni ni-check-circle"></em> <span>Email</span></li>--}}
{{--                                                    <li><em class="icon ni ni-alert-circle"></em> <span>KYC</span></li>--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col tb-col-lg">--}}
{{--                                                <span>05 Oct 2019</span>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col tb-col-md">--}}
{{--                                                <span class="tb-status text-success">Active</span>--}}
{{--                                            </td>--}}
{{--                                            <td class="nk-tb-col nk-tb-col-tools">--}}
{{--                                                <ul class="nk-tb-actions gx-1">--}}
{{--                                                    <li class="nk-tb-action-hidden">--}}
{{--                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Wallet">--}}
{{--                                                            <em class="icon ni ni-wallet-fill"></em>--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nk-tb-action-hidden">--}}
{{--                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">--}}
{{--                                                            <em class="icon ni ni-mail-fill"></em>--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li class="nk-tb-action-hidden">--}}
{{--                                                        <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">--}}
{{--                                                            <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                                                        </a>--}}
{{--                                                    </li>--}}
{{--                                                    <li>--}}
{{--                                                        <div class="drodown">--}}
{{--                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                                            <div class="dropdown-menu dropdown-menu-right">--}}
{{--                                                                <ul class="link-list-opt no-bdr">--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                                                    <li class="divider"></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>--}}
{{--                                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>--}}
{{--                                                                </ul>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </td>--}}
{{--                                        </tr><!-- .nk-tb-item  -->--}}

                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->
                        </div> <!-- nk-block -->

                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalLarge" style="display: none; padding-right: 17px;" aria-modal="true" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"> <em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                        <h5 class="title">Ajouter Un Cours</h5>
                        <form action="#" class="pt-2">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">Nom de cours</label>
                                    <div class="form-control-wrap">
                                        <input type="text" class="form-control" id="full-name" placeholder="e.g. Web Development">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="full-name">catégorie de cours</label>
                                    <div class="form-control-wrap">
                                        <select name="" class="form-control">
                                            <option>Entrepreneuriat </option>
                                            <option>Employabilité </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-group">
                                    <label class="form-label" for="thumb">Vignette de la catégorie</label>
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" multiple="" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="thumb">Choisir le fichier</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label" for="thumb">Status</label><div class="form-control-wrap"><ul class="custom-control-group g-3 align-center flex-wrap"><li><div class="custom-control custom-radio"><input type="radio" class="custom-control-input" checked="" name="reg-public" id="reg-enable"><label class="custom-control-label" for="reg-enable">Active</label></div></li><li><div class="custom-control custom-radio checked"><input type="radio" class="custom-control-input" name="reg-public" id="reg-disable"><label class="custom-control-label" for="reg-disable">Pending</label></div></li><li><div class="custom-control custom-radio"><input type="radio" class="custom-control-input" name="reg-public" id="reg-request"><label class="custom-control-label" for="reg-request">Rejected</label></div></li></ul></div></div>
                                </div>
                                <div class="col-md-12 mb-4">
                                    <div class="form-group">
                                        <label class="form-label" for="thumb">Description de cours</label>
                                        <div class="form-control-wrap">

                                                    <!-- Create the editor container -->
                                                    <div class="quill-basic">

                                                    </div>

                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button data-dismiss="modal" type="button" class="btn btn-primary">Enregistrer les informations</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection

