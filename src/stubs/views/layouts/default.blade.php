<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @section('head')
        @section('head-meta')
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <meta name="csrf-token" content="{{ csrf_token() }}">
        @show

        @section('title')
            @render(\Agencms\Core\Components\Title::class)
        @show

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @show
</head>
<body class="font-sans font-normal text-lg">

    @section('body')

        @section('header')
        @show

        @section('content')
        @show

        @section('footer')
        @show

    @show

    @section('footer-scripts')

        @render(\Agencms\Core\Components\Analytics::class)

    @show

</body>
</html>
