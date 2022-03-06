<template>
    <div class="work">
        <div>
            <ul  v-for="projectsPost in projectsPosts" :key="projectsPost.id">
                <li>
                    <p v-html="projectsPost.content.rendered"></p>
                    <div>
                        <a href="https://github.com/LaurillaultLucas/portfolio" target="_blank">Voir</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

import postService from '../services/postService.js';

export default {
  components: {},
  name: 'Work',

  data(){
    return {
      projectsPosts: [],
    };
  },

  async created(){
      console.log("Le composant loadProjects vient d'être créer")
         //je suis au niveau de la creation du composant dans son cycle de vie !
      this.projectsPosts = await postService.loadProjects();
  },
}



</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped lang="scss">

div{
   
    ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;

        li{
            position: relative;
            list-style: none;
            height: 360px;
            width: 360px;
            background-color: lightgrey;
            margin: 0.5rem;
            margin: 0;
            border: solid #ffff 0.5px;

            div{
                display: none;
                position: absolute;
                top: 0;
                left: 0;
                height: 360px;
                width: 360px;
                background-color: rgba($color: #000000, $alpha: 0.5);

                a{
                    color: #ffff;
                    text-decoration: none;
                    text-transform: uppercase;
                    padding: 1rem 1.25rem 1rem 1.45rem;
                    border: solid #ffff 1px;
                    font-size: 13px;
                    letter-spacing: 0.2rem;
                    text-align: center;
                    position: relative;
                    top: 47%;
                    left: 40%;
                }
            }
        }
    }

}

    p{
        margin: 0;
    }

    li:hover div{
        display: block;
    }
</style>