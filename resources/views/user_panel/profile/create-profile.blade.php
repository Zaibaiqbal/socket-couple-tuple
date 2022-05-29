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
<style>
    body:before{
        height: 1010px;
    }
</style>
<body>
<div class="main mt-4 pt-5">
    <form id="multistep_form" action="{{ url('userPanel/create-profile-process') }}" method="POST">
        @csrf
        <!-- progressbar -->
        <ul id="progress_header">
            <li class="active"></li>
            <li></li>
            <li></li>
        </ul>

                <!-- Step 01 -->
                <div class="multistep-box1">
                    <div class="title-box text-center">
                        <h2>Let’s create your Profile now</h2>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">City You lives in?*</label>
                                <input type="text" class="form-control1" name="city_live" id="city_live">
                            </div>
                            <span id="error-city_live"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Lives with Your family?*</label>
                                <input type="text" class="form-control1" name="live_family" id="live_family">
                            </div>
                            <span id="error-live_family"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Marital status*</label>
                                <select class="form-control1" name="material_status" id="material_status" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($materialStatus as $material)
                                        <option value="{{ $material->material_status }}">{{ $material->material_status }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-material_status"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Diet*</label>
                                <select class="form-control1" name="diet" id="diet" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($diet as $data)
                                        <option value="{{ $data->diet }}">{{ $data->diet }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-diet"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Height*</label>
                                <select class="form-control1" name="height" id="height" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($heights as $height)
                                        <option value="{{ $height->height }}">{{ $height->height }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span id="error-height"></span>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Sub-community*</label>
                                <select class="form-control1" name="sub_community" id="sub_community" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($subCommunities as $sub_community)
                                        <option value="{{ $sub_community->sub_community }}">{{ $sub_community->sub_community }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <span id="error-sub_community"></span>
                    </div>
                    <p class="nxt-prev-button">
                        <input type="button" name="next" class="fs_next_btn action-button" value="Next" />
                    </p>
                </div>
                <!-- Step 02 -->
                <div class="multistep-box1">
                    <div class="title-box text-center">
                        <h2>Just a few questions about your education & career</h2>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Highest Education*</label>
                                <select class="form-control1" name="high_education" id="high_education" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($educations as $data)
                                        <option value="{{ $data->education }}">{{ $data->education }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-high_education"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Your college name (The Highest degree)</label>
                                <input type="text" id="college_name" class="form-control1" name="college_name">
                            </div>
                            <span id="error-college_name"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">You Works With*</label>
                                <select class="form-control1" name="work_with" id="work_with" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($works as $data)
                                        <option value="{{ $data->work }}">{{ $data->work }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-work_with"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Designation*</label>
                                <select class="form-control1" name="designation" id="designation" aria-label="Default select example">
                                    <option selected>Select Option</option>
                                    @foreach($profession as $data)
                                        <option value="{{ $data->profession }}">{{ $data->profession }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-designation"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Current Company Name*</label>
                                <input type="text" class="form-control1" name="current_company" id="current_company">
                            </div>
                            <span id="error-current_company"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Salary*</label>
                                <select class="form-control1" name="salary" id="salary" aria-label="Default select example">
                                    <option value="" selected>Select Option</option>
                                    @foreach($salary as $data)
                                        <option value="{{ $data->salary }}">{{ $data->salary }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="error-salary"></span>
                        </div>
                    </div>

                    <p class="nxt-prev-button">
                        <input type="button" name="next" class="ss_next_btn action-button mb-2" value="Next" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />

                    </p>
                </div>
                <!-- Step 03 -->
                <div class="multistep-box1">
                    <div class="title-box text-center">
                        <h2>One last thing! Describe Yourself in a Few Words</h2>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">About yourself *</label>
                                <textarea name="bio" id="bio" class="form-control1" cols="30" rows="5"></textarea>
                            </div>
                            <span id="error-bio"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Your mobile no. *</label>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <select class="form-control1" name="country_code" id="county_code" aria-label="Default select example">
                                                <option value="" selected>Select Option</option>
                                                @foreach($country as $data)
                                                    <option value="{{ $data->phonecode }}">{{ $data->name }} (+{{ $data->phonecode }})</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="number" class="form-control1" id="phone" name="mobile_number">
                                        </div>
                                    </div>
                                </div>
                                <span id="error-phone"></span>
                            </div>
                        </div>
                    </div>
                    <p class="nxt-prev-button">
                        <input type="submit" name="submit" class="submit_btn ts_next_btn action-button mb-2" value="Submit" />
                        <input type="button" name="previous" class="previous action-button" value="Previous" />
                    </p>
                </div>
    </form>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.0/jquery.easing.js" type="text/javascript"></script>
<script src="{{ url('js/form2.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
