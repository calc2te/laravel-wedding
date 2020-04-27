@extends('partials.layout')

@section('meta-title', '김창섭 ♥ 정정은의 청첩장, 그 후...')
@section('meta-description', '저희 두사람, 여러분 덕에 예쁘게 결혼했습니다.')
@section('meta-image', '/images/after/IMG_5884.JPG')
@section('meta-url', '/after')

@section('content')
    <!-- 상단 배너 -->
    <top-banner-component page="after_page"></top-banner-component>

    <div class="max-w-screen-sm mx-auto pb-10">
        <!-- 처음 사진 -->
        <div class="block text-gray-700 text-center px-4 py-2">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">끝난줄 알았쥬?</p>
            <p class="font-east-sea-dokdo text-4xl p-5"></p>
            <div style="position: relative; overflow:hidden; border-radius:50%;">
                <img class="w-full" src="{{ asset('images/after/IMG_5884.JPG') }}" />
                <img src="{{ asset('images/bg_white_flower.png') }}"
                     style="position:absolute;left:4px;top:30px;right:0;bottom:0;" />
            </div>
        </div>
        <!-- 처음 안내 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <div class="font-noti-serif-kr p-2 leading-loose">
                많은 사람들의 축복 속에서<br />
                저희 두 사람 아주 예쁘게 결혼 했습니다.<br />
                <strong>너무 감사합니다.</strong><br />
                모두의 바람대로 저희 두사람은 앞으로<br />
                예쁘게 사랑하며 살아가도록 하겠습니다.<br />
                <strong>다시 한 번 너무 감사합니다.</strong>
            </div>
            <div class="font-noti-serif-kr p-2 text-2xl"><b>김창섭, 정정은 올림</b></div>
        </div>
        <!-- 식전영상 소개 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4 mb-8">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">식전영상</p>
            <div class="font-noti-serif-kr p-2 text-sm mb-4">다시 한 번 보고싶진 않으셨나요?</div>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                <div id="player" class="w-full"></div>
            </div>
        </div>
        <!-- 본식사진 소개 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4 mb-8">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">본식사진</p>
            <div class="font-noti-serif-kr p-2 text-sm mb-4">이렇게 찍어 보내주셔서 감사합니다.</div>
            <div id="demo-test-gallery" class="grid-masonry max-w-4xl mx-auto">
                @foreach($photos_info as $photo_info)
                    <img class="masonry-item" src="{{ asset('images/after/photo/' . $photo_info['basename']) }}" alt="image">
                @endforeach
            </div>
        </div>
        <!-- 본식스냅 소개 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4 mb-8">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">본식스냅</p>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                Coming Soon
            </div>
        </div>
        <!-- 본식영상 소개 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4 mb-8">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">본식영상</p>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                Coming Soon
            </div>
        </div>
        <!-- Thanks to 소개 -->
        <div class="block text-gray-700 text-center px-4 py-2 mt-4 mb-8">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">Thanks to</p>
            <div class="font-noti-serif-kr p-2 text-sm mb-4 leading-loose">
                <strong>모든분께 감사합니다!!!</strong><br />
                이름은 방명록과 축의금 목록으로 정리했어요.<br />
                빠진 분이 있다면 너무 죄송합니다 ㅜㅜ<br />
                (따로 알려주시면 적을게요...)
            </div>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                @foreach($thanks as $thank)
                    {{ $thank }}
                @endforeach
            </div>
        </div>
    </div>

    <div id="map" style="display: none"></div>
@stop

@section('script')
    <script>
        // 2. This code loads the IFrame Player API code asynchronously.
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        // 3. This function creates an <iframe> (and YouTube player)
        //    after the API code downloads.
        var player;

        function onYouTubeIframeAPIReady() {
            player = new YT.Player('player', {
                videoId: 'u251M4kOZ7w'
            });
        }
    </script>
@stop