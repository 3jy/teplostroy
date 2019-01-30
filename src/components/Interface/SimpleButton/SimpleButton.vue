<template>
  <button class="btn">
    <slot />
  </button>
</template>

<script>
export default {
  name: 'SimpleButton'
}
</script>

<style lang="sass">
.btn
  font-size: 1em
  color: #ffffff
  background-color: $clr-main_btn
  border: none
  box-shadow: 0 0 10px 5px rgba($clr-main_btn, .3)
  cursor: pointer
  &:focus,
  &:active
    box-shadow: 0 0 10px 4px rgba($clr-main_btn, .6)
  &_small
    padding: .5em
</style>
