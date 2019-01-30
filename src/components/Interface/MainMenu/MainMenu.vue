<template>
  <div class="main-menu">
    <ul
      class="main-menu__container"
      :class="{opened: menuTrigger}"
    >
      <li
        class="main-menu__item"
      >
        <a
          href="#"
          class="main-menu__link"
        >
          Начало
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#"
          class="main-menu__link"
        >
          Почему мы
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#"
          class="main-menu__link"
        >
          Расчёт
        </a>
      </li>
    </ul>
    <div
      class="main-menu__button"
      :class="{close: menuTrigger}"
      @click="menuTrigger = !menuTrigger"
    >
      <span class="main-menu__bar" />
    </div>
  </div>
</template>

<script>
export default {
  name: 'MainMenu',
  data () {
    return {
      menuTrigger: false
    }
  }
}
</script>

<style scoped lang="sass">
.main-menu
  overflow-x: hidden
  &__container
    position: absolute
    top: 83px
    right: -100vw
    box-sizing: border-box
    display: flex
    flex-direction: column
    height: 0
    width: 0
    margin: 0
    background-color: #ffffff
    box-shadow: -2px 5px 10px rgba(#000, .2), inset 1px 0 5px rgba(#000, .1)
    transition: .03s
    overflow: hidden
    &.opened
      right: 0
      height: calc(100vh - 83px)
      width: 85vw
      padding-top: 20px
      padding-left: 30px
      transition: .3s
  &__item
    padding: 10px
    list-style-type: none
  &__link
    color: #000000
    text-decoration: none
  &__button
    position: absolute
    top: 0
    right: 0
    height: 83px
    width: 73px
    overflow: hidden
  &__bar,
  &__bar:after,
  &__bar:before
    position: absolute
    height: 9px
    width: 53px
    background-color: #000
    border-radius: 9px
    transition: .3s
  &__bar
    top: 35px
    left: 10px
  &__bar:after,
  &__bar:before
    content: ''
    left: 0
  &__bar:before
    top: -15px
  &__bar:after
    top: 15px
.close
  .main-menu
    &__bar
      background-color: transparent
    &__bar:before,
    &__bar:after
      width: 43px
      transform-origin: right
    &__bar:before
      transform: rotate(-45deg)
    &__bar:after
      transform: rotate(45deg)
</style>
