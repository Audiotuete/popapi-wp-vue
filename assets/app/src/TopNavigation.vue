<template>
    <div class='navbar'>
        <ul class='link-container'>
            <li class='link link-startseite'><router-link :to="{name: 'startseite'}">Startseite</router-link></li>
            <li class='link link-startseite'><router-link :to="{name: 'idee'}">Idee</router-link></li>
            <li class='link link-startseite'><router-link :to="{name: 'ueber-uns'}">Über uns</router-link></li>
            <li class='link link-startseite'><router-link :to="{name: 'positionspapier'}">Positionspapier</router-link></li>
            <li class='link link-startseite'><router-link :to="{name: 'aktuelles'}">Aktuelles</router-link></li>
            <li class='link link-startseite'><router-link :to="{name: 'unterzeichnen'}">Unterzeichnen</router-link></li>
        </ul> 
    </div>   
</template>

<script>
export default {
  name: 'TopNavigation'
}
</script>

<style scoped>

.navbar {
    display: flex;
    justify-content: center;
    width: 100%;
}
.link-container {
    width: 64rem;
    padding: 0; 
    margin: 0;
}
.link {
    display: inline-flex;
}

</style>

