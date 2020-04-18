<!--Modal-->
<div class="modal road-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

    <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-3">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">오시는길</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="leading">
{{--                <div id="map-modal" class="h-40 mb-4 z-0" style="width:100%;"></div>--}}
                <div class="font-noti-serif-kr p-2 text-sm leading-loose">
                    <span class="text-base font-bold">🚃 지하철을 이용하실건가요?</span><br />
                    <span class="bg-green-200 px-1">2호선</span>, <span class="bg-purple-200 px-1">5호선</span> 충정로역 4번출구로 나오세요.<br />
                    출구 방향으로 70M 직진 하신 후, 횡단보도를 건너면 브라운스톤 3층에 있어요.<br />
                    <br />
                    <span class="text-base font-bold">🚌 버스를 이용하실건가요?</span><br />
                    '한국경제신문사.서소문역사공원' 정류장에 아래 버스가 지나가요.<br />
                    <span class="bg-blue-200 px-2">파란버스</span> 370, 603번<br />
                    <span class="bg-green-200 px-2">녹색버스</span> 7011, 7013A, 7013B, 7017번<br />
                    <br />
                    <span class="text-base font-bold">🚗 차량를 이용하실건가요?</span><br />
                    아래 주소를 네비로 찍어서 와주세요.<br />
                    <strong>센트럴플레이스(서울 중구 중림동 419)</strong><br />
                    <br />
                </div>
            </div>
        </div>
    </div>
</div>