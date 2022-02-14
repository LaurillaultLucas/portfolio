<template>
  <div class="about">
      <div>
          <section class="front-end">
              <i class="fab fa-js"></i>
              <h1>Front-end</h1>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam amet reiciendis iste? Blanditiis, corrupti. Inventore odit velit soluta iure voluptas! Eum doloremque quis dolorem id debitis eligendi rem minus voluptatem.</p>
              <h2>Compétences</h2>
              <ul>
                  <li>HTML</li>
                  <li>CSS</li>
                  <li>SASS</li>
                  <li>Javascript</li>
                  <li>VueJS</li>
              </ul>
          </section>
          <section class="back-end">
              <i class="fab fa-php"></i>
              <h1>Back-end</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique provident neque, repudiandae, numquam, beatae sequi aliquam sit ipsam nobis vitae voluptate et qui. Molestiae ab blanditiis provident impedit reprehenderit modi.</p>
              <h2>Compétences</h2>
              <ul>
                  <li>PHP</li>
                  <li>Wordpress</li>
                  <li>MySQL</li>        
                  <li>MCD</li>
              </ul>
          </section>
          <section class="tools">
              <i class="fas fa-gamepad"></i>
              <h1>Outils</h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique provident neque, repudiandae, numquam, beatae sequi aliquam sit ipsam nobis vitae voluptate et qui. Molestiae ab blanditiis provident impedit reprehenderit modi.</p>
              <h2>Je travail avec</h2>
              <ul>
                  <li>VSCode</li>
                  <li>Github</li>
                  <li>Mac OS/Linux/Windows</li>        
                  <li>Terminal</li>
                  <li>Whimsical</li>
              </ul>
          </section>
      </div>
  </div>
</template>

<script>

import postService from '../services/postService.js';

export default {
  name: 'About',
  components: {},

  data(){
    return {
      loadProjects: [],
    };
  },

  async created(){
      console.log("Le composant PostProject vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.posts = await postService.loadProjects();
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">
    div{
        display: flex;
        flex-direction: initial;
        justify-content: initial;
        align-items: initial;
        margin: auto;
        margin-bottom: 2.5rem;

        section{
            text-align: center;
            color: #ffff;
            padding: 0rem 2rem 0rem 2rem;
            width: 30%;
            padding: 2rem 2rem 1rem 2rem;
            i{
                font-size: 3rem;
            }

            h1{
                letter-spacing: 0.2rem;
                margin-top: 3rem;
            }

            h2{
                letter-spacing: 0.2rem;
                margin-top: 3rem;
                font-size: 1.3rem;
            }
            
            ul{
                padding: 0;
            }
            
            li{
                list-style-type: none;
            }
        }
    }

    @media screen and (max-width: 830px){

        main{
            display: flex;
            flex-direction: column;

            section{
                width: 80%;
                margin: auto;
                border-bottom: solid #ffff 0.5px;
                padding: 2rem;
            }
        }
    }
</style>
