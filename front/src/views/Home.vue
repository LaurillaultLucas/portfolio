<template>
  <div class="home">
    <div class="container">
    <Nav />
    <main>
        <div class="description">
            <img class="photo__img" src="https://source.unsplash.com/random/200x200/?portrait" alt="">
            <h1 class="description__title">lucas laurillault</h1>
            <p class="description__paragraph">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis eaque maxime quod, in sit officia sint a omnis incidunt corporis nulla iusto fuga commodi velit, repellendus eveniet aperiam impedit.</p>
        </div>
    </main>
        <footer>
            <Footer class="home-footer"/>
        </footer>
    </div>
  </div>
</template>

<script> 
import Footer from '../components/Footer'
import Nav from '../components/Nav.vue'

export default {
  name: 'Home',
  components: {
    Footer,
    Nav
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
.home{
  display: flex;
  background-color: #414145;
  height: 100vh;
}

.container{
  line-height: 1.5rem;
  margin: auto;
}


header{
  margin-bottom: 3rem;
}

.photo__img{
  display: block;
  margin: 1rem auto;
}

.description{

  text-align: center;
  margin: 0rem 3rem 3rem 3rem;
  color: #ffff;
}

.description__title{
  margin-top: 2.5rem;
  font-size: 26px;
  letter-spacing: 0.2rem;
  text-transform: uppercase;
}

.description__paragraph{
  margin-top: 1.5rem;
  margin-bottom: 2.5rem;
}
</style>
