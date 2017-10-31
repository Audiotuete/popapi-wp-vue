<template>
  <div class="tabs-container">
    <div class="tab-button-container" :class="bereich">
      <button class="tab-button"
              v-for="(tab, index) in tabs" :key="tab.id" 
              :class="[{active : currentTab === index }, bereich]"
              @click="currentTab = index"><div class="tab-text" :class="{active : currentTab === index }">{{tab.abschnitt}}</div></button>
    </div>
    <div 
        v-for="(tab, index) in tabs" 
        :key="tab.id" 
        class="tab-content" 
        :class="[{active : currentTab === index }, bereich]">
      <div class="tab-text"  v-html="check_id(tab.id)" v-show="currentTab === tab.id"/>
    </div>
  </div>
</template>

<script>
export default {
  name: 'PapierTabs',
  props: [
    'forderung',
    'bereich'
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

<style lang="scss" scoped>

.tab-text {
  color: #333;
    &.active {
    font-weight: 700;
  }
}

.tab-button-container:nth-child(1) {
  border-left: 1px solid;
}

.tab-button {
  border: 1px solid;
  border-left: none;
  border-bottom: none;
  background: #eee;
  width: 10rem;
  height: 2.25rem;
  font-family: 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  font-size: 1.1rem;

  &.active {
    background: #fff;
    // border-top: 3px solid;
  }
}

.tab-content.active {
  border: 1px solid;
  padding: 2rem;
}



</style>