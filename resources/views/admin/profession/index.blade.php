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
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/admin/profession') }}">Profession</a></li>
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
                                                        <h4 class="card-title">Register Profession </h4>
                                                        <a href="{{ url('admin/profession-add') }}" class="btn btn-primary">
                                                            <i class="fa fa-plus"></i> Add Title
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
                                                                    <th>Title</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($living as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->profession }}</td>
                                                                        <td>
                                                                            <a href="{{ url('/admin/profession-edit') }}/{{ $item->id }}" class="btn btn-outline-info">Edit</a>
                                                                            <a href="{{ url('/admin/profession-delete') }}/{{ $item->id }}" class="btn btn-outline-danger">Delete</a>
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
