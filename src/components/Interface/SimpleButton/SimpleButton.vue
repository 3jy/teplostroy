<template>
  <button class="btn">
    <slot v-if="!isExternal" />
    <a
      href="#showchat"
      class="btn__hidden-link"
      v-if="isExternal"
    >
      <slot />
    </a>
  </button>
</template>

<script>
export default {
  name: 'SimpleButton',
  props: {
    isExternal: {
      default: false,
      type: Boolean
    }
  }
}
</script>

<style lang="sass">

.btn
  position: relative
  box-sizing: border-box
  color: #ffffff
  background-color: $clr-major
  border: none
  border-radius: 4px
  box-shadow: 0 0 10px 5px rgba($clr-major, .3)
  cursor: pointer
  transition: .3s
  overflow: hidden

  &:hover
    background-image: linear-gradient(45deg, $clr-major-0, $clr-major-3)
    box-shadow: 0 0 3px 2px #ffffffaa, 0 0 25px 5px $clr-major-4

  &:hover:after
    content: ''
    position: absolute
    top: -50%
    left: -200%
    height: 400%
    width: 200%
    background-color: #ffffff00
    transform: rotate(-65deg)
    animation:
      duration: 1.5s
      name: animate

  &:focus,
  &:active
    box-shadow: 0 0 10px 3px rgba($clr-major, .6)
    outline: none

  &__hidden-link
    color: #ffffff
    text-decoration: none
    &:hover
      color: #ffffff

  &_small
    padding: .5em

  &_big
    padding: 1em
    font-size: 1.1em
    font-weight: 600

@keyframes animate
  0%
    left: -150%
    background-color: #ffffff00
  50%
    left: 100%
    background-color: #ffffff99
  100%
    left: -150%
    background-color: #ffffff00
</style>
