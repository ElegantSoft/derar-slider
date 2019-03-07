<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/Ionicons/css/ionicons.min.css">
  {{--<link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/dist/css/AdminLTE.min.css">--}}
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/AdminLTE.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/fonts-fa.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/bootstrap-rtl.min.css">

  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/rtl.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/profile.css">


  {{--<link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/rtl/profile.css">--}}


  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/adminlte/adminlte/style.css">

  {{--<link rel="stylesheet" href="{{ url('/css/app.css') }}">--}}
  <link href="https://fonts.googleapis.com/css?family=El+Messiri" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    body , div , span ,b,strong,p,h1,h2,h3,h4,h5,h6,a{
      font-family: 'El Messiri', sans-serif;

    }
  </style>
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>