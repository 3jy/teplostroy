<template>
  <nav class="main-navigation">
    <div class="container main-navigation__container">
      <company-logo />
      <main-menu />
    </div>
  </nav>
</template>

<script>
import CompanyLogo from '@/components/Interface/CompanyLogo/CompanyLogo'
import MainMenu from '@/components/Interface/MainMenu/MainMenu'
export default {
  name: 'MainNavigation',
  components: {
    CompanyLogo,
    MainMenu
  }
}
</script>

<style scoped lang="sass">
.main-navigation
  &__container
    display: flex
</style>
