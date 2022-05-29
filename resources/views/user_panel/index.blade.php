@extends('layouts.userPanel_layout')


@section('content')

    <div class="container mt-3">
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-4">
                    <div class="card shadow p-3">
                        <div class="img">
                        @if(isset($image->id))
                            <img src="{{ asset($image->path) }}" class="img-fluid" alt="">
                            @else
                            <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                            @endif
                        
                        </div>
                        <div class="mt-3">
                            <div class="form-group border-bottom mb-2 pb-3">
                                <div class="d-flex justify-content-between">
                                    <h4>
                                        {{ Auth::user()->first_name }}{{ Auth::user()->last_name }}
                                    </h4>
                                    <a href="{{ url('userPanel/profile') }}" class="text-primary">Edit</a>
                                </div>
                            </div>
                            <div class="form-group border-bottom mb-2 pb-3">
                                <span style="font-size: 12px">Account Type</span>
                                <div class="d-flex justify-content-between">
                                    <p>
                                        Free Member Ship
                                    </p>
                                    <a href="{{ url('userPanel/pricing-plans') }}" class="text-primary">Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 mt-2">
                    <h5>Your Activity Summary</h5>
                    <div class="row mt-3">
                        <div class="col-sm-6 mb-2">
                            <div class="alert-danger alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-danger text-white">10</div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">No Pending Invitations</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-2">
                            <div class="alert-success alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-success text-white">10</div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Accepted Invitations</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('viewrecentvisitors',['id' => encrypt(Auth::user()->id)])}}">
                        <div class="col-sm-6">
                            <div class="alert-info alert mb-0">
                                <div class="d-flex align-items-center">
                                    <div class="avatar rounded no-thumbnail bg-info text-white">{{$visitors_count}}</div>
                                    <div class="flex-fill ms-3 text-truncate">
                                        <div class="h6 mb-0">Recent Visitors</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="d-flex mb-2">
                        <span><h6 class="mb-0 w-100">New Matches for you</h6></span>
                        <span class="badge bg-primary">20</span>
                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card p-1">
                        <div class="row p-0">
                            <div class="col-3">
                                <div class="img">
                                    <img src="https://bit.ly/37IkTN1" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-7">
                                <p class="w-100 mb-0 font-14">Name</p>
                                <p class="w-100 mb-0 font-14">Age And Live In and Also height</p>
                                <p class="w-100 mb-0 font-14">Profession</p>
                            </div>
                            <div class="col-2">
                                <div class="circle py-4">
                                    <i class="fa fa-check"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
