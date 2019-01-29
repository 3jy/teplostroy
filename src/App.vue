<template>
  <div id="app">
    <main-navigation />
    <router-view />
  </div>
</template>

<script>
import MainNavigation from '@/components/Home/MainNavigation/MainNavigation'

export default {
  name: 'App',
  components: {
    MainNavigation
  }
}
</script>

<style lang="sass">
body
  font-family: sans-serif
</style>
