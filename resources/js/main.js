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

Kakao.init('e82a05c0892020e957cbe79bc5d0f817');
Kakao.isInitialized();

function sendKakaoLink() {
    // gtm

    // kakaolink
    Kakao.Link.sendCustom({
        templateId: 23275,
    });
}

// modal
var road_modal = document.getElementById('road-modal')
var declaration_modal = document.getElementById('declaration-modal')
var modal_type = 'road'

road_modal.addEventListener('click', function (event) {
    event.preventDefault()
    modal_type = 'road'
    toggleModal()
})
declaration_modal.addEventListener('click', function (event) {
    event.preventDefault()
    modal_type = 'declaration'
    toggleModal()
})

const overlay = document.querySelectorAll('.modal-overlay')
for (var i = 0; i < overlay.length; i++) {
    overlay[i].addEventListener('click', toggleModal)
}

var closemodal = document.querySelectorAll('.modal-close')
for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
}

document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
        isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
        toggleModal()
    }
};

function toggleModal () {
    const body = document.querySelector('body')
    const modal = document.querySelector('.' + modal_type + '-modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
}