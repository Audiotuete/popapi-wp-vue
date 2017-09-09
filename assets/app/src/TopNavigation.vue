<template>
    <div class='navbar'>
        <ul class='link-list-container'>
            <li class='link-list-item'><router-link class="link" :to="{name: 'startseite'}">Startseite</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'idee'}">Idee</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'ueber-uns'}">Über uns</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'positionspapier'}">Positionspapier</router-link></li>
            <li class='link-list-item'><router-link class="link" :to="{name: 'aktuelles'}">Aktuelles</router-link></li>
            <li class='link-list-item unterzeichen'><router-link class="link unterzeichnen" :to="{name: 'unterzeichnen'}">Unterzeichnen</router-link></li>
        </ul> 
    </div>   
</template>

<script>
export default {
  name: 'topNavigation'
}
</script>

<style lang="scss" scoped>

.navbar {
    display: flex;
    justify-content: center;
    font-size: 1.5rem;
    width: 100%;
    height: 4rem;
    box-shadow: 0 0 3px rgba(0, 0, 0, .25);
}
.link-list-container {
    display: flex;
    width: 64rem;
    padding: 0; 
    margin: 0;


}
.link-list-item {
    display: flex;
    box-sizing: border-box;
    transition: all 0.1s ease-in-out;

    &.unterzeichen {
        margin-left: auto;
    }       
}

.link {
    color: #222;
    text-decoration: none;
    padding: 1rem;

    &.router-link-exact-active {
        border-bottom: 8px solid black;
    }

    &.unterzeichnen {
        color: red;
    }
}



</style>

