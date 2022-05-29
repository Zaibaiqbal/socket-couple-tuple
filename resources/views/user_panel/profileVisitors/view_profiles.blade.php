@extends('layouts.userPanel_layout')

@section('style')

<style>
.row.heading h2 {
    color: #C292FE;
    font-size: 35.52px;
    line-height: 95px;
    font-weight: 400;
    text-align: center;

}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 60px;
	padding-bottom: 60px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
 .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}

 .cnt-block{ 
   float:left; 
   width:100%; 

   padding:10px 10px; 
   text-align:center; 
   margin: 0 0 28px;
}
 .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   border: 1px solid #fff;
   display:inline-block;
   margin-bottom: 15px;
}
 .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
 .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   text-transform:uppercase;
}
 .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
 .cnt-block h3 a:hover{
	color:#337ab7;
}
 .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
 .cnt-block .follow-us{
	margin:20px 0 0;
}
 .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
	margin:0 5px;
}
 .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color:#767676;
}
 .cnt-block .follow-us li .fa:hover{ 
   color:#025a8e;
}

</style>
@endsection
@section('content')

    <div class="container">
    <div class="row heading heading-icon">
      @if(isset($title))
        <h2>{{$title}}</h2>
      @else
      <h2>User Profiles</h2>
      @endif
    </div>
    <ul class="row"  style=" display:block;">
    @foreach($user_profile_list as $rows)

      <li class="col-sm-12 col-md-6 col-lg-3" style=" display:inline-block;">
      @php($image = $rows->getUserImages($rows->user_id))
          <div class="cnt-block equal-hight" style="height: 305px;background-image: linear-gradient(to right, #87C7FE , #ABA7F6);">
            <figure>
              @if(isset($image->id))
              <img src="{{asset($image->path)}}" class="img-responsive" alt="">
              @else
              <img src="" class="img-responsive" alt="">

            @endif
            </figure>
            <h3><a href="{{route('visitprofiles',['profile_id' => encrypt($rows->profile_id)])}}">{{$rows->first_name}}</a></h3>
            <p>{{$rows->city_live}}</p>
            <ul class="follow-us clearfix">
              <li class="float-left"> <small> <b>DOB:</b>  {{$rows->dob}}</small></li>
              <li class="float-right"> <small><b>Status:</b>  {{$rows->material_status}}</small></li>
       
            </ul>
          </div>

      </li>

    @endforeach

     
    </ul>
  </div>

@endsection
