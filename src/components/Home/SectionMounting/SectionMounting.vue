<template>
  <section
    class="section section-mounting"
    id="mounting"
  >
    <div class="container section-mounting__container">
      <h2 class="section-title">
        У нас Вы можете заказать любые монтажные работы отдельно
      </h2>
      <div class="section-mounting__content">
        <swiper
          :options="swiperOption"
          class="mounting-cards"
        >
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/1.jpg"
                    alt="Проект системы отопления"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Проект системы отопления
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>
                  В проекте будет указано:
                </p>
                <ul>
                  <li>
                    точное расположение отопительного оборудования в доме;
                  </li>
                  <li>
                    список оборудования;
                  </li>
                  <li>
                    точные характеристики системы (мощность, производительность и другие параметры).
                  </li>
                </ul>
              </div>
              <div class="mounting-card__price">
                от 10&nbsp;000 руб.
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о проекте системы отопления!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/2.jpg"
                    alt="Монтаж и обвязка котла"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Монтаж и обвязка котла
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>
                  Установка котла под уровень (настенного или напольного)
                </p>
                <ul>
                  <li>Монтаж группы безопасности</li>
                  <li>Подвод труб подачи и обратки</li>
                  <li>Подключение котла</li>
                  <li>Пусконаладочные работы</li>
                </ul>
              </div>
              <div class="mounting-card__price">
                от 6&nbsp;900 руб.
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о монтаже и обвзке котла!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/3.jpg"
                    alt="Монтаж тёплого пола"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Монтаж тёплого пола
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>Монтаж теплого пола под любое покрытие:</p>
                <ul>
                  <li>под плитку;</li>
                  <li>под линолеум;</li>
                  <li>под ковролин</li>
                </ul>
              </div>
              <div class="mounting-card__price">
                от 350 руб./м²
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о монтаже теплого пола!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/4.jpg"
                    alt="Монтаж радиаторов"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Монтаж радиаторов
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>За 1 день установим любые виды радиаторов:</p>
                <ul>
                  <li>биметаллические;</li>
                  <li>алюминиевые;</li>
                  <li>стальные.</li>
                </ul>
              </div>
              <div class="mounting-card__price">
                от 1&nbsp;990 руб.
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о монтаже радиаторов!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/5.jpg"
                    alt="Монтаж бойлера"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Монтаж бойлера
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>
                  Грамотный монтаж бойлера обеспечит Вас достаточным количеством горячей воды.
                </p>
              </div>
              <div class="mounting-card__price">
                от 6&nbsp;490 руб.
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о монтаже бойлера!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="mounting-card">
              <div class="mounting-card__heading">
                <div class="mounting-card__picture">
                  <img
                    src="./img/6.jpg"
                    alt="Монтаж труб"
                  >
                </div>
                <h3 class="mounting-card__caption">
                  Монтаж труб
                </h3>
              </div>
              <div class="mounting-card__content">
                <p>
                  Благодаря использованию профессионального инструмента при монтаже труб Вы получите
                  монолитное соединение, которое можно замуровывать в стены, стяжку.
                </p>
              </div>
              <div class="mounting-card__price">
                от 150 руб.
              </div>
              <div class="mounting-card__button">
                <simple-button
                  class="mounting-card__btn btn_small"
                  message="Здравствуйте! Расскажите подробнее о монтаже труб!"
                  is-external
                >
                  Получить консультацию
                </simple-button>
              </div>
            </div>
          </swiper-slide>
          <div
            class="swiper-pagination"
            slot="pagination"
          />
        </swiper>
      </div>
    </div>
  </section>
</template>

<script>
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
export default {
  data () {
    return {
      swiperOption: {
        slidesPerView: 3,
        slidesPerColumn: 2,
        spaceBetween: 1,
        breakpoints: {
          1024: {
            slidesPerView: 3,
            slidesPerColumn: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
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
            slidesPerView: 2,
            slidesPerColumn: 1,
            spaceBetween: 10,
            pagination: {
              el: '.swiper-pagination',
              clickable: false
            }
          },
          480: {
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
  },
  components: {
    SimpleButton
  }
}
</script>

<style src="./_SectionMounting.sass" lang="sass"></style>
