<template>
  <div class="tabs">
    <div>
      <button class="tab-button"
              v-for="(tab, index) in tabs" :key="tab.id" 
              :class="{active : currentTab === index }"
              @click="currentTab = index">{{tab.abschnitt}}</button>
    </div>
    <div v-for="(tab, index) in tabs" :key="tab.id" class="tab-content">
      <div v-html="check_id(tab.id)" v-show="currentTab === tab.id">

      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PapierTabs',
  props: [
    'forderung'
  ],
  data () {
    return {
      currentTab: 0,
      tabs: [
        {id: 0, abschnitt: 'Dazu gehören'},
        {id: 1, abschnitt: 'Begründung'},
        {id: 2, abschnitt: 'Maßnahmen'}
      ]
    }
  },
  computed: {
    dazu_gehoeren () { return this.forderung.content.rendered },
    begruendung () { return this.forderung._begruendung[0] },
    massnahmen () { return this.forderung._massnahmen[0] }
  },
  methods: {
    check_id (id) {
      if (id === 0) {
        return this.dazu_gehoeren
      } else if (id === 1) {
        return this.begruendung
      }
      return this.massnahmen
    }
  }
}
</script>

<style scoped>
button{
  padding: 10px;
}
button.active{
  background-color: #fff;
}

.tab-button {
  font-family: 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  font-size: 1.1rem;
}

.tab-content div{
  padding: 30px;
  border: 1px solid #ccc;
}
</style>