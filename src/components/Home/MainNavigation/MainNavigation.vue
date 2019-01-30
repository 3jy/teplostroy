<template>
  <nav class="main-navigation">
    <div class="container main-navigation__container">
      <company-logo />
      <main-menu />
      <feedback-button />
    </div>
  </nav>
</template>

<script>
import CompanyLogo from '@/components/Interface/CompanyLogo/CompanyLogo'
import MainMenu from '@/components/Interface/MainMenu/MainMenu'
import FeedbackButton from '@/components/Interface/FeedbackButton/FeedbackButton'
export default {
  name: 'MainNavigation',
  components: {
    CompanyLogo,
    MainMenu,
    FeedbackButton
  }
}
</script>

<style scoped lang="sass">
.main-navigation
  width: 100vw
  overflow-x: hidden
  &__container
    display: flex
</style>
