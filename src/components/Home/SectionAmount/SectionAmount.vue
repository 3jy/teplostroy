<template>
  <section
    class="section section-amount"
    id="amount"
  >
    <div class="container">
      <h2 class="section-title">
        Хотите узнать стоимость отопления Вашего дома?
      </h2>
      <div class="section-amount__content">
        <div class="section-amount__mockup">
          <img
            src="./SectionAmount.png"
            alt="Расчёт"
          >
        </div>
        <application-form
          class="application-form_base"
          form-id="amount"
          from="price"
        />
      </div>
    </div>
  </section>
</template>

<script>
import ApplicationForm from '@/components/Interface/ApplicationForm/ApplicationForm'
export default {
  props: {
  },
  components: {
    ApplicationForm
  }
}
</script>

<style src="./_SectionAmount.sass" lang="sass"></style>
