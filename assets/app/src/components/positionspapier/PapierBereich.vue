<template>
  <div>
   <PapierKapitelContainer :bereich="bereich"/>
  </div>
</template>

<script>
import PapierKapitelContainer from './PapierKapitelContainer'

export default {
  name: 'papierBereich',
  components: {
    PapierKapitelContainer
  },
  props: [
    'bereich'
  ]
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>

</style>
