<template lang="pug">
  .popup
    application-form(
      :formId="'popup_' + from"
      :from="from"
      :params="params"
      @mail-sent="transfer"
      @close-popup="closePopup"
      form-popup
    )
</template>

<script>
import ApplicationForm from '@/components/Interface/ApplicationForm/ApplicationForm'

export default {
  props: {
    from: {
      type: String,
      required: true
    },
    params: {
      type: String,
      default: ''
    }
  },
  methods: {
    transfer () {
      this.$emit('mail-sent')
    },
    closePopup () {
      this.$emit('close-popup')
    }
  },
  components: {
    ApplicationForm
  }
}
</script>

<style lang="scss">
.popup {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 20;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
  width: 100%;
  background-color: #00000088;
  .application-form {
    max-width: 350px;
  }
}
</style>
