@extends('layouts.admin_layout')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('/admin/package') }}">Package List</a></li>
                                <li class="breadcrumb-item"><a href="#">Add Your Couple Tuple Plan</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row justify-content-center">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Add Details
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('admin/package-add-process') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label for="">Sale Level</label>
                                        <input type="text" class="form-control" name="sale_level">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Package Name</label>
                                        <input type="text" class="form-control" name="package_name">
                                        @error('package_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Package Duation</label>
                                        <input type="text" class="form-control" name="duration">
                                        @error('duration')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Package Price</label>
                                        <input type="text" class="form-control" name="package_price">
                                        @error('package_price')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Discount Price</label>
                                        <input type="text" class="form-control" name="discount_percentage">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Discount Percentage</label>
                                        <input type="text" class="form-control" name="discount_price">
                                    </div>
                                    <div class="form-group">
                                        <label for="">How Many Persons can See Messages</label>
                                        <input type="text" class="form-control" name="messages">
                                        @error('messages')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">How Many Persons can View Your Contact Number</label>
                                        <input type="text" class="form-control" name="view_contact">
                                        @error('view_contact')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Standout from other Profiles Or Not</label>
                                        <input type="text" class="form-control" name="standout_profile">
                                        @error('standout_profile')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="">Let Matches contact you directly Or Not</label>
                                        <input type="text" class="form-control" name="directly_contact">
                                        @error('directly_contact')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-bg-gradient-x-blue-green">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
