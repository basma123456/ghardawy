<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('assets/css_front/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css_front/all.min.css')}}">
    @if (App::getLocale() == 'en' || App::getLocale() == 'ru')
    <link rel="stylesheet" href="{{asset('assets/css_front/main.css')}}">
    @else
    <link rel="stylesheet" href="{{asset('assets/css_front/main-rtl.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('assets/css_front/uikit.min.css')}}">
{{--    <link rel="stylesheet" href="{{asset('layouts/app')}}">--}}

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>Gharda2wy</title>
</head>



