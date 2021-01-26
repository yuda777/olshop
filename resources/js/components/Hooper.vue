<template>

  <hooper ref="carousel" @slide="updateCarousel">
    <slide>
        <img :src="'../storage/g1.webp'">
    </slide>
    <slide>
      <img :src="'../storage/g2.webp'">
    </slide>
    <slide>
      <img :src="'../storage/g3.webp'">
    </slide>
  </hooper>
</template>

<script>
export default {
  data () {
    return {
      carouselData: 0
    }
  },
  watch: {
    carouselData () {
      this.$refs.carousel.slideTo(this.carouselData);
    }
  },
  methods: {
    slidePrev() {
      this.$refs.carousel.slidePrev();
    },
    slideNext() {
      this.$refs.carousel.slideNext();
    },
    updateCarousel(payload) {
      this.myCarouselData = payload.currentSlide;
    }
  }
}
</script>
