
<template>
  <div id="app">
    <!-- <TopNavigation></TopNavigation> -->
    <PapierContainer/>
  </div>
</template>

<script>
import PapierContainer from './components/positionspapier/PapierContainer'

export default {
  name: 'app',
  components: {
    PapierContainer
  }
}
</script>

<style lang="scss">
@import url('https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');

body {
  padding: 0;
  margin: 0;
}

#app {
  position: relative;
  margin-top: 2rem;
  font-family: 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  p, ol, ul, li {
    line-height: 1.5;
    margin: 1rem;
  }
  ol, ul, li {
    margin: 0.5rem;
  }
}



</style>
