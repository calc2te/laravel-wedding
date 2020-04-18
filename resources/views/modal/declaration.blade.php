<!--Modal-->
<div class="modal declaration-modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

{{--        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">--}}
{{--            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">--}}
{{--                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>--}}
{{--            </svg>--}}
{{--            <span class="text-sm">(Esc)</span>--}}
{{--        </div>--}}

        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">성혼선언문</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                    </svg>
                </div>
            </div>

            <!--Body-->
            <div class="leading-loose">
                <p>신랑 김창섭 군과 신부 정정은 양은</p>
                <p>일가 친척과 소중한 지인들을 모신 자리에서</p>
                <p>평생을 함께 할 부부가 되기를</p>
                <p>굳게 맹세하였습니다.</p>
                <br />
                <p>두 사람의 아름다운 약속에</p>
                <p>오늘 참석한 모두가 증인이 되어</p>
                <p>이 결혼이 진실하게 이루어졌음을</p>
                <p>엄숙히 선언합니다.</p>
            </div>

            <!--Footer-->
{{--            <div class="flex justify-end pt-2">--}}
{{--                <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>--}}
{{--                <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>--}}
{{--            </div>--}}
        </div>
    </div>
</div>