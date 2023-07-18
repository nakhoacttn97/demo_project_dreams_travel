// Xử lý datetime
//Start date picker
jQuery(function () {
    jQuery('#date_timepicker_start').datetimepicker({
        format: 'd/m/Y',
        onShow: function (ct) {
            this.setOptions({
                maxDate: jQuery('#date_timepicker_end').val() ? jQuery('#date_timepicker_end').val() : false
            })
        },
        timepicker: false
    });
    jQuery('#date_timepicker_end').datetimepicker({
        format: 'd/m/Y',
        onShow: function (ct) {
            this.setOptions({
                minDate: jQuery('#date_timepicker_start').val() ? jQuery('#date_timepicker_start').val() : false
            })
        },
        timepicker: false
    });
});

// Xử lý libs slideshow của index.html
var arrHinh = [
    "../img/slider-01.jpg",
    "../img/slider-05.jpg",
    "../img/slider-06.jpg",
    "../img/slider-07.jpg"
]
var index = 1;
var show = document.getElementById("show");

function next() {
    index++;
    if (index >= arrHinh.length) index = 1;
    show.src = arrHinh[index];
}

function prev() {
    index--;
    if (index < 1) index = arrHinh.length - 1;
    show.src = arrHinh[index];
}
// Thêm hàm để tự động chuyển đổi hình ảnh
function autoChange() {
    setInterval(next, 3000); // thay đổi ảnh sau mỗi 3 giây
}

autoChange(); // Bắt đầu chuyển đổi tự động ngay khi trang được tải


// xử lý slider của discount
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

// xử lý hiện - ẩn cho thanh điều hướng navigation
var openNav = document.querySelector(".open-nav");
var closeNav = document.querySelector(".close-nav");
var navBar = document.querySelector("#navBar");

openNav.addEventListener("click", function () {
    navBar.style.opacity = "1";
    navBar.style.visibility = "visible";
    openNav.style.display = "none";
    closeNav.style.display = "block";
});
closeNav.addEventListener("click", function () {
    navBar.style.opacity = "0";
    navBar.style.visibility = "hidden";
    openNav.style.display = "block";
    closeNav.style.display = "none";
});