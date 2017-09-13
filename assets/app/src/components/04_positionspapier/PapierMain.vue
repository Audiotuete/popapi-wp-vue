<template>
  <div class="positionspapier">
    <!-- <router-link></router-link>
    <router-link></router-link>
    <router-link></router-link>
    <router-link></router-link>
    <router-view></router-view> -->
   <!-- <PapierKapitelContainer kapitel="governance"/> -->
   <PapierKapitelContainer kapitel="betrieb"/>
   <!-- <PapierKapitelContainer kapitel="lehre"/>
   <PapierKapitelContainer kapitel="forschung"/> -->

    
  </div>
</template>

<script>
import PapierKapitelContainer from './PapierKapitelContainer'

export default {
  name: 'positionspapier',
  components: {
    PapierKapitelContainer
  },
  data () {
    return {
      msg: 'Der Reader'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
