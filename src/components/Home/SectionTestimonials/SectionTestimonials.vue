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
          <swiper-slide class="testimonials-card">
            <div class="testimonials-card__container">
              <div class="testimonials-card__header">
                <div class="user__name">
                  <div class="user__firstname">
                    Алексей
                  </div>
                </div>
                <div class="user__picture">
                  <img
                    :src="photoMan"
                    alt="Иван Иванов"
                  >
                </div>
              </div>
              <div class="testimonials-card__body">
                <div class="user__photos">
                  <img
                    :src="tstl11"
                    alt="Интерьер"
                  >
                  <img
                    :src="tstl12"
                    alt="Документ"
                  >
                </div>
                <div class="user__text">
                  <p>
                    Сначала мне показалось, что Юрий сделал мне
                    дороговатое предложение по монтажу инженерных
                    систем, по сравнению с его конкурентами.
                  </p>
                  <p>
                    Но потом я понял. Он сделал свои предложения,
                    основываясь на тепловых расчётах моего дома.
                    Исходя из теплопотерь здания, и моих пожеланий,
                    получилось соответствующие количества и типы
                    материалов, и количество работ.
                  </p>
                  <p>
                    И я рад, что прислушался к рекомендациям Юрия.
                  </p>
                </div>
              </div>
              <div class="testimonials-card__footer">
                <button class="btn testimonials__btn btn_small">
                  Подробнее >>
                </button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide class="testimonials-card">
            <div class="testimonials-card__container">
              <div class="testimonials-card__header">
                <div class="user__name">
                  <div class="user__firstname">
                    Сидор
                  </div>
                  <div class="user__lastname">
                    Сидоров
                  </div>
                </div>
                <div class="user__picture">
                  <img
                    :src="photoMan"
                    alt="Сидор Сидоров"
                  >
                </div>
              </div>
              <div class="testimonials-card__body">
                <div class="user__video">
                  <iframe
                    src="https://www.youtube.com/embed/0EV6_RxhEmc"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  />
                </div>
                <div class="user__text">
                  <p>
                    Сначала мне показалось, что Юрий сделал мне
                    дороговатое предложение по монтажу инженерных
                    систем, по сравнению с его конкурентами.
                  </p>
                  <p>
                    Но потом я понял. Он сделал свои предложения,
                    основываясь на тепловых расчётах моего дома.
                    Исходя из теплопотерь здания, и моих пожеланий,
                    получилось соответствующие количества и типы
                    материалов, и количество работ.
                  </p>
                  <p>
                    И я рад, что прислушался к рекомендациям Юрия.
                  </p>
                </div>
              </div>
              <div class="testimonials-card__footer">
                <button class="btn testimonials__btn btn_small">
                  Подробнее >>
                </button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide class="testimonials-card">
            <div class="testimonials-card__container">
              <div class="testimonials-card__header">
                <div class="user__name">
                  <div class="user__firstname">
                    Николай Лукич
                  </div>
                  <div class="user__lastname">
                    Кожура
                  </div>
                </div>
                <div class="user__picture">
                  <img
                    :src="photoMan"
                    alt="Николай Кожура"
                  >
                </div>
              </div>
              <div class="testimonials-card__body">
                <div class="user__text">
                  <p>
                    Я строил себе дом, а Юрий предлагал свои
                    услуги инженера-сантехника. Я многих повидал
                    на своем веку, и достаточно натерпелся от
                    сантехников и сантехнических материалов. У
                    меня были и потопы и прорывы.
                  </p>
                  <p>
                    Но качество отношения, уровень  инженерной
                    подготовки Юрия  и предлагаемые им материалы
                    мне понравились.  Это потом я понял, что такое
                    Rehau. Это потом мне рассказали о его
                    надёжности, но до этого мне пришлось поверить
                    Юре, который смог  убедить меня в
                    преимуществах этого материала.
                  </p>
                  <p>
                    И я признателен ему за это.
                  </p>
                  <p>
                    По моей просьбе начертил предполагаемые схемы
                    монтажа, и мы вместе смогли проверить каждый
                    фитинг в этой системе.
                  </p>
                  <p>
                    Я смог понять и увидеть инженерные решения,
                    которые он предлагает. Он сделал максимум
                    предложений и вариантов, в результате Я смог
                    подобрать надёжную и недорогую систему
                    отопления, водоснабжения.
                  </p>
                </div>
              </div>
              <div class="testimonials-card__footer">
                <button class="btn testimonials__btn btn_small">
                  Подробнее >>
                </button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide class="testimonials-card">
            <div class="testimonials-card__container">
              <div class="testimonials-card__header">
                <div class="user__name">
                  <div class="user__firstname">
                    Петра
                  </div>
                  <div class="user__lastname">
                    Петрова
                  </div>
                </div>
                <div class="user__picture">
                  <img
                    :src="photoWoman"
                    alt="Иоанна Иванова"
                  >
                </div>
              </div>
              <div class="testimonials-card__body">
                <div class="user__video">
                  <iframe
                    src="https://www.youtube.com/embed/0EV6_RxhEmc"
                    frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                  />
                </div>
                <div class="user__text">
                  Текст
                </div>
              </div>
              <div class="testimonials-card__footer">
                <button class="btn testimonials__btn btn_small">
                  Подробнее >>
                </button>
              </div>
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
