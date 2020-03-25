@extends('partials.layout')

@section('content')
    <div class="max-w-screen-sm mx-auto pb-10">
        <div class="block text-gray-700 text-center px-4 py-2">
            <p class="font-east-sea-dokdo text-4xl p-5"></p>
            <div style="position: relative; overflow:hidden; border-radius:50%;">
                <img class="w-full" src="{{ asset('images/photo1.jpg') }}" />
                <img src="{{ asset('images/bg_white_flower.png') }}"
                     style="position:absolute;left:4px;top:30px;right:0;bottom:0;" />
            </div>
        </div>
        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <div class="font-noti-serif-kr p-2">
                4월의 아름다운 날<br />
                저희 두 사람, 결혼합니다.
            </div>
            <div class="font-noti-serif-kr p-2 text-2xl"><b>김창섭 ♥ 정정은</b></div>
            <div class="font-noti-serif-kr p-2 text-sm">
                2020년 4월 25일 토요일 오후 5시<br />
                아벤티움
            </div>
        </div>
        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">사진</p>
            <div class="font-noti-serif-kr p-2 text-sm mb-4">부끄럽지만 이쁘게 봐주세요.</div>

            <div id="demo-test-gallery" class="demo-gallery grid max-w-4xl mx-auto">
                <a href="{{ asset('images/studio/1.jpg') }}" onclick="gtmClickWeddingImage('1')" data-size="1200x800" data-med="{{ asset('images/studio/1.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/1.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/2.jpg') }}" onclick="gtmClickWeddingImage('2')" data-size="1200x800" data-med="{{ asset('images/studio/2.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/2.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/3.jpg') }}" onclick="gtmClickWeddingImage('3')" data-size="800x1200" data-med="{{ asset('images/studio/3.jpg') }}" data-med-size="800x1200" >
                    <img src="{{ asset('images/studio/3.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/4.jpg') }}" onclick="gtmClickWeddingImage('4')" data-size="800x1200" data-med="{{ asset('images/studio/4.jpg') }}" data-med-size="800x1200" >
                    <img src="{{ asset('images/studio/4.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/5.jpg') }}" onclick="gtmClickWeddingImage('5')" data-size="1200x800" data-med="{{ asset('images/studio/5.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/5.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/6.jpg') }}" onclick="gtmClickWeddingImage('6')" data-size="1200x800" data-med="{{ asset('images/studio/6.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/6.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/7.jpg') }}" onclick="gtmClickWeddingImage('7')" data-size="800x1200" data-med="{{ asset('images/studio/7.jpg') }}" data-med-size="800x1200" >
                    <img src="{{ asset('images/studio/7.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/8.jpg') }}" onclick="gtmClickWeddingImage('8')" data-size="800x1200" data-med="{{ asset('images/studio/8.jpg') }}" data-med-size="800x1200" >
                    <img src="{{ asset('images/studio/8.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/9.jpg') }}" onclick="gtmClickWeddingImage('9')" data-size="1200x800" data-med="{{ asset('images/studio/9.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/9.jpg') }}" alt="image">
                </a>
                <a href="{{ asset('images/studio/10.jpg') }}" onclick="gtmClickWeddingImage('10')" data-size="1200x800" data-med="{{ asset('images/studio/10.jpg') }}" data-med-size="1200x800" >
                    <img src="{{ asset('images/studio/10.jpg') }}" alt="image">
                </a>
            </div>

        </div>
        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">오시는길</p>
            <div class="font-noti-serif-kr p-2 text-sm leading-loose mb-4">
{{--                <a href="https://map.kakao.com/link/map/8282484" target="_blank"></a>--}}
                아벤티움<br />
                서울 중구 청파로 464 브라운스톤서울 3층입니다.
            </div>
            <div id="map" class="h-64" style="width:100%;"></div>
        </div>
        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2"><u>차량</u>을 이용하시나요?</p>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                네비게이션에<br />
                <b><u>센트럴플레이스(서울 중구 중림동 419)</u></b>를 검색해서<br />
                찾아와주시면 감사하겠습니다.
            </div>
        </div>

        <wedding-board-component></wedding-board-component>

        <div class="block text-gray-700 text-center px-4 py-2 mt-4">
            <p class="font-east-sea-dokdo text-4xl tracking-wide p-2">이 모바일 청첩장은요?</p>
            <div class="font-noti-serif-kr text-sm leading-loose p-2 mb-4">
                정은이와 창섭이가 함께 만들었습니다 ♥
            </div>
        </div>
    </div>

    @include('partials.pswp')
@stop