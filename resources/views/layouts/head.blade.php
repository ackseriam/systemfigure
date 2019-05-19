<!DOCTYPE html>
<html lang="">

    <head>
        <meta charset="utf-8" />
        <title>Figure Eight Task</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('images/faviicon.ico') }}">

        <!-- third party css -->
        <link href="{{ asset('css/vendor/jquery-jvectormap-1.2.2.css') }} " rel="stylesheet" type="text/css" />
      <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- third party css end -->
    <!-- Scripts -->
  <!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<script src="{{asset('js/app.js')}}"></script>
        <!-- App css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/app.min.css') }}" rel="stylesheet" type="text/css" />

           <!-- Plugins css-->
        <link href="{{ asset('css/vendor/bootstrap-tagsinput.css') }}" rel="stylesheet" />
     <link href="{{ asset('css/vendor/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" />

     @if(!empty($exito) || !empty($exito_register))
       <link href="{{ asset('js/sweetalert/sweetalert2.css') }}" rel="stylesheet" />
     @endif

    </head>
    <style type="text/css">
        /* Bootstrap tagsinput */
.bootstrap-tagsinput {
  box-shadow: none;
  padding: 10px 16px 8px;
  width: 100%;
  line-height: 1;
  border: 1px solid  #464f5b;
  background-color: #464f5b;
   color: #e3eaef;
}

.bootstrap-tagsinput .label-info {
  background-color: #5d6dc3;
  color: #e3eaef;
  background: linear-gradient(to top, #5d6dc3, #3c86d8);
  display: inline-block;
  padding: 8px 16px;
  font-size: 16px;
  margin: 3px 1px;
  border-radius: 3px;
}   </style>