<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Panel:Couple Tuple </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ url('css/userPanel_assets/css/ebazar.style.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
@yield('style')
<body>

<div id="ebazar-layout" class="theme-blue">


    <!-- main body area -->
    <div class="main">

        <!-- Body: Header -->
        @include('layouts.userPanel_include.header')

      @yield('content')



    </div>

</div>







<!-- Jquery Page Js -->
<script src="{{ url('css/userPanel_assets/js/template.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.socket.io/4.5.0/socket.io.min.js" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script>


<script>

function loadNotification()
 {
     var route = "{{url('loadnotification')}}";
    $.get(route,function(data){

    $('.notify_counts').hide();

        if(data.notify_counts > 0)
        {
            
        $('.notify_counts').show();
        $('.notify_counts').html(data.notify_counts);
        }

    $('#notify_body').html(data.notify_body);

    }).fail(function(data) {

    messageToaster('error','Try Again.','Failed');

    });
 }
 function appearNotification()
 {

 $.get("{{url('appearnotification')}}",function(data){

 }).fail(function(data) {

 });
 
 }

 function seenNotification(event,obj,id)
 {

 event.preventDefault();

 $.get("{{url('seennotification')}}",{id:id},function(data){

 $('.notify_counts').hide();
 
 if(data.notify_counts > 0)
 {
 $('.notify_counts').show();
 $('.notify_counts').html(data.notify_counts);
 }
 $('#notify_body').html(data.notify_body);
 window.location.href = $(obj).attr('href');
 }).fail(function(data) {
 messageToaster('error','Try Again.','Failed');
 });
 }
 $(document).ready(function(){
 

 loadNotification();
 // Enable pusher logging - don't include this in production
 Pusher.logToConsole = true;
 var user_id = parseInt("{{ Auth::id() }}");
 var pusher = new Pusher("{{config('broadcasting.connections.pusher.key')}}", 
{
 cluster: "{{config('broadcasting.connections.pusher.options.cluster')}}"
 });
 var channel = pusher.subscribe('my-channel');
 channel.bind('my-event', function(data) {
 if($.inArray(user_id, data) != -1)
 {
 loadNotification();
 $('#soundtrack').get(0).play();
 }
 });

 });


    $('#myDataTable')
        .addClass( 'nowrap')
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });


    $(document).ready(function (e) {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(function() {
            // Multiple images preview with JavaScript
            var multiImgPreview = function(input, imgPreviewPlaceholder) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };
            $('#images').on('change', function() {
                multiImgPreview(this, 'div.preview-image');
            });
        });

        $('#multiple-image-upload-preview-ajax').submit(function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            let TotalImages = $('#images')[0].files.length; //Total Images
            let images = $('#images')[0];
            for (let i = 0; i < TotalImages; i++) {
                formData.append('images' + i, images.files[i]);
            }
            formData.append('TotalImages', TotalImages);

            $.ajax({
                type:'POST',
                url: "{{ url('upload-images-ajax')}}",
                data: formData,
                cache:false,
                contentType: false,
                processData: false,
                success: (data) => {
                    this.reset();
                    alert('Multiple Images has been uploaded using jQuery ajax with preview');
                    $('.preview-image').html("")
                },
                error: function(data){
                    console.log(data);
                }
            });
        });
    });



</script>

@yield('script')
</body>
</html>
