<template>
  <div class="about">
      <Header />
      <main>
          <article class="presentation">
              <h1>Présentation</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
          </article>
          <article class="skills">
              <h1>Compétences</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
          </article>
          <article class="various">
              <h1>Divers</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
          </article>
      </main>
  </div>
</template>

<script>

import Header from '../components/Header'

export default {
  name: 'About',
  components: {
    Header
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    main{
        
         h1{
            text-align: center;
        }
    }
</style>
