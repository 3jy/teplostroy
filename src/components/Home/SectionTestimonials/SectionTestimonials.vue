<template>
  <section
    class="section section-testimonials"
    id="testimonials"
  >
    <div class="container section-testimonials__container">
      <h2 class="section-title">
        Отзывы наших клиентов
      </h2>
      <div class="section-testimonials__content">
        <swiper
          :options="swiperOption"
          class="testimonials"
        >
          <swiper-slide
            class="testimonials-card"
            v-for="testimonial in data"
            :key="testimonial.id"
          >
            <div class="testimonials-card__container">
              <div class="testimonials-card__header">
                <div class="user__name">
                  <div class="user__firstname">
                    {{ `${testimonial.name} ${testimonial.patronymic || ''}` }}
                  </div>
                  <div class="user__lastname">
                    {{ testimonial.surname }}
                  </div>
                </div>
                <div class="user__picture">
                  <img
                    :src="photoMan"
                    :alt="`${testimonial.name} ${testimonial.surname}`"
                  >
                </div>
              </div>
              <div class="testimonials-card__body">
                <div
                  v-if="testimonial.video"
                  class="user__video"
                >
                  <iframe
                    :src="testimonial.video"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  />
                </div>
                <div
                  v-if="false"
                  class="user__photos"
                />
                <div class="user__text">
                  {{ testimonial.text }}
                </div>
              </div>
              <!--div class="testimonials-card__footer">
                <button class="btn testimonials__btn btn_small">
                  Подробнее >>
                </button>
              </div-->
            </div>
          </swiper-slide>
        </swiper>
      </div>
    </div>
  </section>
</template>

<script>
import photoMan from './testimonial_man.png'
import photoWoman from './testimonial_woman.png'
import tstl11 from './img/tstl_1/Авито.jpg'
import tstl12 from './img/tstl_1/Отзыв Алексея.jpg'
export default {
  props: {
    data: {
      type: Array,
      required: true
    }
  },

  data () {
    return {
      photoMan,
      photoWoman,
      tstl11,
      tstl12,
      swiperOption: {
        slidesPerView: 3,
        slidesPerColumn: 1,
        spaceBetween: 20,
        breakpoints: {
          768: {
            slidesPerView: 2,
            slidesPerColumn: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          640: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          400: {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          }
        }
      }
    }
  }
}
</script>

<style src="./SectionTestimonials.scss" lang="scss"></style>
