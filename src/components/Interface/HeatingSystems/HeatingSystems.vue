<template>
  <div class="heating-systems">
    <swiper :options="swiperOption">
      <swiper-slide class="heating-systems__swiper-slide heating-systems__swiper-slide1">
        <heating-system-card
          type="Газовое отопление"
          @show-popup="ifShowPopup"
        >
          <img
            slot="picture"
            src="./img/1.png"
            alt="Газовое отопление"
          >
          <template slot="caption">
            Газовое <br>
            отопление
          </template>
          <template slot="list">
            <li class="list__item">
              Экономичность
            </li>
            <li class="list__item">
              Энергоэффективность
            </li>
            <li class="list__item">
              Простота эксплуатации
            </li>
            <li class="list__item">
              Высокая эффективность
            </li>
            <li class="list__item">
              Доступность топлива
            </li>
          </template>
          <template slot="expenses">
            <p>
              Расходы на отопление:
            </p>
            <p>
              ≈ 140 руб./м² за сезон*
            </p>
          </template>
        </heating-system-card>
      </swiper-slide>
      <swiper-slide class="heating-systems__swiper-slide heating-systems__swiper-slide2">
        <heating-system-card
          type="Электрическое отопление"
          @show-popup="ifShowPopup"
        >
          <img
            slot="picture"
            src="./img/3.png"
            alt="Электрическое отопление"
          >
          <template slot="caption">
            Электрическое <br>
            отопление
          </template>
          <template slot="list">
            <li class="list__item">
              Пожарная безопасность
            </li>
            <li class="list__item">
              Простота эксплуатации
            </li>
            <li class="list__item">
              Экологичность
            </li>
            <li class="list__item">
              Компактность
            </li>
            <li class="list__item">
              Долговечность
            </li>
          </template>
          <template slot="expenses">
            <p>
              Расходы на отопление:
            </p>
            <p>
              ≈ 580 руб./м² за сезон*
            </p>
          </template>
        </heating-system-card>
      </swiper-slide>
      <swiper-slide class="heating-systems__swiper-slide heating-systems__swiper-slide3">
        <heating-system-card
          type="Твердотопливное отопление"
          @show-popup="ifShowPopup"
        >
          <img
            slot="picture"
            src="./img/4.png"
            alt="Твердотопливное отопление"
          >
          <template slot="caption">
            Твердотопливное <br>
            отопление
          </template>
          <template slot="list">
            <li class="list__item">
              Рентабельность
            </li>
            <li class="list__item">
              Доступность топлива
            </li>
            <li class="list__item">
              Экологичность
            </li>
            <li class="list__item">
              Энергоэффективность
            </li>
            <li class="list__item">
              Долговечность
            </li>
          </template>
          <template slot="expenses">
            <p>
              Расходы на отопление:
            </p>
            <p>
              ≈ 350 руб./м² за сезон*
            </p>
          </template>
        </heating-system-card>
      </swiper-slide>
      <swiper-slide class="heating-systems__swiper-slide heating-systems__swiper-slide4">
        <heating-system-card
          type="Дизельное отопление"
          @show-popup="ifShowPopup"
        >
          <img
            slot="picture"
            src="./img/5.png"
            alt="Дизельное отопление"
          >
          <template slot="caption">
            Дизельное <br>
            отопление
          </template>
          <template slot="list">
            <li class="list__item">
              Автономность
            </li>
            <li class="list__item">
              Энергоэффективность
            </li>
            <li class="list__item">
              Простота оформления
            </li>
            <li class="list__item">
              Надежная конструкция
            </li>
            <li class="list__item">
              Можно перейти на газ
            </li>
          </template>
          <template slot="expenses">
            <p>
              Расходы на отопление:
            </p>
            <p>
              ≈ 450 руб./м² за сезон*
            </p>
          </template>
        </heating-system-card>
      </swiper-slide>
      <swiper-slide class="heating-systems__swiper-slide heating-systems__swiper-slide5">
        <heating-system-card
          type="Альтернативное отопление"
          @show-popup="ifShowPopup"
        >
          <img
            slot="picture"
            src="./img/6.png"
            alt="Альтернативное отопление"
          >
          <template slot="caption">
            Альтернативное <br>
            отопление
          </template>
          <template slot="list">
            <li class="list__item">
              Экономичность
            </li>
            <li class="list__item">
              Экологичность
            </li>
            <li class="list__item">
              Долговечность
            </li>
            <li class="list__item">
              Функциональность
            </li>
            <li class="list__item">
              Простая электроника
            </li>
          </template>
          <template slot="expenses">
            <p>
              Расходы на отопление:
            </p>
            <p>
              ≈ 90 руб./м² за сезон*
            </p>
          </template>
        </heating-system-card>
      </swiper-slide>
      <div
        class="swiper-pagination"
        slot="pagination"
      />
    </swiper>
    <popup-form
      from="choice"
      :params="popupType"
      v-if="showPopup"
      @mail-sent="ifMailSent"
      @close-popup="ifMailSent"
    />
  </div>
</template>

<script>
import HeatingSystemCard from '@/components/Interface/HeatingSystemCard/HeatingSystemCard'
import PopupForm from '@/components/Interface/PopupForm/PopupForm'
export default {
  data () {
    return {
      showPopup: false,
      popupType: '',
      swiperOption: {
        slidesPerView: 5,
        spaceBetween: 5,
        breakpoints: {
          1024: {
            slidesPerView: 4,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          470: {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          }
        }
      }
    }
  },
  components: {
    HeatingSystemCard,
    PopupForm
  },
  methods: {
    ifShowPopup (type) {
      this.popupType = type
      this.showPopup = true
    },
    ifMailSent () {
      this.showPopup = false
    }
  }
}
</script>

<style src="./_HeatingSystems.sass" lang="sass"></style>
