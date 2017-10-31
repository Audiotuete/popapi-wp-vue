
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

  $color-governance: #2F52A0;
  $color-betrieb: #238EA5;
  $color-lehre: #F7A723;
  $color-forschung: #F18825;

// @import url('https://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700');
// @font-face {
// 	font-family: 'charterregular';
// 	src: url('../../../fonts/charter_regular-webfont.eot');
// 	src: url('../../../fonts/charter_regular-webfont.eot?#iefix') format('embedded-opentype'),
// 			 url('../../../fonts/charter_regular-webfont.woff') format('woff');
// 	font-weight: normal;
// 	font-style: normal;
// }

body {
  padding: 0;
  margin: 0;
}

textarea, input, button { outline: none; }

#app {

  position: relative;
  margin-top: 2rem;
  margin-bottom: 2rem;
  font-family: 'PT Sans Narrow', Helvetica, Arial, sans-serif;
  display: flex;
  flex-direction: column;
  align-items: center;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;



  .papier-container {
    p {
      margin: 0 0 1rem 0;
      line-height: 1.5;
    }

    ul, ol {
      margin: 0 0 1rem 0;
      line-height: 1.5;
      padding-left: 1rem;
    }

    li {
      margin-left: 1rem;
    }

  }
}



</style>
