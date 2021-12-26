<template>
  <div class="about">
      <Header />
      <main>
          <article class="front-end">
              <i class="fab fa-js"></i>
              <h1>Front-end</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
              <h2>Langages</h2>
              <ul>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>SASS</li>
                  <li>Javascript</li>
                  <li>VueJS</li>
              </ul>
          </article>
          <article class="back-end">
              <i class="fab fa-php"></i>
              <h1>Back-end</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique provident neque, repudiandae, numquam, beatae sequi aliquam sit ipsam nobis vitae voluptate et qui. Molestiae ab blanditiis provident impedit reprehenderit modi.</p>
          </article>
          <article class="various">
              <i class="fas fa-gamepad"></i>
              <h1>Divers</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
          </article>
      </main>
      <Footer />
  </div>
</template>

<script>

import Header from '../components/Header'
import Footer from '../components/Footer'

export default {
  name: 'About',
  components: {
    Header,
    Footer
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    main{
        box-sizing: border-box;
        display: flex;
        margin: auto;
        margin-bottom: 2.5rem;

        article{
            text-align: center;
            color: #ffff;
            padding: 0rem 2rem 0rem 2rem;
            width: 30%;   
            i{
                font-size: 3rem;
            }

            h1, h2{
                letter-spacing: 0.2rem;
            }
            
            ul{
                padding: 0;
            }
            
            li{
                list-style-type: none;
            }
        }
    }
</style>
