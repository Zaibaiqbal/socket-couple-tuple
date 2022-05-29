<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complete Your Profile</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ url('css/form.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="main pt-3" style="background-image: url({{ url('/img/bg-01.jpg') }}); width: 100%; height:750px; background-repeat: no-repeat;
    background-size: contain; z-index: -1;
    ">
    <form id="multistep_form" action="{{ url('/register') }}" method="post">
        @csrf
        <!-- Step 01 -->
        <div class="multistep-box">
            <div class="title-box text-center">
                <h2 class="">Let's set up your account, while
                    we find Matches for you!</h2>
            </div>


            @if ($errors->any())

                    <div class="font-medium text-red-600">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Profile For</label>
                            <select class="form-select form-control" required id="profile_for" name="profile_for" aria-label="Default select example">
                                <option  value="" selected>Select Value</option>
                                @foreach($profileFor as $item)
                                    <option value="{{ $item->profile_for }}">{{ $item->profile_for }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span id="error-profile_for"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label for="">Name</label>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" name="first_name" class="form-control" placeholder="First Name" id="first_name">
                                <span id="error-fname"></span>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last Name" id="last_name">
                                <span id="error-lname"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select name="gender"  class="form-select form-control form-control-lg" id="gender">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <span id="error-gender"></span>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="" class="form-label">Religion</label>
                            <select class="form-select form-control form-control-lg" id="religion" name="religion" aria-label="Default select example">
                                <option value="" selected>Select Value</option>
                                @foreach($religion as $item)
                                    <option value="{{ $item->religion }}">{{ $item->religion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <span id="error-religion"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="" class="form-label">Community</label>
                        <select class="form-select form-control form-control-lg" id="community" name="community" aria-label="Default select example">
                            <option value="" selected>Select Value</option>
                            @foreach($community as $item)
                                <option value="{{ $item->community }}">{{ $item->community }}</option>
                            @endforeach
                        </select>
                        <span id="error-community"></span>
                    </div>
                </div>

            <p class="nxt-prev-button"><input type="button" name="next" class="fs_next_btn action-button" value="Next" /></p>
        </div>

        <!-- Step 02 -->
        <div class="multistep-box">
            <div class="title-box text-center">
                <h2>Great! Now some basic
                    details about you</h2>
            </div>
            <div class="row mb-3">
                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value=""  placeholder="name@example.com">
                    <span id="error-email"></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Select Date Of Birth</label>
                        <input type="date" class="form-control" name="dob" id="dob">
                    </div>
                    <span id="error-dob"></span>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Where do you live?</label>
                        <select class="form-select form-control form-control-lg" id="living_in" name="living_in" aria-label="Default select example">
                            <option value="" selected>Select Value</option>
                            @foreach($countries as $item)
                                <option value="{{ $item->name}}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <span id="error-living_in"></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="pass">
                    </div>
                    <span id="error-pass"></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class="form-control" name="password" id="cpass">
                    </div>
                    <span id="error-cpass"></span>
                </div>
            </div>

            <p class="nxt-prev-button">
                <input type="submit" name="submit" class="submit_btn ts_next_btn action-button text-center mb-3" value="SignUp" />
                <input type="button" name="previous" class="previous action-button" value="Previous" />

            </p>
        </div>
    </form>
    <h1>You are successfully logged in</h1>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.0/jquery.easing.js" type="text/javascript"></script>
<script src="{{ url('js/form.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
