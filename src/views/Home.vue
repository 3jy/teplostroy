<template>
  <main class="page home-page main">
    <section-header :link="videoLink" />
    <section-advantages />
    <section-calculator />
    <section-gift />
    <section-mounting />
    <section-amount />
    <section-partners />
    <section-steps />
    <section-testimonials :data="testimonials" />
    <section-contacts />
    <section-footer />
  </main>
</template>

<script>
import Axios from 'axios'
import SectionHeader from '@/components/Home/SectionHeader/SectionHeader'
import SectionAdvantages from '@/components/Home/SectionAdvantages/SectionAdvantages'
import SectionCalculator from '@/components/Home/SectionCalculator/SectionCalculator'
import SectionGift from '@/components/Home/SectionGift/SectionGift'
import SectionMounting from '@/components/Home/SectionMounting/SectionMounting'
import SectionAmount from '@/components/Home/SectionAmount/SectionAmount'
import SectionPartners from '@/components/Home/SectionPartners/SectionPartners'
import SectionSteps from '@/components/Home/SectionSteps/SectionSteps'
import SectionTestimonials from '@/components/Home/SectionTestimonials/SectionTestimonials'
import SectionContacts from '@/components/Home/SectionContacts/SectionContacts'
import SectionFooter from '@/components/Home/SectionFooter/SectionFooter'

export default {
  name: 'Home',
  data () {
    return {
      details: [],
      testimonials: [],
      dUrl: 'https://test.teplostroy.ooo/api/v1/details/',
      tUrl: 'https://test.teplostroy.ooo/api/v1/testimonials/',
      videoLink: ''
    }
  },
  components: {
    SectionHeader,
    SectionAdvantages,
    SectionCalculator,
    SectionGift,
    SectionMounting,
    SectionAmount,
    SectionPartners,
    SectionSteps,
    SectionTestimonials,
    SectionContacts,
    SectionFooter
  },
  async created () {
    const { data: testimonials } = await Axios.get(this.tUrl, { await: true })
    this.testimonials = [...testimonials.sort((a, b) => Number(b.id) - Number(a.id))]

    this.videoLink = testimonials
      .sort((a, b) => Number(b.id) - Number(a.id))
      .find(testimonial => testimonial.video !== '').video
  }
}
</script>
