<template>
  <section
    class="section section-steps"
    id="steps"
  >
    <div class="container section-steps__container">
      <h2 class="section-title">
        Среднее время установки системы отопления &mdash; 10 дней
      </h2>
      <div class="section-steps__content">
        <div class="steps">
          <div class="step step-1">
            <div class="step__content">
              <div class="step__caption">
                Заявка
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-1.svg"
                  alt="Шаг 1"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-2">
            <div class="step__content">
              <div class="step__caption">
                Выезд на замер
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-2.svg"
                  alt="Шаг 2"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-3">
            <div class="step__content">
              <div class="step__caption">
                Расчёт проекта
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-3.svg"
                  alt="Шаг 3"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-4">
            <div class="step__content">
              <div class="step__caption">
                Доставка материалов
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-4.svg"
                  alt="Шаг 4"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-5">
            <div class="step__content">
              <div class="step__caption">
                Монтажные работы
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-5.svg"
                  alt="Шаг 5"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-6">
            <div class="step__content">
              <div class="step__caption">
                Приём объекта и расчёт
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-6.svg"
                  alt="Шаг 6"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10151;
            </div>
          </div>
          <div class="step step-7">
            <div class="step__content">
              <div class="step__caption">
                Результат
              </div>
              <div class="step__picture">
                <img
                  src="./img/step-7.svg"
                  alt="Шаг 7"
                >
              </div>
            </div>
            <div class="step__arrow">
              &#10004;
            </div>
          </div>
        </div>
        <application-form
          id="step"
          from="roadmap"
        />
      </div>
    </div>
  </section>
</template>

<script>
import ApplicationForm from '@/components/Interface/ApplicationForm/ApplicationForm'
export default {
  components: {
    ApplicationForm
  }
}
</script>

<style src="./_SectionSteps.sass" lang="sass"></style>
