<template>
  <nav class="main-navigation">
    <div class="container main-navigation__container">
      <company-logo />
    </div>
  </nav>
</template>

<script>
import CompanyLogo from '@/components/Interface/CompanyLogo/CompanyLogo'
export default {
  name: 'MainNavigation',
  components: {
    CompanyLogo
  }
}
</script>

<style scoped>

</style>
