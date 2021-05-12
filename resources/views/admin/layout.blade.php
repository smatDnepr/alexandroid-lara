<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin panel</title>
	@livewireStyles
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="admin-assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="admin-assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="admin-assets/dist/css/adminlte.min.css">
	<link rel="stylesheet" href="admin-assets/style.css">
</head>
<body class="sidebar-mini layout-navbar-fixed">

	<div class="overlay"><i class="fas fa-2x fa-sync-alt fa-spin"></i></div>

    <div class="wrapper">

		@include('admin._template-parts.main-header')

        @include('admin._template-parts.sidebar')

        <div class="content-wrapper">
			@include('admin._template-parts.content-header')

			@include('admin._template-parts.content-alerts')

            @yield('content')
        </div>

    </div>

	@livewireScripts
    <script src="admin-assets/plugins/jquery/jquery.min.js"></script>
	<script src="admin-assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin-assets/dist/js/adminlte.min.js"></script>
	<script src="vendor/tinymce/tinymce.min.js"></script>
    <script src="admin-assets/script.js"></script>
</body>
</html>
