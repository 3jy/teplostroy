<template>
  <div class="heating-systems__card">
    <div class="heating-systems__container">
      <header class="heating-system__heading">
        <div class="heating-system__picture">
          <slot name="picture" />
        </div>
        <h3 class="heating-system__caption">
          <slot name="caption" />
        </h3>
      </header>
      <main class="heating-system__main">
        <ul class="heating-system__list list">
          <slot name="list" />
        </ul>
        <div class="heating-system__expenses">
          <slot name="expenses" />
        </div>
      </main>
      <footer class="heating-system__footer">
        <slot name="button">
          <simple-button
            class="heating-system__btn btn_small"
            @click.native="buttonClicked"
          >
            Узнать стоимость
          </simple-button>
        </slot>
      </footer>
    </div>
  </div>
</template>

<script>
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
export default {
  props: {
    type: {
      type: String,
      default: ''
    }
  },
  components: {
    SimpleButton
  },
  methods: {
    buttonClicked () {
      this.$emit('show-popup', this.type)
    }
  }
}
</script>

<style src="./_HeatingSystemCard.sass" lang="sass"></style>
