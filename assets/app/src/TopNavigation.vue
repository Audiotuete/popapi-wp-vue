<template>
    <p>Das ist die Einleitung in der Top Navigation </p>
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

