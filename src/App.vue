<template>
  <div id="app">
    <main-navigation :phone="phone" />
    <router-view />
  </div>
</template>

<script>
import Axios from 'axios'
import MainNavigation from '@/components/Home/MainNavigation/MainNavigation'

export default {
  name: 'App',
  data () {
    return {
      url: 'https://test.teplostroy.ooo/api/v1/details/',
      phone: ''
    }
  },
  components: {
    MainNavigation
  },
  created () {
    Axios.get(this.url).then(({ data }) => {
      this.phone = data.filter(detail => detail.name === 'phone')[0].value
    })
  }
}
</script>
