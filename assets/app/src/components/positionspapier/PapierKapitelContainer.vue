<template>
  <div class="kapitel-container">
    <div class="kapitel-titel" :class="bereich">{{this.capitalizeFirstLetter(this.bereich)}}</div>
    
    <div v-if="bereich === 'einleitung'">
      <PapierCollapse v-for="forderung in forderungen" :key="forderung.id">
        <div slot="collapse-header">
          {{forderung.title.rendered}}
        </div>
        <div v-html="dangerousHTML(forderung.content.rendered)" slot="collapse-body"/>
      </PapierCollapse>
    </div>
    
    <div v-else>
      <div class="vorwort" v-html="dangerousHTML(this.vorwort.content.rendered)"/>
      <div class="collapse-container">
        <PapierCollapse v-for="forderung in forderungen" :key="forderung.id" :bereich="bereich">
          <div slot="collapse-header">
            {{forderung.title.rendered}}
          </div>
          <div slot="collapse-body">
            <PapierTabs :forderung="forderung" :bereich="bereich"></PapierTabs>
          </div>
        </PapierCollapse>
      </div>
    </div>

  </div>
</template>

<script>
import axios from 'axios'
import PapierTabs from './PapierTabs'
import PapierCollapse from './PapierCollapse'

export default {
  name: 'PapierKapitelContainer',
  components: {
    PapierTabs,
    PapierCollapse
  },
  props: [
    'bereich'
  ],
  data () {
    return {
      vorwort: {
        content: {
          rendered: 'Loading...'
        }
      },
      forderungen: []
    }
  },
  watch: {
    '$route': function () { this.fetchData(this.bereich) }
  },
  methods: {
    fetchData (bereich) {
      // TODO: Create API module for chaching more effetive
      this.vorwort.content.rendered = ''
      this.forderungen = null
      let v = this
      // axios.get(`http://localhost/wordpress/wp-json/wp/v2/${bereich}?filter[orderby]=title&order=asc`)
      axios.get(`http://www.nachhaltige-hochschulen.de/wp-json/wp/v2/${bereich}?filter[orderby]=date&order=asc`)
        .then(function (response) {
          if (v.bereich !== 'einleitung') {
            v.vorwort = response.data.shift()
          }
          v.forderungen = response.data
        })
    },
    dangerousHTML (input) {
      return input
    },
    capitalizeFirstLetter (string) {
      return string.charAt(0).toUpperCase() + string.slice(1)
    }
  },
  created () {
    this.fetchData(this.bereich)
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.collapse:nth-child(1) {
  border-top: 1.5px solid;
}

.kapitel-titel {
  margin-bottom: 1rem;
  font-size: 3rem;
  font-weight: 700;
}

.kapitel-container {
  flex: 1;
  max-width: 64rem;
}

.vorwort {
  font-family: 'charterregular', Helvetica, Arial, sans-serif;
}


</style>