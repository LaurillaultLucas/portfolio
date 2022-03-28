<template>
      <div class="about">
          <section v-for="aboutPost in aboutPosts" :key="aboutPost.id">
              <h1>{{aboutPost.title.rendered}}</h1>
              <p v-html="aboutPost.content.rendered"></p>
          </section>
      </div>
</template>

<script>

import postService from '../services/postService.js';

export default {
  name: 'About',
  components: {},

  data(){
    return {
      aboutPosts: [],
    };
  },

  async created(){
      console.log("Le composant loadAboutPosts vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.aboutPosts = await postService.loadAboutPosts();
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

        section{
            text-align: center;
            color: #ffff;
            padding: 0rem 2rem 0rem 2rem;
            width: 30%;
            padding: 2rem 2rem 1rem 2rem;
            i{
                font-size: 3rem;
            }
        }
    }

    @media screen and (max-width: 830px){

        div{
            display: flex;
            flex-direction: column;

            section{
                width: 80%;
                margin: auto;
                border-bottom: solid #ffff 0.5px;
                padding: 2rem;
            }

            section:last-child{
            border: none;
            }
        } 
    }
</style>
