

<template>
  <div id="app">
    <TopNavigation></TopNavigation>
    <div class="page-wrapper">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import TopNavigation from './TopNavigation'

export default {
  name: 'app',
  components: {
    TopNavigation: TopNavigation
  }
}
</script>

<style>

body {
  padding: 0;
  margin: 0;
}

#app {
  display: flex;
  flex-direction: column;
  align-items: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.page-wrapper {
  width: 64rem;
  border: 1px solid black;
}
</style>
