<template>
  <footer class="section-footer">
    <div class="container section-footer__container">
      <div class="section-footer__box">
        <company-logo />
        <feedback-button />
      </div>
      <p>© 2012&mdash;{{ year }} | Все права защищены авторским правом</p>
    </div>
    <p class="designed">
      developed by
      <a href="http://jarocki.art">
        jarocki.art
      </a>
    </p>
  </footer>
</template>

<script>
import CompanyLogo from '@/components/Interface/CompanyLogo/CompanyLogo'
import FeedbackButton from '@/components/Interface/FeedbackButton/FeedbackButton'
export default {
  data () {
    return {
      year: 2019
    }
  },
  created () {
    this.year = (new Date()).getFullYear()
  },
  components: {
    CompanyLogo,
    FeedbackButton
  }
}
</script>

<style src="./_SectionFooter.sass" lang="sass"></style>
