
window.addEventListener('DOMContentLoaded', () => {
    const divSwiper = document.querySelector('.swiper');
    const divSwiperWrapper = document.querySelector('.swiper-wrapper');
    const divSwiperSlide = document.querySelectorAll('.swiper-slide');
    

    console.log('swiper');
    // init Swiper:
    let swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        breakpoints: {
            // when window width is >= 320px
            768: {
              slidesPerView: 3
            //   spaceBetween: 20,

            },
        }
    });

    let divSwiperPagination;

    function onResizeSwiper(){
        if ( window.innerWidth <= 768 ) {
            // swiper.enable();
            document.querySelector('.swiper-pagination').style.display = "flex";
            // swiper.el.style.width = "100%";
            // swiper.wrapperEl.style.width = "100%";
            // swiper.init('.swiper');
        } else {
            // swiper.disable();
            document.querySelector('.swiper-pagination').style.display = "none";
            // swiper.el.style.width = "100%";
            // swiper.wrapperEl.style.width = "100%";
            // swiper.destroy();
        }
    }

    window.addEventListener("resize", onResizeSwiper);
    onResizeSwiper();
});