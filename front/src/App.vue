<template>
  <div id="app">
    <Nav />
      <main>
        <router-view/>
      </main>
    <Footer />
  </div>
</template>

<script>
import Footer from './components/Footer.vue'
import Nav from './components/Nav.vue'

export default {
  name: 'App',
  components:{
    Nav,
    Footer
  },
}
</script>

<style lang="scss">
body{
  background-color: #414145;
  font-family: 'Source Sans Pro',Arial, Helvetica, sans-serif;
  margin: auto;
  max-width: 1200px;
  line-height: 1.5rem;
  letter-spacing: 1px;
}

#app{
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}

main{
  flex: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

li{
  list-style: none;
}

ul{
  padding: 0;
}

h2{
  letter-spacing: 0.2rem;
  margin-top: 3rem;
  font-size: 1.3rem;
}

figure{
  margin: 0;
}

p{
        margin: 0;
}
</style>
