var container = document.getElementById('map'); //지도를 담을 영역의 DOM 레퍼런스
// var modal_container = document.getElementById('map-modal');
var options = { //지도를 생성할 때 필요한 기본 옵션
    center: new kakao.maps.LatLng(37.5609518403502, 126.96813086761468), //지도의 중심좌표.
    level: 5 //지도의 레벨(확대, 축소 정도)
};

// 지도를 생성합니다
var map = new kakao.maps.Map(container, options); //지도 생성 및 객체 리턴
// var map_modal = new kakao.maps.Map(modal_container, options);

// 마우스 드래그와 모바일 터치를 이용한 지도 이동 가능 여부를 막는다
// map.setDraggable(false);

// 마우스 휠과 모바일 터치를 이용한 지도 확대, 축소를 막는다
// map.setZoomable(false);

// 마커가 표시될 위치입니다
var markerPosition = new kakao.maps.LatLng(37.5609518403502, 126.96813086761468);

var imageSrc = './images/heart_place_marker_location_love-512.png', // 마커이미지의 주소입니다
    imageSize = new kakao.maps.Size(60, 60), // 마커이미지의 크기입니다
    imageOption = {offset: new kakao.maps.Point(29, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.

var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption);

// 마커를 생성합니다
var marker = new kakao.maps.Marker({
    position: markerPosition,
    image: markerImage // 마커이미지 설정
});
// var marker_modal = new kakao.maps.Marker({
//     position: markerPosition,
//     image: markerImage // 마커이미지 설정
// });

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);
// marker_modal.setMap(map_modal);