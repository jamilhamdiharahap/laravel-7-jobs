@include('sweetalert::alert')
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jobs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- All Plugin Css -->
		<link rel="stylesheet" href="{{ asset('asset_user/css/plugins.css') }}">

		<!-- Style & Common Css -->
		<link rel="stylesheet" href="{{ asset('asset_user/css/common.css') }}">
        <link rel="stylesheet" href="{{ asset('asset_user/css/main.css') }}">

    </head>

    <body>
        @include('components.header_home')
        @yield('content')
        @include('components.footer_home')
