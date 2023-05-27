<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="icon" type="image/png" href="uploads/favicon.png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css" integrity="sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('backend/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{ asset('backend/css/font_awesome_5_free.min.css')}}>
    <link rel="stylesheet" href={{ asset('backend/css/select2.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/bootstrap-datepicker.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/bootstrap-timepicker.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/bootstrap-tagsinput.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/duotone-dark.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/dataTables.bootstrap4.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/iziToast.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/fontawesome-iconpicker.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/bootstrap4-toggle.min.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/summernote-bs4.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/style.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/components.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/spacing.css') }}>
    <link rel="stylesheet" href={{ asset('backend/css/custom.css') }}>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.js" integrity="sha512-6V5JccoHkiddv+vVubCp2TFQsx9UC/VIa5+l+zSObWn1Ns5nYQOkdCgRah1Fb0NOeYPAD6b+d7Ui9ImHTIwsJw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('/')}}backend/js/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}backend/js/popper.min.js"></script>
    <script src="{{asset('/')}}backend/js/tooltip.js"></script>
    <script src="{{asset('/')}}backend/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}backend/js/jquery.nicescroll.min.js"></script>
    <script src="{{asset('/')}}backend/js/moment.min.js"></script>
    <script src="{{asset('/')}}backend/js/stisla.js"></script>
    <script src="{{asset('/')}}backend/js/jscolor.js"></script>
    <script src="{{asset('/')}}backend/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('/')}}backend/js/bootstrap-timepicker.min.js"></script>
    <script src="{{asset('/')}}backend/js/bootstrap-tagsinput.min.js"></script>
    <script src="{{asset('/')}}backend/js/select2.full.min.js"></script>
    <script src="{{asset('/')}}backend/js/summernote-bs4.js"></script>
    <script src="{{asset('/')}}backend/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('/')}}backend/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('/')}}backend/js/iziToast.min.js"></script>
    <script src="{{asset('/')}}backend/js/fontawesome-iconpicker.js"></script>
    <script src="{{asset('/')}}backend/js/bootstrap4-toggle.min.js"></script>
</head>
<body>
    