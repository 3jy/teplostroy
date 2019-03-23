<template>
  <header
    class="header"
    id="header"
  >
    <div class="header__slider">
      <swiper :options="swiperOption">
        <swiper-slide class="swiper-slide1">
          <div class="container">
            <div class="swiper-slide__section">
              <div class="swiper-slide__header">
                <h3 class="swiper-slide__title">
                  Лазаревское
                </h3>
                <p class="swiper-slide__subtitle">
                  Монтаж систем отопления, водоснабжения, канализации
                </p>
              </div>
              <div class="swiper-slide__main">
                <p>Виды работ на объекте:</p>
                <ul class="work-list">
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_boiler" />
                    <div class="work-list__content">
                      Газовый котел с бойлером ГВС
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_warm-floor" />
                    <div class="work-list__content">
                      Теплые полы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_radiators" />
                    <div class="work-list__content">
                      Панельные радиаторы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_hot-water-supply" />
                    <div class="work-list__content">
                      Система ГВС с рециркуляцией
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Канализация
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Врезка в водопровод
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide2">
          <div class="container">
            <div class="swiper-slide__section">
              <div class="swiper-slide__header">
                <h3 class="swiper-slide__title">
                  Адлер
                </h3>
                <p class="swiper-slide__subtitle">
                  Монтаж систем отопления, водоснабжения, канализации
                </p>
              </div>
              <div class="swiper-slide__main">
                <p>Виды работ на объекте:</p>
                <ul class="work-list">
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_boiler" />
                    <div class="work-list__content">
                      Электрокотел с бойлером ГВС
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_warm-floor" />
                    <div class="work-list__content">
                      Теплые полы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_radiators" />
                    <div class="work-list__content">
                      Панельные радиаторы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_hot-water-supply" />
                    <div class="work-list__content">
                      Система ГВС с рециркуляцией
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Канализация
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Врезка в водопровод
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide3">
          <div class="container">
            <div class="swiper-slide__section">
              <div class="swiper-slide__header">
                <h3 class="swiper-slide__title">
                  Красная Поляна
                </h3>
                <p class="swiper-slide__subtitle">
                  Монтаж систем отопления, водоснабжения, канализации
                </p>
              </div>
              <div class="swiper-slide__main">
                <p>Виды работ на объекте:</p>
                <ul class="work-list">
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_boiler" />
                    <div class="work-list__content">
                      Газовый двухконтурный котел
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_warm-floor" />
                    <div class="work-list__content">
                      Теплые полы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_radiators" />
                    <div class="work-list__content">
                      Панельные радиаторы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_hot-water-supply" />
                    <div class="work-list__content">
                      Система ГВС с рециркуляцией
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Канализация
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Врезка в водопровод
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </swiper-slide>
        <swiper-slide class="swiper-slide4">
          <div class="container">
            <div class="swiper-slide__section">
              <div class="swiper-slide__header">
                <h3 class="swiper-slide__title">
                  Горное Лоо
                </h3>
                <p class="swiper-slide__subtitle">
                  Монтаж систем отопления, водоснабжения, канализации
                </p>
              </div>
              <div class="swiper-slide__main">
                <p>Виды работ на объекте:</p>
                <ul class="work-list">
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_boiler" />
                    <div class="work-list__content">
                      Электрокотел с бойлером ГВС
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_warm-floor" />
                    <div class="work-list__content">
                      Теплые полы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_radiators" />
                    <div class="work-list__content">
                      Панельные радиаторы
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_hot-water-supply" />
                    <div class="work-list__content">
                      Система ГВС с рециркуляцией
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Канализация
                    </div>
                  </li>
                  <li class="work-list__item">
                    <div class="work-list__picture work-list__picture_sewerage" />
                    <div class="work-list__content">
                      Врезка в водопровод
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </swiper-slide>
      </swiper>
    </div>
    <div class="container header__container">
      <div class="header__heading">
        <h1 class="header__title">
          <span class="header__title_accent">
            Монтаж
          </span>
          <span>отопления частного дома</span>
          <span class="header__title_accent">
            «под ключ»
          </span>
        </h1>
        <p class="header__subtitle">
          <span class="header__subtitle_accent">
            от 1&nbsp;290 руб.
          </span>
          за квадратный метр
        </p>
      </div>
      <div class="header__content">
        <application-form
          class="application-form_base"
          form-id="header"
          from="header"
        />
      </div>
    </div>
  </header>
</template>

