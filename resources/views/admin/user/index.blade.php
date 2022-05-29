
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
                                <li class="breadcrumb-item"><a href="{{ url('/admin/sub-community') }}">Sub Community</a></li>
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
                                                        <h4 class="card-title">Users List </h4>
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
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Living In</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($users as $item)
                                                                    <tr>
                                                                        <td>{{ $item->id }}</td>
                                                                        <td>{{ $item->first_name }}</td>
                                                                        <td>{{ $item->email }}</td>
                                                                        <td>{{ $item->living_in }}</td>
                                                                        <td>
                                                                            <a href="{{ url('/admin/sub-community-edit') }}/{{ $item->id }}" class="btn btn-outline-info">View</a>
                                                                            <a href="{{ url('/admin/sub-community-delete') }}/{{ $item->id }}" class="btn btn-outline-danger">Delete</a>
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
