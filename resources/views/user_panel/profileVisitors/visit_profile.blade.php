@extends('layouts.userPanel_layout')


@section('style')

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 8px 10px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 140px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 140px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 10px 14px;
  border: none;
  cursor: pointer;
  width: 40%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>

@endsection

@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="profile card p-2">
                    <div class="profile-header bg-grey p-2 ">
                        <h3  style="display: inline-flex;">
                            <strong>{{ $user->first_name }} {{ $user->last_name }}</strong>
                        </h3>
                        <a href="{{route('sendrequest',['user_id' => $user->user_id ,'visitor_id' => Auth::user()->id])}}" class="btn btn-primary" style="float:right;">Send Request</a>

                        <a class="btn btn-primary mx-2 open-button" onclick="openForm()" style="float:right;">Send Message</a>
                    </div>
                    <div class="profile-detail mt-2">
                        <div class="row">
                        @php($image = $user->getUserImages($user->user_id))
                            <div class="col-md-4">
                                @if(isset($image->id))
                            <img src="{{asset($image->path)}}" style="width:100%;height:90%;" alt="text">

                            @else
                            <img src="" alt="text">
                            
                            @endif

                            </div>
                            <div class="col-md-8 p-2">
                                <div class="border-bottom mb-3 pb-3">
                                    <div class="row">
                                        <div class="col-md-6 border-right">
                                            <div class="row">
                                              
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Marital Status</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{ $user->material_status }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Posted by</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{ $user->profile_for }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Religion</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->religion}}/{{$user->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Community</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->community}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Location</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->city_live}}</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="text-light mb-0">Mother Tongue</p>
                                                </div>
                                                <div class="col-6">
                                                    <p class="mb-0">:&nbsp;{{$user->community}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                        
                    </div>
                </div>
            

                    <div class="chat-popup" id="myForm">
                    <form action="/action_page.php" class="form-container">
                        <h1>Chat</h1>
                        <div id="messages"></div>
                        <label for="msg"><b>Message</b></label>
                        <textarea placeholder="Type message.." name="msg" id="chat" required></textarea>

                        <input type="hidden" name="user_id" value="{{$user->user_id}}">
            
                    </form>
                    </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
<script>

$(function() {

    let ip_address = '127.0.0.1';
    let socket_port = '3000';
    let socket = io(ip_address + ':' + socket_port);

    // socket.on('connection');

    var chat_input  = $('#chat');
    var user_id = $('input[name=user_id]').val();

    
    chat_input.keypress(function(e) {

     let message = $(this).html();

     if(e.which === 13 && !e.shiftKey) {
        
        socket.emit('sendChatToServer', message);

        chat_input.html('');
        
        return false;
    }

     var route = "{{'sendmessage'}}";

                  
    });

    socket.on('sendChatToClient', (message) => {
        $('#messages').append(message);
    });

});
</script>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


@endsection