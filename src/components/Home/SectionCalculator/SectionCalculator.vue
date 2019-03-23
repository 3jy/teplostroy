<template>
  <section
    class="section section-calculator"
    id="calculator"
  >
    <div class="container">
      <h2 class="section-title">
        Подбор системы отопления
      </h2>
      <div class="content">
        <heating-systems />
        <div class="calculator">
          <div class="calculator__fields-group">
            <button
              class="calculator__btn calculator__btn_floor calculator__btn_inc-floor"
              v-if="floorAmount.current < floorAmount.max"
              @click="increaseFloor"
            >
              <span>+</span>
            </button>
            <div class="calculator__floors">
              <div
                class="calculator__floor"
                v-for="floor in +floorAmount.current"
                :key="floor"
              >
                <div class="calculator__floor-label">
                  {{ floor }} этаж
                </div>
                <div class="calculator__fieldset calculator__fieldset_warm-floor">
                  <label
                    :for="'warm-floor_' + floor"
                    class="calculator__label"
                  >
                    теплых полов:
                  </label>
                  <div class="calculator__field">
                    <input
                      type="text"
                      autocomplete="off"
                      :min="floors[floor - 1]['warm-floor'].min"
                      :max="floors[floor - 1]['warm-floor'].max"
                      :step="floors[floor - 1]['warm-floor'].step"
                      :id="'warm-floor_' + floor"
                      v-model="floors[floor - 1]['warm-floor'].current"
                      @input="inputControl(floors[floor - 1]['warm-floor'])"
                    >
                  </div>
                  <div class="calculator__buttons">
                    <button
                      class="calculator__btn calculator__btn_inc-element"
                      @click="increase(floors[floor - 1]['warm-floor'])"
                    >
                      <span>+</span>
                    </button>
                    <button
                      class="calculator__btn calculator__btn_dec-element"
                      @click="decrease(floors[floor - 1]['warm-floor'])"
                    >
                      <span>-</span>
                    </button>
                  </div>
                </div>
                <div class="calculator__fieldset calculator__fieldset_radiators">
                  <span class="calculator__label">
                    радиаторов:
                  </span>
                  <span class="calculator__field">
                    {{ floors[floor - 1]['radiators'].current }}
                  </span>
                  <div class="calculator__buttons">
                    <button
                      class="calculator__btn calculator__btn_inc-element"
                      @click="increase(floors[floor - 1]['radiators'])"
                    >
                      <span>+</span>
                    </button>
                    <button
                      class="calculator__btn calculator__btn_dec-element"
                      @click="decrease(floors[floor - 1]['radiators'])"
                    >
                      <span>-</span>
                    </button>
                  </div>
                </div>
                <div class="calculator__fieldset calculator__fieldset_kitchen">
                  <span class="calculator__label">
                    кухня:
                  </span>
                  <span class="calculator__field">
                    {{ floors[floor - 1]['kitchen'].current }}
                  </span>
                  <div class="calculator__buttons">
                    <button
                      class="calculator__btn calculator__btn_inc-element"
                      @click="increase(floors[floor - 1]['kitchen'])"
                    >
                      <span>+</span>
                    </button>
                    <button
                      class="calculator__btn calculator__btn_dec-element"
                      @click="decrease(floors[floor - 1]['kitchen'])"
                    >
                      <span>-</span>
                    </button>
                  </div>
                </div>
                <div class="calculator__fieldset calculator__fieldset_bathrooms">
                  <span class="calculator__label">
                    ванных комнат:
                  </span>
                  <span class="calculator__field">
                    {{ floors[floor - 1]['bathrooms'].current }}
                  </span>
                  <div class="calculator__buttons">
                    <button
                      class="calculator__btn calculator__btn_inc-element"
                      @click="increase(floors[floor - 1]['bathrooms'])"
                    >
                      <span>+</span>
                    </button>
                    <button
                      class="calculator__btn calculator__btn_dec-element"
                      @click="decrease(floors[floor - 1]['bathrooms'])"
                    >
                      <span>-</span>
                    </button>
                  </div>
                </div>
                <div class="calculator__fieldset calculator__fieldset_restrooms">
                  <span class="calculator__label">
                    туалетов:
                  </span>
                  <span class="calculator__field">
                    {{ floors[floor - 1]['restrooms'].current }}
                  </span>
                  <div class="calculator__buttons">
                    <button
                      class="calculator__btn calculator__btn_inc-element"
                      @click="increase(floors[floor - 1]['restrooms'])"
                    >
                      <span>+</span>
                    </button>
                    <button
                      class="calculator__btn calculator__btn_dec-element"
                      @click="decrease(floors[floor - 1]['restrooms'])"
                    >
                      <span>-</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <button
              class="calculator__btn calculator__btn_floor calculator__btn_dec-floor"
              v-if="floorAmount.current > floorAmount.min"
              @click="decreaseFloor"
            >
              <span>-</span>
            </button>
          </div>
          <div class="calculator__list">
            <div class="calculator__list-item">
              <h3 class="calculator__caption">
                Ваш проект включает в себя:
              </h3>
            </div>
            <div class="calculator__list-item">
              <p v-if="boilerWithWaterHeater">
                Котел с бойлером ГВС
              </p>
              <p v-if="!boilerWithWaterHeater">
                Отопительный котёл
              </p>
              <p>
                1&nbsp;компл.
              </p>
            </div>
            <div
              class="calculator__list-item"
              v-if="counters['warm-floor'] > 0"
            >
              <p>
                Тёплый пол:
              </p>
              <p>
                {{ counters['warm-floor'] }}&nbsp;м<sup>2</sup>
              </p>
            </div>
            <div
              class="calculator__list-item"
              v-if="counters.radiators > 0"
            >
              <p>
                Радиаторы:
              </p>
              <p>
                {{ counters.radiators }}&nbsp;компл.
              </p>
            </div>
            <div
              class="calculator__list-item"
              v-if="counters.kitchen > 0"
            >
              <p>
                Оборудование кухни:
              </p>
              <p>
                {{ counters.kitchen }}&nbsp;компл.
              </p>
            </div>
            <div
              class="calculator__list-item"
              v-if="counters.bathrooms > 0"
            >
              <p>
                Оборудование ванной:
              </p>
              <p>
                {{ counters.bathrooms }}&nbsp;компл.
              </p>
            </div>
            <div
              class="calculator__list-item"
              v-if="counters.restrooms > 0"
            >
              <p>
                Оборудование туалета:
              </p>
              <p>
                {{ counters.restrooms }}&nbsp;компл.
              </p>
            </div>
          </div>
          <div class="calculator__order">
            <div class="calculator__amount">
              <h3 class="calculator__caption">
                Всего на сумму:
              </h3>
              <p>{{ summary }}&nbsp;руб.</p>
            </div>
            <simple-button
              class="calculator__order-btn btn__big"
              @click.native="showPopup = true"
            >
              Заказать
            </simple-button>
          </div>
        </div>
      </div>
    </div>
    <popup-form
      from="calc"
      :params="forMail()"
      v-if="showPopup"
      @mail-sent="ifMailSent"
      @close-popup="ifMailSent"
    />
  </section>
