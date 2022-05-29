@extends('layouts.userPanel_layout')

@section('content')

<div class="container mt-5">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
            <div class="card-header text-center font-weight-bold display-inline" style="background-color: #BD96FE;">
                <h2>Upload Images </h2>
            
            </div>
            <div class="card-body">
                <form name="upload-multiple-image" id="form_upload_images" method="POST"  action="{{ url('userPanel/store-images') }}" accept-charset="utf-8" enctype="multipart/form-data">
                    @csrf
                    <input type="text" hidden name="profile_id" value="{{ $profile->id }}">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="input-group">
                                <input type="file" onchange="displayImage(event)" name="images[]" id="image" class="form-control form-control-sm" multiple="multiple" >
                            
                                <div class="input-group-append">
                                    <span class="input-group-text" style="">JPG, JPEG, PNG</span>
                                </div>
                            </div>
                            @error('images')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-2">
                            <img src=""  alt="" id="display_image">
                        </div>
                        <div>
                        <a href="" style="font-size: 20px;" class="add_button float-right" title="Add Field" onclick="addField(event)">
                <i class="fa fa-plus "></i>
                </a>
                            <div class="field_wrapper">
                            </div>
                        </div>
                        

                        <div class="images-preview-div mb-3" style="width: 40% ;height:40%; margin-bottom:2%;"> </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary my-3" id="submit" content="add images" >Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
           
        </div>
    </div>    
    


</div>


    <script>


   function displayImage(event)
   {
        event.preventDefault();

        previewImages(event.target);

        // Multiple images preview with JavaScript

}
    var previewImages = function(input) {
    if (input.files) {
    var filesAmount = input.files.length;
    for (i = 0; i < filesAmount; i++) {
    var reader = new FileReader();
    reader.onload = function(event) {
        // $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
        $('#display_image').attr('src',event.target.result).css({ 'height': '100px', 'width': '100px' });
    }
    reader.readAsDataURL(input.files[i]);
    }
    }
    };
    </script>

<script>

function addField(event)
{
    event.preventDefault();
    
    var maxField = 4; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><i class="mdi mdi-minus-circle"></i></a></div>'; //New input field html 
    var x = 1;
    
    //Once add button is clicked
        //Check maximum number of input fields
        if(x < maxField){ 
            var ran_id = (Math.random() + 1).toString(20).substring(7);
    var input = '<div class="row">';
        input += '<div class="col-md-10">';
        input += '<div class="my-1">';
        input += '<label for=""><span id="divcount"></span> <i class="text-danger"></i></label>';
        input += '<a href="javascript:void(0);" class="remove_button ml-5"><i class="fa fa-minus"></i></a><small class="form-errors pull-right text-danger req" value="*">';
        input += '{{ $errors->first("images",":mdisplayImageessage") }}</small>';
        input += '<div class="input-group">';
        input += '<input placeholder="Images" name="images[]" onchange="displayMultipleImages(this)" class = "input-grourp form-control cls_required count_this" type="file" data-id="'+ran_id+'" >';
        input += '<div class="input-group-append">';
        input += '<span class="input-group-text" style="color: #666262;">jpg,jpeg,png</span>';
        input += '</div>';
        input += '</div>'; 
        input +='</div></div>';
        input += '<div class="col-md-2">';
        input += '<div class="my-1">';
        input += '<img id='+ran_id+' style="width:100px;height: 100px;"></div></div></div>';
        
        $(wrapper).append(input); //Add field html        
        x++; //Increment field counter

        }
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent().parent().parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
}

 function displayMultipleImages(obj) {
    var id = obj.getAttribute("data-id");
    readURL(obj,id);
};

function readURL(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#'+id).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

</script>
@endsection
