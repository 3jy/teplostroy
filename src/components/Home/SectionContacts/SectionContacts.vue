<template>
  <section
    v-if="!loading"
    class="section section-contacts"
    id="contacts"
  >
    <div class="container section-contacts__container">
      <div class="contacts">
        <h2 class="section-title">
          Наши контакты
        </h2>
        <div class="contacts__content">
          <div class="contacts__partition">
            <h3 class="partition__caption">
              Адрес:
            </h3>
            <p class="partition__content">
              <a
                href="https://yandex.ru/maps/239/sochi/?l=map&ll=39.657961%2C43.660324&mode=search&sll=39.657961%2C43.660324&source=wizgeo&text=Россия%2C%20Краснодарский%20край%2C%20Сочи%2C%20микрорайон%20Дагомыс%2C%20улица%20Гайдара%2C%202&utm_medium=maps-desktop&utm_source=serp&z=17"
                target="_blank"
              >
                <span class="fas fa-map-marker-alt" />
                {{ details.address }}
              </a>
            </p>
          </div>
          <div class="contacts__partition">
            <h3 class="partition__caption">
              Режим работы:
            </h3>
            <ul class="partition__content">
              <li>
                <span class="far fa-calendar-alt" />
                пн-пт: 08:00-22:00
              </li>
              <li>
                <span class="far fa-calendar-alt" />
                сб-вс: 09:00-17:00
              </li>
            </ul>
          </div>
          <div class="contacts__partition">
            <h3 class="partition__caption">
              Реквизиты:
            </h3>
            <ul class="partition__content">
              <li>
                <span class="far fa-copy" />
                {{ details['title-long'] }}
              </li>
              <li>
                <span class="far fa-copy" />
                ИНН {{ details.inn }}
              </li>
              <li>
                <span class="far fa-copy" />
                КПП {{ details.kpp }}
              </li>
              <li>
                <span class="far fa-copy" />
                ОГРН {{ details.ogrn }}
              </li>
            </ul>
          </div>
          <div class="contacts__partition">
            <h3 class="partition__caption">
              Контакты:
            </h3>
            <ul class="partition__content">
              <li>
                <a :href="`tel:${details.phone.replace(/[^+0-9]/g,'')}`">
                  <span class="fas fa-phone" />
                  {{ details.phone }}
                </a>
              </li>
              <li>
                <a :href="`mailto:${details.email}`">
                  <span class="fas fa-at" />
                  {{ details.email }}
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="map">
        <h2 class="section-title">
          Мы смонтировали более 478 систем отопления
        </h2>
      </div>
    </div>
  </section>
</template>

<script>
import Axios from 'axios'
export default {
  data () {
    return {
      dUrl: 'https://test.teplostroy.ooo/api/v1/details/',
      details: {},
      loading: false
    }
  },
  created () {
    this.loading = true
    Axios
      .get(this.dUrl)
      .then(({ data }) => {
        data.forEach(detail => { this.details[detail.name] = detail.value })
        this.loading = false
      })
  }
}
</script>

<style src="./_SectionContacts.sass" lang="sass"></style>
