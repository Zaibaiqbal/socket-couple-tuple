
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<!-- Mirrored from demos.themeselection.com/chameleon-admin-template/html/ltr/vertical-menu-template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 18:24:28 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin Panel Couple Tuple</title>
    <link rel="apple-touch-icon" href="{{ url('css/admin_assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="https://demos.themeselection.com/chameleon-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/plugins/forms/switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-switch.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/bootstrap-extended.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/colors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/components.min.css') }}">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/menu/menu-types/vertical-menu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/core/colors/palette-gradient.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/pages/chat-application.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/admin_assets/css/pages/dashboard-analytics.min.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

<!-- BEGIN: Header-->
@include('layouts.admin_include.header')


@include('layouts.admin_include.sidebar')
<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->



    @include('layouts.admin_include.footer')


<!-- BEGIN: Vendor JS-->
<script src="{{ url('css/admin_assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/js/scripts/forms/switch.min.js') }}" type="text/javascript"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ url('css/admin_assets/vendors/js/charts/chartist.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}" type="text/javascript"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ url('css/admin_assets/js/core/app-menu.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/js/core/app.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/js/scripts/customizer.min.js') }}" type="text/javascript"></script>
<script src="{{ url('css/admin_assets/vendors/js/jquery.sharrre.js') }}" type="text/javascript"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ url('css/admin_assets/js/scripts/pages/dashboard-analytics.min.js') }}" type="text/javascript"></script>
<!-- END: Page JS-->

<script src="{{ url('css/admin_assets/js/font-awesome.js') }}" type="text/javascript"></script>

</body>
<!-- END: Body-->

</html>
