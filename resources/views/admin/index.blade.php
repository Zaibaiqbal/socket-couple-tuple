@extends('layouts.admin_layout')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Revenue, Hit Rate & Deals -->
                        <div class="row">
                            <div class="col-4">
                                <div class="card pull-up bg-gradient-directional-danger">
                                    <div class="card-header bg-hexagons-danger">
                                        <h4 class="card-title white">Analytics</h4>
                                        <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li>
                                                    <a class="btn btn-sm btn-white danger box-shadow-1 round btn-min-width pull-right" href="#" target="_blank">Report <i class="ft-bar-chart pl-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-content collapse show bg-hexagons-danger">
                                        <div class="card-body">
                                            <div class="media d-flex">
                                                <div class="align-self-center width-100">
                                                    <div id="Analytics-donut-chart" class="height-100 donutShadow"></div>
                                                </div>
                                                <div class="media-body text-right mt-1">
                                                    <h3 class="font-large-2 white">12,515</h3>
                                                    <h6 class="mt-1"><span class="text-muted white">Analytics in the <a href="#" class="darken-2 white">last year.</a></span></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--/ Revenue, Hit Rate & Deals -->
                <!-- Emails Products & Avg Deals -->

            </div>
        </div>
    </div>


@endsection
