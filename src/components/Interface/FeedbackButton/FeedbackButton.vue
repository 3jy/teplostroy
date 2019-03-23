<template>
  <div class="feedback-button">
    <a
      href="tel:+79000069939"
      class="feedback-button__link"
    >
      +7 (900) 006-99-39
    </a>
    <simple-button
      class="feedback-button__btn btn_small"
      id="ask_question"
      is-external
    >
      Задать вопрос
    </simple-button>
  </div>
</template>

<script>
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
export default {
  name: 'FeedbackButton',
  components: {
    SimpleButton
  }
}
</script>

<style lang="sass">
.feedback-button
  display: flex
  flex-direction: column
  align-items: center
  justify-content: space-around
  min-height: 80px
  width: calc(100% - 83px * 2)
  @media (min-width: 1024px)
    width: auto
  &__link
    font-weight: 600
    color: #000000
</style>
