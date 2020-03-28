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

    <style>
        body {
            position:relative;
        }
        body::after {
            content: "";
            background: url('/images/bg_yellow_01.jpeg');
            opacity: 0.5;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1;
        }
        .font-noti-serif-kr
        {
            font-family: 'Noto Serif KR', serif;
        }
        .font-east-sea-dokdo
        {
            font-family: 'East Sea Dokdo', cursive;
        }
        .grid {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 0.5rem;
            grid-template-columns: repeat(2, 1fr);
        }
        .grid .image {
            border-radius: 10px;
        }
        .pswp--animate_opacity,
        .pswp__bg,
        .pswp__caption,
        .pswp__top-bar,
        .pswp--has_mouse .pswp__button--arrow--left,
        .pswp--has_mouse .pswp__button--arrow--right{
            -webkit-transition: opacity 333ms cubic-bezier(.4,0,.22,1);
            transition: opacity 333ms cubic-bezier(.4,0,.22,1);
        }
    </style>

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
<script src="/js/photoswipe/initialize.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=e82a05c0892020e957cbe79bc5d0f817&libraries=services"></script>
<script>
    var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
    var options = { //지도를 생성할 때 필요한 기본 옵션
        center: new kakao.maps.LatLng(37.5609518403502, 126.96813086761468), //지도의 중심좌표.
        level: 5 //지도의 레벨(확대, 축소 정도)
    };

    // 지도를 생성합니다
    var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴

    // 마우스 드래그와 모바일 터치를 이용한 지도 이동 가능 여부를 막는다
    // map.setDraggable(false);

    // 마우스 휠과 모바일 터치를 이용한 지도 확대, 축소를 막는다
    // map.setZoomable(false);

    // 마커가 표시될 위치입니다
    var markerPosition  = new kakao.maps.LatLng(37.5609518403502, 126.96813086761468);

    var imageSrc = './images/heart_place_marker_location_love-512.png', // 마커이미지의 주소입니다
        imageSize = new kakao.maps.Size(60, 60), // 마커이미지의 크기입니다
        imageOption = {offset: new kakao.maps.Point(29, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption);

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition,
        image: markerImage // 마커이미지 설정
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);

    // confetti
    function callConfetti() {
        confetti({
            particleCount: 100,
            spread: 70,
            origin: { y: 0.6 }
        });
    }

    callConfetti();

    function gtmClickWeddingImage(order) {
        dataLayer.push({
            'order': order,
            'event': 'clickWeddingImage'
        });
    }

    function driving_animation(emoji) {
        dataLayer.push({
            'item': emoji,
            'event': 'clickEasterEgg'
        });

        document.getElementById(emoji).className ='driving';
        setTimeout(function() {
            document.getElementById(emoji).className ='';
        }, 5000);
    }

    // 안녕하십니까 제제입니다 만나서 방가워요 저는 제제입니다 호호하하 어색해요 사진 그만 찌거요 제제는 엄청 어색해유 그만 어여 찍으란말야
    // 하이하이호럽하이하이호럽 섭섭섭섭 비엔나커피를 마시며 사진을 찍는거는 참 어렵네요
</script>
</body>
</html>
