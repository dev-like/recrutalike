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

    <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1683484715099768');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1683484715099768&ev=PageView&noscript=1"/>
    </noscript>
</head>
<body>

    @yield('body')

    @yield('script')

</body>
</html>
