<template>
    <div class="wrapper">
      <div class="papier-nav">
        <PapierNavigation/>
      </div>
        <router-view class="papier-container"></router-view>
    </div>
</template>

<script>
import PapierNavigation from './PapierNavigation'

export default {
  name: 'PapierContainer',
  components: {
    PapierNavigation
  },
  data () {
    return {
      msg: 'Der Test'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

  .wrapper {
    position: relative;
    width: 64rem;
  }

  .papier-nav {
    position: absolute;
    left: -12.5rem;
  }
  
  .papier-container {
    width: 64rem;
    border: 1px solid rgba(0, 0, 0, 0.25);
    border-radius: 3px;
    padding: 2rem;
    box-sizing: border-box;
}

</style>
