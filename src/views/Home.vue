<template>
  <main class="page home-page main">
    <section-header />
    <section-advantages />
    <section-calculator />
    <section-gift />
    <section-mounting />
    <section-amount />
    <section-partners />
    <section-steps />
    <section-contacts />
    <section-footer />
  </main>
</template>

<script>
import SectionHeader from '@/components/Home/SectionHeader/SectionHeader'
import SectionAdvantages from '@/components/Home/SectionAdvantages/SectionAdvantages'
import SectionCalculator from '@/components/Home/SectionCalculator/SectionCalculator'
import SectionGift from '@/components/Home/SectionGift/SectionGift'
import SectionMounting from '@/components/Home/SectionMounting/SectionMounting'
import SectionAmount from '@/components/Home/SectionAmount/SectionAmount'
import SectionPartners from '@/components/Home/SectionPartners/SectionPartners'
import SectionSteps from '@/components/Home/SectionSteps/SectionSteps'
import SectionContacts from '@/components/Home/SectionContacts/SectionContacts'
import SectionFooter from '@/components/Home/SectionFooter/SectionFooter'

export default {
  name: 'Home',
  components: {
    SectionHeader,
    SectionAdvantages,
    SectionCalculator,
    SectionGift,
    SectionMounting,
    SectionAmount,
    SectionPartners,
    SectionSteps,
    SectionContacts,
    SectionFooter
  }
}
</script>
