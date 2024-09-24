import './bootstrap';

const swiper = new Swiper('.swiper-container', {
    slidesPerView: 4, // Số sản phẩm trên mỗi hàng
    spaceBetween: 20, // Khoảng cách giữa các sản phẩm

    breakpoints: {
        640: {
            slidesPerView: 1, // 1 sản phẩm trên màn hình nhỏ
        },
        768: {
            slidesPerView: 2, // 2 sản phẩm trên màn hình vừa
        },
        1024: {
            slidesPerView: 4, // 4 sản phẩm trên màn hình lớn
        },
    },
});
