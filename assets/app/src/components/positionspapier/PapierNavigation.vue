<template>
  <ul class='link-list-container'>  
    <li class='link-list-item'><router-link class="einleitung" :to="{name: 'einleitung'}">Einleitung</router-link></li>
    <li class='link-list-item'><router-link class="governance" :to="{name: 'governance'}">Governance</router-link></li>
    <li class='link-list-item'><router-link class="betrieb" :to="{name: 'betrieb'}">Betrieb</router-link></li>
    <li class='link-list-item'><router-link class="lehre" :to="{name: 'lehre'}">Lehre</router-link></li>
    <li class='link-list-item'><router-link class="forschung" :to="{name: 'forschung'}">Forschung</router-link></li>
  </ul>   
</template>

<script>

export default {
  name: 'papierNavigation',
  components: {
  },
  data () {
    return {
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang="scss" scoped>
  .link-list-container {
    min-width: 12.5rem;
    padding: 0;
    margin: 0;

    :nth-child(5) {
      border-bottom: 1px solid rgba(0, 0, 0, 0.25);
    }
  }

  .link-list-item {
    display: flex;
    height: 3.625rem;
    list-style: none;
    align-items: center;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.25);
    border-bottom: none;
    border-right: none;
    padding-left: 0.8rem;

    .router-link-exact-active {
      z-index: 10;
      line-height: 3.625rem;
      padding-right: 0.75rem;
      background: white;
    }

    a {
      font-weight: 700;
      width: 11rem;
      line-height: 1;
      font-size: 1.5rem;
      color: #000;
      text-decoration: none;
    }

    .governance {
      color: #2F52A0;
    }
    .betrieb {
      color: #238EA5;
    }
    .forschung {
      color: #F7A723;
    }
    .lehre {
      color: #F18825;
    }
  }

@media (max-width: 1500px) {
  .link-list-container {
    display: flex;
    padding-left: 2rem;
    margin: 0;

    :nth-child(5) {
      border-bottom: 0px;
      border-right: 1px solid rgba(0, 0, 0, 0.25);
  }
}

  .link-list-item {
    display: flex;
    height: 2.225rem;
    list-style: none;
    align-items: center;
    text-align: center;
    border: 1px solid rgba(0, 0, 0, 0.25);
    border-bottom: none;
    border-right: none;
    padding: 0.8rem;

    .router-link-exact-active {
      z-index: 10;
      width: 7rem;
      font-size: 1.7rem;
      line-height: 3.625rem;
      background: white;
      padding: 0;
    }

    a {
      width: 7rem;
      font-weight: 700;
      line-height: 1;
      font-size: 1.5rem;
      color: #000;
      text-decoration: none;
    }
  }
}

</style>
