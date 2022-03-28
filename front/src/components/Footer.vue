<template>
    <footer class="footer">
        <div class="link">
            <ul v-for="link in links" :key="link.id">
                <li class="first-link"><a target="_blank" :href="link.meta.lienGithub"><i class="fab fa-github-square"></i></a></li>
                <li class="second-link"><a target="_blank" :href="link.meta.lienLinkedin"><i class="fab fa-linkedin"></i></a></li>
                <li class="third-link"><a target="_blank" :href="link.meta.email"><i class="fas fa-square-envelope"></i></a></li>
            </ul>
        </div>
        <div class="info">
            <p class="paragraph-info">Développé avec VueJS et WordPress</p>
        </div>
    </footer>
</template>

<script>

import postService from '../services/postService.js';

export default {
  name: 'Footer',

  data(){
    return {
      links: [],
    };
  },

  async created(){
      console.log("Le composant link vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.links = await postService.loadLink();
  },
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

 .footer{
     display: flex;
     flex-direction: column;
     justify-content: center;
     text-align: center;
     ul{
         padding: 0;
         margin: 0;
         
        li{
            display: inline;
            list-style: none;
            text-decoration: none;

            a{
                color: white;

                i{
                    font-size: 40px;
                }
            }
       }   
    }

    .second-link{
                margin-left: 10px;
        }

    .third-link{
                margin-left: 10px;
        }

    .paragraph-info{
           color: lightgray;
           font-size: 0.8rem;
       }
 }

</style>