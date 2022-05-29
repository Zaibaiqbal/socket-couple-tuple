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
    padding-top: 130px!important;
    background-size: contain; z-index: -1;
    ">
    <form id="multistep_form" action="{{ url('/login') }}" method="post">
    @csrf
        <div class="multistep-box">
            <div class="title-box text-center">
                <h2 class="">WellCome Back!</h2>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="" class="form-label">Enter Your Mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <span id="error-profile_for"></span>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <label for="">Password</label>
                    <input type="Password" class="form-control" name="password">

                </div>
            </div>



            <p class="nxt-prev-button"><input type="submit" name="next" class="fs_next_btn action-button" value="Login" /></p>
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
