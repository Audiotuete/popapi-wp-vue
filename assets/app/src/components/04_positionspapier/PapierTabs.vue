<template>
  <div class="tabs">
    <div>
      <button v-for="(tab, index) in tabs" :key="tab.id" 
              :class="{active : currentTab === index }"
              @click="currentTab = index">{{tab.abschnitt}}</button>
    </div>
    <div v-for="(tab, index) in tabs" :key="tab.id"  class="tab-content">
      <div v-show="currentTab === tab.id">
        <h1>
          {{tab.name}}
        </h1>
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
      {id: 0, abschnitt: 'Dazu gehören', name: 'What a mess'},
      {id: 1, abschnitt: 'Begründung', name: 'test2'},
      {id: 2, abschnitt: 'Maßnahmen', name: 'test3'}]
    }
  },
  computed: {
    // This is where the magic is going to happen.
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
button{
  padding: 10px;
}
button.active{
  background-color: blue;
}
.tab-content div{
  padding: 30px;
  border: 1px solid #ccc;
}
</style>