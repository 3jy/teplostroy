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
  z-index: 3
  @media (min-width: 1024px)
    position: fixed
    top: 0
    left: 0
    width: 100%
    background-color: #ffffff
    box-shadow: 0 2px 10px 5px #00000022
  &__container
    display: flex
    @media (min-width: 1024px)
      justify-content: space-between
      height: 100px
</style>
