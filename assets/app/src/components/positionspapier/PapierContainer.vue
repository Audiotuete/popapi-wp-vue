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
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">

  .wrapper {
    position: relative;
    width: 100%;
    max-width: 64rem;
  }

  .papier-nav {
    position: absolute;
    left: -12.5rem;
  }

  @media (max-width: 1500px) {
    .papier-nav {
      position:relative;
      left: 0;
    }

  }
  
  .papier-container {
    display: flex;
    min-height: 32rem;
    border: 1px solid rgba(0, 0, 0, 0.25);
    padding: 2rem;
    box-sizing: border-box;
  }

  .governance {
    color: #2F52A0;
    border-color: #2F52A0;
  }
  .betrieb {
    color: #238EA5;
    border-color: #238EA5;

  }
  .forschung {
    color: #F7A723;
    border-color: #F7A723;
}
  .lehre {
    color: #F18825;
    border-color: #F18825;
  }

</style>
