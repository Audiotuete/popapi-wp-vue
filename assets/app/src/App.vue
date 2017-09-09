
<template>
  <div id="app">
    <TopNavigation></TopNavigation>
    <router-view class="page-wrapper"></router-view>
  </div>
</template>

<script>
import TopNavigation from './TopNavigation'

export default {
  name: 'app',
  components: {
    TopNavigation
  }
}
</script>

<style>
@import url('https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');

body {
  padding: 0;
  margin: 0;
}

#app {
  font-family: 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.page-wrapper {
  width: 64rem;
  /* border: 1px solid rgba(0, 0, 0, 0.1); */
}
</style>
