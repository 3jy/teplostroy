<template>
  <section
    class="section section-gift"
    id="gift"
  >
    <div class="container section-gift__container">
      <h2 class="section-title">
        Мы подготовили для Вас в подарок книгу:
      </h2>

      <div class="section-gift__content">
        <div class="section-gift__annotation">
          <div class="section-gift__annotation_wrap">
            <h3 class="section-gift__title">
              «22 ОШИБКИ ПРИ ВЫБОРЕ СИСТЕМЫ ОТОПЛЕНИЯ»
            </h3>
            <p class="section-gift__subtitle">
              Что необходимо учесть, если Вы решили установить отопление в частном доме?
            </p>
            <div class="section-gift__annotation-text">
              <p>
                Чтобы избежать ошибок, ведущих к
                дополнительным денежным затратам,
                затягиванию сроков монтажа и частым
                поломкам в процессе эксплуатации,
                необходимо знать о них заранее.
              </p>
              <p>
                Мы подготовили для вас обзор самых
                распространенных ошибок при выборе и
                монтаже системы отопления.
              </p>
            </div>
          </div>
        </div>

        <div class="book-base">
          <div class="book">
            <div class="book__cover">
              <h3 class="book__title">
                <span class="book__title_first-part">
                  22 ОШИБКИ
                </span>
                <span class="book__title_second-part">
                  ПРИ ВЫБОРЕ
                </span>
                <span class="book__title_third-part">
                  СИСТЕМЫ ОТОПЛЕНИЯ
                </span>
              </h3>
            </div>

            <div class="book__decor" />

            <div class="book__content">
              <h4 class="book__caption">
                Что полезного Вы узнаете?
              </h4>
              <ul class="book__list list">
                <li class="list__item">
                  Как сэкономить до 50% на отопление дома
                </li>
                <li class="list__item">
                  Какие самые распространенные ошибки совершают люди при установке системы отопления
                </li>
                <li class="list__item">
                  На каком дополнительном оборудовании не стоит экономить, чтобы не испортить себе жизнь в будущем
                </li>
                <li class="list__item">
                  Почему даже самый дорогой котел может принести большое количество проблем,
                  если Вы забудете учесть небольшой нюанс при монтаже
                </li>
                <li class="list__item">
                  Как правильно просчитать и выбрать систему отопления для Вашего дома
                </li>
                <li class="list__item">
                  Как проверить монтажную бригаду, на качество выполнимых работ
                </li>
              </ul>
            </div>

            <div class="book__back" />
          </div>
        </div>

        <simple-button
          class="section-gift__btn btn_big"
          @click.native="downloadGift"
        >
          Получить бесплатно!
        </simple-button>
      </div>
    </div>
  </section>
</template>

<script>
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
export default {
  props: {
  },
  data () {
    return {
      gift: `${process.env.BASE_URL}22_ошибки.pdf`
    }
  },
  components: {
    SimpleButton
  },
  methods: {
    forceFileDownload (response) {
      const url = window.URL.createObjectURL(new Blob([response.data]))
      const link = document.createElement('a')
      link.href = url
      link.setAttribute('download', '22_ошибки.pdf') // or any other extension
      document.body.appendChild(link)
      link.click()
    },

    downloadGift () {
      this.$http({
        method: 'get',
        url: this.gift,
        responseType: 'arraybuffer'
      })
        .then(response => {
          this.forceFileDownload(response)
        })
        .catch(() => console.log('error occured'))
    }
  }
}
</script>

<style src="./_SectionGift.sass" lang="sass"></style>
