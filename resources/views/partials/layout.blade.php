<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="김창섭 ♥ 정정은의 청첩장">
    <meta name="theme-color" content="#ededed" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>김창섭 ♥ 정정은의 청첩장</title>

    <meta property="og:title" content="김창섭 ♥ 정정은의 청첩장" />
    <meta property="og:description" content="4월의 아름다운 날 저희 두사람, 결혼합니다." />
    <meta property="og:image" content="/images/photo1.jpg" />
    <meta property="og:url" content="/wedding" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+KR&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=East+Sea+Dokdo&display=swap" rel="stylesheet">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="{{ url('/manifest.json') }}">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="김창섭 ♥ 정정은의 청첩장">
    <link rel="apple-touch-icon" href="/images/icons/icon152.png">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="김창섭 ♥ 정정은의 청첩장">
    <link rel="icon" sizes="152x152" href="/images/icons/icon152.png">

    <script>
        // Register service worker.
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', () => {
                navigator.serviceWorker.register('/service-worker.js')
                    .then((reg) => {
                        console.log('Service worker registered.', reg);
                    });
            });
        }
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KB7L7HP');</script>
    <!-- End Google Tag Manager -->

    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <!-- PhotoSwipe -->
    <link rel="stylesheet" href="{{ mix('css/photoswipe/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ mix('css/photoswipe/default-skin.css') }}">
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KB7L7HP"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="app">
    @yield('content')
</div>

<script src="{{ mix('js/app.js') }}"></script>
<!-- PhotoSwipe -->
<script src="{{ mix('js/photoswipe/photoswipe.min.js') }}"></script>
<script src="{{ mix('js/photoswipe/photoswipe-ui-default.min.js') }}"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=e82a05c0892020e957cbe79bc5d0f817&libraries=services"></script>
<script src="{{ mix('js/all.js') }}"></script>
</body>
</html>
