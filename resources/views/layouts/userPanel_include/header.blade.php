<!-- Body: Header -->
{{--<div class="header">--}}
{{--    <nav class="navbar py-4">--}}
{{--        <div class="container-xxl">--}}

{{--            <!-- header rightbar icon -->--}}
{{--            <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">--}}
{{--                <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">--}}
{{--                    <div class="u-info me-2">--}}
{{--                        <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></p>--}}
{{--                        <small>User Profile</small>--}}
{{--                    </div>--}}
{{--                    <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">--}}
{{--                        <img class="avatar lg rounded-circle img-thumbnail" src="{{ url('storage/profile')  }}/{{ $img->img }}" alt="profile">--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">--}}
{{--                        <div class="card border-0 w280">--}}
{{--                            <div class="card-body pb-0">--}}
{{--                                <div class="d-flex py-1">--}}
{{--                                    <img class="avatar rounded-circle" src="{{ url('storage/profile')  }}/{{ $img->img }}" alt="profile">--}}
{{--                                    <div class="flex-fill ms-3">--}}
{{--                                        <p class="mb-0"><span class="font-weight-bold">{{ Auth::user()->first_name }}</span></p>--}}
{{--                                        <small class="">{{ Auth::user()->email    }}</small>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div><hr class="dropdown-divider border-dark"></div>--}}
{{--                            </div>--}}
{{--                            <div class="list-group m-2 ">--}}
{{--                                <a href="#" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user fs-5 me-3"></i>Profile Page</a>--}}
{{--                                <a href="{{ url('logout') }}" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-5 me-3"></i>Signout</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--            <!-- menu toggler -->--}}
{{--            <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">--}}
{{--                <span class="fa fa-bars"></span>--}}
{{--            </button>--}}

{{--            <!-- main menu Search-->--}}
{{--            <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">--}}

{{--            </div>--}}

{{--        </div>--}}
{{--    </nav>--}}
{{--</div>--}}

<style>
    *, *:after, *:before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    :root{
        scrollbar-color: rgb(210,210,210) rgb(46,54,69) !important;
        scrollbar-width: thin !important;
    }
    ::-webkit-scrollbar {
        height: 12px;
        width: 8px;
        background: #000;
    }
    ::-webkit-scrollbar-thumb {
        background: gray;
        -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.75);
    }
    ::-webkit-scrollbar-corner {
        background: #000;
    }








    a{
        text-decoration:none;
        transition:0.5s;
    }








    /*ANIMATION*/
    @-webkit-keyframes slideIn {
        from {bottom: -300px; opacity: 0}
        to {bottom: -140px; opacity: 1}
    }

    @keyframes slideIn {
        from {bottom: -300px; opacity: 0}
        to {bottom: -140px; opacity: 1}
    }

    @-webkit-keyframes fadeIn {
        from {opacity: 0}
        to {opacity: 1}
    }

    @keyframes fadeIn {
        from {opacity: 0}
        to {opacity: 1}
    }



    .animate {
        -webkit-animation: animatezoom 0.6s;
        animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
        from {-webkit-transform: scale(0)}
        to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
        from {transform: scale(0)}
        to {transform: scale(1)}
    }





    header{
        width:100%;
        height:auto;
        position:relative;
        top:0;
    }

    .banner{
        background: -webkit-linear-gradient(left, rgba(0,168,255,0.5), rgba(185,0,255,0.5));
        width:100%;
        padding:10px 0;
    }

    .banner .section-right{
        float:right;
    }

    .banner a{
        margin:0 10px;
        color:white;
    }

    .banner a:hover{
        color: white;
    }

    .logo{
        background: -webkit-linear-gradient(left, rgb(0 168 255), rgb(185 0 255 / 94%));

        padding:25px;
        width:230px;
        position:absolute;
        left:-20px;
        top:30px;
    }

    .logo img{
        width:180px;
        height:25px;
    }

    .parallelogram{
        transform: skew(-20deg);
    }

    .skew-fix{
        width:60%;
        display:inline-block;
        transform: skew(20deg);
    }


    @media (max-width:820px){
        .banner .section-right{
            float:none;
            width:100%;
        }
        .banner .section-left{
            display:none;
        }
    }












    /*NAVIGATION*/
    .topnav {
        overflow: hidden;
        background:  rgba(93,84,240,0.5);
    }

    .topnav a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .view{
        font-family: 'Poppins', sans-serif;
        min-width: 120px;
        padding: 0.5rem;
        border: 1px solid rgb(0 168 255);
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
        transition: all .25s linear;
    }
    .active {
        color: rgba(185,0,255,0.5);
        margin-left:250px;
    }

    .topnav .icon {
        display: none;
        outline:none !important;
    }

    .dropdown {
        float: left;
        overflow: hidden;
    }

    .dropdown .dropbtn {
        font-size: 17px;
        border: none;
        outline: none;
        color: white;
        padding: 14px 16px;
        background-color: inherit;
        font-family: inherit;
        margin: 0;
    }

    .dropdown-content {
        overflow:hidden;
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        border-top:2px solid #f1c40f;
        z-index: 1;
        -webkit-animation-name: slideIn;
        -webkit-animation-duration: 1s;
        animation-name: slideIn;
        animation-duration: 1s;
    }

    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }

    .topnav a:hover, .dropdown:hover .dropbtn {
        background: rgba(185,0,255,0.5);
        color: white;
    }

    .dropdown-content a:hover {
        background-color: #ddd;
        color: black;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    @media screen and (max-width: 820px) {
        .dropdown-content {
            -webkit-animation-name: none;
            -webkit-animation-duration: 1s;
            animation-name: none;
            animation-duration: 1s;
        }

        .topnav a, .dropdown .dropbtn {
            display: none;
        }
        .topnav a.icon {
            float: right;
            display: block;
        }
    }

    @media screen and (max-width: 820px) {
        .active{
            margin-left:0;
        }
        .topnav{
            height:50px;
            width:100%;
            transition:0.5s;
        }
        .topnav.responsive {position: relative;height:70vh;overflow-y:auto;}
        .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
        }
        .topnav.responsive a {
            float: none;
            display: block;
            text-align: left;
        }
        .topnav.responsive .dropdown {float: none;}
        .topnav.responsive .dropdown-content {position: relative;}
        .topnav.responsive .dropdown .dropbtn {
            display: block;
            width: 100%;
            text-align: left;
        }

        .notification .dropdown-menu {
    position: absolute !important;
    /* z-index: 1000; */
    /* display: none; */
    /* min-width: 10rem; */
    padding: 0.5rem 0;
    margin: 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,0.15);
    border-radius: 0.25rem;
}
    }

    /*.header__search .search-icon {*/
    /*    position: absolute;*/
    /*    left: 10px;*/
    /*    top: 5px;*/
    /*    color: #9bb7c5;*/
    /*}*/
    /*.header__search .search-field {*/
    /*    background: #e2ecf0;*/
    /*    -webkit-border-radius: 20px;*/
    /*    -moz-border-radius: 20px;*/
    /*    border-radius: 20px;*/
    /*    height: 30px;*/
    /*    width: 100%;*/
    /*    padding-left: 30px;*/
    /*    padding-right: 5px;*/
    /*    font-size: 1.3em;*/
    }
    /*.header__notification {*/
    /*    width: 100px;*/
    /*    background: #fff;*/
    /*    height: 20px;*/
    /*    margin: 0 10px;*/
    /*    display: flex;*/
    /*    justify-content: space-around;*/
    /*}*/
    .header__notification .bell-icon {
        position: relative;
        cursor: pointer;
    }
     .bell-icon:hover {
        color: #eee;
    }
    .bell-icon .notification-number {
        font-size: 0.6em;
        border-radius: 50%;
        background-color: #00bfbe;
        border: 5px solid #00bfbe;
        color: #fff;
    }
     .bell-icon .bell-number {
        position: absolute;
        top: -50%;
        left: 50%;
    }
   .bell-icon .notification__list {
        position: absolute;
        background: #e2ecf0;
        width: 230px;
        list-style-type: none;
        text-align: center;
       left: 1024px;
       top: 81px;
        border-radius: 7px;
        -webkit-animation: fadeIn 1s;
        animation: fadeIn 1s;
       z-index: 1;
       padding-left: 0;
    }
     .bell-icon .notification__list:before {
        content: "";
        position: absolute;
        width: 0;
        height: 0;
        border: 10px solid transparent;
        border-bottom-color: #fff;
        left: 50%;
        top: -20px;
        transform: translate(-50%);
    }
    .bell-icon .notification__list__name {
        background: #fff;
        color: #9bb7c5;
        padding: 10px 0;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        border-bottom: 1px solid #9bb7c5;
        transition: all 1s ease-in-out;
        font-size: 20px;
    }
     .bell-icon .notification__list .large-number {
        font-size: 0.8em;
        border-width: 5px;
    }
    .header__notification .bell-icon .list__item {
        border-bottom: 1px solid #9bb7c5;
        transition: all 1s ease-in-out;
    }
    .header__notification .bell-icon .list__item .user-image {
        width: 40px;
        height: 40px;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        border-radius: 50px;
    }
    .bell-icon .list__item .messages {
        padding-left: 10px;
        color: #909da8;
    }
  .bell-icon .list__item .messages b {
        color: #727f8c;
    }
     .bell-icon .list__item--link {
        display: flex;
        padding: 10px;
        text-decoration: none;
        text-align: left;
        font-size: 0.7em;
        opacity: 0.8;
        align-items: center;
    }
     .bell-icon .list__item--link:hover {
        opacity: 1;
    }
    .header__profile {
        width: 120px;
        align-self: stretch;
        background: #9bb7c5;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }
    .header__profile .profile__photo {
        background: url(https://cdn.tutsplus.com/net/uploads/legacy/213_chris/ChrisThumbnail.jpg);
        width: 30px;
        height: 30px;
        -webkit-background-size: cover;
        background-size: cover;
        border-radius: 50%;
    }
    .header__profile .fa-arrow-circle-o-down {
        font-size: 1.6em;
        color: #fff;
    }
    .small-icon {
        font-size: 1.2em;
        color: #d0dadf;
    }
    section {
        max-width: 400px;
        margin: auto;
    }
    .hide {
        display: none;
    }
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    @keyframes fadeIn {
        from {
            opacity: 0;
        }
        to {
            opacity: 1;
        }
    }
    .checklist {
        max-width: 400px;
        margin: 10px auto;
    }
    .checklist li {
        padding: 5px 10px;
        list-style-type: disc;
    }

</style>

<!--HEADER-->
<header class="p-0">
    <div class="banner">
<span class="section-left text-white">
<a href="emailto:">Support@email.com</a>
<a href="tel:">+(xx)-xxxxx-xxxxx</a>
</span>
        <span class="section-right">
            <a href="{{ url('userPanel/pricing-plans') }}" class="btn btn-primary" style="margin-top: -7px">Upgrade To Pro</a>
<a href="#"title="Facebook"><i class="fa fa-facebook"></i></a>
<a href="#"title="Instagram"><i class="fa fa-instagram"></i></a>
<a href="#"title="Twitter"><i class="fa fa-twitter"></i></a>
</span>
    </div>

    <div class="logo parallelogram">
        <span class="skew-fix text-white">
{{--            <img src="#" alt="LEVIOOSA">--}}
            Couple Tuple</span>
    </div>

    <div class="topnav" id="myTopnav">
        <a href="{{ url('/userPanel') }}" class="active">Dashboard</a>
        <a href="{{ url('/userPanel/profile') }}">My Profile</a>
        <a href="{{ url('/userPanel/view-image') }}">My Images</a>
        <a href="{{ url('/userPanel/userprofiles') }}">View Profiles</a>
        <a href="{{  url('/userPanel/near-me')   }}">Near Me</a>
        <a href="#" title="SignIn" style="float:right;"><i class="fa fa-user"></i></a>
        <a href="{{ url('/logout') }}">Logout</a>

        <div class="fa fa-bell-o bell-icon small-icon btn btn-icon btn-hover-transparent-white
        btn-dropdown btn-lg text-dark" style="float: right !important;" onclick="appearNotification();">
        <span style="position: relative; top: -5px;" class="label label-sm label-rounded font-weight-bold label-danger notify_counts text-dark">1</span>
            <ul class="notification__list dropdown hide">
                <h3 class="notification__list__name">Notifications
                    <span class="notification-number large-number">3</span>
                </h3>
                <div id="notify_body" class="scroll pr-7 mr-n7"
            data-scroll="true" data-height="300" data-mobile-height="200">

            </div>
        </div> <!-- bell-icon-->



    </div>



</header>


<script>
    //NAVIGATION
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }

    var bellIcon = document.querySelector('.bell-icon');
    var dropdownMenu = document.querySelector('.dropdown');
    var notificationNumber = document.getElementsByClassName('notification-number');
    var timeDelay = [1000,2000,3000,4000,5000,6000];
    function randomNumber(){
        var random = Math.floor(Math.random() * 6);
        for(var i = 0; i < notificationNumber.length;i++){
            notificationNumber[i].textContent = random;
        }
    }
    function randomRange(data) {
        var newTime = data[Math.floor(data.length * Math.random())];
        return newTime;
    }
    function bellCheck(event){
        var isClickInside = bellIcon.contains(event.target);
        if (isClickInside) {
            dropdownMenu.classList.toggle('hide');
            if(dropdownMenu.classList.contains('hide')){
                clearInterval(notificationInterval);
                notificationInterval = setInterval(randomNumber, 2000);
            }
            else{
                for(var i = 0; i < notificationNumber.length;i++){
                    notificationNumber[i].textContent = 0;
                    clearInterval(notificationInterval);
                }
            }
        }
        else {
            dropdownMenu.classList.add('hide');
            clearInterval(notificationInterval);
            notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
        }
    }
    var notificationInterval = setInterval(randomNumber, randomRange(timeDelay));
    window.addEventListener('click', bellCheck);
</script>