<script>
import ApplicationForm from '@/components/Interface/ApplicationForm/ApplicationForm'
export default {
  name: 'SectionHeader',
  data () {
    return {
      swiperOption: {
        spaceBetween: 0,
        centeredSlides: true,
        effect: 'fade',
        autoplay: {
          delay: 10000,
          disableOnInteraction: false
        }
      }
    }
  },
  components: {
    ApplicationForm
  }
}
</script>

<style lang="sass">
.header
  position: relative
  padding-top: 40px
  padding-bottom: 40px
  @media (min-width: 1280px)
    min-height: calc(100vh - 180px)
  &__slider
    position: absolute
    top: 0
    left: 0
    height: 100%
    width: 100%
    z-index: -1
    .swiper
      &-container
        height: 100%
        width: 100%
      &-slide
        background:
          position: bottom
          repeat: no-repeat
          size: cover
        @media (min-width: 1024px)
          background-position: center
        &__section
          display: none
          @media (min-width: 800px)
            display: block
            box-sizing: border-box
            width: 50%
            padding: 40px
            margin-top: 210px
            color: #ffffff
            background-color: #00000044
          @media (min-width: 1024px)
            margin-top: 170px
        &__title
          margin-bottom: 10px
          font-size: 1.6em
          text-transform: uppercase
        &__subtitle
          margin-bottom: 40px
          text-transform: lowercase
        &__main
          font-size: 1.2em
          font-weight: 600
          font-variant: small-caps
        .work-list
          &__item
            margin-bottom: 10px
      &-slide1
        background-image: url('./slider/slide1/slide1_bg.jpg')
      &-slide2
        background-image: url('./slider/slide2/slide2_bg.jpg')
      &-slide3
        background-image: url('./slider/slide3/slide3_bg.jpg')
      &-slide4
        background-image: url('./slider/slide4/slide4_bg.jpg')
  &__container
    display: flex
    flex-direction: column
    align-items: center
    @media (min-width: 800px)
      align-items: flex-start
  &__title
    display: flex
    flex-wrap: wrap
    justify-content: space-around
    align-items: center
    margin-top: 0
    text-align: center
    font-size: 2em
    line-height: 1
    color: #fff
    text-shadow: 0 0 5px #000
    @media (min-width: 800px)
      justify-content: flex-start
      font-size: 2.5em
      text-align: left
      color: $clr-major
      text-shadow: 0 0 5px #555
    &_accent
      display: block
      /*font-size: 2em*/
      margin-left: 10px
      margin-right: 10px
      line-height: 1
      color: $clr-major
      text-shadow: 0 0 5px #555
      @media (min-width: 800px)
        &:first-child
          margin-left: 0
  &__subtitle
    text-align: center
    font-weight: 800
    color: #fff
    text-shadow: 0 0 5px #000
    @media (min-width: 800px)
      text-align: left
    &_accent
      display: block
      font-size: 1.6em
      font-weight: 800
      color: $clr-major
      text-shadow: 0 0 3px #555
  &__content
    display: flex
    justify-content: space-around
    @media (min-width: 800px)
      justify-content: flex-end
      width: 100%
  &__advantages
    position: relative
    list-style-type: none
    min-width: 270px
    margin:
      top: 0
      left: 0
      right: 0
      bottom: 40px
    padding:
      top: 40px
      left: 15px
      right: 15px
      bottom: 40px
    font-size: 1.1em
    font-weight: 600
    background-color: rgba(#fff, .4)
    background: linear-gradient(90deg, rgba(#fff, 0.2) 0%, rgba(#fff, 0.6) 10%, rgba(#fff, 0) 50%, rgba(#fff, 0.6) 90%, rgba(#fff, 0.2) 100%)
    border-radius: 5px
    box-shadow: inset 0 0 5px 1px rgba(#fff, .3), 0 8px 15px 6px rgba(#000, .1)
    overflow: hidden
    &:after
      content: ''
      position: absolute
      top: -100px
      left: -50px
      height: 500px
      width: 300px
      background-color: rgba(#fff, .2)
      background: linear-gradient(180deg, rgba(#fff, 0.6) 30%, rgba(#fff, 0) 50%)
      transform: rotate(-15deg)
      z-index: 0
  &__advantage
    position: relative
    display: flex
    justify-content: space-between
    width: 100%
    line-height: 1.8
    color: #fff
    text-shadow: 0 0 5px rgba(#000, 1)
    z-index: 1
    &_accent
      font-weight: 800
      color: #000
      text-shadow: 0 0 1px #fff
</style>
