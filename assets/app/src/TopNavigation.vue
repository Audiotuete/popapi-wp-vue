<template>
    <div class='navbar'>
        <ul class='link-list-container'>
            <li class='link-list-item'><router-link class="link" :to="{name: 'startseite'}">Startseite</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'idee'}">Idee</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'ueber-uns'}">Über uns</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'positionspapier'}">Positionspapier</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'aktuelles'}">Aktuelles</router-link></li>
            <li class='link-list-item unterzeichen'><router-link class="link" :to="{name: 'unterzeichnen'}">Unterzeichnen</router-link></li>
        </ul> 
    </div>   
</template>

<script>
export default {
  name: 'TopNavigation'
}
</script>

<style lang="scss" scoped>

.navbar {
    display: flex;
    justify-content: center;
    width: 100%;
    box-shadow: 0 0 3px rgba(0, 0, 0, .25);
}
.link-list-container {
    display: flex;
    width: 64rem;
    padding: 0; 
    margin: 0;
    background: green;
}
.link-list-item {
    display: flex;

    &.unterzeichen {
        background: red;
        margin-left: auto;
    }       
}

.link {
    text-decoration: none;
    padding: 1rem 1rem 1rem 1rem
}



</style>

