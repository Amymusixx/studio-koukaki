<!-- Swiper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko.png'; ?>"/>
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Onejiiro.png'; ?>" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Pinku.png'; ?>" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Tenshi.png'; ?>" />
      </div>
      <div class="swiper-slide">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna.png'; ?>" />
      </div>
    
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

   <!-- Initialize Swiper -->
   <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      autoplay: {
        delay:3000,
      },
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 0,
        modifier: 1,
        slideShadows: false,
      },
    });
  </script>