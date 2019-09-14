<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Meta Tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('metatags')
    <meta property="og:url" content="">
    <meta property="og:image" content="{{ asset('theme/images/favicon.ico') }}">
    <meta name="author" content="Like Publicidade">
    <link rel="shortcut icon" href="{{ asset('theme/images/favicon.ico') }}">

    <!-- Title Page-->
    <title>Recruta Like #2019</title>

    <!-- Fonts e Animations -->
    <link rel="stylesheet" href="{{ asset('theme/css/lib/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/animates.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/fonts/fonts.css') }}">

    <!-- Styles Sheets -->
    <link rel="stylesheet" href="{{ asset('theme/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/css/footer.css') }}">

    @yield('stylesheet')

    <!-- JS Library's -->
    <script src="{{ asset('theme/js/lib/jquery.min.js') }}" charset="utf-8"></script>
    @yield('jslibrary')
<head>
<body>

    @yield('body')

    @yield('script')

</body>
</html>
