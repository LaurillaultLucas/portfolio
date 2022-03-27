<template>
    <div class="work">
        <FilterWork />
        <div class="work__link">
            <ul>
                <li v-for="projectsPost in projectsPosts" :key="projectsPost.id">
                    <a :href="projectsPost.meta.github" target="_blank">
                        <img :src="projectsPost._embedded['wp:featuredmedia'][0].media_details.sizes.full.source_url">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>

import postService from '../services/postService.js';
import FilterWork from '../components/FilterWork.vue';

export default {
  components: {
      FilterWork,
  },
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

.work__link{
   
    ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding: 0;

        //li:hover{
            //-webkit-transform: scale(1); /* Safari 3-8 */
            //transform: scale(1.07);
        //}

        li{
            position: relative;
            list-style: none;
            height: 360px;
            width: 360px;
            background-color: lightgrey;
            margin: 0.5rem;
            border: solid #ffff 0.5px;
            overflow: hidden;
            

            img{
                max-width : 100%;
                min-width: 100%;
                height : auto;
                transition: transform .5s;
            }
            }

            img:hover{
                -webkit-transform: scale(1.07); /* Safari 3-8 */
                transform: scale(1.1);
        }
    }
}
</style>