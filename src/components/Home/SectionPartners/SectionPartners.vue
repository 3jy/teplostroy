<template>
  <section
    class="section section-partners"
    id="partners"
  >
    <div class="container section-partners__container">
      <h2 class="section-title">
        Мы гордимся не только нашими клиентами,
        но и нашими партнерами!
      </h2>
      <div class="section-partners__content">
        <swiper
          :options="swiperOption"
          class="partners"
        >
          <swiper-slide class="partners__card">
            <img
              :src="image1"
              alt="Rehau"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image2"
              alt="Valtec"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image3"
              alt="Grundfos"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image4"
              alt="Drazice"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image5"
              alt="Wolf"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image6"
              alt="Buderus"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image7"
              alt="Protherm"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image8"
              alt="Vaillant"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image9"
              alt="Thermex"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image10"
              alt="Rifar"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image11"
              alt="Kermi"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image12"
              alt="Эван"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image13"
              alt="Baxi"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image14"
              alt="Uponor"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image15"
              alt="Viessmann"
            >
          </swiper-slide>
          <swiper-slide class="partners__card">
            <img
              :src="image16"
              alt="Tece"
            >
          </swiper-slide>
          <!-- eslint-disable -->
          <div
            class="swiper-pagination"
            slot="pagination"
          ></div>
        </swiper>
      </div>
    </div>
  </section>
</template>

<script>
import image1 from './img/1.png'
import image2 from './img/2.png'
import image3 from './img/3.png'
import image4 from './img/4.png'
import image5 from './img/5.png'
import image6 from './img/6.png'
import image7 from './img/7.png'
import image8 from './img/8.png'
import image9 from './img/9.png'
import image10 from './img/10.png'
import image11 from './img/11.png'
import image12 from './img/12.png'
import image13 from './img/13.png'
import image14 from './img/14.png'
import image15 from './img/15.png'
import image16 from './img/16.png'

export default {
  data () {
    return {
      image1,
      image2,
      image3,
      image4,
      image5,
      image6,
      image7,
      image8,
      image9,
      image10,
      image11,
      image12,
      image13,
      image14,
      image15,
      image16,
      swiperOption: {
        slidesPerView: 4,
        slidesPerColumn: 4,
        spaceBetween: 1,
        breakpoints: {
          768: {
            slidesPerView: 3,
            slidesPerColumn: 4,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          640: {
            slidesPerView: 2,
            slidesPerColumn: 4,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          360: {
            slidesPerView: 1,
            slidesPerColumn: 4,
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

<style src="./_SectionPartners.sass" lang="sass"></style>
