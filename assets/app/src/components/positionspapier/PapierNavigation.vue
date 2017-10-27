<template>
  <ul class='link-list-container'>  
    <li class='link-list-item'><router-link class="link" :to="{name: 'einleitung'}">Einleitung</router-link></li>
    <li class='link-list-item'><router-link class="link" :to="{name: 'governance'}">Governance</router-link></li>
    <li class='link-list-item'><router-link class="link" :to="{name: 'betrieb'}">Betrieb</router-link></li>
    <li class='link-list-item'><router-link class="link" :to="{name: 'lehre'}">Lehre</router-link></li>
    <li class='link-list-item'><router-link class="link" :to="{name: 'forschung'}">Forschung</router-link></li>
  </ul>   
</template>

<script>

export default {
  name: 'papierNavigation',
  components: {
  },
  data () {
    return {
      msg: 'Der Reader'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss">
  .link-list-container {
    min-width: 12.5rem;
  }

  .link-list-item {
    list-style: none;

    a {
      font-size: 1.5rem;
      color: #000;
      text-decoration: none;
    }
  }



  

</style>