</template>

<script>
import HeatingSystems from '@/components/Interface/HeatingSystems/HeatingSystems'
import SimpleButton from '@/components/Interface/SimpleButton/SimpleButton'
import PopupForm from '@/components/Interface/PopupForm/PopupForm'

export default {
  data () {
    return {
      floorAmount: {
        'current': 1,
        'step': 1,
        'min': 1,
        'max': 5
      },
      floors: [
        {
          'number': {
            'current': 1,
            'step': 1,
            'min': 1,
            'max': 5
          },
          'warm-floor': {
            'current': 100,
            'step': 10,
            'min': 0,
            'max': 1000
          },
          'radiators': {
            'current': 5,
            'step': 1,
            'min': 0,
            'max': 20
          },
          'kitchen': {
            'current': 1,
            'step': 1,
            'min': 0,
            'max': 1
          },
          'bathrooms': {
            'current': 1,
            'step': 1,
            'min': 0,
            'max': 5
          },
          'restrooms': {
            'current': 1,
            'step': 1,
            'min': 0,
            'max': 5
          },
          'restroom': [
            {
              'number': 1,
              'installation': false,
              'hygienic-shower': false
            }
          ]
        }
      ],
      counters: {
        'warm-floor': 0,
        'radiators': 0,
        'kitchen': 0,
        'bathrooms': 0,
        'restrooms': 0
      },
      boilerWithWaterHeater: false,
      price: {
        'water-point': 2260,
        'radiator-point': 14185,
        'floor': 2435,
        'air-drop': 2350,
        'warm-floor-1st-floor': 1525,
        'warm-floor-2nd-floor': 1100,
        'warm-floor-collector': 42550,
        'boiler-without-water-heater': 64495,
        'boiler-with-water-heater': 96740,
        'water-heater': 70000,
        'water-connect': 17850
      },
      summary: 0,
      showPopup: false
    }
  },
  created () {
    this.calculation()
  },
  methods: {
    setFloors () {
      if (this.floors.length < +this.floorAmount.current) {
        for (let i = this.floors.length; i < this.floorAmount.current; i++) {
          this.$set(this.floors, i, {
            'number': {
              'current': i,
              'step': 1,
              'min': 1,
              'max': 5
            },
            'warm-floor': {
              'current': 10,
              'step': 10,
              'min': 0,
              'max': 1000
            },
            'radiators': {
              'current': 0,
              'step': 1,
              'min': 0,
              'max': 20
            },
            'kitchen': {
              'current': 0,
              'step': 1,
              'min': 0,
              'max': 1
            },
            'bathrooms': {
              'current': 0,
              'step': 1,
              'min': 0,
              'max': 5
            },
            'restrooms': {
              'current': 0,
              'step': 1,
              'min': 0,
              'max': 5
            },
            'restroom': [
              {
                'number': 1,
                'installation': false,
                'hygienic-shower': false
              }
            ]
          })
        }
      } else {
        this.floors = this.floors.slice(0, +this.floorAmount.current)
      }

      this.calculation()
    },
    setRestroom (floor) {
      if (this.floors[floor - 1]['restroom'].length < +this.floors[floor - 1]['restrooms']) {
        for (let i = this.floors[floor - 1]['restroom'].length; i < +this.floors[floor - 1]['restrooms']; i++) {
          this.$set(this.floors[floor - 1]['restroom'], i, {
            'number': i + 1,
            'installation': false,
            'hygienic-shower': false
          })
        }
      }
    },
    increase (counter) {
      let increment = counter.step
      if (+counter.current < counter.max) counter.current = +counter.current + increment
      this.inputControl(counter)
    },
    decrease (counter) {
      let decrement = counter.step
      if (+counter.current > counter.min) counter.current = +counter.current - decrement
      this.inputControl(counter)
    },
    increaseFloor () {
      let increment = this.floorAmount.step
      let counter = this.floorAmount
      if (+counter.current < counter.max) counter.current = +counter.current + increment
      if (isNaN(counter.current)) counter.current = 0
      if (counter.current > counter.max) counter.current = counter.max
      this.setFloors()
    },
    decreaseFloor () {
      let decrement = this.floorAmount.step
      let counter = this.floorAmount
      if (+counter.current > counter.min) counter.current = +counter.current - decrement
      if (isNaN(counter.current)) counter.current = 0
      if (counter.current < counter.min) counter.current = counter.min
      this.setFloors()
    },
    inputControl (input) {
      input.current = parseInt(input.current)
      if (isNaN(input.current)) input.current = 0
      if (input.current > input.max) input.current = input.max
      if (input.current < input.min) input.current = input.min
      this.calculation()
    },
    calculation () {
      let summary = 0
      let waterPoints = 0
      let counters = {
        'warm-floor': 0,
        'radiators': 0,
        'kitchen': 0,
        'bathrooms': 0,
        'restrooms': 0
      }

      this.floors.forEach((floor) => {
        summary += +floor['warm-floor'].current * (+floor.number === 1 ? this.price['warm-floor-1st-floor'] : this.price['warm-floor-2nd-floor'])
        counters['warm-floor'] += +floor['warm-floor'].current
        summary += +floor['radiators'].current * this.price['radiator-point']
        counters.radiators += +floor['radiators'].current
        summary += +floor['kitchen'].current * this.price['water-point'] * 4
        counters.kitchen += +floor['kitchen'].current
        summary += +floor['bathrooms'].current * this.price['water-point'] * 8
        counters.bathrooms += +floor['bathrooms'].current
        summary += +floor['restrooms'].current * this.price['water-point'] * 5
        counters.restrooms += +floor['restrooms'].current
        if (+floor.number.current > 1) summary += this.price.floor
        if (+floor['warm-floor'].current > 0 && +floor['warm-floor'].current < 21) summary += this.price['air-drop']
        else if (+floor['warm-floor'].current > 20) summary += this.price['warm-floor-collector']
        waterPoints += +floor['kitchen'].current + +floor['bathrooms'].current + +floor['restrooms'].current
      })

      if (waterPoints > 3) {
        summary += this.price['boiler-with-water-heater']
        this.boilerWithWaterHeater = true
      } else {
        summary += this.price['boiler-without-water-heater']
        this.boilerWithWaterHeater = false
      }

      this.summary = summary
      this.counters = counters
    },
    forMail () {
      let string = ''

      if (this.boilerWithWaterHeater) string += 'Котел с бойлером\n'
      else string += 'Котел без бойлера\n'

      if (this.counters['warm-floor'] > 0) string += `Теплые полы: ${this.counters['warm-floor']} кв.м\n`
      if (this.counters.radiators > 0) string += `Радиаторы: ${this.counters.radiators} компл.\n`
      if (this.counters.kitchen > 0) string += 'Кухня: 1 компл.\n'
      if (this.counters.bathrooms > 0) string += `Ванных комнат: ${this.counters.radiators} компл.\n`
      if (this.counters.restrooms > 0) string += `Туалетов: ${this.counters.restrooms} компл.\n`

      console.log(string)

      return string
    },
    ifMailSent () {
      this.showPopup = false
    }
  },
  components: {
    HeatingSystems,
    SimpleButton,
    PopupForm
  }
}
</script>

<style src="./_SectionCalculator.sass" lang="sass"></style>
