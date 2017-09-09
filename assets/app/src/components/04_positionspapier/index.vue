<template>
  <div class="positionspapier">
    <!-- <router-link></router-link>
    <router-link></router-link>
    <router-link></router-link>
    <router-link></router-link>
    <router-view></router-view> -->
    <PapierCollapse>
      <div slot="collapse-header">
        Forderung 1
			</div>
			<div slot="collapse-body">
        <PapierTabs></PapierTabs>
			</div>
    </PapierCollapse>

    
  </div>
</template>

<script>
import PapierTabs from './PapierTabs'
import PapierCollapse from './PapierCollapse'

export default {
  name: 'positionspapier',
  components: {
    PapierTabs,
    PapierCollapse
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
