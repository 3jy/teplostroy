<template>
  <form
    class="application-form"
    :formId="formId"
  >
    <button
      class="close-popup"
      @click.prevent="closePopup"
      v-if="formPopup"
    >
      <span>Закрыть</span>
    </button>
    <header class="application-form__heading">
      <h2 class="application-form__title">
        <slot name="caption">
          Оставьте заявку
        </slot>
      </h2>
      <p class="application-form__subtitle">
        чтобы <span class="application-form__subtitle_accent">получить бесплатно</span> коммерческое предложение
        и <span class="application-form__subtitle_accent">скидку</span> на монтажные работы!
      </p>
    </header>
    <main class="application-form__content">
      <fieldset class="application-form__fieldset">
        <input
          class="application-form__input application-form__input_text"
          :id="formId + '-name'"
          type="text"
          placeholder=" "
          v-model="name"
        >
        <label
          class="application-form__label"
          :for="formId + '-name'"
        >
          Ваше имя
        </label>
      </fieldset>
      <fieldset class="application-form__fieldset">
        <input
          class="application-form__input application-form__input_tel"
          :id="formId + '-phone'"
          type="tel"
          placeholder=" "
          v-model="phone"
        >
        <label
          class="application-form__label"
          :for="formId + '-phone'"
        >
          Ваш телефон
        </label>
      </fieldset>
      <simple-button
        class="application-form__btn btn_big"
        @click.native.prevent="mailTo"
      >
        <slot>Получить смету со скидкой</slot>
      </simple-button>
    </main>
    <footer class="application-form__disclaimer">
      Отправляя заявку, я принимаю
      <a
        href="terms.pdf"
        class="application-form__link"
        target="_blank"
      >
        пользовательское соглашение
      </a> и подтверждаю,
      что ознакомлен и согласен с
      <a
        href="privacy.pdf"
        class="application-form__link"
        target="_blank"
      >
        политикой конфиденциальности
      </a>
      данного сайта
    </footer>
  </form>
</template>

<script>
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
import Axios from 'axios'
export default {
  props: {
    formId: {
      type: String,
      default: 'id'
    },
    formPopup: {
      type: Boolean,
      default: false
    },
    from: {
      type: String,
      required: true
    },
    params: {
      type: String,
      default: ''
    }
  },
  data () {
    return {
      name: '',
      phone: ''
    }
  },
  components: {
    SimpleButton
  },
  methods: {
    mailTo () {
      let formData = new FormData()
      let body = ''
      let subj = 'Теплострой-Сочи | Клиент отправил заявку из '

      if (this.name !== '') body += `Заказчик: ${this.name}\n`
      if (this.phone !== '') body += `Телефон: ${this.phone}\n`

      if (this.from === 'header') subj += 'первой формы сайта'
      if (this.from === 'price') subj += 'предложения посчитать стоимость отопления дома'
      if (this.from === 'roadmap') subj += 'последней формы на сайте'
      if (this.from === 'choice') {
        subj += 'подбора отопительного оборудвания'
        body += `Интересуется: ${this.params}`
      }
      if (this.from === 'calc') {
        subj += 'калькулятора'
        body += `Проект: \n${this.params}`
      }

      formData.append('subj', subj)
      formData.append('body', body)

      if (this.phone !== '') {
        Axios.post('send.php', formData)
          .then(res => {
            this.name = ''
            this.phone = ''
            console.log(res.request.response)
            this.$emit('mail-sent')
          })
          .catch(console.log)
      }
    },
    closePopup () {
      this.$emit('close-popup')
    }
  }
}
</script>

<style src="./_ApplicationForm.sass" lang="sass"></style>
