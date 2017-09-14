<template>
  <div>
    <PapierCollapse v-for="forderung in forderungen" :key="forderung.id">
      <div slot="collapse-header">
        {{forderung.title.rendered}}
			</div>
			<div slot="collapse-body">
        <PapierTabs :forderung="forderung"></PapierTabs>
			</div>
    </PapierCollapse>
  </div>
</template>

<script>
import axios from 'axios'
import PapierTabs from './PapierTabs'
import PapierCollapse from './PapierCollapse'

export default {
  name: 'PapierGovernance',
  components: {
    PapierTabs,
    PapierCollapse
  },
  props: [
    'kapitel'
  ],
  data () {
    return {
      forderungen: []
    }
  },
  mounted: function () {
    // TODO: Create API module for chaching more effetive
    let v = this
    axios.get(`http://localhost/wordpress/wp-json/wp/v2/${this.kapitel}`)
      .then(function (response) {
        v.forderungen = response.data
      })
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>