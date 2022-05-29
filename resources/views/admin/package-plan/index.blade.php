@extends('layouts.admin_layout')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before">
            </div>
            <div class="content-header row">
            </div>

            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/admin/package') }}">Add Couple Tuple Plan</a></li>
                            </ol>
                        </nav>
                        <div class="card">
                            <div class="card-body">
                                <section id="compact-style">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <div class="d-flex justify-content-between">
                                                        <h4 class="card-title">Couple Tuple Packages List </h4>
                                                        <a href="{{ url('admin/package-add') }}" class="btn btn-primary">
                                                            <i class="fa fa-plus"></i> Add Package
                                                        </a>
                                                    </div>

                                                </div>
                                                @if ($message = Session::get('message'))
                                                    <div class="alert alert-success">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                @elseif($error = Session::get('error'))
                                                    <div class="alert alert-danger">
                                                        <p>{{ $error }}</p>
                                                    </div>
                                                @endif
                                                <div class="card-content collapse show">
                                                    <div class="card-body card-dashboard">
                                                        <div class="table-responsive">
                                                            <table class="table table-striped table-bordered compact">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Sale Leve</th>
                                                                    <th>Package Name</th>
                                                                    <th>Package Price</th>
                                                                    <th>Discount Percentage</th>
                                                                    <th>Discount Price</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($plans as $plan)
                                                                    <tr>
                                                                        <td>{{ $plan->id }}</td>
                                                                        <td>{{ $plan->sale_level }}</td>
                                                                        <td>{{ $plan->package_name }}</td>
                                                                        <td>{{ $plan->package_price }}</td>
                                                                        <td>{{ $plan->discount_percentage }}</td>
                                                                        <td>{{ $plan->discount_price }}</td>
                                                                        <td>
                                                                            <a href="{{ url('/admin/package-edit') }}/{{ $plan->id }}" class="btn btn-outline-info">Edit</a>
                                                                            <a href="{{ url('/admin/package-delete') }}/{{ $plan->id }}" class="btn btn-outline-danger">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- Base style - compact table -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



@endsection
