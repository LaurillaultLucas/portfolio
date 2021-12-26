<template>
    <header class="header">
        <p><router-link class="homeLink" :to="{name: 'home'}"><i class="fas fa-home"></i></router-link></p>
        <Nav />
    </header>
</template>

<script>
import Nav from './Nav.vue'
export default {
  components: { Nav },
  name: 'Header'
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
  p{
        display: block;
        font-size: 2rem;
        text-align: center;
        margin-bottom: 3rem;

        .homeLink{
          color: #ffff;
        }
  }
</style>