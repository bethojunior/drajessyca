{{--<link rel="manifest" href="{{ asset('manifest.json') }}">--}}


<meta name="mobile-web-app-capable" content="yes">
<meta name="application-name" content="PWA">
<link rel="icon" sizes="512x512" href="{{ asset('images/icons/icon-512x512.png') }}">

<!-- Add to homescreen for Safari on iOS -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="PWA">
<link rel="apple-touch-icon" href="{{ asset('512.png') }}">

<link href="{{ asset('512.png') }}" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<link href="{{ asset('512.png') }}" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />

<!-- Tile for Win8 -->
<meta name="msapplication-TileColor" content="#BA7C8E">
<meta name="msapplication-TileImage" content="{{ asset('512.png') }}">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('{{asset('serviceworker.js')}}', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>



<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|Raleway" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('config/main.css') }}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('materialize/css/materialize.css') }}">
<link rel="stylesheet" href="{{ asset('css/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/default/config.css') }}">


<meta charset="utf-8" />
<meta name="theme-color" content="#D3CBC8">
<link rel="icon" href="{{ asset('assets/images/logo/logo.png') }}">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />


<meta name="description" content="Dra Jessyca Martins" />
<meta property="og:title" content="Dra Jessyca Martins" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://drajessycamartins.madgic.com.br" />
<meta property="og:image" content="https://drajessycamartins.madgic.com.br/assets/images/logo/me.jpg" />
<meta property="og:description" content="Dra Jessyca Martins" />
<meta property="og:site_name" content="Dra Jessyca Martins" />




<script src="{{ asset('config/main.js') }}"></script>
<script src="{{ asset('js/libs/jquery.js') }}"></script>
<script src="{{ asset('js/utils/Mask.js') }}"></script>
<script src="{{ asset('materialize/js/materialize.js') }}"></script>
<script src="{{ asset('js/utils/ElementProperty.js') }}"></script>
<script src="{{ asset('js/service/Session.js') }}"></script>
<script src="{{ asset('js/libs/sweetalertmin.js') }}"></script>
<script src="{{ asset('js/utils/SwalCustom.js') }}"></script>
<script src="{{ asset('js/service/ConnectionServer.js') }}"></script>
<script src="{{ asset('js/service/Init.js') }}"></script>

<script src="{{ asset('js/service/MainServices.js') }}"></script>
<script src="{{ asset('js/utils/preloader.js') }}"></script>
