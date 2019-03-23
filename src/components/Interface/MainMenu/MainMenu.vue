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
          href="#header"
          class="main-menu__link"
        >
          Начало
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#calculator"
          class="main-menu__link"
        >
          Подбор
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#gift"
          class="main-menu__link"
        >
          Подарок
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#partners"
          class="main-menu__link"
        >
          Партнеры
        </a>
      </li>
      <li
        class="main-menu__item"
      >
        <a
          href="#contacts"
          class="main-menu__link"
        >
          Контакты
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

<style lang="sass">
.main-menu
  overflow-x: hidden
  z-index: 4
  @media (min-width: 1024px)
    flex-grow: 2
  &__container
    position: fixed
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
    @media (min-width: 1024px)
      flex-direction: row
      align-items: center
      justify-content: space-around
      position: relative
      top: auto
      right: auto
      height: 100%
      width: auto
      padding-left: 0
      font-size: 1.2em
      box-shadow: none
      transition: .3s
  &__item
    padding: 10px
    text-align: center
    list-style-type: none
  &__link
    font-size: 2em
    color: #000000
    text-decoration: none
    transition: .3s
    @media (min-width: 1024px)
      font-size: 1em
  &__button
    position: fixed
    top: 20px
    right: 8px
    height: 49px
    width: 57px
    background-color: #ffffff
    border-radius: 5px
    overflow: hidden
    @media (min-width: 1024px)
      display: none
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
    top: 20px
    left: 2px
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
